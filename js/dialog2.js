$(document).ready(function () {
    $("#dialog").dialog({
        autoOpen: false,
        modal: true
    });
});

function submitChannel2() {
    var form = $('#tv_update');
    $("#dialog").dialog({
        buttons : {
            "Igen" : function () {
                $.ajax({
                    method: "POST",
                    url: "index.php?pg=tv_update&ajax=1",
                    dataType: "json",
                    data: form.serializeArray(),
                    success: function (response) {
                        if (response.status == 'success') {
                            window.location = "?pg=tv_update&status=success";
                        }
                        else if (response.status == 'error') {
                            window.location = "?pg=tv_update&state=error";
                        }
                        $(this).dialog("close");
                        return false;
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log(errorThrown);
                    }
                });
            },
            "Nem" : function () {
                $(this).dialog("close");
            }
        }
    });
    $('#dialog').dialog("open");
}