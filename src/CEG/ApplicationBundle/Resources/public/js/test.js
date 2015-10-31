var gulp = require('gulp'),
    jshint = require('gulp-jshint');

gulp.task('default',['watch']);

gulp.task('jshint',function () {
  return gulp.src('src/CEG/**/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter('jshint-stylish'));
});

gulp.task('buildCss',function () {
  return gulp.src('src/CEG/**/*.sass')
        .pipe(sass())
        .pipe(gulp.dest('src/CEG/ApplicationBundle/Resources/public/css'));
});
gulp.task('watch',function () {
   gulp.watch('src/CEG/**/*.js',['jshint']);
   gulp.watch('src/CEG/**/*.sass',['buildCSS']);

});
