module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Poppins', 'sans-serif'],
      },
      colors: {
        'figma-grad-blue': '#026AA2',
        'figma-grad-toblueend': '#0A3092',
        'figma-textblue': '#0086C9',
        'figma-blue' : '#587DBD',
        'figma-btn-blue' : '#0B76BC',
        'figma-progress-blue' : '#219EBC',
        'figma-about-blue' : '#1E3A68',
        // 'link-color' : '#2b5db9',
      },
    },
      fontFamily: {
      sans: ['Poppins', 'sans-serif'], // Setel font global
    },
  },
  plugins: [
    require('flowbite/plugin')
  ]
};
