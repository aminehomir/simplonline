create database GCours;
use GCours;



/*==============================================================*/
/* Table: Cours                                                 */
/*==============================================================*/
create table Cours 
(
   numcours             integer                        not null,
   numsalle             integer                        not null,
   libelleCours         varchar(254)                   null,
   constraint PK_COURS primary key (numcours)
);

/*==============================================================*/
/* Table: Enseignat                                             */
/*==============================================================*/
create table Enseignat 
(
   numpersonne          integer                        not null,
   numcours             integer                        not null,
   nom                  varchar(254)                   null,
   prenom               varchar(254)                   null,
   tel                  varchar(254)                   null,
   mail                 varchar(254)                   null,
   datePriseDeFonction  date                      null,
   constraint PK_ENSEIGNAT primary key (numpersonne)
);

/*==============================================================*/
/* Table: Etudiant                                              */
/*==============================================================*/
create table Etudiant 
(
   numetudiant          integer                        not null,
   nom                  varchar(254)                   null,
   prenom               varchar(254)                   null,
   tel                  varchar(254)                   null,
   mail                 varchar(254)                   null,
   anneeEntree          date                      null,
   constraint PK_ETUDIANT primary key (numetudiant)
);


/*==============================================================*/
/* Table: Salle                                                 */
/*==============================================================*/
create table Salle 
(
   numsalle             integer                        not null,
   nom                  varchar(254)                   null,
   capacite             integer                        null,
   constraint PK_SALLE primary key (numsalle)
);

/*==============================================================*/
/* Table: association2                                          */
/*==============================================================*/
create table association2 
(
   numcours             integer                        not null,
   numetudiant          integer                        not null,
   constraint PK_ASSOCIATION2 primary key clustered (numcours, numetudiant)
);

/*==============================================================*/
/* Index: COURS_PK                                              */
/*==============================================================*/
create unique index COURS_PK on Cours (
numcours ASC
);

/*==============================================================*/
/* Index: ASSOCIATION3_FK                                       */
/*==============================================================*/
create index ASSOCIATION3_FK on Cours (
numsalle ASC
);




/*==============================================================*/
/* Index: ENSEIGNAT_PK                                          */
/*==============================================================*/
create unique index ENSEIGNAT_PK on Enseignat (
numpersonne ASC
);

/*==============================================================*/
/* Index: ASSOCIATION1_FK                                       */
/*==============================================================*/
create index ASSOCIATION1_FK on Enseignat (
numcours ASC
);



/*==============================================================*/
/* Index: ETUDIANT_PK                                           */
/*==============================================================*/
create unique index ETUDIANT_PK on Etudiant (
numetudiant ASC
);



/*==============================================================*/
/* Index: SALLE_PK                                              */
/*==============================================================*/
create unique index SALLE_PK on Salle (
numsalle ASC
);




/*==============================================================*/
/* Index: ASSOCIATION2_FK                                       */
/*==============================================================*/
create index ASSOCIATION2_FK on association2 (
numcours ASC
);

/*==============================================================*/
/* Index: ASSOCIATION2_FK2                                      */
/*==============================================================*/
create index ASSOCIATION2_FK2 on association2 (
numetudiant ASC
);

/*==============================================================*/
/* FK                                      */
/*==============================================================*/
alter table Cours
   add constraint FK_COURS_ASSOCIATI_SALLE foreign key (numsalle)
      references Salle (numsalle);
      

alter table Enseignat
   add constraint FK_ENSEIGNA_ASSOCIATI_COURS foreign key (numcours)
      references Cours (numcours);
    

alter table association2
   add constraint FK_ASSOCIAT_ASSOCIATI_COURS foreign key (numcours)
      references Cours (numcours);
    

alter table association2
   add constraint FK_ASSOCIAT_ASSOCIATI_ETUDIANT foreign key (numetudiant)
      references Etudiant (numetudiant);
 
 
-- Creates the Users --

CREATE USER 'User1'@'localhost' IDENTIFIED BY 'amine123';
GRANT ALL PRIVILEGES ON * . * TO 'User1'@'localhost';
FLUSH PRIVILEGES;



CREATE USER 'User2'@'localhost' IDENTIFIED BY 'amine123';
GRANT CREATE, SELECT ON * . * TO 'User2'@'localhost';





Insert into Salle values (1,'Salle1',20);
Insert into Salle values (2,'Salle3',20);
insert into Etudiant values(1,'Amine','Homir','+21206788544','HomirAmin@gmail.com','2018-04-25');
insert into Cours values(1,1,'UML');
insert into Cours values(2,1,'UML');

insert into Enseignat values(1,1,'mohamed','homir','+2123580','hr.amine@gmail.com','2018-04-25');
insert into association2 values(1,1);

-- Update --

UPDATE Salle
SET nom='salle2', capacite=30
WHERE numsalle=1;

UPDATE Salle
SET nom='salle4', capacite=30
WHERE numsalle=2;

UPDATE Etudiant 
SET  nom='homir', prenom='amine', tel='+212648680297', mail='amine@gmail.com', anneeEntree='2020-05-20'
WHERE numetudiant=1 ;

UPDATE Cours
SET numsalle=2, libelleCours='sql'
WHERE numcours=2;

UPDATE Enseignat 
SET numcours=2, nom='homir', prenom='mohammed',tel='212648680297',mail='hr.amine@gmail.com', datePriseDeFonction='2020-05-20'
WHERE numpersonne=1;


-- Delete --
DELETE FROM Enseignat
WHERE numpersonne=1;

DELETE FROM Cours
WHERE numcours=2;

DELETE FROM Salle
WHERE numsalle=2;

DELETE FROM association2 
WHERE numetudiant=1;

DELETE FROM Etudiant 
WHERE numetudiant=1;

