<section>
    <h1></h1>
    <?php foreach ($buku as $buku) { ?>
    <div>
        <ul>
            <li><?=$buku['judul_buku']; ?></li>
            <li><?=$buku['penerbit']; ?></li>
        </ul>
    </div>
    <?php } ?>
</section>