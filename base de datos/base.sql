create database isum;
/*use isum;*/

INSERT INTO userE (nameE, nitE, pass)
VALUES ("ubernardo", "1234567892","hola");

select * from userE where nitE = "1234567892" and pass = "hola";

use isum;
create table userE(
id int (10) not null auto_increment,
nameE varchar (60) not null,
nitE varchar (10) not null, 
pass varchar (16) not null,
primary key (id)
);

create table ventMark(
idvm int (10) not null auto_increment,
id int (10) not null,
sum int (10)not null,
primary key(idvm),
foreign key (id) references userE (id)
);

create table diagEmp(
idde int (10) not null auto_increment,
id int (10	) not null,
primary key(idde),
foreign key (id) references userE (id)
);