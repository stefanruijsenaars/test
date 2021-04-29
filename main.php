<?php
$res = file_get_contents("test.json");
file_put_contents('test.json.gz',  gzcompress($res, 9));
