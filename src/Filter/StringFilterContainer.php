<?php
namespace Tools\Filter\Filter;

use \SplObjectStorage;
use Tools\Filter\iStringFilter;


class StringFilterContainer implements iStringFilter{

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
     * @var \SplObjectStorage
     */
    protected $filterStorage;
    
    
    public function __construct() {
        $this->filterStorage = new \SplObjectStorage();
    }
    
    /**
     * Adiciona filtro
     * @param iStringFilter $filter
     */
    public function add(iStringFilter $filter) : void{
        $this->filterStorage->attach($filter);
    }
    
    
    public function getSubject(): string {
        return $this->subject;
    }

    public function getFiltered(): string {
        return $this->filtered;
    }

    public function doFilter(string $subject): string {
        $this->subject = $subject;
        $filtered = $subject;
        $this->filterStorage->rewind();
        while($this->filterStorage->valid()){
            /**
             * 
             * @var iStringFilter $filter
             */
            $filter = $this->filterStorage->current();
            $filtered = $filter->doFilter($filtered);
            
            $this->filterStorage->next();
        }
        $this->filtered = $filtered;
        return $filtered;
    }

    
    
     
    
}