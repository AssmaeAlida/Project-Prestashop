{if $display_header}
    <div id="negochat" class="text">
        <div id="negochat-messages">
        </div>
        <form id="negochat-form">
            <div id="negochat-questions">
                <button type="button" class="negochat-question" onclick="addQuestionToInput('Pouvez-vous baisser le prix ?')">Pouvez-vous baisser le prix ?</button>
                <button type="button" class="negochat-question" onclick="addQuestionToInput('Pouvez-vous offrir une réduction supplémentaire ?')">Pouvez-vous offrir une réduction supplémentaire ?</button>
                <button type="button" class="negochat-question" onclick="addQuestionToInput('Y a-t-il des options de paiement flexibles ?')">Y a-t-il des options de paiement flexibles ?</button>
                <button type="button" class="negochat-question" onclick="addQuestionToInput('Pouvez-vous livrer plus tôt ?')">Pouvez-vous livrer plus tôt ?</button>
            </div>
            <input type="text" id="negochat-input" placeholder="Type your message here...">
            <button type="submit">Send</button>
        </form>

        </div>
    </div>
{/if}