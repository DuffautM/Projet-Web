CREATE TABLE `bdd_site_cesi`.`users` (
  `id_user` INT NOT NULL AUTO_INCREMENT,
  `nom_user` TEXT(50) NOT NULL,
  `prenom_user` TEXT(45) NOT NULL,
  `mail_user` TEXT(45) NOT NULL,
  `password_user` TEXT(45) NOT NULL,
  `phrase_user` TEXT(45) NULL,
  `promo_user` TEXT(45) NOT NULL,
  `annee_user` DATE NOT NULL,
  `naissance_user` DATE NULL,
  `centre_user` TEXT(45) NOT NULL,
  `club_user` TEXT(45) NULL,
  `avatar_user` TEXT(45) NULL,
  `privilege_user` INT NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE INDEX `id_Users_UNIQUE` (`id_user` ASC)) ENGINE=InnoDB;

CREATE TABLE `bdd_site_cesi`.`activities` (
  `id_activite` INT NOT NULL AUTO_INCREMENT,
  `nom_activite` TEXT(45) NOT NULL,
  `detail_activite` TEXT(255) NOT NULL,
  `public_activite` TINYINT NOT NULL,
  `club_activite` TEXT(45) NULL,
  `date_activite` VARCHAR(45) NOT NULL,
  `prix_activite` INT NULL,
  `ok_activite` TINYINT NULL,
  `budget_activite` FLOAT NULL,
  `gain_activite` FLOAT NULL,
  PRIMARY KEY (`id_activite`),
  UNIQUE INDEX `id_activite_UNIQUE` (`id_activite` ASC)) ENGINE=InnoDB;

CREATE TABLE `bdd_site_cesi`.`goodies` (
  `id_goodies` INT NOT NULL AUTO_INCREMENT,
  `nom_goodies` VARCHAR(45) NOT NULL,
  `type_goodies` VARCHAR(45) NOT NULL,
  `detail_goodies` VARCHAR(45) NOT NULL,
  `prix_goodies` FLOAT NOT NULL,
  PRIMARY KEY (`id_goodies`),
  UNIQUE INDEX `id_goodies_UNIQUE` (`id_goodies` ASC)) ENGINE=InnoDB;

CREATE TABLE `bdd_site_cesi`.`photo` (
  `id_photo` INT NOT NULL AUTO_INCREMENT,
  `path_photo` TEXT(255) NOT NULL,
  PRIMARY KEY (`id_photo`),
  UNIQUE INDEX `id_photo_UNIQUE` (`id_photo` ASC)) ENGINE=InnoDB;

CREATE TABLE `bdd_site_cesi`.`comments` (
  `id_comment` INT NOT NULL AUTO_INCREMENT,
  `text_comment` TEXT(255) NOT NULL,
  `date_comment` DATE NOT NULL,
  `id_photo` INT NOT NULL,
  PRIMARY KEY (`id_comment`),
  FOREIGN KEY (`id_photo`) REFERENCES `photo`(`id_photo`),
  UNIQUE INDEX `id_comment_UNIQUE` (`id_comment` ASC)) ENGINE=InnoDB;

CREATE TABLE `bdd_site_cesi`.`club` (
  `id_club` INT NOT NULL AUTO_INCREMENT,
  `nom_club` TEXT(45) NOT NULL,
  `baseline_club` TEXT(45) NOT NULL,
  `description_club` TEXT(255) NOT NULL,
  `budget_club` FLOAT NOT NULL,
  `enveloppe_club` FLOAT NOT NULL,
  `type_club` TEXT(45) NOT NULL,
  PRIMARY KEY (`id_club`),
  UNIQUE INDEX `id_club_UNIQUE` (`id_club` ASC)) ENGINE=InnoDB;

CREATE TABLE `bdd_site_cesi`.`participants` (
  `id_user` INT NOT NULL,
  `id_activite` INT NOT NULL,
  `inscrit_activite` INT NULL,
  `participant_activite` INT NULL,
  FOREIGN KEY (`id_user`) REFERENCES `users`(`id_user`),
  FOREIGN KEY (`id_activite`) REFERENCES `activities`(`id_activite`)) ENGINE=InnoDB;

CREATE TABLE `bdd_site_cesi`.`like_dislike` (
  `id_photo` INT NOT NULL,
  `id_activite` INT NOT NULL,
  `like_photo` VARCHAR(45) NOT NULL,
   FOREIGN KEY (`id_activite`) REFERENCES `activities`(`id_activite`),
   FOREIGN KEY (`id_photo`) REFERENCES `photo`(`id_photo`)) ENGINE=InnoDB;

CREATE TABLE `bdd_site_cesi`.`members` (
  `id_user` INT NOT NULL,
  `id_club` INT NOT NULL,
  `privilege_club` INT NOT NULL,
  `nbr_club` INT NOT NULL,
  FOREIGN KEY (`id_user`) REFERENCES `users`(`id_user`),
  FOREIGN KEY (`id_club`) REFERENCES `club`(`id_club`)) ENGINE=InnoDB;

