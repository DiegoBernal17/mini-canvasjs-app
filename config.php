<?php
 $host = 'sql204.hostlibre.ml';
 $dbname = 'teolo_21371814_graficasdb';
 $username = 'teolo_21371814';
 $password = 'olade567';
 
$link = new \PDO(   'mysql:host='.$host.';dbname='.$dbname.';charset=utf8mb4',
                    $username, //'root',
                    $password, //'',
                    array(
                        \PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        \PDO::ATTR_PERSISTENT => false
                    )
                );
?>