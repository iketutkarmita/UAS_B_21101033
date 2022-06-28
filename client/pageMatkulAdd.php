<h3 class="mt-4 mb-3 fw-bold text-white">TAMBAH DATA MATA KULIAH</h3>
<div class="alert alert-success" role="alert" id="pesan"><strong>Data berhasil ditambahkan</strong></div>

<form>
    <div class="mb-3">
        <label class="form-label text-white">Kode Mata Kuliah</label>
        <input type="text" class="form-control" id="txkdmatkul" placeholder="Isikan Kode Mata Kuliah">
    </div>
    <div class="mb-3">
        <label class="form-label text-white">Nama Mata Kuliah</label>
        <input type="text" class="form-control" id="txnamamatkul" placeholder="Isikan Nama Mata Kuliah">
    </div>
    <div class="mb-3">
        <label class="form-label text-white">Jadwal Matkul</label>
        <input type="date" class="form-control" id="txjdwlmatkul" placeholder="Jadwal Matkul">
    </div>

    <div class="mb-3">
        <label class="form-label"></label>
        <button type="button" onclick="simpandata()" class="btn btn-primary">Simpan</button>
        <button type="button" onclick="batal()" class="btn btn-secondary"> Batal </button>
    </div>
</form>
<script>
    document.getElementById("pesan").style.display = "none";

    function batal() {
        location.replace("http://localhost/UAS_B_21101033/client/index.php?p=mk")
    }
</script>
<script src="matkulStoreData.js"></script>