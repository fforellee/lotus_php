<?php

require('fpdf/fpdf.php');

$host = "localhost";
$root = "root";
$password = "";
$database = "mercadinho";

$con = mysqli_connect($host, $root, $password, $database);
$query = mysqli_query($con, "SELECT * FROM cliente");
$userData = mysqli_fetch_array($query);
$date = date("d/m/Y");

$pdf = new FPDF('P', 'mm', 'A4');

$pdf->AddPage();
$pdf->SetDrawColor(0, 0, 0);
$pdf->SetFillColor(240, 240, 240);
$pdf->SetTextColor(0, 0, 0);

$pdf->SetFont('Arial', 'B', 14);

//* espaçador vertical
$pdf->Cell(190, 8, '', 0, 1); //* fim da linha

$pdf->Cell(125, 10, '', 0, 0);
$pdf->Cell(37, 10, 'Data de acesso', 0, 0);
$pdf->Cell(28, 10, $date, 0, 1, 'C');
$pdf->Cell(190, 10, 'Supermercado Lotus', 0, 1, 'C');

//* espaçador vertical
$pdf->Cell(190, 8, '', 0, 1); //* fim da linha

$fullName = $userData["Nome_completo"];
$splitNames = explode(" ", $fullName);
$firstName = $splitNames[0];

$pdf->Cell(190, 7, 'Dados pessoais do cliente ' . $firstName, 1, 1, 'C', true); //* fim da linha

$pdf->SetFont('Arial', '', 12);

$pdf->Cell(95, 7, 'Nome completo', 1, 0, '');
$pdf->Cell(95, 7, $userData["Nome_completo"], 1, 1, ''); //* fim da linha
$pdf->Cell(95, 7, 'Senha', 1, 0, '');
$pdf->Cell(95, 7, $userData["Senha"], 1, 1, ''); //* fim da linha

$cpf = $userData["CPF"];
$newCpf = substr($cpf, 0, 3) . '.' . substr($cpf, 3, 3) . '.' . substr($cpf, 6, 3) . '-' . substr($cpf, 9, 2);

$pdf->Cell(95, 7, 'CPF', 1, 0, '');
$pdf->Cell(95, 7, $newCpf, 1, 1, ''); //* fim da linha
$pdf->Cell(95, 7, 'Data de nascimento', 1, 0, '');

$birthday = $userData["Data_nascimento"];
$newBirthday = date('d/m/Y', strtotime($birthday));

$pdf->Cell(95, 7, $newBirthday, 1, 1, ''); //* fim da linha

$gender = $userData["Sexo"];

if ($gender == 'M') {
    $newGender = "Masculino";
} else if ($gender == "F") {
    $newGender = "Feminino";
} else if ($gender == null) {
    $newGender = "";
}

$pdf->Cell(95, 7, 'Sexo', 1, 0, '');
$pdf->Cell(95, 7, $newGender, 1, 1, ''); //* fim da linha

$phoneNumber = $userData["Num_tel"];
/* $newPhoneNumber = 
                substr($phoneNumber, -1, 0) . '(' .
                substr($phoneNumber, 0, 2) . ')' .
                substr($phoneNumber, 11) . ' ' .
                substr($phoneNumber, 2, 1) . ' ' .
                substr($phoneNumber, 3, 4) . '-' .
                substr($phoneNumber, 7, 4); */

$pdf->Cell(95, 7, 'Telefone', 1, 0, '');
$pdf->Cell(95, 7,  $phoneNumber, 1, 1, ''); //* fim da linha
$pdf->Cell(95, 7, 'Email', 1, 0, '');
$pdf->Cell(95, 7,  $userData["Email"], 1, 1, ''); //* fim da linha
$pdf->Cell(95, 7, 'Logradouro', 1, 0, '');
$pdf->Cell(95, 7,  $userData["Endereço_Logradouro"] . ' N° ' . $userData["Endereço_Num_residencia"], 1, 1, ''); //* fim da linha

$cep = $userData["Endereço_CEP"];
/* $newCep = substr($cep, 0, 5) . '-' . substr($cep, 5, 3); */

$pdf->Cell(95, 7, 'CEP', 1, 0, '');
$pdf->Cell(95, 7,  $cep, 1, 1, ''); //* fim da linha
$pdf->Cell(95, 7, 'Complemento', 1, 0, '');
$pdf->Cell(95, 7,  $userData["Endereço_Complemento"], 1, 1, ''); //* fim da linha

$cardNumber = $userData["Cartao_numero"];
$newCardNumber = chunk_split($cardNumber, 4);

$pdf->Cell(95, 7, 'Número do cartão de crédito', 1, 0, '');
$pdf->Cell(95, 7, $newCardNumber, 1, 1, ''); //* fim da linha
$pdf->Cell(95, 7, 'CVC do cartão de crédito', 1, 0, '');
$pdf->Cell(95, 7, $userData["Cartao_cod"], 1, 1, ''); //* fim da linha
$pdf->Cell(95, 7, 'Validade do cartão de crédito', 1, 0, '');

$cardExpiryDate = $userData["Cartao_vencimento"];

if ($cardExpiryDate != null) {
    $newCardExpiryDate = substr_replace($cardExpiryDate, "/", 2, 0);
} else $newCardExpiryDate = "";


$pdf->Cell(95, 7, $newCardExpiryDate, 1, 1, ''); //* fim da linha

$pdf->Output();
?>

<?php
mysqli_close($con);
?>