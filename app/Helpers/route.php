<?php

if(! function_exists('prefixActive')){
	function prefixActive($prefixName): string
    {
		return	request()->route()->getPrefix() == $prefixName ? 'active' : '';
	}
}

if(! function_exists('prefixBlock')){
	function prefixBlock($prefixName): string
    {

		return request()->routeIs($prefixName) ? 'block' : 'none';

	}
}

if(! function_exists('routeActive')){
	function routeActive($routeName): string
    {
		return	request()->routeIs($routeName) ? 'active' : '';
	}
}
