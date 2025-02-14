CREATE TABLE teams (
    id int NOT NULL,
    name varchar(255) NOT NULL,
    city varchar(255) NOT NULL,
    league varchar(255) NOT NULL,
    ranking int NOT NULL,
    logo varchar(255) NOT NULL
);

INSERT INTO teams (id, name, city, league, ranking, logo) VALUES
    (1, 'Real Madrid', 'Madrid', 'Laliga', 1, ''),
    (2, 'Barcelona', 'Barcelona', 'Laliga', 3, 'barcelona.png'),
    (3, 'Bayern Munich', 'Munich', 'Buntenliga', 5, '');
