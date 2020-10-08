const path                = require('path');

module.exports = {
  resolve: {
    extensions: ['.js', '.json', '.vue'],
    alias: {
      '@router': path.resolve(__dirname, 'resources/assets/router'),
      '@pages': path.resolve(__dirname, 'resources/assets/pages'),
      '@store': path.resolve(__dirname, 'resources/assets/store'),
      '@config': path.resolve(__dirname, 'resources/assets/config'),
      '@api': path.resolve(__dirname, 'resources/assets/api'),
      '@utils': path.resolve(__dirname, 'resources/assets/utils'),
      '@helpers': path.resolve(__dirname, 'resources/assets/helpers'),
      '@components': path.resolve(__dirname, 'resources/assets/components'),
    },
  },
};
