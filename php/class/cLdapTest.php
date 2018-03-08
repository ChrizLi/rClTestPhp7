<html>
<head>
    <title>cLdapTest.php</title>
</head>
<body>
<?php
    $host = "AL13";
    $user = "cl";
    $password="cl";
    $domain="AL13";
    $ad = ldap_connect("ldap://{$host}") or die('Could not connect to LDAP server.');
    //ldap_set_option($ad, LDAP_OPT_PROTOCOL_VERSION, 3);
    //ldap_set_option($ad, LDAP_OPT_REFERRALS, 0);
    ldap_bind($ad) or die('Could not bind to AD.');
    
?>
</body>
</html>
