<h3>Form Transaksi</h3>
<table class="table table-bordered">
    <tr class="success"><th>Form</th></tr>
    <tr><td>
        <div class="col-sm-6">
            <input list="nama" name="nama" placeholder="masukkan nama barang" class="form-control">
        </div>
        <div class="col-sm-6">
            <input type="text" name="qty" placeholder="QTY" class="form-control">
        </div>
    </td></tr>
        <tr><td><button type="submit" name="submit" class=" btn btn-default">Simpan</button></td></tr>
</table>

<table class="table table-bordered">
    <tr class="success"><th cosplan="5">Detail Transaksi</th></tr>
    <tr><th>No</th><th>Nama Barang</th><th>Qty</th><th>Harga</th><th>Subtotal</th></tr>
</table>

<datalist id="kdbarang">
    <?php
    foreach ($barang->result() as $b)
    {
        echo "<option value='$b->nama'>";
    }
    ?>
</datalist>