const sendButton = document.getElementById('send-button');
const messageInput = document.getElementById('message-input');
const chatArea = document.getElementById('chat-area');
const typingIndicator = document.getElementById('typing-indicator');
const emojiButton = document.getElementById('emoji-button');
const emojiPicker = document.getElementById('emoji-picker');
const fileUpload = document.getElementById('file-upload');

// Send message
function sendMessage() {
    const messageText = messageInput.value.trim();
    if (messageText === "") return;

    // Create a new message div
    const message = document.createElement('div');
    message.classList.add('message', 'sent');
    message.innerText = messageText;

    // Append the message to the chat area
    chatArea.appendChild(message);
    chatArea.scrollTop = chatArea.scrollHeight;

    // Clear the input
    messageInput.value = '';
}

// Typing indicator
messageInput.addEventListener('input', function() {
    typingIndicator.style.display = 'block';
    setTimeout(() => {
        typingIndicator.style.display = 'none';
    }, 2000);
});

// Send message on button click
sendButton.addEventListener('click', sendMessage);

// Send message on pressing Enter
messageInput.addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        sendMessage();
    }
});

// Emoji picker functionality
emojiButton.addEventListener('click', function() {
    emojiPicker.style.display = emojiPicker.style.display === 'flex' ? 'none' : 'flex';
});

// Insert emoji into the input
document.querySelectorAll('.emoji').forEach(emoji => {
    emoji.addEventListener('click', function() {
        messageInput.value += this.innerText;
    });
});

// File upload
document.getElementById('image-upload').addEventListener('click', function() {
    fileUpload.click();
});

// Show image preview before sending
fileUpload.addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file && file.type.startsWith('image/')) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const img = document.createElement('img');
            img.src = e.target.result;
            img.style.maxWidth = '100px';
            img.style.margin = '10px';
            img.classList.add('message', 'sent');
            chatArea.appendChild(img);
            chatArea.scrollTop = chatArea.scrollHeight;
        };
        reader.readAsDataURL(file);
    }
});
