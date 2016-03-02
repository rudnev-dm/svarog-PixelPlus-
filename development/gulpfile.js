"use strict"

var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var newer = require('gulp-newer');
var browserSync = require('browser-sync').create();
var del = require('del');
var debug = require('gulp-debug');

gulp.task('styles', function() {
  return gulp.src('frontend/styles/main.scss')
  .pipe(debug({title : 'src'}))
  .pipe(sourcemaps.init())
  .pipe(debug({title: 'sourcemaps'}))
  .pipe(sass())
  .pipe(debug({title : 'sass'}))
  .pipe(autoprefixer())
  .pipe(debug({title: 'autoprefixer'}))
  .pipe(sourcemaps.write('.'))
  .pipe(debug({title: 'sourcemaps'}))
  .pipe(gulp.dest('public/css'));
});

gulp.task('clean', function() {
  return del('public');
});

gulp.task('assets', function() {
  return gulp.src('frontend/assets/**', {since: gulp.lastRun('assets')})
  .pipe(debug({title: 'assets'}))
  .pipe(newer('public'))
  .pipe(debug({title: 'public'}))
  .pipe(gulp.dest('public'));
})

gulp.task('build', gulp.series('clean', gulp.parallel('styles', 'assets')));

gulp.task('watch', function() {
  gulp.watch('frontend/styles/**/*.*', gulp.series('styles'));
  gulp.watch('frontend/assets/**/*.*', gulp.series('assets'));
});

gulp.task('server', function() {
  browserSync.init({
    server: 'public'
  });
  browserSync.watch('public/**/*.*').on('change', browserSync.reload);
});

gulp.task('dev',
  gulp.series('build', gulp.parallel('watch', 'server'))
);
