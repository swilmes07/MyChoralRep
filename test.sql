SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `test` ;
CREATE SCHEMA IF NOT EXISTS `test` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `test` ;

-- -----------------------------------------------------
-- Table `test`.`members`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `test`.`members` ;

CREATE  TABLE IF NOT EXISTS `test`.`members` (
  `ID` INT(11) NOT NULL AUTO_INCREMENT ,
  `FirstName` VARCHAR(30) NOT NULL ,
  `LastName` VARCHAR(30) NOT NULL ,
  `UserID` VARCHAR(50) NOT NULL ,
  `Pass` VARCHAR(30) NOT NULL ,
  `SkillLevel` VARCHAR(100) NOT NULL ,
  `imagelocation` VARCHAR(100) NOT NULL ,
  `School` VARCHAR(100) NULL ,
  `Job` VARCHAR(45) NULL ,
  PRIMARY KEY (`ID`) ,
  UNIQUE INDEX `UserID` (`UserID` ASC) )
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `test`.`subtbl_rep_accomp`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `test`.`subtbl_rep_accomp` ;

CREATE  TABLE IF NOT EXISTS `test`.`subtbl_rep_accomp` (
  `Acc_ID` INT(11) NOT NULL AUTO_INCREMENT ,
  `Accomp Type` VARCHAR(255) NULL DEFAULT NULL ,
  PRIMARY KEY (`Acc_ID`) )
ENGINE = MyISAM
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `test`.`subtbl_rep_language`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `test`.`subtbl_rep_language` ;

CREATE  TABLE IF NOT EXISTS `test`.`subtbl_rep_language` (
  `Language_ID` INT(11) NOT NULL AUTO_INCREMENT ,
  `Language` VARCHAR(255) NULL DEFAULT NULL ,
  PRIMARY KEY (`Language_ID`) )
ENGINE = MyISAM
AUTO_INCREMENT = 15
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `test`.`subtbl_rep_skill`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `test`.`subtbl_rep_skill` ;

CREATE  TABLE IF NOT EXISTS `test`.`subtbl_rep_skill` (
  `ID` INT(11) NOT NULL AUTO_INCREMENT ,
  `Skill_Level` VARCHAR(255) NULL DEFAULT NULL ,
  PRIMARY KEY (`ID`) ,
  INDEX `ID` (`ID` ASC) )
ENGINE = MyISAM
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `test`.`subtbl_rep_style_genre`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `test`.`subtbl_rep_style_genre` ;

CREATE  TABLE IF NOT EXISTS `test`.`subtbl_rep_style_genre` (
  `Style_ID` INT(11) NOT NULL AUTO_INCREMENT ,
  `Style_Genre` VARCHAR(255) NULL DEFAULT NULL ,
  PRIMARY KEY (`Style_ID`) )
ENGINE = MyISAM
AUTO_INCREMENT = 14
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `test`.`subtbl_rep_voicing`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `test`.`subtbl_rep_voicing` ;

CREATE  TABLE IF NOT EXISTS `test`.`subtbl_rep_voicing` (
  `Voicing_ID` INT(11) NOT NULL AUTO_INCREMENT ,
  `Voicing` VARCHAR(255) NULL DEFAULT NULL ,
  PRIMARY KEY (`Voicing_ID`) ,
  INDEX `Voicing_ID` (`Voicing_ID` ASC) )
ENGINE = MyISAM
AUTO_INCREMENT = 13
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `test`.`subtbl_text_type`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `test`.`subtbl_text_type` ;

CREATE  TABLE IF NOT EXISTS `test`.`subtbl_text_type` (
  `ID` INT(11) NOT NULL AUTO_INCREMENT ,
  `Text_Type` VARCHAR(255) NULL DEFAULT NULL ,
  PRIMARY KEY (`ID`) ,
  INDEX `ID` (`ID` ASC) )
ENGINE = MyISAM
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `test`.`tbl_conductors`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `test`.`tbl_conductors` ;

CREATE  TABLE IF NOT EXISTS `test`.`tbl_conductors` (
  `COND_ID` INT(11) NOT NULL AUTO_INCREMENT ,
  `Title` VARCHAR(255) NULL DEFAULT NULL ,
  `Position` VARCHAR(255) NULL DEFAULT NULL ,
  `Last Name` VARCHAR(255) NULL DEFAULT NULL ,
  `First Name` VARCHAR(255) NULL DEFAULT NULL ,
  `Middle Initial` VARCHAR(255) NULL DEFAULT NULL ,
  `Current e-mail` VARCHAR(255) NULL DEFAULT NULL ,
  `Current phone` VARCHAR(255) NULL DEFAULT NULL ,
  `Current Address 1` VARCHAR(255) NULL DEFAULT NULL ,
  `Current Address 2` VARCHAR(255) NULL DEFAULT NULL ,
  `Current City` VARCHAR(255) NULL DEFAULT NULL ,
  `Current State` VARCHAR(255) NULL DEFAULT NULL ,
  `Current Zip` VARCHAR(255) NULL DEFAULT NULL ,
  PRIMARY KEY (`COND_ID`) ,
  INDEX `COND_ID` (`COND_ID` ASC) )
ENGINE = MyISAM
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `test`.`tbl_ensembles`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `test`.`tbl_ensembles` ;

