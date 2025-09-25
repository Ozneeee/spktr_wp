# 🌟 Technique WordPress & PHP 🚨 V2 🚨

Ce dépôt contient le **site WordPress complet** développé avec un thème personnalisé `test`, du contenu créer avec **ACF** et aussi en **PHP** pur.  
Il inclut :

- Le thème personnalisé `/themes/test/`
- Les plugins nécessaires dans `/plugins/`
- Les médias utilisés `/uploads/`
- La base de données exportée `/database/spktr_wp.sql`
- Les déclaration des champs ACF `/inc/acf-fields.php`

---

## 🛠️ Prérequis

Avant de commencer, assurez-vous d’avoir :

- PHP 8.x ou supérieur
- MySQL 5.7+
- WordPress installé localement (dernière version recommandée)
- Un outil pour gérer votre serveur local : XAMPP, MAMP, WAMP ou LocalWP

---

## 📂 Structure du thème

```bash
testV2/
│── inc/
│   └── acf-fields.php   # Déclaration des champs ACF
│
│── styles/
│   ├── main.css         # Styles globaux
│   ├── header.css       # Styles header
│   └── footer.css       # Styles footer
│
│── main.php             # Template personnalisé avec ACF
│── functions.php        # Enregistrement CSS + champs ACF
│── style.css            # Reset CSS
│── header.php           # Header du site
│── footer.php           # Footer du site
```

---

## 📥 Étapes pour cloner et utiliser le site

### 1. Cloner le dépôt

```bash
git clone https://github.com/ton-compte/spktr_wp.git
cd spktr_wp
git pull origin
git checkout v2
git pull origin v2
```


### 2. Copier les fichiers dans WordPress

```bash
wp-content/themes/       -> ./themes/
wp-content/plugins/      -> ./plugins/
wp-content/uploads/      -> ./uploads/
wp-content/inc/          -> ./inc/
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

🌟 Le WordPress complet devrait maintenant être opérationnel, avec le thème `testV2` et les champs ACF.