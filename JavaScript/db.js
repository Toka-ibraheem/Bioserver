/* checks if no value is selected from a list */
function checkNotSelected(selectedValue) {
    if (selectedValue === "none") {
        alert("Missing value, Please Select an option");
        return false
    }

    return true;
}

/*get the ID of the selected value*/
function getSelectedValue(ID) {
    let operation = document.getElementById(ID);
    return operation.options[operation.selectedIndex].value;
}
/*checks if required fields are filled*/
function checkRequired(name) {
    let divElem = document.getElementById(name);
    let inputElements = divElem.querySelectorAll("input");
    for (let i = 0; i < inputElements.length; i++) {
        if (inputElements[i].value === "") {
            alert("Please Fill in all fields")
            return false;
        }
    }
    return true;
}
/*checks if no tables are selected
* checks if required items are filled by
* calling checkRequired*/

let choice = null;
document.getElementById('submit1').onclick = function () {

    if (choice == null) {
        if (!document.getElementById("Genes").checked && !document.getElementById("Proteins").checked && !document.getElementById("Genomes").checked) {
            alert("Choose at least one table to manipulate the Database.");
            return false;
        }

        let selectedValue = getSelectedValue('Operation');
        return checkNotSelected(selectedValue);

    } else if (choice === 'InsertGene') {
        return checkRequired('InsertGene');

    } else if (choice === 'UpdateGene') {
        let selectedValue1 = getSelectedValue('CWhere1');
        let selectedValue2 = getSelectedValue('CUpdate1');
        return checkNotSelected(selectedValue1) && checkNotSelected(selectedValue2) &&
            checkRequired('UpdateGene');

    } else if (choice === 'DeleteGene') {
        let selectedValue = getSelectedValue('DeleteGene');
        return checkNotSelected(selectedValue) && checkRequired('DeleteGene');

    } else if (choice === 'SelectGene') {
        if (!document.getElementById("GeneName2").checked && !document.getElementById("GeneID2").checked &&
            !document.getElementById("Description2").checked &&
            !document.getElementById("GeneSeq2").checked &&
            !document.getElementById("Length2").checked) {
            alert("Choose at least one column to be selected.");
            return false;
        }
    }
    else if (choice === 'InsertProtein') {
        return checkRequired('InsertProtein');

    }
    else if (choice === 'UpdateProtein') {
        let selectedValue1 = getSelectedValue('CUpdate');
        let selectedValue2 = getSelectedValue('CWhere')
        return checkNotSelected(selectedValue1) && checkNotSelected(selectedValue2) &&
            checkRequired('UpdateProtein');
    }
    else if (choice === 'DeleteProtein') {
        let selectedValue = getSelectedValue('CDelete');
        return checkNotSelected(selectedValue) && checkRequired('DeleteProtein');

    }
    else if (choice === 'SelectProtein') {
        if (!document.getElementById("ProteinName").checked &&
            !document.getElementById("ProteinId").checked &&
            !document.getElementById("Organism").checked &&
            !document.getElementById("ProteinSeq").checked) {
            alert("Choose at least one column to be selected.");
            return false;
        }
    }
    else if (choice === 'InsertGenome') {
        return checkRequired('InsertGenome');
    }
    else if (choice === 'UpdateGenome') {
        let selectedValue1 = getSelectedValue('CUpdate2');
        let selectedValue2 = getSelectedValue('CWhere2')
        return checkNotSelected(selectedValue1) && checkNotSelected(selectedValue2)
            && checkRequired('UpdateGenome');
    }
    else if (choice === 'DeleteGenome') {
        let selectedValue = getSelectedValue('CDelete2');
        return checkNotSelected(selectedValue) && checkRequired('DeleteGenome');
    }
    else if (choice === 'SelectGenome') {
        if (!document.getElementById("GenomeName2").checked &&
            !document.getElementById("GenomeId2").checked &&
            !document.getElementById("G_Id2").checked &&
            !document.getElementById("P_Id2").checked) {
            alert("Choose at least one column to be selected.");
            return false;
        }
    }


    return true;

}


/*This function show and hide a div when selecting an option from the select list,
  by the property display, block to show and none to hide.
  called in the select tage.
*/

