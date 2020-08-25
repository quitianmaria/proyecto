CREATE DATABASE Editorial;
USE Editorial;

drop table if exists Usuario;
Create table Usuario (
    Id_Usuario INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (Id_Usuario),
    Cargo Varchar (50),
    Nombre VARCHAR(50),
    Contrasena Varchar(50),
    Correo Varchar (100)
);

Drop Table If exists Revistas;
Create Table Revistas (
    Id_Revistas INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (Id_Revistas),
    Titulo Varchar(30),
    Registro INT,
    Tipo Varchar(30),
    Fecha Date,
    Cantidad INT
);


 
Drop Table If Exists Sucursal;

Create Table Sucursal (
    Id_Sucursal INT NOT NULL AUTO_INCREMENT,
    Primary Key (Id_Sucursal),
    Domicilio VARCHAR(300),
    Telefono Bigint,
    Descripcion Varchar(300),
    Codigo INT
    );

Drop Table If Exists Registro;

Create Table Registro (
    Id_Empleado INT NOT NULL AUTO_INCREMENT,
    Primary Key (Id_Empleado),
    Num_Id Bigint,
    Cargo Varchar(50),
    Nombre Varchar(100),
    Apellido Varchar(50),
    Correo Varchar(50),
    Telefono Bigint

);