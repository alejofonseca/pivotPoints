<?php
/**
 * This class extends PivotPoints. It is used to calculate general pivot point.
 * @author Alejandro Fonseca.
 *
 */
class PivotCalculations extends PivotPoints
{
	public function __construct($high, $low, $close)
	{
		parent::__construct($high, $low, $close);
	}
	
	/**
	 * Calculates the first pivot point and assigns the value to the parent
	 * property 'pivot'. Parent properties (high, low and close) are needed
	 * to generate the pivot value.
	 */
	public function calculatePivot()
	{
		$this->pivot = ($this->high + $this->low + $this->close)/3;
	}
	
	/**
	 * Maths for parent property 'r1'.
	 */
	public function calculateR1()
	{
		$this->r1 = (2 * $this->pivot) - $this->low;
	}
	
	/**
	 * Maths for parent property 'r2'.
	 */
	public function calculateR2()
	{
		$this->r2 = $this->r1 + $this->high - $this->pivot;
	}
	
	/**
	 * Maths for parent property 'r3'.
	 */
	public function calculateR3()
	{
		$this->r3 = $this->high + 2 * ($this->pivot - $this->low);
	}
	
	/**
	 * Calculates s1.
	 */
	public function calculateS1()
	{
		$this->s1 = (2*$this->pivot) - $this->high;
	}
	
	/**
	 * Calculates s2.
	 */
	public function calculateS2()
	{
		$this->s2 = $this->low - $this->pivot + $this->s1;
	}

	/**
	 * Calculates s3.
	 */
	public function calculateS3()
	{
		$this->s3 = $this->low - 2*($this->high - $this->pivot);
	}
}
?>