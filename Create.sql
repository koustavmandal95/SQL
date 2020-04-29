create table student (
  student_id INT AUTO_INCREMENT,
  name varchar(20), 
  major varchar(20),
  primary key(student_id)
  );
  
  create table student (
  student_id INT AUTO_INCREMENT,
  name varchar(20) default 'undecided',
  major varchar(20),
  primary key(student_id)
  );
  
  create table student (
  student_id INT AUTO_INCREMENT,
  name varchar(20) not null,
  major varchar(20) default 'undecided' unique,
  primary key(student_id)
  );
 // Auto_increment takes care of the student_id.
insert into student(name,major) values('Jack','Biology');
insert into student(name,major) values('John','Sociology'); 
insert into student(name,major) values('Claire','Mathematics');
insert into student(name,major) values('Jane','Zoology');
insert into student(name,major) values('Jennifier','Botany');
