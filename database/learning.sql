CREATE TABLE `students` (
    `id` INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(200) NOT NULL,
    `email` VARCHAR(200) NOT NULL,
    `gender` CHAR(6) NOT NULL,
    `dob` DATE NOT NULL,
    `age` TINYINT UNSIGNED
);



--create--
INSERT INTO `students` (`name`, `email`, `gender`, `dob`, `age`) 
VALUES
("Bob", "bob@gmail.com", "male", "1995-03-01", "27"),
("Colin", "colin@gmail.com", "male", "1996-01-4", "26"),
("Dave", "dave@gmail.com", "male", "1992-07-7", "30"),
("Emily", "emily@gmail.com", "female", "1996-08-30", "26");

--read--
SELECT `id`, `name`, `email`, `gender`, `dob`, `age` from `students`;
SELECT * FROM `students`;

--update--
UPDATE `students` 
    SET `dob` = "1995-02-9", `age` = "27"
    WHERE `id` = 5;

--delete--
DELETE FROM `students` WHERE id = 2;