
drop database if exists Villierbdd;
create database Villierbdd;
use Villierbdd;


create table typepresta(
codetypepresta int not null auto_increment, 
nomtypepresta varchar(40),
primary key (codetypepresta)

);





create table typeevent(
codetypeevent int not null auto_increment,
nomtypeevent varchar(50),
primary key(codetypeevent)
);

create table famille(
idfamille int not null auto_increment,
nom varchar(30),
prenom varchar(30),
adresse varchar(100),
ville varchar(50),
email varchar(80),
mdp varchar(255),
telephone varchar(10),
revenu_imposable char(7),
nombreenfants varchar(3),
dateinscription date,
sexe varchar(10),
photo varchar(10),
primary key (idfamille)
);



create table evenement(
codeevent int not null auto_increment,
nomevent varchar(30),
tailleevent char(5),
lieuevent varchar(35),
dateevent date,
heureevent time,
codetypeevent int,
idfamille int,
primary key (codeevent),
foreign key (codetypeevent) references typeevent(codetypeevent),
foreign key (idfamille) references famille(idfamille)
on delete cascade
on update cascade
);



create table prestation( 
codepresta int not null auto_increment,
libellepresta varchar(50),
nombreplaces char(5),
codetypepresta int,
idfamille int,
primary key (codepresta),
foreign key (codetypepresta) references typepresta(codetypepresta),
foreign key(idfamille) references famille(idfamille)
on delete cascade
on update cascade
);





create table enfant(
codef int not null ,
codeenf int not null ,
nomenf varchar(20),
prenomenf varchar(20),
datenaissaenf date,
primary key (codef,codeenf)
);



create table employe(

codeemp int not null auto_increment,
nom varchar(50) not null,
prenom varchar(50) not null,
email varchar(255) not null,
mdp varchar(255) not null,
primary key(codeemp)
);



create table admin (
iduser int(3) not null auto_increment, 
nom varchar (30), 
prenom varchar(30), 
email varchar(100), 
mdp varchar(255), 
role enum ("admin", "user"), 
primary key(iduser)
); 



create table userppe (
iduser int(3) not null auto_increment,
nom varchar(50),
prenom varchar(50),
email varchar(50),
mdp varchar(255),
role enum("admin","user"),
primary key(iduser)
);



create table histo_famille(
idfamhisto int not null auto_increment,
nom varchar(30),
prenom varchar(30),
adresse varchar(100),
ville varchar(50),
email varchar(80),
mdp varchar(255),
telephone varchar(10),
revenu_imposable char(7),
nombreenfants varchar(3),
dateinscription date,
sexe varchar(10),
primary key (idfamhisto)
);



create table histo_event(
codeevent int not null auto_increment,
nomevent varchar(30),
tailleevent char(5),
lieuevent varchar(35),
dateevent date,
heureevent time,
nomtypeevent varchar(50),
nom varchar(30),
prenom varchar(30),
primary key(codeevent)
);



create table histo_prestation(
codepresta int not null auto_increment,
libellepresta varchar(50),
nombreplaces char(5),
codetypepresta int,
idfamille int,
primary key (codepresta) 
);



create table histo_typepresta(
codetypepresta int not null auto_increment, 
nomtypepresta varchar(40),
primary key (codetypepresta)
);



create table histo_typeevent(
codetypeevent int not null auto_increment,
nomtypeevent varchar(50),
primary key(codetypeevent)
);




/*alter table user 
add CONSTRAINT role enum("admin","user") default user; */




/*------------------INSERTION---------------------*/





insert into admin values(null,'aghouiles','darren','d@hotmail.fr','123','admin');

insert into admin values(null,'Mbitcha','eddy','e@hotmail.fr','123','user');



insert into famille values(null,'RICHARD','Vincent','2 rue de Paris','Paris','richard@hotmail.fr','richardv123',
'0102030405','1500','2','2021-09-15','homme','');

