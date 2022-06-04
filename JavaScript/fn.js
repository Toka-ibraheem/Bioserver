/*This function raises error in these cases to validate user inputs;
  1- if DNA sequnce is empty.
  2- if DNA sequence length is smaller than 1 nucleotide and larger than 75 nucleotides.
  3- if k-value is empty, not a number, negative or larger than the DNA sequence length.
  4- if there's no any selected functions.
  called when the functions form is submitted.
*/
document.getElementById('submit').onclick=function (){
    var seq=document.forms["myform"]["seq"].value;
    var k=document.forms["myform"]["k"].value;
    
 

                if(seq=="" || !isNaN(seq))
                {
                    alert("Missing or invalid Sequence.");
                    return false;
                }


                
                if(seq.length <3 || seq.length > 75)
                {
                    alert("Please enter DNA Sequence of 3 to 75 nucleotides");
                    return false;
                }


                if((k=="" || isNaN(k) || k<0 || k>seq.length) && document.getElementById("Issue8").checked)
                {
                    alert("Missing or invalid k-value, recommended k-value is 3:5");
                    return false;
                }

                if(seq != "" && !document.getElementById("Issue1").checked && !document.getElementById("Issue2").checked && !document.getElementById("Issue3").checked &&
                   !document.getElementById("Issue4").checked && !document.getElementById("Issue5").checked && !document.getElementById("Issue6").checked && 
                   !document.getElementById("Issue7").checked && !document.getElementById("Issue8").checked)
                
                {
                    alert("Choose at least one function to manipulate the sequence.");
                    return false;
                }
                


            }

