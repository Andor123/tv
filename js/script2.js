function hideTable() {
    var form = $('#tv_list');
    $.ajax({
        method: "POST",
        url: "index.php?pg=tv_list&ajax=2",
        dataType: "json",
        data: form.serializeArray(),
        success: function (response) {
            console.log(response);
            $('#table').fadeIn(400, function () {
                $('#table').html(response.html).fadeOut();
            });
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        }
    });
}