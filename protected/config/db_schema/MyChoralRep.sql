SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `MyChoralRep` ;
CREATE SCHEMA IF NOT EXISTS `MyChoralRep` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `MyChoralRep` ;

-- -----------------------------------------------------
-- Table `MyChoralRep`.`Users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `MyChoralRep`.`Users` ;

CREATE  TABLE IF NOT EXISTS `MyChoralRep`.`Users` (
  `ID` INT NOT NULL AUTO_INCREMENT ,
  `LastName` VARCHAR(45) NOT NULL ,
  `FirstName` VARCHAR(45) NOT NULL ,
  `Email` VARCHAR(45) NOT NULL ,
  `SchoolEmployed` VARCHAR(45) NULL ,
  `Position` VARCHAR(45) NULL ,
  `TeachingLevel` VARCHAR(25) NULL ,
  `ImageUrl` VARCHAR(128) NULL ,
  PRIMARY KEY (`ID`) ,
  UNIQUE INDEX `idUsers_UNIQUE` (`ID` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `MyChoralRep`.`Programs`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `MyChoralRep`.`Programs` ;

CREATE  TABLE IF NOT EXISTS `MyChoralRep`.`Programs` (
  `ID` INT NOT NULL AUTO_INCREMENT ,
  `ProgramName` VARCHAR(45) NOT NULL ,
  `ProgramDate` DATETIME NOT NULL ,
  `Users_ID` INT NOT NULL ,
  `Notes` TEXT NULL ,
  PRIMARY KEY (`ID`, `Users_ID`) ,
  INDEX `fk_Programs_Users1_idx` (`Users_ID` ASC) ,
  UNIQUE INDEX `ID_UNIQUE` (`ID` ASC) ,
  CONSTRAINT `fk_Programs_Users1`
    FOREIGN KEY (`Users_ID` )
    REFERENCES `MyChoralRep`.`Users` (`ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `MyChoralRep`.`CompArrPoet`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `MyChoralRep`.`CompArrPoet` ;

