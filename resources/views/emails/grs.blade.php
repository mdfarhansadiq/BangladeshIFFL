<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<p>
		    Name : {{ $data['name'] }}<br />
		    Phone : {{ $data['phone'] }}<br />
			Email :  {{ $data['email'] }}<br />
		</p>
		<span> Message : </span>
		<div>
		    
			<b> Project Involved :</b> {{ $data['Project_Involved'] }}
			<br>
			<b> Adverse Impact :</b> {{ $data['Adverse_Impact'] }}
			<br>
			<b> Submitted By :</b> {{ $data['Submitted_By'] }}
			<br>
			<b> Submission For :</b> {{ $data['Submission_For'] }}
			<br>
			<b> Address :</b> {{ $data['Address'] }}
			<br>
			
			<b>Attachment :</b> {{ $data['Relevant_Document'] }}
			<br>
			
		</div>
		<p> Thank You </p><br /><br />
	</body>