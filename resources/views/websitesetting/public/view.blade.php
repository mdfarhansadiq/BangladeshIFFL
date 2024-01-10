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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Phone', (isset($fields['phone']['language'])? $fields['phone']['language'] : array())) }}</td>
						<td>{{ $row->phone}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Email', (isset($fields['email']['language'])? $fields['email']['language'] : array())) }}</td>
						<td>{{ $row->email}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Address', (isset($fields['address']['language'])? $fields['address']['language'] : array())) }}</td>
						<td>{{ $row->address}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('About', (isset($fields['about']['language'])? $fields['about']['language'] : array())) }}</td>
						<td>{{ $row->about}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Header Logo', (isset($fields['header_logo']['language'])? $fields['header_logo']['language'] : array())) }}</td>
						<td>{{ $row->header_logo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Footer Logo', (isset($fields['footer_logo']['language'])? $fields['footer_logo']['language'] : array())) }}</td>
						<td>{{ $row->footer_logo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Facebook', (isset($fields['facebook']['language'])? $fields['facebook']['language'] : array())) }}</td>
						<td>{{ $row->facebook}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Twitter', (isset($fields['twitter']['language'])? $fields['twitter']['language'] : array())) }}</td>
						<td>{{ $row->twitter}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Instagram', (isset($fields['instagram']['language'])? $fields['instagram']['language'] : array())) }}</td>
						<td>{{ $row->instagram}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Linkedin', (isset($fields['linkedin']['language'])? $fields['linkedin']['language'] : array())) }}</td>
						<td>{{ $row->linkedin}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Whatsup', (isset($fields['whatsup']['language'])? $fields['whatsup']['language'] : array())) }}</td>
						<td>{{ $row->whatsup}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Pinterest', (isset($fields['pinterest']['language'])? $fields['pinterest']['language'] : array())) }}</td>
						<td>{{ $row->pinterest}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Youtube', (isset($fields['youtube']['language'])? $fields['youtube']['language'] : array())) }}</td>
						<td>{{ $row->youtube}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Description', (isset($fields['description']['language'])? $fields['description']['language'] : array())) }}</td>
						<td>{{ $row->description}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Map', (isset($fields['map']['language'])? $fields['map']['language'] : array())) }}</td>
						<td>{{ $row->map}} </td>
						
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