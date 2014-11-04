<?php

namespace RMiller\PhpSpecExtension\Process\ExemplifyRunner;

use RMiller\PhpSpecExtension\Process\CachingExecutableFinder;
use RMiller\PhpSpecExtension\Process\CommandRunner;
use RMiller\PhpSpecExtension\Process\DescRunner;
use RMiller\PhpSpecExtension\Process\ExemplifyRunner;

class PlatformSpecificExemplifyRunner implements ExemplifyRunner
{
    const COMMAND_NAME = 'exemplify';

    /**
     * @var string
     */
    private $phpspecPath;

    /**
     * @var CommandRunner
     */
    private $commandRunner;

    /**
     * @var CachingExecutableFinder
     */
    private $executableFinder;

    /**
     * @param CommandRunner $commandRunner
     * @param CachingExecutableFinder $executableFinder
     * @param string $phpspecPath
     */
    public function __construct(
        CommandRunner $commandRunner,
        CachingExecutableFinder $executableFinder,
        $phpspecPath
    ) {
        $this->commandRunner = $commandRunner;
        $this->executableFinder = $executableFinder;
        $this->phpspecPath = $phpspecPath;
    }

    /**
     * @return boolean
     */
    public function isSupported()
    {
        return $this->commandRunner->isSupported();
    }

    public function runExemplifyCommand($className, $methodName)
    {
        $this->commandRunner->runCommand(
            $this->executableFinder->getExecutablePath(),
            [$this->phpspecPath, self::COMMAND_NAME, '--confirm', $className, $methodName]
        );
    }
}
