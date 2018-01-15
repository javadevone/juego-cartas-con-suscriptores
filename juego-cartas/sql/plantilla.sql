CREATE DATABASE juego_cartas DEFAULT CHARACTER SET utf8;

USE juego_cartas;

CREATE TABLE usuarios(
	id INT NOT NULL UNIQUE AUTO_INCREMENT,
	nombre VARCHAR(25) NOT NULL UNIQUE,
	email VARCHAR(255) NOT NULL UNIQUE,
	password VARCHAR(255) NOT NULL,
	fecha_registro DATETIME NOT NULL,
	activo TINYINT NOT NULL,
	PRIMARY KEY(id)
);

/*tipos de personaje, TODO*/
CREATE TABLE jugadores (
	id INT NOT NULL UNIQUE AUTO_INCREMENT,
	nombre VARCHAR(25) NOT NULL UNIQUE,
	fecha_creacion DATETIME NOT NULL,
	id_usuario INT NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY(id_usuario) REFERENCES usuarios(id) ON UPDATE CASCADE ON DELETE CASCADE
);

/*1 = COMUN (10) | 2 = RARA (15) | 3 = ESPECIAL (20) | 4 = EPICA (25) | 5 = LEGENDARIA (30)*/
CREATE TABLE rarezas (
	id INT NOT NULL UNIQUE AUTO_INCREMENT, 
	nombre VARCHAR(25) NOT NULL UNIQUE,
	PRIMARY KEY(id)
);

CREATE TABLE cartas (
	id INT NOT NULL UNIQUE AUTO_INCREMENT,
	nombre VARCHAR(25) NOT NULL UNIQUE,
	fecha_creacion DATETIME NOT NULL,
	ataque INT NOT NULL,
	defensa INT NOT NULL,
	vida INT NOT NULL,
	id_rareza INT NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY(id_rareza) REFERENCES rarezas(id) ON UPDATE CASCADE ON DELETE CASCADE
);



CREATE TABLE cartas_jugadores (
	id INT NOT NULL UNIQUE AUTO_INCREMENT,
	id_jugador INT NOT NULL,
	id_carta INT NOT NULL,
	fecha_adquisicion DATETIME NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY(id_jugador) REFERENCES jugadores(id) ON UPDATE CASCADE ON DELETE CASCADE,
	FOREIGN KEY(id_carta) REFERENCES cartas(id) ON UPDATE CASCADE ON DELETE CASCADE
);

/*añadir habilidades y enlazarlas con las cartas*/