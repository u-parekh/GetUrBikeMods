<?php
require_once('tcpdf/tcpdf.php'); // Adjust path if using Composer

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);

$result = $conn->query("SELECT * FROM cart");

$pdf = new TCPDF();
$pdf->AddPage();
$pdf->SetFont('helvetica', '', 12);

$html = '<h2>Invoice</h2><table border="1" cellpadding="4">
<tr><th>Product</th><th>Price</th><th>Qty</th><th>Subtotal</th></tr>';

$total = 0;

while ($row = $result->fetch_assoc()) {
    $subtotal = $row['p_price'] * $row['p_quantity'];
    $total += $subtotal;
    $html .= '<tr>
        <td>' . htmlspecialchars($row['p_name']) . '</td>
        <td>$' . number_format($row['p_price'], 2) . '</td>
        <td>' . $row['p_quantity'] . '</td>
        <td>$' . number_format($subtotal, 2) . '</td>
    </tr>';
}

$html .= '</table><br><h3>Total: $' . number_format($total, 2) . '</h3>';

$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('invoice.pdf', 'D'); // Download file

$conn->close();
?>
