                <div class="col-md-4">
    				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url('<?= secure_asset('storage/' . $project->thumbnail) ?>');">
    					<div class="overlay"></div>
	    				<div class="text text-center p-4">
	    					<h3><a href="/posts/{{ $project->slug }}">{{ $project->title }}</a></h3>
	    					<span>{{ $project->excerpt }}</span>
	    				</div>
    				</div>
  				</div>