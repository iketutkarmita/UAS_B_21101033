<h3 class="mt-4 mb-3 fw-bold text-white">EDIT DATA MATA KULIAH</h3>
<div class="alert alert-success" role="alert" id="pesan"><strong>Data berhasil diperbaharui</strong></div>

<form>
    <div class="mb-3">
        <label class="form-label text-white">Kode Mata Kuliah</label>
        <input type="text" class="form-control" id="txkdmatkul" disabled>
    </div>
    <div class="mb-3">
        <label class="form-label text-white">Nama Mata Kuliah</label>
        <input type="text" class="form-control" id="txnamamatkul">
    </div>
    <div class="mb-3">
        <label class="form-label text-white">Jam Matkul</label>
        <input type="date" class="form-control" id="txjdwlmatkul">
    </div>
    <div class="mb-3">
        <label class="form-label"></label>
        <button type="button" onclick="editdata()" class="btn btn-primary">Simpan</button>
        <button type="button" onclick="batal()" class="btn btn-secondary"> Batal </button>
    </div>
</form>
<script>
    document.getElementById("pesan").style.display = "none";

    function batal() {
        location.replace("http://localhost/UAS_B_21101033/client/index.php?p=mk")
    }
</script>
<script src="matkulcaridata.js"></script>
<script src="matkuleditdata.js"></script>