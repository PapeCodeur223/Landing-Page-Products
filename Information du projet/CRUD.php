Pour compléter ton projet avec des fonctionnalités **CRUD** (Créer, Lire, Mettre à jour, Supprimer) pour gérer les produits en tant qu'administrateur, je vais t'ajouter une interface d'administration qui te permettra de gérer les produits directement à partir de l'interface. Voici les fichiers supplémentaires pour le CRUD des produits dans ton projet.

---

### **1. Page Admin Dashboard (admin/dashboard.php)**  
Dans cette page, l'administrateur pourra gérer la liste des produits, les ajouter, les modifier et les supprimer.

```php
<?php session_start(); include('../includes/header.php'); ?>
<main>
    <h1>Admin Dashboard</h1>

    <?php if(isset($_SESSION['user_id']) && $_SESSION['is_admin'] == 1): ?>
        <section>
            <h2>Manage Products</h2>
            <a href="add_product.php">Add New Product</a>
            <table>
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $stmt = $pdo->query("SELECT * FROM products");
                    while($product = $stmt->fetch()):
                    ?>
                    <tr>
                        <td><?php echo $product['name']; ?></td>
                        <td><?php echo $product['price']; ?></td>
                        <td><?php echo $product['stock']; ?></td>
                        <td>
                            <a href="edit_product.php?id=<?php echo $product['id']; ?>">Edit</a> | 
                            <a href="delete_product.php?id=<?php echo $product['id']; ?>" onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </section>
    <?php else: ?>
        <p>You do not have permission to access this page.</p>
    <?php endif; ?>
</main>
<?php include('../includes/footer.php'); ?>
```

---

### **2. Page Add Product (admin/add_product.php)**  
Cette page permet d'ajouter de nouveaux produits à la base de données.

```php
<?php session_start(); include('../includes/header.php'); ?>

<main>
    <h1>Add New Product</h1>

    <?php
    if(isset($_SESSION['user_id']) && $_SESSION['is_admin'] == 1):
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Add the product to the database
            $name = $_POST['name'];
            $price = $_POST['price'];
            $stock = $_POST['stock'];
            $image = $_FILES['image']['name'];
            $imageTmpName = $_FILES['image']['tmp_name'];
            $imageFolder = '../images/' . $image;

            if(move_uploaded_file($imageTmpName, $imageFolder)) {
                $stmt = $pdo->prepare("INSERT INTO products (name, price, stock, image) VALUES (:name, :price, :stock, :image)");
                $stmt->execute(['name' => $name, 'price' => $price, 'stock' => $stock, 'image' => $image]);
                echo "<p>Product added successfully!</p>";
            }
        }
    ?>

    <form action="add_product.php" method="POST" enctype="multipart/form-data">
        <label for="name">Product Name</label>
        <input type="text" name="name" required>

        <label for="price">Price</label>
        <input type="number" name="price" step="0.01" required>

        <label for="stock">Stock</label>
        <input type="number" name="stock" required>

        <label for="image">Product Image</label>
        <input type="file" name="image" accept="image/*" required>

        <button type="submit">Add Product</button>
    </form>

    <?php else: ?>
        <p>You do not have permission to add products.</p>
    <?php endif; ?>
</main>

<?php include('../includes/footer.php'); ?>
```

---

### **3. Page Edit Product (admin/edit_product.php)**  
Cette page permet de modifier un produit existant.

```php
<?php session_start(); include('../includes/header.php'); ?>

<main>
    <h1>Edit Product</h1>

    <?php
    if(isset($_SESSION['user_id']) && $_SESSION['is_admin'] == 1):
        $product_id = $_GET['id'];
        $stmt = $pdo->prepare("SELECT * FROM products WHERE id = :id");
        $stmt->execute(['id' => $product_id]);
        $product = $stmt->fetch();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $stock = $_POST['stock'];
            $image = $_FILES['image']['name'];
            $imageTmpName = $_FILES['image']['tmp_name'];
            $imageFolder = '../images/' . $image;

            if ($image) {
                move_uploaded_file($imageTmpName, $imageFolder);
                $stmt = $pdo->prepare("UPDATE products SET name = :name, price = :price, stock = :stock, image = :image WHERE id = :id");
                $stmt->execute(['name' => $name, 'price' => $price, 'stock' => $stock, 'image' => $image, 'id' => $product_id]);
            } else {
                $stmt = $pdo->prepare("UPDATE products SET name = :name, price = :price, stock = :stock WHERE id = :id");
                $stmt->execute(['name' => $name, 'price' => $price, 'stock' => $stock, 'id' => $product_id]);
            }

            echo "<p>Product updated successfully!</p>";
        }
    ?>

    <form action="edit_product.php?id=<?php echo $product_id; ?>" method="POST" enctype="multipart/form-data">
        <label for="name">Product Name</label>
        <input type="text" name="name" value="<?php echo $product['name']; ?>" required>

        <label for="price">Price</label>
        <input type="number" name="price" value="<?php echo $product['price']; ?>" step="0.01" required>

        <label for="stock">Stock</label>
        <input type="number" name="stock" value="<?php echo $product['stock']; ?>" required>

        <label for="image">Product Image (optional)</label>
        <input type="file" name="image" accept="image/*">

        <button type="submit">Update Product</button>
    </form>

    <?php else: ?>
        <p>You do not have permission to edit products.</p>
    <?php endif; ?>
</main>

<?php include('../includes/footer.php'); ?>
```

---

### **4. Page Delete Product (admin/delete_product.php)**  
Cette page permet de supprimer un produit de la base de données.

```php
<?php
session_start();
include('../config/database.php');

if (isset($_SESSION['user_id']) && $_SESSION['is_admin'] == 1) {
    $product_id = $_GET['id'];

    // Delete the product from the database
    $stmt = $pdo->prepare("DELETE FROM products WHERE id = :id");
    $stmt->execute(['id' => $product_id]);

    echo "<p>Product deleted successfully!</p>";
    header('Location: dashboard.php');  // Redirect to dashboard after deletion
} else {
    echo "<p>You do not have permission to delete products.</p>";
}
?>
```

---

### **5. Mise à jour de la table `users` pour admin**  
Il est nécessaire de gérer les privilèges administratifs. Ajoute une colonne `is_admin` dans la table `users` pour spécifier si un utilisateur est un administrateur.

```sql
ALTER TABLE users ADD COLUMN is_admin INT DEFAULT 0;  -- 0 = Regular user, 1 = Admin
```

---

### **6. Mise à jour de l'authentification**
Dans la page de **connexion** (`login.php`), tu dois vérifier si l'utilisateur est un administrateur lors de la connexion et stocker cette information dans la session.

```php
// Si les identifiants sont corrects et l'utilisateur est admin
$_SESSION['is_admin'] = $user['is_admin'];
```

---

### **Conclusion**
Tu as maintenant un **interface admin** avec les fonctionnalités **CRUD** pour gérer les produits dans ton projet e-commerce. Si tu souhaites ajouter davantage de fonctionnalités ou avoir des précisions, n'hésite pas à demander ! 🚀