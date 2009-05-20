<?php
class ReportSqlsController extends ReportsAppController
{
	var $name = 'ReportSqls';
	var $layout = 'app';

	function admin_index() {
		$this->ReportSql->recursive = 0;
		$this->set('reportSqls', $this->paginate());
	}

	function admin_run($id)
	{
		$report = $this->ReportSql->read(null, $id);
		$db =& ConnectionManager::getDataSource('default');
		$results = $db->query($report['ReportSql']['sql']);
		$this->set(compact('report', 'results'));
	}
}
?>