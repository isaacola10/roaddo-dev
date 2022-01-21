<?php
if (isset($_POST['add'])) {
  $createUser = $user->addUser($_POST);
  if($createUser) {
      header('Location: list.php');
  }
}
?>

<html>
<head>
    <title>CRUD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="crudEvent.js"></script>

</head>

<body>
<nav class="nav">
    <a class="nav-link active" href="index.php">Add User</a>
    <a class="nav-link" href="list.php">List Users</a>
</nav>

<div class="d-flex justify-content-center">
    <h3>Edit User</h3>
</div>
<div class="row d-flex justify-content-center align-items-center" style="min-height: 75%">

    <div class="form-container">
        <form method="POST">
            <div class="form-group">
                <div class="row">
                    <label>Firstname</label>
                    <input type="text" name="firstname" id="title" class="form-control" required>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <label>Lastname</label>
                    <input type="text" name="lastname" id="title" class="form-control" required>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <label>E-Mail</label>
                    <input type="email" name="email" id="url" class="form-control" required>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <label>Phone</label>
                    <input type="number" name="phone" id="category" class="form-control" required>
                </div>
            </div>


            <div class="form-group">
                <div class="row">
                    <button class="btn btn-primary" name="add">Submit</button>
                </div>
            </div>

        </form>
    </div>
</div>

</body>
</html>
