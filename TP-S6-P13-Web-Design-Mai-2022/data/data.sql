
create table actu(
    id int not null auto_increment,
    idTheme int not null,
    idPhoto int not null,
    titre varchar(255),
    descript text,
    contenus text,
    daty date,
    url varchar(225),
    primary key(id),
    foreign key(idTheme) references theme(id),
    foreign key(idPhoto) references photo(id)
    
);

create table theme(
    id int not null auto_increment,
    nom varchar(50),
    primary key(id)
);

create table photo(
    id int not null primary key auto_increment,
    nom varchar(50)
);

create table admin(
    id int not null primary key auto_increment,
    nom varchar(5),
    mdp varchar(3)
);

create view actu_details as (
    select a.id, a.titre, a.descript, a.contenus, a.daty, a.url,
    t.nom as nom_theme, p.nom as nom_photo
     from actu a, theme t, photo p
    where a.idPhoto = p.id and a.idTheme = t.id order by id);

insert into admin(nom,mdp) values("admin","123");

insert into theme(nom) values("Energie");
insert into theme(nom) values("Eau");
insert into theme(nom) values("Déchets");
insert into theme(nom) values("Transport");
insert into theme(nom) values("Biodiversité");

insert into photo(nom) values("geo.jpg");
insert into photo(nom) values("eau.jpg");
insert into photo(nom) values("vrac.jpg");
insert into photo(nom) values("trac.jpg");
insert into photo(nom) values("moulin.jpg");
insert into photo(nom) values("geo.jpg");
insert into photo(nom) values("polu.jpg");
insert into photo(nom) values("solaire.jpg");


