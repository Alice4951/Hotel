create table article
(
    id integer primary key auto_increment,
    Catégorie varchar(64),
    Type varchar(64),
    Baignoire varchar(64),
    Balcon varchar(64),
    MiniBar varchar(64),
    Télévision varchar(64),
    Vue varchar(64),
    Prix varchar(64)
);

insert into article(Catégorie, Type, Baignoire, Balcon, MiniBar, Télévision, Vue, Prix) values('Chambre', 'Double', 'Baignoire', ' ', 'MiniBar', 'Télévision', ' ', '850€');

create table category
  (
      id integer primary key auto_increment,
      Nom varchar(64)
  );

insert into category (Nom) values ('Chambre');
