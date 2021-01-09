CREATE TABLE posts (
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	title TEXT NOT NULL,
	cal TEXT NOT NULL,
	content TEXT NOT NULL,
	accounts_username TEXT NOT NULL
);


INSERT INTO posts (title, cal, content, accounts_username) VALUES ('title', 'cal', 'content','alston');
INSERT INTO posts (title, cal, content, accounts_username) VALUES ('title2', 'cal2', 'content2','alston');
INSERT INTO posts (title, cal, content, accounts_username) VALUES ('title3', 'cal3', 'content3','alston');

CREATE TABLE accounts (
	id	      INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	username	TEXT NOT NULL UNIQUE,
	password	TEXT NOT NULL,
	session	  TEXT UNIQUE
);

INSERT INTO accounts (username, password) VALUES ('alston', '$2y$10$KVZPJuhBcRBqUxUD5IAg3.9TXVL67iKW.c.TZv6h6.ltCV/2y2s0u');
