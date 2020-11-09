<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package bootstrapwp
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area col-md-3 col-lg-3" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->

</div> <!-- ===close the row=== -->
</div><!-- ====close the container ===  -->

