# Agenda du campus

Une première page simple pour consulter quelques événements du campus.

Les événements sont écrits directement dans `index.php`. Le style est dans `style.css`.

Pour afficher la page avec PHP, lance un petit serveur local :

```sh
php -S localhost:8000
```

Puis ouvre http://localhost:8000.

Puis ouvre http://localhost:8000. Les événements affichés sont des exemples à remplacer avec le temps.


intitulé 

Sujet : l’agenda du campus
 
Contexte. Le campus veut un petit site pour consulter les événements à venir. À terme, un membre de l’équipe pourra aussi en ajouter et les visiteurs pourront les rechercher.
 
Première version attendue : afficher une liste d’événements avec leur titre, date, lieu et catégorie. Le site peut d’abord utiliser quelques données écrites directement dans le code ; le but est de pouvoir démarrer sans attendre d’avoir vu PHP ou JavaScript.
 
Paliers d’évolution, à suivre dans l’ordre ou à adapter selon l’avancement :
 
Préparer le projet — créer le dépôt et son README, organiser les fichiers et dessiner rapidement les pages.
Construire la logique PHP — afficher plusieurs événements, distinguer ceux passés et à venir, puis ajouter recherche, filtres et tri.
Organiser et conserver les données — extraire des fonctions, créer une classe Event, puis enregistrer les événements dans un fichier JSON.
Réaliser l’interface — structurer les pages en HTML et mettre en forme les événements en cartes avec une présentation adaptée au mobile.
Ajouter l’interactivité — valider le formulaire, filtrer la liste sans recharger la page et actualiser l’affichage en manipulant le DOM.
Faire la synthèse PHP/JS — charger les événements depuis PHP au format JSON avec fetch, puis permettre l’ajout d’un événement et sa sauvegarde.
 
Le sujet est prévu pour durer sur les 15 jours donc si quelque chose ne vous semble pas clair, laissez le de côté jusqu'à ce que vous voyez les compétences associés. Bon courage !