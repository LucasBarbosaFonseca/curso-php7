<?php

    /* json_decode() que pega um arquivo JSON e transforma em array */

    $arquivo_json = '[{"nome":"Lucas","idade":23},{"nome":"Laura","idade":28}]';

    $data = json_decode($arquivo_json, true);

    var_dump($data);

?>