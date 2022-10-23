<?php
$text = 'On friday $we were $in our school';
echo preg_replace("#([\$]\w+)#", "<b>$1</b>", $text);
