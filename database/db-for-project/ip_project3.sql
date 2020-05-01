CREATE TABLE `roles` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `role` VARCHAR(120),
  `edit_privilege` BOOLEAN ,
  `is_admin` BOOLEAN
);

CREATE TABLE `staff` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `role_id` INT,
  `username` VARCHAR(50) UNIQUE NOT NULL,
  `password` VARCHAR(120) NOT NULL,
  `first_name` VARCHAR(100) NOT NULL,
  `last_name` VARCHAR(100),
  `phone_number` VARCHAR(12) NOT NULL,
  `email` VARCHAR(120)
);

CREATE TABLE `clients` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `first_name` VARCHAR(100) NOT NULL,
  `last_name` VARCHAR(100),
  `phone_number` VARCHAR(12) NOT NULL,
  `email` VARCHAR(120)
);

CREATE TABLE `board_type` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `type` VARCHAR(100),
  `description` VARCHAR(100),
  `capacity` INT NOT NULL,
  `price` INT NOT NULL
);

CREATE TABLE `boards` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `type_id` INT,
  `is_available` BOOLEAN DEFAULT (True),
  `added_by` varchar(50),
  `added_time` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `edited_by` varchar(50),
  `edited_time` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


CREATE TABLE `category` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` VARCHAR(100),
  `description` VARCHAR(100),
  `portion_units` VARCHAR(10)
);

CREATE TABLE `meals` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` VARCHAR(200),
  `category_id` INT,
  `price` INT,
  `portion` INT,
  `is_available` BOOLEAN DEFAULT (True),
  `ingredients` TEXT,
  `ready_time` INT,
  `added_by` varchar(50),
  `added_time` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `edited_by` varchar(50),
  `edited_time` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE `orders` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `client_id` INT NOT NULL,
  `is_approved` BOOLEAN,
  `approved_by` varchar(50),
  `date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL,
  `total_price` INT
);

CREATE TABLE `board_orders` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `order_id` INT,
  `board_id` INT NOT NULL,
  `order_time` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL
);

CREATE TABLE `meal_orders` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `order_id` INT NOT NULL,
  `board_order_id` INT NOT NULL,
  `meal_id` INT NOT NULL,
  `quantity` INT NOT NULL,
  `total_price` INT,
  `order_time` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL,
  `ready_time` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

ALTER TABLE `orders` ADD FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);

ALTER TABLE `board_orders` ADD FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

ALTER TABLE `board_orders` ADD FOREIGN KEY (`board_id`) REFERENCES `boards` (`id`);

ALTER TABLE `meal_orders` ADD FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

ALTER TABLE `meal_orders` ADD FOREIGN KEY (`board_order_id`) REFERENCES `board_orders` (`id`);

ALTER TABLE `meal_orders` ADD FOREIGN KEY (`meal_id`) REFERENCES `meals` (`id`);

ALTER TABLE `boards` ADD FOREIGN KEY (`type_id`) REFERENCES `board_type` (`id`);

ALTER TABLE `meals` ADD FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

ALTER TABLE `staff` ADD FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

ALTER TABLE `boards` ADD FOREIGN KEY (`added_by`) REFERENCES `staff` (`username`);

ALTER TABLE `boards` ADD FOREIGN KEY (`edited_by`) REFERENCES `staff` (`username`);

ALTER TABLE `meals` ADD FOREIGN KEY (`added_by`) REFERENCES `staff` (`username`);

ALTER TABLE `meals` ADD FOREIGN KEY (`edited_by`) REFERENCES `staff` (`username`);

ALTER TABLE `orders` ADD FOREIGN KEY (`approved_by`) REFERENCES `staff` (`username`);
