console.log('code JS chargé');


// JE VAIS PRENDRE LE CONTROLE SUR LA BALISE form.ajax
var listeForm = document.querySelectorAll("form.ajax");
// ajouter un event listener sur l'événement submit
// pour chaque balise
listeForm.forEach(function(element){
    element.addEventListener("submit", function(event){

        // this
        // => une variable spéciale de JS
        // => elle a comme valeur this = element

        // bloque le formulaire
        event.preventDefault();
        // console.log('formulaire bloqué');

        // cool: je ne change plus de page
        // pas cool: je n'envoie plus les informations
        // => on va ajouter un appel à fetch
        // => permet d'envoyer un requête AJAX sans changer de page

        // avant d'envoyer la requête ajax
        // on va récuperer les infos remplies dans le formulaire
        console.log(this);
        // aspire les infos du formulaire
        var formData = new FormData(this);  // Programmation Orientée Objet
        // on va envoyer ces infos avec le fetch
        fetch('api-json.php', {
            method: 'POST',
            body: formData
        })
        .then(function(reponseServeur){
            // je transforme la réponse du serveur en objet JS
            return reponseServeur.json();
        })
        .then((objetJS) => {
            // en utilisant une fonction fléchée
            // => avantage: je garde le this d'avant
            // cool: je peux manipuler un objet JS
            console.log(objetJS);
            if (objetJS.confirmation)
            {
                // je vais copier la valeur dans la balise div.confirmation
                console.log(this); // balise form     
                // dans ma balise form je vais chercher la balise div.confirmation
                this.querySelector(".confirmation").innerHTML = objetJS.confirmation;
            }
        });

    })
});