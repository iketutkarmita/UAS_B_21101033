<h3 class="text-white">Edit Data Mahasiswa <span id="txedit"></span></h3>
<div class="alert alert-primary" role="alert" id="pesan">
    Data berhasil di Perbaharui
</div>
<form>
    <div class="mb-3 text-white">
        <label class="form-label">NIM</label>
        <input type="text" class="form-control" id="txnim" disabled>
    </div>
    <div class="mb-3 text-white">
        <label class="form-label">Nama Mahasiswa</label>
        <input type="text" class="form-control" id="txnama">
    </div>
    <div class="mb-3 text-white">
        <label class="form-label">Tgl Lahir</label>
        <input type="date" class="form-control" id="txtglahir">
    </div>
    <div class="mb-3 text-white">
        <label class="form-label">Jenis Kelamin</label>
        <select id="txjkel" class="form-select">
            <option value="L"> Laki-Laki </option>
            <option value="P"> Perempuan </option>
        </select>
    </div>
    <div class="mb-3 text-white">
        <label class="form-label">Jurusan</label>
        <select id="txjur" class="form-select">
            <option value="MTI"> MTI </option>
            <option value="SK"> SK </option>
            <option value="KAB"> KAB </option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label"></label>
        <button type="button" onclick="updatedata()" class="btn btn-primary">Simpan Data</button>
        <button type="button" onclick="ngakjadi()" class="btn btn-secondary"> Batal </button>
    </div>
</form>

<script>
    document.getElementById("pesan").style.display = "none";

    function ngakjadi() {
        location.replace("http://localhost/UAS_B_21101033/client/index.php?p=mhs")
    }
</script>
<script src="pagemhcaridata.js"></script>
<script src="pagemhsupdatedata.js"></script>