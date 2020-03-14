<?php

namespace Xinliang\Maximtop;

use Xinliang\Maximtop\Contracts\MaximToken;
use Xinliang\Maximtop\Contracts\MaximUser;
use Xinliang\Maximtop\Traits\HasHttpRequest;

class Maximtop
{

    // 接口地址域名
    public $api_endpoint = null;

    public $appid = null;

    public $access_token = null;

    // 目标数组 token、好友、文件、消息、用户、群
    public $target_array = ['token','roster','file','message','user','group'];


    use HasHttpRequest;

    use MaximToken;
    /***********************   用户管理   **********************************/
    use MaximUser;

    public function __construct()
    {
        $this->api_endpoint     = config('maximtop.api_endpoint').'/';
        $this->appid            = config('maximtop.appid');
        $this->access_token     = config('maximtop.access_token');
    }











}