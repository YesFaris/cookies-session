<?php
class AuthView{
    public function showLoginForm(){
echo <<<LOGIN
<form action= ' ../ ' method = 'post' >
<input type = ' text ' name = ' username' placeholder = ' votre nom'>
<input type = ' password ' name = ' password ' placeholder = ' votre mot de passe>
<button type= 'submit'> S'inscrire </button>
</form>
LOGIN;
    }
    public function showSignupForm(){
        echo <<< SIGNUP
        <form action= 'index ' method = 'post' >
        <input type = ' text ' name = ' username' placeholder = ' votre nom'>
        <input type = ' password ' name = ' password ' placeholder = ' votre mot de passe>
        <button type= 'submit'> S'inscrire </button>
        </form>
        SIGNUP;
    }
}