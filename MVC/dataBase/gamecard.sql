-- se crea la base de datos
DROP DATABASE IF EXISTS gameCard;

CREATE DATABASE gameCard;

use gameCard;

-- creacion tabla cards
DROP TABLE IF EXISTS cards;

CREATE TABLE cards(
    id varchar(2) PRIMARY KEY,
    name varchar(255) not null,
    strength int(2) unsigned default 10,
    speed int(2) unsigned default 10,
    defense int(2) unsigned default 10,
    bra in int(2) unsigned default 10,
    maxPower int(2) unsigned not null
);

-- creacion de la tabla deckCards

DROP TABLE IF EXISTS deckCards;

CREATE TABLE deckCards(
    id int unsigned AUTO_INCREMENT PRIMARY KEY,
    deck varchar(255)
);

-- creacion de la tabla players

DROP TABLE IF EXISTS players;

CREATE TABLE players(
    id int unsigned AUTO_INCREMENT PRIMARY KEY,
    name varchar(2),
    deck_id int unsigned,
    CONSTRAINT fk_players_decks FOREIGN KEY(deck_id) REFERENCES deckCards(id) ON UPDATE cascade ON DELETE cascade   
);