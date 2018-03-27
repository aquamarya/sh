<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="footer" class="footer">
        <div class="footer-wrapper container">
            <?php
                $footerMenuArgs = [
                    'container' => 'ul',
                    'menu_class' => 'footer-menu',
                    'menu_id' => 'footer-menu',
                    'depth' => 1
                ];
                wp_nav_menu($footerMenuArgs);
            ?>
            <div class="footer-social">
                <span class="footer-social__title">Мы в социальных сетях: </span>
                <ul class="footer-social__list">
                    <li class="footer-social__item"><a href="#" class="footer-social__link"><i class="fab fa-vk"></i></a></li>
                    <li class="footer-social__item"><a href="#" class="footer-social__link"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="footer-social__item"><a href="#" class="footer-social__link"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
            <?php
                $createY = 2018;
                $currentY = date('Y');
                $createY == $currentY ? $copyY = $createY : $copyY = $createY . ' - ' . $currentY
            ?>
            <div class="footer-copy">&copy; <?php echo $copyY?>, all right reserved</div>
        </div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
