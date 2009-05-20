<div class="voucherPurchases form">
<?php echo $form->create('VoucherPurchase');?>
	<fieldset>
 		<legend><?php __('Edit VoucherPurchase');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('name');
		echo $form->input('email');
		echo $form->input('address');
		echo $form->input('phone');
		echo $form->input('amount');
		echo $form->input('cc_type');
		echo $form->input('cc_last4');
		echo $form->input('merchant_txn');
		echo $form->input('merchant_auth');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('VoucherPurchase.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('VoucherPurchase.id'))); ?></li>
		<li><?php echo $html->link(__('List VoucherPurchases', true), array('action'=>'index'));?></li>
	</ul>
</div>
