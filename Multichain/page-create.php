<?php

	$success=false; // set default value

	if (@$_POST['createstream']) {
		$success=no_displayed_error_result($createtxid, multichain('createfrom',
			$_POST['from'], 'stream', $_POST['name'], true));
				
		if ($success)
			output_success_text('Stream successfully created in transaction '.$createtxid);
	}
	
	$labels=multichain_labels();

	if (no_displayed_error_result($getaddresses, multichain('getaddresses', true))) {
		foreach ($getaddresses as $index => $address)
			if (!$address['ismine'])
				unset($getaddresses[$index]);
				
		if (no_displayed_error_result($listpermissions,
			multichain('listpermissions', 'create', implode(',', array_get_column($getaddresses, 'address')))
		))
			$createaddresses=array_unique(array_get_column($listpermissions, 'address'));
	}
	
	no_displayed_error_result($liststreams, multichain('liststreams', '*', true));

?>
<style>
	.form-group label {
    display: inline-block;
   text-align-last: right;

}

.form-group div {
    display: inline-block;
    vertical-align: middle;
}
</style>
			<div class="row">
				<div class="col-sm-12">
					<h3 style="padding-left:20%;margin: 5% 0 2% 0; ">Issue a Wallet </h3>
					
					<form class="form-horizontal" method="post" action="./?chain=<?php echo html($_GET['chain'])?>&page=<?php echo html($_GET['page'])?>">
						<div class="form-group">
							<label for="from" class="col-sm-2 control-label">Administrator ID</label>
							<div class="col-sm-9">
							<select class="form-control col-sm-12" name="from" id="from">
<?php
	foreach ($createaddresses as $address) {
?>
								<option value="<?php echo html($address)?>"><?php echo format_address_html($address, true, $labels)?></option>
<?php
	}
?>						
							</select>
							</div>
						</div>
						<div class="form-group">
							<label for="name" class="col-sm-2 control-label">Wallet name:</label>
							<div class="col-sm-9">
								<input class="form-control" name="name" id="name" placeholder="Enter your AADHAAR number as unique name" autocomplete="off"></div>
						</div>
						<div class="form-group" >
							<div class="col-sm-offset-2 col-sm-9 text-right">
								<input class="btn btn-default" type="submit" name="createstream" value="Create Wallet" >
							</div>
						</div>
					</form>

				</div>
			</div>
