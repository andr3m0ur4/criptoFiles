<?php

if ( isset ( $_POST['name'] ) ) {
    require_once 'criptografia/criptografia.php';
    $name = $_POST['name'] . '.txt';
    $key = $_POST['key'];
    $arquivo = file ( $_FILES['file']['tmp_name'] );

    if ( $_POST['switch'] == 1 ) {
        $txt = '';
        foreach ( $arquivo as $linha ) {
            $txt .= $linha;
        }
        $cripto = new UnsafeOpensslAES ( );

        try {
            $encrypted = $cripto -> encrypt ( $txt, $key );
        } catch (Exception $e) {
            die("Erro: {$e->getMessage()}");
        }
        
        file_put_contents ( 'criptografia/' . $name, $encrypted );
        require_once 'criptografia/download.php';
        @unlink ( $arquivo );
    } else if ( $_POST['switch'] == 2 ) {
        $txt = '';
        foreach ( $arquivo as $linha ) {
            $txt .= $linha;
        }
        $cripto = new UnsafeOpensslAES ( );
        if ( $cripto -> decrypt ( $txt, $key ) ) {
            $decrypted = $cripto -> decrypt ( $txt, $key );
        } else {
            $decrypted = 'Chave Inválida!';
        }
        file_put_contents ( 'criptografia/' . $name, $decrypted );
        require_once 'criptografia/download.php';
        @unlink ( $arquivo );
    }
}
