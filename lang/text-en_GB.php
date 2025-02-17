<?php
/**
 * Этот файл является частью расширения модуля веб-приложения GearMagic.
 * 
 * Пакет английской (британской) локализации.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    '{name}'        => 'Audit settings',
    '{description}' => 'Date and time format',
    '{permissions}' => [
        'any'  => ['Full access', 'Configuring Date and time format']
    ],

    // Form: поля
    'Record storage' => 'Record storage',
    'Database' => 'Database',
    'Maximum number of entries' => 'Maximum number of entries',
    'The maximum number of audit records in the vault. If it exceeds the maximum, the entries are deleted.' 
        => 'The maximum number of audit records in the vault. If it exceeds the maximum, the entries are deleted.',
    'Audit service enabled' => 'Audit service enabled',
    'The audit includes the following information' => 'The audit includes the following information',
    'user information' => 'user information',
    'request controller information' => 'request controller information',
    'request module information' => 'request module information',
    'request parameter information' => 'request parameter information',
    'user device information' => 'user device information',
    'reset settings' => 'reset settings',
    // Form: сообщения
    'Save settings' => 'Save settings',
    'Reset settings' => 'Reset settings',
    'settings saved {0} successfully' => 'settings saved "<b>{0}</b>" successfully',
    'settings reseted {0} successfully' => 'settings reseted "<b>{0}</b>" successfully',
    // Form: сообщения / ошибки
    'Cannot change settings (wrong tab id specified)' => 'Cannot change settings (wrong tab id specified).',
    'No custom date format specified' => 'No custom date format specified',
    'No custom time format specified' => 'No custom time format specified'
];
