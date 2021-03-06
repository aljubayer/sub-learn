<?php  
/**
* header.php, loading header files
*
* @package 			Codexin
* @subpackage 		Core
* @since 			1.0
*/

// Do not allow directly accessing this file.
defined( 'ABSPATH' ) OR die( esc_html__( 'This script cannot be accessed directly.', 'traveliria' ) );

?>

<!DOCTYPE html>
	<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
		<link rel="profile" href="http://gmpg.org/xfn/11"/>
		<?php  wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
<!-- 	<section>
		<div class="full-container">
			<div class="row">
				<div class="col s6 m2 l2 xl2">
					<a class="site-brand valign-wrapper">
						<span>Logo</span>
					</a>
				</div>
				<div class="col s6 m5 l5 xl5">
					<?php //codexin_menu( 'menu-primary-main' ); ?>
				</div>
				<div class="col s12 m5 l5 xl5">
					<?php //codexin_menu( 'menu-primary-center' ); ?>
				</div>
			</div>
		</div>
	</section>	 -->

<!-- <nav class="main-nav" role="navigation">
   <div>
      <div class="brand-wrapper">
         <input id="main-menu-state" type="checkbox" />
         <label class="main-menu-btn" for="main-menu-state">
         <span class="main-menu-btn-icon"></span> Toggle main menu visibility
         </label>
         <h2 class="nav-brand">
            <a href="#">Brand</a>
         </h2>
      </div>
      
      <div class="menu-wrapper">
        
         <ul class="sm sm-simple main-menu-primary">
            <li> <a href="#">Page 1</a></li>
            <li> <a href="#">Page 2</a></li>
         </ul>

         <ul id="main-menu" class="sm sm-simple main-menu-primary">
            <li><a href="#">Home</a></li>
            <li>
               <a href="#">About</a>
               <ul>
                  <li><a href="#">Introduction to SmartMenus jQuery</a></li>
                  <li><a href="#">Demos + themes</a></li>
                  <li><a href="#">The author</a></li>
                  <li>
                     <a href="#">The company</a>
                     <ul>
                        <li><a href="#">About Vadikom</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Privacy policy</a></li>
                     </ul>
                  </li>
               </ul>
            </li>
            <li><a href="#">Download</a></li>
            <li>
               <a href="#">Support</a>
               <ul>
                  <li><a href="#">Premium support</a></li>
                  <li><a href="#">Forums</a></li>
               </ul>
            </li>
            <li><a href="#">Docs</a></li>
            <li>
               <a href="#">Sub test</a>
               <ul>
                  <li><a href="#">Dummy item</a></li>
                  <li><a href="#">Dummy item</a></li>
                  <li><a href="#" class="disabled">Disabled menu item</a></li>
                  <li><a href="#">Dummy item</a></li>
                  <li>
                     <a href="#">more...</a>
                     <ul>
                        <li><a href="#">A pretty long text</a></li>
                        <li><a href="#">Dummy item</a></li>
                        <li><a href="#">Dummy item</a></li>
                        <li>
                           <a href="#">more...</a>
                           <ul>
                              <li><a href="#">Dummy item</a></li>
                              <li><a href="#" class="current">A 'current' class item</a></li>
                              <li><a href="#">Dummy item</a></li>
                              <li>
                                 <a href="#">more...</a>
                                 <ul>
                                    <li><a href="#">subMenusMinWidth</a></li>
                                    <li><a href="#">10em</a></li>
                                    <li><a href="#">forced.</a></li>
                                 </ul>
                              </li>
                              <li><a href="#">Dummy item</a></li>
                              <li><a href="#">Dummy item</a></li>
                           </ul>
                        </li>
                        <li><a href="#">Dummy item</a></li>
                        <li><a href="#">Dummy item</a></li>
                        <li><a href="#">Dummy item</a></li>
                     </ul>
                  </li>
               </ul>
            </li>
            <li><a href="#">Contact</a></li>
         </ul>
      </div>
   </div>
   
</nav>
 -->

<nav role="navigation">
  <!-- Sample menu definition -->
  <div class="container">
      <div class="row">
         <div class="col s12 m1 l1 xl1">
            
         </div>
         <div class="col s12 m11 l11 xl11">
            
     <ul id="main-menu" class="sm sm-simple right">
       <li class="waves-effect"><a href="#">Home</a></li>
       <li><a href="#">About</a></li>
       <li><a href="#">Download</a></li>
       <li><a href="#">Support</a></li>
       <li><a href="#">Docs</a></li>
       <li>
          <a href="#">Test 1</a>
           <ul>
             <li><a href="#">Dummy item</a></li>
             <li><a href="#">Dummy item</a></li>
             <li><a href="#">Dummy item</a></li>
             <li><a href="#">Dummy item</a></li>
             <li><a href="#">Dummy item</a></li>
         </ul>
        </li>
       <li><a href="#">Test 2</a></li>
       <li><a href="#">Test 3</a></li>
       <li><a href="#">Test 4</a></li>
       <li>
          <a href="#">Test 5</a>
           <ul>
             <li><a href="#">Dummy item</a></li>
             <li><a href="#">Dummy item</a></li>
             <li><a href="#">Dummy item</a></li>
             <li><a href="#">Dummy item</a></li>
             <li><a href="#">Dummy item</a></li>
          </ul>
        </li>
       <li><a href="#">Test 6</a></li>
       <li><a href="#">Test 7</a></li>
       <li><a href="#">Test 8</a></li>
       <li><a href="#">Test 9</a></li>
       <li>
          <a href="#">Test 10</a>
           <ul>
           <li><a href="#">Dummy item</a></li>
           <li><a href="#">Dummy item</a></li>
           <li><a href="#">Dummy item</a></li>
           <li><a href="#">Dummy item</a></li>
           <li><a href="#">Dummy item</a></li>
         </ul>
        
       </li>
     </ul>
         </div>
      </div>
  </div>
</nav>

<div class="demo-text">
  <p>Demonstrates a mod (unofficial addon) that enables an automatic dynamic "More..." item + sub menu to be created for horizontal main menus when the width is not enough for all the items to appear without wrapping.</p>
  <p>Try resizing the browser window to see how it updates dynamically in desktop view.</p>
</div>
