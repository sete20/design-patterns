<?php
namespace Structural\AdapterThirdPartyExample\Models;
use TokenAuth\TokenAuthenticator;

class TokenLogin {

      public function tokenLogin(array $params)
      {
            $authenticator  = new TokenAuthenticator();
            return $authenticator->tokenLogin($params['username'], $params['password']);
      }
}