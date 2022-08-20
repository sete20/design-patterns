<?php
namespace TokenAuth;

class TokenAuthenticator
{

    
      public function tokenLogin(string $token,string $key){
            return base64_encode($this->token.'-'.$this->key) ;
      }
}