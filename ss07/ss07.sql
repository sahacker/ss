
drop table if exists ss07.users;
create table ss07.users (
    uid int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    enabled tinyint DEFAULT 0,
    status tinyint DEFAULT 0,
    name varchar(64) NOT NULL,
    disp varchar(64),
    mail varchar(48) NOT NULL UNIQUE,
    passwd varchar(32) NOT NULL,
    created timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) engine=Aria;

drop table if exists ss07.groups;
create table ss07.groups (
    gid int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name varchar(64) NOT NULL UNIQUE
) engine=Aria;

drop table if exists ss07.rules;
create table ss07.rules (
    rid int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    gid int(11) NOT NULL,
    name varchar(64) NOT NULL
) engine=Aria;

