</div>
</div>
<footer class="footer p-10 bg-gray-700 text-white">
<?php
      wp_nav_menu(
          array(
              'theme_location' => 'menu-footer',
              'menu_class' => '',
          )
      );
?>
<?php wp_footer(); ?>
</footer>

      </div> <!-- site content -->
      </div>
    <script src="<?php echo get_bloginfo( 'template_directory' );?>/js/scripts.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
<!-- <script src="<?php echo get_bloginfo( 'template_directory' );?>/public/js/bundle.js"></script> -->
  </body>
</html>
