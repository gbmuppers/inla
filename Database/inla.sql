create database inla;
ALTER DATABASE inla CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

use inla;

CREATE TABLE usuario(
	id_usuario INTEGER AUTO_INCREMENT PRIMARY KEY,
	nombre VARCHAR(255) NOT NULL UNIQUE,
	contrasenia VARCHAR(255) NOT NULL
);

CREATE TABLE recurso(
	id_recurso INTEGER AUTO_INCREMENT PRIMARY KEY,
	rama VARCHAR(255) NOT NULL,
	nombre_topico VARCHAR(255) NOT NULL
);

CREATE TABLE audio(
	id_audio INTEGER NOT NULL UNIQUE,
	url_audio VARCHAR(255) NOT NULL UNIQUE,
	CONSTRAINT fk_recurso_audio FOREIGN KEY (id_audio) REFERENCES recurso(id_recurso)
);

CREATE TABLE texto(
	id_texto INTEGER NOT NULL UNIQUE,
	url_texto VARCHAR(255) NOT NULL UNIQUE,
	CONSTRAINT fk_recurso_texto FOREIGN KEY (id_texto) REFERENCES recurso(id_recurso)
);

CREATE TABLE video(
	id_video INTEGER NOT NULL UNIQUE,
	url_video VARCHAR(255) NOT NULL UNIQUE,
	CONSTRAINT fk_recurso_video FOREIGN KEY (id_video) REFERENCES recurso(id_recurso)
);

CREATE TABLE valoraciones(
	id_usuario INTEGER NOT NULL,
	id_recurso INTEGER NOT NULL,
	CONSTRAINT fk_valoraciones_usuario FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario),
	CONSTRAINT fk_valoraciones_recurso FOREIGN KEY (id_recurso) REFERENCES recurso(id_recurso)
);
