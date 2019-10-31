function envoie() {

    event.preventDefault(); //empeche le raffranchissement

    var post_titre = $("#titre").val(); 
    var post_editeur = $("#editeur").val();
    var post_prix = $("#prix").val();
    var post_resume = $("#resume").val();

    console.log(
        post_titre,
        post_editeur,
        post_prix,
        post_resume
    )

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
        console.log(data);
        $('#test').append(
            'Titre : ' + data.titre + '. Éditeur : ' + data.editeur + '. Prix : ' + data.prix + '. Resumer : ' + data.resume
        );        
    })
    .fail(function() {
        alert("erreur 404");
    })
};


function suppression(id) {
    alert(id);
}
