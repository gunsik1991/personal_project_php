CREATE TABLE `reviewboard` (
	`no` INT(11) NOT NULL AUTO_INCREMENT,
	`review_id` VARCHAR(10) NOT NULL,
	`review_title` VARCHAR(40) NOT NULL,
	`review_content` VARCHAR(300) NULL DEFAULT NULL,
	`review_date` DATE NOT NULL,
	PRIMARY KEY (`no`)
)
COLLATE='utf8mb4_general_ci'
ENGINE=MyISAM