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

DROP TABLE IF EXISTS REMATE.REM_MAIL_REMATE;

CREATE TABLE REMATE.REM_MAIL_REMATE
(
ID_MAILREMATE	INT 	AUTO_INCREMENT,
NOM_MAILREMATE	VARCHAR(30),
MSN_MAILREMATE	VARCHAR(50),
PRIMARY KEY (ID_MAILREMATE)
);


