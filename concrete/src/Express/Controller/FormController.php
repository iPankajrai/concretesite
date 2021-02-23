<?php
public function getFormProcessor()
{
    return $this->app->make('\MySite\Express\Form\Processor\FormProcessor');
}