DROP TABLE IF EXISTS ss03.users;
DROP TABLE IF EXISTS ss03.user;
CREATE TABLE ss03.user (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  username varchar(32) NOT NULL,
  auth_key varchar(32) NOT NULL,
  password_hash varchar(32) NOT NULL,
  password_reset_token varchar(32) NOT NULL,
  email varchar(64) NOT NULL,
  role int(11) NOT NULL DEFAULT 0,
  status int(11) NOT NULL DEFAULT 0,
  locked boolean DEFAULT 0,
  banned boolean DEFAULT 0,
  created TIMESTAMP,
  updated TIMESTAMP
) ENGINE=Aria DEFAULT CHARSET=utf8;

insert into ss03.user (username,password,email,status) values
('admin','admin','test@test.com',30),
('owner','12345','test@test.com',20),
('user','1234','test@test.com',10);


#  role enum ('admin','moder','owner','worker','hoster','user') NOT NULL DEFAULT 'user',
