CREATE DATABASE IF NOT EXISTS salonevimini;

USE salonevimini;

CREATE TABLE users(
                      iduser              int(255) auto_increment not null,
                      email              varchar(50) not null,
                      password         varchar(255) not null,
                      rol                 varchar(50),
                      created_at           datetime DEFAULT NULL,
                      updated_at          datetime DEFAULT NULL,
                      remember_token      varchar(255),
                      constraint pk_users PRIMARY KEY (IdUser)
)ENGINE=InnoDb;

CREATE TABLE empleados(
                          idempleado      int(255) auto_increment NOT NULL,
                          nombreempleado  varchar(100) NOT NULL,
                          especialidad    varchar(20) not null,
                          image           varchar(255),
                          created_at       datetime DEFAULT NULL,
                          updated_at       datetime DEFAULT NULL,
                          CONSTRAINT idempleado PRIMARY KEY(idempleado)
)ENGINE=InnoDb;

CREATE TABLE servicios (
                          idservicio        int(255) auto_increment NOT NULL,
                          nombreservicio    varchar(100) NOT NULL,
                          duracion           varchar(30) NOT NULL,
                          costo             decimal (30) not null,
                          descripcion   varchar(255),
                          image           varchar(255),
                          created_at       datetime DEFAULT NULL,
                          updated_at       datetime DEFAULT NULL,
                          CONSTRAINT idservicio PRIMARY KEY(idservicio)
)ENGINE=InnoDb;

CREATE TABLE citas(
                      idcita          int(255) auto_increment NOT NULL,
                      iduser          int(255) NOT NULL,
                      idempleado      int(255) NOT NULL,
                      idservicio        int(255) NOT NULL,
                      emailuser         varchar(50),
                      fecha_cita      datetime,
                      created_at       datetime DEFAULT NULL,
                      updated_at       datetime DEFAULT NULL,
                      CONSTRAINT pk_idcita PRIMARY KEY(idcita),
                      CONSTRAINT fk_iduser FOREIGN KEY (iduser) REFERENCES users(iduser),
                      CONSTRAINT fk_idempleado FOREIGN KEY (idempleado) REFERENCES empleados(idempleado),
                      CONSTRAINT fk_idservicio FOREIGN KEY (idservicio) REFERENCES servicios(idservicio)
)ENGINE=InnoDb;
