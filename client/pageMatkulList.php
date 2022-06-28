<div id="konten"></div>

<script>
    const gh = new XMLHttpRequest();
    gh.open("GET", "http://localhost/UAS_B_21101033/server/datamatkulList.php");
    gh.send();

    gh.onload = function() {
        const dta = JSON.parse(this.responseText);
        var tx = '<h3 class="text-white">List Data Matkul</h3>';
        tx += '<table class="table table-hover" style="background-color: white;"><thead><tr><th scope = "col" > # </th><th scope="col">Kode Matkul</th><th scope="col">Nama Matkul</th><th scope="col">Jadwal Matkul</th><th scope="col"> <a href="index.php?p=mk&sp=addnew" class="badge bg-primary">Baru</a> </th></tr ></thead><tbody>';

        let nomor = 1;
        for (i = 0; i < dta.length; i++) {

            tx += '<tr>';
            tx += '  <th scope="row">' + nomor + '</th>';
            tx += '  <td>' + dta[i][0] + '</td>';
            tx += '  <td>' + dta[i][1] + '</td>';
            tx += '  <td>' + dta[i][2] + '</td>';
            tx += '  <td> ';
            tx += '<a href="index.php?p=mk&sp=editmk&kdmatkul=' + dta[i][0] + '" class="badge bg-success">edit</a> ';
            tx += '<a href="index.php?p=mk&sp=deletemk&kdmatkul=' + dta[i][0] + '" class="badge bg-danger">hapus</a> ';
            tx += '</td>';
            tx += '</tr>';
            nomor++;
        }
        tx += '  </tbody></table>';

        document.getElementById("konten").innerHTML = tx;
    }
</script>