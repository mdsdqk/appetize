LOAD DATA INFILE "C:/xampp/htdocs/SE_Project/db/restaurants.csv"
INTO TABLE restaurants 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS;

INSERT INTO users VALUES (1,"shoeb@boss.com","81dc9bdb52d04dc20036dbd8313ed055","shoeb",12.97022064,77.64539558,"veg","Irish,Restaurant Cafe,Kebab,Ramen,Italian","2, 3");
INSERT INTO users VALUES (2,"manoj@manoj.com","81dc9bdb52d04dc20036dbd8313ed055","manoj",13.026977,77.56233,"non-veg","Pizza,Restaurant Cafe,Kebab,Ramen,Italian","1, 3");
INSERT INTO users VALUES (3,"khalandar@nawal.com","81dc9bdb52d04dc20036dbd8313ed055","khalandar",12.962424,77.674742,"veg","North Indian,Restaurant Cafe,Kebab,Ramen,Italian","1, 2");
INSERT INTO users VALUES (4,"sadiq@abc.com","81dc9bdb52d04dc20036dbd8313ed055","sadiq",12.962424,77.674742,"veg","North Indian,Restaurant Cafe,Kebab,Ramen,Italian","1, 2");


INSERT INTO users VALUES (5,"raju@ice.com","81dc9bdb52d04dc20036dbd8313ed055","raju",28.629072,77.215710,"veg","North Indian,Restaurant Cafe,Kebab,Ramen,Italian","6, 7");
INSERT INTO users VALUES (6,"farhan@ice.com","81dc9bdb52d04dc20036dbd8313ed055","farhan",28.623645, 77.211583,"non-veg","Pizza,Restaurant Cafe,Italian,Continental,Kebab,Ramen,Italian","5, 7");
INSERT INTO users VALUES (7,"rancho@ice.com","81dc9bdb52d04dc20036dbd8313ed055","rancho",28.622505, 77.226015,"veg","North Indian,Restaurant Cafe,South Indian,Continental,Chinese,Italian","5, 6");

LOAD DATA INFILE "C:/xampp/htdocs/SE_Project/db/reviews.csv"
INTO TABLE reviews 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS;