const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const concat = require('gulp-concat');
const terser = require('gulp-terser');
const browserSync = require('browser-sync').create(); // Include BrowserSync

// Define a task to compile Sass to CSS from Bootstrap
gulp.task('bootstrap', function () {
  return gulp.src('node_modules/bootstrap/scss/**/*.scss').pipe(sass().on('error', sass.logError)).pipe(concat('style.css')).pipe(gulp.dest('./'));
});

// Define a task to compile JavaScript from Bootstrap
gulp.task('bootstrap-js', function () {
  return gulp
    .src([
      'node_modules/bootstrap/dist/js/bootstrap.bundle.js', // Use the bootstrap.bundle.js file
      'js/scripts/*.js', // Add any other custom JavaScript files you need here
    ])
    .pipe(concat('main.js'))
    .pipe(terser())
    .pipe(gulp.dest('./js')); // Output to the "js" folder
});

// Define a task to compile the custom Sass
gulp.task('styles', function () {
  return gulp.src('sass/*.scss').pipe(sass().on('error', sass.logError)).pipe(gulp.dest('./'));
});

// Define a task to start the local development server with BrowserSync
gulp.task('serve', function () {
  browserSync.init({
    server: {
      baseDir: './', // Serve files from the root directory
    },
  });

  // Watch for changes and trigger a reload
  gulp.watch('sass/**/*.scss', gulp.series('styles')).on('change', browserSync.reload);
  // gulp.watch('sass/site/*.scss', gulp.series('styles')).on('change', browserSync.reload);
  gulp.watch('node_modules/bootstrap/scss/**/*.scss', gulp.series('bootstrap')).on('change', browserSync.reload);
  gulp.watch('js/scripts/*.js', gulp.series('bootstrap-js')).on('change', browserSync.reload);
  gulp.watch('node_modules/bootstrap/dist/js/**/*.js', gulp.series('bootstrap-js')).on('change', browserSync.reload);

  // Add other JavaScript files from Bootstrap to watch if needed
});

// Define a default task that includes "serve"
gulp.task('default', gulp.series('bootstrap', 'bootstrap-js', 'styles', 'serve'));
