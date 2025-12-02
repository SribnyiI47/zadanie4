CREATE DATABASE creator;
USE creator;

CREATE TABLE characters (
 id INT AUTO_INCREMENT PRIMARY KEY,
 nickname VARCHAR(50),
 class VARCHAR(30),
 strength INT,
 intelligence INT,
 agility INT,
 level INT
);

INSERT INTO characters (nickname,class,strength,intelligence,agility,level) VALUES
('Koxu','Warrior',10,3,5,1),
('Mati','Rogue',6,4,9,2),
('WizardBoy','Mage',3,10,4,3);
