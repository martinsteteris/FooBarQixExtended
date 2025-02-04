<?php

declare(strict_types=1);

namespace App\models;

final class Trigger
{
    public function __construct(
        public readonly string $word,
        public readonly int    $value,
        public readonly bool   $triggeredIfSumOfDigitsDivisible = false
    )
    {
    }

    public function getWord(): string
    {
        return $this->word;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function isTriggeredIfSumOfDigitsDivisible(): bool
    {
        return $this->triggeredIfSumOfDigitsDivisible;
    }
}