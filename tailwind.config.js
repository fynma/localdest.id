module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        'figma-grad-blue': '#026AA2',
        'figma-grad-toblueend': '#0A3092',
        'figma-textblue': '#0086C9',
        'figma-blue' : '#587DBD',
        'figma-btn-blue' : '#0B76BC',
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ]
};
