<?php
use Cake\Core\Configure;
use Cake\Core\Exception\MissingPluginException;
use Cake\Core\Plugin;

Configure::write('Theme', [
    'title' => 'PCC - UEM',
    'logo' => [

        'large' => '<b>PCC</b>UEM'
    ],
    'login' => [
        'show_remember' => true,
        'show_register' => true
    ],
    'folder' => ROOT
]);
