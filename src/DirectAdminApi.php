<?php

namespace Gegeriyadi\DirectAdmin;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

trait DirectAdminApi
{
    public $base_uri;
    public $username;
    public $password;

    public function __construct()
    {
        $this->base_uri = "https://".config('directadmin.hostname').
            ":".config('directadmin.port')."/";
        
        $this->username = config('directadmin.username');
        $this->password = config('directadmin.password');
    }

    public function process($uri)
	{
        $client = new Client([
            'base_uri' => $this->base_uri
        ]);
        
        try {
            $response = $client->request('GET', $uri, [
                'auth' => [$this->username, $this->password]
            ]);

            $body = $response->getBody();

            parse_str($body, $result);

            return $result;

        } catch (GuzzleException $e) {

            //

        }
	}
}
