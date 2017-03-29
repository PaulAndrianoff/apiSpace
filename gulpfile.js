var gulp         = require( 'gulp' ),
    gulp_cssnano = require('gulp-cssnano'),
    gulp_rename  = require('gulp-rename'),
    gulp_uglify  = require('gulp-uglify'),
    gulp_concat = require('gulp-concat'),
    gulp_autoprefixer = require ( 'gulp-autoprefixer' ),
    gulp_sass = require('gulp-sass');

gulp.task( 'default', [ 'sass','css', 'js', 'watch' ], function() {} );

gulp.task('sass', function () {
  return gulp.src('./src/sass/*.scss')
    .pipe(gulp_sass.sync().on('error', gulp_sass.logError))
    .pipe(gulp.dest('./src/styles/'));
});

gulp.task( 'css', function()
{
    return gulp.src('./src/styles/style.css')
        .pipe(gulp_autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp_cssnano())
        .pipe(gulp_rename('style.min.css'))
        .pipe(gulp.dest('./src/build/'))
} );

gulp.task( 'js', function()
{
    return gulp.src( [
            './src/js/main.js'
        ] )
        .pipe( gulp_concat( 'main.min.js' ) )
        .pipe( gulp_uglify() )
        .pipe( gulp.dest( './src/build/' ) );
} );

gulp.task( 'watch', function()
{
    gulp.watch( './src/styles/style.css', [ 'css' ] );
    gulp.watch('./src/sass/**/*.scss', ['sass']);
    gulp.watch( [ './src/js/**', '!./src/js/main.min.js' ], [ 'js' ] );
} );




// gulp.task('zip', function()
// {
//     return gulp.src('')
//         .pipe(zip('archive.zip'))
//         .pipe(gulp.dest('dist'));
// })
