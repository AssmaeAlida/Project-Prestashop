<?php
class Chat extends ObjectModel{
    public $id;
    public $sender;
    public $receiver;
    public $product;
    public $message;
    public $etat;

    public static  $definition =[
        'table' => 'tab_chat',
        'primary' => 'id_chat',
        'multilang' => true,
    ];
}
