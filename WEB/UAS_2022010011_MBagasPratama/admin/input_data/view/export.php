<?php
include "../db.php";
require_once "fpdf182/fpdf.php";

if (isset($_GET['pasien_id'])) {
    $pasien_id = $_GET['pasien_id'];

    // Prepare a SQL query to fetch patient data by ID
    $query = "SELECT * FROM pasien WHERE id = ?";
    $stmt = mysqli_prepare($db, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $pasien_id);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if ($result) {
            // Fetch patient data
            $pasien = mysqli_fetch_assoc($result);

            // Create a PDF instance
            $pdf = new FPDF();

            // Set Margins
            $pdf->SetMargins(20, 20, 20);
            $pdf->AddPage();

            // Add Health Icon (using an image) to the left
            $pdf->Image('../../../img/healt.png', 15, 20, 15); // Adjust the path and coordinates

            // Set Font for the header
            $pdf->SetFont('Arial', 'B', 25);

            // Move to the right after the logo
            $pdf->SetX(30);

            // Add Document Header
            $pdf->Cell(0, 18, 'CHRONIC KIDNEY DISEASE', 0, 1, 'L');
            $pdf->Ln(10);

            // Set Font for data
            $pdf->SetFont('Arial', '', 12);

            // Display patient information
            displayPatientInfo($pdf, 'Nama', $pasien['nama']);
            displayPatientInfo($pdf, 'Umur', $pasien['umur']);
            displayPatientInfo($pdf, 'Stadium', $pasien['stadium']);

            // Check if keys exist before accessing them
            displayPatientData($pdf, 'LFG', $pasien['lfg']);
            displayPatientDataWithNumbers($pdf, 'Anjuran Nutrisi', $pasien['anjuran_nutrisi']);
            displayPatientDataWithNumbers($pdf, 'Makanan Dianjurkan', $pasien['makanan_dianjurkan']);

            // Set the file name for download
            $filename = "pasien_data_" . str_replace(' ', '_', $pasien['nama']) . ".pdf";

            // Output PDF with patient's name as the file name
            ob_clean(); // Clean the output buffer
            $pdf->Output('D', $filename);
        } else {
            echo "Query failed: " . mysqli_error($db);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Prepared statement failed.";
    }

    mysqli_close($db);
} else {
    echo "Pasien ID tidak valid.";
}

// Function to display patient information
function displayPatientInfo($pdf, $label, $value) {
    $pdf->Cell(0, 10, "$label: $value", 0, 1);
}

// Function to display patient data with indentation
function displayPatientData($pdf, $label, $value) {
    if (!empty($value)) {
        $pdf->Ln(); // Add spacing before data
        $pdf->SetFont('Arial', 'B', 12); // Set Font to bold for data label
        $pdf->Cell(0, 8, "$label:", 0, 1);
        $pdf->SetFont('Arial', '', 10); // Reset Font size for data
        $pdf->MultiCell(0, 8, $value, 0, 'L');
    }
}

// Function to display patient data with line numbers
function displayPatientDataWithNumbers($pdf, $label, $value) {
    if (!empty($value)) {
        $pdf->Ln(); // Add spacing before data
        $pdf->SetFont('Arial', 'B', 12); // Set Font to bold for data label
        $pdf->Cell(0, 8, "$label:", 0, 1);
        $pdf->SetFont('Arial', '', 10); // Reset Font size for data

        // Split the data into lines
        $lines = explode("\n", $value);

        // Display each line with line numbers
        foreach ($lines as $key => $line) {
            $pdf->MultiCell(0, 8, ($key + 1) . ". " . $line, 0, 'L');
        }
    }
}
?>
