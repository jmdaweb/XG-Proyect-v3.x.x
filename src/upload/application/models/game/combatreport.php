<?php
/**
 * Combat Report Model
 *
 * PHP Version 7.1+
 *
 * @category Model
 * @package  Application
 * @author   XG Proyect Team
 * @license  http://www.xgproyect.org XG Proyect
 * @link     http://www.xgproyect.org
 * @version  3.1.0
 */
namespace application\models\game;

use application\core\Model;

/**
 * Combat Report Class
 *
 * @category Classes
 * @package  Application
 * @author   XG Proyect Team
 * @license  http://www.xgproyect.org XG Proyect
 * @link     http://www.xgproyect.org
 * @version  3.1.0
 */
class Combatreport extends Model
{
    /**
     * Get report by its Id
     *
     * @param string $report_id Report ID
     *
     * @return array
     */
    public function getReportById($report_id): ?array
    {
        return $this->db->queryFetch(
            "SELECT
                *
            FROM `" . REPORTS . "`
            WHERE `report_rid` = '" . $this->db->escapeValue($report_id) . "';"
        );
    }
}

/* end of combatreport.php */
