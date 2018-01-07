var gulp = require('gulp');
var sass = require('gulp-sass');
var browsersync = require('browser-sync').create();

gulp.task('sass', function () {
    return gulp.src('assets/scss/**/*.scss')
    .pipe(sass({
        outputStyle: 'compressed'
    }).on('error', sass.logError))
    .pipe(gulp.dest(''))
    .pipe(browsersync.reload({
        stream: true
    }))
});

gulp.task('browsersync', function () {
    browsersync.init({
        proxy: 'ingrid.wordpress.local/'
    })
});

gulp.task('watch', ['sass', 'browsersync'], function () {
    gulp.watch('assets/scss/**/*.scss', ['sass']);
    gulp.watch('assets/js/**/*.js', browsersync.reload);
});