@php
 $category = DB::table('vmsl_email_template_category')->where('title', 'LIKE', "%Final Selected%")->first();
 if($category){
    $template = DB::table('vmsl_email_template')->where('category', $category->id)->first();
 }else{
    $template = null;
 }
@endphp

<p style="margin-bottom: 5px;margin-top: 5px;"><b>Subject: </b> {{ $template->subject??'' }} </p>

<p style="margin-bottom: 5px;margin-top: 5px;"><b>{{ $template->created_at??'' }}</b> {{ $data['job'] }}</p>

<p style="margin-bottom: 5px;margin-top: 5px;"><b>{{ $template->template??'' }}</b> {{ $data['date'] }}</p>

<p style="margin-bottom: 5px;margin-top: 5px;"><b>{{ $template->add1??'' }}</b> {{ $data['time'] }}</p>

<p style="margin-bottom: 0px;margin-top: 5px;">{{ $template->header??'' }} <b>{{ $data['name'] }},</b></p>

<p style="margin-bottom: 5px;margin-top: 0px;">{!! $template->body !!}</p>

<p>{!! $template->footer !!}</p>