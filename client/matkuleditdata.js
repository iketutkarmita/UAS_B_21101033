function editdata() {
    let kdmatkul = document.getElementById("txkdmatkul").value;
    let namamatkul = document.getElementById("txnamamatkul").value;
    let jdwlmatkul = document.getElementById("txjdwlmatkul").value;

    let data = "kdmatkul=" + kdmatkul + "&namamatkul=" + namamatkul + "&jdwlmatkul=" + jdwlmatkul;
    const gh = new XMLHttpRequest();
    gh.open("POST", "http://localhost/UAS_B_21101033/server/datamatkuledit.php");
    gh.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    gh.send(data);

    gh.onload = function () {
        const data = JSON.parse(this.responseText);
        if (data["berhasil"]) {
            document.getElementById("pesan").style.display = "block";
        }
      
    }

}