function ShowHideDiv(nameSelected) {

    if (document.getElementById('Genes').checked === true) {
        document.getElementById("InsertProtein").style.display = "none";
        document.getElementById("UpdateProtein").style.display = "none";
        document.getElementById("DeleteProtein").style.display = "none";
        document.getElementById("SelectProtein").style.display = "none";

        document.getElementById("InsertGenome").style.display = "none";
        document.getElementById("UpdateGenome").style.display = "none";
        document.getElementById("DeleteGenome").style.display = "none";
        document.getElementById("SelectGenome").style.display = "none";


        if (nameSelected.value === "Insert") {
            choice = 'InsertGene'
            document.getElementById("InsertGene").style.display = "block";
            document.getElementById("UpdateGene").style.display = "none";
            document.getElementById("DeleteGene").style.display = "none";
            document.getElementById("SelectGene").style.display = "none";
        } else if (nameSelected.value === "Update") {
            choice = 'UpdateGene'
            document.getElementById("InsertGene").style.display = "none";
            document.getElementById("UpdateGene").style.display = "block";
            document.getElementById("DeleteGene").style.display = "none";
            document.getElementById("SelectGene").style.display = "none";
        } else if (nameSelected.value === "Delete") {
            choice = 'DeleteGene'
            document.getElementById("InsertGene").style.display = "none";
            document.getElementById("UpdateGene").style.display = "none";
            document.getElementById("DeleteGene").style.display = "block";
            document.getElementById("SelectGene").style.display = "none";

        } else if (nameSelected.value === "Select") {
            choice = 'SelectGene'
            document.getElementById("InsertGene").style.display = "none";
            document.getElementById("UpdateGene").style.display = "none";
            document.getElementById("DeleteGene").style.display = "none";
            document.getElementById("SelectGene").style.display = "block";

        } else {
            document.getElementById("InsertGene").style.display = "none";
            document.getElementById("UpdateGene").style.display = "none";
            document.getElementById("DeleteGene").style.display = "none";
            document.getElementById("SelectGene").style.display = "none";

        }
    }

    if (document.getElementById('Proteins').checked === true) {

        document.getElementById("InsertGene").style.display = "none";
        document.getElementById("UpdateGene").style.display = "none";
        document.getElementById("DeleteGene").style.display = "none";
        document.getElementById("SelectGene").style.display = "none";

        document.getElementById("InsertGenome").style.display = "none";
        document.getElementById("UpdateGenome").style.display = "none";
        document.getElementById("DeleteGenome").style.display = "none";
        document.getElementById("SelectGenome").style.display = "none";

        if (nameSelected.value === "Insert") {
            choice = 'InsertProtein'
            document.getElementById("InsertProtein").style.display = "block";
            document.getElementById("UpdateProtein").style.display = "none";
            document.getElementById("DeleteProtein").style.display = "none";
            document.getElementById("SelectProtein").style.display = "none";
        } else if (nameSelected.value === "Update") {
            choice = 'UpdateProtein'
            document.getElementById("InsertProtein").style.display = "none";
            document.getElementById("UpdateProtein").style.display = "block";
            document.getElementById("DeleteProtein").style.display = "none";
            document.getElementById("SelectProtein").style.display = "none";
        } else if (nameSelected.value === "Delete") {
            choice = 'DeleteProtein'

            document.getElementById("InsertProtein").style.display = "none";
            document.getElementById("UpdateProtein").style.display = "none";
            document.getElementById("DeleteProtein").style.display = "block";
            document.getElementById("SelectProtein").style.display = "none";

        } else if (nameSelected.value === "Select") {
            choice = 'SelectProtein'
            document.getElementById("InsertProtein").style.display = "none";
            document.getElementById("UpdateProtein").style.display = "none";
            document.getElementById("DeleteProtein").style.display = "none";
            document.getElementById("SelectProtein").style.display = "block";

        } else {

            document.getElementById("InsertProtein").style.display = "none";
            document.getElementById("UpdateProtein").style.display = "none";
            document.getElementById("DeleteProtein").style.display = "none";
            document.getElementById("SelectProtein").style.display = "none";

        }

    }

    if (document.getElementById('Genomes').checked === true) {

        document.getElementById("InsertGene").style.display = "none";
        document.getElementById("UpdateGene").style.display = "none";
        document.getElementById("DeleteGene").style.display = "none";
        document.getElementById("SelectGene").style.display = "none";


        document.getElementById("InsertProtein").style.display = "none";
        document.getElementById("UpdateProtein").style.display = "none";
        document.getElementById("DeleteProtein").style.display = "none";
        document.getElementById("SelectProtein").style.display = "none";

        if (nameSelected.value === "Insert") {
            choice = 'InsertGenome'

            document.getElementById("InsertGenome").style.display = "block";
            document.getElementById("UpdateGenome").style.display = "none";
            document.getElementById("DeleteGenome").style.display = "none";
            document.getElementById("SelectGenome").style.display = "none";
        } else if (nameSelected.value === "Update") {
            choice = 'UpdateGenome'

            document.getElementById("InsertGenome").style.display = "none";
            document.getElementById("UpdateGenome").style.display = "block";
            document.getElementById("DeleteGenome").style.display = "none";
            document.getElementById("SelectGenome").style.display = "none";
        } else if (nameSelected.value === "Delete") {
            choice = 'DeleteGenome'

            document.getElementById("InsertGenome").style.display = "none";
            document.getElementById("UpdateGenome").style.display = "none";
            document.getElementById("DeleteGenome").style.display = "block";
            document.getElementById("SelectGenome").style.display = "none";

        } else if (nameSelected.value === "Select") {
            choice = 'SelectGenome'

            document.getElementById("InsertGenome").style.display = "none";
            document.getElementById("UpdateGenome").style.display = "none";
            document.getElementById("DeleteGenome").style.display = "none";
            document.getElementById("SelectGenome").style.display = "block";

        } else {

            document.getElementById("InsertGenome").style.display = "none";
            document.getElementById("UpdateGenome").style.display = "none";
            document.getElementById("DeleteGenome").style.display = "none";
            document.getElementById("SelectGenome").style.display = "none";

        }

    }
}

function submit(e) {
    e.preventDefault()
}