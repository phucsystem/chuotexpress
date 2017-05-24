CREATE TABLE `tbl_menu` (
    `id` int(11) PRIMARY KEY AUTO_INCREMENT,
    `name` varchar(50),
    `updated` DATETIME,
    `created` DATETIME
);


INSERT INTO `tbl_menu` (`name`, `updated`, `created`) VALUES ('home', '2017-05-24 19:00:00', '2017-05-24 19:00:00');

ALTER TABLE `tbl_menu` ADD `url` varchar(100) AFTER `name`;