// var gulp = require('gulp');
// var sass = require('gulp-sass');
// var plumber = require('gulp-plumber');
// var gutil = require('gulp-util');
// var cleanCSS = require('gulp-clean-css');
// var rename = require('gulp-rename');
// var sourcemaps = require('gulp-sourcemaps');
// var browserSync = require('browser-sync').create();
//
// var onError = function(err) {
// 	console.log('An error occurred:', gutil.colors.magenta(err.message));
// 	gutil.beep();
// 	this.emit('end');
// };
//
// gulp.task('browser-sync', function(){
// 	browserSync.init({
// 		proxy: "http://localhost:8888/webdev5_imgur/",
// 		files: ["*.php"]
// 		// server: {
// 		// 	baseDir: './'
// 		// }
// 	});
// });
//
// gulp.task('minify-css', function(){
// 	return gulp.src('assets/scss/*.scss')
// 	.pipe(plumber({errorHandler: onError}))
// 	.pipe(sourcemaps.init())
// 	.pipe(sass())
// 	.pipe(cleanCSS({}))
// 	.pipe(sourcemaps.write())
// 	.pipe(rename(function(path) {
// 		path.extname = '.min.css'
// 	}))
// 	.pipe(gulp.dest('assets/css'));
// });
//
// gulp.task('scss', function(){
// 	return gulp.src('assets/scss/*.scss')
// 	.pipe(plumber({errorHandler: onError}))
// 	.pipe(sourcemaps.init())
// 	.pipe(sass())
// 	.pipe(sourcemaps.write())
// 	.pipe(gulp.dest('assets/css'))
// 	.pipe(browserSync.stream());
// });
//
// gulp.task('server', ['scss', 'browser-sync'], function() {
// 	gulp.watch('assets/scss/**/*.scss', ['scss', 'minify-css']);
// 	gulp.watch(['**/*.php', 'assets/css/**/*.css']).on('change', browserSync.reload);
// })
//
// gulp.task('watch', function(){
// 	gulp.watch('assets/scss/*.scss', ['scss', 'minify-css']);
// });
//
// gulp.task('default', ['scss', 'minify-css']);
//
var gulp = require('gulp');
var sass = require('gulp-sass');
var plumber = require('gulp-plumber');
var gutil = require('gulp-util');
var cleanCSS = require('gulp-clean-css');
var rename = require('gulp-rename');
var sourcemaps = require('gulp-sourcemaps');
var browserSync = require('browser-sync').create();

var sourceSCSS = 'src/scss/**/*.scss';
var cssOutput = 'assets/css';

var onError = function(err) {
	console.log('An error occurred:', gutil.colors.magenta(err.message));
	gutil.beep();
	this.emit('end');
};

gulp.task('browser-sync', function(){
	browserSync.init({
		proxy: "http://localhost:8888/webdev5_imgur/",
 		files: ["*.php"]
	});
});

gulp.task('minify-css', function(){
	return gulp.src(sourceSCSS)
		.pipe(plumber({errorHandler: onError}))
		.pipe(sourcemaps.init())
		.pipe(sass())
		.pipe(cleanCSS({}))
		.pipe(sourcemaps.write())
		.pipe(rename(function(path) {
			path.extname = '.min.css'
		}))
		.pipe(gulp.dest(cssOutput));
});

gulp.task('scss', function(){
	return gulp.src(sourceSCSS)
		.pipe(plumber({errorHandler: onError}))
		.pipe(sourcemaps.init())
		.pipe(sass())
		.pipe(sourcemaps.write())
		.pipe(gulp.dest(cssOutput))
		.pipe(browserSync.stream());
});

gulp.task('server', ['scss', 'browser-sync'], function() {
	gulp.watch(sourceSCSS, ['scss', 'minify-css']);
	gulp.watch(['**/*.php', cssOutput + '/**/*.css']).on('change', browserSync.reload);
})

gulp.task('watch', function(){
	gulp.watch(sourceSCSS, ['scss', 'minify-css']);
});

gulp.task('default', ['scss', 'minify-css']);