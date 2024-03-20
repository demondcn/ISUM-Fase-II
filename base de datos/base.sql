create database isum;
use isum;
DROP database isum;

INSERT INTO userE (nameE, nitE, pass)
VALUES ("Jorge A Espinoza", "1234567891","hola");
INSERT INTO userE (nameE, nitE, pass)
VALUES ("ubernardo", "1234567892","hola");

INSERT INTO surveys (ids,s1, id)
           VALUES (1,14,1);
           
UPDATE surveys
SET s2 = 14          
where id = 1;

select * from userE;


SELECT *
FROM userE
INNER JOIN Surveys ON userE.id = Surveys.id;

select * from userE where nitE = "1234567892" and pass = "hola";
SELECT id, nameE FROM userE WHERE nitE = "1234567891" AND pass = "hola";

select * from Surveys;

drop table surveys;

use isum;

create table userE(
id int (10) not null auto_increment,
nameE varchar (60) not null,
nitE varchar (10) not null, 
pass varchar (16) not null,
primary key (id)
);

create table Surveys(
idS int (10) not null auto_increment,
s1 int (10),
s2 int (10),
s3 int (10),
s4 int (10),
s5 int (10),
s6 int (10),
s7 int (10),
id int (10) not null,
primary key(idS),
foreign key (id) references userE (id)
);