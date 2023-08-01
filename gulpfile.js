var gulp = require('gulp');

var sass = require('gulp-sass'),
    concat  = require('gulp-concat'),
    uglify  = require('gulp-uglify-es').default,
    browserSync = require('browser-sync'),
    sourcemaps = require('gulp-sourcemaps'),
    del = require('del'),
    notify = require('gulp-notify'),
    plumber = require('gulp-plumber'),
    autoprefixer= require('autoprefixer'),
    postcss = require('gulp-postcss'),
    strip = require('gulp-strip-comments'),
    fileInclude = require('gulp-file-include'),
    rename = require('gulp-rename'),
    beepBeep = require('beepbeep');

// Gracefully handle Gulp errors
var onError = function( err ) {
    beepBeep();
    console.log( 'An error occurred:', err.message );
    browserSync.notify(err.message, 3000);
    notify.onError({
        title:    "Gulp",
        subtitle: "Gulp Error",
        message:  err.message,
        sound:    "Beep"
    })(err);
    this.emit('end');
};

// Configure Browsersync
gulp.task('browser-sync', function() {
    browserSync.init(null, {
        proxy: "http://test-wordpress.locl",
        online: true,
    });
});

gulp.task('sass', function() {
    return gulp.src('src/sass/*.scss')
        .pipe(sass(
            {outputStyle: 'compressed'}
        ))
        .on('error', onError)
        .pipe(gulp.dest('css'))
        .pipe(notify({
            title: 'Gulp',
            subtitle: 'success',
            message: 'Step 1! Sass turned into CSS!'
        }));
});

gulp.task('css', function() {
    return gulp.src([
        'css/style-main.css'
    ])
        .pipe(plumber())
        .pipe(concat('style-main.min.css'))
        .pipe(postcss([ autoprefixer() ]))
        .pipe(sourcemaps.write('.'))
        .pipe(browserSync.stream())
        .pipe(gulp.dest('css'))
        .pipe(notify({
            title: 'Gulp',
            subtitle: 'success',
            message: 'Step 2! Now  CSS autoprefixed and moved to theme css folder!'
        }));
});

// Concatenate & Minify JS
gulp.task('concat_scripts', function() {
    return gulp.src([
        'src/js/concat/*.js'
    ])
        .on('error', onError)
        .pipe(strip())
        .pipe(concat('site-main.min.js'))
        .pipe(plumber())
        .pipe(uglify())
        .pipe(gulp.dest('js/client'))
        .pipe(notify({
            title: 'Gulp',
            subtitle: 'success',
            message: 'Step 3! Now JS Compiled and moved to theme js folder!'
        }));
});

// Minify Directly JS
gulp.task('directly_scripts', function() {
    return gulp.src([
        'src/js/directly/*.js'
    ])
        .on('error', onError)
        .pipe(fileInclude())
        .pipe(strip())
        .pipe(plumber())
        .pipe(uglify())
        .pipe(rename({ extname: '.min.js' }))
        .pipe(gulp.dest('js/client'))
        .pipe(notify({
            title: 'Gulp',
            subtitle: 'success',
            message: 'Step 4! Now Directly JS Compiled and moved to theme js folder!'
        }));
});

// Browsersync task
gulp.task('bs-reload', function () {
    browserSync.reload();
});

function page_reload(done) {
    browserSync.reload();
    done();
}

// Task to delete target build folder
gulp.task('clean_js', function() {
    return del(['js/client/**', '!js']);
});

// Task to delete target build folder
gulp.task('clean_css', function() {
    return del(['css/**', '!css']);
});

// Watch tasks
gulp.task('watch', gulp.series( function(){
    browserSync.init(null, {
        proxy: "http://test-wordpress.locl",
        online: true,
    });

    gulp.watch("src/sass/**/*.scss", gulp.series("sass", "css",page_reload));
    gulp.watch("src/js/concat/*.js", gulp.series("concat_scripts", page_reload));
    gulp.watch("src/js/directly/*.js", gulp.series("directly_scripts", page_reload));
    gulp.watch("images/**/*.*", gulp.series(page_reload));
    gulp.watch("*.php", gulp.series(page_reload));
}));

gulp.task('default', gulp.series("clean_css", "clean_js", "sass", "css", "concat_scripts", "directly_scripts", "watch"));