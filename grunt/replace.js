// Add empty lines after closing curly braces and docBlocks.
module.exports = {
	readme: {
		src: [
			'README.txt',
		],
		overwrite: true,
		replacements: [ {
			from: /Stable tag:.*$/m,
			to: 'Stable tag: <%= package.version %>'
		} ]
	},
	main: {
		src: [
			'<%= package.name %>.php',
		],
		overwrite: true,
		replacements: [ {
			from: /\s\*\sVersion:.*$/m,
			to: function( matchedWord ) {
				return matchedWord.replace( /\d+\.\d+\.\d+/g, '<%= package.version %>' );
			}
		} ]
	},
	class: {
		src: [
			'includes/class-<%= package.name %>.php',
		],
		overwrite: true,
		replacements: [ {
			from: /\$this(\s?)*->version.*/g,
			to: function( matchedWord ) {
				return matchedWord.replace( /\d+\.\d+\.\d+/g, '<%= package.version %>' );
			}
		} ]
	}
};
