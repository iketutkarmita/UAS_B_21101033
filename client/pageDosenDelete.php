<h3 class="mt-4 mb-3 fw-bold text-white">HAPUS DATA DOSEN</h3>
<div class="alert alert-success" role="alert" id="pesan"><strong>Data berhasil dihapus</strong></div>
<form>
    <div class="mb-3">
        <label class="form-label text-white">Nid</label>
        <input type="text" class="form-control" id="txnid" disabled>
    </div>
    <div class="mb-3">
        <label class="form-label text-white">Nama Dosen</label>
        <input type="text" class="form-control" id="txnamadosen">
    </div>
    <div class="mb-3">
        <label class="form-label text-white">Jam Mengajar</label>
        <input type="date" class="form-control" id="txjdwlmengajar">
    </div>
    <div class="mb-3">
        <label class="form-label"></label>
        <button type="button" onclick="hapusdata()" class="btn btn-danger">Hapus Data</button>
        <button type="button" onclick="batal()" class="btn btn-secondary"> Batal </button>
    </div>
</form>
<script>
    document.getElementById("pesan").style.display = "none";

    function batal() {
        location.replace("http://localhost/UAS_B_21101033/client/index.php?p=dsn")
    }
</script>
<script src="dosencaridata.js"></script>
<script src="dosendeletedata.js"></script>