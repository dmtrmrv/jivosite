module.exports = {
	build: {
		options: {
			archive: '../build/<%= package.name %>-<%= package.version %>.zip',
			mode: 'zip'
		},
		expand: true,
		cwd: '../build/',
		src: [ '<%= package.name %>/**' ]
	}
}
