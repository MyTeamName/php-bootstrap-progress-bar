<?php namespace jpuck\php\bootstrap\ProgressBar;

use InvalidArgumentException;

class ProgressBar
{
    protected $percent = 0;

    public function __construct(int $percent, array $options = null)
    {
        if ($percent < 0) {
            throw new InvalidArgumentException("percent must be positive");
        }

        if ($percent > 100) {
            throw new InvalidArgumentException("percent must not be greater than 100");
        }

        $this->percent = $percent;
    }

    public function __toString()
    {
        return (string) $this->percent;
    }
}
