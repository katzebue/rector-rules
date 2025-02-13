<?php

declare(strict_types=1);

use Katzebue\Rector\ReplaceIsNullWithComparisonRector;
use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->rule(ReplaceIsNullWithComparisonRector::class);
};
