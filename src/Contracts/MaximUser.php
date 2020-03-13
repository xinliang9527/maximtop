<?php
namespace Xinliang\Maximtop\Contracts;

trait MaximUser
{



    public function register($username,$password)
    {
        $url = $this->api_endpoint . 'user/register';
        $params = [
            'username' => $username,
            'password' => $password,
        ];

        return Http::postCurl($url, $params);
    }




}