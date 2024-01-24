create table reservation
(
    id integer primary key auto_increment,
    Catégorie varchar(64),
    Chambre varchar(64),
    Options varchar(256),
    Prix varchar(64)
);

insert into reservation(Catégorie, Chambre, Options, Prix) values('Chambre', 'Double', 'Baignoire, Mini Bar, Télévision', '375€');