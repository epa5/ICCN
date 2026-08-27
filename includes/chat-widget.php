<?php
$racineScript = $racine ?? '';
?>
<style>
#chat-bulle{position:fixed;bottom:24px;right:24px;z-index:9998;width:60px;height:60px;border-radius:50%;background:#25D366;border:none;cursor:pointer;display:flex;align-items:center;justify-content:center;box-shadow:0 4px 14px rgba(0,0,0,.35);transition:transform .2s}
#chat-bulle:hover{transform:scale(1.1)}
#chat-fenetre{position:fixed;bottom:96px;right:24px;z-index:9999;width:340px;max-width:calc(100vw - 32px);height:460px;background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 8px 30px rgba(0,0,0,.3);display:none;flex-direction:column;font-family:Arial,sans-serif}
#chat-fenetre.ouvert{display:flex}
.chat-entete{background:#075E54;color:#fff;padding:14px 16px;display:flex;align-items:center;gap:10px}
.chat-entete .avatar{width:38px;height:38px;border-radius:50%;background:#25D366;display:flex;align-items:center;justify-content:center;font-size:18px}
.chat-entete b{display:block;font-size:14px}
.chat-entete small{opacity:.85;font-size:11px}
.chat-messages{flex:1;overflow-y:auto;padding:14px;background:#ece5dd}
.chat-msg{max-width:80%;padding:8px 12px;border-radius:12px;margin-bottom:8px;font-size:13px;line-height:1.4;word-wrap:break-word}
.chat-msg.visiteur{background:#dcf8c6;margin-left:auto;border-bottom-right-radius:3px}
.chat-msg.proprietaire{background:#fff;margin-right:auto;border-bottom-left-radius:3px}
.chat-msg .heure{display:block;font-size:9px;color:#888;text-align:right;margin-top:2px}
.chat-saisie{display:flex;border-top:1px solid #ddd;background:#fff}
.chat-saisie input{flex:1;border:none;outline:none;padding:13px 14px;font-size:13px}
.chat-saisie button{border:none;background:#25D366;color:#fff;width:52px;font-size:17px;cursor:pointer}
</style>

<button id="chat-bulle" aria-label="Ouvrir le chat">
    <svg viewBox="0 0 32 32" width="30" height="30" fill="#fff" xmlns="http://www.w3.org/2000/svg"><path d="M16 3C9.4 3 4 8.4 4 15c0 2.1.6 4.2 1.7 6L4 29l8.2-1.6c1.2.6 2.5.9 3.8.9h0c6.6 0 12-5.4 12-12S22.6 3 16 3zm0 21.9c-1.2 0-2.3-.3-3.4-.8l-.7-.4-4.9 1 1-4.7-.4-.7c-.7-1.1-1-2.4-1-3.7 0-5.2 4.2-9.4 9.4-9.4s9.4 4.2 9.4 9.4-4.2 9.3-9.4 9.3z"/></svg>
</button>

<div id="chat-fenetre">
    <div class="chat-entete">
        <div class="avatar">🦍</div>
        <div><b>Parc National des Virunga</b><small>● en ligne — réponses par WhatsApp</small></div>
    </div>
    <div class="chat-messages" id="chat-zone"></div>
    <div class="chat-saisie">
        <input type="text" id="chat-champ" placeholder="Écrivez votre message…" maxlength="1000">
        <button id="chat-envoyer" aria-label="Envoyer">➤</button>
    </div>
</div>

<script>
(function () {
    var bulle = document.getElementById('chat-bulle');
    var fenetre = document.getElementById('chat-fenetre');
    var zone = document.getElementById('chat-zone');
    var champ = document.getElementById('chat-champ');
    var bouton = document.getElementById('chat-envoyer');
    var base = <?php echo json_encode($racineScript); ?>;

    var session = localStorage.getItem('iccn_chat_session');
    if (!session) {
        session = 'v-' + Math.random().toString(36).slice(2) + Date.now().toString(36);
        localStorage.setItem('iccn_chat_session', session);
    }

    function ajouterMsg(sender, texte, heure) {
        var div = document.createElement('div');
        div.className = 'chat-msg ' + sender;
        div.textContent = texte;
        if (heure) { var h = document.createElement('span'); h.className='heure'; h.textContent=heure; div.appendChild(h); }
        zone.appendChild(div);
        zone.scrollTop = zone.scrollHeight;
    }

    function charger() {
        fetch(base + 'includes/chat-recevoir.php?session=' + encodeURIComponent(session))
            .then(function (r) { return r.json(); })
            .then(function (d) { (d.messages || []).forEach(function (m) { ajouterMsg(m.sender, m.text, m.time); }); })
            .catch(function () {});
    }

    function envoyer() {
        var texte = champ.value.trim();
        if (!texte) return;
        champ.value = '';
        ajouterMsg('visiteur', texte, new Date().toTimeString().slice(0,5));
        fetch(base + 'includes/chat-envoyer.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ session: session, message: texte })
        }).catch(function () {});
    }

    bulle.addEventListener('click', function () {
        fenetre.classList.toggle('ouvert');
        if (fenetre.classList.contains('ouvert')) { charger(); champ.focus(); }
    });
    bouton.addEventListener('click', envoyer);
    champ.addEventListener('keydown', function (e) { if (e.key === 'Enter') envoyer(); });
    setInterval(charger, 4000);
})();
</script>
