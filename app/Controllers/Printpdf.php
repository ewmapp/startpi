<?php

namespace App\Controllers;

use App\ThirdParty\Fpdf\FPDF;
use chillerlan\QRCode\{QROptions, QRCode};

class Printpdf extends BaseController
{

  public function __construct()
  {
  }

  private function qrcode($qrData)
  {
    $url = base_url() . '/d/c/' . base64_encode($qrData['code']); //inserindo a URL do iMasters
    $options = new QROptions([
      'version' => 3, //versao do QRCode
      'eccLevel' => QRCode::ECC_L, //Error Correction Feature Level L
      'outputType' => QRCode::OUTPUT_IMAGE_PNG, //setando o output como PNG
      'imageBase64' => false //evitando que seja gerado a imagem em base64
    ]);
    file_put_contents($qrData['path'] . 'qrcode_' . $qrData['code'] . '.png', (new QRCode($options))->render($url)); //salvando a imagem como png
  }

  public function index()
  {
    /* $this->response->setHeader('Content-Type', 'application/pdf'); */

    /* Start::Configuration page */
    $doc_orientation      = 'L';
    $doc_size             = [100, 50];
    $doc_path = WRITEPATH . 'uploads/print_pdf/';

    $pdf = new FPDF($doc_orientation, 'mm', $doc_size);
    $pdf->SetMargins(0, 0, 0);
    $pdf->SetAutoPageBreak(true, 0);
    $pdf->AddPage();
    /* End::Configuration page */

    /* Start::Rows Data */
    $tipo = 1;
    $code = 12345678;
    $text = 'Edmar José da Cruz';

    switch ($tipo) {
      case 1:
        $upprernome =  mb_strtoupper($text);
        $campo_valor = utf8_decode($upprernome);
        break;
      case 2:
        $qrData = [
          'code' => $code,
          'path' => $doc_path,
        ];

        $campo_valor = $code;
        $this->qrcode($qrData);
        $pdf->Image($doc_path . 'qrcode_' . $code . '.png', 65, 8, -130);
        $fontSize = 12;
        $lineSize = $fontSize - 7;
        $removeCode = true;
        break;
    }
    /* Start::Rows Data */

    $cracha = $doc_path . 'cracha.pdf';
    $pdf->SetFont('Arial', 'B', 24);
    $pdf->SetXY(0, 20);
    $pdf->MultiCell(100, 8, $campo_valor, '', 'C');

    $pdf->Output($cracha, 'F');

    echo shell_exec('lp -d Zebra_TLP2844 -o orientation-requested=6 /var/www/html/writable/uploads/print_pdf/cracha.pdf> /dev/null 2>/dev/null &');

    $resposta = array('status' => 'print', 'id' => 123, 'ip' => 123);
    echo json_encode($resposta);
  }
}
