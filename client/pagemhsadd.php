<h3 class="text-white">Tambah Data Mahasiswa</h3>
<div class="alert alert-primary" role="alert" id="pesan">
    Data berhasil ditambahkan
</div>
<form>
    <div class="mb-3">
        <label class="form-label text-white">NIM</label>
        <input type="text" class="form-control" id="txnim" placeholder="Isikan NIM">
    </div>
    <div class="mb-3">
        <label class="form-label text-white">Nama Mahasiswa</label>
        <input type="text" class="form-control" id="txnama" placeholder="Isikan Nama Lengkap Mahasiswa">
    </div>
    <div class="mb-3">
        <label class="form-label text-white">Tgl Lahir</label>
        <input type="date" class="form-control" id="txtglahir" placeholder="Isikan Tgl Lahir">
    </div>
    <div class="mb-3">
        <label class="form-label text-white">Jenis Kelamin</label>
        <select id="txjkel" class="form-select">
            <option value="L"> Laki-Laki </option>
            <option value="P"> Perempuan </option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label text-white">Jurusan</label>
        <select id="txjur" class="form-select">
            <option value="MTI"> MTI </option>
            <option value="SK"> SK </option>
            <option value="KAB"> KAB </option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label"></label>
        <button type="button" onclick="storedata()" class="btn btn-primary">Simpan Data</button>
        <button type="button" onclick="ngakjadi()" class="btn btn-secondary"> Batal </button>
    </div>
</form>

<script>
    document.getElementById("pesan").style.display = "none";

    function ngakjadi() {
        location.replace("http://localhost/UAS_B_21101033/client/index.php?p=mhs")
    }
</script>
<script src="pagemhstoredata.js"></script>