insert into actu(idTheme,idPhoto,titre,descript,contenus,daty,url)
values(1,1,"Géothermie profonde : un rapport établit le lien entre la sismicité et le projet Geoven",
"Les opérations réalisées dans le cadre du projet de cogénération géothermique, près de Vendenheim,
 à l'arrêt depuis fin 2020, sont bien la cause des séismes ressentis près de Strasbourg en 2019, 2020
et 2021, selon le rapport d'un comité d'experts.","Le 5 mai dernier, un comité d'experts, mis en place
par la préfecture départementale du Bas-Rhin et la direction générale de la Prévention des risques
 (DGPR), a rendu son rapport sur les liens entre l'exploitation expérimentale du site géothermique Geoven,
  à Vendenheim, et l'activité sismique des environs. Son verdict : les événements sismiques d'octobre et
 novembre 2020, et très probablement ceux de 2019 et de 2021, ont bien pour origine des opérations 
menées sur le site. Une activité...","2022-05-09","energie/géothermie-profonde-un-rapport-établit-le-lien-entre-la-sismicité-et-le-projet-geoven-1.php");

insert into actu(idTheme,idPhoto,titre,descript,contenus,daty,url)
values(2,2,"Utilisation des eaux non conventionnelles : quels risques pour la santé ?",
"Le Haut Conseil de la santé publique revient, dans un avis, sur les conséquences de l'augmentation 
de l'utilisation des eaux non conventionnelles. Et préconise des pistes pour maîtriser les risques.",
"Quels sont les risques pour la santé d'une utilisation plus importante d'eaux non conventionnelles,
 comme les eaux de pluie, les eaux grises ou les eaux usées traitées, à la place de l'eau potable ? 
 C'est en substance la question que la direction générale de la Santé du ministère de la Santé a posée
 au Haut Conseil de la santé publique (HCSP).
La tension sur la ressource incite en effet le ministère de la Transition écologique à réfléchir 
à d'autres options. Les Assises de l'eau ont ainsi fixé un objectif de triplement du volume d'eaux
 non conventionnelles utilisées à la place de l'eau potable d'ici à 2025. Le ministère de la Santé reste,
  quant à lui, prudent et rappelle que l'utilisation généralisée de l'eau potable a permis « la diminution,
   voire la quasi-disparition, en France, d'épidémies infectieuses liées à une mauvaise qualité de l'eau,
   telle que les épidémies de fièvre typhoïde ou de gastroentérite aiguë ».","2022-04-11",
   "eau/utilisation-des-eaux-non-conventionnelles-quels-risques-pour-la-santé--2.php");

insert into actu(idTheme,idPhoto,titre,descript,contenus,daty,url)
values(3,3,"Vente en vrac : le Réseau vrac se penche sur les bénéfices indirects",
"Le Réseau vrac publie une étude sur les cobénéfices de la vente en vrac. Au-delà de la réduction des
 déchets, ce mode de distribution profite aussi aux produits bio et locaux. Par ailleurs, l'étude
  confirme le dynamisme du secteur.","Ce jeudi 12 mai, le Réseau Vrac a présenté une étude sur la dynamique
   du secteur et ses bénéfices indirects. Au-delà de la réduction des emballages et du gaspillage, le vrac
    peut aussi créer de la valeur à l'échelle locale et avoir des impacts vertueux sur les pratiques des
     distributeurs et des fournisseurs, explique le réseau professionnel, qui a réalisé une enquête auprès
      de ses adhérents pour évaluer ces bénéfices.","2022-04-20","
      déchets/vente-en-vrac-le-réseau-vrac-se-penche-sur-les-bénéfices-indirects-3.php");

insert into actu(idTheme,idPhoto,titre,descript,contenus,daty,url)
values(4,4,"Hydrogène : le fret routier sur la bonne voie",
"Constructeurs, transporteurs, chargeurs et producteurs s'associent pour s'approprier, perfectionner,
 puis massifier les solutions hydrogène. Un vecteur énergétique particulièrement adapté aux mobilités
  lourdes.","Bonnes capacités d'autonomie et temps de recharge très courts : ces atouts de l'hydrogène
   vert pourraient permettre au fret routier de s'engager sans trop de difficultés dans la voie de la
    décarbonation. C'est en tout cas le pari de grands groupes, comme le gazier Air Liquide ou le
     constructeur VDL, mais également de nouveaux venus, comme le producteur d'hydrogène Lhyfe ou
      la start-up Nikola, lancés dès 2020 dans la mise au point de camions et d'infrastructures
       adaptés à ce vecteur énergétique....","2022-05-15","transport/hydrogène-le-fret-routier-sur-la-bonne-voie-4.php");

insert into actu(idTheme,idPhoto,titre,descript,contenus,daty,url)
values(5,5,"Moulins : le Conseil constitutionnel valide des exemptions à la continuité écologique des cours d'eau",
"Les Sages de la rue de Montpensier ont décidé de ne pas remettre en cause certaines exemptions à l'obligation d'assurer
 la continuité écologique des cours d'eau prévues par la loi.","Quel est le rôle d'un moulin ?
En tant que moulin (machine à moudre), il est utilisé le plus souvent pour moudre des céréales, broyer,
 piler, pulvériser diverses substances, presser des drupes ou écraser des olives pour produire de l'huile ;
  il a pu aussi servir à actionner une pompe, par exemple pour l'irrigation ou pour assécher les polders ","2022-05-02",
  "moulins-le-conseil-constitutionnel-valide-des-exemptions-à-la-continuité-écologique-des-cours-d-eau-5.php");


insert into actu(idTheme,idPhoto,titre,descript,contenus,daty,url)
values(5,6,"À nouveau gouvernement, nouveau plan stratégique pour l'agriculture ?",
"Jugé insuffisant sur de nombreux points par la Commission européenne, le plan stratégique français,
 élaboré dans le cadre de la PAC, devrait être revu avant la fin du mois. Un calendrier serré qui laisse
  peu de marge de manœuvre aux parties prenantes.","Le serment fait à la jeunesse par le président de la République,
   Emmanuel Macron, de lui « léguer une planète plus vivable » et sa promesse d'une planification écologique
    contribueront-ils à faire bouger les lignes du plan stratégique national (PSN) élaboré dans le cadre de la nouvelle
     politique agricole commune (PAC) ? L'occasion pourrait être belle pour le nouveau gouvernement de montrer sa bonne
      volonté en la matière. ","2022-05-14","À-nouveau-gouvernement-nouveau-plan-stratégique-pour-l-agriculture--6.php");


insert into actu(idTheme,idPhoto,titre,descript,contenus,daty,url)
values(3,7,"Pollutions industrielles : les collectivités montent au créneau",
"« Si les collectivités se sont appropriées la question des risques accidentels autour des grands sites industriels,
 le sujet des pollutions chroniques et de leurs effets sur la santé et sur l'environnement est plus difficilement 
maîtrisé par les territoires »","Au lendemain de la médiatisation d'une contamination aux composés perfluorés dans 
la vallée de la chimie, au sud de Lyon, l'association indique avoir lancé, au début de l'année, un programme destiné
 aux collectivités et aux pollutions industrielles, en partenariat avec la métropole de Lyon et l'Institut écocitoyen.
  Ce dernier étudie, depuis 2010, les effets des pollutions sur la santé en développant des méthodes participatives et
   collaboratives avec les habitants autour de l'étang de Berre (Bouches-du-Rhône). ","2022-03-10",
   "pollutions-industrielles-les-collectivités-montent-au-créneau-7.php");


insert into actu(idTheme,idPhoto,titre,descript,contenus,daty,url)
values(1,8,"Artificialisation des sols : les critères pour soustraire les parcs photovoltaïques en consultation",
"Le ministère de la Transition écologique soumet à la consultation du public, jusqu'au 25 mai prochain, deux projets
 de textes qui précisent dans quelle mesure les parcs photovoltaïques peuvent ne pas être pris en compte dans le calcul
  de la consommation d'espaces naturels et agricoles. ","L'énergie solaire photovoltaïque est une énergie électrique 
  produite à partir du rayonnement solaire grâce à des panneaux ou des centrales solaires photovoltaïques. 
  Elle est dite renouvelable, car sa source est considérée comme inépuisable à l'échelle du temps humain. ","2022-04-04",
  "artificialisation-des-sols-les-critères-pour-soustraire-les-parcs-photovoltaïques-en-consultation-8.php");

