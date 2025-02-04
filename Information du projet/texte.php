### **Projet PHP Avancé : "E-Commerce Simplifié"**  
📌 **Description** : Ce projet est une mini-boutique en ligne qui permet aux utilisateurs de s'inscrire, se connecter, ajouter des produits à leur panier, passer commande et voir l'historique de leurs achats.  

🔹 **Technologies utilisées** :
- **PHP (PDO)** → Gestion sécurisée de la base de données  
- **MySQL** → Stockage des utilisateurs, produits, commandes  
- **Sessions & Cookies** → Gestion de l'authentification et du panier  
- **POST & GET** → Transmission sécurisée des données  
- **JavaScript (Animations, AJAX)** → Expérience utilisateur améliorée  

---

## **📂 Structure du projet**
```
/ecommerce-project
│── /assets
│   ├── styles.css
│   ├── scripts.js
│── /config
│   ├── database.php  # Connexion PDO
│── /includes
│   ├── header.php  # Barre de navigation
│   ├── footer.php  # Pied de page
│── /pages
│   ├── home.php  # Page d'accueil avec liste des produits
│   ├── login.php  # Connexion utilisateur
│   ├── register.php  # Inscription
│   ├── cart.php  # Panier utilisateur
│   ├── checkout.php  # Validation de commande
│── /admin
│   ├── dashboard.php  # Interface admin
│   ├── add_product.php  # Ajout de produit
│── index.php  # Page principale
│── .htaccess  # Réécriture des URLs (SEO)
│── README.md  # Documentation
```

---

## **📌 Fonctionnalités Clés**
### **🔹 1. Inscription & Connexion avec Sessions et Cookies**
- Utilisation des **sessions** pour gérer l'authentification
- Option **"Se souvenir de moi"** avec **cookies**
- Sécurisation avec **bcrypt** et **PDO**

### **🔹 2. Gestion des Produits et du Panier (GET & POST)**
- Liste des produits affichée depuis la base de données  
- Ajout au panier via un bouton dynamique en **AJAX**  
- Stockage temporaire du panier en **SESSION**  

### **🔹 3. Validation de Commande**
- Vérification des stocks  
- Enregistrement dans MySQL avec **transactions PDO**  
- Envoi d’un e-mail de confirmation (optionnel)  

### **🔹 4. Interface Admin (CRUD des Produits)**
- Page sécurisée pour **ajouter, modifier, supprimer des produits**  

### **🔹 5. Animations et Dynamisme (JS)**
- **Animations CSS3 & JS** sur le panier et les boutons  
- **Effet AJAX** pour mise à jour en temps réel  
- **Effet de transition lors des chargements de page**  

---

## **🚀 Déploiement et Améliorations**
Tu pourras ajouter :  
✔ **Stripe/PayPal** pour paiements en ligne  
✔ **API Google Maps** pour la livraison  
✔ **Graphiques avec Chart.js** pour le suivi des ventes  

---

### **💾 Base de Données MySQL (Exemple de Structure)**
```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(150) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    stock INT NOT NULL,
    image VARCHAR(255) NOT NULL
);

CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    total DECIMAL(10,2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);
```

---

### **📢 Besoin d’un Code Complet ?**
Si ce projet t'intéresse, je peux te fournir une **base de code complète et bien structurée**. Dis-moi si tu veux que je commence à coder directement ! 🚀