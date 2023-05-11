{if $display_header}
    <div class="row">
        <div class="col-lg-2">
            <div class="card panell">
                <div class="card-header"><strong>Vendeur</strong></div>
                <div class="card-body">
                    <div id="negochat-responses">
                        <button type="button" class="negochat-response" onclick="addResponseToInput('En cours.')">En cours.</button>
                        <button type="button" class="negochat-response" onclick="addResponseToInput('Accepté.')">Accepté.</button>
                        <button type="button" class="negochat-response" onclick="addResponseToInput('Refusé.')">Refusé.</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div id="negochat" class="text">
                <div id="negochat-messages">
                </div>
                <form id="negochat-form">
                    <input type="text" id="negochat-input" placeholder="Type your message here...">
                    <button type="submit">Send</button>
                </form>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="card ">
                <div class="card-header italic "><strong>Acheteur</strong></div>
                <div class="card-body">
                    <div id="negochat-questions">
                        <button type="button" class="negochat-question" onclick="addQuestionToInput('Pouvez-vous baisser le prix ?')">Pouvez-vous baisser le prix ?</button>
                        <button type="button" class="negochat-question" onclick="addQuestionToInput('Y a-t-il une remise disponible ?')">Y a-t-il une remise disponible ?</button>
                        <button type="button" class="negochat-question" onclick="addQuestionToInput('Pouvons-nous discuter d un prix plus avantageux ?')">Pouvons-nous discuter d'un prix plus avantageux ? </button>
                        <button type="button" class="negochat-question" onclick="addQuestionToInput('Serait-il envisageable d avoir un prix préférentiel pour une commande en volume ?')">Serait-il envisageable d'avoir un prix préférentiel pour une commande en volume ?</button>
                        <button type="button" class="negochat-question" onclick="addQuestionToInput('Serait-il possible de bénéficier d un tarif spécial pour les clients fidèles ?')">Serait-il possible de bénéficier d'un tarif spécial pour les clients fidèles ?</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

{/if}

