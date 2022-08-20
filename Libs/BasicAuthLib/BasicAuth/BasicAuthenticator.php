<?php 

namespace BasicAuth;
class BasicAuthenticator
{
      /**
       * @var string
       */
      public function basicLogin(string $username,string $password){
            return $username . $password;
      }
}