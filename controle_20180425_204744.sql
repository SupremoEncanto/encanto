-- Valentina Studio --
-- MySQL dump --
-- ---------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- ---------------------------------------------------------


-- CREATE TABLE "chamadas" ---------------------------------
-- CREATE TABLE "chamadas" -------------------------------------
CREATE TABLE `chamadas` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`corista_id` Int( 10 ) UNSIGNED NOT NULL,
	`ensaio_id` Int( 10 ) UNSIGNED NOT NULL,
	`created_at` Timestamp NULL DEFAULT NULL,
	`updated_at` Timestamp NULL DEFAULT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "coristas" ---------------------------------
-- CREATE TABLE "coristas" -------------------------------------
CREATE TABLE `coristas` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`pessoa_id` Int( 10 ) UNSIGNED NOT NULL,
	`joined_at` Date NOT NULL,
	`left_on` Date NULL DEFAULT NULL,
	`naipe_id` TinyInt( 3 ) UNSIGNED NOT NULL,
	`created_at` Timestamp NULL DEFAULT NULL,
	`updated_at` Timestamp NULL DEFAULT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 6;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "ensaios" ----------------------------------
-- CREATE TABLE "ensaios" --------------------------------------
CREATE TABLE `ensaios` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`date` Date NOT NULL,
	`regular` TinyInt( 1 ) NULL DEFAULT NULL,
	`created_at` Timestamp NULL DEFAULT NULL,
	`updated_at` Timestamp NULL DEFAULT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "migrations" -------------------------------
