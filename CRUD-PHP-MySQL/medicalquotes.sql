CREATE TABLE quote(
id INT AUTO_INCREMENT,
name_pacient VARCHAR(60) NOT NULL,
email VARCHAR(60) NOT NULL,
age VARCHAR(60) NOT NULL,
department VARCHAR(60) NOT NULL,
municipality VARCHAR(30),
pacient_address VARCHAR(100),
type_quote VARCHAR(30),
cellphone VARCHAR(10),
PRIMARY KEY (id)
)

SELECT * FROM quote;

DELETE  FROM quote;