CREATE  TABLE IF NOT EXISTS `MyChoralRep`.`CompArrPoet` (
  `ID` INT NOT NULL AUTO_INCREMENT ,
  `Name` VARCHAR(45) NOT NULL ,
  `DOB` DATETIME NULL ,
  `DOD` DATETIME NULL ,
  PRIMARY KEY (`ID`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `MyChoralRep`.`Songs`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `MyChoralRep`.`Songs` ;

CREATE  TABLE IF NOT EXISTS `MyChoralRep`.`Songs` (
  `ID` INT NOT NULL AUTO_INCREMENT ,
  `SongTitle` VARCHAR(45) NOT NULL ,
  `Voicing` VARCHAR(45) NULL ,
  `Difficulty` VARCHAR(45) NULL ,
  `SkillLevel` VARCHAR(45) NULL ,
  `Language` VARCHAR(45) NULL ,
  `Genre` VARCHAR(45) NULL ,
  `Ensemble_Type` VARCHAR(45) NULL ,
  `Notes` TEXT NULL ,
  PRIMARY KEY (`ID`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `MyChoralRep`.`Programs_Songs`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `MyChoralRep`.`Programs_Songs` ;

CREATE  TABLE IF NOT EXISTS `MyChoralRep`.`Programs_Songs` (
  `ID` INT NOT NULL AUTO_INCREMENT ,
  `Programs_ID` INT NOT NULL ,
  `Songs_ID` INT NOT NULL ,
  PRIMARY KEY (`ID`, `Programs_ID`, `Songs_ID`) ,
  UNIQUE INDEX `ID_UNIQUE` (`ID` ASC) ,
  INDEX `fk_Programs_Songs_Programs1_idx` (`Programs_ID` ASC) ,
  INDEX `fk_Programs_Songs_Songs1_idx` (`Songs_ID` ASC) ,
  CONSTRAINT `fk_Programs_Songs_Programs1`
    FOREIGN KEY (`Programs_ID` )
    REFERENCES `MyChoralRep`.`Programs` (`ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Programs_Songs_Songs1`
    FOREIGN KEY (`Songs_ID` )
    REFERENCES `MyChoralRep`.`Songs` (`ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `MyChoralRep`.`Songs_CompArrPoet`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `MyChoralRep`.`Songs_CompArrPoet` ;

CREATE  TABLE IF NOT EXISTS `MyChoralRep`.`Songs_CompArrPoet` (
  `ID` INT NOT NULL AUTO_INCREMENT ,
  `Songs_ID` INT NOT NULL ,
  `CompArrPoet_ID` INT NOT NULL ,
  PRIMARY KEY (`ID`, `Songs_ID`, `CompArrPoet_ID`) ,
  UNIQUE INDEX `ID_UNIQUE` (`ID` ASC) ,
  INDEX `fk_Songs_CompArrPoet_Songs1_idx` (`Songs_ID` ASC) ,
  INDEX `fk_Songs_CompArrPoet_CompArrPoet1_idx` (`CompArrPoet_ID` ASC) ,
  CONSTRAINT `fk_Songs_CompArrPoet_Songs1`
    FOREIGN KEY (`Songs_ID` )
    REFERENCES `MyChoralRep`.`Songs` (`ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Songs_CompArrPoet_CompArrPoet1`
    FOREIGN KEY (`CompArrPoet_ID` )
    REFERENCES `MyChoralRep`.`CompArrPoet` (`ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `MyChoralRep`.`Ensembles`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `MyChoralRep`.`Ensembles` ;

CREATE  TABLE IF NOT EXISTS `MyChoralRep`.`Ensembles` (
  `ID` INT NOT NULL AUTO_INCREMENT ,
  `Name` VARCHAR(45) NULL ,
  `Type` VARCHAR(45) NULL ,
  `Programs_ID` INT NOT NULL ,
  `Programs_Users_ID` INT NOT NULL ,
  PRIMARY KEY (`ID`, `Programs_ID`, `Programs_Users_ID`) ,
  UNIQUE INDEX `ID_UNIQUE` (`ID` ASC) ,
  INDEX `fk_Ensembles_Programs1_idx` (`Programs_ID` ASC, `Programs_Users_ID` ASC) ,
  CONSTRAINT `fk_Ensembles_Programs1`
    FOREIGN KEY (`Programs_ID` , `Programs_Users_ID` )
    REFERENCES `MyChoralRep`.`Programs` (`ID` , `Users_ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `MyChoralRep`.`Accompaniment`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `MyChoralRep`.`Accompaniment` ;

CREATE  TABLE IF NOT EXISTS `MyChoralRep`.`Accompaniment` (
  `ID` INT NOT NULL AUTO_INCREMENT ,
  `Songs_ID` INT NOT NULL ,
  `Ensembles_ID` INT NOT NULL ,
  PRIMARY KEY (`ID`, `Songs_ID`, `Ensembles_ID`) ,
  UNIQUE INDEX `ID_UNIQUE` (`ID` ASC) ,
  INDEX `fk_SpecialAccompaniment_Songs1_idx` (`Songs_ID` ASC) ,
  INDEX `fk_Accompaniment_Ensembles1_idx` (`Ensembles_ID` ASC) ,
  CONSTRAINT `fk_SpecialAccompaniment_Songs1`
    FOREIGN KEY (`Songs_ID` )
    REFERENCES `MyChoralRep`.`Songs` (`ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Accompaniment_Ensembles1`
    FOREIGN KEY (`Ensembles_ID` )
    REFERENCES `MyChoralRep`.`Ensembles` (`ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `MyChoralRep` ;

-- -----------------------------------------------------
-- Placeholder table for view `MyChoralRep`.`User_Programs_View`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `MyChoralRep`.`User_Programs_View` (`ID` INT, `ProgramName` INT, `ProgramDate` INT, `Users_ID` INT, `Notes` INT);

-- -----------------------------------------------------
-- View `MyChoralRep`.`User_Programs_View`
-- -----------------------------------------------------
DROP VIEW IF EXISTS `MyChoralRep`.`User_Programs_View` ;
DROP TABLE IF EXISTS `MyChoralRep`.`User_Programs_View`;
USE `MyChoralRep`;
CREATE  OR REPLACE VIEW `MyChoralRep`.`User_Programs_View` AS 
SELECT * FROM Programs WHERE Users_ID IN (SELECT ID FROM Users)
UNION
SELECT * FROM Songs WHERE Songs.ID IN (SELECT Songs_ID FROM Programs_Songs WHERE Programs_ID IN (SELECT ID FROM Programs WHERE Users_ID IN (SELECT ID FROM Users)))
;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
