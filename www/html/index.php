<?=

$dsn = 'mysql:dbname=test; host=php_db_1; charset=utf8';
$usr = 'root';
$passwd = 'secret';

try {
    $db = new PDO($dsn, $usr, $passwd);
    print '接続成功';
} catch (PDOException $e ){
    die("接続エラー: {$e->getMessage()}");
} finally {
    $db = null;
}

?>