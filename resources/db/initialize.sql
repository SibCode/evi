CREATE TABLE Users (
user_id INT NOT NULL PRIMARY KEY,
name CHAR(30) NOT NULL,
vorname CHAR(30)NOT NULL,
email VARCHAR NOT NULL
);

CREATE TABLE Kriterien (
kriterien_id INT NOT NULL PRIMARY KEY,
kriterien_teil CHAR(1),
kriterien_nr INT,
titel VARCHAR(255),
beschreibung VARCHAR(255),
stufe3 VARCHAR(255),
stufe2 VARCHAR(255),
stufe1 VARCHAR(255),
stufe0 VARCHAR(255)
);

CREATE TABLE IPA (
ipa_id INT NOT NULL PRIMARY KEY,
lernender_ID INT NOT NULL,
experte_ID INT NOT NULL,
b_id INT NOT NULL,
titel VARCHAR(255)
);

CREATE TABLE Beurteilungsbogen (
beurteilungsbogen_id INT NOT NULL PRIMARY KEY,
kriterien_id INT NOT NULL,
bewertung_lernender BOOLEAN,
bewertung_experte INT
);
