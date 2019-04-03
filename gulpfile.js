const gulp = require('gulp');
const browserSync = require('browser-sync').create();
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');

// Configuration file to keep your code DRY
var cfg = require('./gulpconfig.json');
var paths = cfg.paths;

// Compile sass
gulp.task('sass', () => {
  return gulp
    .src(paths.sass + '/*.scss')
    .pipe(sass({ outputStyle: 'compressed' }))
    .pipe(autoprefixer('last 2 versions'))
    .pipe(gulp.dest(paths.css));
});

// Watch & Serve
gulp.task('serve', ['sass'], () => {
  //gulp.watch(['scss/*.scss'], ['sass']);
  gulp.watch(paths.sass + '/**/*.scss', ['sass']);
  browserSync.init(cfg.browserSyncWatchFiles, cfg.browserSyncOptions);
});

// Default task
gulp.task('default', ['serve']);
