<?php

do_action( 'analytica_before_logo' );

?><div class="site-id"><?php

	do_action( 'analytica_before_logo_inner' );

    do_action( 'analytica_site_title' );
    do_action( 'analytica_site_description' );

	do_action( 'analytica_after_logo_inner' );

?></div><?php

do_action( 'analytica_after_logo' );

?>
