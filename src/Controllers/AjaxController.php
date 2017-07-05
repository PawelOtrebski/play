<?php

class AjaxController extends Controller
{

    private $template;

    public function __construct(){}
    
    public function show()
    {
	return $this->template;
    }

}