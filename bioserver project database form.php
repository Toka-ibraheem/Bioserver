<!DOCTYPE html>
<html>

<head>
    <title>Discover Database </title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="stylesheet" href="CSS/sstyle.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
<div class="bg-img"></div>
<div class="bg-text">

    <form name="myform" action="http://localhost:8080/bioserver project functions.php" target="_self" method="POST" onsubmit="return validate()">

        <div style="text-align: center;">
            <h1>Discover and Manipulate our Database! </h1>
        </div>

        <hr/>

        <!--///////////////////////////////////////////DATABASE ENTRY////////////////////////////////////////-->

        <fieldset>
            <legend style="font-size: larger; text-align: center">
                <b>DataBase</b>
            </legend>


            <label><i class="fa fa-check-square-o"> </i> Choose Table :</label> <br><br>

            <lable for="Genes"></lable><input type="radio" id="Genes" value="Genes" name="Table"/>
            <lable for="Genes" style="font-size: 20px">Genes</lable>

            <label for="Proteins"></label>
            <input type="radio" id="Proteins" value="Proteins" name="Table"/>
            <lable for="Proteins" style="font-size: 20px">Proteins</lable>
            <br><br>

            <label for="Genomes"></label><input type="radio" id="Genomes" value="Genomes" name="Table"/>
            <lable for="Genomes" style="font-size: 20px">Genomes</lable>
            <br><br>


            <label for="Operation"><i class="fa fa-check-square-o"> </i> Select Operation :</label><br/>
            <select id="Operation" name="Operation" onchange="ShowHideDiv(this)">
                <option id="none" value="none" name="Operation">None</option>
                <option id="Insert" value="Insert" name="Operation">Insert</option>
                <option id="Update" value="Update" name="Operation">Update</option>
                <option id="Delete" value="Delete" name="Operation">Delete</option>
                <option id="Select" value="Select" name="Operation">Select</option>
            </select>
            <br/>


            <!--/////////////////////////////////////////GENES TABLE///////////////////////////////////////-->

            <!--//////////////////////////////////////////INSERT///////////////////////////////////////////-->

            <!--
            insert into table (table cols) values (GeneName , GeneID , Description , GeneSeq , Length)
            -->

            <div id="InsertGene" style="display: none">
                <fieldset>
                    <legend style="font-size: larger; text-align: left">
                        <b>Insert </b>
                    </legend>
                    <label for='GeneName'>Gene Name: </label><br>
                    <input type="text" name='GeneName' id='GeneName' ><br>

                    <label for='GeneID'>Gene ID: </label>
                    <input type="number" name='GeneID' id='GeneID' ><br>

                    <label for='Description'>Description: </label>
                    <input type="text" name='Description' id='Description' ><br>


                    <label for='GeneSeq'>Gene Sequence: </label>
                    <textarea name='GeneSeq' id="GeneSeq" ></textarea> <br>

                    <label for='Length'>Gene Length: </label>
                    <textarea name='Length' id='Length' ></textarea> <br>


                </fieldset>
                <br>
            </div>

            <!--///////////////////////////////////////////UPDATE/////////////////////////////////////////-->

            <!--
            update table set Cupdate1 = VNew1  where Cwhere1 = value1
            -->

            <div id="UpdateGene" style="display: none">
                <fieldset>
                    <legend style="font-size: larger; text-align: left">
                        <b>Update </b>
                    </legend>
                    <label> Choose The Column you want to Update according to it and Write its Value:</label><br><br>
                    <select id="CWhere1" name="CWhere1" style="width: 20%">
                        <option value="none" name="CWhere1">None</option>
                        <option value="GeneName" name="CWhere1">Gene Name</option>
                        <option value="GeneID" name="CWhere1">Gene ID</option>
                        <option value="Description" name="CWhere1">Description</option>
                        <option value="GeneSeq" name="CWhere1">Gene Sequence</option>
                    </select>

                    <input type="text" name="value1" id="value1" placeholder="Value" style="width: 20%"><br>

                    <label for="CUpdate1"> Choose The Column you want to Update it's Value and Write a New
                        Value:</label><br><br>
                    <select id="CUpdate1" name="CUpdate1" style="width: 20%">
                        <option value="none" name="CUpdate1">None</option>
                        <option value="GeneName" name="CUpdate1">Gene Name</option>
                        <option value="GeneID" name="CUpdate1">Gene ID</option>
                        <option value="Description" name="CUpdate1">Description</option>
                        <option value="GeneSeq" name="CUpdate1">Gene Sequence</option>
                        <option value="Length" name="CUpdate1">Sequence Length</option>


                    </select>

                    <input type="text" name="VNew1" id="VNew1" placeholder="New Value" style="width: 20%"
                           ><br>

                </fieldset>
                <br>
            </div>
            <!--////////////////////////////////////////DELETE/////////////////////////////////////////////-->

            <!--
            delete from table where CDelete1 = VDelete1
            -->

            <div id="DeleteGene" style="display: none">
                <fieldset>
                    <legend style="font-size: larger; text-align: left">
                        <b>Delete </b>
                    </legend>
                    <label>Choose The Column you want to Delete record according to it's value and Write it's
                        Value:</label><br><br>
                    <select id='CDelete1' name="CDelete1" style="width: 20%">
                        <option value="none" name="CDelete1">None</option>
                        <option value="GeneName" name="CDelete1">Gene Name</option>
                        <option value="GeneID" name="CDelete1">Gene ID</option>
                        <option value="Description" name="CDelete1">Description</option>
                        <option value="GeneSeq" name="CDelete1">Gene Sequence</option>
                        <option value="Length" name="CDelete1">Sequence Length</option>

                    </select> =
                    <input type="text" name="VDelete1" id="VDelete1" placeholder="Value"
                           style="width: 20%" ><br>
                </fieldset>
                <br>
            </div>

            <!--/////////////////////////////////////////SELECT////////////////////////////////////////////-->

            <!--
            select CSelect1[] from table
            -->

            <div id="SelectGene" style="display: none">
                <fieldset>
                    <legend style="font-size: larger; text-align: left">
                        <b>Select </b>
                    </legend>
                    <label>
                        Select Column/s :</label>
                    <br/><br/>

                    <input id="GeneName2" type="checkbox" name="CSelect1[]" value="GeneName"/>
                    <lable style="font-size: 20px">Gene Name</lable>

                    <input id="GeneID2" type="checkbox" name="CSelect1[]" value="GeneID"/>
                    <lable style="font-size: 20px">Gene ID</lable>

                    <input id="Description2" type="checkbox" name="CSelect1[]" value="Description"/>
                    <lable style="font-size: 20px">Sequence Description</lable><br>


                    <input id="Length2" type="checkbox" name="CSelect1[]" value="Length"/>
                    <lable style="font-size: 20px">Sequence Length</lable>

                    <input id="GeneSeq2" type="checkbox" name="CSelect1[]" value="GeneSeq"/>
                    <lable style="font-size: 20px">Gene Sequence</lable>

                </fieldset>
                <br>
            </div>

            <!--/////////////////////////////////////////PROTEINS TABLE///////////////////////////////////////-->

            <!--/////////////////////////////////////////////INSERT///////////////////////////////////////////-->

            <!--
            insert into table (table cols) values (ProteinName , ProteinId , Organism , ProteinSeq)
            -->

            <div id="InsertProtein" style="display: none">
                <fieldset>
                    <legend style="font-size: larger; text-align: left">
                        <b>Insert </b>
                    </legend>
                    <label for="ProteinName"> Protein Name:</label>
                    <input type="text" name="ProteinName" id="ProteinName2" ><br>

                    <label for="ProteinId">Protein Id :</label><br>
                    <input type="number" name="ProteinId" id="ProteinId2" ><br>

                    <label for="Organism">Protein Organism :</label>
                    <input type="text" name="Organism" id="Organism2" ><br>

                    <label for="ProteinSeq">Protein Sequance: </label>
                    <textarea name="ProteinSeq" id="ProteinSeq2" ></textarea> <br/>

                </fieldset>
                <br>
            </div>

            <!--//////////////////////////////////////////UPDATE///////////////////////////////////////////-->

            <!--
            updata table set CUpdate = VNew  where Cwhere = value
            -->

            <div id="UpdateProtein" style="display: none">
                <fieldset>
                    <legend style="font-size: larger; text-align: left">
                        <b>Update </b>
                    </legend>
                    <label> Choose The Column you want to Update according to it and Write it's Value :</label><br><br>
                    <select id="CWhere" name="CWhere" style="width: 20%">
                        <option value="none" name="CWhere">None</option>
                        <option value="ProteinName" name="CWhere">Protein Name</option>
                        <option value="ProteinId" name="CWhere">Protein Id</option>
                        <option value="Organism" name="CWhere">Organism</option>
                        <option value="Proteinseq" name="CWhere">Protein Sequence</option>
                    </select> =
                    <input type="text" name="value" id="value" placeholder="Value" style="width: 20%"
                            ><br>

                    <label> Choose The Column you want to Update it's Value and Write a New Value:</label><br><br>
                    <select id='CUpdate' name="CUpdate" style="width: 20%">
                        <option value="none" name="CUpdate">None</option>
                        <option value="ProteinName" name="CUpdate">Protein Name</option>
                        <option value="ProteinId" name="CUpdate">Protein Id</option>

                        <option value="Organism" name="CUpdate">Organism</option>
                        <option value="Proteinseq" name="CUpdate">Protein Sequance</option>
                    </select> =
                    <input type="text" name="VNew" id="VNew" placeholder="New Value" style="width: 20%"
                           ><br>

                </fieldset>
                <br>
            </div>

            <!--//////////////////////////////////////////DELETE///////////////////////////////////////////-->

            <!--
            delete from table where CDelete = VDelete
            -->
            <div id="DeleteProtein" style="display: none">
                <fieldset>
                    <legend style="font-size: larger; text-align: left">
                        <b>Delete </b>
                    </legend>
                    <label>Choose The Column you want to Delete record according to it's value and Write it's
                        Value:</label><br><br>
                    <select id="CDelete" name="CDelete" style="width: 20%">
                        <option value="none" name="CDelete">None</option>
                        <option value="ProteinName" name="CDelete ">Protein Name</option>
                        <option value="ProteinId" name="CDelete ">Protein Id</option>

                        <option value="Organism" name="CDelete ">Organism</option>
                        <option value="Proteinseq" name="CDelete ">Protein Sequance</option>
                    </select> =
                    <input type="text" name="VDelete" id="VDelete" placeholder="Value" style="width: 20%" ><br>
                </fieldset>
                <br>
            </div>

            <!--            //////////////////////////////////////////SELECT///////////////////////////////////////////-->

            <!--
            select CSelect[] from table
            -->

            <div id="SelectProtein" style="display: none">
                <fieldset>
                    <legend style="font-size: larger; text-align: left">
                        <b>Select </b>
                    </legend>
                    <label> Select Column/s :</label><br/><br/>
                    <input id="ProteinName" type="checkbox" name="CSelect[]" value="ProteinName"/>
                    <lable style="font-size: 20px">Protein Name</lable>

                    <input id="ProteinId" type="checkbox" name="CSelect[]" value="ProteinId"/>
                    <lable style="font-size: 20px">Protein ID</lable>

                    <input id="Organism" type="checkbox" name="CSelect[]" value="Organism"/>
                    <lable style="font-size: 20px">Organism</lable>

                    <input id="ProteinSeq" type="checkbox" name="CSelect[]" value="ProteinSeq"/>
                    <lable style="font-size: 20px">Protein Sequence</lable>
                </fieldset>
                <br>
            </div>
        </fieldset>
        <br>

        <!--//////////////////////////////////////////GENOMES TABLE/////////////////////////////////////////////

        //////////////////////////////////////////////INSERT////////////////////////////////////////////////-->

        <!--
        insert into table (table cols) values (GenomeName , GenomeId , G_Id , P_Id)
        -->


        <div id="InsertGenome" style="display: none">
            <fieldset>
                <legend style="font-size: larger; text-align: left">
                    <b>Insert</b>
                </legend>
                <label for="GenomeName">Genome Name :</label>
                <input type="text" name="GenomeName" id="GenomeName" ><br>

                <label for="GenomeId">Genome Id : </label><br>
                <input type="number" name="GenomeId" id="GenomeId" ><br>

                <label for="G_Id">Gene Id :</label>
                <input type="text" name="G_Id" id="G_Id" ><br>

                <label for="P_Id">Protein Id :</label>
                <input type="text" name="P_Id" id="P_Id" ><br>

            </fieldset>
            <br>
        </div>

        <!--//////////////////////////////////////////////UPDATE////////////////////////////////////////////////-->

        <!--
        updata table set Cupdate2 = VNew2  where Cwhere2 = value2
        -->


        <div id="UpdateGenome" style="display: none">
            <fieldset>
                <legend style="font-size: larger; text-align: left">
                    <b>Update </b>
                </legend>
                <label> Choose The Column you want to Update according to it and Write it's Value:</label><br><br>
                <select id="CWhere2" name="CWhere2" style="width: 20%">
                    <option value="none" name="CWhere2">None</option>
                    <option value="GenomeName" name="CWhere2">Genome Name</option>
                    <option value="GenomeId" name="CWhere2">Genome Id</option>
                    <option value="G_Id" name="CWhere2">Gene Id</option>
                    <option value="P_ID" name="CWhere2">Peotein Id</option>
                </select> =

                <input type="text" name="value2" id="value2" placeholder="Value" style="width: 20%"
                       ><br>

                <label> Choose The Column you want to Update it's Value and Write a New Value:</label><br><br>
                <select id="CUpdate2" name="CUpdate2" style="width: 20%">
                    <option value="none" name="CUpdate2">None</option>
                    <option value="GenomeName" name="CUpdate2">Genome Name</option>
                    <option value="GenomeId" name="CUpdate2">Genome Id</option>
                    <option value="G_Id" name="CUpdate2">Gene Id</option>
                    <option value="P_ID" name="CUpdate2">Peotein Id</option>
                </select> =

                <input type="text" name="VNew2" id="VNew2" placeholder="New Value" style="width: 20%"
                       ><br>

            </fieldset>
            <br>
        </div>

        <!--//////////////////////////////////////////////DELETE////////////////////////////////////////////////-->

        <!--
        delete from table where CDelete2 = VDelete2
        -->

        <div id="DeleteGenome" style="display: none">
            <fieldset>
                <legend style="font-size: larger; text-align: left">
                    <b>Delete </b>
                </legend>
                <label>Choose The Column you want to Delete record according to it's value and Write it's Value:</label><br><br>
                <select id="CDelete2" name="CDelete2" style="width: 20%">
                    <option value="none" name="CDelete2">None</option>
                    <option value="GenomeName" name="CDelete2">Genome Name</option>
                    <option value="GenomeId" name="CDelete2">Genome Id</option>
                    <option value="G_Id" name="CDelete2">Gene Id</option>
                    <option value="P_ID" name="CDelete2">Peotein Id</option>
                </select> =

                <input type="text" name="VDelete2" id="VDelete2" placeholder="Value" style="width: 20%"
                       ><br>
            </fieldset>
            <br>
        </div>

        <!--//////////////////////////////////////////////SELECT////////////////////////////////////////////////-->

        <!--
        select CSelect2[] from table
        -->

        <div id="SelectGenome" style="display: none">
            <fieldset>
                <legend style="font-size: larger; text-align: left">
                    <b>Select </b>
                </legend>
                <label> Select Column/s :</label><br/><br/>
                <input id="GenomeName2" type="checkbox" name="CSelect2[]" value="GenomeName"/>
                <lable style="font-size: 20px">Genome Name</lable>

                <input id="GenomeId2" type="checkbox" name="CSelect2[]" value="GenomeId"/>
                <lable style="font-size: 20px">Protein ID</lable>

                <input id="G_Id2" type="checkbox" name="CSelect2[]" value="G_Id"/>
                <lable style="font-size: 20px">Gene ID</lable>

                <input id="P_Id2" type="checkbox" name="CSelect2[]" value="P_Id"/>
                <lable style="font-size: 20px">Protein ID </lable>
                </select>
            </fieldset>
            <br>
        </div>
        <input type="submit" name="submit1" id="submit1" value="Change in Data Base"/>

    </form>

</div>

<script src="JavaScript/db.js"></script>
</body>

</html>