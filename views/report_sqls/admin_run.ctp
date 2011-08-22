<div class="reportSqls run">
	<h2><?php echo $report['ReportSql']['name']; ?></h2>
	<?php
		if ( !$results )
		{
			?>
			<p><strong>Your report did not return any results.</strong></p>
			<?php
		}
		else
		{
			?>
			<table cellpadding="0" cellspacing="0">
				<tr>
					<?php
						$fields = array_keys($results[0]);
						foreach ($fields as $field)
						{
							?>
							<th><?php echo $field; ?></th>
							<?php
						}
					?>
				</tr>
				<?php
					foreach ($results as $result)
					{
						?>
						<tr>
							<?php
								foreach ($result as $field => $value)
								{
									?>
									<td><?php echo $value; ?></td>
									<?php
								}
							?>
						</tr>
						<?php
					}
				?>
			</table>
			<?php
		}
	?>
</div>
<div class="actions">
	<?php echo $html->link('<< List Available Reports', array('action' => 'index')); ?>
</div>