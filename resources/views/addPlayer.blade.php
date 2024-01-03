<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Player</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container"></div>
    <div class="row">
        <div class="col-4">
              <h1>Add New User</h1>
              <form action="" method="POST">
                <div class="mb-3">
                    <label for="" class="form-lable">Name</label>
                    <input type="text" class="form-control" name="playerName">
                </div>
                <div class="mb-3">
                    <label for="" class="form-lable">Email</label>
                    <input type="text" class="form-control" name="playerEmail">
                </div>
                <div class="mb-3">
                    <label for="" class="form-lable">Age</label>
                    <input type="text" class="form-control" name="playerAge">
                </div>
                <div class="mb-3">
                    <label for="" class="form-lable">City</label>
                    <input type="text" class="form-control" name="playerCity">
                </div>
                     <button type="submit" class="btn btn-primary btn-sm">Submit</button>
              </form>
        </div>
    </div>
</div>
</body>
</html>
