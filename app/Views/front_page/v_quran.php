<div class="content-list mt-5 mb-5">

    <div style="background-color:white;">
        <div class="container pt-4 pb-4">
            <div class="row mb-4">
                <div class="col">
                    <h1 class="text-center sectionTitle textShadow" data-aos="fade-up">Al-Quran Online</h1>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <div class="alert alert-success d-flex justify-content-between align-items-center cardShadow" role="alert" data-aos="flip-up">
                        <div class="notifQuran">
                            <b>Terakhir dibaca :</b> <span id="topNotification">Belum ada yang tersimpan, <a href="<?php base_url(); ?>/Quran">Coba lagi</a><span>
                        </div>
                        <div>
                            <a class="btn btn-secondary btn-sm" id="btnTerakhirBaca">Baca</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <?php $i=0; foreach ($surat as $key => $value) { $i++ ?>

                        <div class="card mb-3" id="surat_<?php echo($value['nomor']) ?>" data-aos="zoom-in">
                            <div class="card-header">
                                <span class="badge bg-hijau"><?php echo($value['nomor']) ?></span> <b><?php echo($value['nama']) ?></b> 
                            </div>
                            <div class="card-body">
                                <div class="infoSurat">
                                    <b>Asma : </b><?php echo($value['asma']) ?> <br>
                                    <b>Arti : </b><?php echo($value['arti']) ?> <br>
                                    <b>Diturunkan : </b><?php echo($value['type']) ?> <br>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="buttonSurat d-flex justify-content-end">
                                    <a href="<?php echo(base_url()); ?>/Quran/surat/<?php echo($value['nomor']) ?>/" class="btn btn-success bg-hijau btn-sm" style="margin-right:8px;">
                                        Baca
                                    </a>
                                    <button class="btn btn-secondary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample<?= $i ?>" aria-expanded="false" aria-controls="collapseExample">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="collapse mt-2" id="collapseExample<?= $i ?>">
                                    <div class="card card-body">
                                        <?php echo($value['keterangan']) ?>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

</div>