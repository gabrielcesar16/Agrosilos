-- 20190906
-- FOREIGN KEY (id) REFERENCES silo(id) ON DELETE CASCADE,

CREATE TABLE silo
(
	id INTEGER NOT NULL AUTO_INCREMENT, 
	altura INTEGER DEFAULT 0,
	PRIMARY KEY (id)
) ENGINE=INNODB;

CREATE TABLE forragem
(
	id INTEGER NOT NULL AUTO_INCREMENT, 
	densidade_media FLOAT DEFAULT 0,
	dias_fornecimento INTEGER DEFAULT 0,
	expessura_diaria FLOAT DEFAULT 0,
	PRIMARY KEY (id)
) ENGINE=INNODB;

CREATE TABLE animal
(
	id INTEGER NOT NULL AUTO_INCREMENT, 
	quantidade INTEGER DEFAULT 0,
	consumo INTEGER DEFAULT 0,
	PRIMARY KEY (id)
) ENGINE=INNODB;

CREATE TABLE agricultor
(
	id INTEGER NOT NULL AUTO_INCREMENT, 
	nome VARCHAR(64),
	email VARCHAR(64),
	senha VARCHAR(64),
	propriedade VARCHAR(64),
	PRIMARY KEY (id)
) ENGINE=INNODB;


-- crud
-- CREATE

INSERT INTO silo VALUES(DEFAULT, 10);

INSERT INTO forragem VALUES(DEFAULT, 1.7, 8, 1.5);  

INSERT INTO animal VALUES(DEFAULT, 4, 20);  

INSERT INTO agricultor VALUES
    (DEFAULT, 'Steve Jobs', 'steve', '1', 'Apple'),
    (DEFAULT, 'Bill Gates', 'bill', '1', 'Microsoft')
;  


-- crud
-- RETRIEVE

SELECT * FROM silo;

SELECT * FROM forragem;  

SELECT * FROM animal;  

SELECT * FROM agricultor;  


