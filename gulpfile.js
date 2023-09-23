const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const concat = require('gulp-concat');
const terser = require('gulp-terser');
const browserSync = require('browser-sync').create();

// Import Bootstrap styles
const bootstrapSass = 'node_modules/bootstrap/scss/bootstrap.scss';

// Import Bootstrap JavaScript
const bootstrapJs = 'node_modules/bootstrap/dist/js/bootstrap.bundle.js';

// Compile Bootstrap Sass to CSS
gulp.task('bootstrap', function () {
	return gulp.src(bootstrapSass).pipe(sass().on('error', sass.logError)).pipe(concat('style.css')).pipe(gulp.dest('./'));
});

// Compile Bootstrap JavaScript
gulp.task('bootstrap-js', function () {
	return gulp
		.src([bootstrapJs, 'js/scripts/*.js'])
		.pipe(concat('main.js'))
		.pipe(
			terser().on('error', function (e) {
				console.log(e);
			})
		)
		.pipe(gulp.dest('./js'));
});

// Compile custom Sass
gulp.task('styles', function () {
	return gulp.src('sass/*.scss').pipe(sass().on('error', sass.logError)).pipe(gulp.dest('./'));
});

// Start local development server
gulp.task('server', function () {
	browserSync.init({
		server: {
			baseDir: './',
		},
	});
});

// Watch for changes and trigger a reload
gulp.task('watch', function () {
	gulp.watch('sass/**/*.scss', gulp.series('styles')).on('change', browserSync.reload);
	gulp.watch('node_modules/bootstrap/scss/**/*.scss', gulp.series('bootstrap')).on('change', browserSync.reload);
	gulp.watch('js/scripts/*.js', gulp.series('bootstrap-js')).on('change', browserSync.reload);
	gulp.watch('node_modules/bootstrap/dist/js/**/*.js', gulp.series('bootstrap-js')).on('change', browserSync.reload);
});

// Define a default task that includes "serve"
gulp.task('default', gulp.series('bootstrap', 'bootstrap-js', 'styles', gulp.parallel('server', 'watch')));
