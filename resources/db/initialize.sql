CREATE DATABASE EVI;

CREATE TABLE Users (
user_id INT NOT NULL,
name CHAR(30) NOT NULL,
vorname CHAR(30)NOT NULL,
email VARCHAR NOT NULL,
PRIMARY KEY (user_id)
);


CREATE TABLE Kriterien (
kriterien_id INT NOT NULL,
beschreibung VARCHAR(255),
stufe1 VARCHAR(255),
stufe2 VARCHAR(255),
stufe3 VARCHAR(255),
stufe4 VARCHAR(255),
PRIMARY KEY (kriterien_id)
);

CREATE TABLE IPA (
ipa_id INT NOT NULL,
lernender_ID INT NOT NULL,
experte_ID INT NOT NULL,
b_id INT NOT NULL,
titel VARCHAR(255)
PRIMARY KEY (ipa_id)
);

CREATE TABLE Beurteilungsbogen (
beurteilungsbogen_id INT NOT NULL,
kriterien_id INT NOT NULL,
bewertung_lernender BOOLEAN,
bewertung_experte INT,
PRIMARY KEY (beurteilungsbogen_id)
);
