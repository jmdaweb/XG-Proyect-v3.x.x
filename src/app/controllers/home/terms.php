<?php
/**
 * Home Controller
 *
 * @category Controller
 * @package  Application
 * @author   XG Proyect Team
 * @license  http://www.xgproyect.org XG Proyect
 * @link     http://www.xgproyect.org
 * @version  3.0.0
 */

namespace App\controllers\home;

use App\core\BaseController;
use App\libraries\Functions;

/**
 * Terms Class
 */
class Terms extends BaseController
{
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();

        // load Language
        parent::loadLang(['home/terms']);
    }

    /**
     * Users land here
     *
     * @return void
     */
    public function index(): void
    {
        // build the page
        $this->buildPage();
    }

    /**
     * Build the page
     *
     * @return void
     */
    private function buildPage(): void
    {
        $this->page->display(
            $this->template->set(
                'home/terms',
                array_merge(
                    $this->langs->language,
                    $this->getPageData()
                )
            ),
            false,
            '',
            false
        );
    }

    /**
     * Get the page data to fully parse it
     *
     * @return array
     */
    private function getPageData(): array
    {
        return [
            'servername' => strtr($this->langs->line('hm_title'), ['%s' => Functions::readConfig('game_name')]),
            'css_path' => CSS_PATH . 'home/',
            'js_path' => JS_PATH . 'home/',
            'game_logo' => Functions::readConfig('game_logo'),
            'img_path' => IMG_PATH . 'home/',
            'base_path' => BASE_PATH,
            'version' => SYSTEM_VERSION,
            'year' => date('Y'),
        ];
    }
}
