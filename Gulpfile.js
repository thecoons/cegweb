var gulp = require('gulp'),
    jshint = require('gulp-jshint'),
    less = require('gulp-less'),
    path = require('path'),
    sass = require('gulp-sass');

gulp.task('default',['watch']);

gulp.task('sass',function(){
  return gulp.src('src/CEG/ApplicationBundle/Resources/public/sass/**.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('src/CEG/ApplicationBundle/Resources/public/css/'));

});

gulp.task('jshint',function () {
  return gulp.src('src/CEG/**/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter('jshint-stylish'));
});

gulp.task('less', function () {
  return gulp.src('src/CEG/ApplicationBundle/Resources/public/less/*.less')
    .pipe(less({
      paths: [ path.join(__dirname, 'less', 'includes') ]
    }))
    .pipe(gulp.dest('src/CEG/ApplicationBundle/Resources/public/css/'));
});

gulp.task('watch',function () {
   gulp.watch('src/CEG/**/*.js',['jshint']);
   gulp.watch('src/CEG/**/*.less',['less']);
   gulp.watch('src/CEG/**/*.scss'['sass']);
});
