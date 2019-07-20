<?php
/**
 * Created by Joseph Daigle.
 * Date: 7/19/18
 * Time: 9:21 PM
 */

namespace PhpUtilityBelt\Factory;

/**
 * Factory.
 *
 * A simple Factory for creating classes.
 *
 * @package PhpUtilityBelt
 */
class Factory
{
	/**
	 * Get an instance of Factory.
	 *
	 * @return Factory
	 */
	public static function createFactory(): Factory
	{
		return new static;
	}

	/**
	 * @param string     $className
	 * @param array|null $args
	 *
	 * @return mixed
	 * @throws \InvalidArgumentException
	 * @throws \LogicException
	 */
	public function create(string $className, array $args = null)
	{
		//check if class exists
		if (! class_exists($className)) {
			throw new \InvalidArgumentException(sprintf('Unable to load class: %s.', $className));
		}

		//create the class
		$instance = null;
		if (is_null($args)) {
			$instance = new $className();
		} else {
			$instance = call_user_func($className,...$args);
		}

		if (is_null($instance))
			throw new \LogicException(sprintf('An unknown error occurred in call_user_func() while creating a %s', $className));

		//return instance
		return $instance;

	}
}