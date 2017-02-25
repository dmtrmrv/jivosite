module.exports = {
	build: {
		cwd: '.',
		expand: true,
		src: [
			'admin/*.php',
			'admin/partials/*.php',
			'includes/*.php',
			'languages/<%= package.name %>.pot',
			'public/js/*.js',
			'public/*.php',
			'*.php',
			'LICENCE.txt',
			'README.txt'
		],
		dest: '../build/<%= package.name %>/'
	},
	svn: {
		cwd: '.',
		expand: true,
		src: [
			'admin/*.php',
			'admin/partials/*.php',
			'includes/*.php',
			'languages/<%= package.name %>.pot',
			'public/js/*.js',
			'public/*.php',
			'*.php',
			'LICENCE.txt',
			'README.txt'
		],
		dest: '../svn/trunk/'
	},
}
