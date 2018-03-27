var gulp = require('gulp');
var minifyCss = require('gulp-minify-css');
var sass = require('gulp-sass');
var notify = require('gulp-notify');
var browserSync = require('browser-sync');
var reload = browserSync.reload;
var path = {
    css: ['scss/**/*.scss']
};
gulp.task('sass', function(){
    gulp.src('scss/style.scss')
        .pipe(sass())
        .pipe(minifyCss())
        .pipe(gulp.dest(''))
        .pipe(reload({stream:true}))
        .pipe(notify('SCSS compile done'))
});
gulp.task('browserSync', function() {
    browserSync({
        proxy: "sh.local:",
        host: 'sh.local',
        open: 'external',
        port: 80,
        notify: false
    });
});
gulp.task('watcher',function() {
    gulp.watch(path.css, ['sass']);
});
gulp.task('default', ['watcher', 'browserSync']);