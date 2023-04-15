$(document).ready(function () {

    $('#myform').submit(function (e) {
        e.preventDefault();

                $.ajax({
                    type: "POST",
                    url: "ajax.php",
                    data: $(this).serialize(),
        
                    success: function (response) {
                        var jsonData = JSON.parse(response);
                        if (jsonData.success == 1) {
                            location.href = 'panel.php';
                        } else {
                            alert('اطلاعات وارد شده اشتباه می باشد');
                        }
                    }
                });

    });




});