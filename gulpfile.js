const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass")); // Pass require('sass') as an argument
const concat = require("gulp-concat");

// Define a task to compile Sass to CSS from Bootstrap
gulp.task("bootstrap", function () {
  return gulp
    .src("node_modules/bootstrap/scss/**/*.scss")
    .pipe(sass().on("error", sass.logError))
    .pipe(concat("style.css")) // Concatenate Bootstrap styles into style.css
    .pipe(gulp.dest("./")); // Output to the root directory
});

// Define a task to compile your custom Sass
gulp.task("styles", function () {
  return gulp
    .src("sass/*.scss") // Source directory for your Sass files
    .pipe(sass().on("error", sass.logError))
    .pipe(gulp.dest("./")); // Output to the root directory
});

// Define a task to watch for changes in Sass files
gulp.task("watch", function () {
  gulp.watch("sass/*.scss", gulp.series("styles"));
  gulp.watch("node_modules/bootstrap/scss/**/*.scss", gulp.series("bootstrap"));
});

// Define a default task
gulp.task("default", gulp.series("bootstrap", "styles", "watch"));
