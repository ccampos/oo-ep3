<?php

$configuration = array(
    'db_dsn'  => 'mysql:host=localhost;dbname=oo_battle',
    'db_user' => 'root',
    'db_pass' => 'cojecs22#',
);

require_once __DIR__.'/lib/Model/AbstractShip.php';
require_once __DIR__.'/lib/Model/Ship.php';
require_once __DIR__.'/lib/Model/RebelShip.php';
require_once __DIR__.'/lib/Service/BattleManager.php';
require_once __DIR__.'/lib/Service/ShipLoader.php';
require_once __DIR__.'/lib/Model/BattleResult.php';
require_once __DIR__.'/lib/Service/Container.php';