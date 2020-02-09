CREATE TABLE author
(
author_id	 	SERIAL	 		PRIMARY KEY 	NOT NULL
,name 			VARCHAR(52) 					NOT NULL
,website 		VARCHAR(100)  					NULL
,email 			VARCHAR(52) 					NULL
);

CREATE TABLE platform
(
platform_id	 	SERIAL 			PRIMARY KEY 	NOT NULL
,platform 		VARCHAR(32) 					NOT NULL
);

CREATE TABLE tags
(
tags_id  		SERIAL 			PRIMARY KEY 	NOT NULL
,tags 			VARCHAR(32) 					NOT NULL
,description 	VARCHAR(200) 					NULL
);

CREATE TABLE game
(
game_id 		SERIAL 			PRIMARY KEY	 	NOT NULL
,title 			VARCHAR(52) 					NOT NULL
,link 			VARCHAR(100) 					NOT NULL
,price 			MONEY 							NOT NULL
,release_date 	DATE 							NOT NULL
,last_update 	DATE 							NULL
,author_id 		INT  							NOT NULL  		REFERENCES author(author_id)			
); 

CREATE TABLE game_platform (
game_id  		INT 							NOT NULL 		REFERENCES game(game_id)
,platform_id 	INT 							NOT NULL 		REFERENCES platform(platform_id)
);

CREATE TABLE game_tags (
game_id  		INT 							NOT NULL 		REFERENCES game(game_id)
,tags_id 		INT 							NOT NULL 		REFERENCES tags(tags_id)
);

INSERT INTO platform(platform) VALUES ('Windows');
INSERT INTO platform(platform) VALUES ('Mac');
INSERT INTO platform(platform) VALUES ('Linux');
INSERT INTO platform(platform) VALUES ('Xbox 360');
INSERT INTO platform(platform) VALUES ('Playstation 3');
INSERT INTO platform(platform) VALUES ('iPhone');
INSERT INTO platform(platform) VALUES ('Android');

INSERT INTO author(
name
,website
,email
)
VALUES (
'Thomas Biskup'
,'https://www.reloaded.org/Thomas-Biskup/Game-Maker24'
,'thomasbiskup@aol.com'
);
INSERT INTO author(
name,
website,
email
)
VALUES (
'Grid Sage Games'
,'https://www.gridsagegames.com/'
,'gridsagegames@gmail.com'
);
INSERT INTO author(name) VALUES ('Laurence Brothers');
INSERT INTO author(
name
,website
,email
)
VALUES (
'Edmund McMillen'
,'https://en.wikipedia.org/wiki/Edmund_McMillen'
,'edmundmcmillen@gmail.com'
);
INSERT INTO author(name) VALUES ('Kornel Kisielewicz');

INSERT INTO tags(
tags
,description
)
VALUES (
'Traditional'
,'Based off of the original Rogue. Nearly guaranteed to have permadeath, inventory management, 
procedural generation, turn-based strategy, and ASCII graphics.'
);
INSERT INTO tags(
tags
,description
)
VALUES (
'Action'
,'Not turn-based or only semi turn-based. Stay active to survive!'
);
INSERT INTO tags(
tags
,description
)
VALUES (
'Graphical'
,'Has actual sprites, etc. Not ASCII or at the very least has a graphical tileset.'
);

