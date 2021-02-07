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

            </div>

            <!-- <div class="row mt-4" id="testingq">    
                <h1 class="text-center" id="loadText">Loading Gan....</h1>
            </div> -->