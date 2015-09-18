module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    // grunt-contrib-copy

    copy: {
      dist: {
        files: [{
          expand: true,
          cwd: 'bower_components/jquery/dist',
          src: '*',
          dest: 'lib/jquery'
        },
        {
          expand: true,
          cwd: 'bower_components/CMB2',
          src: '**',
          dest: 'lib/cmb2'
        },
        {
          expand: true,
          cwd: 'bower_components/fitvids',
          src: 'jquery.fitvids.js',
          dest: 'lib/fitvids'
        },
        {
          expand: true,
          cwd: 'bower_components/flexslider',
          src: '**',
          dest: 'lib/flexslider'
        },
        {
          expand: true,
          cwd: 'bower_components/TGM-Plugin-Activation',
          src: 'class-tgm-plugin-activation.php',
          dest: 'lib/tgmpa'
        },
        {
          expand: true,
          cwd: 'bower_components/uikit',
          src: '**',
          dest: 'lib/uikit'
        }]
      }
    },

    // grunt-contrib-sass

    sass: {
      dist: { 
        options: {
          style: 'expanded'
        },
        files: {
          'style.css': 'scss/style.scss',
          'css/admin.css': 'scss/admin.scss'
        }
      }
    },

    // grunt-contrib-cssmin
    
    cssmin: {
      options: {
        shorthandCompacting: false,
        roundingPrecision: -1
      },
      target: {
      files: {
        'css/admin.min.css': ['css/admin.css']
        }
      }
    },

    // grunt-contrib-uglify

    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> v<%= pkg.version %> by <%= pkg.author %> <%= grunt.template.today("yyyy-mm-dd") %> */\n',
        sourceMap: false
      },
      site: {
        src: 'js/src/scripts.js',
        dest: 'js/dist/scripts.min.js'
      },
      admin: {
        src: 'js/src/admin.js',
        dest: 'js/dist/admin.min.js'
      }
    },

    // grunt-banner

    usebanner: {
      taskName: {
        options: {
          position: 'top',
          banner: '/*\n'+
                  'Theme Name: Trienta Medik\n'+
                  'Theme URI: https://github.com/jrajalu/unityrepair\n'+
                  'Version: <%= pkg.version %>\n'+
                  'Description: <%= pkg.description %>\n'+
                  'Author: <%= pkg.author %>\n'+
                  '*/',
          linebreak: true
        },
        files: {
          src: [ 'style.css' ]
        }
      }
    },

    // grunt-contrib-watch

    watch: {
      configFiles: {
        files: ['Gruntfile.js']
      },
      css: {
        files: [
          'scss/style.scss',
          'scss/admin.scss',
          'scss/*.scss'
        ],
        tasks: ['sass','usebanner','cssmin'],
          options: {
            livereload: true
          }
      },
      js: {
        files: ['js/src/*.js'],
        tasks: ['uglify'],
          options: {
            spawn: false
          }
      }
    },

    // grunt-contrib-clean

    clean: {
      css: ['css/*.css', '!css/*.min.css', 'img/*.css'],
      js: ['js/*.js', '!js/*.min.js'],
      cmb2: [
              'lib/cmb2/tests',
              'lib/cmb2/css/sass',
              'lib/cmb2/languages/*.po',
              'lib/cmb2/languages/*.mo',
              '!lib/cmb2/*.pot',
              '!lib/cmb2/*.php',
              'lib/cmb2/*.clover',
              'lib/cmb2/*.md',
              'lib/cmb2/*.json',
              'lib/cmb2/*.txt',
              'lib/cmb2/*.dist'
              ],
      uikit:  [
              'lib/uikit/scss',
              'lib/uikit/less',
              'lib/uikit/js/core',
              'lib/uikit/js/*.js',
              '!lib/uikit/js/*.min.js',
              'lib/uikit/js/components/*.js',
              '!lib/uikit/js/components/*.min.js',
              'lib/uikit/css/*.css',
              '!lib/uikit/css/*.almost-flat.min.css',
              'lib/uikit/css/components/*.css',
              '!lib/uikit/css/components/*.almost-flat.min.css'
              ],
      flexslider: [
              'lib/flexslider/css',
              'lib/flexslider/demo',
              'lib/flexslider/*.md',
              'lib/flexslider/*.less',
              'lib/flexslider/*.txt',
              'lib/flexslider/*.json'
              ],
      sass: ['.sass-cache']
    }
    
  }); // end Project configuration

  // load grunt task
  
  grunt.loadNpmTasks('grunt-banner');
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // execute grunt task
  
  grunt.registerTask('start', ['copy', 'sass', 'uglify', 'usebanner']);

  grunt.registerTask('run', ['watch']);

  grunt.registerTask('finish', ['clean']);

};