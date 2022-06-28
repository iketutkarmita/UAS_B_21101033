function hapusdata() {
    let niddosen = document.getElementById("txnid").value;

    let data = "niddosen=" + niddosen;
    const gh = new XMLHttpRequest();
    gh.open("POST", "http://localhost/UAS_B_21101033/server/datadosendelete.php");
    gh.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    gh.send(data);

    gh.onload = function () {
        const data = JSON.parse(this.responseText);
        if (data["berhasil"]) {
            document.getElementById("pesan").style.display = "block";
        }
    }

}