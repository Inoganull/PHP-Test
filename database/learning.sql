CREATE TABLE `students` (
    `id` INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(200) NOT NULL,
    `email` VARCHAR(200) NOT NULL,
    `gender` CHAR(6) NOT NULL,
    `dob` DATE NOT NULL,
    `age` TINYINT UNSIGNED,
    `course_id` INT UNSIGNED NOT NULL
);

CREATE TABLE `courses` (
    `id` INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(200) NOT NULL
);

CREATE TABLE `course_student` (
    `student_id` INT UNSIGNED NOT NULL,
    `course_id` INT UNSIGNED NOT NULL
);



--create--
INSERT INTO `students` (`name`, `email`, `gender`, `dob`, `age`, `course_id`) 
VALUES
("Alice", "alice@gmail.com", "female", "1996-10-30", "26", "2"),
("Bob", "bob@gmail.com", "male", "1995-03-01", "27", "1"),
("Colin", "colin@gmail.com", "male", "1996-01-4", "26", "1"),
("Dave", "dave@gmail.com", "male", "1992-07-7", "30", "3"),
("Emily", "emily@gmail.com", "female", "1996-08-30", "26", "1");

INSERT INTO `courses` (`name`) 
VALUES
("PHP"), ("Javascript"), ("Python"), ("C++");

INSERT INTO `course_student` (`student_id`, `course_id`)
VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 4),
(3, 1),
(3, 2),
(4, 3),
(4, 2),
(5, 1),
(5, 2);


--read--
SELECT `id`, `name`, `email`, `gender`, `dob`, `age` from `students`;
SELECT * FROM `students`;

--update--
UPDATE `students` 
    SET `dob` = "1995-02-9", `age` = "27"
    WHERE `id` = 5;

--delete--
DELETE FROM `students` WHERE id = 2;


--create user--
create user 'username'@'hostname' identified by 'password';
eg.create user 'professor'@'%' identified by '123';
MariaDB [(none)]> create user 'professor'@'localhost' identified by 'User@123';
--permission--
grant all privileges on *.* to 'professor'@'localhost' with grant option; --super user--
grant create on university.* to 'professor'@'localhost';

--join table--
SELECT * FROM  `students` INNER JOIN `courses` ON students.course_id = courses.id;

--many to many relationship--
SELECT 
    students.name, students.email, students.gender, courses.name as course
FROM `students`
    JOIN `course_student` ON students.id = course_student.student_id
    JOIN `courses` ON courses.id = course_student.course_id
    -- ORDER BY students.name ASC
    WHERE courses.name = "PHP";

