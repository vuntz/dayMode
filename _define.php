<?php
/**
 * @brief dayMode, a plugin for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Plugins
 *
 * @author Pep and contributors
 *
 * @copyright GPL-2.0 https://www.gnu.org/licenses/gpl-2.0.html
 */
if (!defined('DC_RC_PATH')) {
    return;
}

$this->registerModule(
    'dayMode',
    'Provides daily archives and an associated calendar widget',
    'Pep and contributors',
    '2.3.1',
    [
        'requires'    => [['core', '2.24']],
        'permissions' => dcCore::app()->auth->makePermissions([
            dcAuth::PERMISSION_ADMIN,
        ]),
        'type'        => 'plugin',
        'settings'    => [
            'blog' => '#params.daymode',
        ],

        'details'     => 'http://plugins.dotaddict.org/dc2/details/dayMode',
        'support'     => 'https://github.com/franck-paul/dayMode',
        'repository'  => 'https://raw.githubusercontent.com/franck-paul/dayMode/master/dcstore.xml',
    ]
);
