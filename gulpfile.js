// !Dependencias
const gulp = require('gulp');
const connect = require('gulp-connect-php');
const browserSync = require('browser-sync').create();

// Levanta el servidor PHP y BrowserSync con proxy
function phpServer(done) {
  connect.server({
    port: 8080,
    hostname: 'localhost',
    base: '.',
    keepalive: true,
    open: true,
  });

  gulp.watch('**/*.php').on('change', browserSync.reload);
  gulp.watch('build/css/**/*.css').on('change', browserSync.reload);
  gulp.watch('build/js/**/*.js').on('change', browserSync.reload);


  return new Promise(() => {});
}

// Tarea por defecto
exports.default = phpServer;
