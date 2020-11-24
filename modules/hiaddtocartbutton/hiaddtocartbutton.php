<?php
/**
* 2012 - 2020 HiPresta
*
* MODULE Add to cart button
*
* @author    HiPresta <support@hipresta.com>
* @copyright HiPresta 2020
* @license   Addons PrestaShop license limitation
* @link      http://www.hipresta.com
* @version   1.0.1
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

include_once(dirname(__FILE__).'/classes/HiPrestaModule.php');


class HiAddToCartButton extends Module
{
    public $psv;
    public $errors = array();
    public $success = array();
    public $clean_db;
    public $quantity;
    public $module_hooks = array();

    public function __construct()
    {
        $this->name = 'hiaddtocartbutton';
        $this->tab = 'front_office_features';
        $this->version = '1.0.9';
        $this->author = 'hipresta';
        $this->need_instance = 0;
        $this->secure_key = Tools::encrypt($this->name);
        $this->bootstrap = true;
        $this->module_key = '';
        parent::__construct();
        $this->globalVars();
        $this->displayName = $this->l('Add to cart button');
        $this->description = $this->l('Add to cart button for product list pages');
        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
        $this->HiPrestaClass = new HiPrestaATCBModule($this);
        $this->controllers = array('ajax');
    }

    public function install()
    {
        if (Shop::isFeatureActive()) {
            Shop::setContext(Shop::CONTEXT_ALL);
        }
        if (!parent::install()
            // || !$this->installDb()
            || !$this->registerHook('header')
            || !$this->registerHook('displayProductListReviews')
            || !Configuration::updateValue('CLEAN_HI_ATCB', false)
            || !$this->registerHook('dashboardZoneOne')
            ) {
                return false;
        }
        $this->updatePosition(Hook::getIdByName('dashboardZoneOne'), 0);
        $this->proceedDb();
        return true;
    }

    public function uninstall()
    {
        if (!parent::uninstall()) {
            return false;
        }
        if (Configuration::get('CLEAN_HI_ATCB')) {
            $this->proceedDb(true);
        }
        return true;
    }

    /* Create Db Tabls*/
    private function installDb()
    {
        $res = '';
        return $res;
    }

    private function proceedDb($drop = false)
    {
        if (!$drop) {
            Configuration::updateValue('CLEAN_HI_ATCB', false);
            Configuration::updateValue('CLEAN_HI_ATCB_QUANTITY', false);
        } else {
            Configuration::deleteByName('CLEAN_HI_ATCB');
            Configuration::deleteByName('CLEAN_HI_ATCB_QUANTITY');
        }
    }

    private function globalVars()
    {
        $this->psv = (float)Tools::substr(_PS_VERSION_, 0, 3);
        $this->clean_db = (bool)Configuration::get('CLEAN_HI_ATCB');
        $this->quantity = (bool)Configuration::get('CLEAN_HI_ATCB_QUANTITY');
    }


    public function renderMenuTabs()
    {
        $tabs = array(
            'generel_settings' => $this->l('General settings'),
            'version' => $this->l('Version'),
            // 'documentation' => $this->l('Documentation'),
        );
        $more_module = $this->getModuleContent('A_ATC', false, '', true);
        $free_module = $this->getModuleContent('A_ATC', true, '', true);
        if ($more_module) {
            $tabs['more_module'] = $this->l('More Modules');
        }
        if ($free_module) {
            $tabs['free_module'] = $this->l('Free Modules');
        }
        $this->context->smarty->assign(
            array(
                'psv' => $this->psv,
                'tabs' => $tabs,
                'module_version' => $this->version,
                'module_url' => $this->HiPrestaClass->getModuleUrl(),
                'module_tab_key' => $this->name,
                'module_key' => Tools::getValue($this->name),
            )
        );
        return $this->display(__FILE__, 'views/templates/admin/menu_tabs.tpl');
    }

    public function renderDocumentationForm()
    {
        return $this->display(__FILE__, 'views/templates/admin/documentation.tpl');
    }

    /**
    * getDashboardModule return dashboard moduel array content
    * @param string $module_name (Module kay)
    * @param bool $free_module (get free moduel)
    * @param bool $random (get ramdome moduel)
    * @param bool $show_tab (show admin tabs if function return true else hide tab)
    */

    public function getDashboardModule($module_name, $free_module = false, $random = '')
    {
        $url = 'https://hipresta.com/module/hiprestashopapi/prestashopapi?secure_key=6db77b878f95ee7cb56d970e4f52f095&random='.$random.'&free_module='.$free_module.'&module_name='.$module_name;
        $headers = @get_headers($url);

        if(!isset($headers[0]) || strpos($headers[0], '404') !== false) {
            return array();
        }

        $modules = Tools::jsonDecode(Tools::file_get_contents($url, false, null, 5));
        $isset_modules = Tools::strlen(serialize($modules)) > 19 ? true : false;
        if ($isset_modules) {
            foreach ($modules as $key => $module) {
                if ($this->isInstalled($module->name)) {
                    unset($modules->$key);
                }
            }
        }
        if (Tools::strlen(serialize($modules)) <= 19) {
            return $this->getDashboardModule($module_name, $free_module, $random);
        }
        return $modules;
    }

    /**
    * getModuleContent return modules array content
    * @param string $module_name (Module kay)
    * @param bool $free_module (get free module)
    * @param bool $random (get ramdome module)
    * @param bool $show_tab (show admin tabs if function return true else hide tab)
    */

    public function getModuleContent($module_name, $free_module = false, $random = '', $show_tab = false)
    {
        if ($random) {
            $modules = $this->getDashboardModule($module_name, $free_module, $random);
            $isset_modules = true;
        } else {
            $url = 'https://hipresta.com/module/hiprestashopapi/prestashopapi?secure_key=6db77b878f95ee7cb56d970e4f52f095&random='.$random.'&free_module='.$free_module.'&module_name='.$module_name;
            $headers = @get_headers($url);

            if(!isset($headers[0]) || strpos($headers[0], '404') !== false) {
                return '';
            }
            $modules = Tools::jsonDecode(Tools::file_get_contents($url, false, null, 5));
            $isset_modules = Tools::strlen(serialize($modules)) > 19 ? true : false;
            if ($isset_modules) {
                foreach ($modules as $key => $module) {
                    if ($this->isInstalled($module->name)) {
                        unset($modules->$key);
                    }
                }
            }
        }
        if ($show_tab) {
            return Tools::strlen(serialize($modules)) > 19 ? true : false;
        }
        $this->context->smarty->assign(
            array(
                'psv' => $this->psv,
                'show_module' => $isset_modules,
                'modules' => $modules,
                'free_module' => $free_module
            )
        );
    }

    public function renderModuleAdvertisingForm()
    {
        $this->getModuleContent('A_ATC');
        return $this->display(__FILE__, 'views/templates/admin/moduleadvertising.tpl');
    }

    public function renderFreeModuleAdvertisingForm()
    {
        $this->getModuleContent('A_ATC', true);
        return $this->display(__FILE__, 'views/templates/admin/moduleadvertising.tpl');
    }

    public function renderVersionForm()
    {
        $changelog = '';
        if (file_exists(dirname(__FILE__) . '/changelog.txt')) {
            $changelog = Tools::file_get_contents(dirname(__FILE__) . '/changelog.txt');
        }
        $this->context->smarty->assign('changelog', $changelog);

        return $this->display(__FILE__, 'views/templates/admin/version.tpl');
    }

    public function renderShopGroupError()
    {
        $this->context->smarty->assign(
            array(
                'psv' => $this->psv,
            )
        );
        return $this->display(__FILE__, 'views/templates/admin/shop_group_error.tpl');
    }

    public function renderModuleAdminVariables()
    {
        $this->context->smarty->assign(
            array(
                'psv' => $this->psv,
                'id_lang' => $this->context->language->id,
            )
        );
        return $this->display(__FILE__, 'views/templates/admin/variables.tpl');
    }

    public function renderDisplayForm($content)
    {
        $this->context->smarty->assign(
            array(
                'psv' => $this->psv,
                'errors' => $this->errors,
                'success' => $this->success,
                'content' => $content
            )
        );
        return $this->display(__FILE__, 'views/templates/admin/display_form.tpl');
    }

    public function renderSettingsForm()
    {
        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Settings'),
                    'icon' => 'icon-cogs'
                ),
                'input' => array(
                   array(
                        'type' => $this->psv >= 1.6 ? 'switch':'radio',
                        'label' => $this->l('Display quantity input'),
                        'name' => 'quantity',
                        'class' => 't',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'quantity_on',
                                'value' => 1,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'quantity_off',
                                'value' => 0,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                   array(
                        'type' => $this->psv >= 1.6 ? 'switch':'radio',
                        'label' => $this->l('Clean Database when module uninstalled'),
                        'name' => 'clean_db',
                        'class' => 't',
                        'is_bool' => true,
                        'desc' => $this->l('Not recommended, use this only when you’re not going to use the module'),
                        'values' => array(
                            array(
                                'id' => 'clean_db_on',
                                'value' => 1,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'clean_db_off',
                                'value' => 0,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                    'name' => 'submit_settings_form',
                    'class' => $this->psv >= 1.6 ? 'btn btn-default pull-right':'button',
                )
            ),
        );
        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->default_form_language = (int)Configuration::get('PS_LANG_DEFAULT');
        $this->fields_form = array();
        $helper->submit_action = 'submitBlockSettings';
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = $this->context->link->getAdminLink(
            'AdminModules',
            false
        ).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name.'&'.$this->name.'=generel_settings';
        $helper->tpl_vars = array(
            'fields_value' => array(
                'clean_db' => $this->clean_db,
                'quantity' => $this->quantity,
            ),
        );
        return $helper->generateForm(array($fields_form));
    }

    public function postProcess()
    {
        if (Tools::isSubmit('submit_settings_form')) {
            Configuration::updateValue('CLEAN_HI_ATCB', (bool)Tools::getValue('clean_db'));
            Configuration::updateValue('CLEAN_HI_ATCB_QUANTITY', (bool)Tools::getValue('quantity'));
            $this->success[] = $this->l('Successful Save');
        }
    }

    public function displayForm()
    {
        $html = '';
        $content = '';
        if (!$this->HiPrestaClass->isSelectedShopGroup()) {
            $html .= $this->renderMenuTabs();
            switch (Tools::getValue($this->name)) {
                case 'generel_settings':
                    $content .= $this->renderSettingsForm();
                    $content .= $this->renderHiPresta();
                    break;
                case 'version':
                    $content .= $this->renderVersionForm();
                    $content .= $this->renderHiPresta();
                    break;
                // case 'documentation':
                //     $content .= $this->renderDocumentationForm();
                //     break;
                case 'more_module':
                    $content .= $this->renderModuleAdvertisingForm();
                    $content .= $this->renderHiPresta();
                    break;
                case 'free_module':
                    $content .= $this->renderFreeModuleAdvertisingForm();
                    $content .= $this->renderHiPresta();
                    break;
                default:
                    $content .= $this->renderSettingsForm();
                    $content .= $this->renderHiPresta();
                    break;
            }
            $html .= $this->renderDisplayForm($content);
        } else {
            $html .= $this->renderShopGroupError();
        }

        $this->context->controller->addCSS($this->_path.'views/css/admin.css', 'all');
        $this->context->controller->addJS(($this->_path).'views/js/admin.js');
        $html .= $this->renderModuleAdminVariables();
        return $html;
    }

    public function getContent()
    {
        if (Tools::isSubmit('submit_settings_form')) {
            $this->postProcess();
        }
        $this->globalVars();
        $this->HiPrestaClass->autoRegisterHook($this->id, array());
        return $this->displayForm();
    }

    public function hookDisplayHeader()
    {
        $this->context->controller->addCSS($this->_path.'views/css/front.css', 'all');
        $this->context->controller->addJS($this->_path.'views/js/front.js');

        $this->context->smarty->assign(array(
            'hi_adb_front_controller_url' => $this->context->link->getModuleLink('hiaddtocartbutton', 'ajax')
        ));
        return $this->display(__FILE__, 'header.tpl');
    }

    public function hookDisplayProductListReviews($params)
    {
        $available_qty = $params['product']['quantity'];
        if(isset($params['product']['out_of_stock']) && Product::isAvailableWhenOutOfStock($params['product']['out_of_stock'])){
            $available_qty = -1;
        }

        if(Configuration::get('PS_STOCK_MANAGEMENT')) {
            $availability = isset($params['product']['availability']) ? $params['product']['availability'] : false;
        } else {
            $availability = 'available';
            $available_qty = -1;
        }

        $this->context->smarty->assign(array(
            'token' => Tools::getToken(false),
            'id_poduct' => $params['product']['id_product'],
            'minimal_qty' => isset($params['product']['minimal_quantity']) ? $params['product']['minimal_quantity'] : '',
            'quantity_block' => $this->quantity,
            'availability' => $availability,
            'customizable' => isset($params['product']['customizable']) ? $params['product']['customizable'] : false,
            'product_url' => $params['product']['url'],
            'available_qty' => $available_qty
        ));
        return $this->display(__FILE__, 'addtocartbutton.tpl');
    }

     /* PS 1.7 */
    public function hookDashboardZoneOne()
    {
        $this->updatePosition(Hook::getIdByName('DashboardZoneOne'), 0);
        $this->getModuleContent('A_ATC', false, 'rand');
        return $this->display(__FILE__, 'dashboard_zone.tpl');
    }

    public function renderHiPresta()
    {
        $cookie = new Cookie('psAdmin');
        $employee = new Employee($cookie->id_employee);
        $this->context->smarty->assign(
            array(
                'employee_fname' => $cookie->id_employee ? $employee->firstname : '',
                'employee_lname' => $cookie->id_employee ? $employee->lastname : '',
                'employee_email' => $cookie->id_employee ? $employee->email : '',
            )
        );
        return $this->display(__FILE__, 'views/templates/admin/hipresta.tpl');
    }
}
