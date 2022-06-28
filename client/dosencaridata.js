let qs = window.location.search;
let urlP = new URLSearchParams(qs);
let niddosen = urlP.get("niddosen");

let urltarget = new URL("http://localhost/UAS_B_21101033/server/dtdosennid.php");
urltarget.searchParams.set("niddosen",niddosen);

const gh = new XMLHttpRequest();
gh.open("GET",urltarget);
gh.send();

gh.onload = function(){
    const dta = JSON.parse(this.responseText);
    console.log(dta["isi"]);
    for(i=0;i<dta["isi"].length;i++){
        document.getElementById("txnid").value = dta["isi"][i][0];
        document.getElementById("txnamadosen").value = dta["isi"][i][1];
        document.getElementById("txjdwlmengajar").value = dta["isi"][i][2];
   
    }

}