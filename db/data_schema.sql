DROP DATABASE appetize;

CREATE DATABASE appetize;

USE appetize;

CREATE TABLE users (
    userid INT NOT NULL PRIMARY KEY,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    username VARCHAR(50),
    latitude DOUBLE,
    longitude DOUBLE,
    diet VARCHAR(10),
    cuisines VARCHAR(1000),
    friends VARCHAR(1000)
);

CREATE TABLE restaurants (
    restaurant_id INT NOT NULL PRIMARY KEY,
    name VARCHAR(10),
    country_code INT,
    city VARCHAR(20),
    address VARCHAR(1000),
    locality VARCHAR(100),
    locality_verbose VARCHAR(1000),
    latitude DOUBLE,
    longitude DOUBLE,
    cuisines VARCHAR(1000),
    average_cost INT,
    currency VARCHAR(10),
    price_range VARCHAR(5),
    aggregate_rating DOUBLE,
    rating_color VARCHAR(20),
    rating_text VARCHAR(20),
    votes INT
);

CREATE TABLE reviews (
    review_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    userid INT,
    restaurant_id INT,
    review TEXT,
    rating INT,
    FOREIGN KEY (userid) REFERENCES users(userid),
    FOREIGN KEY (restaurant_id) REFERENCES restaurants(restaurant_id)
);