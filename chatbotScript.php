 <script>
    
 const chatbotIframe = document.getElementById('chatbot-iframe');

    window.addEventListener('message', (event) => {
        if (event.data === 'disablePointerEvents') {
            chatbotIframe.style.width = "90px";
            chatbotIframe.style.height = "90px";
        } else if (event.data === 'enablePointerEvents') {
            chatbotIframe.style.width = "400px";
            chatbotIframe.style.height = "520px";
        }
    });

</script>
