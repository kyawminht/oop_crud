
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-10 justify-content-center">
            <h1>Create new student</h1>
            <form action="store.php" method="post">
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" >
                </div>

                <div class="form-group mb-3">
                    <label for="name">Email</label>
                    <input type="email" class="form-control" name="email" >
                </div>

                <div class="form-group mb-3">
                    <select name="gender" id="" class="form-control">
                        <option value="Gender disable selected" >Gender</option>
                        <option value="M" >Male</option>
                        <option value="F" >Female</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="name">Age</label>
                    <input type="number" class="form-control" name="age">
                </div>
                <button class="btn btn-secondary">create</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>