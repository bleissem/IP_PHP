<?PHP

function getIP()
{
    $clientIP  = @$_SERVER['HTTP_CLIENT_IP'];
    $forwardIP = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remoteIP  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($clientIP, FILTER_VALIDATE_IP))
    {
        return $clientIP;
    }
    elseif(filter_var($forwardIP, FILTER_VALIDATE_IP))
    {
        return $forwardIP;
    }
    else
    {
        return $remoteIP;
    }
}

echo getIP(); 
?>