insert into famille values(null,'GAUTHIER','Hugo','2 rue de la Défense','Paris','hugo@hotmail.fr','hugo2005',
'0102030405','1500','2','2021-09-15','homme','');

insert into famille values(null,'Dominique','Rosa','2 rue de Marseille','Paris','mathieu@hotmail.fr','dominique.rosa12',
'0102030405','1500','2','2021-09-15','femme','');



insert into typepresta values(null,'Centre Aere');

insert into typepresta values(null,'Restauration');

insert into typepresta values(null,'Garderie');




insert into inscription values(null,'ROGER','Michael','mr@hotmail.fr','123','');

insert into inscription values(null,'BRUN','Thomas','bt@hotmail.fr','123','');

insert into inscription values(null,'BLOND','Marie','bm@hotmail.fr','123','');



insert into typepresta values(null,'Garderie');

insert into typepresta values(null,'Etude');

insert into typepresta values(null,'Piscine');

insert into typepresta values(null,'Revision');




insert into prestation values(null,'Garderie enfant','10','1','1');

insert into prestation values(null,'Recolte nourriture','50','2','3');

insert into prestation values(null,'Acommpagner enfant','50','3','2');



insert into typeevent values(null,'Concert');

insert into typeevent values(null,'Gala');

insert into typeevent values(null,'Spectacle');

insert into typeevent values(null,'Recolte Argent');




insert into evenement values(null,'Concert Charite','150','Paris','2022/01/15','15:00','1','2');

insert into evenement values(null,'Gala','500','Paris','2022/04/20','19:00','2','3');

insert into evenement values(null,'Just Dance','200','Paris','2022/05/12','12:00','3','1');

insert into evenement values(null,'Recolte Argent Croix Rouge','1000','Paris VII','2022/01/23','12:00','4','1');




insert into enfant values(1,1,'Brun','David','2006-09-05');



insert into userppe values(null, "Yacine","Eddy","a@hotmail.fr","123","admin");

/*----------------------------------------VUES---------------------------------------*/






/* trigger qui permet de voir le nom d'un Evenement + son type*/

create view vEvenement 
as select nomevent, nomtypeevent  
from evenement e, typeevent t
where t.codetypeevent = e.codetypeevent;


/* trigger qui permet de voir le nom d'une prestation + son type*/

create view vPrestation
as select nomtypepresta, libellepresta, sum(nombreplaces)
from prestation p, typepresta t
where p.codetypepresta = t.codetypepresta;



/* trigger qui permet de voir le nom d'un */

create view typedepresta as(
select t.codetypepresta,p.libellepresta, p.nombreplaces
from prestation p, typepresta t
where t.codetypepresta = p.codetypepresta);


/* trigger qui permet de voir les familles inscrites à la prestation "petite enfance" */

create view vPetiteEnfance
as select libellepresta, nom, prenom 
from prestation p, famille f
where p.idfamille = f.idfamille 
and p.libellepresta = 'La petite enfance'
group by f.idfamille;


/* trigger qui permet de voir les familles inscrites à la prestation "Garderie Enfant" */

create view vGarderie
as select libellepresta, nom, prenom 
from prestation p, famille f
where p.idfamille = f.idfamille 
and p.libellepresta = 'Garderie enfant'
group by f.idfamille;


/* trigger qui permet de voir les familles inscrites à la prestation "Recolte Nourriture" */

create view vRecolteNourriture
as select libellepresta, nom, prenom 
from prestation p, famille f
where p.idfamille = f.idfamille 
and p.libellepresta = 'Recolte nourriture'
group by f.idfamille;


create view vConcertCharite
as select nomevent, nom, prenom 
from evenement e, famille f
where e.idfamille = f.idfamille 
and e.nomevent = 'Concert Charite'
group by f.idfamille;


/* trigger qui permet de voir les familles inscrites à l'evenement "Gala" */	

create view vGala
as select nomevent, nom, prenom 
from evenement e, famille f
where e.idfamille = f.idfamille 
and e.nomevent = 'Gala'
group by f.idfamille;


