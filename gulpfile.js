const gulp = require('gulp');
const imagemin = require('gulp-imagemin');
const uglify = require('gulp-uglify');
const merge = require('merge-stream');

// Log message 
gulp.task('message', function () {
    return console.log("Whoa Max! Gulp is running!");
});

// Optimize Image 
gulp.task('imagemin_cover', function () {
    gulp.src('resources/assets/cover/**/*')
        .pipe(imagemin())
        .pipe(gulp.dest('public/assets/cover'));
});

// Optimize Image 
gulp.task('imagemin_images', function () {
    gulp.src('resources/assets/images/**/*')
        .pipe(imagemin())
        .pipe(gulp.dest('public/assets/images'));
});

// Optimize Image 
gulp.task('imagemin_favicon', function () {
    gulp.src('resources/assets/favicon/**/*')
        .pipe(imagemin())
        .pipe(gulp.dest('public/assets/favicon'));
});

gulp.task('imagemin_storage', function () {
    gulp.src('public/storage/**/*')
        .pipe(imagemin())
        .pipe(gulp.dest('public/storage'));
});




gulp.task('endmessage', function () {
    return console.log("Whoa Inu! Gulp is finished!");
});


// Default 
gulp.task('default', gulp.parallel('message','imagemin_cover','imagemin_images','imagemin_favicon','imagemin_storage','endmessage'));

