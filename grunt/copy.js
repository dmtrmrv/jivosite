module.exports = {
	build: {
		cwd: '.',
		expand: true,
		src: [
			'**/*',
			'!**/assets/**',
			'!**/grunt/**',
			'!**/node_modules/**',
			'!.DS_Store',
			'!**/.DS_Store',
			'!.gitignore',
			'!Gruntfile.js',
			'!README.txt',
			'!*.sublime-project',
			'!*.sublime-workspace',

		],
		dest: '../build/<%= package.name %>/'
	},
	svn: {
		cwd: '.',
		expand: true,
		src: [
			'**/*',
			'!**/assets/**',
			'!**/grunt/**',
			'!**/node_modules/**',
			'!.DS_Store',
			'!**/.DS_Store',
			'!.git',
			'!.gitignore',
			'!Gruntfile.js',
			'!package.json',
			'!README.md',
			'!*.sublime-project',
			'!*.sublime-workspace',

		],
		dest: '../svn/trunk/'
	},
}
