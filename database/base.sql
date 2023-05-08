create table utilisateurs(
idutilisateur serial primary key,
mdp varchar(30),
mail varchar(30)
);

insert into utilisateurs(mdp,mail) values ('user','user');


create table admin(
mdp varchar(30),
mail varchar(30)
);


insert into admin(mdp,mail) values ('mianta','mianta');
insert into admin(mdp,mail) values ('admin','admin');

create table articles(
idarticle serial primary key,
titre text,
contenu text,
resumer text,
auteur varchar(20),
img text,
datepublication timestamp default current_timestamp
);



INSERT INTO articles (titre, contenu, resumer, auteur, img)
VALUES
   ('Les fondements de l intelligence artificielle', 'un aperçu des modèles et des algorithmes', 'Cet article explore les bases de l apprentissage machine, y compris la différence entre l apprentissage supervisé et non supervisé, ainsi que les techniques courantes utilisées en apprentissage machine.', 'Jane Marie', 'http://example.com/images/1.jpg'),
   ('La revolution de l apprentissage profond ', 'comment les réseaux de neurones changent la donne', 'Cet article explique le fonctionnement des réseaux de neurones et explore leurs applications dans divers domaines.', 'Laura clarison', 'http://example.com/images/2.jpg'),
   ('Les enjeux éthiques et sociaux de l intelligence artificielle', 'quelles preoccupations supposons-nous avoir ', 'Cet article explore les avantages et les limites de l apprentissage non supervisé et examine comment il peut être utilisé dans la pratique.', 'David son', 'http://example.com/images/3.jpg'),
   ('L avenir de l intelligence artificielle', 'les développements futurs et les implications pour notre monde', 'Cet article examine comment l apprentissage machine peut affecter l emploi dans différents secteurs, ainsi que les mesures que les entreprises et les gouvernements peuvent prendre pour atténuer cet impact.', 'Jacky Chan', 'http://example.com/images/4.jpg');
