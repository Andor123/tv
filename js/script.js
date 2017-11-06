function showTable() {
    var form = $('#tv_list');
    $.ajax({
        method: "POST",
        url: "index.php?pg=tv_list&ajax=1",
        dataType: "json",
        data: form.serializeArray(),
        success: function (response) {
            console.log(response);
            $('#table').fadeOut(400, function () {
                $('#table').html(response.html).fadeIn();
            });
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        }
    });
}