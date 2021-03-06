<?php
namespace Xinliang\Maximtop\Contracts;


use Illuminate\Support\Facades\Log;

trait MaximUser
{

    public function register($username,$password)
    {
        $url = $this->api_endpoint . 'user/register/v2';
        $params = [
            'username' => $username,
            'password' => $password,
        ];
        $header = [
//            'access-token' => $this->access_token,
            'app_id' => $this->appid,
        ];

        return $this->postjson($url,$params,$header);

    }




}