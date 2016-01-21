<form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <ul class="menu">
    <li>
      <input type="search" value="<?php echo get_search_query(); ?>" placeholder="Search" name="s" id="s">
    </li>
    <li>
      <button type="submit" id="searchsubmit" class="button" value="<?php esc_attr_x('Search', 'f6st') ?>">Search</button>
    </li>
  </ul>
</form>