<sectio id="my_cms_page">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="title_heading">
                <h3 class="mt-3"> {{ $title }}  </h3>
            </div>
        </div>
    </div> 
</div>
<div class="container">	
	<div class="row default_page_content">
		<?php echo PostHelpers::formatContent($content) ;?>

	</div>
</div>	
</section>