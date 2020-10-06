# demonstration de la gestion des roles
ceci c'est une demo pour vous montrer en pratique la gestion des roles en symfony
## Usage 
* cloner le projet
sur votre terminal et la racine du projet clone
  * tapez **composer install** pour recuperer les dependances
  * configurer le fichier .env la ligne qui commence par **DATABASE_URL=** en reseignant les informations
  * tapez ensuite  **php bin/console doctrine:database:create**
  * tapez ensuite **php bin/console doctrine:migrations:migrate**
  * tapez ensuite lancer les fixtures  **php bin/console doctrine:fixtures:load --no-interaction**
  * enfin **php -S localhost:8000 -t public** ou tapez  **symfony server:start -d**
