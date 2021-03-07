<div class="content-list mt-4 mb-5">

    <div style="background-color:white;">
        <div class="container pt-4 pb-4">
            <div class="row mb-4">
                <div class="col">
                    <div class="card cardShadow" data-aos="fade-right">
                        <div class="card-body d-flex justify-content-between">
                            <div class="arrowLeft">
                                <a class="text-dark" href="#" onclick="previousBacaanTasbih(event)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="bacaanTasbihWrap text-center">
                                <b style="font-size:24px;" id="bacaanTasbihArab">Undefined</b><br>
                                <span><b id="bacaanTasbihLatin">Undefined</b></span><br>
                                <span id="bacaanTasbihArti">Undefined</span>
                            </div>
                            <div class="arrowRight">
                                <a class="text-dark" href="#" onclick="nextBacaanTasbih(event)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card cardShadow" data-aos="fade-down-right">
                        <div class="card-body">
                            <div class="alert alert-success text-center mb-3" role="alert">
                                <h4>Counter : <b id="tasbihCounter">00</b></h4>
                                <input type="hidden" name="tasbihType" id="tasbihType" value="">
                            </div>
                            <div class="row mt-5 mb-5">
                                <div class="col d-flex justify-content-evenly align-items-center">
                                    <div class="buttonMinusWrap">
                                        <a href="" class="text-secondary buttonPlusMinus" onclick="minusValueCounter(event)">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="currentColor" class="bi bi-patch-minus" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M5.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z"/>
                                                <path d="M10.273 2.513l-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="buttonAddWrap">
                                        <a href="" class="buttonAdd" onclick="plusValueCounter(event)">
                                            <div class="card cardCircleShadow" id="buttonAddMain" style="width:150px;height:150px;border-radius:50%;">
                                                <div class="card-body d-flex justify-content-center align-items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-hand-index-thumb-fill" viewBox="0 0 16 16">
                                                        <path d="M8.5 1.75v2.716l.048-.002c.311-.012.74-.016 1.05.046.28.056.543.18.738.288.274.152.456.385.56.642l.132-.012c.312-.024.794-.038 1.158.108.37.148.689.487.88.716.075.09.141.175.195.248h.582a2 2 0 0 1 1.99 2.199l-.272 2.715a3.5 3.5 0 0 1-.444 1.389l-1.395 2.441A1.5 1.5 0 0 1 12.42 16H6.118a1.5 1.5 0 0 1-1.342-.83l-1.215-2.43L1.07 8.589a1.517 1.517 0 0 1 2.373-1.852L5 8.293V1.75a1.75 1.75 0 0 1 3.5 0z"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="buttonPlusWrap">
                                        <a href="" class="text-secondary buttonPlusMinus" onclick="plusValueCounter(event)">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="currentColor" class="bi bi-patch-plus" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z"/>
                                                <path d="M10.273 2.513l-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-outline-success btn-sm" type="button" onclick="resetValueTasbih(event)">Reset</button>
                                    <button class="btn btn-outline-secondary btn-sm">Mute</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <audio style="visibility:hidden;height:1px;" id="audioClickButton" controls controlsList="nodownload">
                        <source src="<?php echo(base_url()); ?>/assets/public/audio/click_button.mp3">
                        Your browser does not support the audio element.
                    </audio>
                </div>
            </div>
        </div>
    </div>

</div>