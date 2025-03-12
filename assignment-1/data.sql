USE if0_37236217_http5225;
DROP TABLE IF EXISTS animes;

CREATE TABLE
    animes (
        anime_id INT AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        thumbnail VARCHAR(255) NOT NULL,
        no_of_episodes INT NOT NULL,
        premiered_on DATE NOT NULL,
        PRIMARY KEY (anime_id),
        UNIQUE (name)
    );

INSERT INTO
    animes (name, thumbnail, no_of_episodes, premiered_on)
VALUES
    ('Naruto', 'https://m.media-amazon.com/images/M/MV5BZTNjOWI0ZTAtOGY1OS00ZGU0LWEyOWYtMjhkYjdlYmVjMDk2XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg', '220', '2002-10-03'),
    ('Naruto: Shippuden', 'https://m.media-amazon.com/images/M/MV5BNTk3MDA1ZjAtNTRhYS00YzNiLTgwOGEtYWRmYTQ3NjA0NTAwXkEyXkFqcGc@._V1_.jpg', 500, '2007-02-15'),
    ('Fullmetal Alchemist: Brotherhood', 'https://upload.wikimedia.org/wikipedia/en/7/7e/Fullmetal_Alchemist_Brotherhood_key_visual.png', 64, '2009-04-05'),
    ('Steins;Gate', 'https://m.media-amazon.com/images/M/MV5BZjI1YjZiMDUtZTI3MC00YTA5LWIzMmMtZmQ0NTZiYWM4NTYwXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg', 24, '2011-04-06'),
    ('Attack on Titan Season 1', 'https://resizing.flixster.com/-XZAfHZM39UwaGJIFWKAE8fS0ak=/v3/t/assets/p10873160_b_v8_aa.jpg', 25, '2013-04-07');
