<?php

namespace Admin\Form;

use Zend\Form\Form;

/**
 * Form para cadastrar categorias
 *
 * @category Admin
 * @package  Form
 * @author   Maico <e-mail@email.com>
 */
class CategoriaForm extends Form
{
    public function __construct()
    {
        parent::__construct('CategoriaForm');
        $this->setAttribute('method', 'POST');
        
        $this->add(
            array(
                'name' => 'id',
                'type' => 'hidden'
            )
        );
        $this->add(
            array(
                'name' => 'descricao',
                'type' => 'text',
                'options' => array(
                    'label' => 'Descrição da categoria*:'
                ),
                'attributes' => array(
                    'placeholder' => 'Informe a categoria aqui',
                    'class' => 'form-control',
                    'size' => '30'
                ),
            )
        );

        $this->add(
            array(
                'name' => 'salvar',
                'type' => 'submit',
                'attributes' => array(
                    'value' => 'Salvar',
                    'class' => 'btn btn-primary'
                )
            )
        );
        $this->add(
            array(
                'type' => 'button',
                'name' => 'cancelar',
                'attributes' => array(
                    'value' => 'Cancelar',
                    'class' => 'btn',
                    'onclick' => "location.href='/admin/categorias/index'",
                    'title' => 'Cancelar'
                ),
                'options' => array(
                    'label' => 'Cancelar'
                )
            )
        );
    }
}