SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `iruraldb` ;
CREATE SCHEMA IF NOT EXISTS `iruraldb` DEFAULT CHARACTER SET latin1 ;
USE `iruraldb` ;

-- -----------------------------------------------------
-- Table `iruraldb`.`tipos_administrativos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `iruraldb`.`tipos_administrativos` ;

CREATE TABLE IF NOT EXISTS `iruraldb`.`tipos_administrativos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `iruraldb`.`usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `iruraldb`.`usuarios` ;

CREATE TABLE IF NOT EXISTS `iruraldb`.`usuarios` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(40) NOT NULL,
  `login` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`, `login`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `iruraldb`.`tipos_setores`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `iruraldb`.`tipos_setores` ;

CREATE TABLE IF NOT EXISTS `iruraldb`.`tipos_setores` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `iruraldb`.`setores`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `iruraldb`.`setores` ;

CREATE TABLE IF NOT EXISTS `iruraldb`.`setores` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `tipo_id` INT(11) NOT NULL,
  `latitude` FLOAT NOT NULL,
  `longitude` FLOAT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `tipo_id` (`tipo_id` ASC),
  CONSTRAINT `setores_ibfk_1`
    FOREIGN KEY (`tipo_id`)
    REFERENCES `iruraldb`.`tipos_setores` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `iruraldb`.`administrativos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `iruraldb`.`administrativos` ;

CREATE TABLE IF NOT EXISTS `iruraldb`.`administrativos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `tipo_id` INT(11) NOT NULL,
  `Matricula` VARCHAR(20) NOT NULL,
  `setor_id` INT(11) NOT NULL,
  `usuario_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `tipo_id` (`tipo_id` ASC),
  INDEX `usuario_id` (`usuario_id` ASC),
  INDEX `setor_id` (`setor_id` ASC),
  CONSTRAINT `administrativos_ibfk_1`
    FOREIGN KEY (`tipo_id`)
    REFERENCES `iruraldb`.`tipos_administrativos` (`id`),
  CONSTRAINT `administrativos_ibfk_2`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `iruraldb`.`usuarios` (`id`),
  CONSTRAINT `administrativos_ibfk_3`
    FOREIGN KEY (`setor_id`)
    REFERENCES `iruraldb`.`setores` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `iruraldb`.`alunos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `iruraldb`.`alunos` ;

CREATE TABLE IF NOT EXISTS `iruraldb`.`alunos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `CPF` CHAR(11) NOT NULL,
  `RG` VARCHAR(20) NOT NULL,
  `usuario_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `usuario_id` (`usuario_id` ASC),
  CONSTRAINT `alunos_ibfk_1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `iruraldb`.`usuarios` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `iruraldb`.`restaurantes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `iruraldb`.`restaurantes` ;

CREATE TABLE IF NOT EXISTS `iruraldb`.`restaurantes` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `setor_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `setor_id` (`setor_id` ASC),
  CONSTRAINT `restaurantes_ibfk_1`
    FOREIGN KEY (`setor_id`)
    REFERENCES `iruraldb`.`setores` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `iruraldb`.`tipos_cardapios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `iruraldb`.`tipos_cardapios` ;

CREATE TABLE IF NOT EXISTS `iruraldb`.`tipos_cardapios` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `iruraldb`.`itens_cardapios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `iruraldb`.`itens_cardapios` ;

CREATE TABLE IF NOT EXISTS `iruraldb`.`itens_cardapios` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `tipo_cardapio` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `tipo_cardapio` (`tipo_cardapio` ASC),
  CONSTRAINT `itens_cardapios_ibfk_1`
    FOREIGN KEY (`tipo_cardapio`)
    REFERENCES `iruraldb`.`tipos_cardapios` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `iruraldb`.`cardapio`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `iruraldb`.`cardapio` ;

CREATE TABLE IF NOT EXISTS `iruraldb`.`cardapio` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `restaurante_id` INT(11) NOT NULL,
  `data` DATE NOT NULL,
  `item_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `restaurante_id` (`restaurante_id` ASC),
  INDEX `item_id` (`item_id` ASC),
  CONSTRAINT `cardapio_ibfk_1`
    FOREIGN KEY (`restaurante_id`)
    REFERENCES `iruraldb`.`restaurantes` (`id`),
  CONSTRAINT `cardapio_ibfk_2`
    FOREIGN KEY (`item_id`)
    REFERENCES `iruraldb`.`itens_cardapios` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `iruraldb`.`endereco`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `iruraldb`.`endereco` ;

CREATE TABLE IF NOT EXISTS `iruraldb`.`endereco` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `logradouro` VARCHAR(45) NULL DEFAULT NULL,
  `numero` VARCHAR(5) NULL DEFAULT NULL,
  `bairro` VARCHAR(45) NULL DEFAULT NULL,
  `cidade` VARCHAR(45) NULL DEFAULT NULL,
  `estado` VARCHAR(45) NULL DEFAULT NULL,
  `complemento` VARCHAR(45) NULL DEFAULT NULL,
  `CEP` VARCHAR(10) NULL DEFAULT NULL,
  `usuario_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `usuario_id` (`usuario_id` ASC),
  CONSTRAINT `endereco_ibfk_1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `iruraldb`.`usuarios` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `iruraldb`.`eventos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `iruraldb`.`eventos` ;

CREATE TABLE IF NOT EXISTS `iruraldb`.`eventos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `setor_id` INT(11) NOT NULL,
  `data` DATE NOT NULL,
  `local` VARCHAR(45) NOT NULL,
  `horario` TIME NOT NULL,
  `preco` FLOAT NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `setor_id` (`setor_id` ASC),
  CONSTRAINT `eventos_ibfk_1`
    FOREIGN KEY (`setor_id`)
    REFERENCES `iruraldb`.`setores` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `iruraldb`.`tipos_dietas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `iruraldb`.`tipos_dietas` ;

CREATE TABLE IF NOT EXISTS `iruraldb`.`tipos_dietas` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `iruraldb`.`lista_dieta`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `iruraldb`.`lista_dieta` ;

CREATE TABLE IF NOT EXISTS `iruraldb`.`lista_dieta` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` INT(11) NOT NULL,
  `data` DATE NOT NULL,
  `tipo_dieta` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `usuario_id` (`usuario_id` ASC),
  INDEX `tipo_dieta` (`tipo_dieta` ASC),
  CONSTRAINT `lista_dieta_ibfk_1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `iruraldb`.`usuarios` (`id`),
  CONSTRAINT `lista_dieta_ibfk_2`
    FOREIGN KEY (`tipo_dieta`)
    REFERENCES `iruraldb`.`tipos_dietas` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `iruraldb`.`servicos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `iruraldb`.`servicos` ;

CREATE TABLE IF NOT EXISTS `iruraldb`.`servicos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `setor_id` INT(11) NOT NULL,
  `preco` FLOAT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `setor_id` (`setor_id` ASC),
  CONSTRAINT `servicos_ibfk_1`
    FOREIGN KEY (`setor_id`)
    REFERENCES `iruraldb`.`setores` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
