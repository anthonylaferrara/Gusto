DROP DATABASE IF EXISTS projetweb;

CREATE DATABASE IF NOT EXISTS projetweb;
USE projetweb;
# -----------------------------------------------------------------------------
#       TABLE : PLATS
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PLATS
 (
   IDPLAT INTEGER(10) NOT NULL  AUTO_INCREMENT,
   IDRESTAURANT INTEGER(7) NOT NULL  ,
   IDPHOTO INTEGER(10) NOT NULL  ,
   NOM CHAR(50) NOT NULL  ,
   PRIX DECIMAL(4,2) NOT NULL  ,
   DESCRIPTION CHAR(100) NOT NULL  
   , PRIMARY KEY (IDPLAT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : RESTAURANTS
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS RESTAURANTS
 (
   IDRESTAURANT INTEGER(7) NOT NULL  AUTO_INCREMENT,
   IDREGION INTEGER(2) NOT NULL  ,
   NOM CHAR(100) NOT NULL  ,
   EMAIL CHAR(50) NOT NULL  ,
   ADRESSE CHAR(100) NOT NULL  ,
   TEL CHAR(15) NOT NULL  ,
   MDP CHAR(32) NOT NULL  
   , PRIMARY KEY (IDRESTAURANT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : PHOTOS
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PHOTOS
 (
   IDPHOTO INTEGER(10) NOT NULL  AUTO_INCREMENT,
   NOM CHAR(32) NOT NULL  ,
   CHEMIN CHAR(32) NOT NULL  ,
   FORMAT CHAR(32) NOT NULL  
   , PRIMARY KEY (IDPHOTO) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : UTILISATEURS
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS UTILISATEURS
 (
   IDUTILISATEUR INTEGER(7) NOT NULL  AUTO_INCREMENT,
   IDREGION INTEGER(2) NOT NULL  ,
   NOM CHAR(32) NOT NULL  ,
   PRENOM CHAR(32) NOT NULL  ,
   EMAIL CHAR(32) NOT NULL  ,
   MDP CHAR(32) NOT NULL  
   , PRIMARY KEY (IDUTILISATEUR) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : REGIONS
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS REGIONS
 (
   IDREGION INTEGER(2) NOT NULL  AUTO_INCREMENT,
   NOM CHAR(32) NOT NULL  
   , PRIMARY KEY (IDREGION) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : RESSEMBLE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS RESSEMBLE
 (
   IDRESTAURANT INTEGER(7) NOT NULL  ,
   IDPHOTO INTEGER(10) NOT NULL  
   , PRIMARY KEY (IDRESTAURANT,IDPHOTO) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : CRITIQUE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CRITIQUE
 (
   IDPLAT INTEGER(10) NOT NULL  ,
   IDUTILISATEUR INTEGER(7) NOT NULL  ,
   NOTE CHAR(32) NULL  
   , PRIMARY KEY (IDPLAT,IDUTILISATEUR) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : NOTE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS NOTE
 (
   IDRESTAURANT INTEGER(7) NOT NULL  ,
   IDUTILISATEUR INTEGER(7) NOT NULL  ,
   QUALITEPRIX CHAR(32) NULL  ,
   ACCUEIL CHAR(32) NULL  
   , PRIMARY KEY (IDRESTAURANT,IDUTILISATEUR) 
 ) 
 comment = "";


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE PLATS 
  ADD FOREIGN KEY FK_PLATS_RESTAURANTS (IDRESTAURANT)
      REFERENCES RESTAURANTS (IDRESTAURANT) ;


ALTER TABLE PLATS 
  ADD FOREIGN KEY FK_PLATS_PHOTOS (IDPHOTO)
      REFERENCES PHOTOS (IDPHOTO) ;


ALTER TABLE RESTAURANTS 
  ADD FOREIGN KEY FK_RESTAURANTS_REGIONS (IDREGION)
      REFERENCES REGIONS (IDREGION) ;


ALTER TABLE UTILISATEURS 
  ADD FOREIGN KEY FK_UTILISATEURS_REGIONS (IDREGION)
      REFERENCES REGIONS (IDREGION) ;


ALTER TABLE RESSEMBLE 
  ADD FOREIGN KEY FK_RESSEMBLE_RESTAURANTS (IDRESTAURANT)
      REFERENCES RESTAURANTS (IDRESTAURANT) ;


ALTER TABLE RESSEMBLE 
  ADD FOREIGN KEY FK_RESSEMBLE_PHOTOS (IDPHOTO)
      REFERENCES PHOTOS (IDPHOTO) ;


ALTER TABLE CRITIQUE 
  ADD FOREIGN KEY FK_CRITIQUE_PLATS (IDPLAT)
      REFERENCES PLATS (IDPLAT) ;


ALTER TABLE CRITIQUE 
  ADD FOREIGN KEY FK_CRITIQUE_UTILISATEURS (IDUTILISATEUR)
      REFERENCES UTILISATEURS (IDUTILISATEUR) ;


ALTER TABLE NOTE 
  ADD FOREIGN KEY FK_NOTE_RESTAURANTS (IDRESTAURANT)
      REFERENCES RESTAURANTS (IDRESTAURANT) ;


ALTER TABLE NOTE 
  ADD FOREIGN KEY FK_NOTE_UTILISATEURS (IDUTILISATEUR)
      REFERENCES UTILISATEURS (IDUTILISATEUR) ;

