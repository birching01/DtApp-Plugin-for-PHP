<?php
/**
 * (c) Chaim <gc@dtapp.net>
 */

namespace DtApp\MiniProgram\WeChat;

use DtApp\MiniProgram\WeChatClient;

class Base extends WeChatClient
{
    /**
     * 登录凭证校验
     * @var string
     */
    protected static $jscode2session_url = 'https://api.weixin.qq.com/sns/jscode2session';

    /**
     * 用户支付完成后，获取该用户的 UnionId，无需用户授权
     * @var string
     */
    protected static $getpaidunionid_url = 'https://api.weixin.qq.com/wxa/getpaidunionid';

    /**
     * 获取小程序全局唯一后台接口调用凭据
     * @var string
     */
    protected static $token_url = 'https://api.weixin.qq.com/cgi-bin/token';
}
