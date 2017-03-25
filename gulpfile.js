var gulp = require ('gulp')

var postcss = require ('gulp-postcss')
var sass = require ('gulp-sass')
var autoprefixer = require ('autoprefixer')
var assets = require ('postcss-assets')

gulp.task ('sass', function () {
  gulp.src (['src/styles/*.scss', '!src/styles/_*.scss'])
    .pipe (sass ({
      outputStyle: 'compressed',
    }))
    .pipe (postcss ([
      autoprefixer ({
        browsers: ['last 1 version', 'last 2 Explorer versions']
      })
    ]))
    .pipe(gulp.dest('styles/'))
});

gulp.task ('watch', function () {
  gulp.watch ('src/styles/**/*.scss', ['sass'])
});

gulp.task ('default', ['sass'])