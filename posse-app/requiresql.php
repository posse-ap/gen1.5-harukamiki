<?PHP
try {
    $dsn = 'mysql:dbname=posseapp;host=db;charset=utf8mb4';
    $pdo = new PDO(
        $dsn,
        'mikiharu',
        'password',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ]
    );

}catch(PDOException $e){
    echo $e -> getMessage() . PHP_EOL;
    exit;
  };

$dsn = 'mysql:dbname=posseapp;host=db;charset=utf8mb4';
$pdo = new PDO($dsn, 'mikiharu', 'password');
 ?>