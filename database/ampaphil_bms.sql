SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema ampaphil
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ampaphil` DEFAULT CHARACTER SET latin1 ;
USE `ampaphil` ;

-- -----------------------------------------------------
-- Table `ampaphil`.`employee`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ampaphil`.`employee` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `emp_lname` VARCHAR(45) NOT NULL,
  `emp_fname` VARCHAR(45) NOT NULL,
  `emp_mname` VARCHAR(45) NULL,
  `emp_gender` VARCHAR(10) NOT NULL,
  `emp_bdate` DATE NOT NULL,
  `emp_blockno` VARCHAR(10) NOT NULL,
  `emp_street` VARCHAR(45) NULL,
  `emp_brgy` VARCHAR(45) NULL DEFAULT NULL,
  `emp_city` VARCHAR(45) NULL DEFAULT NULL,
  `emp_zipcode` INT(11) NULL DEFAULT NULL,
  `emp_contactno` VARCHAR(20) NOT NULL,
  `emp_emailadd` VARCHAR(45) NOT NULL,
  `emp_position` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `ampaphil`.`screening_sched`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ampaphil`.`screening_sched` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `scr_date` DATE NOT NULL,
  `scr_time` TIME NOT NULL,
  `app_status` VARCHAR(10) NOT NULL,
  `employee_id` INT(11) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_SCREENING_SCHED_EMPLOYEE1` (`employee_id` ASC),
  CONSTRAINT `fk_SCREENING_SCHED_EMPLOYEE1`
    FOREIGN KEY (`employee_id`)
    REFERENCES `ampaphil`.`employee` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `ampaphil`.`applicant`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ampaphil`.`applicant` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `app_lname` VARCHAR(45) NOT NULL,
  `app_fname` VARCHAR(45) NOT NULL,
  `app_mname` VARCHAR(45) NULL,
  `app_gender` VARCHAR(10) NOT NULL,
  `app_bdate` DATE NOT NULL,
  `app_blockno` VARCHAR(10) NOT NULL,
  `app_street` VARCHAR(45) NOT NULL,
  `app_brgy` VARCHAR(45) NOT NULL,
  `app_city` VARCHAR(45) NOT NULL,
  `app_zipcode` INT(11) NULL,
  `app_contactno` VARCHAR(20) NOT NULL,
  `app_emailadd` VARCHAR(45) NULL,
  `app_regdate` DATE NOT NULL,
  `app_regtime` TIME NOT NULL,
  `app_talent` VARCHAR(45) NOT NULL,
  `screening_sched_id` INT(11) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_APPLICANT_SCREENING_SCHED1` (`screening_sched_id` ASC),
  CONSTRAINT `fk_APPLICANT_SCREENING_SCHED1`
    FOREIGN KEY (`screening_sched_id`)
    REFERENCES `ampaphil`.`screening_sched` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `ampaphil`.`client`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ampaphil`.`client` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `client_lname` VARCHAR(45) NOT NULL,
  `client_fname` VARCHAR(45) NOT NULL,
  `client_mname` VARCHAR(45) NULL,
  `client_company` VARCHAR(45) NULL DEFAULT NULL,
  `client_companyblockno` VARCHAR(10) NOT NULL,
  `client_companybrgy` VARCHAR(45) NOT NULL,
  `client_contactno` VARCHAR(20) NOT NULL,
  `client_companycity` VARCHAR(45) NOT NULL,
  `client_emailadd` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `ampaphil`.`payments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ampaphil`.`payments` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `payments_date` DATE NOT NULL,
  `payments_time` TIME NOT NULL,
  `payments_rate` DOUBLE NOT NULL,
  `talent_percentage` DECIMAL(10,0) NOT NULL,
  `agency_percentage` DECIMAL(10,0) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `ampaphil`.`event_details`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ampaphil`.`event_details` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `event_name` VARCHAR(45) NOT NULL,
  `event_location` VARCHAR(45) NOT NULL,
  `event_type` VARCHAR(45) NOT NULL,
  `event_datefrom` DATE NOT NULL,
  `event_dateto` DATE NOT NULL,
  `event_timefrom` TIME NOT NULL,
  `event_timeto` TIME NOT NULL,
  `transaction_id` INT(11) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_EVENTS_TRANSACTION1` (`transaction_id` ASC),
  CONSTRAINT `fk_EVENTS_TRANSACTION1`
    FOREIGN KEY (`transaction_id`)
    REFERENCES `ampaphil`.`payments` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `ampaphil`.`manager`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ampaphil`.`manager` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `mgr_lname` VARCHAR(45) NOT NULL,
  `mgr_fname` VARCHAR(45) NOT NULL,
  `mgr_mname` VARCHAR(45) NULL,
  `mgr_gender` VARCHAR(10) NOT NULL,
  `mgr_bdate` DATE NOT NULL,
  `mgr_blockno` VARCHAR(10) NOT NULL,
  `mgr_street` VARCHAR(45) NOT NULL,
  `mgr_brgy` VARCHAR(45) NOT NULL,
  `mgr_city` VARCHAR(45) NOT NULL,
  `mgr_zipcode` INT(11) NULL,
  `mgr_contactno` VARCHAR(20) NOT NULL,
  `mgr_emailadd` VARCHAR(45) NOT NULL,
  `mgr_expertise` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `ampaphil`.`talent`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ampaphil`.`talent` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `manager_id` INT(11) NOT NULL,
  `talent_managedstartdate` DATE NOT NULL,
  `talent_managedenddate` DATE NOT NULL,
  `screening_sched_id` INT(11) NULL,
  `applicant_id` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`, `manager_id`),
  INDEX `fk_TALENT_MANAGER1` (`manager_id` ASC),
  INDEX `fk_TALENT_SCREENING_SCHED1` (`screening_sched_id` ASC),
  INDEX `fk_TALENT_APPLICANT1` (`applicant_id` ASC),
  CONSTRAINT `fk_TALENT_APPLICANT1`
    FOREIGN KEY (`applicant_id`)
    REFERENCES `ampaphil`.`applicant` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TALENT_MANAGER1`
    FOREIGN KEY (`manager_id`)
    REFERENCES `ampaphil`.`manager` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TALENT_SCREENING_SCHED1`
    FOREIGN KEY (`screening_sched_id`)
    REFERENCES `ampaphil`.`screening_sched` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `ampaphil`.`events`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ampaphil`.`events` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `TALENT_id` INT(11) NOT NULL,
  `TALENT_MANAGER_id` INT(11) NOT NULL,
  `EVENTS_DETAILS_id` INT(11) NOT NULL,
  `CLIENT_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`, `TALENT_id`, `TALENT_MANAGER_id`, `EVENTS_DETAILS_id`, `CLIENT_id`),
  INDEX `fk_TALENT_has_EVENTS_DETAILS_TALENT1` (`TALENT_id` ASC, `TALENT_MANAGER_id` ASC),
  INDEX `fk_TALENT_has_EVENTS_DETAILS_EVENTS_DETAILS1` (`EVENTS_DETAILS_id` ASC),
  INDEX `fk_EVENT_CLIENT1` (`CLIENT_id` ASC),
  CONSTRAINT `fk_EVENT_CLIENT1`
    FOREIGN KEY (`CLIENT_id`)
    REFERENCES `ampaphil`.`client` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TALENT_has_EVENTS_DETAILS_EVENTS_DETAILS1`
    FOREIGN KEY (`EVENTS_DETAILS_id`)
    REFERENCES `ampaphil`.`event_details` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TALENT_has_EVENTS_DETAILS_TALENT1`
    FOREIGN KEY (`TALENT_id` , `TALENT_MANAGER_id`)
    REFERENCES `ampaphil`.`talent` (`id` , `manager_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `ampaphil`.`migration`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ampaphil`.`migration` (
  `version` VARCHAR(180) NOT NULL,
  `apply_time` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`version`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `ampaphil`.`talent_line`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ampaphil`.`talent_line` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `talent_type` VARCHAR(45) NOT NULL,
  `talent_specialization` VARCHAR(45) NOT NULL,
  `applicant_id` INT(11) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_TALENT_LINE_APPLICANT1` (`applicant_id` ASC),
  CONSTRAINT `fk_TALENT_LINE_APPLICANT1`
    FOREIGN KEY (`applicant_id`)
    REFERENCES `ampaphil`.`applicant` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `ampaphil`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ampaphil`.`user` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  `auth_key` VARCHAR(32) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  `password_hash` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  `password_reset_token` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL,
  `email` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL,
  `status` SMALLINT(6) NOT NULL DEFAULT '10',
  `created_at` INT(11) NOT NULL,
  `updated_at` INT(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
