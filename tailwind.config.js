module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: 'media', // or 'media' or 'class'
  theme: {
    fontFamily: {
      'title': 'lato',
    },

    extend: {
      colors: {

        x: {
          DEFAULT: '#262626',
          gray: {
            100: '#e3e3e3',
            200: '#c7c7c7',
            300: '#aaaaaa',
            400: '#8e8e8e',
            500: '#727272',
            600: '#565656',
            700: '#393939',
            800: '#1d1d1d',
            900: '#111111',
          },
        },

        olivia: {
          DEFAULT: '#f1beb0',
          dark:    '#e99a85',
          mute:    '#f2dfda',
          blue: {
            DEFAULT: '#b0e3f1',
            mute:    '#daedf2',
            dark:    '#5d7880',
          },
          green: {
            DEFAULT: '#c3f1b0',
            mute:    '#e1f2da',
          },
          purple: {
            DEFAULT: '#dfb0f1',
            mute:    '#ebdaf2',
          },
        },

      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
