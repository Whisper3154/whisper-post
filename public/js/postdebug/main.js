$(document).ready(function () {
    url = '/task/';
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('#task input[name="_token"]').val()
        }
    });


    $('#submit').on('click',function() {
        var url = $('#url').val();
        var request = $('#request').val();
        $.ajax({
            type: "GET",
            url: "debug",
            dataType: "json",
            data: {
                'url': url,
                'request': request
            },
            success: function(data){
                alert(data);
            },
            error: function (data, json, errorThrown) {
                console.log(data);
                var errors = data.responseJSON;
                var errorsHtml= '';
                $.each( errors, function( key, value ) {
                    errorsHtml += '<li>' + value[0] + '</li>';
                });
                toastr.error( errorsHtml , "Error " + data.status +': '+ errorThrown);
            }
        });
    });
});