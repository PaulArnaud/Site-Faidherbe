<?php
$url = '';
if (isset($_GET['url'])){
    $url = explode('/',$_GET['url']);
}
if ($url == ''){
    require('/view/pageprincipale/main.php');
}
else if ($url[0] == 'chants'){
    require('/view/pagechants/chants.php');
}
else {
    require('/view/pageprincipale/main.php');
}
?>