document.addEventListener('DOMContentLoaded', function () {
    const chatBtn = document.getElementById('open-chatbot');
    const chatBox = document.getElementById('chatbot-box');
    const chatClose = document.getElementById('close-chatbot');
    const chatBody = document.getElementById('chatbot-body');
    const chatInput = document.getElementById('chatbot-input');
    const chatSend = document.getElementById('send-chatbot');

    const qa = [
        {
            q: 'What is paracetamol used for?',
            a: 'Paracetamol is commonly used to reduce fever and relieve mild to moderate pain.'
        },
        {
            q: 'Can I buy antibiotics without a prescription?',
            a: 'No, antibiotics require a valid prescription from a registered medical practitioner.'
        },
        {
            q: 'How should I store my medicines?',
            a: 'Most medicines should be stored in a cool, dry place away from sunlight. Always check the label.'
        },
        {
            q: 'What should I do if I miss a dose?',
            a: 'If you miss a dose, take it as soon as you remember. If it is almost time for your next dose, skip the missed dose.'
        },
        {
            q: 'Can I take two medicines together?',
            a: 'Some medicines can interact with each other. Always consult your doctor or pharmacist before combining medicines.'
        },
        {
            q: 'How do I know if a medicine is genuine?',
            a: 'Buy medicines only from licensed pharmacies and check for proper packaging and expiry date.'
        }
    ];

    if (chatBtn) {
        chatBtn.onclick = () => chatBox.style.display = 'block';
    }
    if (chatClose) {
        chatClose.onclick = () => chatBox.style.display = 'none';
    }
    if (chatSend) {
        chatSend.onclick = sendMessage;
    }
    if (chatInput) {
        chatInput.addEventListener('keypress', function (e) {
            if (e.key === 'Enter') sendMessage();
        });
    }

    function sendMessage() {
        const userMsg = chatInput.value.trim();
        if (!userMsg) return;
        appendMessage('You', userMsg, 'user');
        chatInput.value = '';
        // Find answer
        const match = qa.find(qa => userMsg.toLowerCase().includes(qa.q.toLowerCase().slice(0, 10)));
        if (match) {
            setTimeout(() => appendMessage('Bot', match.a, 'bot'), 600);
        } else {
            setTimeout(() => appendMessage('Bot', 'Sorry, I can answer only medicine-related FAQs. Try asking about paracetamol, antibiotics, or medicine storage!', 'bot'), 600);
        }
        chatBody.scrollTop = chatBody.scrollHeight;
    }

    function appendMessage(sender, text, type) {
        const msgDiv = document.createElement('div');
        msgDiv.className = 'chatbot-msg ' + type;
        msgDiv.innerHTML = `<strong>${sender}:</strong> ${text}`;
        chatBody.appendChild(msgDiv);
        chatBody.scrollTop = chatBody.scrollHeight;
    }
});
