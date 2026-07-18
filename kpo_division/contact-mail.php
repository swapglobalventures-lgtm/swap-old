<?php
	if(isset($_POST['submit2'])=='Send')
	{
		$headers  = "From: ".$_POST['email']."\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1 \r\n";
		$headers .= "MIME-Version: 1.0 ";
		$msg1  = '<table width="100%" border="0" cellspacing="2" cellpadding="2">';
		$msg1 .=    '<tr><td align="left" valign="top" colspan="3" width="15%"><b>Name:</b> '.$_POST['name'].'</td></tr>';
		$msg1 .=    '<tr><td align="left" valign="top" colspan="3" width="15%"><b>Name of Company:</b> '.$_POST['company'].'</td></tr>';
		$msg1 .=    '<tr><td align="left" valign="top" colspan="3" width="15%"><b>Email:</b> '.$_POST['email'].'</td></tr>';
		$msg1 .=    '<tr><td align="left" valign="top" colspan="3" width="15%"><b>Phone Number:</b> '.$_POST['number'].'</td></tr>';
		$msg1 .=    '<tr><td align="left" valign="top" colspan="3" width="55%"><b>Message:</b> '.$_POST['message'].'</td></tr>';
		$msg1 .= '</table>';
		$sub = 'SWAP Global Ventures - Contact Request form your Site';
		$ret = mail('rashi@swapglobalventures.com', $sub, $msg1, $headers);
		header("Location: http://swapconsulting.com/bpo_division/contact.html");
		exit();

	}
?>