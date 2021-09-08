/**
 *	Custom jQuery Scripts
 *	Date Modified: 09.03.2021
 *	Developed by: Lisa DeBona
 */

jQuery(document).ready(function ($) {

  var site_url = $("#site-logo a").attr("href");
  var site_logo = $("#site-logo a").html();
  $("#primary-menu a").each(function(){
    if( $(this).attr("href")=='#logo' ) {
      $(this).parents("li").addClass("logo-area");
    }
  }); 

  $('[data-fancybox]').fancybox({
    protect: true
  });

}); 