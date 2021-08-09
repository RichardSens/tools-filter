<?php
namespace Tools\Filter;

interface iStringFilter{
    
    /**
	 * 
	 * @param string $subject
	 * @return string
	 */
	public function doFilter(string $subject) : string;
	
	/**
	 * Retorna a string original antes de passar pelo filtro
	 * @return string
	 */
	public function getSubject() : string; 
	
	
	/**
	 * Retorno a string filtrada
	 * @return string
	 */
	public function getFiltered() : string;
	
	
}