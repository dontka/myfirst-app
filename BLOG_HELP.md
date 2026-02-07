# CREATION DU BLOG

## Création de la structure (Modèle, Migration, Factory, Seeder)
Utilisez cette commande "4-en-1" pour générer tout ce qui concerne vos articles :

### commande : php artisan make:model Post -mfs 
    (Modèle + Migration + Factory + Seeder) 
### Resultat :
alpha@alpha-11e:~/Documents/php/dont/myfirst-app$ php artisan make:model Post -mfs

   INFO  Model [app/Models/Post.php] created successfully.  

   INFO  Factory [database/factories/PostFactory.php] created successfully.  

   INFO  Migration [database/migrations/2026_02_07_112040_create_posts_table.php] created successfully.  

   INFO  Seeder [database/seeders/PostSeeder.php] created successfully.  

### Creation de la table Post
 php artisan db:seed --class=PostSeeder
 alpha@alpha-11e:~/Documents/php/dont/myfirst-app$ php artisan migrate

   INFO  Running migrations.  

  2026_02_07_112040_create_posts_table ........................................ 23.35ms DONE
### Remplir la base de donnes avec les donnnees aleatoire

php artisan db:seed --class=PostSeeder


alpha@alpha-11e:~/Documents/php/dont/myfirst-app$ php artisan db:seed --class=PostSeeder

   INFO  Seeding database.  

alpha@alpha-11e:~/Documents/php/dont/myfirst-app$ 