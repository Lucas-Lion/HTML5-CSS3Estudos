<?php
session_start();
$_SESSION['authenticated'] = 'conectado';
$username = $_POST["usuario"];
$password = $_POST["senha"];

$ldap_server = "10.46.246.1";
$dominio = "@desportos.ba";
$user = $username.$dominio;
$ldap_porta ="389";
$ldap_pass = $password;
ldap_set_option(NULL, LDAP_OPT_DEBUG_LEVEL, 7);
$ldapcon = ldap_connect($ldap_server,$ldap_porta) or die("Não foi possivel conectar o LDAP Server.");
 
if($ldapcon){

        ldap_set_option($ldapcon, LDAP_OPT_PROTOCOL_VERSION, 3);
        ldap_set_option($ldapcon, LDAP_OPT_REFERRALS, 0);

        $bind = @ldap_bind($ldapcon,$user,$ldap_pass);
        if($bind){
                header("location: sistema.php");
        }else{
                $_SESSION['login_error'] = 'Usuário ou senha inválida';
                header("location: index.php");
                die();
        } 
        ldap_close($ldapcon);
}
?>