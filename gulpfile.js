// Gulp tasks
var gulp = require('gulp'),
    prefix = require('gulp-autoprefixer'),
    minifyCSS = require('gulp-minify-css'),
    sass = require('gulp-sass'),
    size = require('gulp-size'),
    rename = require('gulp-rename');
    browserSync = require('browser-sync').create();


gulp.task('sass', function() {
  return gulp.src('app/scss/**/*.scss') // Gets all files ending with .scss in app/scss
    .pipe(sass())
    .pipe(gulp.dest('app/css'))
    .pipe(browserSync.reload({
      stream: true
    }))
});

gulp.task('browserSync', function() {
  browserSync.init({
    server: {
      baseDir: 'app'
    },
  })
})


gulp.task('watch', ['browserSync', 'sass'], function (){
  gulp.watch('app/scss/**/*.scss', ['sass']);
  // Other watchers
});


// PINTSIZE STUFF
// Build Pintsize scss into css
gulp.task('build', function(){
  gulp.src('./src/pintsize.scss')
      .pipe(sass())
      .pipe(size({gzip: false, showFiles: true, title:'un-prefixed css'}))
      .pipe(size({gzip: true, showFiles: true, title:'un-prefixed gzipped css'}))
      .pipe(prefix())
      .pipe(size({gzip: false, showFiles: true, title:'prefixed css'}))
      .pipe(size({gzip: true, showFiles: true, title:'prefixed css'}))
      .pipe(gulp.dest('./dist'))
      .pipe(minifyCSS())
      .pipe(rename('pintsize.min.css'))
      .pipe(gulp.dest('./dist'))
      .pipe(size({gzip: false, showFiles: true, title:'minified css'}))
      .pipe(size({gzip: true, showFiles: true, title:'minified css'}))
});
