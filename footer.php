
<footer id="footer" class="footer-bg-color">
  <div class="footer-wrap container">
    <div class="widget-wrap">
      <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
          <div class="footer-widget">
              <?php dynamic_sidebar( 'sidebar-1' ); ?>
          </div>
          
      <?php endif; ?>
    </div>

    <div class="gotoTop">
      <a href="#page">
        <span class="visuallyhidden"><?php esc_html_e( 'Go to top', 'kiyono' ); ?></span>
        <?php echo kiyono_get_icon_svg( 'ui', 'arrow_up' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
      </a>
    </div>
  
  </div>
</div>

</div><!-- #page .site -->
<?php wp_footer(); ?>

</body>
</html>