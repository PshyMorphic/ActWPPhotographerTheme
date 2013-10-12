    <div id="footer">
        <div class="footer_box">
<!--            <h3>SOCIAL LINKS</h3>
            <ul>
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Tumblr</a></li>
              <li><a href="#">Dribbble</a></li>
              <li><a href="#">Forrst</a></li>
            </ul>-->
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 1') ) : ?>                   
            <?php endif; ?>
        </div><!--//footer_box-->
        
        <div class="footer_box">
<!--            <h3>BLOG</h3>-->
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 2') ) : ?>                   
            <?php endif; ?>
        </div><!--//footer_box-->        
        
        <div class="footer_box">
<!--            <h3>CONTACT</h3>-->
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 3') ) : ?>                   
            <?php endif; ?>
        </div><!--//footer_box-->        
        
        <div class="footer_box footer_box_last">
<!--            <h3>TEXT</h3>-->
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 4') ) : ?>                   
            <?php endif; ?>
        </div><!--//footer_box-->        
        
        <div class="clear"></div>
    </div><!--//footer-->
    <div class="bottom_footer">
	©2012-2013 Jan Pool. Circadian is produced by <a href="http://actualiser.co.za">Actualiser</a> using a <a href="https://github.com/PshyMorphic/ActWPPhotographerTheme">modified</a> version of the <a href="http://www.dessign.net/photographer-theme/">Photographer</a> theme by <a href="http://www.dessign.net">Dessign.net</a>.

</div>

</div><!--//main_container-->

<?php wp_footer(); ?>
</body>
</html>