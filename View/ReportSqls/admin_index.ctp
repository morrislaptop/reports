<div class="reportSqls index">
<h2><?php echo __('ReportSql');?></h2>
<?php echo $this->Advindex->create('ReportSql'); ?>
<div id="filler"></div>
<table cellpadding="0" cellspacing="0">
	<thead>
		<tr>
			<th class="headerLeft">Name</th>
			<th class="headerRight">&nbsp;</th>
		</tr>
	</thead>
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
					<?php echo $reportSql['ReportSql']['name']; ?>
				</td>
				<td class="actions">
					<?php echo $this->Html->link(__('Run', true), array('action'=>'run', $reportSql['ReportSql']['id']), array('class' => 'view')); ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
</div>