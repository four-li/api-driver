<?php

declare(strict_types=1);
/**
 * You know, for fast.
 *
 * @link     https://ctl.pub
 * @document https://doc.ctl.pub
 */
namespace Fourli\ApiDriver;

use Fourli\ApiDriver\Command\RouterCommand;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
            ],
            'commands' => [
                RouterCommand::class,
            ],
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
        ];
    }
}
