var gulp = require('gulp');
var sass = require('gulp-ruby-sass');
var minifyCss = require('gulp-minify-css');
var rename = require('gulp-rename');

/* 样式编译 */
gulp.task('sass', function() {
	return sass('source/index.scss')
	.on('error', sass.logError)
	.pipe(gulp.dest('dist'))
	.pipe(rename({suffix:'.min'}))
	.pipe(minifyCss())
	.pipe(gulp.dest('dist'));
});

/* 默认任务 */
gulp.task('default', function() {
	gulp.start('sass');
});

/* 监听 */
gulp.task('watch', function() {
	gulp.watch('source/index.scss',['sass']);
});