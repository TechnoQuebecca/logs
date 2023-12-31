<?php

declare(strict_types=1);

namespace CoStack\Logs\Log\Reader;

use CoStack\Logs\Domain\Model\Filter;
use CoStack\Logs\Domain\Model\Log;

interface Reader
{
    /**
     * Returns an array. All array keys make the reader unique for a source e.g. database table or file name.
     * The array values are the default values for the writer.
     */
    public static function getDefaultConfigForUniqueKeys(): array;

    /**
     * @return array<Log>
     */
    public function findByFilter(Filter $filter): array;
}
