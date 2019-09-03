
-- data criação: 03/09/2019
-- author......: Rogério Candido
-- considerando tabela usuários como clientes
-- Base de datos: sistema_clientes

CREATE TABLE users(
   id INT(11) NOT NULL AUTO_INCREMENT,
   username VARCHAR(100) NOT NULL,
   email VARCHAR(100) NOT NULL,
   password VARCHAR(100) NOT NULL,
   address VARCHAR(255) NOT NULL,
   status TINYINT NOT NULL,
   PRIMARY KEY (id)
);

INSERT INTO `users`(`username`, `email`, `password`, `address`, `status`) VALUES ('rogerio', 'rogerio@rogerio.com.br', '123', 'R. Teste 123', '1');
INSERT INTO `users`(`username`, `email`, `password`, `address`, `status`) VALUES ('luiz', 'luiz@luiz.com.br', '123', 'R. Teste 456', '1');
INSERT INTO `users`(`username`, `email`, `password`, `address`, `status`) VALUES ('rodolfo', 'rodolfo@rodolfo.com.br', '123', 'R. Teste 678', '2');

CREATE TABLE phones(
	id INT(11) NOT NULL AUTO_INCREMENT,
	user_id INT(11) NOT NULL,
	phone VARCHAR(11) NOT NULL,
	PRIMARY KEY(id)
);

INSERT INTO `phones`(`user_id`, `phone`) VALUES (1, '16992843895');
INSERT INTO `phones`(`user_id`, `phone`) VALUES (1, '16993857428');
INSERT INTO `phones`(`user_id`, `phone`) VALUES (1, '16998952471');
INSERT INTO `phones`(`user_id`, `phone`) VALUES (2, '16998957841');
INSERT INTO `phones`(`user_id`, `phone`) VALUES (2, '16996582147');
INSERT INTO `phones`(`user_id`, `phone`) VALUES (3, '16998957841');
INSERT INTO `phones`(`user_id`, `phone`) VALUES (3, '16999521475');
INSERT INTO `phones`(`user_id`, `phone`) VALUES (3, '16996952147');
INSERT INTO `phones`(`user_id`, `phone`) VALUES (3, '16998985955');
