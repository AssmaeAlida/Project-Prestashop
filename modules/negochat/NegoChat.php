<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class NegoChat extends Module
{
    public function __construct()
    {
        $this->name = 'negoChat';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Assmae ';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('NegoChat');
        $this->description = $this->l('Module de chat pour négocier les prix');
    }

    public function install()
    {
        if (parent::install() &&
            $this->registerHook('displayHeader') &&
            Db::getInstance()->Execute('CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'chat` (
                    `id_chat` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
                    `sender` VARCHAR(255) NOT NULL,
                    `receiver` VARCHAR(255) NOT NULL,
                    `product` VARCHAR(255) NOT NULL,
                    `message` VARCHAR(255) NOT NULL,
                    `old_value` DECIMAL(10,2) NOT NULL,
                    `new_value` DECIMAL(10,2) NOT NULL,
                    `etat` INT(1) UNSIGNED NOT NULL,
                    PRIMARY KEY (`id_chat`)
                ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;')
            && $this->_installTab()
        ) {
            return true;
        }

        return false;
    }

    public function uninstall()
    {
        if (parent::uninstall() &&
            Db::getInstance()->Execute('DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'chat`')
            && $this->_uninstallTab()
        ) {
            return true;
        }

        return false;
    }

    protected function _installTab()
    {
        $tab = new Tab();
        $tab->class_name = 'AdminNegoChat';
        $tab->module = $this->name;
        $tab->id_parent = (int)Tab::getIdFromClassName('DEFAULT');
        $tab->icon = 'settings_applications';
        $languages = Language::getLanguages();
        foreach ($languages as $lang) {
            $tab->name[$lang['id_lang']] = $this->l('NegoChat');
        }
        try {
            $tab->save();
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }

        return true;
    }
    protected function _uninstallTab()
    {
        $idTab = (int)Tab::getIdFromClassName('AdminNegoChat');
        if ($idTab) {
            $tab = new Tab($idTab);
            try {
                $tab->delete();
            } catch (Exception $e) {
                echo $e->getMessage();
                return false;
            }
        }
        return true;
    }

    public function hookDisplayHeader($params)
    {
        $this->context->controller->addJS($this->_path . 'views/js/negochat.js');
        $this->context->controller->addCSS($this->_path . 'views/css/negochat.css');
    }
}
