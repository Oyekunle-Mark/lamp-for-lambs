create database lawspace;
use lawspace;

create table user (
	fname char(20) not null,
	lname char(20) not null,
	age int unsigned not null,
	address text,
	tel char(20) not null,
	email char(40) not null,
	sex char(2) not null,
	dob char(10) not null,
	username char(20) not null,
	password char(30) not null,
	primary key (username)
);

create table lawyer (
	username char(20) not null references user(username),
	location char(20) not null,
	practice_area char(40) not null,
	nba_id char(40) not null,
	date_to_bar char(10) not null,
	price_range char(20) not null,
	profile longtext not null,
	primary key (username)
);

create table case (
	case_number int unsigned not null auto_increment primary key,
	username char(20) not null references user(username),
	description longtext not null,
	responses longtest not null
);

create table news_letter (
	sn int not null auto_increment primary key,
	email char(40)
);

set global validate_password_policy=LOW;

grant select, insert, update, delete
on lawspace.*
to base_user identified by 'password7';

