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
        'fields' => [
            // Champs Standards
            'sender' => ['type' => self::TYPE_STRING, 'validate' => 'isSender', 'size' => 255, 'required' => true],
            'receiver' => ['type' => self::TYPE_STRING, 'validate' => 'isReceiver', 'size' => 255, 'required' => true],
            'product' => ['type' => self::TYPE_STRING, 'validate' => 'isProduct', 'size' => 255, 'required' => true],
            //Champs langue
            'message' => ['type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isCleanHtml', 'size' => 255,],
            'etat' => ['type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isCleanHtml',],
        ],
    ];
}
