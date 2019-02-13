<?php
define('DB_SERVER','localhost');
define('DB_NAME','tekkniac_blog');
define('DB_USER','tekkniac_indra');
define('DB_PASS','1ndr4n3w5,');



$conex=mysql_connect(DB_SERVER,DB_USER,DB_PASS) ;

mysql_select_db(DB_NAME,$conex);


?>
