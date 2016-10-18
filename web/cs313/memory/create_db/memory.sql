-- create and select the database
DROP DATABASE IF EXISTS memory;
CREATE DATABASE memory;
USE memory;  -- MySQL command

-- create the tables
CREATE TABLE people (
  peopleID       INT(11)        NOT NULL   AUTO_INCREMENT,
  peopleName     VARCHAR(255)   NOT NULL,
  PRIMARY KEY (peopleID)
);

CREATE TABLE photos (
  photoID           INT(11)         NOT NULL   AUTO_INCREMENT,
  peopleID          INT(11)         NOT NULL,
  photoName         VARCHAR(255)    NOT NULL,
  dateTaken         VARCHAR(55)     NOT NULL,
  photoCaption      TEXT            NULL,
  photoStory        TEXT            NULL,
  imageCode         VARCHAR(55)     NOT NULL,
  PRIMARY KEY (photoID)
);

CREATE TABLE bridge (
  photoID            INT(11)        NOT NULL,
  peopleID           INT(11)        NOT NULL,
  PRIMARY KEY (photoID, peopleID)
);

-- insert data into the database
INSERT INTO people (peopleName)
    VALUES ('Vivian H. Grindstaff');

INSERT INTO people (peopleName)
    VALUES ('Peggy Fehlman');

INSERT INTO people (peopleName)
    VALUES ('Elizabeth Hagey');

INSERT INTO photos (photoName, dateTaken, photoCaption, imageCode)
    VALUES ('Vivian H. Grindstaff', 'August 2016', 'Short hike in Colorado', 'vhgrindstaff');






