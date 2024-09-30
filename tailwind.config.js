/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/**/*.blade.php"],
  theme: {
      extend: {
          screens: {
              xs: "390px",
              max: "2200px",
          },
          colors: {
              primary: {
                  400: "#ffffff",
                  500: "#f5f2ed",
                  600: "#eae7e3",
              },
              secondary: {
                  100: "#555555",
                  200: "#242424",
                  400: "#000000",
  
              },
              accent: {
                  100: "#c0b391",
                  200: "#ce9358",
                  400: "#c18b52",
                  600: "#b59a69",
              },

              bgPrimary: "#ffffff",
              bgSecondary:"#f9fafb",
             

              fontWhite: "#ffffff",
              fontBlack: "#222",

              fontPrimary: "#bf9b30",
             
          },
          fontFamily: {
              heading: ["Montserrat", "sans-serif"],
              text: ["Montserrat", "sans-serif"],
              handwriting: ["Montserrat", "sans-serif"],
          },
      },
  },
  plugins: [ require('@tailwindcss/typography'),],
};