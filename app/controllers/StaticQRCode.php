<?php

use app\core\Controller;
use app\controllers\PIX\Payload;
use Mpdf\QrCode\QrCode;
use Mpdf\QrCode\Output;

class StaticQRCode extends Controller
{

    public function index($action = null)
    {
        $data = array();

        if(isset($_POST["btnClear"])) {
            $data = $this->clearForm();
        }
        if(isset($_POST["btnDemo"])) {
            $data = array("demoData" => $this->demoData());
        }
        if(isset($_POST["submit"])) {
            $data = $this->generateQrCode();
        }
        
        $this->view('StaticPaymentView', $data);
    }

    public function clear() 
    {
        $data = array();

        $this->view('StaticPaymentView', $data);
    }

    public function demo() 
    {   
        $data = $this->demoData();

        $this->view('StaticPaymentView', $data);
    }

    private function demoData()
    {
        $data = array();

        $demo_data = array(
            'attPixKey' => 'aafe6b03-ea19-492f-b0bf-81414f58701b',
            'attDescription' => 'demo-qrcode-static',
            'attMerchantName' => 'Keep Cambiante',
            'attMerchantCity' => 'SAO PAULO',
            'attAmount' => '1.99',
            'attTxId' => 'teste-c6'
        );

        array_push($data, array("demo" => $demo_data));

        return $data;
    }

    private function clearForm()
    {
        $data = array();

        return $data;
    }

    private function generateQrCode()
    {
        $data = array();

        $obPayload = new Payload();

        $obPixKey = $obPayload->setPixKey($_POST['attPixKey'])
            ->setDescription($_POST['attDescription'])
            ->setMerchantName($_POST['attMerchantName'])
            ->setMerchantCity($_POST['attMerchantCity'])
            ->setAmount($_POST['attAmount'])
            ->setTxid($_POST['attTxId']);

        $payloadQRCode = $obPayload->getPayload();

        $obQrCode = new QrCode($payloadQRCode);

        $image = (new Output\Png)->output($obQrCode, 400);

        array_push($data, $obPixKey, array("payload" => $payloadQRCode), array("QrCodeImage" => $image));

        return $data;
    }
}
