@extends('layouts.app')

@section('content')
<div class="page-header"><h2> {{ $pageTitle }} <small> {{ $pageNote }} </small> </h2></div>

	{!! Form::open(array('url'=>'projectscontrollermain?return='.$return, 'class'=>'form-horizontal validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
	<div class="toolbar-nav">
		<div class="row">
			
			<div class="col-md-6 " >
				<div class="submitted-button">
					<button name="apply" class="tips btn btn-sm btn-default  "  title="{{ __('core.btn_back') }}" ><i class="fa  fa-check"></i> {{ __('core.sb_apply') }} </button>
					<button name="save" class="tips btn btn-sm btn-default"  id="saved-button" title="{{ __('core.btn_back') }}" ><i class="fa  fa-paste"></i> {{ __('core.sb_save') }} </button> 
				</div>	
			</div>
			<div class="col-md-6 text-right " >
				<a href="{{ url($pageModule.'?return='.$return) }}" class="tips btn btn-default  btn-sm "  title="{{ __('core.btn_back') }}" ><i class="fa  fa-times"></i></a> 
			</div>
		</div>
	</div>	


	<div class="p-5">
		<ul class="parsley-error-list">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>		
		<div class="row">
	<div class="col-md-12">
						<fieldset><legend> Projects</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Title" class=" control-label col-md-4 text-left"> Title <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <input  type='text' name='title' id='title' value='{{ $row['title'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Overview" class=" control-label col-md-4 text-left"> Overview </label>
										<div class="col-md-6">
										  <textarea name='overview' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['overview'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Video 1 Title" class=" control-label col-md-4 text-left"> Video 1 Title </label>
										<div class="col-md-6">
										  <input  type='text' name='video_1_title' id='video_1_title' value='{{ $row['video_1_title'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Video 1 Embed Link" class=" control-label col-md-4 text-left"> Video 1 Embed Link </label>
										<div class="col-md-6">
										  <input  type='text' name='video_1_link' id='video_1_link' value='{{ $row['video_1_link'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Video 2 Title" class=" control-label col-md-4 text-left"> Video 2 Title </label>
										<div class="col-md-6">
										  <input  type='text' name='video_2_title' id='video_2_title' value='{{ $row['video_2_title'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Video 2 Embed Link" class=" control-label col-md-4 text-left"> Video 2 Embed Link </label>
										<div class="col-md-6">
										  <input  type='text' name='video_2_link' id='video_2_link' value='{{ $row['video_2_link'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Project 1 Title" class=" control-label col-md-4 text-left"> Project 1 Title </label>
										<div class="col-md-6">
										  <input  type='text' name='product_1_title' id='product_1_title' value='{{ $row['product_1_title'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Project 1 Document" class=" control-label col-md-4 text-left"> Project 1 Document </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-copy"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="product_1_document" class="upload"       />
						</div>
						<div class="product_1_document-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["product_1_document"],"/uploads/images/project") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Project 2 Title" class=" control-label col-md-4 text-left"> Project 2 Title </label>
										<div class="col-md-6">
										  <input  type='text' name='product_2_title' id='product_2_title' value='{{ $row['product_2_title'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Product 2 Document" class=" control-label col-md-4 text-left"> Product 2 Document </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-copy"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="product_2_document" class="upload"       />
						</div>
						<div class="product_2_document-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["product_2_document"],"/uploads/images/project") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Project 3 Title" class=" control-label col-md-4 text-left"> Project 3 Title </label>
										<div class="col-md-6">
										  <input  type='text' name='product_3_title' id='product_3_title' value='{{ $row['product_3_title'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Project 3 Document" class=" control-label col-md-4 text-left"> Project 3 Document </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-copy"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="product_3_document" class="upload"       />
						</div>
						<div class="product_3_document-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["product_3_document"],"/uploads/images/project") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Project 4 Title" class=" control-label col-md-4 text-left"> Project 4 Title </label>
										<div class="col-md-6">
										  <input  type='text' name='product_4_title' id='product_4_title' value='{{ $row['product_4_title'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Project 4 Document" class=" control-label col-md-4 text-left"> Project 4 Document </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-copy"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="product_4_link" class="upload"       />
						</div>
						<div class="product_4_link-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["product_4_link"],"/uploads/images/project") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> {!! Form::hidden('add_info1', $row['add_info1']) !!}					
									  <div class="form-group row  " >
										<label for="Category" class=" control-label col-md-4 text-left"> Category <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <select name='category' rows='5' id='category' class='select2 ' required  ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> {!! Form::hidden('serial', $row['serial']) !!}					
									  <div class="form-group row  " >
										<label for="Status" class=" control-label col-md-4 text-left"> Status <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  
					<?php $status = explode(',',$row['status']);
					$status_opt = array( '1' => 'Active' ,  '2' => 'Inactive' , ); ?>
					<select name='status' rows='5' required  class='select2 '  > 
						<?php 
						foreach($status_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['status'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> {!! Form::hidden('created_at', $row['created_at']) !!}{!! Form::hidden('updated_at', $row['updated_at']) !!}</fieldset></div>
	
		</div>

		<input type="hidden" name="action_task" value="save" />
		
		</div>
	</div>		
	{!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		
		$("#category").jCombo("{!! url('projectscontrollermain/comboselect?filter=vsml_project_category:id:title') !!}",
		{  selected_value : '{{ $row["category"] }}' });
		 	
		 	 

		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("projectscontrollermain/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop