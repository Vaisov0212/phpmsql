<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahsulot CRUD</title>
    <link href="css/min.css" rel="stylesheet" >
</head>
<body>
    <div class="container">
        <h1> Mahsulot Boshqaruvi</h1>

        <!-- Xabarlar uchun joy -->
        <!-- PHP da: if(isset($_SESSION['message'])): -->
        <div class="alert alert-success">
            Mahsulot muvaffaqiyatli qo'shildi!
        </div>
        <!-- endif; -->

        <div class="form-section">
            <h2>Yangi Mahsulot Qo'shish</h2>
            <form method="POST" action="create.php" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label for="productName">Mahsulot Nomi:</label>
                    <input type="text" id="productName" name="name" required>
                </div>

                <!-- <div class="form-group">
                    <label for="productImage">Rasm:</label>
                    <input type="file" id="productImage" name="productImage" accept="image/*" required>
                    <div class="image-preview" id="imagePreview"></div>
                </div> -->

                <div class="form-group">
                    <label for="productSubject">Ma'lumot:</label>
                    <textarea id="productSubject" name="su" required></textarea>
                </div>

                <button type="submit" name="add_product" class="btn btn-primary">Qo'shish</button>
            </form>
        </div>

        <div>
            <h2>Mahsulotlar Ro'yxati</h2>
            <table class="products-table">
                <thead>
                    <tr>
                        <th>Rasm</th>
                        <th>Nomi</th>
                        <th>Ma'lumot</th>
                        <th>Soni</th>
                        <th>Amallar</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- PHP foreach loop boshlash: foreach($products as $product): -->
                    <tr>
                        <td>
                            <img src="uploads/sample-product.jpg" alt="Mahsulot" class="product-image">
                            <!-- PHP: <img src="uploads/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="product-image"> -->
                        </td>
                        <td><strong>Mahsulot nomi</strong></td>
                        <!-- PHP: <td><strong><?php echo $product['name']; ?></strong></td> -->
                        
                        <td>Mahsulot tavsifi</td>
                        <!-- PHP: <td><?php echo $product['description']; ?></td> -->
                        
                        <td>10 dona</td>
                        <!-- PHP: <td><?php echo $product['quantity']; ?> dona</td> -->
                        
                        <td>
                            <div class="actions">
                                <a href="edit_product.php?id=1" class="btn btn-success">Tahrirlash</a>
                                <!-- PHP: <a href="edit_product.php?id=<?php echo $product['id']; ?>" class="btn btn-success">Tahrirlash</a> -->
                                
                                <a href="delete_product.php?id=1" class="btn btn-danger" onclick="return confirm('Mahsulotni o\'chirmoqchimisiz?')">O'chirish</a>
                                <!-- PHP: <a href="delete_product.php?id=<?php echo $product['id']; ?>" class="btn btn-danger" onclick="return confirm('Mahsulotni o\'chirmoqchimisiz?')">O'chirish</a> -->
                            </div>
                        </td>
                    </tr>
                    <!-- PHP endforeach; -->

                    <!-- Agar mahsulotlar bo'lmasa: -->
                    <!-- PHP: if(empty($products)): -->
                    <tr>
                        <td colspan="5" class="empty-state">Hozircha mahsulotlar yo'q</td>
                    </tr>
                    <!-- PHP: endif; -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>