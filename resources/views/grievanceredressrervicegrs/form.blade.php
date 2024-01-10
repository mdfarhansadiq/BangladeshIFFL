@extends('layouts.app')

@section('content')
<div class="page-header"><h2> {{ $pageTitle }} <small> {{ $pageNote }} </small> </h2></div>

	{!! Form::open(array('url'=>'grievanceredressrervicegrs?return='.$return, 'class'=>'form-horizontal validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
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
						<fieldset><legend> Grievance Redress Service (GRS)</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Grievance Title" class=" control-label col-md-4 text-left"> Grievance Title <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <input  type='text' name='Grievance_Title' id='Grievance_Title' value='{{ $row['Grievance_Title'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Project Involved" class=" control-label col-md-4 text-left"> Project Involved </label>
										<div class="col-md-6">
										  <input  type='text' name='Project_Involved' id='Project_Involved' value='{{ $row['Project_Involved'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Adverse Impact" class=" control-label col-md-4 text-left"> Adverse Impact </label>
										<div class="col-md-6">
										  <input  type='text' name='Adverse_Impact' id='Adverse_Impact' value='{{ $row['Adverse_Impact'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Submitted By" class=" control-label col-md-4 text-left"> Submitted By </label>
										<div class="col-md-6">
										  <input  type='text' name='Submitted_By' id='Submitted_By' value='{{ $row['Submitted_By'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Submission For" class=" control-label col-md-4 text-left"> Submission For </label>
										<div class="col-md-6">
										  <input  type='text' name='Submission_For' id='Submission_For' value='{{ $row['Submission_For'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Cell No" class=" control-label col-md-4 text-left"> Cell No <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <input  type='text' name='Cell_No' id='Cell_No' value='{{ $row['Cell_No'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Email" class=" control-label col-md-4 text-left"> Email <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <input  type='text' name='Email' id='Email' value='{{ $row['Email'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Address" class=" control-label col-md-4 text-left"> Address <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <textarea name='Address' rows='5' id='Address' class='form-control form-control-sm '  
				         required  >{{ $row['Address'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Relevant Document" class=" control-label col-md-4 text-left"> Relevant Document </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-copy"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="Relevant_Document" class="upload"       />
						</div>
						<div class="Relevant_Document-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["Relevant_Document"],"/uploads/images/grs") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> {!! Form::hidden('add_info1', $row['add_info1']) !!}{!! Form::hidden('add_info2', $row['add_info2']) !!}{!! Form::hidden('add_info3', $row['add_info3']) !!}{!! Form::hidden('add_info4', $row['add_info4']) !!}{!! Form::hidden('serial', $row['serial']) !!}{!! Form::hidden('category', $row['category']) !!}					
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
									  </div> {!! Form::hidden('created_at', $row['created_at']) !!}</fieldset></div>
	
		</div>

		<input type="hidden" name="action_task" value="save" />
		
		</div>
	</div>		
	{!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		 	
		 	 

		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("grievanceredressrervicegrs/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop