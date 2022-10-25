{{-- <!DOCTYPE html>
<html>
<head>
<title>Laravel 9 Live search using Jquery AJAX</title>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
</head>
<body>
<div class="container">
    <h3 align="center">Laravel 9 Live search using Jquery AJAX</h3><br />
    <div class="row">
    <h2>Search Customer Total Data : <span id="total_records"></span></h2>
    <div class="col-12">
        <div class="form-group">
            <input type="text" name="search" id="search" class="form-control" placeholder="Search Customer Data" />
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
            <thead>
                <tr>
                <th>Customer Name</th>
                <th>Address</th>
                <th>City</th>
                <th>Postal Code</th>
                <th>Country</th>
                </tr>
            </thead>
            <tbody></tbody>
            </table>
        </div>
    </div>    
    </div>
</div>
<script>
$(document).ready(function(){
 
    fetch_customer_data();
 
    function fetch_customer_data(query = '')
    {
        $.ajax({
            url:"{{ route('action') }}",
            method:'GET',
            data:{query:query},
            dataType:'json',
            success:function(data)
            {
                $('tbody').html(data.table_data);
                $('#total_records').text(data.total_data);
            }
        })
    }
 
    $(document).on('keyup', '#search', function(){
        var query = $(this).val();
        fetch_customer_data(query);
    });
});
</script>
</body>
</html> --}}