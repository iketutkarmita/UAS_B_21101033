<h3 class="mt-4 mb-3 fw-bold text-white">TAMBAH DATA DOSEN</h3>
<div class="alert alert-success" role="alert" id="pesan"><strong>Data berhasil ditambahkan</strong></div>

<form>
    <div class="mb-3">
        <label class="form-label text-white">NID DOSEN</label>
        <input type="text" class="form-control" id="txniddosen" placeholder="Isikan Nomer Induk Dosen">
    </div>
    <div class="mb-3">
        <label class="form-label text-white">Nama Dosen</label>
        <input type="text" class="form-control" id="txnamadosen" placeholder="Isikan Nama Dosen">
    </div>
    <div class="mb-3">
        <label class="form-label text-white">Jadwal Mengajar</label>
        <input type="date" class="form-control" id="txjdwlmengajar" placeholder="Jadwal Mengajar">
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
        location.replace("http://localhost/UAS_B_21101033/client/index.php?p=dsn")
    }
</script>
<script src="dosenStoreData.js"></script>