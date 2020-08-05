<?php

namespace Gegeriyadi\LaravelDirectAdmin;

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

    public function process($method, $uri, $query = null)
	{
        $client = new Client([
            'base_uri' => $this->base_uri
        ]);
        
        try {
            $response = $client->request($method, $uri, [
                'auth' => [$this->username, $this->password],
                'query' => $query
            ]);

            $body = $response->getBody();

            parse_str($body, $result);

            return $result;

        } catch (GuzzleException $e) {

            //

        }
	}
}
