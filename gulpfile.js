const gulp          = require('gulp'),
      pug          = require('gulp-pug');
      sass          = require('gulp-sass'),
      browserSync   = require('browser-sync'),
      concat        = require('gulp-concat'),
      uglify        = require('gulp-uglify'),
      pump          = require('pump');
      cssnano       = require('gulp-cssnano'),
      rename        = require('gulp-rename'),
      gcmq          = require('gulp-group-css-media-queries'),
      del           = require('del'),
      imagemin      = require('gulp-imagemin'),
      pngquant      = require('imagemin-pngquant'),
      cache         = require('gulp-cache'),
      autoprefixer  = require('gulp-autoprefixer');

gulp.task('pug', function() {
    return gulp.src('./app/pug/index.pug')
        .pipe(pug({
            pretty: true
        }))
        .pipe(gulp.dest('./app'));
});

gulp.task('sass', function() {
    return gulp.src('./app/sass/**/*.+(sass|scss)')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 15 versions', '> 1%', 'ie 8', 'ie 7'],
            cascade: false
        }))
        .pipe(gcmq())
        .pipe(gulp.dest('./app/css'))
        .pipe(browserSync.reload({stream: true}));
});

gulp.task('browser-sync', function(done) {
    browserSync.init({
        server: {
            baseDir: "./app",
        },
        // notify: false,
        tunnel: false
    });
    done();
});

gulp.task('scripts', function(done) {
    pump([
        gulp.src([
            './app/libs/jquery/dist/jquery.js',
            './app/libs/animate/animate-css.js',
            './app/libs/OwlCarousel2-2.3.4/dist/owl.carousel.js'
            ]),
        concat('libs.min.js'),
        uglify(),
        gulp.dest('./app')
    ]);
    done();
});

gulp.task('css-libs', function() {
    return gulp.src('./app/css/libs.css')
        .pipe(cssnano())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('./app/css'));
});

gulp.task('watch', function() {
    gulp.watch('./app/pug/**/*.pug', gulp.series('pug'));
    gulp.watch('./app/sass/**/*.+(sass|scss)', gulp.series('sass'));
    gulp.watch('./app/*.html').on('change', browserSync.reload);
    gulp.watch('./app/js/**/*.js', browserSync.reload);
});

gulp.task('clean', function(done) {
    del.sync('dist');
    done();
});

gulp.task('img', function() {
    return gulp.src('./app/img/**/*')
        .pipe(cache(imagemin({  // Сжимаем их с наилучшими настройками с учетом кеширования
            interlaced: true,
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        })))
        .pipe(gulp.dest('./dist/img'));
});

gulp.task('build-dist', function(done) {

    var buildCss = gulp.src([
        './app/css/common.css',
        './app/css/libs.min.css'
        ])
        .pipe(gulp.dest('./dist/css'));

    var buildFonts = gulp.src('./app/fonts/**/*')
        .pipe(gulp.dest('./dist/fonts'))

    var buildJs = gulp.src('./app/js/**/*')
        .pipe(gulp.dest('./dist/js'))

    var buildHtml = gulp.src('./app/*.html')
        .pipe(gulp.dest('./dist'));
    done();
});

gulp.task('styles', gulp.series('css-libs', 'sass'));

gulp.task('build', gulp.series('clean', 'img', 'styles', 'scripts', 'build-dist'));

gulp.task('default', gulp.series('browser-sync', 'styles', 'scripts', 'watch'));

gulp.task('clear', function() {
    return cache.clearAll();
})