$(document).ready(function () {
    $('#myBtn').click(function () {
        $.ajax('ajax.php', {

            success: function (data) {
                alert('from server' + ' ' + data)
            },
            error: function () {
                alert('Somethings Wrong ')
            }
        });
    })


});