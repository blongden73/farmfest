module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		sass: {
			dist: {
				files: {
					'style.css' : 'style/style.scss'
				}
			}
		},
		
		
		watch: {
			css: {
				files: '**/*.scss',
				tasks: ['sass']
			}
			
		}	
	});
	
	grunt.loadNpmTasks('grunt-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.registerTask('default',['sass', 'watch']);
};