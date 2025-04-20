// !Dependencias
// const gulp = require('gulp');
// const { exec } = require('child_process');
// const sass = require('gulp-sass')(require('sass'));
// const browserSync = require('browser-sync').create();


// const paths = {
//   scss: 'src/scss/**/*.scss',
//   js: 'src/scripts/**/*.js',
//   imagenes: 'src/assets/images/**/*'
// }

// function serve() {
//   // Ejecuta live-server apuntando a la carpeta que quieres servir
//   const server = exec('npx live-server . --port=8080 --open');

//   server.stdout.on('data', data => console.log(data));



// }

// function css() {
//   return gulp.src(paths.scss)
//   .pipe(sass().on('error', sass.logError))
//   .pipe(gulp.dest('public/build/css'))

// }
// function watchFiles() {
//   gulp.watch(paths.scss, css);

// }

// exports.watchFiles = watchFiles
// exports.css = css;
// exports.default = gulp.parallel(css, serve, watchFiles);


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