# Prévisions météo du jour

## Objectifs

- Créer un petit site de prévisions météo du jour.
- Utiliser les notions vues jusqu'ici : Install, Routing, Contrôleur, Modèle en PHP, Twig.

### Les wireframes du site

![](wireframes.png)

### Les étapes possibles

- **Afficher la liste** des villes depuis l'accueil.
- Créer une page pour afficher chaque prévision par ville.
- Créer une navigation pour les 4 pages.

### Modèle de données fourni

Le modèle fourni `WeatherModel.php` contient déjà des données (tableau PHP) et vous propose 2 méthodes statiques pour les récupérer :

**Toutes les villes**

`$data = WeatherModel::getWeatherData();`

**Les données pour une ville**

Pour la ville en index numéro 5 :

`$city = WeatherModel::getWeatherByCityIndex(5);`

## Bonus widget météo

### Les étapes possibles

- Ajouter la gestion d'un _widget_ pour la ville de votre choix.
  - Sur la page des prévisions, permettre la sélection de la ville via la Session.
  - Mettre les infos de la ville en session et rediriger vers l'accueil.
- Dans le widget météo :
  - **Afficher la prévision météo** du jour (ville, date, température min/max, image météo), **de la ville choisie**.
  - **Sinon afficher un message + une lien** pour choisir une ville sur l'accueil.
  - Sur toutes les pages du site.
