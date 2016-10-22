CREATE TABLE `users` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`user_login` VARCHAR(30) NOT NULL UNIQUE,
	`user_password` VARCHAR(50) NOT NULL,
	`user_email` VARCHAR(50) NOT NULL UNIQUE,
	`user_registered` TIMESTAMP NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `comments` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`timestamp` TIMESTAMP NOT NULL,
	`author` INT NOT NULL,
	`text` VARCHAR(255) NOT NULL,
	`image_id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `images` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`author` INT NOT NULL,
	`title` VARCHAR(255) NOT NULL,
	`url` VARCHAR(255) NOT NULL,
	`description` VARCHAR(255),
	`timestamp` TIMESTAMP NOT NULL,
	`alt` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `comments` ADD CONSTRAINT `comments_fk0` FOREIGN KEY (`author`) REFERENCES `users`(`id`);

ALTER TABLE `comments` ADD CONSTRAINT `comments_fk1` FOREIGN KEY (`image_id`) REFERENCES `images`(`id`);

ALTER TABLE `images` ADD CONSTRAINT `images_fk0` FOREIGN KEY (`author`) REFERENCES `users`(`id`);