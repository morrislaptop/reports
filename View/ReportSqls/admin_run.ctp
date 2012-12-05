<div class="reportSqls index run">
	<h2><?php echo $report['ReportSql']['name']; ?></h2>
	<form>
		<div id="filler"></div>
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
					<thead>
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
					</thead>
					<tbody>
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
					</tbody>
				</table>
				<?php
			}
		?>
	</form>
</div>