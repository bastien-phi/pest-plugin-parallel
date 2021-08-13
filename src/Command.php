<?php

declare(strict_types=1);

namespace Pest\Parallel;

use ParaTest\Console\Commands\ParaTestCommand;
use Pest\TestSuite;
use Symfony\Component\Console\Input\ArrayInput;

final class Command
{

    /**
     * @param array<int, string> $argv
     */
    public function run(array $argv): int
    {
        $testSuite = TestSuite::getInstance();
        return ParaTestCommand::applicationFactory($testSuite->rootPath)->run(new ArrayInput($argv));
    }

}