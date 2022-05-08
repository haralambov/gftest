<?php

$cnf['administration']['namespace'] = 'Controllers\Admin';
$cnf['administration']['controllers']['index']['to'] = 'index';
$cnf['administration']['controllers']['index']['methods']['new'] = '_new';

$cnf['administration']['controllers']['new']['to'] = 'create';

$cnf['admin']['namespace'] = 'Controllers\Admin2';

$cnf['admin/users']['namespace'] = 'Controllers\Admin3';

$cnf['*']['namespace'] = 'Controllers';

return $cnf;
