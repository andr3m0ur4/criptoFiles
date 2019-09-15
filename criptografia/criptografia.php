<?php  
/**
 * This library is unsafe because it does not MAC after encrypting
 */
class UnsafeOpensslAES
{
    const METHOD = 'aes-256-cbc';

    public static function encrypt ( $message, $key ) {
        if ( mb_strlen ( $key, '8bit' ) !== 8 AND mb_strlen ( $key, '8bit' ) < 8 ) {
            throw new Exception ( "Precisa de uma chave que contenha 8 ou mais caracteres!" );
        }
        $ivsize = openssl_cipher_iv_length ( self::METHOD );
        $iv = openssl_random_pseudo_bytes ( $ivsize );

        $ciphertext = openssl_encrypt (
            $message,
            self::METHOD,
            $key,
            OPENSSL_RAW_DATA,
            $iv
        );

        return $iv . $ciphertext;
    }

    public static function decrypt ( $message, $key ) {
        if ( mb_strlen ( $key, '8bit' ) !== 8 AND mb_strlen ( $key, '8bit' ) < 8 ) {
            throw new Exception ( "Precisa de uma chave que contenha 8 ou mais caracteres!" );
        }
        $ivsize = openssl_cipher_iv_length ( self::METHOD );
        $iv = mb_substr ( $message, 0, $ivsize, '8bit' );
        $ciphertext = mb_substr ( $message, $ivsize, null, '8bit' );

        return openssl_decrypt (
            $ciphertext,
            self::METHOD,
            $key,
            OPENSSL_RAW_DATA,
            $iv
        );
    }
}
/*
$obj = new UnsafeOpensslAES ( );
$key = '@ndr3M0ur4';
//$valor_criptografado = $obj -> encrypt ( 'Texto para ser criptografado!!', $key );
//echo $valor_criptografado . '<br>' . PHP_EOL;
//$key = '@ndr3M0ra';
$arquivo = file ( 'criptografar.txt' );
$txt = '';
foreach ( $arquivo as $linha ) {
    $txt .= $linha;
}
$txt = $obj -> encrypt ( $txt, $key );
if ( $obj -> decrypt ( $txt, $key ) ) {
    $valor_descriptografado = $obj -> decrypt ( $txt, $key );
    echo $valor_descriptografado;
} else {
    echo 'Chave incorreta';
}
*/
?>