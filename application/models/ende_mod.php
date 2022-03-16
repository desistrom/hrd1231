<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ende_mod extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    var $cryptKey = "Lo4d2014exDS";
    
    function encode( $q ) {
        $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $this->cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $this->cryptKey ) ) ) );
        return( $qEncoded );
    }

    function decode( $q ) {
        $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $this->cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $this->cryptKey ) ) ), "\0");
        return( $qDecoded );
    }
}