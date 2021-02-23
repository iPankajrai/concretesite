<?php
namespace MySite\Express\Form\Processor;

use Concrete\Core\Express\Form\Processor\StandardProcessor;

class FormProcessor extends StandardProcessor
{

	public function getValidator(Request $request)
	{
	    $validator = new \MySite\Express\Form\Validator\FormValidator($this->app, $this->app->make('error'), $request);
	    return $validator;
	}
}

