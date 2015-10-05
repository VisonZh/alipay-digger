<?php
require_once dirname(__FILE__) . '/Lib/Alipay.php';
$alipay = new Alipay(array(
    'cookie' => 'mobileSendTime=-1; credibleMobileSendTime=-1; ctuMobileSendTime=-1; riskMobileBankSendTime=-1; riskMobileAccoutSendTime=-1; riskMobileCreditSendTime=-1; riskCredibleMobileSendTime=-1; riskOriginalAccountMobileSendTime=-1; cna=5lWGDj3CRlECAXTzPLzxuI9c; BIG_DOOR_SHOWTIME=201595; ctoken=ddek3mTT54f69hubr3ujY+kY$YupWI; ALIPAYJSESSIONID=RZ13Y8zA1XAjqS7YRsAwm3mGJ6io3ZauthRZ13GZ00; zone=RZ13B; session.cookieNameId=ALIPAYJSESSIONID; spanner=ahq948gbLTSS2VHoOUsNG6bqFNJKXMMQ4EJoL7C0n0A=', //支付宝Cookie
    'notify' => 'http://bce.nodeap.com/index.php', //通知地址
    'token' => 'please_input_your_token'    //安全密钥
    ));

// var_dump($alipay->db());
while (true) {
    echo date('Y-m-d H:i:s') . "\n";
    $alipay->run();
    usleep(5000000);
}
