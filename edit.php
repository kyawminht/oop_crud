<?php

require_once 'DB.php';

$db=new DB();
$student=$db->edit();

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
            <h1>Update student</h1>
            <form action="update.php" method="post">
                <input type="hidden" name="id" value="<?php echo $student->id ?>">
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $student->name ?>">
                </div>

                <div class="form-group mb-3">
                    <label for="name">Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $student->email ?>">
                </div>

                <div class="form-group mb-3">
                    <select name="gender" id="" class="form-control">
                        <option value="Gender disable selected" >Gender</option>
                        <option value="M" <?php if($student->gender=='M'){ echo "selected" ;} ?> >Male</option>
                        <option value="F" <?php if($student->gender=='F'){ echo "selected" ;} ?> >Female</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="name">Age</label>
                    <input type="number" class="form-control" name="age" value="<?php echo $student->age ?>">
                </div>
                <button class="btn btn-secondary">update</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>