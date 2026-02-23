<?php
$host = '172.24.10.251';
$port = '3050';
$db_path = 'C:/SisDLL20/BD/DB_SIDIST.FDB'; 
$user = 'SYSDBA';
$pass = '290990';

try {
    $dsn = "firebird:dbname=$host/$port:$db_path;charset=UTF8";
    
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];

    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "Conexión establecida $host\n\n";

    $sql = "SELECT DISTINCT RDB\$RELATION_NAME AS TABLA 
            FROM RDB\$RELATIONS 
            WHERE RDB\$SYSTEM_FLAG = 0 
            AND RDB\$VIEW_BLR IS NULL 
            ORDER BY RDB\$RELATION_NAME";

    $stmt = $pdo->query($sql);
    
    echo "--- LISTA DE TABLAS ---\n";
    while ($row = $stmt->fetch()) {
        echo trim($row['TABLA']) . "\n";
    }

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}