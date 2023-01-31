<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Profile</title>
</head>

<body>
    <div style="margin: auto 0;  display: flex;
  justify-content: center;
  align-items: center;">
        <?php
        $first_name = $_GET['first_name'];
        $email = $_GET['email'];
        $name_list = ["Mehdi", "Reza", "Negin", "Yashar",];
        if (in_array($first_name,$name_list)) {
            echo "<div class='card text-bg-success mb-3' style='max-width: 18rem;'>
    <div class='card-header'>Success Validate</div>
    <div class='card-body'>
      <h5 class='card-title'>'Hello ' . $first_name</h5>
      <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>";
        } else {
            echo "<div class='card text-bg-danger mb-3' style='max-width: 18rem;'>
  <div class='card-header'>Invalid</div>
  <div class='card-body'>
    <h5 class='card-title'>You are not Valid User</h5>
    <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>";
        } ?>
    </div>

</body>

</html>