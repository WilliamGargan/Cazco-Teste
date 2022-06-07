CREATE DATABASE dbProjetoCazco;

USE dbProjetoCazco;

CREATE TABLE tblusers(
	us_id			int IDENTITY(1,1) PRIMARY KEY,
	us_name			varchar(100)	not null,
	us_email		varchar(100)	not null,
	us_password		varchar(100)	null,
);

CREATE TABLE tbladmin(
	adm_id			int IDENTITY(1,1) PRIMARY KEY,
	adm_name		varchar(100)	not null,
	adm_email		varchar(100)	not null,
	adm_password	varchar(100)	null,
);

CREATE TABLE tblreports(
	rp_id			int IDENTITY(1,1) PRIMARY KEY,
	rp_day			datetime		not null,
	rp_userid		varchar(100)	not null,
	rp_description	varchar(100)	null,
);