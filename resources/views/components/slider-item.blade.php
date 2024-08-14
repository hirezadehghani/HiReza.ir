@props(['image_url', 'sub_heading', 'short_description', 'post_url'])

<div class="slider-item">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
        <div class="one-third js-fullheight order-md-last img" style="background-image:url(@isset($image_url)'$image_url'@else'images/posts_thumbnail.jpeg'@endisset);">
            <div class="overlay"></div>
    </div>
        <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
        <div class="text">
            <span class="subheading">{{$sub_heading}}</span>
            <h1 class="mb-4 mt-3">
                {!! str_limit($short_description, 50) !!}
            </h1>
            <p>
            @isset($post_url)
                <a href="{{ '/posts/' . $post_url }}" class="btn btn-primary py-3 px-4">مشاهده پست</a>
            @else
                <a href="#contact-section" class="btn btn-primary py-3 px-4">درخواست همکاری</a>
                <a href="#projects-section" class="btn btn-white btn-outline-white py-3 px-4">نمونه کارهای من</a>
            @endisset
        </div>
        </div>
        </div>
    </div>
</div>
{{-- 

<div class="slider-item ">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row d-md-ilex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third js-fullheight order-md-last img" style="background-image:url(images/bg_1.png);">
	          		<div class="overlay"></div>
	          	</div>
				
		          <div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">سلام! از دیدنتون خوشحالم</span>
			            <h1 class="mb-4 mt-3">من <span>رضا دهقانی هستم</span></h1>
			            <h2 class="mb-4">عاشق خلق ایده‌های نو برای جهان بهتر</h2>
			        <p>
						<a href="#contact-section" class="btn btn-primary py-3 px-4">درخواست همکاری</a>
						<a href="#projects-section" class="btn btn-white btn-outline-white py-3 px-4">نمونه کارهای من</a>
					</p>
		            </div>

		          </div>
	        	
				</div>
	        </div>
	      </div> --}}