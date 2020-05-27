module.exports = {
  purge: {
    content: ['source/**/*.html', 'source/**/*.md', 'source/**/*.js', 'source/**/*.php', 'source/**/*.vue'],
    whitelistPatterns: [/language/, /hljs/, /mce/],
  },
  theme: {
    fontFamily: {
      'sans': 'Poppins, -apple-system, BlinkMacSystemFont',
    },
    extend: {}
  },
  variants: {},
  corePlugins: {
    container: false,
  },
  plugins: [
    require('tailwind-bootstrap-grid')({
      gridGutterWidth: '32px',
    })
  ]
}
