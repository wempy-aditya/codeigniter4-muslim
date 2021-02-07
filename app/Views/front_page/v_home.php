            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                        <div class="container">
                            <div class="carousel-caption text-start">
                                <h1>Example headline.</h1>
                                <p id="quoteRandom"></p>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Another example headline.</h1>
                                <p id="quoteRandom1">Fungsi filter() membuat array baru berisi elemen yang lolos pengecekan di dalam fungsi anonim yang dikirim sebagai parameter.</p>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!-- <img src="./factory2-home.jpg" alt="" class="d-block" loading="lazy"> -->
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                        <div class="container">
                            <div class="carousel-caption text-end">
                                <h1>One more for good measure.</h1>
                                <p id="quoteRandom2">Fungsi filter() membuat array baru berisi elemen yang lolos pengecekan di dalam fungsi anonim yang dikirim sebagai parameter.</p>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            
            <div class="content-list mb-5">

                <div style="background-color: white;">
                    <div class="container pt-5 pb-5">
                        <div class="row mb-4">
                            <div class="col">
                                <h1 class="text-center sectionTitle" data-aos="zoom-in">Hitung Mundur Ramadhan</h1>
                            </div>
                        </div>
                        <div class="row"> 
                            <div class="col">
                                <div class="card bg-dark countdownCard " data-aos="zoom-in-up">
                                    <div class="card-body">
                                        <p class="card-text text-center timespan" id="days">00</p>
                                    </div>
                                    <div class="card-header" style="background-color: #5c8d89;"><h2 class="text-center formatWaktu">Hari</h2></div>
                                </div>
                                <div class="progress" style="height: 12px;" id="progressLine1"></div>
                            </div>
                            <div class="col">
                                <div class="card bg-dark countdownCard " data-aos="zoom-in-up">
                                    <div class="card-body">
                                        <p class="card-text text-center timespan" id="hours">00</p>
                                    </div>
                                    <div class="card-header" style="background-color: #5c8d89;"><h2 class="text-center formatWaktu">Jam</h2></div>
                                </div>
                                <div class="progress" style="height: 12px;" id="progressLine2"></div>
                            </div>
                            <div class="col">
                                <div class="card bg-dark countdownCard " data-aos="zoom-in-up">
                                    <div class="card-body">
                                        <p class="card-text text-center timespan" id="minutes">00</p>
                                    </div>
                                    <div class="card-header" style="background-color: #5c8d89;"><h2 class="text-center formatWaktu">Menit</h2></div>
                                </div>
                                <div class="progress" style="height: 12px;" id="progressLine3"></div>
                            </div>
                            <div class="col">
                                <div class="card bg-dark countdownCard " data-aos="zoom-in-up">
                                    <div class="card-body">
                                        <p class="card-text text-center timespan" id="seconds">00</p>
                                    </div>
                                    <div class="card-header" style="background-color: #5c8d89;"><h2 class="text-center formatWaktu">Detik</h2></div>
                                </div>
                                <div class="progress" style="height: 12px;" id="progressLine4"></div>
                            </div>
                        </div>
                        <div class="row mt-4" id="testingq">    
                            <!-- <h1 class="text-center" id="loadText">Loading Gan....</h1> -->
                        </div>
                    </div>
                </div>

            </div>