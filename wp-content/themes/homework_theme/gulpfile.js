var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var sass        = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('sass', function () {
	return gulp.src('sass/**/*.scss')
		.pipe(sass())
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
		.pipe(gulp.dest('css'))
		.pipe(browserSync.reload({stream: true}));
});

gulp.task("watch", ['sass'], function () {
	browserSync.init({
		server: ".",
		notify: false,
		ui: {
			port: 3000
		}
    });
    gulp.watch('assets/sass/**/*.scss', ["sass"]);
    gulp.watch('assets/**/*.html' , ['html']);
	gulp.watch('assets/img/**/*', ["img"]);
    gulp.watch('assets/fonts/**/*', ["fonts"]);
    gulp.watch('assets/js/**/*', ["js"]);
});
