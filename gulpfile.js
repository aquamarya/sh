var gulp = require('gulp');
var minifyCss = require('gulp-minify-css');
var sass = require('gulp-sass');
var notify = require('gulp-notify');
var browserSync = require('browser-sync');
var reload = browserSync.reload;
var path = {
    css: ['scss/style.scss']
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
        // server: {
        //     baseDir: ""
        // },
        proxy: {
            target: "http://sh.local"
        },
        notify: true
    });
});
gulp.task('watcher',function() {
    gulp.watch(path.css, ['sass']);
});
gulp.task('default', ['watcher', 'browserSync']);