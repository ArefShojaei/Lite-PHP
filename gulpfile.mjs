import gulp from "gulp";
import imagemin from "gulp-imagemin";
import uglify from "gulp-uglify";
import dartSass from "sass";
import gulpSass from "gulp-sass";
import babel from "gulp-babel";
import concat from "gulp-concat";
import rev from "gulp-rev";
import cleanCss from "gulp-clean-css";
import size from "gulp-size";
import autoprefixer from "gulp-autoprefixer";
import path from "path";



// Asset contracts for path
const ASSETS = {
    base: path.resolve(),

    src: "/resources",
    dist: "/public",

    js: "/assets/js",
    css: "/assets/css",
    sass: "/assets/sass",
    img: "/assets/img",
    icon: "/assets/icons",
    font: "/assets/fonts",
};




// Tasks
gulp.task("minify-img", async () => {
    gulp.src(`${ASSETS.base}${ASSETS.src}${ASSETS.img}/*`)
        .pipe(imagemin())
        .pipe(rev())
        .pipe(size())
        .pipe(gulp.dest(`${ASSETS.base}${ASSETS.dist}${ASSETS.img}`));
});

gulp.task("minify-css", async () => {
    gulp.src(`${ASSETS.base}${ASSETS.src}${ASSETS.css}/*.css`)
        .pipe(autoprefixer())
        .pipe(cleanCss({compatibility: 'ie8'}))
        .pipe(concat("styles.min.css"))
        // .pipe(rev())
        .pipe(size())
        .pipe(gulp.dest(`${ASSETS.base}${ASSETS.dist}${ASSETS.css}`))
})

gulp.task("minify-js", async () => {
    gulp.src(`${ASSETS.base}${ASSETS.src}${ASSETS.js}/*.js`)
        .pipe(babel({
            presets : ["@babel/preset-env"]
        }))
        .pipe(uglify())
        .pipe(concat("app.min.js"))
        // .pipe(rev())
        .pipe(size())
        .pipe(gulp.dest(`${ASSETS.base}${ASSETS.dist}${ASSETS.js}`))
})

gulp.task("compile-sass", async () => {
    const sass = gulpSass(dartSass)

    gulp.src(`${ASSETS.base}${ASSETS.src}${ASSETS.sass}/*.scss`)
        .pipe(sass().on('error', sass.logError))
        .pipe(concat("styles.css"))
        // .pipe(rev())
        .pipe(size())
        .pipe(gulp.dest(`${ASSETS.base}${ASSETS.dist}${ASSETS.css}`))
})

gulp.task("copy-icon-files", async () => {
    gulp.src(`${ASSETS.base}${ASSETS.src}${ASSETS.icon}/*`)
        // .pipe(rev())
        .pipe(size())
        .pipe(gulp.dest(`${ASSETS.base}${ASSETS.dist}${ASSETS.icon}`))
})

gulp.task("copy-font-files", async () => {
    gulp.src(`${ASSETS.base}${ASSETS.src}${ASSETS.font}/*`)
    // .pipe(rev())
    .pipe(size())
    .pipe(gulp.dest(`${ASSETS.base}${ASSETS.dist}${ASSETS.font}`))
})








// Start tasks once proccess
gulp.task("default", gulp.parallel(
    "minify-img",
    "minify-css",
    "minify-js",
    "compile-sass",
    "copy-icon-files",
    "copy-font-files",
))

// Start tasks as watch mode (LIVE)
gulp.task("watch", async () => {
    gulp.watch(`${ASSETS.base}${ASSETS.src}${ASSETS.js}`, gulp.series("minify-js"));
    gulp.watch(`${ASSETS.base}${ASSETS.src}${ASSETS.css}`, gulp.series("minify-css"));
    gulp.watch(`${ASSETS.base}${ASSETS.src}${ASSETS.img}`, gulp.series("minify-img"));
    gulp.watch(`${ASSETS.base}${ASSETS.src}${ASSETS.sass}`, gulp.series("compile-sass"));
    gulp.watch(`${ASSETS.base}${ASSETS.src}${ASSETS.icon}`, gulp.series("copy-icon-files"));
    gulp.watch(`${ASSETS.base}${ASSETS.src}${ASSETS.font}`, gulp.series("copy-font-files"));
})
