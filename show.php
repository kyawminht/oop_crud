<?php

require_once 'DB.php';

$db=new DB();
$student=$db->show();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-10 justify-content-center">
            <h1><?php echo $student->name ?></h1>
                <ul>
                    <li><?php echo $student->email ?></li>
                    <li><?php echo $student->gender ?></li>
                    <li><?php echo $student->age ?></li>
                    <a href="delete.php?id=<?php echo $student->id ?>" class="btn btn-danger">Delete</a>
                    <a href="edit.php?id=<?php echo $student->id ?>" class="btn btn-success">Eidt</a>
                </ul>
        </div>
    </div>
</div>
</body>
</html>