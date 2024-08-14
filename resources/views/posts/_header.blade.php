<section id="home-section" class="hero">
	<div class="home-slider owl-carousel">

	@if ($posts->count())
		@foreach ($posts->take(3) as $post)
			<x-slider-item
				:sub_heading="$post->title"
				:short_description="$post->excerpt"
				:post_url="$post->slug"
				:image_url="$post->thumbnail"
			/>
		@endforeach

	@else
		{{-- <x-slider-item	
			:image_url="images/bg_1.png"
			:sub_heading="سلام! از دیدنتون خوشحالم"
			:short_description='من <span>رضا دهقانی هستم</span></h1><h2 class="mb-4">عاشق خلق ایده‌های نو برای جهان بهتر</h2>'
		/>

		<x-slider-item
			:image_url="images/bg_2.png"
			:sub_heading=""
			:short_description='با خلق <span>هر محصول یاپروژه</span> یک داستان جدید آغاز میشه'
		/> --}}
		  {{-- <div class="slider-item ">
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

	      {{-- <div class="slider-item">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row d-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third js-fullheight order-md-last img" style="background-image:url(images/bg_2.png);">
	          		<div class="overlay"></div>
	          	</div>
		          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
					  <span class="subheading"></span>
			            <h1 class="mb-4 mt-3">با خلق <span>هر محصول یاپروژه</span> یک داستان جدید آغاز میشه</h1>
			            <p><a href="#" class="btn btn-primary py-3 px-4">درخواست همکاری</a> <a href="#projects-section" class="btn btn-white btn-outline-white py-3 px-4">نمونه کارهای من</a></p>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div> --}}
	@endif

	</div>
</section>