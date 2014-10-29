<?php

namespace RMiller\PhpSpecExtension\Process;

interface CommandRunner
{
    public function runCommand($path, $args);

    public function isSupported();
}
