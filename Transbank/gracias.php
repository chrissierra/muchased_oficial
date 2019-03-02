<?php
/*
if(isset($_GET["token"])){

	function redirect($url, $data){
			echo  "<form action='" . $url . "' method='POST' name='webpayForm'>";
			
				echo "<input type='hidden' name='token_ws' value='".htmlentities($data)."'>";
			
			echo  "</form>"
				 ."<script language='JavaScript'>"
				 ."document.webpayForm.submit();"
				 ."</script>";
		}
//header("location:http://localhost/wordpress/?wc-api=WC_Gateway_transbank");
echo "asfd";

redirect('https://webpay3gint.transbank.cl/webpayserver/voucher.cgi', $_GET['token']);
		//header('location:'.$response->urlRedirection);
		//Redirect back to Webpay Flow and then to the thanks page
		//echo  RedirectorHelper::redirectBackNormal($response->urlRedirection);



}


if(isset($_GET["orderID"])){
header("location:http://localhost/wordpress/mi-cuenta/view-order/".$_GET["orderID"]."/?orderID=". $_GET["orderID"]);	
}*/
if(isset($_POST['TBK_TOKEN'])){
	print_r($_POST['TBK_TOKEN']);
}
echo "asdf";
