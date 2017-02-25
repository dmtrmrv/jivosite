<?php
/**
 * Provide a dashboard view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://dmtrmrv.com
 * @since      0.1.0
 *
 * @package    JivoSite
 * @subpackage JivoSite/admin/partials
 */

?>

<div class="wrap">
	<?php screen_icon(); ?>
	<h2><?php esc_html_e( 'JivoSite', 'jivosite' ); ?></h2>
	<form method="post" action="options.php">
		<?php
			settings_fields( 'jivosite_code' );
			do_settings_sections( 'jivosite_code' );
			submit_button();
		?>
	</form>
</div>
