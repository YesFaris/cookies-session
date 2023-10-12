##Communication HTTP client-serveur

Lorsque qu'un serveur communique avec un client, plusieurs en-têtes sont souvent échangés pour communiquer des infos supplémentaires. Voici quelques-uns des en-têtes couramment envoyés par un serveur PHP. 

1. Location : Utiisé pour rediriger le navigateur vers une autre page 'example' : l'en-tête 'Location: https://example.com' provoquera une redirection vers le site web https://exemple.com

2. Set-cookies: Utilisé pour définir des cookies dans le navigateur.
ex: 'Set-cookies: username= john' définit un cookie nommé "username" avec la "valeur" john

3. Content-Dispositon : Utilisé pour indiquer au navigateur de traiter le contenu.
ex : 'content-Disposition: attachment; filename= le_code.pdf' peut-être utilisé pour forcer le téléchargement d'un fichier avec le nom 'le_code.pdf'

4. Content-type : Définit le contenu de la réponse.
ex: "Content-type: text/html" indique la réponse est du code HTML. D'autres valeurs courantes incluent : application/json, image/jpeg.

5. Content-length: Indique la taille de la réponse en octets.
 
6. Expires: Indique la date et l'heure d'expiration de la réponse.
IL y en a une pléthore dont HTTP/1.1 xxx Status Code, Cache-control.


###############################
MVC
##################################
 
 Model View Controller

 Le Modèle-Vue -Controlleur est un modèle conception (design pattern) couramment utilisé dans le développement web pour aider à organiser le code et séparer différentes composantes d'une application. Il favorise l'idée de diviser une applicatiion en trois composants principaux, le Mdèle, la Vue et le Controlleur. Chaque composant a un rôle et des reponsabilités spéficfiques, ce qui rend la base de code plus organisées, plus facile à entretenir et plus évolutive.

 EXPLICATION DE CHACUN DES COMPOSANTS.

 1. Modèle : Le Modèle reprèsente les données et la logique de votre appplication. IL est responsable de la gestion des données telles que la récupération des données depuis une BDD, l'èxécution de calculs et l'application des règles métiers.


2. VUE:
La vue est responsable de l'affichage des données à l'utilisateur. C'est ce que l'utilisateur voit et avec qoi il interagit.La vue prend les donées du modèle et les présente sous une forme conviviale pour l'utilisateur , généralemen sous forme de HTML , CSS et parfois de javascript. Les vues sont pricipalement concernées par la présentation et ne contiennent généralement pas de logique complexe.

3. Contrôleur : 
Le Contrôleur agit comme un intermédiaire entrele Modèle et la Vue. Il reçoit les entrées de l'utilisateur depuis la vue, les traites, interragit avec le modèle pour récuperer ou mettre a jour les données, puis décide quel vue présenter à l'utilisateur avec les donnés mis à jour. Le Contrôleur contient donc la logique de l'application qui coordonne le flux de données entre le modèle et la Vue.

