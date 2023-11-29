create table article
(
    id integer primary key auto_increment,
    Chambre varchar(64),
    Séjour varchar(256),
    Prix varchar(64)
);
insert into article(Chambre,Séjour,Prix) values('Chambre seule', '1 semaine', '1550€');