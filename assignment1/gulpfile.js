var gulp = require('gulp'),
    // Get packages from package.json
    plugins = require('gulp-load-plugins')();

// Set source paths
var src_paths = {
    compass: 'sass/**/*.scss',
    autoprefixer: 'css/*.css',
};


// Set destination paths
var dest_paths = {
    compass: 'css',
    images: 'resources',
};


// Compass
gulp.task('compass', function() {
    gulp.src(src_paths.compass)
    
        .pipe(plugins.plumber({errorHandler: plugins.notify.onError('Error: <%= error.message %>')}))
        
        .pipe(plugins.compass({
            config_file: 'config.rb',
            sourcemap: false,
            css: dest_paths.compass,
            sass: 'sass'
        }))
        
        .pipe(plugins.autoprefixer('last 2 versions', '> 1%', 'ie 9'))
		.pipe(gulp.dest(dest_paths.compass))
        
        .pipe(plugins.livereload())
        .pipe(plugins.notify({ message: 'Compass complete' }))
});


// SCSS lint
gulp.task('lint', function() {
    gulp.src(src_paths.compass)
        .pipe(plugins.scssLint())
});


// Watch
gulp.task('watch', function(ev) {
    plugins.livereload.listen();
	gulp.watch(src_paths.compass, ['compass']);
});


// Default
gulp.task('default', ['watch']);
