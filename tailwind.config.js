module.exports = {
  mode: 'jit',
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
        },
        zIndex: {
          '-10': '-10',
        }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('tailwindcss/nesting'),
  ],
}
