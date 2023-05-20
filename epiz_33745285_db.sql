-- se elimina si es que no esta la DB
drop schema if exists `test_php`;
create schema if not exists `test_php` default character set utf8 collate utf8_spanish_ci;

use  `test_php`;

-- creamos la tabla


CREATE TABLE `registros`(
`id_registro` int (10) not null auto_increment PRIMARY KEY,
`no_cuenta` int(10) not null,
`nombre_usuario` text not null,
`email` text not null,
`club_deportivo` text not null,
`password` varchar (8) not null
) engine=Innodb default charset=utf8;


INSERT INTO `registros` (`id_registro`,`no_cuenta`,`nombre_usuario`,`email`,`club_deportivo`,`password`) VALUES (1,425603001,'Juan Perez Garcia','juan@hotmail.com','Football Soccer',123456);
INSERT INTO `registros` (`id_registro`,`no_cuenta`,`nombre_usuario`,`email`,`club_deportivo`,`password`) VALUES (2,425603002,'Pedro Suastes Albaca','pedro@hotmail.com','Basketball',123456);
INSERT INTO `registros` (`id_registro`,`no_cuenta`,`nombre_usuario`,`email`,`club_deportivo`,`password`) VALUES (3,425603003,'Alexis Rosales Pineda','alexis@hotmail.com','Volleyball',123456);
INSERT INTO `registros` (`id_registro`,`no_cuenta`,`nombre_usuario`,`email`,`club_deportivo`,`password`) VALUES (4,1425603004,'Karla Chavez Chagoya','karla@hotmail.com','Football Americano',123456);
INSERT INTO `registros` (`id_registro`,`no_cuenta`,`nombre_usuario`,`email`,`club_deportivo`,`password`) VALUES (5,425603005,'Pedro Paramo Paracetamol','peter@hotmail.com','Atletismo',123456);
INSERT INTO `registros` (`id_registro`,`no_cuenta`,`nombre_usuario`,`email`,`club_deportivo`,`password`) VALUES (6,425603035,'Jimena Urrutia Alcantar','Jimena@hotmail.com','Natacion',123456);
INSERT INTO `registros` (`id_registro`,`no_cuenta`,`nombre_usuario`,`email`,`club_deportivo`,`password`) VALUES (7,425603006,'Eduardo Cruz Sanchez','Eduardo@hotmail.com','Rugby',123456);
INSERT INTO `registros` (`id_registro`,`no_cuenta`,`nombre_usuario`,`email`,`club_deportivo`,`password`) VALUES (8,425603007,'Diego Alvarado Paz','diego@hotmail.com','Ajedrez',123456);
INSERT INTO `registros` (`id_registro`,`no_cuenta`,`nombre_usuario`,`email`,`club_deportivo`,`password`) VALUES (9,425603008,'Alejandra Juarez Paz','alejandra@hotmail.com','Billar',123456);
INSERT INTO `registros` (`id_registro`,`no_cuenta`,`nombre_usuario`,`email`,`club_deportivo`,`password`) VALUES (10,425603009,'Jose Luis Sanchez Paramo','jose@hotmail.com','Billar',123456);
INSERT INTO `registros` (`id_registro`,`no_cuenta`,`nombre_usuario`,`email`,`club_deportivo`,`password`) VALUES (11,425603010,'Amadeus Aguirre Sanchez','amadeus@hotmail.com','Basketball',123456);
INSERT INTO `registros` (`id_registro`,`no_cuenta`,`nombre_usuario`,`email`,`club_deportivo`,`password`) VALUES (12,425603011,'Derek Reyes Urrutia','derek@hotmail.com','Basketball',123456);
INSERT INTO `registros` (`id_registro`,`no_cuenta`,`nombre_usuario`,`email`,`club_deportivo`,`password`) VALUES (13,425603012,'Dania Estefania Prado Mendez','dania@hotmail.com','Basketball',123456);
INSERT INTO `registros` (`id_registro`,`no_cuenta`,`nombre_usuario`,`email`,`club_deportivo`,`password`) VALUES (14,425603013,'Arturo Oliva Olivares','arturo@hotmail.com','Football Soccer',123456);
INSERT INTO `registros` (`id_registro`,`no_cuenta`,`nombre_usuario`,`email`,`club_deportivo`,`password`) VALUES (15,425603014,'Juanito Alcantar Ortega','juanito@hotmail.com','Volleyball',123456);
INSERT INTO `registros` (`id_registro`,`no_cuenta`,`nombre_usuario`,`email`,`club_deportivo`,`password`) VALUES (16,425603015,'Steve Jobs Jobs','steve@hotmail.com','Ajedrez',123456);
INSERT INTO `registros` (`id_registro`,`no_cuenta`,`nombre_usuario`,`email`,`club_deportivo`,`password`) VALUES (17,425603016,'Ursula Hernandez Aguirre','ursula@hotmail.com','Ajedrez',123456);
INSERT INTO `registros` (`id_registro`,`no_cuenta`,`nombre_usuario`,`email`,`club_deportivo`,`password`) VALUES (18,425603017,'Diana Montero Moctezuma','diana@hotmail.com','Ajedrez',123456);
INSERT INTO `registros` (`id_registro`,`no_cuenta`,`nombre_usuario`,`email`,`club_deportivo`,`password`) VALUES (19,425603018,'Fernando Fernandez Ferreira','fernando@hotmail.com','Football Americano',123456);
INSERT INTO `registros` (`id_registro`,`no_cuenta`,`nombre_usuario`,`email`,`club_deportivo`,`password`) VALUES (20,425603019,'Braulio Becerril Becerra','braulio@hotmail.com','Football Americano',123456);
INSERT INTO `registros` (`id_registro`,`no_cuenta`,`nombre_usuario`,`email`,`club_deportivo`,`password`) VALUES (21,425603020,'Richter Belmont Bermudas','richter@hotmail.com','Ajedrez',123456);
INSERT INTO `registros` (`id_registro`,`no_cuenta`,`nombre_usuario`,`email`,`club_deportivo`,`password`) VALUES (22,425603021,'Julius Belmont Bermudas','julius@hotmail.com','Basketball',123456);
INSERT INTO `registros` (`id_registro`,`no_cuenta`,`nombre_usuario`,`email`,`club_deportivo`,`password`) VALUES (23,425603022,'Leon Belmont Bermudas','leon@hotmail.com','Rugby',123456);
INSERT INTO `registros` (`id_registro`,`no_cuenta`,`nombre_usuario`,`email`,`club_deportivo`,`password`) VALUES (24,425603023,'Juste Belmont Bermudas','juste@hotmail.com','Rugby',123456);
INSERT INTO `registros` (`id_registro`,`no_cuenta`,`nombre_usuario`,`email`,`club_deportivo`,`password`) VALUES (25,425603024,'Simon Belmont Bermudas','simons@hotmail.com','Volleyball',123456);
INSERT INTO `registros` (`id_registro`,`no_cuenta`,`nombre_usuario`,`email`,`club_deportivo`,`password`) VALUES (26,425603025,'Samus Aran Aranza','samus@hotmail.com','Ajedrez',123456);
INSERT INTO `registros` (`id_registro`,`no_cuenta`,`nombre_usuario`,`email`,`club_deportivo`,`password`) VALUES (27,425603026,'Aquiles Aguilera Arteaga','aquiles@hotmail.com','Atletismo',123456);
INSERT INTO `registros` (`id_registro`,`no_cuenta`,`nombre_usuario`,`email`,`club_deportivo`,`password`) VALUES (28,425603027,'Gawain Jones Jones','gawain@hotmail.com','Atletismo',123456);
INSERT INTO `registros` (`id_registro`,`no_cuenta`,`nombre_usuario`,`email`,`club_deportivo`,`password`) VALUES (29,425603028,'Scathach Skadi Skatislav','scathach@hotmail.com','Basketball',123456);
INSERT INTO `registros` (`id_registro`,`no_cuenta`,`nombre_usuario`,`email`,`club_deportivo`,`password`) VALUES (30,425603029,'Tulio Trejo Torres','tulio@hotmail.com','Football Soccer',123456);
INSERT INTO `registros` (`id_registro`,`no_cuenta`,`nombre_usuario`,`email`,`club_deportivo`,`password`) VALUES (31,425603030,'Reinhard Van Astrea','reinhard@hotmail.com','Football Americano',123456);
INSERT INTO `registros` (`id_registro`,`no_cuenta`,`nombre_usuario`,`email`,`club_deportivo`,`password`) VALUES (32,425603031,'Teresa Van Astrea','teresa@hotmail.com','Ajedrez',123456);
INSERT INTO `registros` (`id_registro`,`no_cuenta`,`nombre_usuario`,`email`,`club_deportivo`,`password`) VALUES (33,425603032,'Fernando Arturo Dominguez Diaz','fernand@hotmail.com','Ajedrez',123456);
INSERT INTO `registros` (`id_registro`,`no_cuenta`,`nombre_usuario`,`email`,`club_deportivo`,`password`) VALUES (34,425603033,'Karina Rodriguez Ramirez','karina@hotmail.com','Ajedrez',123456);
INSERT INTO `registros` (`id_registro`,`no_cuenta`,`nombre_usuario`,`email`,`club_deportivo`,`password`) VALUES (35,425603034,'Laura Pianista Pro','laura@hotmail.com','Piano',123456);

