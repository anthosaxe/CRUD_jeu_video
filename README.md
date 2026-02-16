# 🎮 CRUD Jeux Vidéo

Application web de gestion de collection de jeux vidéo.

## 📦 Installation avec XAMPP

1. **Télécharger le projet**
```bash
git clone git@github.com:anthosaxe/CRUD_jeu_video.git
```

2. **Placer le projet dans XAMPP**
   - Copier le dossier `CRUD_jeu_video` dans `C:\xampp\htdocs\`

3. **Démarrer XAMPP**
   - Ouvrir XAMPP Control Panel
   - Démarrer Apache et MySQL

4. **Créer la base de données**
   - Ouvrir phpMyAdmin : `http://localhost/phpmyadmin`
   - Créer une nouvelle base de données (ex: `jeux_video`)
   - Importer le fichier SQL ou créer la table manuellement

5. **Configurer la connexion**
   - Ouvrir le fichier `source/connect.php`
   - Modifier ces lignes :
```php
   $dbname = 'jeux_video';  // Nom de votre base de données
   $username = 'root';       // Votre utilisateur MySQL (par défaut: root)
   $password = '';           // Votre mot de passe MySQL (par défaut: vide)
```

6. **Accéder au projet**
   - Ouvrir : `http://localhost/CRUD_jeu_video/`

## ✅ C'est prêt !
