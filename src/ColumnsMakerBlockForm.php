<?php
namespace SimpleCarousel\Form;

use Zend\Form\Element;
use Zend\Form\Form;

class CarouselBlockForm extends Form
{
	public function init()
	{
		$this->add([
			'name' => 'o:block[__blockIndex__][o:data][height]',
            'type' => Element\Text::class,
            'options' => [
                'label' => 'Column Height',
                'info' => 'Please enter a number with CSS units.',
            ],
		]);

		$this->add([
			'name' => 'o:block[__blockIndex__][o:data][perPage]',
            'type' => Element\Number::class,
            'options' => [
				'label' => 'Number of Columns',
				'info' => 'The number of columns to be made.'
			],
			'attributes' => [
				'min' => 1,
                'max' => 5,
			]
		]);
		$this->add([
			'name' => 'o:block[__blockIndex__][o:data][title]',
			'type' => Element\Text::class,
            'options' => [
				'label' => 'Body Text (optional)',
			]
		]);
	}