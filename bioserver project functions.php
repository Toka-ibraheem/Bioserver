<!DOCTYPE html>
<html lang="en">

<head>
    <title>Response for your Biological Issues </title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="CSS/result style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>

    <div class="bg-img"></div>
    <div class="bg-text" style="text-align: left;">

    
    


            <h1 style="text-align: center">DNA Sequence Issues </h1>

        
        <hr />

<!--////////////////////////////////////////////////////////////////////////////////
             /*implementing biological functions when submit*/ 
/////////////////////////////////////////////////////////////////////////////////-->

 <?php
if(isset($_POST['submit']))
{

    $Seq = $_POST["seq"];
    $k = $_POST["k"];

////////////////////////////////////////////////////////////////////////////////

/*This function returns the complement of the given sequence by looping over it and 
replacing each A with T , T with A ,G with C and C with G */

function complement ($seq)
{   
    $seq=strtoupper($seq);
    $len = strlen($seq);
    $op_seq = " ";

    for ($i=0 ; $i<$len; $i++)
    {
       switch($seq[$i])
        {
           case "A":
           $op_seq = $op_seq . "T";
           break;

            case "C":
            $op_seq = $op_seq . "G";
            break;
     
            case "G":
            $op_seq = $op_seq . "C";
            break;
                
            case "T":
            $op_seq = $op_seq . "A";
            break;

            default :
            $op_seq = $op_seq . "X";
        
            break;
                

         }
        
    }
          return strtoupper($op_seq);
}

////////////////////////////////////////////////////////////////////////////////

/*This function returns the reverse of the given sequence by looping
over it from the end to start and putting it in new string. */
function reverse($seq)
{   
    $seq=strtoupper($seq);
    $len = strlen($seq);
    $op_seq = " ";

    for ($i=$len-1 ; $i>=0; $i--)
   {
      $op_seq = $op_seq . $seq[$i];

   }
     return strtoupper($op_seq);
}

////////////////////////////////////////////////////////////////////////////////

/*This function returns the reverse complement of the given sequence by looping over it 
from the end to start and replacing each A with T , T with A ,G with C and C with G. */

function reverse_complement($seq)
{   
   $seq=strtoupper($seq);
   $len = strlen($seq);
   $op_seq = " ";

   for ($i=$len-1 ; $i>=0; $i--)
   {
       switch($seq[$i])
      {
        case "A":
        $op_seq = $op_seq . "T";
        break;

        case "C":
        $op_seq = $op_seq . "G";
        break;

       case "G":
       $op_seq = $op_seq . "C";
       break;

       case "T":
       $op_seq = $op_seq . "A";
       break;

       default :
       $op_seq = $op_seq . "X";

       break;
     }

  }
       return strtoupper($op_seq);
}



////////////////////////////////////////////////////////////////////////////////

/*this function calculate the GC content percentage by looping over the given sequence, 
checks if the base is C or G, count it and save it in the "cnt" variable,then it 
divide that count over the length of that sequence and multiply it by 100.*/

//formula used : Count(G + C)/Count(A + T + G + C) * 100%

function GC_content ($seq)
{   
    $seq=strtoupper($seq);
    $len=strlen($seq);
    $cnt=0;
    for ($i=0 ; $i<$len ; $i++)
      {
        if ($seq[$i]=="C" || $seq[$i]=="G")
            { $cnt=$cnt+1;}
     }
    $GC=($cnt/$len)*100;
    return $GC;
}


////////////////////////////////////////////////////////////////////////////////

/*This function converts DNA serquencs to RNA sequences by looping over the given sequence and replace each T base with U base .*/

function transcription($seq)
{
    $seq=strtoupper($seq);
    return strtoupper(str_replace ("T","U",$seq));
}

////////////////////////////////////////////////////////////////////////////////

/* This function used to map each amino acid to its correspoding protein letter*/

function AminoAcids($Codon)
{   
    $Met = ["AUG"];
    $Ala = ["GCU", "GCC", "GCA", "GCG"];
    $Arg = ["CGU", "CGC", "CGA", "CGG", "AGA", "AGG"];
    $Asn = ["AAU", "AAC"];
    $Asp = ["GAU", "GAC"];
    $Cys = ["UGU", "UGC"];
    $Gln = ["CAA"," CAG"];
    $Glu = ["GAA", "GAG"];
    $Gly = ["GGU", "GGC", "GGA", "GGG"];
    $His = ["CAU", "CAC"];
    $Ile = ["AUU", "AUC", "AUA"];
    $Leu = ["CUU", "CUC", "CUA", "CUG", "UUA", "UUG"];
    $Lys = ["AAA", "AAG"];
    $Phe = ["UUU", "UUC"];
    $Pro = ["CCU", "CCC", "CCA", "CCG"];
    $Ser = ["UCU", "UCC", "UCA", "UCG", "AGU", "AGC"];
    $Thr = ["ACU", "ACC", "ACA", "ACG"];
    $Trp = ["UGG"];
    $Tyr = ["UAU", "UAC"];
    $Val = ["GUU", "GUC", "GUA", "GUG"];
    $STOP= ["UAA", "UGA", "UAG"];

  if(in_array($Codon,$Met)) {return "M";}

  elseif(in_array($Codon,$Ala)) {return "A";}

  elseif(in_array($Codon,$Arg)) {return "R";}

  elseif(in_array($Codon,$Asn)) {return "N";}

  elseif(in_array($Codon,$Asp)) {return "D";}   

  elseif(in_array($Codon,$Cys)) {return "C";}

  elseif(in_array($Codon,$Gln)) {return "Q";}
  
  elseif(in_array($Codon,$Glu)) {return "E";}
  
  elseif(in_array($Codon,$Gly)) {return "G";}
 
  elseif(in_array($Codon,$His)) {return "H";}

 elseif(in_array($Codon,$Ile)) {return "I";}

 elseif(in_array($Codon,$Leu)) {return "L";}

 elseif(in_array($Codon,$Lys)) {return "K";}

 elseif(in_array($Codon,$Phe)) {return "F";}

 elseif(in_array($Codon,$Pro)) {return "P";}

 elseif(in_array($Codon,$Ser)) {return "S";}

 elseif(in_array($Codon,$Thr)) {return "T";}

 elseif(in_array($Codon,$Trp)) {return "W";}

 elseif(in_array($Codon,$Tyr)) {return "Y";}

 elseif(in_array($Codon,$Val)) {return "V";}
 
 elseif(in_array($Codon,$STOP)) {return " ";}

 else{return -1; }


}

////////////////////////////////////////////////////////////////////////////////
/* This function translates gene sequences to protein by first converting 
DNA to RNA using the transcription function, then it map each codon 
(3 nucluetides) to its amino acid using the AminoAcids fucntion and
finally convert each amino acid to the corresponding protein letter.
*/

function translate($seq)
{ 

   $seq = strtoupper($seq);
   $rna = transcription($seq);

   $Codon =str_split($rna,3);
   $Len= sizeof($Codon);
   $Protein="";
   for($i=0 ;$i<$Len ; $i++)
     {

     $Protein= $Protein.AminoAcids($Codon[$i]);

     }

   return $Protein;
}


////////////////////////////////////////////////////////////////////////////////

/*This function calculate the GpC islands by looping over the given sequence, checks if the base is C,
count it and save it in "cntc" variable, and checks if the base is G, count it and save it in "cntg"
variable, then it multiplies them, and divide the multiiplcation result over the length of that sequence.*/

//formula used : Count(G)*Count(C)/Count(A + T + G + C).

function CpG_islands($seq)
{   
   $seq=strtoupper($seq);
   $len=strlen($seq);
   $cntc=0;
   $cntg=0;
   $CpG=0;
   for ($i=0 ; $i<$len ; $i++)
     {
       if ($seq[$i]=="C" )
          {$cntc=$cntc+1;}

       if ($seq[$i]=="G" )
          {$cntg=$cntg+1;}
     }
   
     $CpG=($cntc*$cntg)/$len;
    return $CpG;
}


////////////////////////////////////////////////////////////////////////////////
/*This function finds the most frequent k-mer in a given sequence by looping over the given sequence, 
extracting every k-mer of length k, storing it in "kmers" array , then count how many each item 
occured in it using the "array_count_values" function, then sorting them in des order using the 
"arsort" function,finally extracting the most frequent k-mer using the "array_slice" and "array_keys" functions*/

function freq_kmer($seq,$k)
{ 
   $seq= strtoupper($seq);
   $kmers=array();
   $len= strlen($seq);
   for ($i=0 ; $i<($len-$k)+1; $i++)
     {
        array_push($kmers,substr($seq,$i,$k));
     }
    $count=array_count_values($kmers);
    arsort($count);
    $most=array_slice(array_keys($count),0);

    return strtoupper($most[0]);
}


////////////////////////////////////////////////////////////////////////////////

/*Here we call the fucntion checked ny the user by iterating over the check-list, 
  if it's checked, we call the corresponding function.
*/

echo "<fieldset>";
if(!empty($_POST['check_list']))
{
    foreach($_POST['check_list'] as $checked)
    {           echo "<h2><strong> <i class='fa fa-check-square-o'> </i> Select Issue\s : </strong> $checked </h2>";
                    if($checked=="Complement")
                    {
                        echo "<br>". complement($Seq) ."<br>" ."<br>";

                    }
                    elseif($checked=="Reverse")
                    {
                        echo "<br>". reverse($Seq) ."<br>"."<br>" ;
                    }
                    elseif($checked=="Reverse Complement")
                    {
                        echo  "<br>". reverse_complement ($Seq) ."<br>"."<br>" ;
                    }
                    elseif($checked=="Protein Translation")
                    {
                        echo  "<br>". translate($Seq) ."<br>" ."<br>";
                    }
                    elseif($checked=="GC_content")
                    {
                        echo  "GC content = ". GC_content($Seq) ."<br>"."<br>" ;
                    }
                    elseif($checked=="CpG islands")
                    {
                        echo "CpG islands = ". CpG_islands($Seq) ."<br>" ."<br>";
                    }
                    elseif($checked=="Transcription")
                    {
                        echo "<br>". transcription($Seq) ."<br>" ."<br>";
                    }
                else
                    {
                        echo "<br>". freq_kmer($Seq,$k);
                    }
    } 
 }
            echo "</fieldset><br><br>";





}

