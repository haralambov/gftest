<?php

$cnf['administration']['namespace'] = 'Controllers\Admin';
$cnf['administration']['controllers']['index'] = 'test';
$cnf['administration']['controllers']['new'] = 'create';

$cnf['admin']['namespace'] = 'Controllers\Admin2';

$cnf['admin/users']['namespace'] = 'Controllers\Admin3';

$cnf['*']['namespace'] = 'Controllers';

return $cnf;
