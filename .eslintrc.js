module.exports = {
	'env': {
		'browser': true,
		'es2021': true
	},
	'extends': [
		'eslint:recommended',
		'plugin:vue/essential'
	],
	'parserOptions': {
		'ecmaVersion': 12,
		'sourceType': 'module'
	},
	'plugins': [
		'vue'
	],
	'rules': {
		'indent': ['error', 'tab'],
		'linebreak-style': ['error','windows'],
		'quotes': ['error','single'],
		'semi': ['error','always'],
		'no-unused-vars': ['warn'],
		'no-multiple-empty-lines': ['warn', { max: 1, maxEOF: 0 }],
		'no-trailing-spaces': ['warn', { skipBlankLines: true }],
		'max-len': ['warn', { 'code': 120 }]
	}
};
