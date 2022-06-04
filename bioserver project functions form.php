<!DOCTYPE html>
<html lang="en">

<head>
    <title>Biological Issues</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="CSS/sstyle.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    
    <div class="bg-img"></div>
    <div class="bg-text">
    
        <form name="myform" action="http://localhost:8080/bioserver project functions.php" target="_self" method="POST">

     
        
            <h1 style ="text-align: center" >DNA Sequance Issues </h1>
      
        
        <hr />
<!--//////////////////////////////////////////////SEQUENCE ENTERY///////////////////////////////////////////////////-->

                <fieldset>
                    <legend style="font-size: larger; text-align: center">
                        <b>Data Entry</b>
                    </legend>
                    <label for="seq"><i class="fa fa-pencil-square-o"> </i> Enter DNA Sequance :</label><br/>
                    <textarea name="seq" id="seq"   placeholder="Please Enter DNA Sequence here...." cols="75" rows="15"></textarea>

                    <label for="k"><i class="fa fa-pencil-square-o"> </i> k-value :</label><br/>
                    <textarea name="k" id="k"  placeholder="Please Enter k-value here..." cols="75" rows="1" ></textarea>
                
                <br/>

                <fieldset>

                    
                    <legend style="font-size: large;">
                        <b>Biological Functions </b>
                    </legend>
               
                <label><i class="fa fa-check-square-o"> </i> Select Issue\s :</label><br /><br />

                    <input type="checkbox" id="Issue1" name="check_list[]" value="Complement" >
                    <lable for=Issue1" style="font-size: 20px">Complement</lable>

                    <input type="checkbox" id="Issue2" name="check_list[]" value="Reverse" >
                    <lable for=Issue2" style="font-size: 20px">Reverse</lable>

                    <input type="checkbox" id="Issue3" name="check_list[]" value="Reverse Complement" >
                    <lable for=Issue3" style="font-size: 20px">Reverse Complement</lable>

                    <input type="checkbox" id="Issue4" name="check_list[]" value="Protein Translation" >
                    <lable for=Issue4" style="font-size: 20px">Protein Translation</lable><br><br>

                    <input type="checkbox" id="Issue5" name="check_list[]" value="GC_content">
                    <lable for=Issue5" style="font-size: 20px">GC content</lable>

                    <input type="checkbox" id="Issue6" name="check_list[]" value="CpG islands">
                    <lable for=Issue6" style="font-size: 20px">CpG islands</lable>

                    <input type="checkbox" id="Issue7" name="check_list[]" value="Transcription">
                    <lable for=Issue7" style="font-size: 20px">Transcription</lable><br /><br>

                    <input type="checkbox" id="Issue8" name="check_list[]" value="Most Frequent K-mer">
                    <lable  for=Issue8" style="font-size: 20px">Most Frequent K-mer</lable><br>
                
                </fieldset><br>
            
            </fieldset>

            <input type="submit" name="submit" id="submit" value="Operate Biological Function" />

            
</form>

    </div>

    <script  src="JavaScript/fn.js"></script>
</body>

</html>