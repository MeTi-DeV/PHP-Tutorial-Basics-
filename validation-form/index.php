<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PHP Form Validation</title>
</head>

<body>
    <?php
    $nameErr = $emailErr = $phoneErr = $genderErr = $agreeErr = '';
    $name = $email = $phone = $gender = $agree = '';
    function ($data) {
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    };
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST['name'])) {

        }
    }
    ?>
    <div class="container">
        <div class="col">
            <div class="row">
                <h2>PHP Form Validation</h2>
                <br>
                <form action="index.php" method="post" class="">
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationServer01">Name</label>
                            <input type="text" class="form-control is-valid" id="validationServer01"
                                placeholder="Enter Your Name" name="name" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationServer01">Email</label>
                            <input type="email" class="form-control is-valid" id="validationServer01"
                                placeholder="Enter Your Email" name="email" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationServer01">Phone</label>
                            <input type="tel" class="form-control is-valid" id="validationServer01"
                                placeholder="Enter Your Phone Number" name="phone" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-1 pt-0">Gender</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                            value="male" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                            value="female">
                                        <label class="form-check-label" for="gridRadios2">
                                            Female
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <br>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" name="agree"
                                    required>
                                <label class="form-check-label" for="invalidCheck2">
                                    Agree to terms and conditions
                                </label>
                            </div>
                        </div>
                        <br>
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html>