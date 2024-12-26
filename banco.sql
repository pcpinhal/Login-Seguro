DROP DATABASE IF EXISTS login;
CREATE DATABASE IF NOT EXISTS login;
USE login;

CREATE TABLE IF NOT EXISTS tb_login (
id_login				INT NOT NULL AUTO_INCREMENT,
usuario			        VARCHAR(255) NOT NULL UNIQUE,
senha					VARCHAR(255) NOT NULL,
nivel					CHAR(1) NOT NULL,
PRIMARY KEY(id_login)
);

INSERT IGNORE INTO tb_login (usuario, senha, nivel) VALUES 
('admin','123','a'),
('user','321','u');

SELECT * FROM tb_login;