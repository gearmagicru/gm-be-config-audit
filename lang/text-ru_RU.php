<?php
/**
 * Этот файл является частью расширения модуля веб-приложения GearMagic.
 * 
 * Пакет русской локализации.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    '{name}'        => 'Настройка аудита',
    '{description}' => 'Документирование операций совершаемых пользователями',
    '{permissions}' => [
        'any' => ['Полный доступ', 'Настройка аудита']
    ],

    // Form: поля
    'Record storage' => 'Хранилище записей',
    'Database' => 'База данных',
    'Maximum number of entries' => 'Максимальное количество записей',
    'The maximum number of audit records in the vault. If it exceeds the maximum, the entries are deleted.' 
        => 'Максимальное количество записей аудита в хранилище. Если превышает максимум, записи удалаются.',
    'Audit service enabled' => 'Служба аудита включена',
    'The audit includes the following information' => 'Аудит включает следующую информацию',
    'user information' => 'информация о пользователе',
    'request controller information' => 'информация о контроллере запроса',
    'request module information' => 'информация о модуле запроса',
    'request parameter information' => 'информация о параметрах запроса',
    'user device information' => 'информация о устройстве пользователя',
    'reset settings' => 'сбросить настройки',
    // Form: сообщения
    'Save settings' => 'Сохранение настроек',
    'Reset settings' => 'Сброс настроек',
    'settings saved {0} successfully' => 'успешное сохранение настроек "<b>{0}</b>"',
    'settings reseted {0} successfully' => 'успешный сброс настроек "<b>{0}</b>"'
];
