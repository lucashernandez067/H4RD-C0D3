<?php
    class SecurityController extends Security {
        public function destroy(){
            unset($_SESSION['usuario']);
            session_destroy();
            header('location: ?c=login&m=index');
        }
    }
?>