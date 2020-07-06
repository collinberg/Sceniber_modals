// Example `tailwind.config.js` file

module.exports = {
  important: true,
  theme: {
    fontFamily: {
      'sans': [
        'benton-sans',
        'system-ui',
        'BlinkMacSystemFont',
        '-apple-system',
        'Helvetica Neue',
        'sans-serif',
      ],
      display: ['Gilroy', 'sans-serif'],
      body: ['Graphik', 'sans-serif'],
    },
    extend: {
      colors: {
        primary: {
          lighter: '#ffad81',
          default: '#ec6433',
          dark: '#C26033',
        },
        gray: {
          '300': '#e6e7e9',
          '500': '#8E8F97',
          '700': '#4a5568',
          '800': '#424242',
          '900': '#333333',

        }
      },
      margin: {
        '96': '24rem',
        '128': '32rem',
      },
      height: {
        'half': '50vh',
      }
    }
  },
  variants: {
    opacity: ['responsive', 'hover']
  }
}
