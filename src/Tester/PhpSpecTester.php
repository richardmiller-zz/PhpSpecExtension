<?php

namespace Rmiller\PhpSpecExtension\Tester;

use Behat\Testwork\Environment\Environment;
use Behat\Testwork\Specification\SpecificationIterator;
use Behat\Testwork\Tester\Result\TestResult;
use Behat\Testwork\Tester\Setup\Setup;
use Behat\Testwork\Tester\Setup\Teardown;
use Behat\Testwork\Tester\SuiteTester;
use Rmiller\PhpSpecExtension\Process\DescRunner;

class PhpSpecTester implements SuiteTester
{
    private $baseTester;
    private $specRunner;

    public function __construct(
        SuiteTester $baseTester,
        DescRunner $specRunner)
    {
        $this->baseTester = $baseTester;
        $this->specRunner = $specRunner;
    }

    /**
     * Tests provided suite specifications.
     *
     * @param Environment $env
     * @param SpecificationIterator $iterator
     * @param Boolean $skip
     *
     * @return TestResult
     */
    public function test(Environment $env, SpecificationIterator $iterator, $skip)
    {
        return $this->baseTester->test($env, $iterator, $skip);
    }

    /**
     * Tears down suite after a test.
     *
     * @param Environment $env
     * @param SpecificationIterator $iterator
     * @param Boolean $skip
     * @param TestResult $result
     *
     * @return Teardown
     */
    public function tearDown(Environment $env, SpecificationIterator $iterator, $skip, TestResult $result)
    {
        return $this->baseTester->tearDown($env, $iterator, $skip, $result);
    }

    /**
     * Sets up suite for a test.
     *
     * @param Environment $env
     * @param SpecificationIterator $iterator
     * @param Boolean $skip
     *
     * @return Setup
     */
    public function setUp(Environment $env, SpecificationIterator $iterator, $skip)
    {
        spl_autoload_register(function($class) {

            $this->specRunner->runDescCommand($class);

        }, true, false);

        return $this->baseTester->setUp($env, $iterator, $skip);
    }
}