@include('layouts.default.header')

<section id="grs_banner">
    <div class="banner_overlay">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center banner_text">
                
            </div>
        </div>
    </div>
    </div>
</section>



<section class="container mt-5">
    <div class="row">
        <div class="col-sm-12 mb-4 col-md-2"></div>
        <div class="col-sm-12 mb-4 col-md-8">
            <div class="form-group">
                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                @endif @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
                @endif
            </div>
            
            <div class="card border_site rounded-0">
                <div class="card-header p-0">
                    <div class="site_bg text-white text-center py-2">
                        <h3><i class="fa fa-envelope"></i> Grievance Redress Service (GRS) </h3>
                    </div>
                </div>
                
                
                <form action="{{ route('grs.page.submit') }}" method="post" enctype="multipart/form-data">
                <div class="card-body p-3 grs_form">
                    
                    
                    
                    <div class="form-group">
                        <label> Grievance Title <span style="color:#f00">*</span> </label>
                        <div class="input-group">
                            <input value="" required type="text" name="Grievance_Title" class="form-control" id="Grievance_Title" :placeholder="Grievance Title">
                            <div class="validation_error" v-if="errors.Grievance_Title" v-html="errors.Grievance_Title[0]" /></div>
                        </div>
                    </div>
       
                    <div class="form-group">
                        <label> Project Involved <span style="color:#f00">*</span> </label>
                        <div class="input-group">
                            <input value="" required type="text" name="Project_Involved" class="form-control" id="Project_Involved" :placeholder="Project Involved">
                            <div class="validation_error" v-if="errors.Project_Involved" v-html="errors.Project_Involved[0]" /></div>
                        </div>
                    </div>
                    
                    
                    <div class="form-group">
                        <label> Adverse Impact<span style="color:#f00">*</span> </label>
                        <div class="input-group">
                            <input value="" required type="text" name="Adverse_Impact" class="form-control" id="Adverse_Impact" :placeholder="Adverse Impact">
                            <div class="validation_error" v-if="errors.Adverse_Impact" v-html="errors.Adverse_Impact[0]" /></div>
                        </div>
                    </div>
                    
                    
                    
                    <div class="form-group">
                        <label>Submitted By<span style="color:#f00">*</span> </label>
                        <div class="input-group">
                            <input value="" required type="text" name="Submitted_By" class="form-control" id="Submitted_By" :placeholder="Submitted By">
                            <div class="validation_error" v-if="errors.Submitted_By" v-html="errors.Submitted_By[0]" /></div>
                        </div>
                    </div>
                    
       
                    <div class="form-group">
                        <label>Submission For<span style="color:#f00">*</span> </label>
                        <div class="input-group">
                            <input value="" required type="text" name="Submission_For" class="form-control" id="Submission_For" :placeholder="Submission For">
                            <div class="validation_error" v-if="errors.Submission_For" v-html="errors.Submission_For[0]" /></div>
                        </div>
                    </div>
       
       
       
                    <div class="form-group">
                        <label>Cell No<span style="color:#f00">*</span> </label>
                        <div class="input-group">
                            <input value="" required type="text" name="Cell_No" class="form-control" id="Cell_No" :placeholder="Cell No">
                            <div class="validation_error" v-if="errors.Cell_No" v-html="errors.Cell_No[0]" /></div>
                        </div>
                    </div>
       
                    <div class="form-group">
                        <label>Email<span style="color:#f00">*</span> </label>
                        <div class="input-group">
                            <input value="" required type="email" name="Email" class="form-control" id="Email" :placeholder="Email">
                            <div class="validation_error" v-if="errors.Email" v-html="errors.Email[0]" /></div>
                        </div>
                    </div>
       
       
                    <div class="form-group">
                        <label>Address<span style="color:#f00">*</span> </label>
                        <div class="input-group">
                            <textarea value="" required type="text" name="Address" class="form-control" id="Address" :placeholder="Address"></textarea>
                            <div class="validation_error" v-if="errors.Address" v-html="errors.Address[0]" /></div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Relevant Document </label>
                        <div class="input-group">
                            <input type="file" name="Relevant_Document" class="form-control" id="Relevant_Document" >
                            <div class="validation_error" v-if="errors.Relevant_Document" v-html="errors.Relevant_Document[0]" /></div>
                        </div>
                    </div>
                    
                    
                    
                    <div class="form-group">
                        @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                        @endif @if(session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                        @endif
                    </div>
                    
                    
       
                    <div class="text-center">
                        <input type="submit" name="submit" :value="SEND" class="btn btn-primary btn-block rounded-0 py-2">
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-sm-12 mb-4 col-md-2"></div>
	</div>
</section>









@include('layouts.default.footer')