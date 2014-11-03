<?php

namespace RMiller\PhpSpecExtension\Process;

interface ExemplifyRunner
{
    public function runExemplifyCommand($className, $methodName);
}
