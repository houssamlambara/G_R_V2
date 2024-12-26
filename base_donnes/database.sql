CREATE DATABASE gestion_reservations2;
USE gestion_reservations2;

CREATE TABLE ROLE (
    id_role int(11) AUTO_INCREMENT PRIMARY KEY,
    role_name varchar(50) NOT NULL UNIQUE
);

CREATE TABLE USERS (
    id_user int(11) AUTO_INCREMENT PRIMARY KEY,
    username varchar(100) NOT NULL UNIQUE,
    password varchar(150) NOT NULL,
    email varchar(100) NOT NULL UNIQUE,
    telephone varchar(15) NOT NULL,
    role_id int(11),
    FOREIGN KEY(role_id) REFERENCES ROLE(id_role),
    date_creation timestamp DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE ACTIVITES (
    id_activite int(11) AUTO_INCREMENT PRIMARY KEY,
    titre varchar(250) NOT NULL,
    description varchar (150),
    prix decimal(10,2) NOT NULL,
    place_disponible int (11) NOT NULL,
    DATE_DEBUT date,
    DATE_FIN date,
    date_creation timestamp DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE RESERVATIONS (
    id_reservation int(11) AUTO_INCREMENT PRIMARY KEY,
    id_user int(11),
    id_activite int(11),
    reservation_date timestamp DEFAULT CURRENT_TIMESTAMP,
    status ENUM ('En attente', 'Confirmer', 'Annuler') DEFAULT 'En attente',
    total_prix decimal(10,2) NOT NULL,
    FOREIGN KEY (id_user) REFERENCES USERS(id_user),
    FOREIGN KEY (id_activite) REFERENCES ACTIVITES(id_activite)
);

insert 