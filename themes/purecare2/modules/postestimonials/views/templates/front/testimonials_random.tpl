{if $testimonials}
	<div class="testimonials_container">
		<div class="container">
			<div class="pos_title">
				<h2>{l s='Client Testimonials' mod='postestimonials'}</h2>
				<div class=" desc_title">
					{l s='What they say' mod='postestimonials'}
				</div>
			</div>
			<div class=" row pos_content">
				<ul class="thumb">
				  {$j=0} 
				  {foreach from=$testimonials name=myLoop item=testimonial}
					 {if $testimonial.active == 1}
							{if in_array($testimonial.media_type,$arr_img_type)}
								<li class="testithumb{$j}" onclick="testislider({$j})">
									<img src="{$mediaUrl}{$testimonial.media}" alt="Image Testimonial">
								</li>
							{/if}
					{/if}
					{$j = $j + 1} 
				  {/foreach}
				</ul>
				<div class="testimonialsSlide owl-carousel">
				  {foreach from=$testimonials name=myLoop item=testimonial}
					{if $testimonial.active == 1}
						{if $smarty.foreach.myLoop.index % 1 == 0 || $smarty.foreach.myLoop.first }
						<div class="item-testimonials">
						{/if}	
							<div class="item">										
								<div class="content_author">
									<div class="content_test">										
										<div class="des_testimonial">{$testimonial.content|escape:'html':'UTF-8'}</div>	
										<p class="des_email">{$testimonial.email}</p>										
										<p class="des_namepost"><span>{$testimonial.name_post}</span></p>							
									</div>							
								</div>						
							</div>
						{if $smarty.foreach.myLoop.iteration % 1 == 0 || $smarty.foreach.myLoop.last  }
						</div>
						{/if}
					{/if}
				  {/foreach}
				</div>
			</div>
		</div>
	</div>

<script type="text/javascript">
$(document).ready(function() {
	var testi = $(".testimonialsSlide");
	testi.owlCarousel({
		autoplay :true,
		autoplayHoverPause: true,
		smartSpeed : 1000,
		nav :false,
		dots : false,
		responsiveClass:true,
		responsive : {
		  0 : {
	          items: 1
	      },
	      480 : {
	          items: 1
	      },
	      768 : {
	          items: 1
	      },
	      992 : {
	          items: 1
	      },
		  1200 : {
	          items: 1
	      }
		}
	});
	$(".testimonials_container .thumb li:first").addClass('active');
	testi.on('translated.owl.carousel', function(event) {
	    x = $( ".testimonials_container .owl-item" ).index( $( ".testimonials_container .testimonialsSlide .active" ));
	    
	    var testithumb = ".testithumb"+x;
		$(".testimonials_container .thumb li").removeClass('active');
		$(testithumb).addClass('active');
	});
	
});
function testislider(x)
{	var testi = $(".testimonialsSlide");
	testi.trigger("to.owl.carousel", [x, 500, true]);
	
	
}

</script>

 {/if}