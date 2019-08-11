let defaultConfig = require('tailwindcss/defaultConfig');

module.exports = {
  theme: {
    container: {
      center: true,
      padding: '1rem',
    },
    extend: {
      colors: {
        ...defaultConfig.theme.colors,
        black: {
          default: '#000',
          '50': 'rgba(0, 0, 0, 0.5)',
          '75': 'rgba(0, 0, 0, 0.75)',
          '90': 'rgba(0, 0, 0, 0.9)',
        }
      },
      height: {
        'current': '1em',
        'screen-3/4': '75vh',
      },
      minHeight: {
        '48': '12rem',
        '64': '16rem'
      },
      maxHeight: {
        'screen-3/4': '75vh'
      },
      maxWidth: {
        ...defaultConfig.theme.screens,
      }
    }
  },
  variants: {},
  plugins: []
}
