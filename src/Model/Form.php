<?php
/**
 * Этот файл является частью расширения модуля веб-приложения GearMagic.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

namespace Gm\Backend\Config\Audit\Model;

use Gm;
use Gm\Backend\Config\Model\ServiceForm;

/**
 * Модель данных конфигурации службы "Аудит".
 * 
 * Cлужба {@see \Gm\Panel\Audit\Audit}.
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package Gm\Backend\Config\Audit\Model
 * @since 1.0
 */
class Form extends ServiceForm
{
    /**
     * {@inheritdoc}
     */
    public function init(): void
    {
        parent::init();

        $this->unifiedName = Gm::$app->audit->getObjectName();
    }

    /**
     * {@inheritdoc}
     */
    public function maskedAttributes(): array
    {
        return [
            'storageName'       => 'storageName', // хранилище записей
            'limit'             => 'limit', // максимальное количество записей
            'enabled'           => 'enabled',  // служба включена
            'userSection'       => 'userSection', // информация о пользователе
            'controllerSection' => 'controllerSection', // информация о контроллере запроса
            'moduleSection'     => 'moduleSection', // информация о модуле запроса
            'requestSection'    => 'requestSection', // информация о параметрах запроса
            'deviceSection'     => 'deviceSection', // информация о устройстве пользователя
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function formatterRules(): array
    {
        return [
            [
                ['enabled', 'userSection', 'controllerSection', 'moduleSection', 'requestSection', 'deviceSection'],
                'logic' => [true, false]
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function validationRules(): array
    {
        return [
            [['storageName', 'limit'], 'notEmpty']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels(): array
    {
        return [
            'storageName'       => $this->t('Record storage'),
            'limit'             => $this->t('Maximum number of entries'),
            'enabled'           => $this->t('Audit service enabled'),
            'userSection'       => $this->t('user information'),
            'controllerSection' => $this->t('request controller information'),
            'moduleSection'     => $this->t('request module information'),
            'requestSection'    => $this->t('request parameter information'),
            'deviceSection'     => $this->t('user device information')
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function beforeUpdate(array &$columns): void
    {
        $config = [
            'enabled' => $columns['enabled'],
            'storage' => [
                'class' => '\Gm\Panel\Audit\Storage\\' . $columns['storageName'],
                'limit' => $columns['limit']
            ],
            'sections' => []
        ];

        if ($columns['userSection']) {
            $config['sections'][] = 'user';
        }
        if ($columns['controllerSection']) {
            $config['sections'][] = 'controller';
        }
        if ($columns['moduleSection']) {
            $config['sections'][] = 'module';
        }
        if ($columns['requestSection']) {
            $config['sections'][] = 'request';
        }
        if ($columns['deviceSection']) {
            $config['sections'][] = 'device';
        }
        $columns = $config;
    }
}
