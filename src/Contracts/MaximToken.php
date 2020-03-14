<?php
namespace Xinliang\Maximtop\Contracts;


use Illuminate\Support\Facades\Log;

trait MaximToken
{

    public function tokenById($id,$password)
    {
        $url = $this->api_endpoint . 'token/id';
        $params = [
            'user_id' => $id,
            'password' => $password,
        ];
        $header = [
//            'access-token' => $this->access_token,
            'app_id' => $this->appid,
        ];

        return $this->postjson($url,$params,$header);

    }




}