?>

<!--/////////////////////////////////DATABASE CONNECTION///////////////////////////////////////-->


<?php


if(isset($_POST['submit1'])) 
 {
            $servername = "localhost";
            $username = "root";
            $password = "usbw";
            $dbname = "bioserverdb";

            
//////////////////////////////////////TABLE GENES//////////////////////////////////////////

///////////////////////////////////////INSERT//////////////////////////////////////////////

/* This function inserts data in Genes table by passing the values entered by the user to the 
   as the vales of the INSERT INTO TABLE (table cols) VALUES (user input).
*/
            
            function DBGene_Insert_Form($Conn,$Table)
            {
            echo "Insert Query from Input form!<br>";
            

                
                $GeneName = $_POST['GeneName'];
                $GeneID = $_POST['GeneID'];
                $Description = $_POST['Description'];
                $GeneSeq = $_POST['GeneSeq'];
                $Length = $_POST['Length'];


                
                if (!(empty($GeneName)&& empty($GeneID)&& empty($Description)&&  empty($GeneSeq)&& empty($Length)))
                {
                    $sql = "INSERT INTO $Table (`GeneName`, `GeneID`, `Description`, `GeneSeq`, `Length`) 
                    VALUES ('$GeneName ', '$GeneID', '$Description', '$GeneSeq','$Length ')";
                
                    if ($Conn->query($sql) === TRUE) {
                    echo "Record inserted successfully<br>";
                    } 
                    else {
                    echo "Error: " . $sql . "<br>" . $Conn->error;
                    }
                
                }

            }

//////////////////////////////////////UPDATE//////////////////////////////////////////////

/* This function updates a value from Genes table by taking the column to change, 
   the new value and a condition that specifies the row to change.
*/

            function DBGene_Update_Form($Conn,$Table)
            {

                echo "Update Query from Input form!<br>";
                $CWhere=$_POST['CWhere1'];
                $value=$_POST['value1'];

                $CUpdate=$_POST['CUpdate1'];
                $VNew=$_POST['VNew1'];

                $sql = "UPDATE $Table SET `$CUpdate` = '$VNew' WHERE `$CWhere` =$value";

                if ($Conn->query($sql) === TRUE)
                {
                    echo "Record updated successfully<br>";
                } 
                else 
                {
                    echo "Error: " . $sql . "<br>" . $Conn->error;
                }
            
            }

///////////////////////////////////DELETE/////////////////////////////////////////////

/* This function delets data in Genes table by taking a condition that specifies the row to delete.*/


            function DBGene_Delete_Form($Conn,$Table)
            {
                
                echo "Delete Query from Input form!<br>";
                $CDelete=$_POST['CDelete1'];
                $VDelete=$_POST['VDelete1'];

                $sql = "DELETE FROM $Table WHERE $CDelete = $VDelete";

                if ($Conn->query($sql) === TRUE) 
                {
                    echo "Record Deleted successfully<br>";
                } 
                else 
                {
                    echo "Error: " . $sql . "<br>" . $Conn->error;
                }
            
            }

///////////////////////////////////SELECT/////////////////////////////////////////////

/* This function selects columns from Genes table using the CSelet variable that holds
   the checked columns by user, checks if rows exists and returns them.
*/

            function DBGene_Select_Form($Conn,$Table)
            {
                
                echo "Select Query from Input form!<br>";
                $CSelect1=$_POST['CSelect1'];


                if(!empty($CSelect1))
                { 
                
                
                            if(count($CSelect1)==1)
                            {
                                $sql = "SELECT `$CSelect1[0]` FROM $Table";
                                $result = $Conn->query($sql);
                                if ($result->num_rows > 0) 
                                {
                                        echo "<h3> SQL Select Results: </h3><br>";
                                    
                                        echo "<table><tr><th>$CSelect1[0]</th></tr> ";
                                        while($row = $result->fetch_assoc()) 
                                        {
                                        echo "<tr><td>".$row[$CSelect1[0]]."</td></tr>";
                                        }
                                        echo "</table>";
                                        } 
                                        else {
                                        echo "0 results";
                                }

                            }
                            elseif(count($CSelect1)==2)
                            {
                                $sql = "SELECT `$CSelect1[0]`,`$CSelect1[1]` FROM $Table";
                                $result = $Conn->query($sql);
                                if ($result->num_rows > 0) 
                                {
                                        echo "<h3> SQL Select Results: </h3><br>";
                                    
                                        echo "<table><tr><th>$CSelect1[0]</th><td>".$CSelect1[1]."</td></tr><br> ";
                                        while($row = $result->fetch_assoc()) 
                                        {
                                        echo "<tr><td>".$row[$CSelect1[0]]."</td><td>".$row[$CSelect1[1]]."</td></tr><br>";
                                        }
                                        echo "</table>";
                                        } 
                                        else {
                                        echo "0 results";
                                }
                            }
                            elseif(count($CSelect1)==3)
                            {
                                $sql = "SELECT `$CSelect1[0]`,`$CSelect1[1]`,`$CSelect1[2]` FROM $Table";
                                $result = $Conn->query($sql);
                                if ($result->num_rows > 0) 
                                {
                                        echo "<h3> SQL Select Results: </h3><br>";
                                    
                                        echo "<table><tr><th>$CSelect1[0]</th><td>".$CSelect1[1]."</td><td>".$CSelect1[2]."</td></tr> ";
                                        while($row = $result->fetch_assoc()) 
                                        {
                                        echo "<tr><td>".$row[$CSelect1[0]]."</td><td>".$row[$CSelect1[1]]."</td><td>".$row[$CSelect1[2]]."</td></tr>";
                                        }
                                        echo "</table>";
                                        } 
                                        else {
                                        echo "0 results";
                                }
                            }
                            elseif(count($CSelect1)==4)
                            {
                                $sql = "SELECT `$CSelect1[0]`,`$CSelect1[1]`,`$CSelect1[2]`,`$CSelect1[3]` FROM $Table";
                                $result = $Conn->query($sql);
                                if ($result->num_rows > 0) 
                                {
                                        echo "<h3> SQL Select Results: </h3><br>";
                                    
                                        echo "<table><tr><th>$CSelect1[0]</th><td>".$CSelect1[1]."</td><td>".$CSelect1[2]."</td><td>".$CSelect1[3]."</td></tr> ";
                                        while($row = $result->fetch_assoc()) 
                                        {
                                        echo "<tr><td>".$row[$CSelect1[0]]."</td><td>".$row[$CSelect1[1]]."</td><td>".$row[$CSelect1[2]]."</td><td>".$row[$CSelect1[3]]."</td></tr>";
                                        }
                                        echo "</table>";
                                        } 
                                        else {
                                        echo "0 results";
                                        }
                            }

                            elseif(count($CSelect1)==5)
                            {
                                $sql = "SELECT `$CSelect1[0]`,`$CSelect1[1]`,`$CSelect1[2]`,`$CSelect1[3]`, `$CSelect1[4]`FROM $Table";
                                $result = $Conn->query($sql);
                                if ($result->num_rows > 0) 
                                {
                                        echo "<h3> SQL Select Results: </h3><br>";
                                    
                                        echo "<table><tr><th>$CSelect1[0]</th><td>".$CSelect1[1]."</td><td>".$CSelect1[2]."</td><td>".$CSelect1[3]."</td><td>".$CSelect1[4]."</td></tr> ";
                                        while($row = $result->fetch_assoc()) 
                                        {
                                        echo "<tr><td>".$row[$CSelect1[0]]."</td><td>".$row[$CSelect1[1]]."</td><td>".$row[$CSelect1[2]]."</td><td>".$row[$CSelect1[3]]."</td><td>".$row[$CSelect1[4]]."</td></tr>";
                                        }
                                        echo "</table>";
                                        } 
                                        else {
                                        echo "0 results";
                }
                            }


                        
                }  
                
            }
        
////////////////////////////////////PROTEINS TABLE////////////////////////////////////////////

//////////////////////////////////////////INSERT/////////////////////////////////////////////

/* This function inserts data in Proteins table by passing the values entered by the user to the 
   as the vales of the INSERT INTO TABLE (table cols) VALUES (user input).
*/

function DBProtein_Insert_Form($Conn,$Table)
{
echo "Insert Query from Input form!<br>";


    $ProteinName = $_POST['ProteinName'];
    $ProteinId = $_POST['ProteinId'];
    $Organism = $_POST['Organism'];
    $ProteinSeq = $_POST['ProteinSeq'];

    
    if (!(empty($ProteinName)&& empty($ProteinId)&& empty($Organism)&& empty($ProteinSeq))) 
    {
        $sql = "INSERT INTO $Table (`ProteinName`, `ProteinId`, `Organism`, `ProteinSeq`) 
        VALUES ('$ProteinName', '$ProteinId', '$Organism', '$ProteinSeq')";
    
        if ($Conn->query($sql) === TRUE) {
        echo "Record inserted successfully<br>";
        } else {
        echo "Error: " . $sql . "<br>" . $Conn->error;
        }
    
    }

}

//////////////////////////////////////////UPDATE/////////////////////////////////////////////

/* This function updates a value from Proteins table by taking the column to change, 
   the new value and a condition that specifies the row to change.
*/

function DBProtein_Update_Form($Conn,$Table)
{

    echo "Update Query from Input form!<br>";
    $CWhere=$_POST['CWhere'];
    $value=$_POST['value'];

    $CUpdate=$_POST['CUpdate'];
    $VNew=$_POST['VNew'];

    $sql = "UPDATE $Table SET `$CUpdate` = '$VNew' WHERE `$CWhere` =$value";

    if ($Conn->query($sql) === TRUE)
    {
        echo "Record updated successfully<br>";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $Conn->error;
    }

}

//////////////////////////////////////////DELETE/////////////////////////////////////////////

/* This function delets data in Proteins table by taking a condition that specifies the row to delete.*/

function DBProtein_Delete_Form($Conn,$Table)
{
    
    echo "Delete Query from Input form!<br>";
    $CDelete=$_POST['CDelete'];
    $VDelete=$_POST['VDelete'];

    $sql = "DELETE FROM $Table WHERE `$CDelete` =$VDelete";

    if ($Conn->query($sql) === TRUE) 
    {
        echo "Record Deleted successfully<br>";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $Conn->error;
    }

}

//////////////////////////////////////////SELECT/////////////////////////////////////////////

/* This function selects columns from Proteins table using the CSelet variable that holds
   the checked columns by user, checks if rows exists and returns them.
*/

function DBProtein_Select_Form($Conn,$Table)
{
    
    echo "Select Query from Input form!<br>";
    $CSelect=$_POST['CSelect'];


    if(!empty($CSelect))
    { 
    
    
                if(count($CSelect)==1)
                {
                    $sql = "SELECT `$CSelect[0]` FROM $Table";
                    $result = $Conn->query($sql);
                    if ($result->num_rows > 0) 
                    {
                            echo "<h3> SQL Select Results: </h3><br>";
                        
                            echo "<table><tr><th>$CSelect[0]</th></tr> ";
                            while($row = $result->fetch_assoc()) 
                            {
                            echo "<tr><td>".$row[$CSelect[0]]."</td></tr>";
                            }
                            echo "</table>";
                            } 
                            else {
                            echo "0 results";
                    }

                }
                elseif(count($CSelect)==2)
                {
                    $sql = "SELECT `$CSelect[0]`,`$CSelect[1]` FROM $Table";
                    $result = $Conn->query($sql);
                    if ($result->num_rows > 0) 
                    {
                            echo "<h3> SQL Select Results: </h3><br>";
                        
                            echo "<table><tr><th>$CSelect[0]</th><td>".$CSelect[1]."</td></tr> ";
                            while($row = $result->fetch_assoc()) 
                            {
                            echo "<tr><td>".$row[$CSelect[0]]."</td><td>".$row[$CSelect[1]]."</td></tr>";
                            }
                            echo "</table>";
                            } 
                            else {
                            echo "0 results";
                    }
                }
                elseif(count($CSelect)==3)
                {
                    $sql = "SELECT `$CSelect[0]`,`$CSelect[1]`,`$CSelect[2]` FROM $Table";
                    $result = $Conn->query($sql);
                    if ($result->num_rows > 0) 
                    {
                            echo "<h3> SQL Select Results: </h3><br>";
                        
                            echo "<table><tr><th>$CSelect[0]</th><td>".$CSelect[1]."</td><td>".$CSelect[2]."</td></tr> ";
                            while($row = $result->fetch_assoc()) 
                            {
                            echo "<tr><td>".$row[$CSelect[0]]."</td><td>".$row[$CSelect[1]]."</td><td>".$row[$CSelect[2]]."</td></tr>";
                            }
                            echo "</table>";
                            } 
                            else {
                            echo "0 results";
                    }
                }
                elseif(count($CSelect)==4)
                {
                    $sql = "SELECT $CSelect[0],$CSelect[1],$CSelect[2],$CSelect[3] FROM $Table";
                    $result = $Conn->query($sql);
                    if ($result->num_rows > 0) 
                    {
                            echo "<h3> SQL Select Results: </h3><br>";
                        
                            echo "<table ><tr><th>$CSelect[0]</th><td>".$CSelect[1]."</td><td>".$CSelect[2]."</td><td>".$CSelect[3]."</td></tr> ";
                            while($row = $result->fetch_assoc()) 
                            {
                            echo "<tr><td>".$row[$CSelect[0]]."</td><td>".$row[$CSelect[1]]."</td><td>".$row[$CSelect[2]]."</td><td>".$row[$CSelect[3]]."</td></tr>";
                            }
                            echo "</table>";
                            } 
                            else {
                            echo "0 results";
                            }
                }

             
            
    }  
    
}
//////////////////////////////////////////GENOMES TABLE/////////////////////////////////////////////

//////////////////////////////////////////INSERT///////////////////////////////////////////////////

/* This function inserts data in Genomes table by passing the values entered by the user to the 
   as the vales of the INSERT INTO TABLE (table cols) VALUES (user input).
*/

function DBGenome_Insert_Form($Conn,$Table)
{
echo "Insert Query from Input form!<br>";


    $GenomeName = $_POST['GenomeName'];
    $GenomeId = $_POST['GenomeId'];
    $P_Id = $_POST['P_Id'];
    $G_Id = $_POST['G_Id'];

    
    if (!(empty($GenomeName)&& empty($GenomeId)&& empty($P_Id)&& empty($G_Id))) 
    {
        $sql = "INSERT INTO $Table (`GenomeName`, `GenomeId`, `P_Id`, `G_Id`) 
        VALUES ('$GenomeName', '$GenomeId', '$P_Id', '$G_Id')";
    
        if ($Conn->query($sql) === TRUE) {
        echo "Record inserted successfully<br>";
        } else {
        echo "Error: " . $sql . "<br>" . $Conn->error;
        }
    
    }

}

//////////////////////////////////////////UPDATE///////////////////////////////////////////////////

/* This function updates a value from Genomes table by taking the column to change, 
   the new value and a condition that specifies the row to change.
*/

function DBGenome_Update_Form($Conn,$Table)
{

    echo "Update Query from Input form!<br>";
    $CWhere2=$_POST['CWhere2'];
    $value2=$_POST['value2'];

    $CUpdate2=$_POST['CUpdate2'];
    $VNew2=$_POST['VNew2'];

    $sql = "UPDATE $Table SET `$CUpdate2` = '$VNew2' WHERE `$CWhere2` =$value2";

    if ($Conn->query($sql) === TRUE)
    {
        echo "Record updated successfully<br>";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $Conn->error;
    }

}
//////////////////////////////////////////DELETE///////////////////////////////////////////////////

/* This function delets data in Genomes table by taking a condition that specifies the row to delete.*/

function DBGenome_Delete_Form($Conn,$Table)
{
    
    echo "Delete Query from Input form!<br>";
    $CDelete2=$_POST['CDelete2'];
    $VDelete2=$_POST['VDelete2'];

    $sql = "DELETE FROM $Table WHERE `$CDelete2` =$VDelete2";

    if ($Conn->query($sql) === TRUE) 
    {
        echo "Record Deleted successfully<br>";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $Conn->error;
    }

}

//////////////////////////////////////////SELECT///////////////////////////////////////////////////

/* This function selects columns from Genomes table using the CSelet variable that holds
   the checked columns by user, checks if rows exists and returns them.
*/

function DBGenome_Select_Form($Conn,$Table)
{
    
    echo "Select Query from Input form!<br>";
    $CSelect2=$_POST['CSelect2'];


    if(!empty($CSelect2))
    { 
    
    
                if(count($CSelect2)==1)
                {
                    $sql = "SELECT `$CSelect2[0]` FROM $Table";
                    $result = $Conn->query($sql);
                    if ($result->num_rows > 0) 
                    {
                            echo "<h3> SQL Select Results: </h3><br>";
                        
                            echo "<table><tr><th>$CSelect2[0]</th></tr> ";
                            while($row = $result->fetch_assoc()) 
                            {
                            echo "<tr><td>".$row[$CSelect2[0]]."</td></tr>";
                            }
                            echo "</table>";
                            } 
                            else {
                            echo "0 results";
                    }

                }
                elseif(count($CSelect2)==2)
                {
                    $sql = "SELECT `$CSelect2[0]`,`$CSelect2[1]` FROM $Table";
                    $result = $Conn->query($sql);
                    if ($result->num_rows > 0) 
                    {
                            echo "<h3> SQL Select Results: </h3><br>";
                        
                            echo "<table><tr><th>$CSelect2[0]</th><td>".$CSelect2[1]."</td></tr> ";
                            while($row = $result->fetch_assoc()) 
                            {
                            echo "<tr><td>".$row[$CSelect2[0]]."</td><td>".$row[$CSelect2[1]]."</td></tr>";
                            }
                            echo "</table>";
                            } 
                            else {
                            echo "0 results";
                    }
                }
                elseif(count($CSelect2)==3)
                {
                    $sql = "SELECT `$CSelect2[0]`,`$CSelect2[1]`,`$CSelect2[2]` FROM $Table";
                    $result = $Conn->query($sql);
                    if ($result->num_rows > 0) 
                    {
                            echo "<h3> SQL Select Results: </h3><br>";
                        
                            echo "<table><tr><th>$CSelect2[0]</th><td>".$CSelect2[1]."</td><td>".$CSelect2[2]."</td></tr> ";
                            while($row = $result->fetch_assoc()) 
                            {
                            echo "<tr><td>".$row[$CSelect2[0]]."</td><td>".$row[$CSelect2[1]]."</td><td>".$row[$CSelect2[2]]."</td></tr>";
                            }
                            echo "</table>";
                            } 
                            else {
                            echo "0 results";
                    }
                }
                elseif(count($CSelect2)==4)
                {
                    $sql = "SELECT $CSelect2[0],$CSelect2[1],$CSelect2[2],$CSelect2[3] FROM $Table";
                    $result = $Conn->query($sql);
                    if ($result->num_rows > 0) 
                    {
                            echo "<h3> SQL Select Results: </h3><br>";
                        
                            echo "<table><tr><th>$CSelect2[0]</th><td>".$CSelect2[1]."</td><td>".$CSelect2[2]."</td><td>".$CSelect2[3]."</td></tr> ";
                            while($row = $result->fetch_assoc()) 
                            {
                            echo "<tr><td>".$row[$CSelect2[0]]."</td><td>".$row[$CSelect2[1]]."</td><td>".$row[$CSelect2[2]]."</td><td>".$row[$CSelect2[3]]."</td></tr>";
                            }
                            echo "</table>";
                            } 
                            else {
                            echo "0 results";
                            }
                }

             
            
    }  
    
}
echo "</fieldset><br>";

//////////////////////////////////////////////////////////////////////////////////////////////////

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
echo "<fieldset>";
// Check connection
if ($conn->connect_error)
{
die("Connection failed: " . $conn->connect_error);
}
else
{
    
echo "<h2><i class='fa fa-database'> </i> $dbname  Data Base Connected successfully</h2><br>"; 
    $Table=$_POST['Table'];
    $Operation=$_POST['Operation'];
    echo "<h3><i class='fa fa-reorder'> </i> Change in $Table Table of $dbname Data Base </h3><br>";
        
    if($Table=="Genes"){
            if($Operation=="Insert")
                DBGene_Insert_Form($conn,$Table);
            elseif($Operation=="Update")
                DBGene_Update_Form($conn,$Table);
            elseif($Operation=="Delete")
                DBGene_Delete_Form($conn,$Table);
            elseif($Operation=="Select")
                DBGene_Select_Form($conn,$Table);}
    
    if($Table=="Proteins"){
                    if($Operation=="Insert")
                        DBProtein_Insert_Form($conn ,$Table);
                    elseif($Operation=="Update")
                        DBProtein_Update_Form($conn,$Table);
                    elseif($Operation=="Delete")
                        DBProtein_Delete_Form($conn,$Table);
                    elseif($Operation=="Select")
                        DBProtein_Select_Form($conn,$Table);}
    if($Table=="Genomes"){
        
        if($Operation=="Insert")

            DBGenome_Insert_Form($conn ,$Table);
        elseif($Operation=="Update")
            DBGenome_Update_Form($conn,$Table);
        elseif($Operation=="Delete")
            DBGenome_Delete_Form($conn,$Table);
        elseif($Operation=="Select")
            DBGenome_Select_Form($conn,$Table);
        }
        
            
    

$conn->close();

}

}

?>


    </div>

   
</body>

</html>