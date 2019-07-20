<?php
/**
 * Created by Joseph Daigle.
 * Date: 2019-07-15
 * Time: 22:11
 */

namespace PhpUtilityBelt\Identification;


/**
 * IdentifierInterface.
 *
 * @package PhpUtilityBelt\Identification
 */
interface IdentifierInterface
{
	/**
	 * @return mixed
	 */
	public function getValue();

	/**
	 * @param IdentifierInterface $identifier
	 *
	 * @return bool
	 */
	public function isEqualTo(IdentifierInterface $identifier): bool;
}