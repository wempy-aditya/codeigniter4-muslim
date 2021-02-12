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
                    <div class="alert alert-success d-flex justify-content-between align-items-center cardShadow" role="alert">
                        <div class="notifQuran">
                            <b>Terakhir dibaca</b> <span id="topNotification">A simple primary<span>
                        </div>
                        <div>
                            <button type="button" class="btn btn-secondary btn-sm">Baca</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <?php for ($i=0; $i < 6; $i++) { ?>

                        <div class="card mb-3" id="surat<?= $i ?>" data-aos="zoom-in">
                            <div class="card-header">
                                <span class="badge bg-hijau">1</span> <b>Al Fatihah</b> 
                            </div>
                            <div class="card-body">
                                <div class="infoSurat">
                                    <b>Asma : </b>الفاتحة <br>
                                    <b>Arti : </b>Pembukaan <br>
                                    <b>Diturunkan : </b>mekah <br>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="buttonSurat d-flex justify-content-end">
                                    <a href="" class="btn btn-light bg-hijau btn-sm" style="margin-right:8px;">
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
                                        <?= $i ?>Surat <i>Al Faatihah</i> (Pembukaan) yang diturunkan di Mekah dan terdiri dari 7 ayat adalah surat yang pertama-tama diturunkan dengan lengkap  diantara surat-surat yang ada dalam Al Quran dan termasuk golongan surat Makkiyyah. Surat ini disebut <i>Al Faatihah</i> (Pembukaan), karena dengan surat inilah dibuka dan dimulainya Al Quran. Dinamakan <i>Ummul Quran</i> (induk Al Quran) atau <i>Ummul Kitaab</i> (induk Al Kitaab) karena dia merupakan induk dari semua isi Al Quran, dan karena itu diwajibkan membacanya pada tiap-tiap sembahyang.<br> Dinamakan pula <i>As Sab'ul matsaany</i> (tujuh yang berulang-ulang) karena ayatnya tujuh dan dibaca berulang-ulang dalam sholat.
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