<?php
declare(strict_types=1);

namespace PayNL\Sdk;

/**
 * Trait DebugTrait
 *
 * @package PayNL\Sdk
 */
trait DebugTrait
{
    /**
     * @var boolean
     */
    protected $debug = false;

    /**
     * @param boolean $debug
     *
     * @return self
     */
    public function setDebug(bool $debug): self
    {
        $this->debug = $debug;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isDebug(): bool
    {
        return true === $this->debug;
    }

    /**
     * Dumps the given arguments
     *
     * @param mixed ...$arguments
     *
     * @return void
     */
    public function dumpDebugInfo(...$arguments): void
    {
        $function = 'var_dump';
        $dumpString = '<pre>%s</pre>' . PHP_EOL;
        if (true === function_exists('dump')) {
            $function = 'dump';
            $dumpString = '';
        }

        echo sprintf(
            $dumpString,
            $function(...$arguments)
        );
    }
}
