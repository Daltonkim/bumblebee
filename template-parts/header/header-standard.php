<?php

do_action('analytica_before_header_primary');

analytica_structural_wrap( 'site-header', 'open' );

get_template_part( 'template-parts/header/header', 'logo' );

 ?>
 
 <header class="header-container">
  <nav>
    <div class="menu-menu-1-container">  
      <ul id="menu-menu-1">
        <li id="menu-item-4" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-4"><a href="http://www.ipage.lt/wp/">Home</a></li>
        <li id="menu-item-5" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5"><a href="http://www.ipage.lt/wp/?page_id=2">Sample Page</a></li>
        <li id="menu-item-6" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6"><a href="#">Shop</a>
          <ul class="sub-menu-0">
	          <li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-9"><a href="#">Clothing</a>
              <ul class="sub-menu-1">
                <li id="menu-item-11" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11"><a href="#">T-shirt</a></li>
                <li id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10"><a href="#">Hoodies</a></li>
              </ul>
          </li>
          <li id="menu-item-14" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-14"><a href="#">Music</a>
          <ul class="sub-menu-1">
            <li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12"><a href="http://Music">Albums</a></li>
            <li id="menu-item-13" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13"><a href="#">Singles</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li id="menu-item-7" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7"><a href="#">Services</a>    
        </li>
      </li>
    <li id="menu-item-8" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8"><a href="#">Contacts</a></li>
  </ul>
</div>				
</nav>
</header>  
 <?php

analytica_structural_wrap( 'site-header', 'close' );

do_action( 'analytica_after_header_primary' );
 ?>
