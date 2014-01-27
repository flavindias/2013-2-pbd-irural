CREATE  TABLE IF NOT EXISTS `iruraldb`.`endereco` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `logadouro` VARCHAR(45) NULL DEFAULT NULL ,
  `numero` VARCHAR(5) NULL DEFAULT NULL ,
  `bairro` VARCHAR(45) NULL DEFAULT NULL ,
  `cidade` VARCHAR(45) NULL DEFAULT NULL ,
  `estado` VARCHAR(45) NULL DEFAULT NULL ,
  `complemento` VARCHAR(45) NULL DEFAULT NULL ,
  `CEP` VARCHAR(10) NULL DEFAULT NULL ,
  `usuario_id` INT(11) NOT NULL ,

  FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8;

CREATE  TABLE IF NOT EXISTS `iruraldb`.`usuarios` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(45) NOT NULL ,
  `senha` VARCHAR(40) NOT NULL ,
  `login` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`, `login`) )
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8;

USE `iruraldb` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

CREATE TABLE IF NOT EXISTS `iruraldb`.`alunos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `CPF` CHAR(11) NOT NULL,
  `RG` VARCHAR(20) NOT NULL,
  `usuario_id` INT(11) NOT NULL,

  FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
  PRIMARY KEY (`id`) )
)

CREATE TABLE IF NOT EXISTS `iruraldb`.`administrativos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `tipo_id` INT(11) NOt NULL,
  `Matricula` VARCHAR(20) NOT NULL,
  `setor_id` INT(11) NOT NULL,
  `usuario_id` INT(11) NOT NULL,

  FOREIGN KEY (tipo_id) REFERENCES tipos_administrativos(id),
  FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
  FOREIGN KEY (setor_id) REFERENCES setores(id),
  PRIMARY KEY (`id`) 
  )

CREATE TABLE IF NOT EXISTS `iruraldb`.`tipos_administrativos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL
  PRIMARY KEY (`id`) 
)

CREATE TABLE IF NOT EXISTS `iruraldb`.`tipos_setores` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL
  PRIMARY KEY (`id`) )
)

CREATE TABLE IF NOT EXISTS `iruraldb`.`setores` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `tipo_id` INT(11) NOT NULL,
  `latitude` FLOAT NOT NULL,
  `longitude` FLOAT NOT NULL,

  FOREIGN KEY (tipo_id) REFERENCES tipos_setores(id),
  PRIMARY KEY (`id`) 
  )

CREATE TABLE IF NOT EXISTS `iruraldb`.`servicos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `setor_id` INT(11) NOT NULL,
  `preco` FLOAT NOT NULL,

  FOREIGN KEY (setor_id) REFERENCES setores(id),
  PRIMARY KEY (`id`) 
  )

CREATE TABLE IF NOT EXISTS `iruraldb`.`eventos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `setor_id` INT(11) NOT NULL,
  `data` DATE NOT NULL,
  `local` VARCHAR(45) NOT NULL,
  `horario` TIME NOT NULL,
  `preco` FLOAT,

  FOREIGN KEY (setor_id) REFERENCES setores(id),
  PRIMARY KEY (`id`) 
  )



CREATE TABLE IF NOT EXISTS `iruraldb`.`restaurantes` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `setor_id` INT(11) NOT NULL,

  FOREIGN KEY (setor_id) REFERENCES setores(id),
  PRIMARY KEY (`id`) 
  )



CREATE TABLE IF NOT EXISTS `iruraldb`.`cardapio` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `restaurante_id` INT(11) NOT NULL,
  `data` DATE NOT NULL,
  `item_id` INT(11) NOT NULL,

  FOREIGN KEY (restaurante_id) REFERENCES restaurantes(id),
  FOREIGN KEY (item_id) REFERENCES itens_cardapios(id),
   PRIMARY KEY (`id`) 

  )
  
  

CREATE TABLE IF NOT EXISTS `iruraldb`.`itens_cardapios` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `tipo_cardapio` INT(11) NOT NULL,

  FOREIGN KEY (tipo_cardapio) REFERENCES tipos_cardapios(id),
  PRIMARY KEY (`id`) 
  )

CREATE TABLE IF NOT EXISTS `iruraldb`.`tipos_cardapios` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`)
  ) 

CREATE TABLE IF NOT EXISTS `iruraldb`.`lista_dieta` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` INT(11) NOT NULL,
  `data` DATE NOt NULL,
  `tipo_dieta` INT(11) NOT NULL,
  FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
  FOREIGN KEY (tipo_dieta) REFERENCES tipos_dietas(id),
  PRIMARY KEY(`id`)
  )


CREATE TABLE IF NOT EXISTS `iruraldb`.`tipos_dietas` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (id)
  )
