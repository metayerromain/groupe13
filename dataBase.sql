CREATE SCHEMA `roadr`
  DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `roadr`.`article` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` VARCHAR(50) NOT NULL,
  `img` VARCHAR(50) NOT NULL,
  `date` VARCHAR(50) NOT NULL,
  `content` TEXT NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO
  `article`
  (`id`, `titre`, `date`, `content`, `img`)
VALUES
  (NULL, 'Bugatti', '12 fev 2018', 'le text sera ici', '')
;