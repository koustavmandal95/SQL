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
  
insert into student(name,major) values('Jack','Biology');
insert into student(name,major) values('John','Sociology');