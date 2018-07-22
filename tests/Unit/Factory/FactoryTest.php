<?php
/**
 * Created by Joseph Daigle.
 * Date: 7/19/18
 * Time: 9:03 PM
 */


namespace PhpUtilityBelt\Test;


use PHPUnit\Framework\TestCase;
use PhpUtilityBelt\Factory\Factory;


/**
 * FactoryTest.
 *
 * Unit tests for PhpUtilityBelt\Factory.
 *
 * @package WPDeployer\Test
 */
class FactoryTest extends TestCase
{
	public function testCreateFactory()
	{
		$factory = Factory::createFactory();

		$this->assertInstanceOf(Factory::class, $factory);
	}

	/**
	 * @expectedException \InvalidArgumentException
	 * @expectedExceptionMessageRegExp /^(Unable to load class)/
	 */
	public function testCreateThrowsExceptionWhenClassNotFound()
	{
		// set up fixtures
		$className = 'SomeBadName';
		$factory = Factory::createFactory();

		// exercise SUT
		$factory->create($className);
	}

	public function testCreateIsSuccessWithNoConstructorArgs(  )
	{
		// set up fixtures
		$factory = Factory::createFactory();

		// exercise SUT
		$result = $factory->create(\stdClass::class);

		$this->assertInstanceOf(\stdClass::class, $result);
	}

	public function testCreatIsSuccessWithConstructorArgs(  )
	{
		$this->markTestIncomplete();
		// TODO: Finish implementing.
	}
}