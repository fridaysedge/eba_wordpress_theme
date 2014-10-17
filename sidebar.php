<?php ?>

<div id="left_column"> <!-- left_column -->
	
	<div id="navigation">

		<ul>
			<li><a href="<?php bloginfo('url'); ?>">Home</a></li>
			<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
			<?php endif; ?>
		</ul>

		<h3>Supporters</h3>

		<a href="http://depts.washington.edu/uwch/"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/uwch_logo2.png" alt="Walter Chapin Simpson Center for the Humanities at the University of Washington" /></a><br /><br />
		<a href="http://www.neh.gov/"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/neh_logo.jpg" alt="National Endowment for the Humanities" /></a><br /><br />
		<a href="http://depts.washington.edu/nelc/"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/NELC_icon.jpg" alt="Department of Near Eastern Languages and Civilization" /></a> <br /><br />
		<a href="http://depts.washington.edu/ndth/"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/ndt-logo.png" alt="Newbook Digital Texts" /></a><br /><br />

	</div>

</div> <!-- left_column -->
