@include('layouts.default.header')

<section id="etender">
    <div class="banner_overlay">
        <div class="container">
            
        </div>
    </div>
</section>

<section id="etender_table">
    <div class="banner_overlay">
    <div class="container">
        <div class="row etener_row">
            <h3>E-TENDER</h3>
            <div class="col-md-12 banner_text myresponsive_datatable">
                <table class="table table-bordered data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Start Date</th>
                            <th>End Date</th>
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
        ajax: "{{ route('etender.data') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'title', name: 'title'},
            {data: 'category_title', name: 'category_title'},
            {data: 'start_date', name: 'start_date'},
            {data: 'end_date', name: 'end_date'},
            {data: 'action', name: 'action', orderable: false, searchable: false,class:'download_td'},
        ]
    });
    
  });
</script>


@include('layouts.default.footer')