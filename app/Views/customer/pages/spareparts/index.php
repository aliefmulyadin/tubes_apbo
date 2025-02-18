<?= $this->extend('customer/layout/template'); ?>

<?= $this->section('content'); ?>

<main>
<h1>Daftar Harga Spareparts</h1>

<table class="table table-bordered">
  <thead class="text-center">
    <tr>
        <th scope="col">No</th>
        <th scope="col">Kode Spareparts</th>
        <th scope="col">Gambar</th>
        <th scope="col">Kategori</th>
        <th scope="col">Merek</th>
        <th scope="col">Jenis Motor</th>
        <th scope="col">Stok</th>
        <th scope="col">Harga</th>
    </tr>
  </thead>
  <tbody class="text-center">
    <?php $i = 1; ?>
    <?php foreach ($spareparts as $s) : ?>
    <tr>
        <th class="text-center" scope="row"><?= $i++; ?></th>
        <td><?= $s['kode_spareparts'] ?></td>
        <td><img src="/img/<?= $s['gambar'] ?>"  alt="gambar" class="gambar-spareparts"></td>
        <td><?= $s['kategori_spareparts'] ?></td>
        <td><?= $s['merek_spareparts'] ?></td>
        <td><?= $s['jenis_spareparts'] ?></td>
        <td><?= $s['stok_spareparts'] ?></td>
        <td><?= number_to_currency($s['harga_spareparts'], 'IDR'); ?></td>
    </tr>
    
    <?php endforeach; ?>
  </tbody>
</table>
</main>

<?= $this->endSection(); ?>