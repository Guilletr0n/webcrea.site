const gulp = require('gulp');
const i18n = require('gulp-html-i18n');
const sass = require('gulp-sass');

sass.compiler = require('node-sass');


var paths = {
  styles: './styles/*.scss',
  locales: './templates/*.php'
};

gulp.task('localize', function() {
  var dest  = './public';
  var source = './templates/*.php';

  return gulp.src(source)
    .pipe(i18n({
      langDir: './locales',
      trace: false
    }))
    .pipe(gulp.dest(dest));
});

gulp.task('default', function() {
  var dest  = './public';
  var source = './templates/*.php';

  return gulp.src(source)
    .pipe(i18n({
      langDir: './locales',
      trace: false
    }))
    .pipe(gulp.dest(dest));
});

gulp.task('scss', function() {
  var source = "./styles/*.scss";
  var destination = "./public/assets/css";

  return gulp.src(source)
  .pipe(scss(
    {"bundleExec": false}
  )).pipe(gulp.dest(destination));
});

gulp.task('sass', function () {
  return gulp.src('./styles/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./public/assets/css'));
});

gulp.task('sass:watch', function () {
  gulp.watch('./style/*.scss', ['sass']);
});

gulp.task('watch', (done) => {
  gulp.watch(paths.styles, {ignoreInitial:false}, gulp.series('sass'));
  gulp.watch(paths.locales, {ignoreInitial:false}, gulp.series('localize'));
  done();
});
