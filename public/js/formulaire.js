FORM = {
  init: function() {
    $("#BUTform").on('click', FORM.send);
  },

  newsletter: 0,

  send: function() {
    var envoi = true;
    var elem = $(".elemform");
    for (var i = 0; i < elem.length; i++) {
      if ($(elem[i]).text() == "") {
        envoi = false;
      }
    }
    var regex = /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/;
    if($("#newsletter").is(':checked')) {
      FORM.newsletter = 1;
    }
    else {
      FORM.newsletter = 0;
    }
    if(envoi == true) {
      if(regex.test($("#mail").text())) {
        $.post(
          'index.php',
          {
            nom: $("#nom").text(),
            mail: $("#mail").text(),
            newsletter: FORM.newsletter,
            objet: $("#objet").text(),
            message: $("#message").text()
          },
          function success() {
            alert("Votre message a bien été envoyé.");
          }
        )
      } else {
        alert("Veuillez renseigner une adresse mail valide");
      }
    } else {
      alert("Veuillez compléter tous les champs");
    }
  }
}

window.onload = FORM.init();
