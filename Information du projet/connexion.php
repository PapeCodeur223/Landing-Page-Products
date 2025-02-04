Voici les pages **connexion**, **inscription** et **déconnexion** pour ton projet **e-commerce**. Ces pages permettront aux utilisateurs de s'inscrire, se connecter, et se déconnecter.

---

### **1. Page de Connexion (login.php)**  
Cette page permet aux utilisateurs de se connecter.

```php
<?php
session_start();
include('config/database.php');

if (isset($_SESSION['user_id'])) {
    header("Location: index.php"); // Redirige vers la page d'accueil si l'utilisateur est déjà connecté
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_email'] = $user['email'];
        $_SESSION['is_admin'] = $user['is_admin'];  // Si l'utilisateur est admin, on le garde dans la session

        header("Location: index.php");
        exit;
    } else {
        $error = "Invalid email or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Connexion</h1>

    <?php if (isset($error)): ?>
        <p style="color:red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="POST" action="login.php">
        <label for="email">Email</label>
        <input type="email" name="email" required>

        <label for="password">Password</label>
        <input type="password" name="password" required>

        <button type="submit">Se connecter</button>
    </form>

    <p>Pas encore inscrit ? <a href="register.php">Inscrivez-vous ici</a></p>
</body>
</html>
```

---

### **2. Page d'Inscription (register.php)**  
Cette page permet aux utilisateurs de s'inscrire.

```php
<?php
session_start();
include('config/database.php');

if (isset($_SESSION['user_id'])) {
    header("Location: index.php"); // Redirige vers la page d'accueil si l'utilisateur est déjà connecté
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConfirm = $_POST['password_confirm'];

    if ($password !== $passwordConfirm) {
        $error = "Les mots de passe ne correspondent pas.";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Vérifie si l'email est déjà utilisé
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch();

        if ($user) {
            $error = "L'email est déjà utilisé.";
        } else {
            // Insère l'utilisateur dans la base de données
            $stmt = $pdo->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
            $stmt->execute(['email' => $email, 'password' => $hashedPassword]);

            $_SESSION['user_id'] = $pdo->lastInsertId();
            $_SESSION['user_email'] = $email;

            header("Location: index.php");
            exit;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>

    <?php if (isset($error)): ?>
        <p style="color:red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="POST" action="register.php">
        <label for="email">Email</label>
        <input type="email" name="email" required>

        <label for="password">Mot de passe</label>
        <input type="password" name="password" required>

        <label for="password_confirm">Confirmer le mot de passe</label>
        <input type="password" name="password_confirm" required>

        <button type="submit">S'inscrire</button>
    </form>

    <p>Déjà inscrit ? <a href="login.php">Connectez-vous ici</a></p>
</body>
</html>
```

---

### **3. Page de Déconnexion (logout.php)**  
Cette page permet à l'utilisateur de se déconnecter en détruisant la session.

```php
<?php
session_start();
session_unset();
session_destroy();

header("Location: index.php"); // Redirige vers la page d'accueil après déconnexion
exit;
?>
```

---

### **4. Mise à jour de la base de données (Table `users`)**  
Assure-toi que la table `users` contient les colonnes nécessaires, notamment une colonne `is_admin` pour déterminer si un utilisateur est un administrateur ou non.

```sql
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    is_admin INT DEFAULT 0 -- 0 = utilisateur classique, 1 = administrateur
);
```

---

### **5. Gestion des erreurs et redirections**  
Pour chaque page, il est important de gérer les erreurs (par exemple, utilisateur déjà existant ou mauvais mot de passe) et de rediriger l'utilisateur selon son statut (connexion réussie ou échouée).

---

### **Conclusion**  
Maintenant, ton application **e-commerce** contient les pages **connexion**, **inscription** et **déconnexion**, ce qui permet aux utilisateurs de gérer leur session. Si tu as besoin d'autres fonctionnalités ou améliorations, fais-le moi savoir !