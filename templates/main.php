<?php

\OCP\Util::addStyle('helloworld', 'helloworld');

?>

<div id="hello">
    Here is our glorious "HELLO WORLD" !!
</div>

<div id="footer">
    <p>You're user id #<?= $_['uid']; ?> (last log : <?= $_['userLastLogin']; ?>) - HelloWorld version #<?= $_['appVersion']; ?></p>
</div>
