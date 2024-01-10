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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Name', (isset($fields['name']['language'])? $fields['name']['language'] : array())) }}</td>
						<td>{{ $row->name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Designation', (isset($fields['designation']['language'])? $fields['designation']['language'] : array())) }}</td>
						<td>{{ $row->designation}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Representing', (isset($fields['representing']['language'])? $fields['representing']['language'] : array())) }}</td>
						<td>{{ $row->representing}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Message', (isset($fields['message']['language'])? $fields['message']['language'] : array())) }}</td>
						<td>{{ $row->message}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Image', (isset($fields['image']['language'])? $fields['image']['language'] : array())) }}</td>
						<td>{{ $row->image}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Type', (isset($fields['type']['language'])? $fields['type']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->type,'type','1:vmsl_team_type:id:name') }} </td>
						
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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Linkedin', (isset($fields['linkedin']['language'])? $fields['linkedin']['language'] : array())) }}</td>
						<td>{{ $row->linkedin}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Instagram', (isset($fields['instagram']['language'])? $fields['instagram']['language'] : array())) }}</td>
						<td>{{ $row->instagram}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Pinterest', (isset($fields['pinterest']['language'])? $fields['pinterest']['language'] : array())) }}</td>
						<td>{{ $row->pinterest}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Whatsup', (isset($fields['whatsup']['language'])? $fields['whatsup']['language'] : array())) }}</td>
						<td>{{ $row->whatsup}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Email', (isset($fields['email']['language'])? $fields['email']['language'] : array())) }}</td>
						<td>{{ $row->email}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Dribbble', (isset($fields['dribbble']['language'])? $fields['dribbble']['language'] : array())) }}</td>
						<td>{{ $row->dribbble}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Youtube', (isset($fields['youtube']['language'])? $fields['youtube']['language'] : array())) }}</td>
						<td>{{ $row->youtube}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Serial', (isset($fields['priority']['language'])? $fields['priority']['language'] : array())) }}</td>
						<td>{{ $row->priority}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Status', (isset($fields['status']['language'])? $fields['status']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->status,'status','1:vmsl_status:id:name') }} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	