<?php

use Freshwork\Transbank\CertificationBagFactory;
use Freshwork\Transbank\TransbankServiceFactory;
use Freshwork\Transbank\RedirectorHelper;

include 'vendor/autoload.php';
$bag = CertificationBagFactory::integrationWebpayNormal();

$plus = TransbankServiceFactory::normal($bag);

$response = $plus->getTransactionResult();
//If everything goes well (check stock, check amount, etc) you can call acknowledgeTransaction to accept the payment. Otherwise, the transaction is reverted in 30 seconds.
//Si todo está bien, peudes llamar a acknowledgeTransaction. Si no se llama a este método, la transaccion se reversará en 30 segundos.

print_r($response);
/*
if($response->detailOutput->responseCode == 0){
		$plus->acknowledgeTransaction();


function redirect($url, $data, $data1){
			echo  "<form action='" . $url . "' method='POST' name='webpayForm'>";
			
				echo "<input type='hidden' name='ID' value='".htmlentities($data)."'>";
				echo "<input type='hidden' name='TBK_TOKEN' value='".htmlentities($data1)."'>";
			
			echo  "</form>"
				 ."<script language='JavaScript'>"
				 ."document.webpayForm.submit();"
				 ."</script>";
		}
//header("location:http://localhost/wordpress/?wc-api=WC_Gateway_transbank");


redirect('http://localhost/wordpress/?wc-api=WC_Gateway_transbank', $_GET['orderID'], $_POST["token_ws"]);
//header('location:http://localhost/wordpress?wc-api=WC_Gateway_transbank?orderID='.$_GET['orderID'].'&token_ws='.$_POST["token_ws"]);
//header('location:peoctm');
		//header('location:'.$response->urlRedirection);
		//Redirect back to Webpay Flow and then to the thanks page
		//echo  RedirectorHelper::redirectBackNormal($response->urlRedirection);
}else{
 /*RECHAZADA*/
/*
	header("location:http://localhost/wordpress/mi-cuenta/view-order/".$_GET["orderID"]."/?orderID=". $_GET["orderID"]);	


}*/
