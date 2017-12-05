<?php
/**
 * The template for displaying the footer
 *
 */

?>

 


    
<?php wp_footer(); ?>


<script>
  jQuery('section').on('click', function () {
    if (jQuery('.helper_tool').hasClass('active')) {
      jQuery('.helper_tool').removeClass('active');
    }
  });

  jQuery('#need_help a').on('click', function () {
    jQuery('.helper_tool').toggleClass('active');
  });

</script>


    
</body>
</html>

