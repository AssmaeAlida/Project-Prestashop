{if $display_header}
    <div id="negochat" class="text-center">
        <form id="negochat-form">
            <input type="text" id="negochat-input" placeholder="Type your message here...">
            <button type="submit">Send</button>
        </form>
        <div id="negochat-messages">
            <div id="negochat-message" class="#negochat-message-sender">
                <p>Message envoyé</p>
                <time>10:00 AM</time>
            </div>
            <div id="negochat-message" class="#negochat-message-receiver">
                <p>Message reçu</p>
                <time>10:05 AM</time>
            </div>
        </div>
    </div>
{/if}
