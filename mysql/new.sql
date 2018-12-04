create table lawyer_basic (
	fname char(20) not null,
	lname char(20) not null,
	age int unsigned not null,
	address text,
	tel char(20) not null,
	email char(40) not null,
	sex char(2) not null,
	dob char(10) not null,
	p_area char(40) not null,
	nba_id char(40) not null,
	username char(20) not null,
	password char(30) not null,
	primary key (username)
);


