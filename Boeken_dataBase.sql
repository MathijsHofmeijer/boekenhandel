CREATE DATABASE IF NOT EXISTS boeken;

USE boeken;

DROP TABLE IF EXISTS boeken;

CREATE TABLE boeken (
    titel VARCHAR(60),
    schrijver VARCHAR(60),
    taal VARCHAR(30),
    paginas INT(11),
    cover VARCHAR(32),
    uitgever VARCHAR(32),
    genre VARCHAR(32),
    releaseday DATETIME,
    image VARCHAR(60),
    PRIMARY KEY AUTO_INCREMENT(titel)
);

INSERT INTO boeken
    (titel, schrijver, taal, paginas, cover, genre, uitgever, releaseday, image)
VALUES ('IT', 'stephen king', 'Engels', '1138', 'Hard', 'Horror', 'Viking Press', '1986-09-15', 'plaatje');


SELECT * FROM boeken;





