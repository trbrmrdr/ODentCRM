var gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var browserSync = require('browser-sync').create();

// const javascriptObfuscator = require('gulp-javascript-obfuscator');

gulp.task('scripts', function () {
    console.log(' task -> scripts')

    return gulp.src([
        // "./lib/dragonBones.js",
        // "./lib/helper.js",
        "./assets/js/core/demo/Demo.js"
    ])

    // .pipe(babel({
    //     presets: ["@babel/preset-env"]
    // }))

    // .pipe(browserify()) -- var $ = require('jquery');

    //.pipe(javascriptObfuscator())

    // .pipe(uglify())  // упростить

        .pipe(concat('main.js')) // в какой файл объединить
        .pipe(gulp.dest('./dist/'))

    //.pipe(browserSync.reload())
});

gulp.task('js_watch', gulp.series('scripts', function (done) {
    browserSync.reload();
    done()
}));

gulp.task('server_scripts', gulp.series('scripts', function (done) {
    browserSync.init({
        // injectChanges: true,
        server: {
            baseDir: "./",
            // directory: "./",
            index: "/index.html"
        },
        // directory: true
    });


    gulp.watch("lib/*.js").on('change', gulp.series('js_watch'));
    gulp.watch("*.js").on('change', gulp.series('js_watch'));
    gulp.watch("*.html").on('change', browserSync.reload);
    gulp.watch("data/*.*").on('change', browserSync.reload);
}));

gulp.task('server', done => {

    browserSync.init({

        // open: 'external',
        // host: 'localhost',
        proxy: '127.0.0.1:80',
        port: 80,
/*
для прокси небудет работать
        server: {
            baseDir: "./",
            // index: "/index.php"
        },*/
    });

    gulp.watch([
        "*.php",
        "include/*.php",
        "*.js"
    ]).on('change', browserSync.reload);

    done()
});

gulp.task('default', gulp.series('server'));