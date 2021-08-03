<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 01.05.2019
 * Time: 6:56
 */

namespace App\D;


class ReportRepository
{
    private $report, $saver;

    /**
     * ReportRepository constructor.
     * @param $report
     */
    public function __construct(IReport $report, Saver $saver)
    {
        $this->report = $report;
        $this->saver = $saver;
    }

    public function save() {
        $this->saver->save($this->report->renderReport());
    }


}