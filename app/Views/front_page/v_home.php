            <?php if ($lokasi == "Home") {
                echo view('front_page/components/home_carousel.php');
            } ?>
            <div class="content-list mb-5" id="content">

                <div style="background-color: white;">
                    <div class="container pt-3 pb-4">
                        <div class="row mb-3">
                            <div class="col">
                                <h1 class="text-center sectionTitle textShadow" data-aos="fade-up">Hitung Mundur Ramadhan</h1>
                            </div>
                        </div>
                        <div class="row mb-5"> 
                            <div class="col">
                                <div class="card countdownCard cardShadow BorderRadius1" style="background-color: #f4f9f4;" data-aos="zoom-in-up">
                                    <div class="card-body">
                                        <p class="card-text text-center timespan" id="days">00</p>
                                    </div>
                                    <div class="card-footer countdownCardFooter borderRadiusBottom1"><h2 class="text-center formatWaktu">Hari</h2></div>
                                </div>
                                <div class="progress progressBar" style="height: 12px;" id="progressLine1"></div>
                            </div>
                            <div class="col">
                                <div class="card countdownCard cardShadow BorderRadius1" style="background-color: #f4f9f4;" data-aos="zoom-in-up">
                                    <div class="card-body">
                                        <p class="card-text text-center timespan" id="hours">00</p>
                                    </div>
                                    <div class="card-footer countdownCardFooter borderRadiusBottom1"><h2 class="text-center formatWaktu">Jam</h2></div>
                                </div>
                                <div class="progress progressBar" style="height: 12px;" id="progressLine2"></div>
                            </div>
                            <div class="col">
                                <div class="card countdownCard cardShadow BorderRadius1" style="background-color: #f4f9f4;" data-aos="zoom-in-up">
                                    <div class="card-body">
                                        <p class="card-text text-center timespan" id="minutes">00</p>
                                    </div>
                                    <div class="card-footer countdownCardFooter borderRadiusBottom1"><h2 class="text-center formatWaktu">Menit</h2></div>
                                </div>
                                <div class="progress progressBar" style="height: 12px;" id="progressLine3"></div>
                            </div>
                            <div class="col">
                                <div class="card countdownCard cardShadow BorderRadius1" style="background-color: #f4f9f4;" data-aos="zoom-in-up">
                                    <div class="card-body">
                                        <p class="card-text text-center timespan" id="seconds">00</p>
                                    </div>
                                    <div class="card-footer countdownCardFooter borderRadiusBottom1"><h2 class="text-center formatWaktu">Detik</h2></div>
                                </div>
                                <div class="progress progressBar" style="height: 12px;" id="progressLine4"></div>
                            </div>
                        </div>
                        <div class="row mb-5" data-aos="zoom-in-right">
                            <div class="col">
                                <div class="catatan">
                                    <b>Catatan : </b>
                                    <ul>
                                        <li>Perhitungan mundur dimulai pada tanggal 1 Januari 2021. Dan akan terus berjalan sampai Bulan Ramadhan tiba.</li>
                                        <li>Jika tiba Bulan Ramadhan, maka perhitungan mundur akan di ubah menjadi perhitungan mundur Lebaran 1442 H.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div style="background-color: #f4f9f4;">
                    <div class="container pt-4 pb-5">
                        <div class="row mt-4 mb-4">
                            <div class="col">
                                <h1 class="text-center sectionTitle textShadow" data-aos="fade-up">Jadwal Shalat & Imsakiyah</h1>
                            </div>
                        </div>
                        <div class="row mb-4"> 
                            <div class="col">
                                <div class="card cardShadow BorderRadius1" data-aos="zoom-in">
                                    <div class="card-body">
                                        <form id="formJadwalShalat">
                                            <input type="hidden" id="currentDate" name="tanggal" value="<?php echo(date('Y-m-d')); ?>">
                                            <div class="">
                                                <label for="Kota" class="form-label">Jadwal shalat untuk semua daerah di Indonesia</label>
                                                <select id="locationSelect" class="form-select BorderRadius3" aria-label="Default select example">
                                                    <option value="none">-- Plih Daerah --</option>
                                                    <?php foreach ($kota as $key => $value) { ?>
                                                    <option value="<?php echo($value['id']) ?>_<?php echo($value['nama']) ?>"><?php echo($value['nama']) ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer d-flex justify-content-between borderRadiusBottom1" style="background-color:#a7d7c5;border:0px;">
                                        <button id="buttonLocation" class="btn btn-secondary ms-2 BorderRadius3">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col">
                                <div class="card cardShadow BorderRadius" data-aos="zoom-in-down">
                                    <div class="card-body">
                                        <table class="table table-striped">
                                            <thead class="text-center tableHead">
                                                <tr>
                                                    <th scope="col">Query</th>
                                                    <th scope="col">Result</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                                <tr>
                                                    <td><b>Tanggal : </b></td>
                                                    <td><?php echo(date('Y-m-d')); ?></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Daerah : </b></td>
                                                    <td><span id="lokasiDaerah">not set</span></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Imsak : </b></td>
                                                    <td><span id="imsak">00.00</span> wib</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Subuh : </b></td>
                                                    <td><span id="subuh">00.00</span> wib</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Terbit : </b></td>
                                                    <td><span id="terbit">00.00</span> wib</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Dhuha : </b></td>
                                                    <td><span id="dhuha">00.00</span> wib</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Dhuhur : </b></td>
                                                    <td><span id="dhuhur">00.00</span> wib</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Ashar : </b></td>
                                                    <td><span id="ashar">00.00</span> wib</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Maghrib : </b></td>
                                                    <td><span id="maghrib">00.00</span> wib</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Isya : </b></td>
                                                    <td><span id="isya">00.00</span> wib</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    Atau anda bisa mengakses jadwal shalat & imsakiyah melalui <a href="#" class="alert-link" data-bs-toggle="modal" data-bs-target="#modalTelegram">Telegram</a>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="background-color: #ffffff;">
                    <div class="container pt-4 pb-4">
                        <div class="row mt-4 mb-3" data-aos="fade-up">
                            <div class="col d-flex justify-content-center">
                                <hr style="width:26%;height:2px;margin-right:16px;">
                                <svg xmlns="http://www.w3.org/2000/svg" style="color:#5c8d89;" width="50" height="50" fill="currentColor" class="bi bi-chat-square-quote-fill" viewBox="0 0 16 16">
                                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm7.194 2.766a1.688 1.688 0 0 0-.227-.272 1.467 1.467 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 5.734 4C4.776 4 4 4.746 4 5.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.461 2.461 0 0 0-.227-.4zM11 7.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.466 2.466 0 0 0-.228-.4 1.686 1.686 0 0 0-.227-.273 1.466 1.466 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 10.07 4c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z"/>
                                </svg>
                                <hr style="width:26%;height:2px;margin-left:16px;">
                            </div>
                        </div>
                        <div class="row"> 
                            <div class="col">
                                <div class="card cardShadow BorderRadius" data-aos="flip-up" style="background-color: #f4f9f4;">
                                    <div class="card-body">
                                        <figure class="text-center" style="margin-top:10px;">
                                            <blockquote class="blockquote">
                                                <p id="quoteBody">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                            </blockquote>
                                            <figcaption class="blockquote-footer">
                                                <cite title="Source Title" id="quoteAuthor">Source Title</cite>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
