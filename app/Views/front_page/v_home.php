            <?php 
            if ($lokasi == "Home") {
                echo view('front_page/components/home_carousel.php');
            } 
            ?>
            <div class="content-list mb-5">

                <div style="background-color: white;">
                    <div class="container pt-3 pb-4">
                        <div class="row mb-3">
                            <div class="col">
                                <h1 class="text-center sectionTitle textShadow" data-aos="zoom-in">Hitung Mundur Ramadhan</h1>
                            </div>
                        </div>
                        <div class="row mb-5"> 
                            <div class="col">
                                <div class="card countdownCard cardShadow" data-aos="zoom-in-up">
                                    <div class="card-body countdownCardBody">
                                        <p class="card-text text-center timespan" id="days">00</p>
                                    </div>
                                    <div class="card-header countdownCardHeader"><h2 class="text-center formatWaktu">Hari</h2></div>
                                </div>
                                <div class="progress progressBar" style="height: 12px;" id="progressLine1"></div>
                            </div>
                            <div class="col">
                                <div class="card countdownCard cardShadow" data-aos="zoom-in-up">
                                    <div class="card-body countdownCardBody">
                                        <p class="card-text text-center timespan" id="hours">00</p>
                                    </div>
                                    <div class="card-header countdownCardHeader"><h2 class="text-center formatWaktu">Jam</h2></div>
                                </div>
                                <div class="progress progressBar" style="height: 12px;" id="progressLine2"></div>
                            </div>
                            <div class="col">
                                <div class="card countdownCard cardShadow" data-aos="zoom-in-up">
                                    <div class="card-body countdownCardBody">
                                        <p class="card-text text-center timespan" id="minutes">00</p>
                                    </div>
                                    <div class="card-header countdownCardHeader"><h2 class="text-center formatWaktu">Menit</h2></div>
                                </div>
                                <div class="progress progressBar" style="height: 12px;" id="progressLine3"></div>
                            </div>
                            <div class="col">
                                <div class="card countdownCard cardShadow" data-aos="zoom-in-up">
                                    <div class="card-body countdownCardBody">
                                        <p class="card-text text-center timespan" id="seconds">00</p>
                                    </div>
                                    <div class="card-header countdownCardHeader"><h2 class="text-center formatWaktu">Detik</h2></div>
                                </div>
                                <div class="progress progressBar" style="height: 12px;" id="progressLine4"></div>
                            </div>
                        </div>
                        <div class="row mb-5">
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
                                <h1 class="text-center sectionTitle textShadow" data-aos="zoom-in">Jadwal Shalat & Imsakiyah</h1>
                            </div>
                        </div>
                        <div class="row mb-5"> 
                            <div class="col">
                                <div class="card cardShadow" data-aos="zoom-in">
                                    <div class="card-body">
                                        <form id="formJadwalShalat">
                                            <div class="">
                                                <label for="Kota" class="form-label">Jadwal shalat untuk semua daerah di Indonesia</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>-- Plih Daerah --</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-header" style="background-color:#a7d7c5;border-bottom:0px;">
                                        <button type="submit" class="btn btn-secondary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col">
                                <div class="card cardShadow">
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
                                                    <td>Daerah : </td>
                                                    <td>Sumatera</td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal : </td>
                                                    <td>Minggu, 07 Feb 2021</td>
                                                </tr>
                                                <tr>
                                                    <td>Imsak : </td>
                                                    <td>04:45 wib</td>
                                                </tr>
                                                <tr>
                                                    <td>Subuh : </td>
                                                    <td>04:55 wib</td>
                                                </tr>
                                                <tr>
                                                    <td>Terbit  : </td>
                                                    <td>06:11 wib</td>
                                                </tr>
                                                <tr>
                                                    <td>Terbit  : </td>
                                                    <td>06:11 wib</td>
                                                </tr>
                                                <tr>
                                                    <td>Terbit  : </td>
                                                    <td>06:11 wib</td>
                                                </tr>
                                                <tr>
                                                    <td>Terbit  : </td>
                                                    <td>06:11 wib</td>
                                                </tr>
                                                <tr>
                                                    <td>Terbit  : </td>
                                                    <td>06:11 wib</td>
                                                </tr>
                                                <tr>
                                                    <td>Terbit  : </td>
                                                    <td>06:11 wib</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="background-color: #ffffff;">
                    <div class="container pt-4 pb-5">
                        <div class="row mt-4 mb-3">
                            <div class="col d-flex justify-content-center">
                                <hr style="width:26%;height:2px;margin-right:16px;">
                                <svg xmlns="http://www.w3.org/2000/svg" style="color:#5c8d89;" width="60" height="60" fill="currentColor" class="bi bi-chat-square-quote-fill" viewBox="0 0 16 16">
                                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm7.194 2.766a1.688 1.688 0 0 0-.227-.272 1.467 1.467 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 5.734 4C4.776 4 4 4.746 4 5.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.461 2.461 0 0 0-.227-.4zM11 7.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.466 2.466 0 0 0-.228-.4 1.686 1.686 0 0 0-.227-.273 1.466 1.466 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 10.07 4c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z"/>
                                </svg>
                                <hr style="width:26%;height:2px;margin-left:16px;">
                            </div>
                        </div>
                        <div class="row"> 
                            <div class="col">
                                <div class="card cardShadow">
                                    <div class="card-body">
                                        <figure class="text-center">
                                            <blockquote class="blockquote">
                                                <p>Lorem ipsum dolor sit amet, conseVDFVDctetur adipiscing elit. Integer posuere erat a ante.</p>
                                            </blockquote>
                                            <figcaption class="blockquote-footer">
                                                Someone famous in <cite title="Source Title">Source Title</cite>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- <div class="row mt-4" id="testingq">    
                <h1 class="text-center" id="loadText">Loading Gan....</h1>
            </div> -->