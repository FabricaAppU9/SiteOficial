module.exports = function(grunt) {
  require('jit-grunt')(grunt);

  grunt.initConfig({
    less: {
      development: {
        files: {
          "css/estilo.css": "less/estilo.less" // Caminho dos arquivos
        }
      }
    },
    watch: {
      styles: {
        files: ['**/*.less'], // Quais arquivos o grunt ficará de olho
        tasks: ['less']
      }
    }
  });

  grunt.registerTask('default', ['less', 'watch']);
};