<?php
/**
 * An exception thrown while trying to build or resolve a binding in the container.
 *
 * @package lucatume\DI52
 *
 * @license GPL-3.0
 * Modified by learndash on 15-May-2023 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace StellarWP\Learndash\lucatume\DI52;

use Psr\Container\ContainerExceptionInterface;

/**
 * Class ContainerException
 *
 * @package lucatume\DI52
 */
class ContainerException extends \Exception implements ContainerExceptionInterface
{
}
