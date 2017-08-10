<?php
try{
	$dsn = "mysql:host=localhost;dbname=tzq;charset=utf8;";
	$pdo = new PDO($dsn,'root','');
}catch(PDOException $e){
	echo $e->getMessage();
}
try{
	$sql = "select bid,title,create_time,content,username from php_blog where first=0";
	$result = $pdo->query($sql);
	var_dump($result->fetchAll());
} catch (Exception $e) {
	 echo $e->getMessage();
}
try{
	$sql = "select bid,title,create_time,username from php_blog where first=1";
	$result = $pdo->query($sql);
	var_dump($result->fetchAll());
} catch (Exception $e) {
	 echo $e->getMessage();
}
try{
	$res = $pdo->exec("delete from php_blog where bid in(33)");
} catch (Exception $e) {
	 echo $e->getMessage();
}
try {

	$res = $pdo->exec("update php_blog set is_tui=0 where bid=32");
} catch (PDOException $e) {
	echo $e->getMessage();

}
try {
	$sql = "insert into php_blog (content,title,username,tid) values(?,?,?,?)";
	$stmt = $pdo->prepare($sql);

	//执行
	$stmt->execute(['哈哈哈','yyyy','谭泽乾',0]);


} catch (Exception $e) {
	
}