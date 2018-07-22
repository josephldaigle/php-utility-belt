Factory
=======
.. php:Class:: Factory

    Factory class

    .. php:method:: create($className, $args)

        Create an object using constructor injection.

        :param string $className: The FQN of the class to create.
        :param array $args: The required constructor arguments, in the order the constructor expects to receive them.
        :returns: An instance of $className.