<?php

declare(strict_types=1);

namespace CoStack\Logs\Domain\Model;

use Psr\Log\LogLevel;
use TYPO3\CMS\Extbase\Utility\LocalizationUtility;

class Filter
{
    public const SORTING_DESC = 'DESC';
    public const SORTING_ASC = 'ASC';
    protected string $requestId = '';
    protected string $level = LogLevel::NOTICE;
    protected ?int $fromTime = null;
    protected ?int $toTime = null;
    protected bool $showData = false;
    protected string $component = '';
    protected bool $fullMessage = true;
    protected int $limit = 150;
    protected string $orderField = Log::FIELD_TIME_MICRO;
    protected string $orderDirection = self::SORTING_DESC;

    public function getRequestId(): string
    {
        return $this->requestId;
    }

    /**
     * @noinspection PhpUnused Required by Extbase to set property
     */
    public function setRequestId(string $requestId): void
    {
        $this->requestId = $requestId;
    }

    public function getLevel(): string
    {
        return $this->level;
    }

    /**
     * @noinspection PhpUnused Required by Extbase to set property
     */
    public function setLevel(string $level): void
    {
        $this->level = $level;
    }

    public function getFromTime(): ?int
    {
        return $this->fromTime;
    }

    /**
     * @noinspection PhpUnused Required by Extbase to set property
     */
    public function setFromTime(int $fromTime = null): void
    {
        $this->fromTime = $fromTime;
    }

    public function getToTime(): ?int
    {
        return $this->toTime;
    }

    /**
     * @noinspection PhpUnused Required by Extbase to set property
     */
    public function setToTime(int $toTime = null): void
    {
        $this->toTime = $toTime;
    }

    public function isShowData(): bool
    {
        return $this->showData;
    }

    /**
     * @noinspection PhpUnused Required by Extbase to set property
     */
    public function setShowData(bool $showData): void
    {
        $this->showData = $showData;
    }

    public function getComponent(): string
    {
        return $this->component;
    }

    /**
     * @noinspection PhpUnused Required by Extbase to set property
     */
    public function setComponent(string $component): void
    {
        $this->component = $component;
    }

    public function isFullMessage(): bool
    {
        return $this->fullMessage;
    }

    /**
     * @noinspection PhpUnused Required by Extbase to set property
     */
    public function setFullMessage(bool $fullMessage): void
    {
        $this->fullMessage = $fullMessage;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * @noinspection PhpUnused Required by Extbase to set property
     */
    public function setLimit(int $limit): void
    {
        $this->limit = $limit;
    }

    public function getOrderField(): string
    {
        return $this->orderField;
    }

    /**
     * @noinspection PhpUnused Required by Extbase to set property
     */
    public function setOrderField(string $orderField): void
    {
        if (array_key_exists($orderField, $this->getOrderFields())) {
            $this->orderField = $orderField;
        }
    }

    public function getOrderDirection(): string
    {
        return $this->orderDirection;
    }

    /**
     * @noinspection PhpUnused Required by Extbase to set property
     */
    public function setOrderDirection(string $orderDirection): void
    {
        $this->orderDirection = $orderDirection;
    }

    /**
     * @noinspection PhpUnused Partials/Log/Filter.html
     */
    public function getLogLevels(): array
    {
        return [
            LogLevel::EMERGENCY => '0 - ' . LogLevel::EMERGENCY,
            LogLevel::ALERT => '1 - ' . LogLevel::ALERT,
            LogLevel::CRITICAL => '2 - ' . LogLevel::CRITICAL,
            LogLevel::ERROR => '3 - ' . LogLevel::ERROR,
            LogLevel::WARNING => '4 - ' . LogLevel::WARNING,
            LogLevel::NOTICE => '5 - ' . LogLevel::NOTICE,
            LogLevel::INFO => '6 - ' . LogLevel::INFO,
            LogLevel::DEBUG => '7 - ' . LogLevel::DEBUG,
        ];
    }

    public function getOrderFields(): array
    {
        return [
            Log::FIELD_TIME_MICRO => LocalizationUtility::translate('filter.time_micro', 'logs'),
            Log::FIELD_REQUEST_ID => LocalizationUtility::translate('filter.request_id', 'logs'),
            Log::FIELD_COMPONENT => LocalizationUtility::translate('filter.component', 'logs'),
            Log::FIELD_LEVEL => LocalizationUtility::translate('filter.level', 'logs'),
        ];
    }

    /**
     * @noinspection PhpUnused Used in Partials/Log/Filter.html
     */
    public function getOrderDirections(): array
    {
        return [
            static::SORTING_DESC => LocalizationUtility::translate('filter.desc', 'logs'),
            static::SORTING_ASC => LocalizationUtility::translate('filter.asc', 'logs'),
        ];
    }
}
