<?php
class ReportSql extends AppModel
{
	var $name = 'ReportSql';
	
	function run($id)
	{
		// Run the query
		$report = $this->read(null, $id);
		$db =& ConnectionManager::getDataSource('default');
		$results = $db->query($report['ReportSql']['sql']);
		$rows = array();
		
		// Transform the results back into a 2d array.
		foreach ($results as $result)
		{
			$row = array();
			foreach ($result as $model => $fields)
			{
				foreach ($fields as $field => $value) {
					$row[$field] = $value;
				}
			}
			$rows[] = $row;
		}
		
		return $rows;
	}	
}
?>
