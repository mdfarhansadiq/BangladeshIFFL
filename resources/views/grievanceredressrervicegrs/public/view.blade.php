<div class="container" class="pt-3 pb-3">
    <div class="row m-b-lg animated fadeInDown delayp1 text-center">
        <h3> {{ $pageTitle }} <small> {{ $pageNote }} </small></h3>
        <hr />       
    </div>
</div>
<div class="m-t">
	<div class="table-container" > 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
			
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) }}</td>
						<td>{{ $row->id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Grievance Title', (isset($fields['Grievance_Title']['language'])? $fields['Grievance_Title']['language'] : array())) }}</td>
						<td>{{ $row->Grievance_Title}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Project Involved', (isset($fields['Project_Involved']['language'])? $fields['Project_Involved']['language'] : array())) }}</td>
						<td>{{ $row->Project_Involved}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Adverse Impact', (isset($fields['Adverse_Impact']['language'])? $fields['Adverse_Impact']['language'] : array())) }}</td>
						<td>{{ $row->Adverse_Impact}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Submitted By', (isset($fields['Submitted_By']['language'])? $fields['Submitted_By']['language'] : array())) }}</td>
						<td>{{ $row->Submitted_By}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Submission For', (isset($fields['Submission_For']['language'])? $fields['Submission_For']['language'] : array())) }}</td>
						<td>{{ $row->Submission_For}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Cell No', (isset($fields['Cell_No']['language'])? $fields['Cell_No']['language'] : array())) }}</td>
						<td>{{ $row->Cell_No}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Email', (isset($fields['Email']['language'])? $fields['Email']['language'] : array())) }}</td>
						<td>{{ $row->Email}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Address', (isset($fields['Address']['language'])? $fields['Address']['language'] : array())) }}</td>
						<td>{{ $row->Address}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Relevant Document', (isset($fields['Relevant_Document']['language'])? $fields['Relevant_Document']['language'] : array())) }}</td>
						<td>{{ $row->Relevant_Document}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Add Info1', (isset($fields['add_info1']['language'])? $fields['add_info1']['language'] : array())) }}</td>
						<td>{{ $row->add_info1}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Add Info2', (isset($fields['add_info2']['language'])? $fields['add_info2']['language'] : array())) }}</td>
						<td>{{ $row->add_info2}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Add Info3', (isset($fields['add_info3']['language'])? $fields['add_info3']['language'] : array())) }}</td>
						<td>{{ $row->add_info3}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Add Info4', (isset($fields['add_info4']['language'])? $fields['add_info4']['language'] : array())) }}</td>
						<td>{{ $row->add_info4}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Serial', (isset($fields['serial']['language'])? $fields['serial']['language'] : array())) }}</td>
						<td>{{ $row->serial}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Category', (isset($fields['category']['language'])? $fields['category']['language'] : array())) }}</td>
						<td>{{ $row->category}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Status', (isset($fields['status']['language'])? $fields['status']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->status,'status','1:vmsl_status:id:name') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Created At', (isset($fields['created_at']['language'])? $fields['created_at']['language'] : array())) }}</td>
						<td>{{ $row->created_at}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	