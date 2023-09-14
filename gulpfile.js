const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const concat = require("gulp-concat");
const terser = require("gulp-terser");

// Define a task to compile Sass to CSS from Bootstrap
gulp.task("bootstrap", function () {
  return gulp
    .src("node_modules/bootstrap/scss/**/*.scss")
    .pipe(sass().on("error", sass.logError))
    .pipe(concat("style.css"))
    .pipe(gulp.dest("./"));
});

// Define a task to compile JavaScript from Bootstrap
gulp.task("bootstrap-js", function () {
  return gulp
    .src([
      "node_modules/bootstrap/dist/js/bootstrap.js",
      // Add any other Bootstrap JavaScript files you need here
    ])
    .pipe(concat("main.js"))
    .pipe(terser())
    .pipe(gulp.dest("./js")); // Output to the "js" folder
});

// Define a task to compile your custom Sass
gulp.task("styles", function () {
  return gulp
    .src("sass/*.scss")
    .pipe(sass().on("error", sass.logError))
    .pipe(gulp.dest("./"));
});

// Define a task to watch for changes in Sass files
gulp.task("watch", function () {
  gulp.watch("sass/*.scss", gulp.series("styles"));
  gulp.watch("node_modules/bootstrap/scss/**/*.scss", gulp.series("bootstrap"));
  gulp.watch(
    "node_modules/bootstrap/dist/js/bootstrap.js",
    gulp.series("bootstrap-js")
  );
  // Add other JavaScript files from Bootstrap to watch if needed
});

// Define a default task
gulp.task(
  "default",
  gulp.series("bootstrap", "bootstrap-js", "styles", "watch")
);
