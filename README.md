Introduction
Bienvenue sur le projet Ticketche ! 

Prérequis
Avant de démarrer avec le projet, assurez-vous d'avoir installé les outils suivants sur votre machine :

PHP (version recommandée : 8)
Composer (gestionnaire de dépendances PHP)
Node.js et npm (pour la gestion des dépendances front-end)
MySQL (pour ce projet personnellement)
Installation
Suivez ces étapes pour installer et exécuter le projet localement :

Cloner le Répertoire : git clone https://github.com/Harnix-Team/harnix-event-project.git

Accéder au Répertoire : cd ticketche

Installer les Dépendances PHP : composer install

Copier le Fichier .env : cp .env.example .env

Configurer le Fichier .env :

Ouvrez le fichier .env dans un éditeur de texte et configurez les paramètres de base de données, l'URL, etc.
Normalement, il devrait être configuré par défaut vu que j'ai déjà eu à le faire.

Générer la Clé d'Application : php artisan key:generate

Migrer la Base de Données : php artisan migrate

Installer les Dépendances Front-end : npm install && npm run dev

Utilisation
Une fois l'installation terminée, vous pouvez démarrer le serveur de développement Laravel en exécutant la commande suivante :

```bash'''
php artisan serve

L'application sera accessible à l'adresse http://localhost:8000 dans votre navigateur.

Contribution
Si vous souhaitez contribuer à ce projet, veuillez suivre les bonnes pratiques de contribution et créer une "pull request" avec vos modifications.

Problèmes et Questions
Si vous rencontrez des problèmes ou si vous avez des questions, veuillez les envoyer dans le groupe pour qu'on en parle. 