<?php
namespace Tools\Filter\Filter;

use Tools\Filter\iStringFilter;

abstract class abstractStringFilter implements iStringFilter{
    
    /**
     * 
     * @var string 
     */
    protected $subject;
    
    /**
     * 
     * @var string
     */
    protected $filtered;
    
    /**
	 * 
	 * @param string $value
	 * @return string
	 */
	public function doFilter(string $subject): string{
	    $this->subject = $subject;
	    if(strlen($subject) == 0) return $subject;
	    $this->filtered = $this->_doFilter($subject);
	    return $this->filtered;
	}
	
	/**
	 * 
	 * @param string $value
	 * @return string
	 */
	protected abstract function _doFilter(string $value) : string; 
	
	
	public function getSubject() : string{
	    return $this->subject;
	}
	
	public function getFiltered() : string{
	    return $this->filtered;
	}
	
	
}