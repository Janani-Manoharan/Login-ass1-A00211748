use database;
CREATE TABLE blog_author (
author_email varchar(255) primary key
,author_name varchar(255) not null
,hash_val varchar(255) not null
);
--username - Mark, password - mark
--username - James, password - james
--username - Jack, password - jack
CREATE TABLE blog_lists (
    author_id int primary key  AUTO_INCREMENT
    , blog_name varchar(255)
    , blog_theme text
    , author_email varchar(255) REFERENCES author(email) 
    , publish_date DATETIME 

);

INSERT INTO blog_author values("mark.antony@gmail.com","Mark","$2y$10$F9Ro.7DeWoiWpRQaY7L4COYN6T996LOTHYqRUSaCksDcV9djwdB5y");
INSERT INTO blog_author values("james.bond@gmail.com","James","$2y$10$uOLAa.gdQmoeh4wOd7E53.ZPC0K4wmg7VMj5tZWRzzHxW5/ojZm22");
INSERT INTO blog_author values("william.jack@gmail.com","Jack","$2y$10$6wTpeOntj.irL62S3H33XOb5Tqv2PCSOxr72PKS0gRk8.8rj4Uizq");

INSERT INTO blog_lists values(1,"Mark","books","mark.antony@gmail.com",curdate());
INSERT INTO blog_lists values(2,"James","animals","james.bond@gmail.com",curdate());
INSERT INTO blog_lists values(3,"Jack","nature","william.jack@gmail.com",curdate());
