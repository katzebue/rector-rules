<?php

declare(strict_types=1);

use Katzebue\Rector\ReplaceHttpMethodsInAttributesRector;
use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->rule(ReplaceHttpMethodsInAttributesRector::class);
};
