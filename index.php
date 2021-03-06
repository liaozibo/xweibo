<?php
session_start();

include_once( 'config.php' );
include_once( 'saetv2.ex.class.php' );

$o = new SaeTOAuthV2( WB_AKEY , WB_SKEY );

$code_url = $o->getAuthorizeURL( WB_CALLBACK_URL );

?>
<!DOCTYPE html> 
<html> 
  <head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>微博批量删</title> 
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/xweibo.css" />
  </head>

  <body>
    <div class="container">
      <div class="row">
        <div class="span12 auth">
          <h1>这个工具可以帮助你批量删除微博。它很乖 :)</h1>
          <a href="<?=$code_url?>"><img src="weibo_login.png" alt="用微博账号登录" /></a>
        </div>
      </div>

      <div class="footer">
        <p>Built with all the love in the world by <a target="_blank" href="http://weibo.com/zhuoqun">@zhuoqun</a>. Powered by <a target="_blank" href="http://twitter.github.com/bootstrap/index.html">Bootstrap</a>.</p>
      </div>
    </div>

  </body>
</html>
