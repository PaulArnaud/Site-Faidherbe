<?php
    require('../../Configuration/Connexion.php');
    $result = Connect::$pdo->query('SELECT ID_Klass,NomKlass,AnneeKlass FROM klass');
    $data = $result->fetchAll(PDO::FETCH_ASSOC);
    foreach ($data as $value) {
        echo '<tr id="'.$value['ID_Klass'].'">';
        echo '<td>'.$value['AnneeKlass'].'</td>';
        echo '<td>'.$value['NomKlass'].'</td>';
        echo '<td> <a class="btn btn-outline-light" href=#>Chiffre</a>';
        echo '</tr>';
    }
    $result->closeCursor();
    unset($result);
?>