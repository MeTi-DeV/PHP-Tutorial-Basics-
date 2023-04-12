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
    $nameErr = $emailErr = $phoneErr = $genderErr = $agreeErr = $totalErr = '';
    $name = $email = $phone = $gender = $agree = '';
    function input_data($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST['name'])) {
            $nameErr = 'Name Is Required';
        } else {
            $name = input_data($_POST['name']);
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                $nameErr = 'only alphabets and whitespace are allowed';
            }
        }
        if (empty($_POST['email'])) {
            $emailErr = 'Email Is Required';
        } else {
            $email = input_data($_POST['email']);
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = 'Invalid Email';
            }
        }
        if (empty($_POST['phone'])) {
            $phoneErr = 'Phone Is Required';
        } else {
            $phone = input_data($_POST['phone']);
            if (!preg_match("/^[0-9]*$/", $phone)) {
                $phoneErr = 'Invalid Phone';
            }
            if ($_POST['phone'] != 10) {
                $phoneErr = 'Phone Number Should be more than 10 digits';
            }
        }
        if (empty($_POST['gender'])) {
            $genderErr = 'Gender Is Required';
        } else {
            $gender = $_POST['gender'];
        }
        if (empty($_POST['agree'])) {
            $agreeErr = 'Agree Is Required';
        } else {
            $agree = $_POST['agree'];
        }
        if (empty($_POST)) {
            $totalErr = 'All Fields are Require';
        }
    }
    ?>
    <div class="container">
        <div class="col">
            <div class="row">
                <h2>PHP Form Validation</h2>
                <br>
                <br>
                
                <form action="index.php" method="post">
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="">Name</label>
                            <input type="text" id=""
                            placeholder="Enter Your Name" name="name" >
                            
                            <span><?=$nameErr?></span>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="">Email</label>
                            <input type="email" id=""
                            placeholder="Enter Your Email" name="email" >
                            
                            <span><?=$emailErr?></span>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="">Phone</label>
                            <input type="tel" id=""
                            placeholder="Enter Your Phone Number" name="phone" >
                            
                            <span><?=$phoneErr?></span>
                        </div>
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-1 pt-0">Gender</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id=""
                                        value="male">
                                        <label class="form-check-label" for="">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id=""
                                        value="female">
                                        <label class="form-check-label" for="">
                                            Female
                                        </label>
                                    </div>
                                </div>
                                <span><?=$genderErr?></span>
                            </div>
                        </fieldset>
                        <br>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" name="agree"
                                >
                                <label class="form-check-label" for="">
                                    Agree to terms and conditions
                                </label>
                            </div>
                            <span><?=$agreeErr?></span>
                        </div>
                        <br>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html>