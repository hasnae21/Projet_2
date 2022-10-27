$(document).ready(function () {
    $(document).on('input', "#searchbypromoname", function () {
        var searchbypromoname=$(this).val();
        // alert('test')

        jQuery.ajax({
            url:"{{route('promo_search')}}",
            type: 'post',
            datatype: 'html',
            cache: false,
            data: { searchbypromoname: searchbypromoname, "_token": "{{csrf_token()}}" },
            success: function (data) {
                $("#ajax_search_result").html(data);
            },
            error: function () {
                //error
            }
        });

    });

});
