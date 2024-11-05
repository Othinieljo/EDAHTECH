/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        poppins: ['Poppins', 'sans-serif'],
        quicksand: ['Quicksand', 'sans-serif'],
        raleway : ['Raleway', 'sans-serif']
      },
      colors : {
        primary : {
          DEFAULT : '1b8aee'
        }

      },
      backgroundColor: theme => ({
        ...theme('colors'),
        'primary': '#1b8aee',
        
       })
    },
    textColor:theme => ({
      ...theme('colors'),
      'primary' : '#1b8aee'
    }),
    borderColor:theme => ({
      ...theme('colors'),
      'primary' : '#1b8aee'
    }),
  },
  plugins: [],
}

