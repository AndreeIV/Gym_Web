// !Dependencias
const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const browserSync = require('browser-sync').create();

const paths = {
  scss: 'src/scss/**/*.scss',
  php: '**/*.php',
  js: 'src/scripts/**/*.js',
  css: 'public/build/css/**/*.css'
};

function css() {
  return gulp.src(paths.scss)
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('public/build/css'))
    .pipe(browserSync.stream()); // Inyecta CSS sin recargar toda la página
}

function serve() {
  browserSync.init({
    proxy: "http://localhost/Gym_Web/", // Cambia por la URL de tu servidor PHP local
    port: 3000,
    open: true,
    files: [
      paths.css,
      paths.php
    ]
  });

  gulp.watch(paths.scss, css);
  gulp.watch([paths.php, paths.js]).on('change', browserSync.reload);
}

exports.css = css;
exports.serve = serve;
exports.default = gulp.series(css, serve);