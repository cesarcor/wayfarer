const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync').create();

function style(){
    return gulp.src('./sass/**/*.scss')
    .pipe(sass())
    .pipe(gulp.dest('./'))
    .pipe(browserSync.stream());
}

function watch(){
    gulp.watch('./sass/**/*.scss', style);
}

exports.style = style;
exports.watch = watch;