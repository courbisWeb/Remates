CREATE DATABASE REMATE;

USE REMATE;

DROP TABLE IF EXISTS REMATE.REM_DET_REMATE;

CREATE TABLE REMATE.REM_DET_REMATE
(
ID_DETREMATE	INT 	AUTO_INCREMENT,
GLS_DETREMATE	VARCHAR(30),
DIR_DETREMATE	VARCHAR(50),
FEC_DETREMATE	VARCHAR(20),
DES_DETREMATE  	VARCHAR(8000),
FLG_CONTIENE	NUMERIC(1),
PRIMARY KEY (ID_DETREMATE)
);

ALTER TABLE REMATE.REM_DET_REMATE ADD RUTA_IMGDETREMATE	VARCHAR(300);

/*TABLA MAIL*/
DROP TABLE IF EXISTS REMATE.REM_MAIL_REMATE;

CREATE TABLE REMATE.REM_MAIL_REMATE
(
ID_MAILREMATE	INT 	AUTO_INCREMENT,
NOM_MAILREMATE	VARCHAR(30),
MSN_MAILREMATE	VARCHAR(50),
PRIMARY KEY (ID_MAILREMATE)
);

/*TABLA ARCHIVOS*/
DROP TABLE IF EXISTS REMATE.REM_MAIL_REMATE;

CREATE TABLE REMATE.REM_ARCHIVO_REMATE
(
ID_ARCHIVOREMATE	INT 	AUTO_INCREMENT,
ID_DETREMATE		INT,
NOM_ARCHIVOREMATE	VARCHAR(100),
DES_ARCHIVOREMATE	VARCHAR(200),
URL_ARCHIVOREMATE	VARCHAR(200),
TIP_ARCHIVOREMATE	VARCHAR(50),
SIZ_ARCHIVOREMATE	INT(50),
PRIMARY KEY (ID_ARCHIVOREMATE),
foreign key (ID_DETREMATE) REFERENCES REM_DET_REMATE(ID_DETREMATE)
ON DELETE CASCADE ON UPDATE CASCADE
);

