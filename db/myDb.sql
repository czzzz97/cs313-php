CREATE TABLE platform
(
platform_id	 	SERIAL 			PRIMARY KEY 	NOT NULL
,platform 		VARCHAR(32) 					NOT NULL
);

CREATE TABLE game
(
game_id 		SERIAL 			PRIMARY KEY	 	NOT NULL
,title 			VARCHAR(52) 					NOT NULL
,link 			VARCHAR(100) 					NOT NULL 	DEFAULT 'www.roguebasin.com'
,price  		DECIMAL 						NOT NULL 	DEFAULT 0.00
); 

CREATE TABLE game_platform (
game_id  		INT 							NOT NULL 		REFERENCES game(game_id)
,platform_id 	INT 							NOT NULL 		REFERENCES platform(platform_id)
);

CREATE TABLE game_news (
game_id  		INT 							NOT NULL 		REFERENCES game(game_id)
,news 			VARCHAR(500) 					NOT NULL
,news_date 		DATE			 				NOT NULL  		DEFAULT CURRENT_DATE
);

INSERT INTO platform(platform) VALUES ('Windows');
INSERT INTO platform(platform) VALUES ('Mac');
INSERT INTO platform(platform) VALUES ('Linux');
INSERT INTO platform(platform) VALUES ('Xbox 360');
INSERT INTO platform(platform) VALUES ('Playstation 3');
INSERT INTO platform(platform) VALUES ('iPhone');
INSERT INTO platform(platform) VALUES ('Android');


INSERT INTO game(
title
,link
,price
)
VALUES (
'DoomRL'
,'http://doom.chaosforge.org/'
,0.0
);
INSERT INTO game(
title
,link
,price
)
VALUES (
'DiabloRL'
,'http://diablo.chaosforge.org/'
,0.0
);
INSERT INTO game(
title
,link
,price
)
VALUES (
'AliensRL'
,'http://alien.chaosforge.org/'
,0.0
);
INSERT INTO game(
title
,link
,price
)
VALUES (
'The Binding of Isaac'
,'https://store.steampowered.com/app/113200/The_Binding_of_Isaac/'
,4.99
);
INSERT INTO game(
title
,link
,price
)
VALUES (
'Cogmind'
,'https://www.gridsagegames.com/cogmind/buy.html'
,19.99
);
INSERT INTO game(
title
,link
,price
)
VALUES (
'Omega'
,'http://www.alcyone.com/max/projects/omega/'
,0.00
);
INSERT INTO game(
title
,link
,price
)
VALUES (
'ADOM'
,'http://www.adom.de/'
,0.00
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
(SELECT game_id FROM game WHERE title = 'ADOM')
,(SELECT platform_id FROM platform WHERE platform = 'Windows')
);
INSERT INTO game_platform(
game_id
,platform_id
)
VALUES (
(SELECT game_id FROM game WHERE title = 'ADOM')
,(SELECT platform_id FROM platform WHERE platform = 'Mac')
);
INSERT INTO game_platform(
game_id
,platform_id
)
VALUES (
(SELECT game_id FROM game WHERE title = 'ADOM')
,(SELECT platform_id FROM platform WHERE platform = 'Linux')
);

INSERT INTO game_news(
game_id
,news
)
VALUES (
(SELECT game_id FROM game WHERE title = 'ADOM')
,'Classical and an inspiration for many games. Permadeath, random enemies, item identification. 
Also has a consistent map and quests.'
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