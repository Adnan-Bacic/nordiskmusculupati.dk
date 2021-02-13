export default {
	// Disable server-side rendering (https://go.nuxtjs.dev/ssr-mode)
	ssr: true,

	// Target (https://go.nuxtjs.dev/config-target)
	target: 'static',

	// Global page headers (https://go.nuxtjs.dev/config-head)
	head: {
		//title: 'nordiskmusculupati',
		meta: [
			{ charset: 'utf-8' },
			{ name: 'viewport', content: 'width=device-width, initial-scale=1' },
			//global facebook
			{ property: 'og:image', content: 'https://nordiskmusculupati.dk/img/fb-og-image.png' },
			{ property: 'og:image:alt', content: 'Frontpage of the website' },
			{ property: 'og:type', content: 'website' },
			{ property: 'og:locale', content: 'da_DK' },
		],
		link: [
			{ rel: 'icon', type: 'image/x-icon', href: '/favicon.png' },
			{ rel: 'stylesheet', href: 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.css'},
			// since we override some bootstrap variables we import bootstrap in /scss/. so we dont need the cdn
			{ rel: 'stylesheet', href: 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css',
				integrity: 'sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2',
				crossorigin: 'anonymous' },

		],
		script: [
			{ src: 'https://code.jquery.com/jquery-3.5.1.slim.min.js' },
			{ src: 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js' },
			{ src: 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js' },
			{ src: 'pixel.js', type: 'text/javascript' }
		],
	},

	// Global CSS (https://go.nuxtjs.dev/config-css)
	css: [
		'@/assets/scss/main.scss'
	],

	// Plugins to run before rendering page (https://go.nuxtjs.dev/config-plugins)
	plugins: [
		//{ src: '~/plugins/facebook-pixel.js' },
		{ src: '~/plugins/bootstrap-form-validation.js', mode: 'client' },
		//{ src: '~/plugins/fb-pixel.js' }
	],

	// Auto import components (https://go.nuxtjs.dev/config-components)
	components: true,

	// Modules for dev and build (recommended) (https://go.nuxtjs.dev/config-modules)
	buildModules: [
	],

	// Modules (https://go.nuxtjs.dev/config-modules)
	modules: [
		//for global css
		'@nuxtjs/style-resources',
	],

	// Build Configuration (https://go.nuxtjs.dev/config-build)
	build: {
		//puts css in seperate file
		extractCSS: true,
		//smaller css bundle
		optimizeCSS: true,
		//keeps filenames
		filenames: {
			img: 'img/[name].[ext]'
		}
	},

	generate: {
		fallback: '404.html'
	},

	styleResources: {
		scss: [
			'~/assets/scss/main.scss',
		]
	}
};
