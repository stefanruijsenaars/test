<?php

$res = "{\"foo\":\"bar\",\"baz\":\"long\"}}";
file_put_contents('data2.json.gz',  gzcompress($res, 9));
