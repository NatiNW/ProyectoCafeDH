
<?php
class BaseDeDatos {
    public static function buscarUsuarioEmail(string $email): array
    {

        $usuarioBD = ['email' => $email, 'password' => password_hash('123456', PASSWORD_DEFAULT), 'id' => 1, 'avatar' => ''];
        return $usuarioBD;
