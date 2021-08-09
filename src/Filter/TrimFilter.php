<?php
namespace Tools\Filter\Filter;

class TrimFilter extends abstractStringFilter{
    
    protected function _doFilter(string $value) : string{
        return trim($value);
    }
}