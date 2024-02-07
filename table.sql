create table reservation
(
    id integer primary key auto_increment,
    Catégorie varchar(64),
    Type varchar(64),
    Options varchar(256),
    Prix varchar(64)
);

insert into reservation(Catégorie, Type, Options, Prix) values('Chambre', 'Double', 'Baignoire, Mini Bar, Télévision', '375€');