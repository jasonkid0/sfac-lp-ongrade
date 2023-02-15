<?php
require ('../fpdf/fpdf.php');




class PDF extends FPDF
{

// Page header

}

$pdf = new PDF('P','mm','Legal');
//left top right
$pdf->SetMargins(10,10,10);
$pdf ->AddPage();

    // Logo(x axis, y axis, height, width)
    $pdf->Image('../download.png',50,5,15,15);
    // text color
    $pdf->SetTextColor(255,0,0);
    // font(font type,style,font size)
    $pdf->SetFont('Arial','B',18);
    // Dummy cell
    $pdf->Cell(50);
    // //cell(width,height,text,border,end line,[align])
    $pdf->Cell(110,5,'Saint Francis of Assisi College',0,0,'C');
    // Line break
    $pdf->Ln(5);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Arial','',10,'C');
    // dummy cell
    $pdf->Cell(50);
    // //cell(width,height,text,border,end line,[align])
    $pdf->Cell(90,3,'96 Bayanan, City of Bacoor, Cavite',0,0,'C');
    // Line break
    $pdf->Ln(8);
    $pdf->SetFont('Arial','B',10,'C');
    // dummy cell
    $pdf->Cell(50);
    // //cell(width,height,text,border,end line,[align])
    $pdf->Cell(90,4,'FOUR-YEAR CURRICULUM',0,0,'C');
    // Line break
    $pdf->Ln(4);
    $pdf->SetFont('Arial','B',10,'C');
    // dummy cell
    $pdf->Cell(50);
    // //cell(width,height,text,border,end line,[align])
    $pdf->Cell(90,4,'FOR',0,0,'C');
    // Line break
    $pdf->Ln(4);
    $pdf->SetFont('Arial','B',10,'C');
    // dummy cell
    $pdf->Cell(50);
    // //cell(width,height,text,border,end line,[align])
    $pdf->Cell(90,4,'BACHELOR OF ELEMENTARY EDUCATION',0,1,'C');

    // Line break

    $pdf->SetFont('Arial','',10,'C');
    // dummy cell
    $pdf->Cell(50);
    // //cell(width,height,text,border,end line,[align])
    $pdf->Cell(90,4,'Effective Academic Year 2018-2019',0,1,'C');
     // Line break
    $pdf->Ln(4);
   



//cell(width,height,text,border,end line,[align])
//student name
$pdf ->Cell(15 ,5,'Name:',0,0); 
$pdf->SetFont('Arial','B','10');
$pdf ->Cell(115 ,5,'','B',0); //end of line


//student no
$pdf->SetFont('Arial','','10');
$pdf ->Cell(25 ,5,'Student No:',0,0);
$pdf->SetFont('Arial','B','10');
$pdf ->Cell(30 ,5,'','B',1); //end of line

//dummy cells
$pdf ->Cell(20 ,5,'',0,1);
$pdf ->Cell(20 ,5,'',0,0);

$pdf->SetFont('Arial','B','10');
$pdf ->Cell(20 ,5,'CODE',0,0);
$pdf ->Cell(90 ,5,'Description',0,0,'C');
$pdf ->Cell(34 ,5,'UNITS',0,0,'C');
$pdf ->Cell(60 ,5,'Pre-Requisites',0,1);

// UNITS
$pdf ->Cell(132 ,5,'',0,0);
$pdf ->Cell(10 ,5,'LEC',0,0);
$pdf ->Cell(10 ,5,'LAB',0,0);
$pdf ->Cell(10 ,5,'TOTAL',0,1);

//YEAR , SEMESTER
$pdf ->Cell(10 ,5,'',0,1);
$pdf ->Cell(10 ,5,'',0,1);
$pdf ->Cell(10 ,5,'',0,0);


