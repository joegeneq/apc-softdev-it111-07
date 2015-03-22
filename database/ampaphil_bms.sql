SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `ampaphil_bms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `ampaphil_bms` ;

-- -----------------------------------------------------
-- Table `ampaphil_bms`.`employee`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `ampaphil_bms`.`employee` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `emp_lname` VARCHAR(45) NOT NULL ,
  `emp_fname` VARCHAR(45) NOT NULL ,
  `emp_mname` VARCHAR(45) NULL ,
  `emp_gender` VARCHAR(10) NOT NULL ,
  `emp_bdate` DATE NOT NULL ,
  `emp_blkno` VARCHAR(10) NOT NULL ,
  `emp_street` VARCHAR(45) NULL ,
  `emp_brgy` VARCHAR(45) NULL ,
  `emp_city` VARCHAR(45) NULL ,
  `emp_zipcode` INT NULL ,
  `emp_contactno` VARCHAR(20) NOT NULL ,
  `emp_emailadd` VARCHAR(45) NOT NULL ,
  `emp_position` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ampaphil_bms`.`screening_sched`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `ampaphil_bms`.`screening_sched` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `scr_date` DATE NOT NULL ,
  `scr_time` TIME NOT NULL ,
  `app_status` VARCHAR(10) NOT NULL ,
  `employee_id` INT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_SCREENING_SCHED_EMPLOYEE1` (`employee_id` ASC) ,
  CONSTRAINT `fk_SCREENING_SCHED_EMPLOYEE1`
    FOREIGN KEY (`employee_id` )
    REFERENCES `ampaphil_bms`.`employee` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ampaphil_bms`.`applicant`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `ampaphil_bms`.`applicant` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `app_lname` VARCHAR(45) NOT NULL ,
  `app_fname` VARCHAR(45) NOT NULL ,
  `app_mname` VARCHAR(45) NULL ,
  `app_gender` VARCHAR(10) NOT NULL ,
  `app_bdate` DATE NOT NULL ,
  `app_blkno` VARCHAR(10) NOT NULL ,
  `app_street` VARCHAR(45) NOT NULL ,
  `app_brgy` VARCHAR(45) NOT NULL ,
  `app_city` VARCHAR(45) NOT NULL ,
  `app_zipcode` INT NULL ,
  `app_contactno` VARCHAR(20) NOT NULL ,
  `app_emailadd` VARCHAR(45) NULL ,
  `app_regdate` DATE NOT NULL ,
  `app_regtime` TIME NOT NULL ,
  `app_talent` VARCHAR(45) NOT NULL ,
  `screening_sched_id` INT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_APPLICANT_SCREENING_SCHED1` (`screening_sched_id` ASC) ,
  CONSTRAINT `fk_APPLICANT_SCREENING_SCHED1`
    FOREIGN KEY (`screening_sched_id` )
    REFERENCES `ampaphil_bms`.`screening_sched` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ampaphil_bms`.`talent_line`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `ampaphil_bms`.`talent_line` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `talent_type` VARCHAR(45) NOT NULL ,
  `talent_specialization` VARCHAR(45) NOT NULL ,
  `applicant_id` INT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_TALENT_LINE_APPLICANT1` (`applicant_id` ASC) ,
  CONSTRAINT `fk_TALENT_LINE_APPLICANT1`
    FOREIGN KEY (`applicant_id` )
    REFERENCES `ampaphil_bms`.`applicant` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ampaphil_bms`.`manager`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `ampaphil_bms`.`manager` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `mgr_lname` VARCHAR(45) NOT NULL ,
  `mgr_fname` VARCHAR(45) NOT NULL ,
  `mgr_mname` VARCHAR(45) NULL ,
  `mge_gender` VARCHAR(10) NOT NULL ,
  `mgr_bdate` DATE NOT NULL ,
  `mgr_blkno` VARCHAR(10) NOT NULL ,
  `mgr_street` VARCHAR(45) NOT NULL ,
  `mgr_brgy` VARCHAR(45) NOT NULL ,
  `mgr_city` VARCHAR(45) NOT NULL ,
  `mgr_zipcode` INT NULL ,
  `mgr_contactno` VARCHAR(20) NOT NULL ,
  `mgr_emailadd` VARCHAR(45) NOT NULL ,
  `mgr_expertise` VARCHAR(20) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ampaphil_bms`.`talent`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `ampaphil_bms`.`talent` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `manager_id` INT NOT NULL ,
  `talent_managedstartdate` DATE NOT NULL ,
  `talent_managedenddate` DATE NOT NULL ,
  `screening_sched_id` INT NULL ,
  `applicant_id` INT NULL ,
  PRIMARY KEY (`id`, `manager_id`) ,
  INDEX `fk_TALENT_MANAGER1` (`manager_id` ASC) ,
  INDEX `fk_TALENT_SCREENING_SCHED1` (`screening_sched_id` ASC) ,
  INDEX `fk_TALENT_APPLICANT1` (`applicant_id` ASC) ,
  CONSTRAINT `fk_TALENT_MANAGER1`
    FOREIGN KEY (`manager_id` )
    REFERENCES `ampaphil_bms`.`manager` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TALENT_SCREENING_SCHED1`
    FOREIGN KEY (`screening_sched_id` )
    REFERENCES `ampaphil_bms`.`screening_sched` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TALENT_APPLICANT1`
    FOREIGN KEY (`applicant_id` )
    REFERENCES `ampaphil_bms`.`applicant` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ampaphil_bms`.`client`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `ampaphil_bms`.`client` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `client_lname` VARCHAR(45) NOT NULL ,
  `client_fname` VARCHAR(45) NOT NULL ,
  `client_mname` VARCHAR(45) NULL ,
  `client_company` VARCHAR(45) NULL ,
  `client_companyclkno` VARCHAR(10) NOT NULL ,
  `client_companybrgy` VARCHAR(45) NOT NULL ,
  `client_contactno` VARCHAR(20) NOT NULL ,
  `client_companycity` VARCHAR(45) NOT NULL ,
  `client_emailadd` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ampaphil_bms`.`event_details`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `ampaphil_bms`.`event_details` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `event_name` VARCHAR(45) NOT NULL ,
  `event_location` VARCHAR(45) NOT NULL ,
  `event_type` VARCHAR(45) NOT NULL ,
  `event_startdate` DATE NOT NULL ,
  `event_enddate` DATE NOT NULL ,
  `event_starttime` TIME NOT NULL ,
  `event_endtime` TIME NOT NULL ,
  `event_status` VARCHAR(20) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ampaphil_bms`.`payments`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `ampaphil_bms`.`payments` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `payments_date` DATE NOT NULL ,
  `payments_time` TIME NOT NULL ,
  `rate` DOUBLE NOT NULL ,
  `talent_share` DOUBLE NOT NULL ,
  `agency_share` DOUBLE NOT NULL ,
  `event_details_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_PAYMENTS_EVENT_DETAILS1_idx` (`event_details_id` ASC) ,
  CONSTRAINT `fk_PAYMENTS_EVENT_DETAILS1`
    FOREIGN KEY (`event_details_id` )
    REFERENCES `ampaphil_bms`.`event_details` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ampaphil_bms`.`events`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `ampaphil_bms`.`events` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `talent_id` INT NOT NULL ,
  `manager_id` INT NOT NULL ,
  `event_details_id` INT NOT NULL ,
  `client_id` INT NOT NULL ,
  PRIMARY KEY (`id`, `talent_id`, `manager_id`, `event_details_id`, `client_id`) ,
  INDEX `fk_TALENT_has_EVENTS_DETAILS_TALENT1` (`talent_id` ASC, `manager_id` ASC) ,
  INDEX `fk_TALENT_has_EVENTS_DETAILS_EVENTS_DETAILS1` (`event_details_id` ASC) ,
  INDEX `fk_EVENT_CLIENT1` (`client_id` ASC) ,
  CONSTRAINT `fk_TALENT_has_EVENTS_DETAILS_TALENT1`
    FOREIGN KEY (`talent_id` , `manager_id` )
    REFERENCES `ampaphil_bms`.`talent` (`id` , `manager_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TALENT_has_EVENTS_DETAILS_EVENTS_DETAILS1`
    FOREIGN KEY (`event_details_id` )
    REFERENCES `ampaphil_bms`.`event_details` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_EVENT_CLIENT1`
    FOREIGN KEY (`client_id` )
    REFERENCES `ampaphil_bms`.`client` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `ampaphil_bms` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
