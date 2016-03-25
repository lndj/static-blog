<?php
/**
 * @author Luo Ning <luoning@luoning.me>
 * 
 */

namespace Stb\Collection;

class CollectionInterface extends \IteratorAggregate, \ArrayAccess 
{
	/**
	 * @param string $name
	 * @return mixed
	 */
	public function get($name);

	/**
	 * @param string $name, $object
	 * @return mixed
	 */

	public function set($name, $object);

	/**
	 * @param string $name
	 * @return boolean
	 */

	public function has($name);

} 