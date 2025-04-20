
document.addEventListener("DOMContentLoaded", function() {
    const cryptoForm = document.getElementById("cryptoForm");
    const inputText = document.getElementById("inputText");
    const encryptionKey = document.getElementById("encryptionKey");
    const encryptedText = document.getElementById("encryptedText");

    cryptoForm.addEventListener("submit", function(event){
        event.preventDefault();

        const text = inputText.value;
        const key = encryptionKey.value;

        if (text && key){
            const encrypted = CryptoJS.AES.encrypt(text, key).toString();
            encryptedText.textContent = encrypted;
        }
});


    const decryptoForm = document.getElementById("decryptoForm");
    const decryptionKey = document.getElementById("decryptionKey");
    const decryptedText = document.getElementById("decryptedText");

    decryptoForm.addEventListener("submit", function(event){
        event.preventDefault();

        const encrypted = encryptedText.textContent;
        const key = decryptionKey.value;

        if (encrypted && key) {
            const decrypted = CryptoJS.AES.decrypt(encrypted, key).toString(CryptoJS.enc.Utf8);
            decryptedText.textContent = decrypted;
        }
    });

    const clearButton = document.getElementById("clearButton");
    clearButton.addEventListener("click", function() {
        inputText.value = "";
        encryptionKey.value = "";
        decryptionKey.value = "";
        encryptedText.textContent = "";
        decryptedText.textContent = "";
    });

});