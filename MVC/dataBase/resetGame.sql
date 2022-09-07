-- se resetean las tablas jugadores y mazos para iniciar un juego nuevo
DELETE FROM deckcards;
DELETE FROM players;

-- reiniciar el id auto incremental
alter table deckcards AUTO_INCREMENT=1;
alter table players AUTO_INCREMENT=1;