/* trigger qui permet de voir les familles inscrites à l'evenement "Concert charite" */

create view vConcertCharite
as select nomevent, nom, prenom 
from evenement e, famille f
where e.idfamille = f.idfamille 
and e.nomevent = 'Concert Charite'
group by f.idfamille;



/* trigger qui permet de voir les familles inscrites à l'evenement "Recolte Argent Croix Rouge" */

create view vRecolteArgent
as select nomevent, nom, prenom 
from evenement e, famille f
where e.idfamille = f.idfamille 
and e.nomevent = 'Recolte Argent Croix Rouge'
group by f.idfamille;	



/*----------------------------------------TRIGGERS---------------------------------------*/


/* Trigger qui permet de gérer les dates d'inscription :

- Si la date d'inscription est supérieur à la date actuelle,
alors le trigger met la date d'inscription à la date actuelle.*/
/*
drop trigger if exists gestiondateinscription;
delimiter //
create trigger gestiondateinscription
before insert on famille
for each row 
begin
if new.dateinscription > curdate() or new.dateinscription is null
then 
set new.dateinscription=curdate();
end if ;
end //
delimiter ;
*/

 

DROP FUNCTION IF EXISTS email_existe ; 
DELIMITER //
CREATE FUNCTION email_existe (newemail VARCHAR(50))
RETURNS INT
BEGIN
declare result int;
SELECT count(*) FROM famille WHERE email = newemail INTO @result;
RETURN @result;
END//
DELIMITER ;


DROP FUNCTION IF EXISTS num_existe ; 
DELIMITER //
CREATE FUNCTION num_existe (newnum VARCHAR(50))
RETURNS INT
BEGIN
SELECT count(*) FROM famille WHERE telephone = newnum INTO @result;
RETURN @result;
END//
DELIMITER ;

/*

drop trigger if exists verif_num; 
delimiter //
create trigger verif_num
before insert on famille 
for each row 
begin 
declare existedeja INTEGER; 
declare nb int ; 
SELECT count(*)  into nb FROM famille WHERE telephone = new.telephone;


if nb >= 1
then
Signal sqlstate '45001'
set message_text = 'telephone existant'; 
end if; 
end //
DELIMITER ;



drop trigger if exists verif_email; 
delimiter //
create trigger verif_email
before insert on famille 
for each row 
begin 
declare existedeja INTEGER; 

select email_existe(new.email) into existedeja; 

if existedeja = 1
then
Signal sqlstate '45001'
set message_text = 'email existant'; 
end if; 
end //
DELIMITER ;







/* Trigger qui permet de vérifier si l'email est déjà contenu dans la base. 

DROP TRIGGER IF EXISTS valide_UpdateFamille; 
DELIMITER //
CREATE TRIGGER valide_UpdateFamille
BEFORE update ON famille 
FOR EACH ROW
BEGIN

declare vEmail varchar(255);

select email into vEmail 
from famille;

if new.email = vEmail
then 
Signal sqlstate '45000'
Set message_text= 'email exist';
end if; 
END //
DELIMITER ;

/*
DROP TRIGGER IF email_verification; 
DELIMITER //
CREATE TRIGGER email_verification
before insert ON famille 
FOR EACH ROW
BEGIN
declare vEmail varchar(255); 

select email into vEmail 
from famille;

if new.email = vEmail
then 
Signal sqlstate '45000'
Set message_text= 'email already exist';
end if; 
END //
DELIMITER ;
*/





DROP TRIGGER IF EXISTS valide_UpdateEvent; 
DELIMITER //
CREATE TRIGGER valide_UpdateEvent 
BEFORE update ON evenement 
FOR EACH ROW
BEGIN

declare vEvent varchar(255);

select nomevent into vEvent 
from evenemement;

if new.nomevent = vEvent
then 
Signal sqlstate '45000'
Set message_text= 'message';
end if; 
END //
DELIMITER ;


