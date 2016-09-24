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
			'!.git',
			'!.gitignore',
			'!Gruntfile.js',
			'!package.json',
			'!codesniffer.ruleset.xml',
			'!*.sublime-project',
			'!*.sublime-workspace',
			'!README.md',
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
			'!codesniffer.ruleset.xml',
			'!*.sublime-project',
			'!*.sublime-workspace',
			'!README.md'
		],
		dest: '../svn/trunk/'
	},
}
