<?php
namespace Admin\Validator;

use Zend\InputFilter\InputFilter;
use Zend\InputFilter\Factory as InputFactory;

/**
 * @category Admin
 * @package  Validator
 * @author   Maico <e-mail@mail.com>
 */

class MarcaValidator extends InputFilter
{
    public function __construct()
    {
        $factory = new InputFactory();
        $this->add(
            $factory->createInput(
                array(
                    'name' => 'id',
                    'required' => false,
                    'filters' => array(
                        array('name' => 'Int'),
                    ),
                )
            )
        );
        $this->add(
            $factory->createInput(
                array(
                    'name' => 'descricao',
                    'required' => true,
                    'filters' => array(
                        array('name' => 'StripTags'),
                        array('name' => 'StringTrim'),
                        array('name' => 'StringToUpper',
                            'options' => array('encoding' => 'UTF-8')
                        ),
                    ),
                    'validators' => array(
                        array(
                            'name' => 'StringLength',
                            'options' => array(
                                'encoding' => 'UTF-8',
                                'min' => 2,
                                'max' => 255,
                            ),
                        ),
                        array(
                            'name' => 'NotEmpty',
                        )
                    ),
                )
            )
        );
    }
}
