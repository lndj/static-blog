<?php
/**
 * @author Luo Ning <luoning@luoning.me>
 * 
 */

 namespace Stb\Collection;

 class Collection implements CollectionInterface, \Countable
 {
 	/**
 	 * @var arr
 	 */
 	private $collection;

 	/**
 	 * 
 	 */
 	public function get($name)
 	{
 		if ($this->has($name)) {
 			return $this->collection[$name];
 		} else {
 			$class = explode('\\', get_class($this));
 			$class = end($class);
 			throw new \RuntimeException("Obejct `$name` does not exist in $class.");
 		}
 	}
 }