DROP TRIGGER IF EXISTS valide_UpdatePrestation; 
DELIMITER //
CREATE TRIGGER valide_UpdatePrestation 
BEFORE update ON prestation 
FOR EACH ROW
BEGIN

declare vPresta varchar(255);

select libellepresta into vPresta 
from prestation;

if new.libellepresta = vPresta
then 
Signal sqlstate’45000’
Set message_text=’ message’;
end if; 
END //
DELIMITER ;


DROP TRIGGER IF EXISTS valide_UpdateTypePrestation; 
DELIMITER //
CREATE TRIGGER valide_UpdateTypePrestation 
BEFORE update ON typepresta 
FOR EACH ROW
BEGIN

declare vTypePresta varchar(255);

select nomtypepresta into vTypePresta 
from typepresta;

if new.nomtypepresta = vTypePresta
then 
Signal sqlstate’45000’
Set message_text=’ message’;
end if; 
END //
DELIMITER ;




DROP TRIGGER IF EXISTS valide_UpdateTypeEvent; 
DELIMITER //
CREATE TRIGGER valide_UpdateTypeEvent
BEFORE update ON typeevent 
FOR EACH ROW
BEGIN

declare vTypeEvent varchar(255);

select nomtypeevent into vTypeEvent 
from typeevent;

if new.nomtypeevent = vTypeEvent
then 
Signal sqlstate’45000’
Set message_text=’ message’;
end if; 
END //
DELIMITER ;






delimiter // 
create trigger under500
after insert on emp
for each row 
begin 
if new.sal < 500
then Signal sqlstate '45000'
set message_text = 'Salaire trop bas';
end if; 
end //
delimiter ; 

insert into emp value (null, 'test', 'CLERK', '1980-12-17', '400','100', '20', '7698'); 




delimiter //
create trigger inserHistoFamille
after delete on famille 
for each row 
begin 
insert into histo_famille values (null, old.nom, 
old.prenom, old.adresse,old.ville,old.email,old.mdp,
old.telephone,old.revenu_imposable,old.nombreenfants,
old.dateinscription,old.sexe
); 
end //
delimiter ;

delimiter //
create trigger inserEvent
before delete on evenement 
for each row 
begin 

declare p_type varchar(50);
declare p_nom_famille varchar(30);
declare p_prenom_famille varchar(30);

select nomtypeevent into p_type 
from typeevent
where codetypeevent = old.codetypeevent;

select nom into p_nom_famille
from famille 
where idfamille = old.idfamille;

select prenom into p_prenom_famille 
from famille 
where idfamille = old.idfamille;

insert into histo_famille values (null, old.nomevent, 
old.tailleevent, old.lieuevent,old.dateevent,old.heureevent,
p_type, p_nom_famille, p_prenom_famille
); 
end //
delimiter ;


/* */


delimiter //
create trigger inserPresta
before delete on prestation 
for each row 
begin 

declare p_type varchar(50);
declare p_nom_famille varchar(30);
declare p_prenom_famille varchar(30);

select nomtypepresta into p_type 
from typeevent
where codetypepresta = old.codetypepresta;

select nom into p_nom_famille
from famille 
where idfamille = old.idfamille;

select prenom into p_prenom_famille 
from famille 
where idfamille = old.idfamille;

insert into histo_prestation values (null, old.libellepresta, 
old.nombreplaces,p_type,p_type, p_nom_famille, p_prenom_famille
); 
end //
delimiter ;


delimiter //
create trigger inserHistoTypeEvent
after delete on typeevent 
for each row 
begin 
insert into histo_typeevent values (null, old.nomtypeevent
); 
end //
delimiter ;


delimiter //
create trigger inserHistoTypePresta
after delete on typepresta 
for each row 
begin 
insert into histo_typepresta values (null, old.nomtypepresta
); 
end //
delimiter ;