INSERT INTO game(
title
,link
,price
,release_date
,last_update
,author_id
)
VALUES (
'DoomRL'
,'http://doom.chaosforge.org/'
,0.00
,'2003-09-20'
,'2013-03-13'
,(SELECT author_id FROM author WHERE name = 'Kornel Kisielewicz')
);
INSERT INTO game(
title
,link
,price
,release_date
,last_update
,author_id
)
VALUES (
'DiabloRL'
,'http://diablo.chaosforge.org/'
,0.00
,'2005-08-20'
,'2013-03-20'
,(SELECT author_id FROM author WHERE name = 'Kornel Kisielewicz')
);
INSERT INTO game(
title
,link
,price
,release_date
,last_update
,author_id
)
VALUES (
'AliensRL'
,'http://alien.chaosforge.org/'
,0.00
,'2007-03-18'
,'2012-09-08'
,(SELECT author_id FROM author WHERE name = 'Kornel Kisielewicz')
);
INSERT INTO game(
title
,link
,price
,release_date
,last_update
,author_id
)
VALUES (
'The Binding of Isaac'
,'https://store.steampowered.com/app/113200/The_Binding_of_Isaac/'
,4.99
,'2011-09-28'
,'2017-02-20'
,(SELECT author_id FROM author WHERE name = 'Edmund McMillen')
);
INSERT INTO game(
title
,link
,price
,release_date
,last_update
,author_id
)
VALUES (
'Cogmind'
,'https://www.gridsagegames.com/cogmind/buy.html'
,19.99
,'2015-05-17'
,'2020-01-07'
,(SELECT author_id FROM author WHERE name = 'Grid Sage Games')
);
INSERT INTO game(
title
,link
,price
,release_date
,last_update
,author_id
)
VALUES (
'Omega'
,'http://www.alcyone.com/max/projects/omega/'
,0.00
,'1987-03-03'
,'2010-02-10'
,(SELECT author_id FROM author WHERE name = 'Laurence Brothers')
);
INSERT INTO game(
title
,link
,price
,release_date
,last_update
,author_id
)
VALUES (
'(ADOM) Ancient Domains Of Mystery'
,'http://www.adom.de/'
,0.00
,'1994-04-04'
,'2019-01-30'
,(SELECT author_id FROM author WHERE name = 'Thomas Biskup')
);

INSERT INTO game_platform(
game_id
,platform_id
)
VALUES (
(SELECT game_id FROM game WHERE title = 'Cogmind')
,(SELECT platform_id FROM platform WHERE platform = 'Windows')
);
INSERT INTO game_platform(
game_id
,platform_id
)
VALUES (
(SELECT game_id FROM game WHERE title = 'Cogmind')
,(SELECT platform_id FROM platform WHERE platform = 'Mac')
);
INSERT INTO game_platform(
game_id
,platform_id
)
VALUES (
(SELECT game_id FROM game WHERE title = '(ADOM) Ancient Domains Of Mystery')
,(SELECT platform_id FROM platform WHERE platform = 'Windows')
);
INSERT INTO game_platform(
game_id
,platform_id
)
VALUES (
(SELECT game_id FROM game WHERE title = '(ADOM) Ancient Domains Of Mystery')
,(SELECT platform_id FROM platform WHERE platform = 'Mac')
);
INSERT INTO game_platform(
game_id
,platform_id
)
VALUES (
(SELECT game_id FROM game WHERE title = '(ADOM) Ancient Domains Of Mystery')
,(SELECT platform_id FROM platform WHERE platform = 'Linux')
);

INSERT INTO game_tags(
game_id
,tags_id
)
VALUES (
(SELECT game_id FROM game WHERE title = 'Cogmind')
,(SELECT tags_id FROM tags WHERE tags = 'Graphical')
);
INSERT INTO game_tags(
game_id
,tags_id
)
VALUES (
(SELECT game_id FROM game WHERE title = 'Omega')
,(SELECT tags_id FROM tags WHERE tags = 'Traditional')
);
INSERT INTO game_tags(
game_id
,tags_id
)
VALUES (
(SELECT game_id FROM game WHERE title = '(ADOM) Ancient Domains Of Mystery')
,(SELECT tags_id FROM tags WHERE tags = 'Traditional')
);
INSERT INTO game_tags(
game_id
,tags_id
)
VALUES (
(SELECT game_id FROM game WHERE title = '(ADOM) Ancient Domains Of Mystery')
,(SELECT tags_id FROM tags WHERE tags = 'Graphical')
);
INSERT INTO game_tags(
game_id
,tags_id
)
VALUES (
(SELECT game_id FROM game WHERE title = 'The Binding of Isaac')
,(SELECT tags_id FROM tags WHERE tags = 'Graphical')
);
INSERT INTO game_tags(
game_id
,tags_id
)
VALUES (
(SELECT game_id FROM game WHERE title = 'The Binding of Isaac')
,(SELECT tags_id FROM tags WHERE tags = 'Action')
);


/*****************************************
---------Templates/To-dos----------------
//single line insert
INSERT INTO t(c) VALUES ('v');

//multiline insert template
INSERT INTO t(
c
)
VALUES (
'v'
);

//single line update
update t set c = 'v' where (x);

select game_tags.game_id , game.title from game_tags inner join game on game_tags.game_id=game.game_id;

--ABBREVIATION COLUMN IN GAME? ALIVE, DEVELOPING IN AUTHOR?

//generate a drop all tables. then copy and paste.
select 'drop table if exists "' || tablename || '" cascade;' 
  from pg_tables
 where schemaname = 'public';