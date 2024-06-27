# Encyclopédie de Game of Thrones

## Introduction
Ce projet vise à créer une encyclopédie interactive dédiée à l'univers de Game of Thrones, en utilisant PHP, MySQL, HTML, CSS et le framework Laravel. L'objectif est de fournir une plateforme complète pour explorer les personnages et les maisons de la saga, basée sur une base de données préexistante (`docs/got.sql`).

## Contenu du Projet

### Page d'Accueil
La page d'accueil présente tous les personnages de Game of Thrones, chacun avec un fond coloré correspondant à sa maison. Pour réaliser cela, j'ai configuré une route Laravel pour récupérer et afficher tous les personnages depuis la base de données. Chaque personnage est représenté avec des informations de base comme son nom et son rang.

### Page d'un Personnage
Sur la page détaillée d'un personnage, accessible via une route spécifique avec un identifiant unique, j'ai mis en place l'affichage du rang du personnage. J'ai également exploré une relation bonus pour afficher les informations sur les parents du personnage.

### Liste des Maisons
Une autre route a été créée pour lister toutes les maisons de Game of Thrones. Chaque maison est associée à une image et un fond coloré distinctif, en fonction de ses attributs définis dans la base de données. En cliquant sur une maison, l'utilisateur est dirigé vers la page spécifique de cette maison.

### Page d'une Maison
Sur la page d'une maison donnée, je liste tous les personnages qui y sont associés. Cela nécessite l'identification correcte de la maison à partir de la base de données et la liaison avec les personnages correspondants. J'ai également envisagé un bonus pour standardiser l'affichage des listes de personnages à travers le site.

## Finalisation
Pour terminer le projet, j'ai utilisé les relations établies entre les personnages et les maisons pour mettre à jour la couleur de fond des personnages sur les listes et sur leurs pages individuelles. De plus, j'ai intégré la fonctionnalité permettant d'afficher la liste des maisons auxquelles un personnage est affilié directement dans sa biographie.

## Conclusion
En résumé, ce projet m'a permis de mettre en pratique mes compétences en PHP, Laravel et la gestion de bases de données MySQL pour créer une plateforme interactive et informative sur Game of Thrones. J'ai personnalisé les modèles Laravel pour s'adapter à la structure de la base de données existante et j'ai utilisé HTML et CSS fournis pour intégrer l'interface utilisateur. Les images nécessaires ont été organisées dans le répertoire `public/assets/img`. Ce projet m'a également donné l'opportunité de comprendre et d'appliquer des concepts avancés de gestion de contenu et de relations dans une application web.
