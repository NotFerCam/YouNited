-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema Tienda_Videojuegos
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Tienda_Videojuegos
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Tienda_Videojuegos` DEFAULT CHARACTER SET utf8 ;
USE `Tienda_Videojuegos` ;

-- -----------------------------------------------------
-- Table `Tienda_Videojuegos`.`EMPLEADO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Tienda_Videojuegos`.`EMPLEADO` (
  `DNI_EMPLE` VARCHAR(9) NOT NULL,
  `Nombre` VARCHAR(15) NULL,
  `Apellidos` VARCHAR(45) NULL,
  `Telefono` INT NULL,
  `Email` VARCHAR(45) NULL,
  `Contraseña` VARCHAR(45) NULL,
  PRIMARY KEY (`DNI_EMPLE`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Tienda_Videojuegos`.`VIDEOJUEGO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Tienda_Videojuegos`.`VIDEOJUEGO` (
  `Cod_V` INT NOT NULL,
  `Nombre` VARCHAR(45) NULL,
  `Empresa` VARCHAR(45) NULL,
  `Precio` DECIMAL(4,2) NULL,
  `Descripcion` VARCHAR(2000) NULL,
  `Categorias` VARCHAR(45) NULL,
  `Plataformas` VARCHAR(45) NULL,
  `Fecha_lanzamiento` VARCHAR(45) NULL,
  PRIMARY KEY (`Cod_V`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `Tienda_Videojuegos`.`CLIENTE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Tienda_Videojuegos`.`CLIENTE` (
  `DNI_CLI` VARCHAR(9) NOT NULL,
  `Nombre` VARCHAR(45) NULL,
  `Apellidos` VARCHAR(45) NULL,
  `Telefono` VARCHAR(45) NULL,
  `Email` VARCHAR(45) NULL,
  `Contraseña` VARCHAR(45) NULL,
  PRIMARY KEY (`DNI_CLI`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `Tienda_Videojuegos`.`VENTA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Tienda_Videojuegos`.`VENTA` (
  `EMPLEADO_DNI_EMPLE` VARCHAR(9) NOT NULL,
  `VIDEOJUEGO_Cod_V` INT NOT NULL,
  `CLIENTE_DNI_CLI` VARCHAR(9) NOT NULL,
  PRIMARY KEY (`EMPLEADO_DNI_EMPLE`, `VIDEOJUEGO_Cod_V`, `CLIENTE_DNI_CLI`),
  INDEX `fk_EMPLEADO_has_VIDEOJUEGO_VIDEOJUEGO1_idx` (`VIDEOJUEGO_Cod_V` ASC) VISIBLE,
  INDEX `fk_EMPLEADO_has_VIDEOJUEGO_EMPLEADO1_idx` (`EMPLEADO_DNI_EMPLE` ASC) VISIBLE,
  INDEX `fk_EMPLEADO_has_VIDEOJUEGO_CLIENTE1_idx` (`CLIENTE_DNI_CLI` ASC) VISIBLE,
  CONSTRAINT `fk_EMPLEADO_has_VIDEOJUEGO_EMPLEADO1`
    FOREIGN KEY (`EMPLEADO_DNI_EMPLE`)
    REFERENCES `Tienda_Videojuegos`.`EMPLEADO` (`DNI_EMPLE`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_EMPLEADO_has_VIDEOJUEGO_VIDEOJUEGO1`
    FOREIGN KEY (`VIDEOJUEGO_Cod_V`)
    REFERENCES `Tienda_Videojuegos`.`VIDEOJUEGO` (`Cod_V`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_EMPLEADO_has_VIDEOJUEGO_CLIENTE1`
    FOREIGN KEY (`CLIENTE_DNI_CLI`)
    REFERENCES `Tienda_Videojuegos`.`CLIENTE` (`DNI_CLI`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;ntura","PS4, PS5",'19/11/08');