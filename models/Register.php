<?php 
    class Register extends DB{
        public function crear($data){
            try{

                // Encrypt password with SHA256
                $token = $data['password_user'];
                $cipher_method = 'aes-128-ctr';
                $enc_key = openssl_digest(php_uname(), 'SHA256', TRUE);
                $enc_iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($cipher_method));
                $crypted_token = openssl_encrypt($token, $cipher_method, $enc_key, 0, $enc_iv) . "::" . bin2hex($enc_iv);
                
                // Decrypt password with SHA256
                /*list($crypted_token, $enc_iv) = explode("::",$crypted_token);
                $cipher_method = 'aes-128-ctr';
                $enc_key = openssl_digest(php_uname(), 'SHA256',TRUE);                
                $token = openssl_decrypt($crypted_token, $cipher_method, $enc_key, 0, hex2bin($enc_iv));*/

                $stm = parent::connect()->prepare("INSERT INTO users(document_user, password_user, name_user, lastname_user, email_user, created_at, fk_role) VALUES(?,?,?,?,?,?,2)");
                $stm->bindParam(1, $data['document_user'], PDO::PARAM_STR);
                $stm->bindParam(2, $crypted_token, PDO::PARAM_STR);
                $stm->bindParam(3, $data['name_user'], PDO::PARAM_STR);
                $stm->bindParam(4, $data['lastname_user'], PDO::PARAM_STR);
                $stm->bindParam(5, $data['email_user'], PDO::PARAM_STR);
                $stm->bindParam(6, $data['created_at'], PDO::PARAM_STR);
                $stm->execute();
                unset($token, $cipher_method, $enc_key, $enc_iv);
            }
            catch(Exception $error){
                die("Error found in file models/Register.php".$error->getMessage());
            }
        }
    }
?>