# Xavier Jeanne - Portfolio

Portfolio personnel développé avec Laravel 12, Livewire 3, Flux UI et Tailwind CSS 4.

## 📋 Prérequis

### Avec Docker (Recommandé)
- Docker Desktop
- Docker Compose

### Sans Docker
- PHP >= 8.2
- Composer
- Node.js >= 18
- MySQL/MariaDB ou SQLite

## 🚀 Installation

### Option 1 : Avec Docker (Laravel Sail)

```bash
# 1. Cloner le dépôt
git clone <url-du-repo>
cd xavierjeanne

# 2. Copier le fichier d'environnement
cp .env.example .env

# 3. Installer les dépendances PHP avec Docker
docker run --rm \
    -v $(pwd):/opt \
    -w /opt \
    laravelsail/php84-composer:latest \
    composer install

# 4. Démarrer les conteneurs Docker
./vendor/bin/sail up -d

# 5. Générer la clé d'application
./vendor/bin/sail artisan key:generate

# 6. Lancer les migrations et seeders
./vendor/bin/sail artisan migrate --seed

# 7. Installer les dépendances NPM
./vendor/bin/sail npm install

# 8. Compiler les assets (dev)
./vendor/bin/sail npm run dev
```

**L'application sera accessible sur** : `http://localhost`

#### Commandes utiles avec Sail
```bash
# Arrêter les conteneurs
./vendor/bin/sail down

# Redémarrer les conteneurs
./vendor/bin/sail restart

# Accéder au conteneur
./vendor/bin/sail shell

# Voir les logs
./vendor/bin/sail logs

# Créer un alias pour simplifier les commandes
alias sail='./vendor/bin/sail'
```

### Option 2 : Installation locale (sans Docker)

```bash
# 1. Cloner le dépôt
git clone <url-du-repo>
cd xavierjeanne

# 2. Copier le fichier d'environnement
cp .env.example .env

# 3. Installer les dépendances
composer install
npm install

# 4. Générer la clé d'application
php artisan key:generate

# 5. Créer la base de données SQLite
touch database/database.sqlite

# Ou configurer MySQL dans .env :
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=xavierjeanne
# DB_USERNAME=root
# DB_PASSWORD=

# 6. Lancer les migrations et seeders
php artisan migrate --seed

# 7. Démarrer le serveur de développement
php artisan serve

# 8. Dans un autre terminal, compiler les assets
npm run dev
```

**L'application sera accessible sur** : `http://localhost:8000`

## 🏗️ Structure du projet

```
app/
├── Http/Controllers/     # Contrôleurs HTTP
├── Livewire/            # Composants Livewire
│   ├── Auth/           # Authentification
│   ├── Experiences/    # Gestion des expériences
│   ├── Formations/     # Gestion des formations
│   ├── Realisations/   # Gestion des réalisations
│   ├── Settings/       # Paramètres
│   └── Skills/         # Gestion des compétences
└── Models/              # Modèles Eloquent
    ├── Experience.php
    ├── Formation.php
    ├── Realisation.php
    ├── Skill.php
    └── User.php
```

## 📦 Technologies utilisées

- **Framework** : Laravel 12
- **Frontend** : Livewire 3 + Volt
- **UI** : Flux UI + Tailwind CSS 4
- **Base de données** : MySQL/SQLite
- **Build tool** : Vite 6
- **Tests** : Pest PHP

## 🧪 Tests

```bash
# Avec Sail
./vendor/bin/sail artisan test

# Sans Sail
php artisan test

# Avec couverture de code
php artisan test --coverage
```

## 🔧 Commandes utiles

```bash
# Nettoyer le cache
php artisan optimize:clear

# Créer un nouveau composant Livewire
php artisan make:livewire NomDuComposant

# Lancer les migrations
php artisan migrate

# Rollback des migrations
php artisan migrate:rollback

# Rafraîchir la base de données avec seeders
php artisan migrate:fresh --seed

# Compiler les assets pour la production
npm run build

# Linter le code PHP
./vendor/bin/pint
```

## 📝 Environnement de développement

Le fichier `.env.example` contient la configuration par défaut avec SQLite. Pour utiliser MySQL avec Docker, modifiez :

```env
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=xavierjeanne
DB_USERNAME=sail
DB_PASSWORD=password
```

## 🚢 Déploiement en production

```bash
# 1. Optimiser l'application
php artisan optimize
php artisan config:cache
php artisan route:cache
php artisan view:cache

# 2. Compiler les assets
npm run build

# 3. Mettre en mode production dans .env
APP_ENV=production
APP_DEBUG=false
```

## 📄 License

Ce projet est sous licence MIT.

## 👤 Auteur

**Xavier Jeanne**

---

**Note** : Ce portfolio inclut un système complet de gestion de contenu avec :
- Authentification utilisateur
- CRUD pour les formations
- CRUD pour les expériences professionnelles
- CRUD pour les réalisations/projets
- Gestion des compétences techniques
- Relations many-to-many entre compétences et expériences/réalisations
