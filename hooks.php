 <?php
    $token = 'vj2cwie1znp4xmj3';
    $payload = file_get_contents('php://input');
    if (!$payload) {
        header('HTTP/1.1 400 Bad Request');
        die('HTTP HEADER or POST is missing.');
    }
    $content = json_decode($payload, true);
    if ($token && $content['secret'] != $token) {
        header('HTTP/1.1 403 Permission Denied');
        die('Permission denied.');
    }
    echo shell_exec("/data/httpd/www/tools/gitshell.sh");
    die("done " . date('Y-m-d H:i:s', time()));
