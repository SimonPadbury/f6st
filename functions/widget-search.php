<?php

function f6st_search_form( $form ) {
  $form = '<form role="search" method="get" id="searchform" action="' . home_url('/') . '" >
	<div class="row">
		<div class="input-group">
			<input class="input-group-field" type="text" value="' . get_search_query() . '" placeholder="' . esc_attr__('Search', 'f6st') . '..." name="s" id="s" />
			<div class="input-group-button">
		    <button type="submit" id="searchsubmit" value="'. esc_attr__('Search', 'f6st') .'" class="button"><i class="fa fa-search"></i></button>
		  </div>
		</div>
	</div>
	</form>';
    return $form;
}
add_filter( 'get_search_form', 'f6st_search_form' );
