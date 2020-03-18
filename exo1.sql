-- 1

SELECT *
FROM `students`
JOIN school ON students.school=school.idschool;

-- 2

SELECT prenom FROM students;

-- 3

SELECT prenom, datenaissance, school.school
FROM students
LEFT JOIN school ON students.school=school.idschool;

-- 4

SELECT * FROM `students` WHERE genre="F";

-- 5

SELECT prenom, datenaissance, school.school
FROM students
LEFT JOIN school ON students.school=school.idschool
WHERE school.school= "Addy";

-- 6

SELECT prenom FROM students ORDER BY prenom DESC;

-- 7

SELECT prenom FROM students ORDER BY prenom DESC LIMIT 2;

-- 8

INSERT INTO students
(`nom`,`prenom`, `datenaissance`, `genre`, `school`)
VALUES
("Dalor","Ginette","1930-01-01","F","Central");

-- 9

UPDATE `students` SET
prenom='Omer',
genre= 'H'
WHERE idStudent=31;

-- 10

DELETE FROM students WHERE idStudent=3;

-- 11

UPDATE school SET 
school='Central'
WHERE idschool=1;

UPDATE school SET 
school='Anderlecht'
WHERE idschool=2;


