CREATE database lojaBD;
USE lojaBD;
CREATE table produtos (id integer AUTO_INCREMENT PRIMARY KEY, codigo varchar(100), produto varchar(100), dataCompra varchar(100), fornecedor varchar(100), emailFornecedor varchar(100), marca varchar(100), categoria varchar(100), lote varchar(100), quantidade varchar(100), precoCompra varchar(100), precoVenda varchar(100), precoUnitario varchar(100), descricao varchar(100));
