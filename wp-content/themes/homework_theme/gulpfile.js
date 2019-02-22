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
    gulp.watch('sass/**/*.scss', ["sass"]);
    gulp.watch('**/*.html' , ['html']);
	gulp.watch('img/**/*', ["img"]);
    gulp.watch('fonts/**/*', ["fonts"]);
    gulp.watch('js/**/*', ["js"]);
});
