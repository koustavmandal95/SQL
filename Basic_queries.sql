select student.name, student.major from student order by name asc;
select student.name, student.major from student order by name desc;
// Orders by major first then student_id in ascending order.
select * from student order by major , student_id;
select * from student order by major , student_id desc;

select * from student limit 2 desc;
select * from student order by student_id desc limit 2;

// The major starts with the name B;
select name , major from student where major like 'B%';
select name , major from student where major = 'Mathematics';

select * from student where name in('Jack','Mike','Jane');
+------------+------+-----------+
| student_id | name | major     |
+------------+------+-----------+
|          6 | Jack | Biology   |
|          7 | Mike | Sociology |
|          8 | Jane | Zoology   |
+------------+------+-----------+
