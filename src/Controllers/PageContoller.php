<?php

class PageController extends Controller
{
	public function show() : string
	{
		return $this->template;
	}

	public function getTemplate() : string
	{
		return $this->template;
	}
}