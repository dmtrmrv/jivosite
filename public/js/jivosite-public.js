/**
 * JivoSite Snippet
 *
 * @package JivoSite
 */

( function() {
	var widget_id = jivosite.widget_id;
	var s = document.createElement( 'script' );
	s.type = 'text/javascript';
	s.async = true;
	s.src = '//code.jivosite.com/script/widget/' + widget_id;
	var ss = document.getElementsByTagName( 'script' )[ 0 ];
	ss.parentNode.insertBefore( s, ss );
} )();
