<?php
if(isset($_POST['submit']))
{
    $roll = $_POST['roll'];
    $reason = $_POST['reason'];
    $ldate = $_POST['ldate'];
    $rdate = $_POST['rdate'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    require("fpdf/fpdf.php");

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont("Arial", "", 12);
    // Width, height, Content to be displayed, border 1-Yes 0-No, New line 1-Yes 0-No, "C" means center
    $pdf->Cell(0,10,"FormTechHostel - Form Details",1,1,"C");
    $pdf->Cell(45,10, "First Name: ",0,0,"L");
    $pdf->Cell(45,10, "$fname",0,1,"L");
    $pdf->Cell(45,10, "Last Name: ",0,0,"L");
    $pdf->Cell(45,10, "$lname",0,1,"L");
    $pdf->Cell(45,10, "Roll no.: ",0,0,"L");
    $pdf->Cell(45,10, "$roll",0,1,"L");

    $pdf->Cell(45,10, "Leave Date: ",0,0,"L");
    $pdf->Cell(45,10, "$ldate",0,1,"L");
    $pdf->Cell(45,10, "Return Date: ",0,0,"L");
    $pdf->Cell(45,10, "$rdate",0,1,"L");
    $pdf->Cell(45,10, "Reason: ",0,0,"L");
    $pdf->Cell(45,10, "$reason",0,1,"L");

    


    $pdf->output();

    // $file = $roll.'.pdf';

    // $pdf->output($file, 'D');
}
?>