CREATE TABLE posts (
	id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	title TEXT NOT NULL,
	cal TEXT NOT NULL,
	content TEXT NOT NULL
);


INSERT INTO posts (title, cal, content) VALUES ('title', 'cal', 'content');
INSERT INTO posts (title, cal, content) VALUES ('title2', 'cal2', 'content2');
INSERT INTO posts (title, cal, content) VALUES ('title3', 'cal3', 'content3');

