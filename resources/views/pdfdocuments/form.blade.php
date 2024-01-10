@extends('layouts.app')

@section('content')
<div class="page-header"><h2> {{ $pageTitle }} <small> {{ $pageNote }} </small> </h2></div>

	{!! Form::open(array('url'=>'pdfdocuments?return='.$return, 'class'=>'form-horizontal validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
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
						<fieldset><legend> PDF Documents</legend>
				{!! Form::hidden('id', $row['id']) !!}
									  <div class="form-group row  " >
										<label for="Document Type" class=" control-label col-md-4 text-left"> Document Type <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <select name='document_type' rows='5' id='document_type' class='select2 ' required  ></select>
										 </div>
										 <div class="col-md-2">

										 </div>
									  </div>
									  <div class="form-group row  " >
										<label for="Name" class=" control-label col-md-4 text-left"> Name <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <input  type='text' name='name' id='name' value='{{ $row['name'] }}'
						required     class='form-control form-control-sm ' />
										 </div>
										 <div class="col-md-2">

										 </div>
									  </div>
									  <div class="form-group row  " >
										<label for="Pdf File" class=" control-label col-md-4 text-left"> Pdf File <span class="asterix"> * </span></label>
										<div class="col-md-6">

						<div class="fileUpload btn " >
						    <span>  <i class="fa fa-copy"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="pdf_link" class="upload"       />
						</div>
						<div class="pdf_link-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["pdf_link"],"/uploads/files") !!}
						</div>

										 </div>
										 <div class="col-md-2">

										 </div>
									  </div>

                            <div class="form-group row  " >
                                <label for="Month" class=" control-label col-md-4 text-left"> Month <span class="asterix"> * </span></label>
                                <div class="col-md-6">
                                    <input type="month" name='month' required value="{{ $row['month'] }}" >
                                </div>
                                <div class="col-md-2">

                                </div>
                            </div>

									  <div class="form-group row  " >
										<label for="Status" class=" control-label col-md-4 text-left"> Status <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <select name='status' rows='5' id='status' class='select2 ' required  ></select>
										 </div>
										 <div class="col-md-2">

										 </div>
									  </div> </fieldset></div>

		</div>

		<input type="hidden" name="action_task" value="save" />

		</div>
	</div>
	{!! Form::close() !!}

   <script type="text/javascript">
	$(document).ready(function() {



		$("#document_type").jCombo("{!! url('pdfdocuments/comboselect?filter=vmsl_document_type:id:name') !!}",
		{  selected_value : '{{ $row["document_type"] }}' });

		$("#status").jCombo("{!! url('pdfdocuments/comboselect?filter=vmsl_status:id:name') !!}",
		{  selected_value : '{{ $row["status"] }}' });



		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("pdfdocuments/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();
			return false;
		});

	});
	</script>
@stop