$pdf ->Cell(45 ,5,'First Year, First Semester',0,1);
$pdf->SetFont('Arial','','9');
// SUBJECTS

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'CCGE',0,0);
$pdf ->Cell(15 ,4,'101',0,0);
$pdf ->Cell(90 ,4,'Science, Technology and Society',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'CCGE',0,0);
$pdf ->Cell(15 ,4,'102',0,0);
$pdf ->Cell(90 ,4,'Readings in Philippine History',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'CCGE',0,0);
$pdf ->Cell(15 ,4,'103',0,0);
$pdf ->Cell(90 ,4,'Understanding the Self',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'FILI',0,0);
$pdf ->Cell(15 ,4,'101',0,0);
$pdf ->Cell(90 ,4,'Komunikasyon sa Akademikong Filipino',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'CHCL',0,0);
$pdf ->Cell(15 ,4,'101',0,0);
$pdf ->Cell(90 ,4,'Franciscan Orientation',0,0);
$pdf ->Cell(10 ,4,'1',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'1',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'TCED',0,0);
$pdf ->Cell(15 ,4,'101',0,0);
$pdf ->Cell(90 ,4,'The Child and Adolescent Learners and Learning Principles',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'MCEE',0,0);
$pdf ->Cell(15 ,4,'101',0,0);
$pdf->SetFont('Arial','','8');
$pdf ->Cell(90 ,4,'Teaching Science in the Elementary Grades (Biology and Chemistry)',0,0);
$pdf->SetFont('Arial','','9');
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'MCEE',0,0);
$pdf ->Cell(15 ,4,'102',0,0);
$pdf->SetFont('Arial','','7');
$pdf ->Cell(90 ,4,'Teaching Science in the Elementary Grades (Physics, Earth and Space Science)',0,0);
$pdf->SetFont('Arial','','9');
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'PHED',0,0);
$pdf ->Cell(15 ,4,'101',0,0);
$pdf ->Cell(90 ,4,'Gymnastics',0,0);
$pdf ->Cell(10 ,4,'2',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'2',0,1);

// LAST LINE PER SEM
$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'NSTP',0,0);
$pdf ->Cell(15 ,4,'1',0,0);
$pdf ->Cell(90 ,4,'National Service Training Program 1',0,0);
$pdf ->Cell(10 ,4,'3','B',0);
$pdf ->Cell(9 ,4,'0','B',0);
$pdf ->Cell(7 ,4,'(3)','B',1);




$pdf ->Cell(20 ,5,'',0,0);

$pdf->SetFont('Arial','','10');
$pdf ->Cell(102 ,5,'',0,0);
$pdf ->Cell(32 ,6,'TOTAL',0,0);

$pdf->SetFont('Arial','B','10');
$pdf ->Cell(10 ,6,'24',0,1);
$pdf ->Cell(180 ,6,'',0,1);
$pdf ->Cell(180 ,6,'',0,1);









//YEAR , SEMESTER
$pdf ->Cell(10 ,5,'',0,0);
$pdf ->Cell(45 ,5,'First Year, Second Semester',0,1);


