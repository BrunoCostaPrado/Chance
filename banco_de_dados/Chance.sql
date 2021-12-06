create database if not exists chance;
use chance;
CREATE TABLE if not exists CadastoAutonomo (
Nome VARCHAR(80),
Estado VARCHAR(30),
Telefone INTEGER,
Genero VARCHAR(20),
Empresa VARCHAR(80),
Email VARCHAR(100),
CPF INTEGER,
Cidade VARCHAR(50),
Profissão VARCHAR(50),
CNPJ INTEGER,
CEP INTEGER,
DataNasc INTEGER,
Estado_Civil VARCHAR(20),
PRIMARY KEY(CPF)
);

CREATE TABLE if not exists CadastroCliente (
Endereço VARCHAR(50),
Genero VARCHAR(20),
Email VARCHAR(40),
Nome VARCHAR(100),
Telefone INTEGER,
CPF INTEGER PRIMARY KEY,
Estado VARCHAR(40),
Cidade VARCHAR(50),
CEP INTEGER,
Estado_Civil VARCHAR(40),
DataNasc INTEGER
);

CREATE TABLE if not exists Pagamento (
PIX VARCHAR(100),
Boleto INTEGER,
Credito INTEGER,
Debito INTEGER,
IDPagamento integer PRIMARY KEY auto_increment,
Transferencia INTEGER
);

CREATE TABLE if not exists Funcionario (
CPF INTEGER PRIMARY KEY,
Email VARCHAR(100),
Endereço VARCHAR(100),
RG VARCHAR(10),
Titulo_Eleitor INTEGER,
CTPS INTEGER,
Foto VARCHAR(10),
Certidão_Criança VARCHAR(100),
Reservista INTEGER,
PIS INTEGER,
Nome VARCHAR(100),
Vacinação_Criança VARCHAR(30),
Telefone INTEGER,
Historico_Escolar VARCHAR(30),
Antecedente_Criminais VARCHAR(10)
);

CREATE TABLE if not exists Serviço (
Tipo VARCHAR(80),
Data INTEGER,
Quantidade INTEGER,
IdServiço INTEGER PRIMARY KEY
);


CREATE TABLE if not exists Solicitar (
    IdServiço INTEGER,
    CPF INTEGER,
    FOREIGN KEY (IdServiço)
        REFERENCES Serviço (IdServiço),
    FOREIGN KEY (CPF)
        REFERENCES CadastroCliente (CPF)
);




CREATE TABLE if not exists Prove (
    CPF INTEGER,
    IdServiço INTEGER,
    FOREIGN KEY (CPF)
        REFERENCES Funcionario (CPF),
    FOREIGN KEY (IdServiço)
        REFERENCES Serviço (IdServiço)
);

CREATE TABLE if not exists Pagar (
    IDPagamento INTEGER,
    FOREIGN KEY (IDPagamento)
        REFERENCES Pagamento (IDPagamento),
    CPF INTEGER,
    FOREIGN KEY (CPF)
        REFERENCES CadastoAutonomo (CPF)
);


CREATE TABLE if not exists Prover (
    IdServiço INTEGER,
    CPF INTEGER,
    FOREIGN KEY (IdServiço)
        REFERENCES Serviço (IdServiço),
    FOREIGN KEY (CPF)
        REFERENCES CadastoAutonomo (CPF)
);