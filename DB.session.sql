SELECT * FROM games;

TRUNCATE games;

ALTER TABLE games 
MODIFY COLUMN front_page_img VARCHAR(255) AFTER description_game;

ALTER TABLE games
ADD COLUMN clips_game VARCHAR(150),
ADD COLUMN platforms VARCHAR(100);