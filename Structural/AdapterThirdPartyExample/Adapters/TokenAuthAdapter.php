<?php
namespace Structural\AdapterThirdPartyExample\Adapters;
use Structural\AdapterThirdPartyExample\Interfaces\AuthenticatorInterface;
use TokenAuth\TokenAuthenticator;
class TokenAuthAdapter implements AuthenticatorInterface
{
    /**
     * @var TokenAuthenticator
     */
    private $authenticator;

    public function __construct(TokenAuthenticator $authenticator)
    {
        $this->authenticator = $authenticator;
    }

    public function login(array $params)
    {
       return $this->authenticator->tokenLogin($params['key'],$params['token']);
    }
}