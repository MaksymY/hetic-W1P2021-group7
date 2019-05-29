<?php while ($msg= $msgs->fetch()) {?>
    <b><?= $msg['name'] ?></b> : <span class = "message"><?= $msg['message'] ?> <br>
<?php } ?>