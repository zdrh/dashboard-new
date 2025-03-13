<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;


class Alert extends BaseConfig
{
    public array $message = array(
        'dbAddSuccess' => "Záznam byl přidán",
        'dbEditSuccess' => "Záznam byl aktualizován",
        'dbDelSuccess' => "Záznam byl smazán",
        'dbAddError' => "Záznam nebyl přidán",
        'dbEditError' => "Záznam nebyl aktualizován",
        'dbDelError' => "Záznam nebyl smazán",
        'loginError' => "Špatné uživatelské jméno nebo heslo",
        'logoutSuccess' => "Uživatel byl odhlášen",
        'logoutError' => "Odhlášení se nepodařilo",
        'filterError' => "Musíš se nedjříve přihlásit",
    );

    public array $class = array(
        'true' => 'alert alert-success',
        'false' => 'alert alert-danger'
    );
}
