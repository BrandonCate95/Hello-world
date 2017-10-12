<?php
echo '1132414324dsafadsfsafa!!!!!';

//$content = '&lt;html&gt; ' . $_POST['content'] . '&lt;/html&gt;';
$fileName = $_POST['pageName'] . ".html";
$handle = fopen($fileName, 'w') or die('Cannot open file:  '.$fileName);
fclose($handle);

file_put_contents($fileName, $_POST['content']);

?>