<?php

class AjaxController extends Controller
{

    private $template;

    public function __construct(){}
    
    public function show()
    {
	return $this->template;
    }

    public function getTemplate() : string
    {
	return $this->template;
    }

    public function setTemplate(string $template)
    {
	$this->template = $template;
    }

}