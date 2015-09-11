var gulp = require('gulp');
var sass = require('gulp-ruby-sass');

var sourcemaps = require('gulp-sourcemaps');
var minifyCss = require('gulp-minify-css');
var watch = require('gulp-watch');

var rename = require('gulp-rename');

var concat = require('gulp-concat');
var uglify = require('gulp-uglify');



var babel = require('gulp-babel');
var gutil = require('gulp-util');

var path = {
  app: 'app/Resources',
  bower_components: './bower_components'
};




/**
* gulp-ruby-sass
* @see https://www.npmjs.com/package/gulp-ruby-sass
*
* Compile Sass to CSS using Compass.
*/
gulp.task('sass', function() {

  return sass(path.app + '/scss', { compass: true, style: 'compressed', sourcemap: true })
    .on('error', function (err) {
      console.error('Error!', err.message);
    })
    .pipe(minifyCss({keepSpecialComments:0}))
    .pipe(sourcemaps.write())
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('web/css/'));
});










/**
* gulp-babel
* @see https://www.npmjs.com/package/gulp-babel
*
* Turn ES6 code into vanilla ES5 with no runtime required
*/
gulp.task('babel', function () {
  return gulp.src(path.app + '/js/**/*.js')
    .pipe(sourcemaps.init())
    .pipe(babel())
    .pipe(concat('babel.js'))
    .pipe(uglify({mangle: true}).on('error', gutil.log))
    .pipe(rename({suffix: '.min'}))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('web/js/'));
});

gulp.task('default', [



'babel',



'sass'
]);