create view nbLPE
as select count(*)from prestation
where libellepresta='La petite enfance';
create view nbBM
as select count(*)from prestation
where libellepresta='Bien mangercest le debut du bonheur';
create view nbAC
as select count(*)from prestation
where libellepresta='Ecole ecole elementaire Albert Camus';
create view vHomme
as select count(*)from famille
where sexe='homme';
create view vFemme 
as select count(*) from famille
where sexe='femme';


create view nbLPE
as select count(*) from prestation 
where libellepresta = 'La petite enfance' ;


create view nbBM
as select count(*) from prestation 
where libellepresta = 'Bien manger c est le debut du bonheur' ;


create view nbAC
as select count(*) from prestation 
where libellepresta = 'Ecole ecole elementaire Albert camus' ;



create view vHomme
as select count(*) from famille
where sexe = 'homme'; 


create view vFemme
as select count(*) from famille
where sexe = 'femme'; 


create view moyenneImpot
as select avg(revenu_imposable) from famille; 


create view moyenneEnfant
as select avg(nombreenfants) from famille; 


create view familleNombreuse
as select nom, prenom, nombreenfants
from famille
where nombreenfants = (select max(nombreenfants) from famille); 


create view famillePeuNombreuse
as select nom, prenom, nombreenfants
from famille
where nombreenfants = (select min(nombreenfants) from famille); 


create view vEvenement 
as select nomevent, nomtypeevent  
from evenement e, typeevent t
where t.codetypeevent = e.codetypeevent
group by nomevent; 


/* trigger qui permet de voir le nom d'une prestation + son type*/


create view vPrestation
as select nomtypepresta, libellepresta
from prestation p, typepresta t
where p.codetypepresta = t.codetypepresta
group by nomtypepresta; 



/* trigger qui permet de voir le nom d'un */

create view typedepresta as(
select t.codetypepresta,p.libellepresta, p.nombreplaces
from prestation p, typepresta t
where t.codetypepresta = p.codetypepresta);


/* vue qui permet de voir les familles inscrites à la prestation "petite enfance" */
//ajoutée 
create view vPetiteEnfance
as select libellepresta, nom, prenom 
from prestation p, famille f
where p.idfamille = f.idfamille 
and p.libellepresta = 'La petite enfance'
group by f.idfamille;






/* trigger qui permet de voir les familles inscrites à la prestation "Garderie Enfant" */

create view vGarderie
as select libellepresta, nom, prenom 
from prestation p, famille f
where p.idfamille = f.idfamille 
and p.libellepresta = 'Garderie enfant'
group by f.idfamille;


/* trigger qui permet de voir les familles inscrites à la prestation "Recolte Nourriture" */

create view vRecolteNourriture
as select libellepresta, nom, prenom 
from prestation p, famille f
where p.idfamille = f.idfamille 
and p.libellepresta = 'Recolte nourriture'
group by f.idfamille;


create view vConcertCharite
as select nomevent, nom, prenom 
from evenement e, famille f
where e.idfamille = f.idfamille 
and e.nomevent = 'Concert Charite'
group by f.idfamille;


/* trigger qui permet de voir les familles inscrites à l'evenement "Gala" */	

create view vGala
as select nomevent, nom, prenom 
from evenement e, famille f
where e.idfamille = f.idfamille 
and e.nomevent = 'Gala'
group by f.idfamille;


/* trigger qui permet de voir les familles inscrites à l'evenement "Concert charite" */

create view vConcertCharite
as select nomevent, nom, prenom 
from evenement e, famille f
where e.idfamille = f.idfamille 
and e.nomevent = 'Concert Charite'
group by f.idfamille;



/* trigger qui permet de voir les familles inscrites à l'evenement "Recolte Argent Croix Rouge" */

create view vRecolteArgent
as select nomevent, nom, prenom 
from evenement e, famille f
where e.idfamille = f.idfamille 
and e.nomevent = 'Recolte Argent Croix Rouge'
group by f.idfamille;	
