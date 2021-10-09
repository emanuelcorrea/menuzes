module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        fontFamily: {
            'poppins': ['Poppins']
        },
        colors: {
            pink: {
                cherie: '#F49AA5'
            }
        }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
