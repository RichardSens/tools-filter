<?php
namespace Tools\Filter\Filter;

class StrToUpperFilter extends abstractStringFilter{
    
    protected function _doFilter(string $value) : string{
        return strtoupper($value);
    }
}