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
 	 * @param string $name
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

 	/**
 	 * @param string $name
 	 * 
 	 */
 	public function has($name)
 	{
 		return array_key_exists($name, $this->collection);
 	}

 	/**
 	 * @param string $name, Object $object
 	 * 
 	 */
 	public function set($name, $obejct)
 	{
 		$this->collection[$name] = $obejct;
 	}

 	/**
 	 * @param string $name, Object $object
 	 * 
 	 */
 	public function offsetExist($offset)
 	{
 		return $this->has($offset);
 	}

 	/**
     * {@inheritdoc}
     */
    public function offsetGet($offset)
    {
        return $this->get($offset);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value)
    {
        $this->set($offset, $value);
    }
    /**
     * {@inheritdoc}
     */
    public function offsetUnset($offset)
    {
        unset($this->collection[$offset]);
    }
    /**
     * {@inheritdoc}
     */
    public function count()
    {
        return count($this->collection);
    }

 }