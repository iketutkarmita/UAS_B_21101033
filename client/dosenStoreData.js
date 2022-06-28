function simpandata() {
    let niddosen = document.getElementById("txniddosen").value;
    let namadosen = document.getElementById("txnamadosen").value;
    let jdwlmengajar = document.getElementById("txjdwlmengajar").value;
   

    let data = "niddosen=" + niddosen + "&namadosen=" + namadosen + "&jdwlmengajar="+jdwlmengajar;
    const gh = new XMLHttpRequest();
    gh.open("POST", "http://localhost/UAS_B_21101033/server/dtdosenstore.php");
    gh.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    gh.send(data);

    gh.onload = function () {
        const data = JSON.parse(this.responseText);
        if (data["berhasil"]) {
            document.getElementById("pesan").style.display = "block";
        }
       
    }

}