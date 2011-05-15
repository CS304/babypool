<html>
<head>
<title>PHP Test</title>
</head>
<body>
<h1>Hello World</h1>
<?php

        $app_id = 101687373255985;
        $app_secret = "837be3c6280987fc5fb4bf4941188571";
        $my_url = "http://local.babypool/canvas";

        $session_start();
        $code = $_REQUEST["code"];

        if(empty($code)) {
            $_SESSION['state'] = md5(uniqid(rand(), TRUE)); //CSRF protection
            $dialog_url = "http://www.facebook.com/dialog/oauth?client_id="
           . $app_id . "&redirect_uri=" . urlencode($my_url) . "&state"
           . $_SESSION['state'];
           echo("<script> top.location.href='" . $dialog_url . "'</script>");
           }

          /* if($_REQUEST['state']== $_SESSION['state']) {
           $token_url = "https://graph.facebook.com/oauth/access_token?"
           . "client_id=" . $app_id . "&redirect_uri=" . urlencode($my_url)
           . "&client_secret=" . $app_secret . "&code=" . $code;
            $response = file_get_contents($token_url);
            $params = null;
            parse_str($response, $params);
            $graph_url $dialog_url . "'</script>");
            . $params[‘access_token’];

           }                                                                                                                                                                            $user = json_decode(file_get_contents($graph_url));
                                                                                                                                                                                        echo("Hello " . $user->name);
                                                                                                                                                                                                                                                                                                          }
            else {
                echo("The state does not match. You may be a victim of CSRF.");
            }*/

?>

<?php phpinfo(); ?>
</body>
</html>