// SUBJECTS
$pdf->SetFont('Arial','','9');

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'CCGE',0,0);
$pdf ->Cell(15 ,4,'104',0,0);
$pdf ->Cell(90 ,4,'Mathematics in the Modern World',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'CCGE',0,0);
$pdf ->Cell(15 ,4,'105',0,0);
$pdf ->Cell(90 ,4,'The Contemporary World',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'ECGE',0,0);
$pdf ->Cell(15 ,4,'101',0,0);
$pdf ->Cell(90 ,4,'Living in the I.T. Era',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(20 ,4,'CCGE 101',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'FILI',0,0);
$pdf ->Cell(15 ,4,'102',0,0);
$pdf ->Cell(90 ,4,'Pagbasa at Pagsulat tungo sa Pananaliksik',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(20 ,4,'FILI 101',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'CHCL',0,0);
$pdf ->Cell(15 ,4,'102',0,0);
$pdf ->Cell(90 ,4,'Franciscan Core Values and Culture',0,0);
$pdf ->Cell(10 ,4,'1',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'1',0,0);
$pdf ->Cell(20 ,4,'CHCL 101',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'TCED',0,0);
$pdf ->Cell(15 ,4,'102',0,0);
$pdf ->Cell(90 ,4,'The Teaching Profession',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'PKED',0,0);
$pdf ->Cell(15 ,4,'105',0,0);
$pdf ->Cell(90 ,4,'Facilitating Learner-Centered Teaching',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(20 ,4,'TCED 101',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'MCEE',0,0);
$pdf ->Cell(15 ,4,'103',0,0);
$pdf->SetFont('Arial','','6.7');
$pdf ->Cell(90 ,4,'Teaching Social Studies in the Elementary Grades (Phil. History and Government)',0,0);
$pdf->SetFont('Arial','','9');
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'PHED',0,0);
$pdf ->Cell(15 ,4,'102',0,0);
$pdf ->Cell(90 ,4,'Individual/ Dual Sports',0,0);
$pdf ->Cell(10 ,4,'2',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'2',0,0);
$pdf ->Cell(20 ,4,'PHED 101',0,1);

// LAST LINE PER SEM
$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'NSTP',0,0);
$pdf ->Cell(15 ,4,'2',0,0);
$pdf ->Cell(90 ,4,'National Service Training Program 2',0,0);
$pdf ->Cell(10 ,4,'3','B',0);
$pdf ->Cell(9 ,4,'0','B',0);
$pdf ->Cell(11 ,4,'(3)','B',0);
$pdf ->Cell(20 ,4,'NSTP 1',0,1);



$pdf ->Cell(20 ,5,'',0,0);

$pdf->SetFont('Arial','','10');
$pdf ->Cell(102 ,5,'',0,0);
$pdf ->Cell(32 ,6,'TOTAL',0,0);
$pdf->SetFont('Arial','B','10');
$pdf ->Cell(10 ,6,'24',0,1);
$pdf ->Cell(180 ,6,'',0,1);
$pdf ->Cell(180 ,6,'',0,1);










//YEAR , SEMESTER
$pdf ->Cell(10 ,5,'',0,0);
$pdf ->Cell(45 ,5,'Second Year, First Semester',0,1);

// SUBJECTS

$pdf->SetFont('Arial','','9');
$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'CCGE',0,0);
$pdf ->Cell(15 ,4,'106',0,0);
$pdf ->Cell(90 ,4,'Purposive Communication',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'CCGE',0,0);
$pdf ->Cell(15 ,4,'107',0,0);
$pdf ->Cell(90 ,4,'Art Appreciation',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'ECGE',0,0);
$pdf ->Cell(15 ,4,'102',0,0);
$pdf ->Cell(90 ,4,'The Entrepreneurial Mind',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(20,4,'CCGE 104, CCGE 105',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'FILI',0,0);
$pdf ->Cell(15 ,4,'103',0,0);
$pdf ->Cell(90 ,4,'Masining na Pagpapahayag',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(20,4,'FILI 102',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'TCED',0,0);
$pdf ->Cell(15 ,4,'103',0,0);
$pdf ->SetFont('Arial','','8');
$pdf ->Cell(90 ,4,'The Teacher and the Community, School Culture and Org. Leadership',0,0);
$pdf ->SetFont('Arial','','9');
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'PKED',0,0);
$pdf ->Cell(15 ,4,'106',0,0);
$pdf ->Cell(90 ,4,'Assessment in Learning 1',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'MCEE',0,0);
$pdf ->Cell(15 ,4,'104',0,0);
$pdf ->SetFont('Arial','','7.2');
$pdf ->Cell(90 ,4,'Teaching Social Studies in the Elementary Grades (Culture and Geography)',0,0);
$pdf ->SetFont('Arial','','9');
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'MCEE',0,0);
$pdf ->Cell(15 ,4,'105',0,0);
$pdf ->SetFont('Arial','','7');
$pdf ->Cell(90 ,4,'Pagtuturo ng Filipino sa Elementarya 1 (Istruktura at Gamit ng Wikang Filipino)',0,0);
$pdf ->SetFont('Arial','','9');
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'PHED',0,0);
$pdf ->Cell(15 ,4,'103',0,0);
$pdf ->Cell(90 ,5,'Team Sports',0,0);
$pdf ->Cell(10 ,4,'2','B',0);
$pdf ->Cell(10 ,4,'0','B',0);
$pdf ->Cell(10 ,4,'2','B',1);


$pdf ->Cell(20 ,5,'',0,0);

$pdf->SetFont('Arial','','10');
$pdf ->Cell(102 ,5,'',0,0);
$pdf ->Cell(32 ,6,'TOTAL',0,0);
$pdf->SetFont('Arial','B','10');
$pdf ->Cell(10 ,6,'26',0,1);
$pdf ->Cell(180 ,6,'',0,1);
$pdf ->Cell(180 ,6,'',0,1);






//YEAR , SEMESTER
$pdf ->Cell(10 ,5,'',0,0);
$pdf ->Cell(45 ,5,'Second Year, Second Semester',0,1);
$pdf->SetFont('Arial','','9');

