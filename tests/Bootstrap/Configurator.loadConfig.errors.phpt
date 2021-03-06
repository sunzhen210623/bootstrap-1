<?php

/**
 * Test: Nette\Configurator and createContainer errors.
 */

use Nette\Configurator;
use Tester\Assert;


require __DIR__ . '/../bootstrap.php';


$configurator = new Configurator;

Assert::exception(function () use ($configurator) {
	$configurator->addConfig('files/missing.neon')
		->createContainer();
}, Nette\InvalidStateException::class, "Set path to temporary directory using setTempDirectory().");
