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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Title', (isset($fields['title']['language'])? $fields['title']['language'] : array())) }}</td>
						<td>{{ $row->title}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Overview', (isset($fields['overview']['language'])? $fields['overview']['language'] : array())) }}</td>
						<td>{{ $row->overview}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Video 1 Title', (isset($fields['video_1_title']['language'])? $fields['video_1_title']['language'] : array())) }}</td>
						<td>{{ $row->video_1_title}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Video 1 Link', (isset($fields['video_1_link']['language'])? $fields['video_1_link']['language'] : array())) }}</td>
						<td>{{ $row->video_1_link}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Video 2 Title', (isset($fields['video_2_title']['language'])? $fields['video_2_title']['language'] : array())) }}</td>
						<td>{{ $row->video_2_title}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Video 2 Link', (isset($fields['video_2_link']['language'])? $fields['video_2_link']['language'] : array())) }}</td>
						<td>{{ $row->video_2_link}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Product 1 Title', (isset($fields['product_1_title']['language'])? $fields['product_1_title']['language'] : array())) }}</td>
						<td>{{ $row->product_1_title}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Product 1 Document', (isset($fields['product_1_document']['language'])? $fields['product_1_document']['language'] : array())) }}</td>
						<td>{{ $row->product_1_document}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Product 2 Title', (isset($fields['product_2_title']['language'])? $fields['product_2_title']['language'] : array())) }}</td>
						<td>{{ $row->product_2_title}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Product 2 Document', (isset($fields['product_2_document']['language'])? $fields['product_2_document']['language'] : array())) }}</td>
						<td>{{ $row->product_2_document}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Product 3 Title', (isset($fields['product_3_title']['language'])? $fields['product_3_title']['language'] : array())) }}</td>
						<td>{{ $row->product_3_title}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Product 3 Document', (isset($fields['product_3_document']['language'])? $fields['product_3_document']['language'] : array())) }}</td>
						<td>{{ $row->product_3_document}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Product 4 Title', (isset($fields['product_4_title']['language'])? $fields['product_4_title']['language'] : array())) }}</td>
						<td>{{ $row->product_4_title}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Product 4 Link', (isset($fields['product_4_link']['language'])? $fields['product_4_link']['language'] : array())) }}</td>
						<td>{{ $row->product_4_link}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Add Info1', (isset($fields['add_info1']['language'])? $fields['add_info1']['language'] : array())) }}</td>
						<td>{{ $row->add_info1}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Category', (isset($fields['category']['language'])? $fields['category']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->category,'category','1:vsml_project_category:id:title') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Serial', (isset($fields['serial']['language'])? $fields['serial']['language'] : array())) }}</td>
						<td>{{ $row->serial}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Status', (isset($fields['status']['language'])? $fields['status']['language'] : array())) }}</td>
						<td>{{ $row->status}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Created At', (isset($fields['created_at']['language'])? $fields['created_at']['language'] : array())) }}</td>
						<td>{{ $row->created_at}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Updated At', (isset($fields['updated_at']['language'])? $fields['updated_at']['language'] : array())) }}</td>
						<td>{{ $row->updated_at}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	