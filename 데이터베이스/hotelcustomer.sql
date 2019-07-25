CREATE TABLE `hotelcustomer` (
	`id` VARCHAR(8) NOT NULL,
	`password` VARCHAR(8) NOT NULL,
	`name` VARCHAR(10) NULL DEFAULT NULL,
	`birth` VARCHAR(14) NULL DEFAULT NULL,
	`email` VARCHAR(40) NULL DEFAULT NULL,
	PRIMARY KEY (`id`)
)
COLLATE='utf8mb4_general_ci'
ENGINE=MyISAM
;