let qs = window.location.search;
let urlP = new URLSearchParams(qs);
let kdmatkul = urlP.get("kdmatkul");

let urltarget = new URL("http://localhost/UAS_B_21101033/server/datamatkul.php");
urltarget.searchParams.set("kdmatkul",kdmatkul);

const gh = new XMLHttpRequest();
gh.open("GET",urltarget);
gh.send();

gh.onload = function(){
    const dta = JSON.parse(this.responseText);
    for(i = 0; i < dta["isi"].length; i++){
        document.getElementById("txkdmatkul").value = dta["isi"][i][0];
        document.getElementById("txnamamatkul").value = dta["isi"][i][1];
        document.getElementById("txjdwlmatkul").value = dta["isi"][i][2];
    }

}