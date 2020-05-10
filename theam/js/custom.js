
//amount
var slider = document.getElementById("myRange");
var output = document.getElementById("demo").value;
output.innerHTML = slider.value;

slider.oninput = function() {
    document.getElementById("demo").value = this.value;
    // console.log("run");
    canFunction();

}


//date
var two = document.getElementById("myRangetwo");
var output = document.getElementById("txtday").value;
output.innerHTML = two.value;

two.oninput = function() {
    document.getElementById("txtday").value = this.value;
    canFunction();
}


function canFunction() {


    var getVal = document.getElementById("demo").value;
    var getDate = document.getElementById("txtday").value;

	document.getElementById("txtDuration").value = getDate;
	document.getElementById("txtAcceptAmount").value = getVal;

    if(getVal === "4000" && getDate === "10"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 4400";
        document.getElementById("txtLoanAmount").value = "4400";

    }if(getVal === "4000" && getDate === "20"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 4800";
        document.getElementById("txtLoanAmount").value = "4800";

    }if(getVal === "4000" && getDate === "30"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 5000";
        document.getElementById("txtLoanAmount").value = "5000";

    }

    if(getVal === "6000" && getDate === "10"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 6900";
        document.getElementById("txtLoanAmount").value = "6990";

    }if(getVal === "6000" && getDate === "20"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 7200";
        document.getElementById("txtLoanAmount").value = "7200";

    }if(getVal === "6000" && getDate === "30"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 7500";
        document.getElementById("txtLoanAmount").value = "7500";

    }

    if(getVal === "8000" && getDate === "10"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 9200";
        document.getElementById("txtLoanAmount").value = "9200";

    }if(getVal === "8000" && getDate === "20"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 9600";
        document.getElementById("txtLoanAmount").value = "9600";

    }if(getVal === "8000" && getDate === "30"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 10000";
        document.getElementById("txtLoanAmount").value = "10000";

    }

    if(getVal === "10000" && getDate === "10"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 11500";
        document.getElementById("txtLoanAmount").value = "11500";

    }if(getVal === "10000" && getDate === "20"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 12000";
        document.getElementById("txtLoanAmount").value = "12000";

    }if(getVal === "10000" && getDate === "30"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 12500";
        document.getElementById("txtLoanAmount").value = "12500";

    }

    if(getVal === "12000" && getDate === "10"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 13800";
        document.getElementById("txtLoanAmount").value = "13800";

    }if(getVal === "12000" && getDate === "20"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 14400";
        document.getElementById("txtLoanAmount").value = "14400";

    }if(getVal === "12000" && getDate === "30"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 15000";
        document.getElementById("txtLoanAmount").value = "15000";

    }

    if(getVal === "14000" && getDate === "10"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 16100";
        document.getElementById("txtLoanAmount").value = "16100";

    }if(getVal === "14000" && getDate === "20"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 16800";
        document.getElementById("txtLoanAmount").value = "16800";

    }if(getVal === "14000" && getDate === "30"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 17500";
        document.getElementById("txtLoanAmount").value = "17500";

    }

    if(getVal === "16000" && getDate === "10"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 18400";
        document.getElementById("txtLoanAmount").value = "18400";

    }if(getVal === "16000" && getDate === "20"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 19200";
        document.getElementById("txtLoanAmount").value = "19200";

    }if(getVal === "16000" && getDate === "30"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 20000";
        document.getElementById("txtLoanAmount").value = "20000";

    }

    if(getVal === "18000" && getDate === "10"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 20700";
        document.getElementById("txtLoanAmount").value = "20700";

    }if(getVal === "18000" && getDate === "20"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 21600";
        document.getElementById("txtLoanAmount").value = "21600";

    }if(getVal === "18000" && getDate === "30"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 22500";
        document.getElementById("txtLoanAmount").value = "22500";

    }

    if(getVal === "20000" && getDate === "10"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 23000";
        document.getElementById("txtLoanAmount").value = "23000";

    }if(getVal === "20000" && getDate === "20"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 24000";
        document.getElementById("txtLoanAmount").value = "24000";

    }if(getVal === "20000" && getDate === "30"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 25000";
        document.getElementById("txtLoanAmount").value = "25000";

    }

    if(getVal === "22000" && getDate === "10"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 25300";
        document.getElementById("txtLoanAmount").value = "25300";

    }if(getVal === "22000" && getDate === "20"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 26400";
        document.getElementById("txtLoanAmount").value = "26400";

    }if(getVal === "22000" && getDate === "30"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 27500";
        document.getElementById("txtLoanAmount").value = "27500";

    }

    if(getVal === "24000" && getDate === "10"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 27600";
        document.getElementById("txtLoanAmount").value = "27600";

    }if(getVal === "24000" && getDate === "20"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 28800";
        document.getElementById("txtLoanAmount").value = "28800";

    }if(getVal === "24000" && getDate === "30"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 30000";
        document.getElementById("txtLoanAmount").value = "30000";

    }

    if(getVal === "26000" && getDate === "10"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 29900";
        document.getElementById("txtLoanAmount").value = "29900";

    }if(getVal === "26000" && getDate === "20"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 31200";
        document.getElementById("txtLoanAmount").value = "31200";

    }if(getVal === "26000" && getDate === "30"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 32500";
        document.getElementById("txtLoanAmount").value = "32500";

    }

    if(getVal === "28000" && getDate === "10"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 32000";
        document.getElementById("txtLoanAmount").value = "32000";

    }if(getVal === "28000" && getDate === "20"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 33600";
        document.getElementById("txtLoanAmount").value = "33600";


    }if(getVal === "28000" && getDate === "30"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 35000";
        document.getElementById("txtLoanAmount").value = "35000";

    }

    if(getVal === "30000" && getDate === "10"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 34500";
        document.getElementById("txtLoanAmount").value = "34500";

    }if(getVal === "30000" && getDate === "20"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 36000";
        document.getElementById("txtLoanAmount").value = "36000";

    }if(getVal === "30000" && getDate === "30"){
        document.getElementById("txtAmount").innerHTML = "ගෙවියයුතු  මුදල:- Rs. 37500";
        document.getElementById("txtLoanAmount").value = "37500";

    }



}


//get check box event
$('#leAddaccount :checkbox').change(function() {
    // this will contain a reference to the checkbox
    if (this.checked) {
        // the checkbox is now checked
        console.log("checked");
        $('#txtCode').prop('readonly', false);
    } else {
        // the checkbox is now no longer checked
        console.log("un checked");
        $('#txtCode').prop('readonly', true);
    }
});


