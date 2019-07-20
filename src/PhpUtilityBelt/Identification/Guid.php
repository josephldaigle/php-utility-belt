<?php
/**
 * Created by Joseph Daigle.
 * Date: 2019-07-15
 * Time: 22:13
 */

namespace PhpUtilityBelt\Identification;


/**
 * Guid.
 *
 * @package PhpUtilityBelt\Identification
 */
class Guid implements IdentifierInterface
{
	/**
	 * @var string
	 */
	private $value;

	/**
	 * Guid constructor.
	 *
	 * @param string $value
	 */
	public function __construct(string $value)
	{
		$this->value = $value;
	}

	/**
	 * @inheritdoc
	 * @return string
	 */
	public function getValue(): string
	{
		return $this->value;
	}

	/**
	 * @param IdentifierInterface $identifier
	 *
	 * @return bool
	 */
	public function isEqualTo(IdentifierInterface $identifier): bool
	{
		return ($identifier instanceof Guid && (0 === strcmp($this->value, $identifier->getValue())));
	}

}