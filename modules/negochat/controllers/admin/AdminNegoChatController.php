<?php
require_once _PS_MODULE_DIR_ . '/negochat/classes/Chat.php';

class AdminNegoChatController extends ModuleAdminController
{
    public function __construct()
    {
        $this->bootstrap = true;
        $this->table = Chat::$definition['table']; //Table de l'objet
        $this->identifier = Chat::$definition['primary']; //Clé primaire de l'objet
        $this->className = Chat::class; //Classe de l'objet
        $this->lang = true; //Flag pour dire si utilisation de langues ou non

        //Appel de la fonction parente pour pouvoir utiliser la traduction ensuite
        parent::__construct();

    }
}
