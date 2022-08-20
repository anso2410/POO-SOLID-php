# POO-SOLID-php

 [![forthebadge](https://forthebadge.com/images/badges/powered-by-electricity.svg)](https://forthebadge.com)
 ![image](src/img/made-with-php-solid-principle.svg)<br>

<img alt="badge" src="https://img.shields.io/badge/Visual_Studio_Code-0078D4?style=for-the-badge&logo=visual%20studio%20code&logoColor=white"/> <img alt="badge"  src="https://img.shields.io/badge/Udemy-EC5252?style=for-the-badge&logo=Udemy&logoColor=black"/><br>

![image](src/img/merci-lior-chamla-!.svg)<br><br>

![image](src/img/s.svg)<br>
# SRP (Single Responsability Principle)<br>
## Une classe, une responsabilité, un rôle.<br>
### 1- Organistaion<br>
### 2- Testabilité (test unitaires)<br>
### 3- Flexibilité<br>
### 4- Evolutivité.   <br><br><br>
![image](src/img/o.svg) <br>
# OCP (Open Closed Principle)<br>
## Ouverte à l'extension, fermée à la modification.<br>
### Principes et définition de [Bertrand Meyer(1988)](https://fr.wikipedia.org/wiki/Bertrand_Meyer)  et [Rober C. Martin (oncle Bob)](https://fr.wikipedia.org/wiki/Robert_C._Martin).<br><br><br>
![image](src/img/l.svg)<br>
 # LSP (Liskov Substitution Principle)<br>
 ## Les enfants font comme les parents.<br>
 ### Lorsqu'une classe A utilise une classe B, il faut qu'elle puisse utilisée n'importe quel enfant de la classe B sans que ça pose de problème.(signature des mèthodes).<br>
  ### Principe de substitution de [Barbara Liskov](https://fr.wikipedia.org/wiki/Barbara_Liskov) , [Jeannette Wing](https://fr.wikipedia.org/wiki/Jeannette_Wing).<br><br><br>
![image](src/img/i.svg)<br> 
# ISP (Interface Segregation Principle)<br>
## Le SRP des interfaces.<br>
### La notion d'interface permet de définir des contrats en ce qui concerne les méthodes que devront avoir les classes qui signent ce contrat, et qui donc implémentent cette interface.<br>

#### Aucun client (classes qui se servent de l'interface) ne devrait dépendre des méthodes qu'il n'utilise pas. 

-- <cite>Robert C. Martin</cite><br>

Le i de SOLID discute avec le S de SOLID.<br><br><br>

![image](src/img/d.svg)<br> 
# DIP (Dependency Inversion Principle)<br>
## On dépend d'abstraction, pas d'implémentations. <br>
:red_circle::exclamation:Ne pas confondre avec le principe d'injection des dépendances qui est une pratique et non pas un principe SOLID.
### Un module de haut niveau ne devrait pas dépendre de modules de bas niveaux. Les deux devraient dépendre d'une abstraction.
-- <cite>Robert C.Martin</cite><br><br>

![image](src/img/conclusion.svg)<br>
## L'avantage du principe SOLID c'est qu'il fait de votre projet quelquechose de plus intelligent, de plus flexible et de plus évolutif.<br>
### 1. Avec des classe plus petites (SRP); qui ont des responsabilité bien définie . où les fichiers sont correctement organisés, et où on va pouvoir retrouver facilement où se trouve quel code et qui fait quoi!.<br>
### 2. Des classes plus évolutives (OCP) ; On va pouvoir avoir des classes qui vont être enrichies ( comportement plus puissant) mais sans y toucher (fermées aux modifications mais ouvertes à l'extension). 
### <span style="color:RosyBrown">Merci Uncle Bob! </span>
<img src="src/img/PiercingHospitableDwarfrabbit-max-1mb.gif" width="100" heigth="100"/><br>

### 3. Quand une classe A utilise les méthodes de la classe B, elle doit pouvoir utiliser n'importe quelle autre classe enfant de B sans que cela change radicalement son comportement (LSP). <br>

### 4. (ISP) Si une interface posséde trop de méthodes, les classes qui vont implémenter cette interface auront trop de méthodes, trop de code et potentielement ne respecterons pas le SRP et surtout on pourrait se retrouver avec des classes qui implémentent une interface mais qui n'aurait pas besoin de toutes ses fonctions. D'où des interfaces le plus limitées possibles avec un scope bien précis. Mieux vaut implémenter une classe avec plusieurs interfaces.<br>

### 5. Mieux vaut dépendre d'une abstraction que d'implémentations concrètes. Le fait de dépendre d'une abstraction permet d'envoyer n'importe quelle classe qui implémente cette abstraction. Cela permet d'avoir des classes très évolutives.<br><br>

## En bref,  un projet mieux organisé, plus joli, plus lisible, beaucoup plus évolutif et maintenable dans le temps.<br><br>

<p >
  <img src="src/img/solid.png" width="50%" height="50%" style="border-radius:20px"/>
</p>

enjoy!!!!


