<?php
	$max_upload_size=multichain_max_data_size()-512; // take off space for file name and mime type

	if (@$_POST['publish']) {

		$upload=@$_FILES['upload'];
		$upload_file=@$upload['tmp_name'];

		if (strlen($upload_file)) {
			$upload_size=filesize($upload_file);

			if ($upload_size>$max_upload_size) {
				echo '<div class="bg-danger" style="padding:1em;">Uploaded file is too large ('.number_format($upload_size).' > '.number_format($max_upload_size).' bytes).</div>';
				return;

			} else
				$data=file_to_txout_bin($upload['name'], $upload['type'], file_get_contents($upload_file));

		} else
			$data=string_to_txout_bin($_POST['text']);
		
		if (no_displayed_error_result($publishtxid, multichain(
			'publishfrom', $_POST['from'], $_POST['name'], $_POST['key'], bin2hex($data)
		)))
			output_success_text('Item successfully published in transaction '.$publishtxid);
	}

	$labels=multichain_labels();

	no_displayed_error_result($liststreams, multichain('liststreams', '*', true));

	if (no_displayed_error_result($getaddresses, multichain('getaddresses', true))) {
		foreach ($getaddresses as $index => $address)
			if (!$address['ismine'])
				unset($getaddresses[$index]);
				
		if (no_displayed_error_result($listpermissions,
			multichain('listpermissions', 'send', implode(',', array_get_column($getaddresses, 'address')))
		))
			$sendaddresses=array_get_column($listpermissions, 'address');
	}
	
?>
<style>
	.form-group label {
    display: inline-block;
    vertical-align: middle;    
}

.form-group div {
    display: inline-block;
    vertical-align: middle;
}
</style>

			<div class="row">

				<div class="col-sm-12">
					<h3 style="margin: 3%;">Add transaction to Wallet </h3>
					
					<form class="form-horizontal" method="post" enctype="multipart/form-data"  action="./?chain=<?php echo html($_GET['chain'])?>&page=<?php echo html($_GET['page'])?>">
						<div class="form-group">
							<label for="from" class="col-sm-3 control-label">Administrator ID :</label>
							<div class="col-sm-6">
							<select class="form-control" name="from" id="from">
								<?php
									foreach ($sendaddresses as $address) {
								?>
								<option value="<?php echo html($address)?>"><?php echo format_address_html($address, true, $labels)?></option>
								<?php
									}
								?>						
							</select>
							</div>
						</div>
						<div class="form-group">
							<label for="name" class="col-sm-3 control-label">To Wallet:</label>
							<div class="col-sm-6">
							<select class="form-control" name="name" id="name">
							<?php
								foreach ($liststreams as $stream) 
									if ($stream['name']!='root') {
							?>
								<option value="<?php echo html($stream['name'])?>"><?php echo html($stream['name'])?></option>
							<?php
									}
							?>						
							</select>
							</div>
						</div>
						<div class="form-group">
							<label for="key" class="col-sm-3 control-label">Optional reference:</label>
							<div class="col-sm-6">
								<input class="form-control" name="key" id="key">
							</div>
						</div>
						<div class="form-group">
							<label for="upload" class="col-sm-3 control-label">Upload transaction:<br/><span style="font-size:75%; font-weight:normal;">Max <?php echo floor($max_upload_size/1024)?> KB</span></label>
							<div class="col-sm-6">
								<input class="form-control" type="file" name="upload" id="upload">
							</div>
						</div>
						<div class="form-group">
							<label for="text" class="col-sm-3 control-label">Data:</label>
							<div class="col-sm-6">
								<textarea class="form-control" rows="3" name="text" id="text" placeholder="Transaction data in text form..."></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-9">
								<input class="btn btn-default" type="submit" name="publish" value="Add Transaction">
							</div>
						</div>
					</form>

				</div>
			</div>