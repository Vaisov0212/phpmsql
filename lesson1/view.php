<?php
session_start();
if(empty($_SESSION['csrf'])){
    $_SESSION['csrf']=bin2hex(random_bytes(32));
}
$csrf=$_SESSION['csrf'];
include("db/connect_db.php");

$sql="SELECT id, name,email,password FROM users";
$users=$conn->query($sql);

if($users->num_rows>0){
    $users->fetch_assoc();
}

$conn->close();


?>


<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foydalanuvchilar ro'yxati</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-users"></i> User Management</a>
        </div>
    </nav>
         <?php
                if(!empty($_SESSION["success"]))
                    echo '<div class="alert alert-success" role="alert">';
                    echo $_SESSION["success"];
                    echo   "  </div>";
                    unset($_SESSION["success"]);
                ?>
    <div class="container mt-5">
        <div class="row mb-4">
            <div class="col">
                <h2>Foydalanuvchilar ro'yxati</h2>
            </div>
            <div class="col text-end">
                <a href="index.php" class="btn btn-success">
                    <i class="fas fa-plus"></i> Yangi foydalanuvchi
                </a>
            </div>
        </div>
        <ul class="text-danger">
                <?php
                if(!empty($_SESSION["errors"])){
                    $errors=$_SESSION["errors"];
                    foreach($errors as $name => $message){
                        echo  "<li >".$name." ".$message ."</li>";
                    }
                }
                    unset($_SESSION["errors"]);
            ?>
        </ul>
        <div class="card shadow">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="table-primary">
                            <tr>
                                <th>ID</th>
                                <th>To'liq ismi</th>
                                <th>Email</th>
                                <th>Amallar</th>
                            </tr>
                        </thead>
                        <tbody id="usersTable">
                           <?php
                              foreach($users as $user){
                               echo ' <tr>
                                        <td>'.$user["id"].'</td>
                                        <td>'.$user["name"].'</td>
                                        <td>'.$user["email"].'</td>
                                        <td>
                                              <form action="">
                                                <input type="hidden" name="user_id" value="'.$user["id"].'">
                                                <input type="hidden" name="token" value="'.$csrf.'">
                                                <button href="update.html?id=${user.id}" class="btn btn-sm btn-warning">
                                                    <i class="fas fa-edit"></i> edit
                                                </button>
                                                </form>
                                                <form action="db/delete.php" method="POST">
                                                <input type="hidden" name="user_id" value="'.$user["id"].'">
                                                <input type="hidden" name="token" value="'.$csrf.'">
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash"></i> delete
                                                </button>
                                            </form>
                                        </td>
                                 </tr>';
                              }
                           ?>
                         
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>