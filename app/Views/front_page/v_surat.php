<div class="content-list mt-5 mb-5">

    <div style="background-color:white;">
        <div class="container pt-4 pb-4">
            <div class="row mb-5">
                <div class="col">
                    <h1 class="text-center sectionTitleQuran textShadow" data-aos="fade-up"><?php echo($surat['surah']) ?></h1>
                    <h4 class="text-center">(<?php echo($surat['arti_surah']) ?>)</h4>
                    <h5 class="text-center">Surat ke-<?php echo($surat['id_surah']) ?>. Jumlah ayat: <?php echo($surat['jumlah_ayat']) ?></h5>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col">
                    <?php foreach ($ayat as $key => $value) { ?>
                        <div id="ayat<?php echo($value['nomor_ayat']) ?>">
                            <div class="dropdown">
                                <button class="btn btn-success bg-hijau dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo($value['nomor_ayat']) ?>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#" onclick="simpanAyat(event, 'Surat <?php echo($surat['surah']) ?> Ayat <?php echo($value['nomor_ayat']) ?>', '<?php echo(base_url()); ?>/Quran/surat/<?php echo($surat['id_surah']) ?>#ayat<?php echo($value['nomor_ayat']) ?>')" title="Tandai/Simpan ayat ini">Tandai terakhir dibaca</a></li>
                                    <li><a class="dropdown-item" href="#" onclick="shareLink(event, '<?php echo(base_url()); ?>/Quran/surat/<?php echo($surat['id_surah']) ?>#ayat<?php echo($value['nomor_ayat']) ?>')" title="Salin ke Clipboard">Share</a></li>
                                </ul>
                            </div>
                            <!-- <button class="btn btn-success bg-hijau">1</button> -->
                            <h4 class="text-end mt-2 mb-3 text-dark ayatArab"><?php echo($value['ayat']) ?></h4>
                            <h6 class="text-start artiAyat"><b><?php echo($value['latin']) ?></b></h6>
                            <h6 class="text-start artiAyat"><?php echo($value['arti_ayat']) ?></h6>
                            <hr>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="d-flex justify-content-between">
                        <?php
                            $previousSurat = $surat['id_surah'] - 1;
                            $nextSurat = $surat['id_surah'] + 1;
                        ?>
                        <a href="/Quran/surat/<?php echo($previousSurat) ?>" type="button" class="btn btn-secondary btn-sm <?php if($previousSurat == 0){ echo"linkDisabled"; }?>">Surat Sebelumnya</a>
                        <a href="/Quran/surat/<?php echo($nextSurat) ?>" type="button" class="btn btn-secondary btn-sm <?php if($nextSurat == 115){ echo"linkDisabled"; }?>">Surat Selanjutnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>