CREATE  TABLE IF NOT EXISTS `test`.`tbl_ensembles` (
  `ID` INT(11) NOT NULL AUTO_INCREMENT ,
  `Ensemble_ID` INT(11) NULL DEFAULT NULL ,
  `Ensemble Name` VARCHAR(255) NULL DEFAULT NULL ,
  `Voicing` VARCHAR(255) NULL DEFAULT NULL ,
  `Size` VARCHAR(255) NULL DEFAULT NULL ,
  `Type` VARCHAR(255) NULL DEFAULT NULL ,
  `Ensemble Level` VARCHAR(255) NULL DEFAULT NULL ,
  PRIMARY KEY (`ID`) ,
  INDEX `ID` (`ID` ASC) )
ENGINE = MyISAM
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `test`.`tbl_institution/organization`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `test`.`tbl_institution/organization` ;

CREATE  TABLE IF NOT EXISTS `test`.`tbl_institution/organization` (
  `ID` INT(11) NOT NULL AUTO_INCREMENT ,
  `Institution_ID` INT(11) NULL DEFAULT NULL ,
  `Institution Name` VARCHAR(255) NULL DEFAULT NULL ,
  `Address 1` VARCHAR(255) NULL DEFAULT NULL ,
  `Address 2` VARCHAR(255) NULL DEFAULT NULL ,
  `City` VARCHAR(255) NULL DEFAULT NULL ,
  `State` VARCHAR(255) NULL DEFAULT NULL ,
  `Zip` VARCHAR(255) NULL DEFAULT NULL ,
  `Phone` VARCHAR(255) NULL DEFAULT NULL ,
  PRIMARY KEY (`ID`) ,
  INDEX `ID` (`ID` ASC) )
ENGINE = MyISAM
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `test`.`tbl_performances`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `test`.`tbl_performances` ;

CREATE  TABLE IF NOT EXISTS `test`.`tbl_performances` (
  `ID` INT(11) NOT NULL AUTO_INCREMENT ,
  `Performance_ID` INT(11) NULL DEFAULT NULL ,
  `Start Date` DATETIME NULL DEFAULT NULL ,
  `End Date` DATETIME NULL DEFAULT NULL ,
  `Time` VARCHAR(255) NULL DEFAULT NULL ,
  `Location` VARCHAR(255) NULL DEFAULT NULL ,
  `Audience` VARCHAR(255) NULL DEFAULT NULL ,
  `Cost` VARCHAR(255) NULL DEFAULT NULL ,
  `Numbers attended` VARCHAR(255) NULL DEFAULT NULL ,
  PRIMARY KEY (`ID`) ,
  INDEX `ID` (`ID` ASC) )
ENGINE = MyISAM
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `test`.`tbl_repertiore`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `test`.`tbl_repertiore` ;

CREATE  TABLE IF NOT EXISTS `test`.`tbl_repertiore` (
  `ID` INT(11) NOT NULL AUTO_INCREMENT ,
  `REP_ID` INT(11) NULL DEFAULT NULL ,
  `Title` VARCHAR(255) NULL DEFAULT NULL ,
  `Composer` VARCHAR(255) NULL DEFAULT NULL ,
  `Comp_Birth_Year` VARCHAR(255) NULL DEFAULT NULL ,
  `Comp_Death_Year` VARCHAR(255) NULL DEFAULT NULL ,
  `Arranger` VARCHAR(255) NULL DEFAULT NULL ,
  `Arr_Birth_Year` VARCHAR(255) NULL DEFAULT NULL ,
  `Arr_Death_Year` VARCHAR(255) NULL DEFAULT NULL ,
  `Poet` VARCHAR(255) NULL DEFAULT NULL ,
  `Poet_Birth_Year` VARCHAR(255) NULL DEFAULT NULL ,
  `Poet_Death_Year` VARCHAR(255) NULL DEFAULT NULL ,
  `Voicing` VARCHAR(255) NULL DEFAULT NULL ,
  `Accompaniment` VARCHAR(255) NULL DEFAULT NULL ,
  `Genre/Style` VARCHAR(255) NULL DEFAULT NULL ,
  `Language` VARCHAR(255) NULL DEFAULT NULL ,
  `Publisher` VARCHAR(255) NULL DEFAULT NULL ,
  `Vendor Number` VARCHAR(255) NULL DEFAULT NULL ,
  `Text type` VARCHAR(255) NULL DEFAULT NULL ,
  `Currently Printed` TINYINT(1) NULL DEFAULT '0' ,
  `Length` VARCHAR(255) NULL DEFAULT NULL ,
  `Skill Level` VARCHAR(255) NULL DEFAULT NULL ,
  PRIMARY KEY (`ID`) ,
  INDEX `ID` (`ID` ASC) )
ENGINE = MyISAM
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8;

USE `test` ;

-- -----------------------------------------------------
-- procedure test_multi_sets
-- -----------------------------------------------------

USE `test`;
DROP procedure IF EXISTS `test`.`test_multi_sets`;

DELIMITER $$
USE `test`$$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `test_multi_sets`()
    DETERMINISTIC
begin
        select user() as first_col;
        select user() as first_col, now() as second_col;
        select user() as first_col, now() as second_col, now() as third_col;
        end$$

DELIMITER ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
