<?php
include_once 'User.php';
$users = new User();
$allUsers = $users->findAllUsers();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $deleteUser = $users->deleteUser($id);
    if ($deleteUser) {
        header('Location: list.php');
    }
}

?>

<html lang="en">
<head>
    <title>CRUD</title>
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="crudEvent.js"></script>

</head>

<body>

<nav class="nav">
    <a class="nav-link active" href="index.php">Add User</a>
    <a class="nav-link" href="list.php">List Users</a>
</nav>

<div class="row d-flex justify-content-center align-items-center" style="min-height: 75%">

    <div class="form-container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $i = 1;
                foreach ($allUsers as $key => $user) {
            ?>
            <tr>
                <th scope="row"><?php echo $i++; ?></th>
                <td><?php echo $user->firstname; ?></td>
                <td><?php echo $user->lastname; ?></td>
                <td><?php echo $user->email; ?></td>
                <td><?php echo $user->phone; ?></td>
                <td>
                    <a class="btn btn-primary btn-sm" href="edit.php?id=<?php echo $user->id ?>">Edit</a>
                    <a class="btn btn-danger btn-sm" href="list.php?id=<?php echo $user->id ?>">Delete</a>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
