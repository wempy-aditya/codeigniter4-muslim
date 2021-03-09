<div class="content-list mt-5 mb-5">

    <div style="background-color:white;">
        <div class="container pt-4 pb-4">
            <div class="row mb-4">
                <div class="col">
                    <h1 class="text-center sectionTitle textShadow" data-aos="fade-up">Murottal Al-Quran</h1>
                </div>
            </div>
            <div class="row">
                <?php $i=0; foreach ($murottal as $key => $value) { $i++ ?>
                    <div class="col-sm-6 mb-4">
                        <div class="card cardShadow1 BorderRadius" data-aos="zoom-in-up">
                            <div class="card-body">
                                <span class="badge rounded-pill bg-success"><?php echo($value['nomor']) ?></span>
                                <b><?php echo($value['nama']) ?> (<?php echo($value['asma']) ?>)</b> <br>
                                Arti : <?php echo($value['arti']) ?> <br>
                            </div>
                            <div class="card-footer borderRadiusBottom" style="background-color:#f1f3f4;">
                                <audio style="width:100%;" controls controlsList="nodownload" preload="none">
                                    <source src="<?php echo($value['audio']) ?>" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

</div>