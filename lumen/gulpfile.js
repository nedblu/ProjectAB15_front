var gulp = require('gulp');
var uglify = require('gulp-uglify');
var minifyCss = require('gulp-minify-css');

// css compressor
gulp.task('compress-css', function() {
  return gulp.src('resources/assets/css/*.css')
    .pipe(minifyCss({compatibility: 'ie8'}))
    .pipe(gulp.dest('../public_html/css/'));
});

// js compressor
gulp.task('compress-js', function() {
  return gulp.src('resources/assets/js/*.js')
    .pipe(uglify())
    .pipe(gulp.dest('../public_html/js/'));
});

gulp.task('default', ['compress-css', 'compress-js']);
