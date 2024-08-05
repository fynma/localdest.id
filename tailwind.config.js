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
      backgroundColor: {
        'gray-50': '#f9fafb',
        'gray-800': '#1f2937',
      },
      colors: {
        'figma-grad-blue': '#026AA2',
        'figma-grad-toblueend': '#0A3092',
        'figma-textblue': '#0086C9',
      //   'figma-blue' : '#587DBD',
        'figma-btn-blue' : '#0B76BC',
      //   'figma-progress-blue' : '#219EBC',
      //   'figma-about-blue' : '#1E3A68',
      //   // 'link-color' : '#2b5db9',
      },
    },
      fontFamily: {
      sans: ['Poppins', 'sans-serif'], // Setel font global
    },
  },
  plugins: [
    // require('flowbite/plugin'),
    require('daisyui'),
  ],
  daisyui: {
    themes: [
      {
        light: {
          ...require("daisyui/src/theming/themes")["light"],
          ".background-gray-responsive": {
            "background-color": "#f9fafb",
            // "border-color": "#1EA1F1",
          },
          ".figma-grad-blue": {
            "color": "#026AA2"
          },
          // ".from-figma-grad-blue": {
          //   "color": "#026AA2"
          // },
          // ".to-figma-grad-toblueend": {
          //   "color": "#0A3092"
          // },
          ".text-figma-textblue": {
            "color": "#0086C9"
          },
          ".figma-blue": {
            "color": "#587DBD"
          },
          ".figma-btn-blue": {
            "color": "#0B76BC"
          },
          ".figma-progress-blue": {
            "color": "#219EBC"
          },
          ".figma-about-blue": {
            "color": "#1E3A68"
          },
          ".search-background": {
            "background-color": "#f9fafb"
          },
          ".btn-white" : {
            "background-color": "#ffffff"
          },
          ".text-black-responsive" : {
            "color": "#000000"
          },
          ".text-white-responsive" : {
            "color": "#ffffff"
          },
          ".bg-navbar-responsive" : {
            "background-color": "#ffffff"
          },
        },
      },
      {
        dark: {
          ...require("daisyui/src/theming/themes")["dark"],
          ".background-gray-responsive": {
            "background-color": "#1f2937",
            // "border-color": "#1EA1F1",
          },
          // "."
          ".btn-twitter:hover": {
            "background-color": "#1C96E1",
            "border-color": "#1C96E1",
          },
          ".search-background": {
            "background-color": "#1f2937"
          },
          // ".text-white-responsive" : {
          //   "color": "#000000"
          // },
          ".text-black-responsive" : {
            "color": "#ffffff"
          },
          ".bg-navbar-responsive" : {
            "background-color": "#1f2937"
          },
        },
      },
    ]
    
  },
};
