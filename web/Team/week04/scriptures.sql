CREATE TABLE scriptures
(   scripture_id        SERIAL          PRIMARY KEY
,   book                VARCHAR(20)     NOT NULL
,   chapter             NUMBER          NOT NULL
,   verse               NUMBER                 
,   content             TEXT            NOT NULL
);



INSERT INTO scriptures
( book
, chapter
, verse
, content
)
VALUES
( 'Doctrine & Covenants'
, 88
, 49
, 'The light shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall come when you shall comprehend even God, being quickened in him and by him.'
);


INSERT INTO scriptures
( book
, chapter
, verse
, content)
VALUES 
( 'John'
, 1
, 5
, 'And the light shineth inbdarkness; and the darkness comprehended it not.'    
);


INSERT INTO scriptures
( book
, chapter
, verse
, content)
VALUES 
( 'Doctrine & Covenants'
, 93
, 28
, 'He that keepeth his commandments receiveth truth and clight, until he is glorified in truth and dknoweth all things.'
);


INSERT INTO scriptures
( book
, chapter
, verse
, content)
VALUES
( 'Mosiah'
, 16
, 9
, 'He is the alight and the life of the world; yea, a light that is endless, that can never be darkened; yea, and also a life which is endless, that there can be no more death.'
);