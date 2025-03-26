<?php 
	get_header(); 
	$broxi_settings = broxi_global_settings();
?>
<div class="page-404">
	<div class="content-page-404">
		<div class="title-error">
			<?php if(isset($broxi_settings['title-error']) && $broxi_settings['title-error']){
				echo esc_html($broxi_settings['title-error']);
			}else{
				echo esc_html__('404', 'broxi');
			}?>
		</div>
		<div class="sub-title">
			<?php if(isset($broxi_settings['sub-title']) && $broxi_settings['sub-title']){
				echo esc_html($broxi_settings['sub-title']);
			}else{
				echo esc_html__("Oops! That page can't be found.", "broxi");
			}?>
		</div>
		<div class="sub-error">
			<?php if(isset($broxi_settings['sub-error']) && $broxi_settings['sub-error']){
				echo esc_html($broxi_settings['sub-error']);
			}else{
				echo esc_html__('Sorry, but the page you are looking for is not found. Please, make sure you have typed the current URL.', 'broxi');
			}?>
		</div>
		<a class="btn" href="<?php echo esc_url( home_url('/') ); ?>">
			<?php if(isset($broxi_settings['btn-error']) && $broxi_settings['btn-error']){
				echo esc_html($broxi_settings['btn-error']);}
			else{
				echo esc_html__('Go To Home', 'broxi');
			}?>
		</a>
	</div>
</div>
<?php
get_footer();