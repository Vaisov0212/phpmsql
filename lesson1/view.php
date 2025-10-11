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

    <div class="container mt-5">
        <div class="row mb-4">
            <div class="col">
                <h2>Foydalanuvchilar ro'yxati</h2>
            </div>
            <div class="col text-end">
                <a href="create.html" class="btn btn-success">
                    <i class="fas fa-plus"></i> Yangi foydalanuvchi
                </a>
            </div>
        </div>

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
                            <!-- JavaScript orqali to'ldiriladi -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Misol ma'lumotlar
        let users = [
            { id: 1, full_name: "Abdullayev Ali", email: "ali@example.com", password: "12345" },
            { id: 2, full_name: "Karimova Nodira", email: "nodira@example.com", password: "password123" },
            { id: 3, full_name: "Toshmatov Bobur", email: "bobur@example.com", password: "qwerty" }
        ];

        // Userlarni ko'rsatish
        function displayUsers() {
            const tableBody = document.getElementById('usersTable');
            tableBody.innerHTML = '';
            
            users.forEach(user => {
                const row = `
                    <tr>
                        <td>${user.id}</td>
                        <td>${user.full_name}</td>
                        <td>${user.email}</td>
                        <td>
                            <a href="update.html?id=${user.id}" class="btn btn-sm btn-warning">
                                <i class="fas fa-edit"></i> Tahrirlash
                            </a>
                            <a href="delete.html?id=${user.id}" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i> O'chirish
                            </a>
                        </td>
                    </tr>
                `;
                tableBody.innerHTML += row;
            });
        }

        displayUsers();
    </script>
</body>
</html>