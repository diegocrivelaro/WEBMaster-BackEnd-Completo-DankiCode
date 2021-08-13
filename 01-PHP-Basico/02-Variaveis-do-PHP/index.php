<?php
echo '<pre>'; /* Tag pula linhas */
print_r($_SERVER);
echo '</pre>';

print $_SERVER["SERVER_NAME"];
echo '<br>';
print $_SERVER["PHP_SELF"];
echo '<br>';
print $_SERVER["SERVER_SOFTWARE"];
echo '<br>';
print $_SERVER["SERVER_PROTOCOL"];
echo '<br>';
print $_SERVER["DOCUMENT_ROOT"];
echo '<br>';
?>