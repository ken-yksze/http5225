USE if0_37236217_http5225;
DROP TABLE IF EXISTS characters;
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

CREATE TABLE
    characters (
        character_id INT AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        thumbnail VARCHAR(255) NOT NULL,
        anime_id INT NOT NULL,
        PRIMARY KEY (character_id),
        FOREIGN KEY (anime_id) REFERENCES animes (anime_id) ON DELETE CASCADE,
        UNIQUE (anime_id, name)
    );

INSERT INTO
    animes (name, thumbnail, no_of_episodes, premiered_on)
VALUES
    ('Naruto', 'https://m.media-amazon.com/images/M/MV5BZTNjOWI0ZTAtOGY1OS00ZGU0LWEyOWYtMjhkYjdlYmVjMDk2XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg', '220', '2002-10-03'),
    ('Naruto: Shippuden', 'https://m.media-amazon.com/images/M/MV5BNTk3MDA1ZjAtNTRhYS00YzNiLTgwOGEtYWRmYTQ3NjA0NTAwXkEyXkFqcGc@._V1_.jpg', 500, '2007-02-15'),
    ('Fullmetal Alchemist: Brotherhood', 'https://upload.wikimedia.org/wikipedia/en/7/7e/Fullmetal_Alchemist_Brotherhood_key_visual.png', 64, '2009-04-05'),
    ('Steins;Gate', 'https://m.media-amazon.com/images/M/MV5BZjI1YjZiMDUtZTI3MC00YTA5LWIzMmMtZmQ0NTZiYWM4NTYwXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg', 24, '2011-04-06'),
    ('Attack on Titan Season 1', 'https://resizing.flixster.com/-XZAfHZM39UwaGJIFWKAE8fS0ak=/v3/t/assets/p10873160_b_v8_aa.jpg', 25, '2013-04-07');

INSERT INTO
    characters (name, thumbnail, anime_id)
VALUES
    ('Naruto Uzumaki', 'https://static.wikia.nocookie.net/naruto/images/d/d6/Naruto_Part_I.png', 1),
    ('Sasuke Uchiha', 'https://static.wikia.nocookie.net/naruto/images/2/21/Sasuke_Part_1.png', 1),
    ('Sakura Haruno', 'https://static.wikia.nocookie.net/naruto/images/6/64/Sakura_Part_1.png', 1),
    ('Naruto Uzumaki', 'https://www.thepopverse.com/_next/image?url=https%3A%2F%2Fmedia.thepopverse.com%2Fmedia%2Fnaruto-in-sage-mode-uw2bwsqkeveencjzcvjcdikwqe.jpg&w=1280&q=75', 2),
    ('Sasuke Uchiha', 'https://static.wikia.nocookie.net/characterprofile/images/2/25/Sasuke_Uchiha.png', 2),
    ('Sakura Haruno', 'https://static.wikia.nocookie.net/naruto-ultimate-ninja-storm/images/f/f4/Sakura.png', 2),
    ('Edward Elric', 'https://static.wikia.nocookie.net/fma/images/b/bc/Edward_Elric.jpg', 3),
    ('Alphonse Elric', 'https://static.wikia.nocookie.net/fullmetal-alchemist-database/images/f/f6/AlphonseElricEp7.png', 3),
    ('Rintaro Okabe', 'https://static.wikia.nocookie.net/steins-gate/images/6/6c/Rintaro_Okabe_SG_anime_portrait.png', 4),
    ('Kurisu Makise', 'https://static.wikia.nocookie.net/steins-gate/images/f/f6/Kurisu_Makise.png', 4),
    ('Mayuri Shiina', 'https://static.wikia.nocookie.net/steins-gate/images/d/df/Mayuri_Shiina_SG_anime_portrait.png', 4),
    ('Eren Jaeger', 'https://www.sideshow.com/wp/wp-content/uploads/2022/02/eren-yeager-season-1.jpeg', 5),
    ('Mikasa Ackerman', 'https://cdn.staticneo.com/w/attackontitan/MikasaAckerman.jpg', 5);