-- CREATE TABLE "migrations" -----------------------------------
CREATE TABLE `migrations` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`migration` VarChar( 255 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
	`batch` Int( 11 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 8;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "naipes" -----------------------------------
-- CREATE TABLE "naipes" ---------------------------------------
CREATE TABLE `naipes` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`naipe` VarChar( 255 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
	`created_at` Timestamp NULL DEFAULT NULL,
	`updated_at` Timestamp NULL DEFAULT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 5;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "password_resets" --------------------------
-- CREATE TABLE "password_resets" ------------------------------
CREATE TABLE `password_resets` ( 
	`email` VarChar( 255 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
	`token` VarChar( 255 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
	`created_at` Timestamp NULL DEFAULT NULL )
CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci
ENGINE = InnoDB;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "pessoas" ----------------------------------
-- CREATE TABLE "pessoas" --------------------------------------
CREATE TABLE `pessoas` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`name` VarChar( 255 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
	`email` VarChar( 255 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
	`aniversario` VarChar( 255 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
	`ramal` VarChar( 255 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
	`telefone` VarChar( 255 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
	`setor` VarChar( 255 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
	`avatar` VarChar( 255 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
	`created_at` Timestamp NULL DEFAULT NULL,
	`updated_at` Timestamp NULL DEFAULT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 6;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- CREATE TABLE "users" ------------------------------------
-- CREATE TABLE "users" ----------------------------------------
CREATE TABLE `users` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`pessoa_id` Int( 10 ) UNSIGNED NOT NULL,
	`email` VarChar( 255 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
	`password` VarChar( 255 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
	`remember_token` VarChar( 100 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
	`created_at` Timestamp NULL DEFAULT NULL,
	`updated_at` Timestamp NULL DEFAULT NULL,
	PRIMARY KEY ( `id` ),
	CONSTRAINT `users_email_unique` UNIQUE( `email` ) )
CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------
-- ---------------------------------------------------------


-- Dump data of "chamadas" ---------------------------------
INSERT INTO `chamadas`(`id`,`corista_id`,`ensaio_id`,`created_at`,`updated_at`) VALUES ( '1', '1', '1', '2018-04-21 06:18:40', '2018-04-21 06:18:40' );
INSERT INTO `chamadas`(`id`,`corista_id`,`ensaio_id`,`created_at`,`updated_at`) VALUES ( '2', '2', '1', '2018-04-21 06:18:40', '2018-04-21 06:18:40' );
INSERT INTO `chamadas`(`id`,`corista_id`,`ensaio_id`,`created_at`,`updated_at`) VALUES ( '3', '3', '1', '2018-04-21 06:18:40', '2018-04-21 06:18:40' );
INSERT INTO `chamadas`(`id`,`corista_id`,`ensaio_id`,`created_at`,`updated_at`) VALUES ( '4', '4', '1', '2018-04-21 06:18:40', '2018-04-21 06:18:40' );
INSERT INTO `chamadas`(`id`,`corista_id`,`ensaio_id`,`created_at`,`updated_at`) VALUES ( '5', '5', '1', '2018-04-21 06:18:40', '2018-04-21 06:18:40' );
INSERT INTO `chamadas`(`id`,`corista_id`,`ensaio_id`,`created_at`,`updated_at`) VALUES ( '6', '1', '2', '2018-04-21 06:18:40', '2018-04-21 06:18:40' );
INSERT INTO `chamadas`(`id`,`corista_id`,`ensaio_id`,`created_at`,`updated_at`) VALUES ( '7', '2', '2', '2018-04-21 06:18:40', '2018-04-21 06:18:40' );
INSERT INTO `chamadas`(`id`,`corista_id`,`ensaio_id`,`created_at`,`updated_at`) VALUES ( '8', '3', '2', '2018-04-21 06:18:40', '2018-04-21 06:18:40' );
INSERT INTO `chamadas`(`id`,`corista_id`,`ensaio_id`,`created_at`,`updated_at`) VALUES ( '9', '4', '2', '2018-04-21 06:18:40', '2018-04-21 06:18:40' );
INSERT INTO `chamadas`(`id`,`corista_id`,`ensaio_id`,`created_at`,`updated_at`) VALUES ( '10', '5', '2', '2018-04-21 06:18:40', '2018-04-21 06:18:40' );
INSERT INTO `chamadas`(`id`,`corista_id`,`ensaio_id`,`created_at`,`updated_at`) VALUES ( '11', '1', '3', '2018-04-21 06:18:40', '2018-04-21 06:18:40' );
INSERT INTO `chamadas`(`id`,`corista_id`,`ensaio_id`,`created_at`,`updated_at`) VALUES ( '12', '2', '3', '2018-04-21 06:18:40', '2018-04-21 06:18:40' );
-- ---------------------------------------------------------


-- Dump data of "coristas" ---------------------------------
INSERT INTO `coristas`(`id`,`pessoa_id`,`joined_at`,`left_on`,`naipe_id`,`created_at`,`updated_at`) VALUES ( '1', '1', '2018-04-21', NULL, '1', '2018-04-21 06:18:40', '2018-04-21 06:18:40' );
INSERT INTO `coristas`(`id`,`pessoa_id`,`joined_at`,`left_on`,`naipe_id`,`created_at`,`updated_at`) VALUES ( '2', '2', '2018-04-21', NULL, '2', '2018-04-21 06:18:40', '2018-04-21 06:18:40' );
INSERT INTO `coristas`(`id`,`pessoa_id`,`joined_at`,`left_on`,`naipe_id`,`created_at`,`updated_at`) VALUES ( '3', '3', '2018-04-21', NULL, '4', '2018-04-21 06:18:40', '2018-04-21 06:18:40' );
INSERT INTO `coristas`(`id`,`pessoa_id`,`joined_at`,`left_on`,`naipe_id`,`created_at`,`updated_at`) VALUES ( '4', '4', '2018-04-21', NULL, '3', '2018-04-21 06:18:40', '2018-04-21 06:18:40' );
INSERT INTO `coristas`(`id`,`pessoa_id`,`joined_at`,`left_on`,`naipe_id`,`created_at`,`updated_at`) VALUES ( '5', '5', '2018-04-21', NULL, '1', '2018-04-21 06:18:40', '2018-04-21 06:18:40' );
-- ---------------------------------------------------------


-- Dump data of "ensaios" ----------------------------------
INSERT INTO `ensaios`(`id`,`date`,`regular`,`created_at`,`updated_at`) VALUES ( '1', '2018-04-03', NULL, '2018-04-21 06:18:40', '2018-04-21 06:18:40' );
INSERT INTO `ensaios`(`id`,`date`,`regular`,`created_at`,`updated_at`) VALUES ( '2', '2018-04-10', NULL, '2018-04-21 06:18:40', '2018-04-21 06:18:40' );
INSERT INTO `ensaios`(`id`,`date`,`regular`,`created_at`,`updated_at`) VALUES ( '3', '2018-04-17', NULL, '2018-04-21 06:18:40', '2018-04-21 06:18:40' );
INSERT INTO `ensaios`(`id`,`date`,`regular`,`created_at`,`updated_at`) VALUES ( '4', '2018-04-24', NULL, '2018-04-21 06:18:40', '2018-04-21 06:18:40' );
-- ---------------------------------------------------------


-- Dump data of "migrations" -------------------------------
INSERT INTO `migrations`(`id`,`migration`,`batch`) VALUES ( '1', '2014_10_12_000000_create_users_table', '1' );
INSERT INTO `migrations`(`id`,`migration`,`batch`) VALUES ( '2', '2014_10_12_100000_create_password_resets_table', '1' );
INSERT INTO `migrations`(`id`,`migration`,`batch`) VALUES ( '3', '2018_04_18_231811_create_coristas_table', '1' );
INSERT INTO `migrations`(`id`,`migration`,`batch`) VALUES ( '4', '2018_04_18_232117_create_pessoas_table', '1' );
INSERT INTO `migrations`(`id`,`migration`,`batch`) VALUES ( '5', '2018_04_20_080940_create_naipe_table', '1' );
INSERT INTO `migrations`(`id`,`migration`,`batch`) VALUES ( '6', '2018_04_25_065615_create_chamadas_table', '1' );
INSERT INTO `migrations`(`id`,`migration`,`batch`) VALUES ( '7', '2018_04_25_065711_create_ensaios_table', '1' );
-- ---------------------------------------------------------


-- Dump data of "naipes" -----------------------------------
INSERT INTO `naipes`(`id`,`naipe`,`created_at`,`updated_at`) VALUES ( '1', 'Soprano', '2018-04-21 06:18:40', '2018-04-21 06:18:40' );
INSERT INTO `naipes`(`id`,`naipe`,`created_at`,`updated_at`) VALUES ( '2', 'Contralto', '2018-04-21 06:18:40', '2018-04-21 06:18:40' );
INSERT INTO `naipes`(`id`,`naipe`,`created_at`,`updated_at`) VALUES ( '3', 'Tenor', '2018-04-21 06:18:40', '2018-04-21 06:18:40' );
INSERT INTO `naipes`(`id`,`naipe`,`created_at`,`updated_at`) VALUES ( '4', 'Baixo', '2018-04-21 06:18:40', '2018-04-21 06:18:40' );
-- ---------------------------------------------------------


-- Dump data of "password_resets" --------------------------
-- ---------------------------------------------------------


-- Dump data of "pessoas" ----------------------------------
INSERT INTO `pessoas`(`id`,`name`,`email`,`aniversario`,`ramal`,`telefone`,`setor`,`avatar`,`created_at`,`updated_at`) VALUES ( '1', 'Claudia', 'claudia@stf.jus.br', '04/12', '4521', '3217-3000', 'Remoto', 'download.jpeg', '2018-04-21 06:18:40', '2018-04-21 06:18:40' );
INSERT INTO `pessoas`(`id`,`name`,`email`,`aniversario`,`ramal`,`telefone`,`setor`,`avatar`,`created_at`,`updated_at`) VALUES ( '2', 'Divina Célia', 'divina@stf.jus.br', '04/12', '4521', '3217-3000', 'SDO', 'download2.jpeg', '2018-04-21 06:18:40', '2018-04-21 06:18:40' );
INSERT INTO `pessoas`(`id`,`name`,`email`,`aniversario`,`ramal`,`telefone`,`setor`,`avatar`,`created_at`,`updated_at`) VALUES ( '3', 'Geancarlo', 'geancarlo@stf.jus.br', '04/12', '4521', '3217-3000', 'STI/CESO', 'NULL', '2018-04-21 06:18:40', '2018-04-21 06:18:40' );
INSERT INTO `pessoas`(`id`,`name`,`email`,`aniversario`,`ramal`,`telefone`,`setor`,`avatar`,`created_at`,`updated_at`) VALUES ( '4', 'Vitor', 'vitor@stf.jus.br', '04/12', '4521', '3217-3000', 'STI/CINT', 'NULL', '2018-04-21 06:18:40', '2018-04-21 06:18:40' );
INSERT INTO `pessoas`(`id`,`name`,`email`,`aniversario`,`ramal`,`telefone`,`setor`,`avatar`,`created_at`,`updated_at`) VALUES ( '5', 'Ana Valéria', 'ana.valeria@stf.jus.br', '04/12', '4521', '3217-3000', 'SDO', 'NULL', '2018-04-21 06:18:40', '2018-04-21 06:18:40' );
-- ---------------------------------------------------------


-- Dump data of "users" ------------------------------------
-- ---------------------------------------------------------


-- CREATE INDEX "password_resets_email_index" --------------
-- CREATE INDEX "password_resets_email_index" ------------------
CREATE INDEX `password_resets_email_index` USING BTREE ON `password_resets`( `email` );
-- -------------------------------------------------------------
-- ---------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


