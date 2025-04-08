function toggleChat() {
    var chat = document.getElementById("chatContainer");
    chat.style.display = chat.style.display === "block" ? "none" : "block";
}
function sendMessage() {
    var input = document.getElementById("userInput");
    var message = input.value.trim();
    if (message) {
        var chatBody = document.getElementById("chatBody");
        chatBody.innerHTML += '<p class="user-message">' + message + '</p>';
        input.value = "";
        fetch('chatbot.php', {
            method: 'POST',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'},
            body: 'message=' + encodeURIComponent(message)
        })
        .then(response => response.text())
        .then(reply => {
            chatBody.innerHTML += '<p class="bot-message">' + reply + '</p>';
            chatBody.scrollTop = chatBody.scrollHeight;
        });
    }
}
