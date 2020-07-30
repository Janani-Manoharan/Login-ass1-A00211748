use database;
CREATE TABLE blog_author (
author_id int not null 
,author_email varchar(255) primary key
,author_name varchar(255) not null
);

CREATE TABLE blog_lists (
    author_id int primary key
    , blog_name varchar(255)
    , blog_theme text
    , author_email varchar(255) REFERENCES author(email) 
    , publish_date DATETIME 

);

INSERT INTO blog_author values(1,"mark.antony@gmail.com","mark");
INSERT INTO blog_author values(2,"james.bond@gmail.com","james");
INSERT INTO blog_author values(3,"william.jack@gmail.com","jack");

INSERT INTO blog_lists values(1,"mark","books","mark.antony@gmail.com",curdate());
INSERT INTO blog_lists values(2,"james","animals","james.bond@gmail.com",curdate());
INSERT INTO blog_lists values(3,"jack","nature","william.jack@gmail.com",curdate());
