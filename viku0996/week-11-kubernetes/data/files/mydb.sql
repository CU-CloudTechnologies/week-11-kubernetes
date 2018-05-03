DROP TABLE IF EXISTS mydb.teams;
CREATE TABLE mydb.teams(name varchar(20)); 
INSERT INTO mydb.teams VALUES ("CHELSEA FC"),("FC BARCELONA");
GRANT ALL PRIVILEGES on mydb.* TO 'master'@'%';

