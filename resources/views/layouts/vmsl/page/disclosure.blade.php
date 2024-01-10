@include('layouts.default.header')

<section id="download">
    <div class="banner_overlay">
        <div class="container">
            
        </div>
    </div>
</section>

<section id="etender_table">
    <div class="banner_overlay">
    <div class="container mt-3 mb-3">
        
        @if(count($disclosures) > 0)
        <div class="row mb-5">
        @foreach($disclosures as $data)
         <div class="col-12 col-sm-12 col-md-6 col-lg-6">
              <h5 class="title disclosure_title">{{ $data->title }}</h5>
            <embed src="{{ '/uploads/disclosure/'.$data->document }}" type="application/pdf" width="100%" height="600px">
        </div>
        @endforeach
        </div>
        @endif
        
        
        
        
        
        <!--<div class="row">-->
        <!--     <div class="col-12 col-sm-12 col-md-12 col-lg-12">-->
        <!--        <h5 class="title disclosure_title">CAMD REPORT</h5>-->
        <!--    </div>-->
        <!--</div>-->
        <div class="row">
            <div class="col-md-12 banner_text myresponsive_datatable">
                <table class="table table-bordered data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>title</th>
                            <th>Category</th>
                            <th>Updated Date</th>
                            <th style="width: 200px;text-align: center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</section>


<script type="text/javascript">
  $(function () {
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('disclosure.data') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'title', name: 'title'},
            {data: 'category_title', name: 'category_title'},
            {data: 'updated_at', name: 'updated_at'},
            {data: 'action', name: 'action', orderable: false, searchable: false,class:'download_td'},
        ]
    });
    
  });
</script>


@include('layouts.default.footer')