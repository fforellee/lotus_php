/* MR_Eduardinho(Mercado): */

CREATE TABLE Cliente (
    CPF CHAR PRIMARY KEY,
    Nome_completo VARCHAR,
    Data_nascimento DATE,
    Sexo CHARACTER,
    Num_tel CHAR,
    Email VARCHAR,
    Senha VARCHAR,
    Endereço_CEP CHAR,
    Endereço_Logradouro VARCHAR,
    Endereço_Num_residencia VARCHAR,
    Endereço_Complemento VARCHAR,
    Cartão_num CHAR,
    Cartão_venc CHAR,
    Cartão_cod CHAR
);

CREATE TABLE Produto (
    Cod_barra INTEGER PRIMARY KEY,
    Data_vencimento DATE,
    Preço DECIMAL,
    Cod_categoria VARCHAR,
    Nome_produto VARCHAR
);

CREATE TABLE Compra (
    Data_compra DATE,
    Tipo VARCHAR,
    Cod_barra_Produto INTEGER,
    CPF_Cliente CHAR,
    Cod_cadastro_Funcionario INTEGER,
    PRIMARY KEY (Data_compra, Cod_barra_Produto, CPF_Cliente)
);

CREATE TABLE Fornecedor (
    CNPJ CHAR PRIMARY KEY,
    Nome_empresa VARCHAR,
    Num_tel VARCHAR,
    Email VARCHAR
);

CREATE TABLE Fornece (
    Data DATE,
    Quantidade INTEGER,
    Hora TIME,
    CNPJ_Fornecedor VARCHAR,
    Cod_barra_Produto INTEGER,
    PRIMARY KEY (Data, CNPJ_Fornecedor, Cod_barra_Produto)
);

CREATE TABLE Categoria (
    Cod_categoria SMALLINT PRIMARY KEY,
    Tipo VARCHAR
);

CREATE TABLE Funcionario (
    Cod_cadastro INTEGER PRIMARY KEY,
    Nome_completo VARCHAR,
    Data_nascimento DATE,
    CPF CHAR,
    Num_tel VARCHAR,
    Senha VARCHAR
);

CREATE TABLE Envia (
    Data DATE,
    hora TIME,
    Data_compra DATE,
    Cod_barra_Produto INTEGER,
    CPF_Cliente CHAR,
    CNPJ_Distribuidora CHAR,
    PRIMARY KEY (Data, CPF_Cliente, Cod_barra_Produto, Data_compra, CNPJ_Distribuidora)
);

CREATE TABLE Distribuidora (
    CNPJ CHAR PRIMARY KEY,
    Nome_companhia VARCHAR,
    Distancia_entrega DECIMAL
);

CREATE TABLE Tipos_Veiculos (
    CNPJ CHAR,
    Tipo_veiculo CHAR,
    PRIMARY KEY (CNPJ, Tipo_veiculo)
);

CREATE TABLE Entrega (
    Prazo DATE,
    Prioridade VARCHAR,
    CNPJ_Distribuidora CHAR,
    CPF_Cliente CHAR,
    PRIMARY KEY (Prazo, CPF_Cliente, CNPJ_Distribuidora)
);
 
ALTER TABLE Produto ADD CONSTRAINT FK_Produto_2
    FOREIGN KEY (Cod_categoria???)
    REFERENCES ??? (???);
 
ALTER TABLE Compra ADD CONSTRAINT FK_Compra_2
    FOREIGN KEY (Cod_barra_Produto???, CPF_Cliente???, Cod_cadastro_Funcionario???)
    REFERENCES ??? (???);
 
ALTER TABLE Fornece ADD CONSTRAINT FK_Fornece_2
    FOREIGN KEY (CNPJ_Fornecedor???, Cod_barra_Produto???)
    REFERENCES ??? (???);
 
ALTER TABLE Envia ADD CONSTRAINT FK_Envia_2
    FOREIGN KEY (Cod_cadastro_Funcionario???, CPF_Cliente???, Cod_barra_Produto???, Data_compra???, CNPJ_Distribuidora???)
    REFERENCES ??? (???);
 
ALTER TABLE Distribuidora ADD CONSTRAINT FK_Distribuidora_2
    FOREIGN KEY (CNPJ, ???)
    REFERENCES Tipos_Veiculos (Tipo_veiculo, ???);
 
ALTER TABLE Entrega ADD CONSTRAINT FK_Entrega_2
    FOREIGN KEY (CPF_Cliente???, CNPJ_Distribuidora???)
    REFERENCES ??? (???);
 
ALTER TABLE Entrega ADD CONSTRAINT FK_Entrega_3
    FOREIGN KEY (Prazo, ???)
    REFERENCES Envia (Data, ???);