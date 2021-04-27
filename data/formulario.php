<?php 
    $cuerpo= '';
    $email='pedidos@tiendavirtualcoder.com';

    $cuerpo .= "Pedido generado correctamente desde la web";
    $cuerpo .= "\n";

    $cabeceras = 'Reply-To:' .$email . "\r\n" .                     
                 'MIME-Version: 1.0' . "\r\n".
                 'Content-type: text/html; charset=utf-8' . "\r\n".
                 'X-Mailer: PHP/' . phpversion();


    //DIRECCIÓN
    $enviarA = 'sec.rojas@gmail.com';
    $asunto = 'Realizaron un pedido desde la web de la tienda';

    $success = mail($enviarA,$asunto,$cuerpo,$cabeceras);
?>
