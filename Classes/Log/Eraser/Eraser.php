<?php

declare(strict_types=1);

namespace CoStack\Logs\Log\Eraser;

use CoStack\Logs\Domain\Model\Log;

interface Eraser
{
    /**
     * Returns an array. All array keys make the reader unique for a source e.g. database table or file name.
     * The array values are the default values for the writer.
     */
    public static function getDefaultConfigForUniqueKeys(): array;

    /**
     * Deletes a single log entry found by the given log model.
     * @return int The number of deleted rows
     */
    public function delete(Log $log): int;

    /**
     * Deletes all log entries with the same component, message and level (ignoring the request ID, micro time and data)
     * @return int The number of deleted rows
     */
    public function deleteAlike(Log $log): int;
}
