

		 {!! Form::open(array('url'=>'loanrequest', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Loan Request</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="First Name" class=" control-label col-md-4 text-left"> First Name </label>
										<div class="col-md-6">
										  <input  type='text' name='name' id='name' value='{{ $row['name'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Last Name" class=" control-label col-md-4 text-left"> Last Name </label>
										<div class="col-md-6">
										  <input  type='text' name='address' id='address' value='{{ $row['address'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> {!! Form::hidden('business_name', $row['business_name']) !!}{!! Form::hidden('business_address', $row['business_address']) !!}{!! Form::hidden('business_sector', $row['business_sector']) !!}{!! Form::hidden('business_experience', $row['business_experience']) !!}{!! Form::hidden('district', $row['district']) !!}{!! Form::hidden('contact_number', $row['contact_number']) !!}{!! Form::hidden('email', $row['email']) !!}					
									  <div class="form-group row  " >
										<label for="Organization" class=" control-label col-md-4 text-left"> Organization </label>
										<div class="col-md-6">
										  <input  type='text' name='company_name' id='company_name' value='{{ $row['company_name'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> {!! Form::hidden('company_address', $row['company_address']) !!}					
									  <div class="form-group row  " >
										<label for="Designation" class=" control-label col-md-4 text-left"> Designation </label>
										<div class="col-md-6">
										  <input  type='text' name='company_designation' id='company_designation' value='{{ $row['company_designation'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Loan" class=" control-label col-md-4 text-left"> Loan </label>
										<div class="col-md-6">
										  <select name='loan_type' rows='5' id='loan_type' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
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
									  </div> {!! Form::hidden('created_at', $row['created_at']) !!}{!! Form::hidden('updated_at', $row['updated_at']) !!}</fieldset></div>

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
		
		
		$("#loan_type").jCombo("{!! url('loanrequest/comboselect?filter=vmsl_loan:id:name') !!}",
		{  selected_value : '{{ $row["loan_type"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
