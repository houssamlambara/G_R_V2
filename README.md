# G_R_V2
# Système de Réservation de Voyages

## Contexte du projet

Le **Système de Réservation de Voyages** a pour objectif de moderniser la gestion des réservations pour une agence de voyage en offrant une solution flexible et évolutive grâce à une approche orientée objet (OOP), optimisant ainsi l'expérience utilisateur et la gestion des activités disponibles.

### Contexte du Projet

Ce projet vise à fournir une solution efficace pour la gestion de :

- **Les utilisateurs** avec des rôles distincts (client, administrateur).
- **Les activités** (vols, hôtels, circuits touristiques).
- **Les réservations**.

### Fonctionnalités Backend Attendues

#### Authentification et Autorisation

- Système sécurisé d’inscription et de connexion pour les clients.
- Gestion des rôles :
  - **Administrateur** : Gestion des utilisateurs et des activités.
  - **Client authentifié** : Réalisation de réservations, modification et annulation des réservations.
  - **Visiteur** : Consultation des offres sans inscription.

---

## User Stories

### En tant qu'Administrateur

- **Gestion des utilisateurs et rôles** : Créer un compte sécurisé pour accéder au système, attribuer des rôles aux utilisateurs.
- **Gestion des activités** : Ajouter, modifier ou supprimer des activités existantes.
- **Gestion des réservations** : Visualiser les réservations en cours, les confirmer ou les annuler si nécessaire.
- **Gestion des utilisateurs** : Archiver / bannir des utilisateurs (fonctionnalité non encore implémentée).

### En tant que Client Authentifié

- **Consultation des offres** : Rechercher et consulter les activités disponibles (vols, hôtels, circuits, etc.).
- **Personnalisation** : Sélectionner des activités et personnaliser des options.
- **Réservation et modification** : Réaliser une réservation en ligne, puis la modifier si nécessaire.

### En tant que Visiteur

- **Consultation du catalogue** : Parcourir les activités disponibles sans se connecter, consulter les détails de chaque activité.
- **Inscription** : Créer un compte pour accéder aux fonctionnalités de réservation et de personnalisation.

---

## Fonctionnalités en Cours de Développement

- **Gestion des réservations** : Bien que la fonctionnalité de réservation soit partiellement implémentée, certaines parties du processus (comme la modification et l'annulation des réservations) ne sont pas encore finalisées.
- **Gestion des utilisateurs** : La fonctionnalité permettant d'archiver ou de bannir des utilisateurs n'a pas encore été développée.

---

## Technologies Utilisées

- **PHP** : Pour la gestion des requêtes backend et la logique métier.
- **MySQL** : Pour la gestion de la base de données.
- **HTML/CSS** : Pour la conception de l'interface utilisateur.
- **JavaScript** : Pour la gestion des interactions côté client.

---

## État d'avancement du projet

Le projet est actuellement en phase de développement, avec certaines fonctionnalités déjà implémentées. L'accent est mis sur la gestion des utilisateurs et des activités, ainsi que sur la gestion des réservations.
