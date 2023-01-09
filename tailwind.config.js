/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ['./**/*.php'],
	theme: {
		extend: {
			colors: {
				primary: '#47525E',
				secondary: '#8190A5',
				tertary: '#8492A6',
				hoverColor: '#343F4B',
				bgColor: '#E5E9F2',
			},
			fontFamily: {
				lato: ['Lato'],
			},
		},
		screens: {
			xs: '480px',
			// => @media (min-width: 480px) { ... }

			sm: '640px',
			// => @media (min-width: 640px) { ... }

			md: '768px',
			// => @media (min-width: 768px) { ... }

			lg: '1024px',
			// => @media (min-width: 1024px) { ... }

			xl: '1280px',
			// => @media (min-width: 1280px) { ... }

			'2xl': '1536px',
			// => @media (min-width: 1536px) { ... }
		},
	},
	plugins: [],
};
