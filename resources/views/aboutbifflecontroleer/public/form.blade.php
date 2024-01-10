

		 {!! Form::open(array('url'=>'aboutbifflecontroleer', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> About  BIFFL</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Banner" class=" control-label col-md-4 text-left"> Banner </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="add_info1" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="add_info1-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["add_info1"],"/uploads/images/aboutus") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="About Biffl" class=" control-label col-md-4 text-left"> About Biffl </label>
										<div class="col-md-6">
										  <textarea name='about_biffl' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['about_biffl'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="About Image" class=" control-label col-md-4 text-left"> About Image </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="about_image" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="about_image-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["about_image"],"/uploads/images/aboutus") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Background" class=" control-label col-md-4 text-left"> Background </label>
										<div class="col-md-6">
										  <textarea name='background' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['background'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Background Image" class=" control-label col-md-4 text-left"> Background Image </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="background_image" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="background_image-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["background_image"],"/uploads/images/aboutus") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Vission" class=" control-label col-md-4 text-left"> Vission </label>
										<div class="col-md-6">
										  <textarea name='vission' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['vission'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Vission Image" class=" control-label col-md-4 text-left"> Vission Image </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="vission_image" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="vission_image-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["vission_image"],"/uploads/images/aboutus") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Mission" class=" control-label col-md-4 text-left"> Mission </label>
										<div class="col-md-6">
										  <textarea name='mission' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['mission'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> {!! Form::hidden('mission_image', $row['mission_image']) !!}					
									  <div class="form-group row  " >
										<label for="Goal" class=" control-label col-md-4 text-left"> Goal </label>
										<div class="col-md-6">
										  <textarea name='goal' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['goal'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Goal Image" class=" control-label col-md-4 text-left"> Goal Image </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="goal_image" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="goal_image-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["goal_image"],"/uploads/images/aboutus") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Objectives" class=" control-label col-md-4 text-left"> Objectives </label>
										<div class="col-md-6">
										  <textarea name='objectives' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['objectives'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Strategic" class=" control-label col-md-4 text-left"> Strategic </label>
										<div class="col-md-6">
										  <textarea name='strategic' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['strategic'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Strategic Image" class=" control-label col-md-4 text-left"> Strategic Image </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="strategic_image" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="strategic_image-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["strategic_image"],"/uploads/images/aboutus") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> {!! Form::hidden('add_info2', $row['add_info2']) !!}{!! Form::hidden('add_info3', $row['add_info3']) !!}					
									  <div class="form-group row  " >
										<label for="Status" class=" control-label col-md-4 text-left"> Status </label>
										<div class="col-md-6">
										  
					<?php $status = explode(',',$row['status']);
					$status_opt = array( '1' => 'Active' ,  '2' => 'Inactive' , ); ?>
					<select name='status' rows='5'   class='select2 '  > 
						<?php 
						foreach($status_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['status'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> {!! Form::hidden('updated_at', $row['updated_at']) !!}</fieldset></div>

			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-default btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-default btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
				  </div>	  
			
		</div> 
		 <input type="hidden" name="action_task" value="public" />
		 {!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
