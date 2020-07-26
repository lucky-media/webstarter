const theme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: {
        content: ['source/**/*.html', 'source/**/*.md', 'source/**/*.js', 'source/**/*.php', 'source/**/*.vue'],
        whitelistPatterns: [/language/, /hljs/, /mce/],
    },
    theme: {
        fontFamily: {
            'sans': 'Montserrat, -apple-system, BlinkMacSystemFont',
        },
        container: {
            center: true,
            padding: {
                default: '1rem',
                sm: '1rem',
                lg: '1rem',
                xl: '0rem'
            },
        },
        extend: {
            minHeight: {
                ...theme.minHeight,
                '40': '400px',
                '60': '600px'
            },
            height: {
                ...theme.height,
                '1/2': '50%'
            },
            transitionTimingFunction: {
                ...theme.transitionTimingFunction,
                'slide-in-out': 'cubic-bezier(.2, 1, 0.22, 1)'
            },
            colors: {
                gray: {
                    ...theme.colors.gray,
                    '200': '#F9FBFD',
                    '600': '#676767',
                    '800': '#737373',
                    '900': '#24262B'
                },
                blue: {
                    ...theme.colors.blue,
                    '500': '#0C3EB8',
                    '900': '#2A295D'
                },
                orange: {
                    ...theme.colors.orange,
                    '500': '#FF3900',
                    '600': '#ed2300'
                },
                green: {
                    ...theme.colors.green,
                    '500': '#009F00'
                }
            }
        }
    },
    variants: {
        textColor: ['responsive', 'hover', 'focus', 'group-hover'],
        borderWidth: ['responsive', 'hover', 'last']
    },
    plugins: [require('@tailwindcss/custom-forms')]
}
