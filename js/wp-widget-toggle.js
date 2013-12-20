jQuery(document).ready(function($){

  // show on pointer on hover
  $('.widget-title').css('cursor','pointer');

  // hide widget content
  $('.widget-title').each(
    function(){
      $(this).parent().children().not('.widget-title').slideUp();
    }
  );

  // show/hide widget content on click
  $('.widget-title').click(
    function(){
      $(this).parent().children().not('.widget-title').toggle();
    }
  );

});