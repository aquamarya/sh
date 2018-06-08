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
<footer>
    <?php
    $createY = 2018;
    $currentY = date('Y');
    $createY == $currentY ? $copyY = $createY : $copyY = $createY . ' - ' . $currentY
    ?>
    <div class="footer-col"><span>&copy; <?php echo $copyY?>, all right reserved</span></div>
    <div class="footer-col">
        <div class="social-bar-wrap">
            <a title="Facebook" href="" target="_blank"><i class="fa fa-facebook"></i></a>
            <a title="Twitter" href="" target="_blank"><i class="fa fa-twitter"></i></a>
            <a title="Google+" href="" target="_blank"><i class="fa fa-google+"></i></a>
            <a title="Instagram" href="" target="_blank"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
