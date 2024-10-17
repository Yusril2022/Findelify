<script src="<?= base_url(); ?>/js/dash-script.js"></script>
<script>
    function openModal() {
    document.getElementById('discussionModal').style.display = 'flex';
}

function closeModal() {
    document.getElementById('discussionModal').style.display = 'none';
}

function sendMessage() {
    var input = document.getElementById('commentInput').value;
    if (input.trim() !== "") {
        var chatContainer = document.querySelector('.chat-container');
        var message = document.createElement('div');
        message.classList.add('message');
        message.innerHTML = `<p><strong>You:</strong> ${input}</p>`;
        chatContainer.appendChild(message);
        chatContainer.scrollTop = chatContainer.scrollHeight; // Auto-scroll to bottom
        document.getElementById('commentInput').value = ''; // Clear input
    }
}

</script>
</body>
</html>