<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Stacker
 */
?>
<div id="footer">
	<div class="wrapper">
		<div id="footerwidgets">
			<?php /* Widgetised Area */
			if (!function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( 'Footer' ))
			?>
		</div>
		<?php wp_footer(); ?>
	</div>
	<!-- End Wrapper -->
</div><!-- End Footer -->


<!-- @TODO: Sheg, change display to inline-block to show  -->
<!-- @TODO: 7th of May  -->
<!-- PAGE VISITS COUNTER - DARK -->
<div id="strcpv-page-counter">N/A</div>
<style>
#strcpv-page-counter {
text-align: left;
}
#strcpv-page-counter p {
display: none !important;
padding-top: 0 !important;
padding-bottom: 0 !important;
padding-left: 5px !important;
padding-right: 1px !important;
letter-spacing: 5px !important;
background-color: black !important;
color: white !important;
border-radius: 4px !important;
font-weight: bold !important;
font-size: 12px !important;
}
</style>

<!-- WEBSITE VISITS COUNTER - DARK -->
<div id="strcpv-website-counter">N/A</div>
<style>
#strcpv-website-counter {
text-align: center;
}
#strcpv-website-counter p {
display: none !important;
padding-top: 0 !important;
padding-bottom: 0 !important;
padding-left: 5px !important;
padding-right: 1px !important;
letter-spacing: 5px !important;
background-color: black !important;
color: white !important;
border-radius: 4px !important;
font-weight: bold !important;
font-size: 12px !important;
}
</style>

</div><!-- End Page -->
</body>
</html>