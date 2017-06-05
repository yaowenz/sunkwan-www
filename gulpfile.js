var gulp = require('gulp'),
	sass = require('gulp-sass'),
	autoprefixer = require('gulp-autoprefixer'),
	sourcemaps = require('gulp-sourcemaps');

gulp.task('sass', function () {
	var folders = ['wp-content/themes/sunkwan'];
	for(var i in folders) {
		gulp.src(['./' + folders[i] + '/*.scss'])
			.pipe(sourcemaps.init())
			.pipe(autoprefixer())
			.pipe(sass().on('error', sass.logError))
			.pipe(sourcemaps.write('./'))
			.pipe(gulp.dest('./' + folders[i]));
	}
});

gulp.task('watch', function () {
	gulp.watch('./wp-content/themes/sunkwan/*.scss', ['sass']);	
});