// SUBJECTS

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'CCGE',0,0);
$pdf ->Cell(15 ,4,'108',0,0);
$pdf ->Cell(90 ,4,'Ethics',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(20 ,4,'CCGE 103',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'ECGE',0,0);
$pdf ->Cell(15 ,4,'103',0,0);
$pdf ->Cell(90 ,4,'Reading Visual Art',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(20 ,4,'CCGE 106, CCGE 107',0,1);


$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'RIZL',0,0);
$pdf ->Cell(15 ,4,'100',0,0);
$pdf ->Cell(90 ,4,'Rizal\'s Life, Works & Writings',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(20 ,4,'CCGE 102',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'TCED',0,0);
$pdf ->Cell(15 ,4,'104',0,0);
$pdf ->Cell(90 ,4,'Foundation of Special and Inclusive Education',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'PKED',0,0);
$pdf ->Cell(15 ,4,'107',0,0);
$pdf ->Cell(90 ,4,'Assessment in Learning 2',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(20 ,4,'PKED 106',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'MCEE',0,0);
$pdf ->Cell(15 ,4,'106',0,0);
$pdf ->Cell(90 ,4,'Pagtuturo ng Filipino sa Elementarya II (Panitikan ng Pilipinas)',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(20 ,4,'MCEE 105',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'MCEE',0,0);
$pdf ->Cell(15 ,4,'107',0,0);
$pdf ->Cell(90 ,4,'Teaching Math in the Primary Grades',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'MCEE',0,0);
$pdf ->Cell(15 ,4,'108',0,0);
$pdf ->Cell(90 ,4,'Teaching Math in the Intermediate Grades',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'RESE',0,0);
$pdf ->Cell(15 ,4,'101',0,0);
$pdf ->Cell(90 ,5,'Introduction to Research',0,0);
$pdf ->Cell(10 ,4,'1',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'1',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'PHED',0,0);
$pdf ->Cell(15 ,4,'104',0,0);
$pdf ->Cell(90 ,5,'Sports Management',0,0);
$pdf ->Cell(10 ,4,'2','B',0);
$pdf ->Cell(10 ,4,'0','B',0);
$pdf ->Cell(10 ,4,'2','B',1);


$pdf ->Cell(20 ,5,'',0,0);

$pdf->SetFont('Arial','','10');
$pdf ->Cell(102 ,5,'',0,0);
$pdf ->Cell(32 ,6,'TOTAL',0,0);
$pdf->SetFont('Arial','B','10');
$pdf ->Cell(10 ,6,'27',0,1);
$pdf ->Cell(180 ,6,'',0,1);
$pdf ->Cell(180 ,6,'',0,1);
$pdf ->Cell(180 ,6,'',0,1);


$pdf->Cell(180,10,'',0,1);



$pdf ->Cell(10 ,5,'',0,0);
$pdf ->Cell(45 ,5,'Third Year, Second Semester',0,1);

// SUBJECTS

$pdf->SetFont('Arial','','9');
$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'LEMA',0,0);
$pdf ->Cell(15 ,4,'100',0,0);
$pdf ->Cell(90 ,4,'Fundamentals of Leadership and Management',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'RESE',0,0);
$pdf ->Cell(15 ,4,'102',0,0);
$pdf ->Cell(90 ,4,'Research in Elementary Education',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(20 ,4,'RESE 101',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'FRED',0,0);
$pdf ->Cell(15 ,4,'101',0,0);
$pdf ->Cell(90 ,4,'The Franciscan Educator 1',0,0);
$pdf ->Cell(10 ,4,'1',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'1',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'MCEE',0,0);
$pdf ->Cell(15 ,4,'113',0,0);
$pdf ->Cell(90 ,4,'Teaching PE and Health in the Elementary Grades',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'MCEE',0,0);
$pdf ->Cell(15 ,4,'114',0,0);
$pdf ->Cell(90 ,4,'Teaching English in the Elementary Grades (Language Arts)',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'MCEE',0,0);
$pdf ->Cell(15 ,4,'115',0,0);
$pdf ->Cell(90 ,4,'Teaching English in the Elementary Grades through Literature',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'MCEE',0,0);
$pdf ->Cell(15 ,4,'116',0,0);
$pdf ->Cell(90 ,4,'Content and Pedagogy for the Mother-Tongue',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'MCEE',0,0);
$pdf ->Cell(15 ,4,'117',0,0);
$pdf->SetFont('Arial','','8.5');
$pdf ->Cell(90 ,4,'Good Manners and Right Conduct (Edukasyon sa Pagpapakatao)',0,0);
$pdf->SetFont('Arial','','9');
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,1);

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'MCEE',0,0);
$pdf ->Cell(15 ,4,'118',0,0);
$pdf ->Cell(90 ,4,'Technology for Teaching in the Elementary Grades',0,0);
$pdf ->Cell(10 ,4,'3','B',0);
$pdf ->Cell(10 ,4,'0','B',0);
$pdf ->Cell(10 ,4,'3','B',0);
$pdf ->Cell(20 ,4,'PKED 108',0,1);





$pdf ->Cell(20 ,5,'',0,0);

$pdf->SetFont('Arial','','10');
$pdf ->Cell(102 ,5,'',0,0);
$pdf ->Cell(32 ,6,'TOTAL',0,0);
$pdf->SetFont('Arial','B','10');
$pdf ->Cell(10 ,6,'25',0,1);
$pdf ->Cell(180 ,6,'',0,1);










$pdf ->Cell(10 ,5,'',0,0);
$pdf ->Cell(45 ,5,'Fourth Year, First Semester',0,1);

// SUBJECTS

$pdf->SetFont('Arial','','9');

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'FRED',0,0);
$pdf ->Cell(15 ,4,'102',0,0);
$pdf ->Cell(90 ,4,'The Franciscan Educator 2',0,0);
$pdf ->Cell(10 ,4,'1',0,0);
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'1',0,1);

