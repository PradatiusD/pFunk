<script>
	jQuery(document).ready(function($){
		// Function to remove additional captions after logo entry
		function fixIntroAnimation () {
			if (jQuery('body').width() < 960) {
				jQuery('#rev_slider_1_1 .tp-caption').eq(1).hide();
				jQuery('#rev_slider_1_1 .tp-caption').eq(2).hide();			
			} 
			else {
				jQuery('#rev_slider_1_1 .tp-caption').eq(1).show();
				jQuery('#rev_slider_1_1 .tp-caption').eq(2).show();		
			}			
		}

		fixIntroAnimation();
		$(window).resize(function(){
			fixIntroAnimation();
		})

	})	
</script>
