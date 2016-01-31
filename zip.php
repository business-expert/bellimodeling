<?php

echo phpinfo();
echo "<pre>";print_r($_SERVER);

exec("zip project.zip -r /var/www/vhosts/bellinity.com/Bellinityv3/");

?>
