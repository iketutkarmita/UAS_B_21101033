<h3 class="text-white">Edit Data Dosen <span id="txedit"></span></h3>
<div class="alert alert-primary" role="alert" id="pesan">
    Data berhasil di Perbaharui
</div>
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
        <label class="form-label text-white">Jadwal Mengajar</label>
        <input type="date" class="form-control" id="txjdwlmengajar">
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
        location.replace("http://localhost/UAS_B_21101033/client/index.php?p=dsn")
    }
</script>
<script src="dosencaridata.js"></script>
<script src="dosenupdatedata.js"></script>