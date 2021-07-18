var gulp = require('gulp');
var sass = require('gulp-sass');
var cleanCSS = require('gulp-clean-css');
var sourcemaps = require('gulp-sourcemaps');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var newer = require('gulp-newer');
var imagemin = require('gulp-imagemin');
var jpegtran = require('imagemin-jpegtran')
var inject = require('gulp-inject');
var htmlmin = require('gulp-htmlmin');
var webserver = require('gulp-webserver');
var rev = require('gulp-rev');
var del = require('del');
var cacheBuster = require('gulp-cache-bust');
var Fontmin = require('fontmin');
var phpMinify = require('@cedx/gulp-php-minify');

//Convert all sass file to css
gulp.task('pack-sass', function () {
    return gulp.src('./dev/sass/style.scss')
        .pipe(sass())
        .pipe(cleanCSS({ compatibility: 'ie8' }))
        .pipe(gulp.dest('../themes/simpleweb/css/'))
});

//Minify all js to js/minify
gulp.task('pack-js', function () {
    return gulp.src('./dev/js/*.js')
        .pipe(concat('bundle.js'))
        .pipe(uglify())
        .pipe(gulp.dest('../themes/simpleweb/js/'))
});

// Minify any new images
gulp.task('pack-images', function () {
    return gulp.src('./dev/pre-images/*')
        .pipe(newer('../themes/simpleweb/images/'))
        .pipe(imagemin({
            interlaced: true,
            progressive: true,
            optimizationLevel: 5,
            svgoPlugins: [{ removeViewBox: true }],
            use: [jpegtran()]
        }))
        .pipe(gulp.dest('../themes/simpleweb/images'));
});

//Pack folder fonts
gulp.task('pack-fonts', function () {
    return gulp.src('./dev/fonts/*.WOFF')
        .pipe(gulp.dest('../themes/simpleweb/fonts'))
})

//Whenever is a change code on scss then automatically excecute the default task and convert css
gulp.task('watch', function () {
    gulp.watch('./dev/sass/*.scss', gulp.parallel(['pack-sass']))
    gulp.watch('./dev/js/*.js', gulp.parallel(['pack-js']))
    gulp.watch('./dev/pre-images/*', gulp.parallel(['pack-images']))
});

//By default when we type gulp on cmd convert the scss with this method here:
gulp.task('default', gulp.series(['pack-js', 'pack-sass', 'pack-images', 'pack-fonts', 'watch']));