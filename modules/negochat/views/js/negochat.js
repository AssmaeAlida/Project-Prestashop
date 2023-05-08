$(document).ready(function() {
    // Récupérer le formulaire de negochat
    var form = $('#negochat-form');

    // Récupérer la zone de texte de saisie du message
    var input = $('#negochat-input');

    // Récupérer la zone d'affichage des messages
    var messages = $('#negochat-messages');

    // Fonction pour ajouter un message à la zone d'affichage des messages
    function addMessage(message) {
        messages.append('<div class="message">' + message + '</div>');
    }

    // Écouter l'événement de soumission du formulaire
    form.submit(function(event) {
        // Empêcher l'envoi du formulaire par défaut
        event.preventDefault();

        // Récupérer le message saisi
        var message = input.val();

        // Ajouter le message à la zone d'affichage des messages
        addMessage(message);

        // Effacer la zone de saisie du message
        input.val('');
    });
});