$pdf->SetFont('Arial','','9');

$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'ELED',0,0);
$pdf ->Cell(15 ,4,'111',0,0);
$pdf->SetFont('Arial','','7');
$pdf ->Cell(90 ,4,'Field Study 1 (Observations of Teaching-Learning in Actual School Environment)',0,0);
$pdf->SetFont('Arial','','9');
$pdf ->Cell(10 ,4,'0',0,0);
$pdf ->Cell(10 ,4,'3',0,0);
$pdf ->Cell(10 ,4,'3',0,1);

$pdf->SetFont('Arial','','9');
$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'ELED',0,0);
$pdf ->Cell(15 ,4,'112',0,0);
$pdf ->Cell(90 ,4,'Field Study 2 (Participation and Teaching Assistantship',0,0);
$pdf ->Cell(10 ,4,'0','B',0);
$pdf ->Cell(10 ,4,'3','B',0);
$pdf ->Cell(10 ,4,'3','B',1);




$pdf ->Cell(20 ,5,'',0,0);

$pdf->SetFont('Arial','','10');
$pdf ->Cell(102 ,5,'',0,0);
$pdf ->Cell(33 ,6,'TOTAL',0,0);
$pdf->SetFont('Arial','B','10');
$pdf ->Cell(10 ,6,'7',0,1);
$pdf ->Cell(180 ,6,'',0,1);




$pdf ->Cell(10 ,5,'',0,0);
$pdf ->Cell(45 ,5,'Fourth Year, Second Semester',0,1);

// SUBJECTS
$pdf->SetFont('Arial','','9');


$pdf ->Cell(5 ,4,'',0,1);
$pdf ->Cell(5 ,4,'',0,0);
$pdf ->Cell(10 ,4,'','B',0);
$pdf ->Cell(15 ,4,'TIED',0,0);
$pdf ->Cell(15 ,4,'113',0,0);
$pdf ->Cell(90 ,4,'Teaching Internship',0,0);
$pdf ->Cell(10 ,4,'0','B',0);
$pdf ->Cell(10 ,4,'6','B',0);
$pdf ->Cell(10 ,4,'6','B',0);
$pdf ->Cell(20 ,4,'ELED 111 & 112',0,1);






$pdf ->Cell(20 ,5,'',0,0);

$pdf->SetFont('Arial','','10');
$pdf ->Cell(102 ,5,'',0,0);
$pdf ->Cell(33 ,6,'TOTAL',0,0);
$pdf->SetFont('Arial','B','10');
$pdf ->Cell(10 ,6,'6',0,1);
$pdf ->Cell(180 ,6,'',0,1);






$pdf ->Cell(20 ,5,'',0,1);


$pdf->SetFont('Arial','B','10');
$pdf ->Cell(95 ,4,'',0,0);
$pdf ->Cell(34 ,4,'TOTAL NUMBER OF UNITS',0,0,'C');
$pdf ->Cell(16 ,4,'',0,0);
$pdf ->Cell(9 ,4,'',0,0);
$pdf ->Cell(10 ,4,'169','',1,1);
$pdf ->Cell(20 ,4,'',0,0);
$pdf ->Cell(94 ,4,'',0,0,'C');
$pdf ->Cell(11 ,4,'',0,0);
$pdf ->Cell(9 ,4,'',0,0);
$pdf ->Cell(10 ,1,'','',1,1);



$pdf ->Output();
?>