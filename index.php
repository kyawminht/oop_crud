<?php

    require_once 'DB.php';

    $db=new DB();
    $students=$db->index();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-10 justify-content-center">
            <h1>All student</h1>
            <a href="create.php" class="btn btn-dark btn-sm">create</a>
            <table class="table table-striped table-bordered">
                <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Action</th>
                </thead>
                <tbody>
                <?php foreach ($students as $student):?>
                <tr>
                    <td><?php echo $student->id ?></td>
                    <td><?php echo $student->name ?></td>
                    <td><?php echo $student->email ?></td>
                    <td><?php echo $student->gender ?></td>
                    <td><?php echo $student->age ?></td>
                    <td>
                        <a href="show.php?id=<?php echo $student->id ?>" class="btn btn-primary">Show</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>