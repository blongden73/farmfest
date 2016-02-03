module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		sass: {
			dist: {
				files: {
					'test/style.css' : 'style/style.scss'
				}
			}
		},
		
		'ftp-deploy': {
		build: {
		auth: {
		host: '91.102.64.132',
		port: 21,
		authKey: 'key1'
    	},
		src: 'test',
		dest: '/httpdocs/wp-content/themes/ff_2016'
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
	grunt.loadNpmTasks('grunt-ftp-deploy');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.registerTask('default',['sass', 'ftp-deploy', 'watch']);
};