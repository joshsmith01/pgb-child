<?php
/**
 * The template for displaying search forms in pgb
 *
 * @package pgb
 */
?>
  <?php
    if ( is_page_template( 'page-sidebar-left.php' ) ) { ?>
    <?php // move that search bar to the left to match the rest of the layout ?>
      <form class="navbar-form navbar-left" role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>"><?php
    } else { ?>
    	<form class="navbar-form navbar-right" role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>"><?php
    }
  ?>
	<label class="sr-only" for="s">Search</label>
	<div class="input-group">
		<input type="text" class="form-control pull-right" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'pgb' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'pgb' ); ?>">
		<span class="input-group-btn">
			<?php // Close / Reset button ?>
			<?php /*
			<button type="reset" class="btn btn-default">
				<span class="fa fa-close">
					<span class="sr-only">Close</span>
				</span>
			</button>
			*/ ?>
			<button type="submit" class="btn btn-default">
				<span class="fa fa-search">
					<span class="sr-only">Search</span>
				</span>
			</button>
		</span>
	</div>
</form>