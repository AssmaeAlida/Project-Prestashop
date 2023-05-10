function addQuestionToInput(question) {
    var input = document.getElementById("negochat-input");
    input.value = question;
}$(document).ready(function() {
    // Récupérer le formulaire de negochat
    var form = $('#negochat-form');

    // Récupérer la zone de texte de saisie du message
    var input = $('#negochat-input');

    // Récupérer la zone d'affichage des messages
    var messages = $('#negochat-messages');

    // Fonction pour ajouter un message à la zone d'affichage des messages
    function addMessage(message, sender) {
        var className = sender ? 'sender' : 'receiver';
        messages.append('<div class="message ' + className + '"><p>' + message + '</p></div>');
    }

    // Écouter l'événement de soumission du formulaire
    form.submit(function(event) {
        // Empêcher l'envoi du formulaire par défaut
        event.preventDefault();

        // Récupérer le message saisi
        var message = input.val();

        // Ajouter le message à la zone d'affichage des messages
        addMessage(message, true);

        // Effacer la zone de saisie du message
        input.val('');
    });

    // Exemple d'ajout de message d'un expéditeur fictif
    addMessage('Hello, comment ça va ?', false);
});