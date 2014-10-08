<?php
    echo form_open('crud/create', array('enctype'=>"multipart/form-data"));
    echo form_fieldset('Cadastro');
    echo validation_errors('<p>', '</p>');
    echo form_label('Nome<br />');
    echo form_input(array('id' => 'nome', 'name' => 'nome', 'class' => 'form-control'), set_value('nome'), '', 'autofocus');
    echo '<br />';
    echo form_label('Email<br />');
    echo form_input(array('id' => 'email', 'name' => 'email', 'class' => 'form-control'), set_value('email'), '');
    echo '<br />';
    echo form_label('Login<br />');
    echo form_input(array('id' => 'login', 'name' => 'login', 'class' => 'form-control', 'maxlength' => 25), set_value('login'), '');
    echo '<br />';
    echo form_label('Senha<br />');
    echo form_password(array('id' => 'senha', 'name' => 'senha', 'class' => 'form-control', 'maxlength' => 25), set_value('senha'), '');
    echo '<br />';
    echo form_label('Confirma<br />');
    echo form_password(array('id' => 'senha2', 'name' => 'senha2', 'class' => 'form-control', 'maxlength' => 25), set_value('senha2'), '');
    echo '<br />';
    echo form_submit(array('name' => 'enviar', 'value' => 'Enviar', 'class' => 'btn btn-primary'));
    echo form_fieldset_close();
    echo form_close();
?>