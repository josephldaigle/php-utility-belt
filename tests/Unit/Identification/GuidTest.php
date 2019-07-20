<?php
/**
 * Created by Joseph Daigle.
 * Date: 2019-07-20
 * Time: 07:01
 */

namespace PhpUtilityBelt\Test\Unit\Identification;

use PHPUnit\Framework\TestCase;
use PhpUtilityBelt\Identification\Guid;

/**
 * GuidTest.
 *
 * @package PhpUtilityBelt\Test\Unit\Identification
 */
class GuidTest extends TestCase
{
	public function providerTestIsEqualTo()
	{
		return [
			'same' => ['efe645f7-ef5b-4300-b080-cc3357458d6c', 'efe645f7-ef5b-4300-b080-cc3357458d6c', true],
			'different' => ['efe645f7-ef5b-4300-b080-cc3357458d6c', '549de40c-b23c-4ce6-ba2a-afa3d36e7844', false]
		];
	}

	/**
	 * @dataProvider providerTestIsEqualTo
	 *
	 * @param $guidOne
	 * @param $guidTwo
	 * @param $expectedResult
	 */
	public function testIsEqualTo($guidOne, $guidTwo, $expectedResult)
	{
		$guid = new Guid($guidOne);
		$comparator = new Guid($guidTwo);

		$this->assertEquals($expectedResult, $guid->isEqualTo($comparator));
	}
}