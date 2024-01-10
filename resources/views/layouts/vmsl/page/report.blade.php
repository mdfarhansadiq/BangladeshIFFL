@include('layouts.default.header')
<style>
#guidelines{
    height: 350px;
    background-repeat: no-repeat;
    background-position-x: center;
    background-size: cover; 
    margin-top: -2px; 
}    
</style>
<section id="guidelines" style="background-image: url('/uploads/images/reports/{{$category->banner}}');">
    <div class="banner_overlay">
        <div class="container">
            
        </div>
    </div>
</section>

<section id="etender_table">
    <div class="banner_overlay">
    <div class="container">
        <div class="row pt-5">
            <h3>{{ $category->title }}</h3>
            <!--<p> {{ $category->description }} </p>-->
        </div>
        <div class="row etener_row">
            <div class="col-md-12 banner_text myresponsive_datatable">
                <table class="table table-bordered data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>title</th>
                            <th>Category</th>
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
        ajax: "{{ route('report.data', $category->id) }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'title', name: 'title'},
            {data: 'category_title', name: 'category_title'},
            {data: 'action', name: 'action', orderable: false, searchable: false,class:'download_td'},
        ]
    });
    
  });
</script>


@include('layouts.default.footer')