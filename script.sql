CREATE TABLE civilite(
 id_civilite Int Auto_increment NOT NULL ,
 civilite_libelle Varchar (50) NOT NULL
,CONSTRAINT civilite_PK PRIMARY KEY (id_civilite)
);
CREATE TABLE poste(
 id_poste Int Auto_increment NOT NULL ,
 poste_libelle Varchar (50) NOT NULL
,CONSTRAINT poste_PK PRIMARY KEY (id_poste)
);
CREATE TABLE joueur(
 id_joueur Int Auto_increment NOT NULL ,
 joueur_nom Varchar (50) NOT NULL ,
 joueur_prenom Varchar (50) NOT NULL ,
 joueur_date_naissance Date NOT NULL ,
 id_civilite Int NOT NULL ,
 id_poste Int NOT NULL
,CONSTRAINT joueur_PK PRIMARY KEY (id_joueur)
);