$(document).ready(function () {

    $(document).on('input', "#search_promo", function () {
        var search_promo = $(this).val();
        // alert();

        jQuery.ajax({

            url: "{{ route('ajax_search_promo') }}",
            type: 'post',
            datatype: 'html',
            cache: false,
            data: { search_promo: search_promo, "_token": "{{csrf_token()  }}" },
            success: function (data) {
                $("#ajax_search_result").html(data);
            },
            error: function () {

            }
        });





    });



});