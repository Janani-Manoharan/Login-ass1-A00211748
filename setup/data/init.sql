use database;
CREATE TABLE blog_author (
author_id int not null AUTO_INCREMENT
,author_email varchar(255) primary key
,author_name varchar(255) not null
,hash_val varchar(255) not null
);

CREATE TABLE blog_lists (
    author_id int primary key  AUTO_INCREMENT
    , blog_name varchar(255)
    , blog_theme text
    , author_email varchar(255) REFERENCES author(email) 
    , publish_date DATETIME 

);

INSERT INTO blog_author values(1,"mark.antony@gmail.com","mark","$2y$10$F9Ro.7DeWoiWpRQaY7L4COYN6T996LOTHYqRUSaCksDcV9djwdB5y");
INSERT INTO blog_author values(2,"james.bond@gmail.com","james","$2y$10$uOLAa.gdQmoeh4wOd7E53.ZPC0K4wmg7VMj5tZWRzzHxW5/ojZm22");
INSERT INTO blog_author values(3,"william.jack@gmail.com","jack","$2y$10$6wTpeOntj.irL62S3H33XOb5Tqv2PCSOxr72PKS0gRk8.8rj4Uizq");

INSERT INTO blog_lists values(1,"mark","books","mark.antony@gmail.com",curdate());
INSERT INTO blog_lists values(2,"james","animals","james.bond@gmail.com",curdate());
INSERT INTO blog_lists values(3,"jack","nature","william.jack@gmail.com",curdate());
