<?php
/**
 * The template for the plugin canary widget.
 *
 * @package MITlib Plugin Canary
 * @since 0.1.0
 */

?>

<style type="text/css">
.canary {
	padding: 5px;
	margin: 0;
	color: #000;
}

.canary a {
	color: #000;
}
#dashboard-widgets .canary a:hover,
#dashboard-widgets .canary a:focus {
	text-decoration: underline;
}

.listed {
	background-color: #5CB85C;
}

.updated {
	background-color: #f0ad43;
}

.ghosted {
	background-color: #d9534f;
}
</style>
<p>The list below should include every registered plugin under this Wordpress site. Entries are color-coded according to the following key:</p>
<p class="canary listed">Listed in the plugin directory, no update available</p>
<p class="canary updated">Update available in plugin directory</p>
<p class="canary ghosted">Not listed in plugin directory</p>
<hr>
<h3>Plugin status</h3>
<?php
foreach ( $plugin_data as $plugin => $value ) {
	// Each loop through this code is for a single registered plugin.
	$class = 'ghosted';

	// Does plugin have an update?
	if ( array_key_exists( $plugin, $update_data->response ) ) {
		$class = 'updated';
	}

	// Does plugin appear under no_updates?
	if ( array_key_exists( $plugin, $update_data->no_update ) ) {
		$class = 'listed';
	}

	echo '<p class="canary ' . esc_attr( $class ) . '"><a href="' . esc_url( $value['PluginURI'] ) . '">' . esc_html( $value['Name'] ) . '</a></p>';
}
?>
<p><strong>Please note</strong> that there are many reasons why a plugin might not be listed in the directory. Site builders should review each such plugin and make an informed decision for themselves.</p>
