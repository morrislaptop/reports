<div class="reportSqls index">
<h2><?php __('ReportSql');?></h2>
<?php echo $advindex->create('ReportSql'); ?>
<table cellpadding="0" cellspacing="0">
	<?php echo $this->element('thead', array('plugin' => 'advindex')); ?>
	<tbody>
		<?php
		$i = 0;
		foreach ($reportSqls as $reportSql):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
			<tr<?php echo $class;?>>
				<td>
					<?php echo $reportSql['ReportSql']['id']; ?>
				</td>
				<td>
					<?php echo $reportSql['ReportSql']['name']; ?>
				</td>
				<td class="actions">
					<?php echo $html->link(__('Run', true), array('action'=>'run', $reportSql['ReportSql']['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
	<?php echo $this->element('tfoot', array('plugin' => 'advindex')); ?>
</table>
</div>