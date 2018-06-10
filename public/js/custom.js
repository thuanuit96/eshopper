$( document ).ready(function() {
    $(".filterMore").on("change",function () {
        // var id=$(this).val();
        // $('option').attr("selected","selected");
        var name=$(this).find('option:selected').attr("name");
        console.log('name',name);
        var id=$(this).val();
        console.log(id);
        $.ajax(
            {
                url: 'filter',
                type: 'get',
                data: {
                    "_token": "{{ csrf_token() }}",
                    id_subcategory: id,
                    name:name,


                },
                datatype:"html",
                success: function (result) {
                    console.log(result);
                    $('.listProductcategory').html(result);

                },
                error: function(e) {
                    alert('Error' + e);
                }
            } );

    })
});