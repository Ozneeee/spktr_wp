# 🌟 SPKTR x Enzo - Test Technique WordPress & PHP

Ce dépôt contient le **site WordPress complet** développé avec un thème personnalisé `test`, du contenu créer avec **Elementor** et aussi en **PHP** pur.  
Il inclut :

- Le thème personnalisé (`/wp-content/themes/test/`)
- Les plugins nécessaires (Elementor, etc.) dans `/wp-content/plugins/`)
- Les médias utilisés (`/wp-content/uploads/`)
- La base de données exportée (`/database/spktr_wp.sql`) contenant toutes les pages, contenus et réglages Elementor.

---

## 🛠️ Prérequis

Avant de commencer, assurez-vous d’avoir :

- PHP 8.x ou supérieur
- MySQL 5.7+
- WordPress installé localement (dernière version recommandée)
- Un outil pour gérer votre serveur local : XAMPP, MAMP, WAMP ou LocalWP

---

## 📥 Étapes pour cloner et utiliser le site

### 1. Cloner le dépôt

```bash
git clone https://github.com/ton-compte/spktr_wp.git
cd spktr_wp
```


### 2. Copier les fichiers dans WordPress

```bash
wp-content/themes/       -> ./wp-content/themes/
wp-content/plugins/      -> ./wp-content/plugins/
wp-content/uploads/      -> ./wp-content/uploads/
```

### 3. Importer la base de données

1. Ouvrir phpMyAdmin ou un autre outil de gestion MySQL.
2. Créer une nouvelle base de données `spktr_wp`.
3. Importer le fichier SQL : `/database/spktr_wp.sql`


### 4. Configurer `wp-config.php`

Ouvrez le fichier `wp-config.php` de votre installation WordPress et modifiez les lignes suivantes pour correspondre à votre base de données locale :
```php
define('DB_NAME', 'spktr_wp');      // nom de votre base de données
define('DB_USER', 'root');       // utilisateur MySQL
define('DB_PASSWORD', '');       // mot de passe MySQL
define('DB_HOST', 'localhost');  // généralement localhost
```

### 5. Accéder au site

Ouvrez votre navigateur et allez à :
```arduino
http://localhost/spktr_wp/
```

🌟 Le WordPress complet devrait maintenant être opérationnel, avec le thème `test`.