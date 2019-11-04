function envoie() {

    event.preventDefault(); //empeche le raffranchissement

    var post_titre = $("#titre").val(); 
    var post_editeur = $("#editeur").val();
    var post_prix = $("#prix").val();
    var post_resume = $("#resume").val();

    $.ajax({
        method: "POST", // la methode utilise par le forumalaire
        url: "ajout.php", //la cible du formulaire pour traitre
        data: { 
            titre : post_titre,
            editeur : post_editeur,
            prix : post_prix,
            resume : post_resume
        },
        dataType: "json"
      })
    .done(function(data) {
        affichage(data);  //affichage les données (voire plus bas)
    })
    .fail(function() {
        alert("erreur 404");
    })
};


function suppression(id) {

    event.preventDefault(); //empeche le raffranchissement

    $.ajax({
       method: "POST", // la methode utilise par le forumalaire
       url: "supprimer.php", //la cible du formulaire pour traitre
       data: { 
           id : id
       },
       dataType: "json" // le type de données qu'on envoi
     })
    .done(function(data) {
        $("#jeu_"+data.id).fadeOut("slow"); //fais disparaitre les elements
    })
    .fail(function() {
       alert("erreur 404 - js");
    })
};

function affichage(data) { //fonction affichage (quand on "submit" le formulaire)
    $('#test').append(
        "<p>" +
        'Titre : ' + data.titre +
        '. Éditeur : ' + data.editeur +
        '. Prix : ' + data.prix +
        ' €. Resumer : ' + data.resume + '. ' 
        + "<button onclick='suppression( " + data.id + " )'>Supprimer</button>"
        + "</p>"
    );
}
