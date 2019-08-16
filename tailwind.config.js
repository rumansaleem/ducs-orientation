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
      boxShadow: {
        default: '0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06)',
        md: '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
        lg: '0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)',
        xl: '0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)',
        '2xl': '0 25px 50px -12px rgba(0, 0, 0, 0.25)',
        'inner-drop-md': '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06), inset 0 2px 4px 0 rgba(255, 255, 255, 0.1)',
        inner: 'inset 0 2px 4px 0 rgba(0, 0, 0, 0.06)',
        outline: '0 0 0 3px rgba(66, 153, 225, 0.5)',
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
