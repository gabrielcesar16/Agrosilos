-- 20190906

CREATE TABLE agricultor
(
	id INTEGER NOT NULL AUTO_INCREMENT, 
	nome VARCHAR(64),
	email VARCHAR(64),
	login VARCHAR(64),
	senha VARCHAR(64),
	propriedade VARCHAR(64),
	PRIMARY KEY (id)
) ENGINE=INNODB;

CREATE TABLE calculos
(
	id INTEGER NOT NULL AUTO_INCREMENT, 
    data datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,

    numero_animais INTEGER DEFAULT 0,
    dias_fornecimento INTEGER DEFAULT 0,
    consumo_forragem INTEGER DEFAULT 0,
    altura_silo INTEGER DEFAULT 0,
    espessura_fatia FLOAT DEFAULT 0.0,
    densidade INTEGER DEFAULT 0,

    quantidade_silo FLOAT DEFAULT 0.0,
    volume_silo FLOAT DEFAULT 0.0,
    volume_dia FLOAT DEFAULT 0.0,
    area_secao FLOAT DEFAULT 0.0,
    tamanho_base FLOAT DEFAULT 0.0,
    base_menor FLOAT DEFAULT 0.0,
    base_maior FLOAT DEFAULT 0.0,
    comprimento_silo FLOAT DEFAULT 0.0,

    FOREIGN KEY (id) REFERENCES agricultor(id) ON DELETE CASCADE,
	PRIMARY KEY (id)
) ENGINE=INNODB;

-- crud
-- CREATE
INSERT INTO agricultor VALUES
    (DEFAULT, 'Steve Jobs', 'steve@apple.com', 'steve', '123', 'Apple'),
    (DEFAULT, 'Bill Gates', 'bill@microsoft.com', 'bill', 'qwe', 'Microsoft')
;  

-- crud
-- RETRIEVE
SELECT * FROM agricultor; 
SELECT * FROM calculos; 

