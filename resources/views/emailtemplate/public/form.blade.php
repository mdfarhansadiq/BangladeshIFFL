

		 {!! Form::open(array('url'=>'emailtemplate', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Email Template</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Category" class=" control-label col-md-4 text-left"> Category <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <select name='category' rows='5' id='category' class='select2 ' required  ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Header" class=" control-label col-md-4 text-left"> Header </label>
										<div class="col-md-6">
										  <input  type='text' name='header' id='header' value='{{ $row['header'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Subject" class=" control-label col-md-4 text-left"> Subject </label>
										<div class="col-md-6">
										  <input  type='text' name='subject' id='subject' value='{{ $row['subject'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Job type" class=" control-label col-md-4 text-left"> Job type </label>
										<div class="col-md-6">
										  <input  type='text' name='created_at' id='created_at' value='{{ $row['created_at'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Time" class=" control-label col-md-4 text-left"> Time </label>
										<div class="col-md-6">
										  <input  type='text' name='add1' id='add1' value='{{ $row['add1'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Date" class=" control-label col-md-4 text-left"> Date </label>
										<div class="col-md-6">
										  <input  type='text' name='template' id='template' value='{{ $row['template'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Body" class=" control-label col-md-4 text-left"> Body </label>
										<div class="col-md-6">
										  <textarea name='body' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['body'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Footer" class=" control-label col-md-4 text-left"> Footer </label>
										<div class="col-md-6">
										  <textarea name='footer' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['footer'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
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
									  </div> </fieldset></div>

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
		
		
		$("#category").jCombo("{!! url('emailtemplate/comboselect?filter=vmsl_email_template_category:id:title') !!}",
		{  selected_value : '{{ $row["category"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
