<?php
/**
 * Parent class. Its methods are used to declare properties for pivot
 * points calculations.
 * @author Alejandro Fonseca.
 */
class PivotPoints
{
	protected $high;
	protected $low;
	protected $close;
	protected $pivot;
	protected $r1;
	protected $r2;
	protected $r3;
	protected $s1;
	protected $s2;
	protected $s3;

	public function __construct($high,$low,$close)
	{
		$this->high = $high;
		$this->low = $low;
		$this->close = $close;
	}
	
	/**
	 * Returns private property 'pivot'.
	 */
	public function getPivot()
	{
		return $this->pivot;
	}
	
	/**
	 * Returns r1.
	 */
	public function getR1()
	{
		return $this->r1;
	}
	
	/**
	 * Returns r2.
	 */
	public function getR2()
	{
		return $this->r2;
	}
	
	/**
	 * Returns r3.
	 */
	public function getR3()
	{
		return $this->r3;
	}
	
	/**
	 * Returns s1.
	 */
	public function getS1()
	{
		return $this->s1;
	}
	
	/**
	 * Returns s2.
	 */
	public function getS2()
	{
		return $this->s2;
	}
	
	/**
	 * Returns s3.
	 */
	public function getS3()
	{
		return $this->s3;
	}
}
?>