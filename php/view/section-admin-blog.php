        <section>
            <h3>Admin: Blog</h3>
            <h3>(CRUD pour la table blog)</h3>
            <!-- la balise pre garde les espaces et les retours à la ligne: cool -->
            <pre>
Create
 Read
  Update
   Delete
   
On stocke les informations en Base De Données SQL (BDD)
* On va créer une BDD pour ce projet (dans phpmyadmin...)
        nom de la BDD:  cms
        charset:        utf8mb4_general_ci

* Dans la BDD cms, on va créer une table SQL pour gérer nos articles
        nom de la table SQL: blog
        colonnes de la table:
id                  INT             INDEX=PRIMARY       A_I(auto_increment)
titre               VARCHAR(160)
contenu             TEXT
photo               VARCHAR(160)
datePublication     DATETIME
categorie           VARCHAR(160)


TYPE DATETIME   YYYY-MM-DD HH:II:SS
* exemple:      2019-09-16 10:20:30
* => lisible par un être humain


INSERT INTO 
`blog` 
(`id`, `titre`, `contenu`, `photo`, `datePublication`, `categorie`) 
VALUES 
(NULL, 'titre1028', 'contenu1028', 'assets/images/photo1.jpg', '2019-09-16 10:28:00', 'blog');



            
            








            </pre>
        </section>
