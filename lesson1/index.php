
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yangi foydalanuvchi qo'shish</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
               <a class="navbar-brand" href="view.php"><i class="fas fa-users"></i> Users</a>
        </div>
</nav>
                <?php
                if(!empty($_SESSION["success"]))
                echo '<div class="alert alert-success" role="alert">';
                    echo $_SESSION["success"];
                    echo   "  </div>";
                ?>
      
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-success text-white">
                        <h4><i class="fas fa-user-plus"></i> Yangi foydalanuvchi qo'shish</h4>
                       
                    </div>
                     <ul class="text-danger">
                            <?php
                            if(!empty($_SESSION["errors"])){
                                $errors=$_SESSION["errors"];
                                foreach($errors as $name => $message){
                                   echo  "<li >".$name." ".$message ."</li>";
                                }
                            }
                        ?>
                        </ul>
                        
                    <div class="card-body">
                        <form id="createForm" action="db/insert_users.php" method="POST" >
                            <div class="mb-3">
                                <label for="full_name" class="form-label">To'liq ismi *</label>
                                <input type="text" class="form-control" name="name"  id="full_name" >
                            </div>
                            
                            <div class="mb-3">
                                <label for="email" class="form-label">Email *</label>
                                <input type="email" class="form-control" name="email" id="email" >
                            </div>
                            
                            <div class="mb-3">
                                <label for="password" class="form-label">Parol *</label>
                                <input type="password" name="pass" class="form-control" id="password" >
                            </div>

                            <div class="mb-3">
                                <label for="confirm_password" class="form-label">Parolni tasdiqlang *</label>
                                <input type="password" name="confirm_pass" class="form-control" id="confirm_password" >
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="index.html" class="btn btn-secondary">
                                    <i class="fas fa-times"></i> Bekor qilish
                                </a>
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-save"></i> Saqlash
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>

<?php

session_destroy()
?>