<div class="content-list mt-5 mb-5">

    <div style="background-color:white;">
        <div class="container pt-4 pb-4">
            <div class="row mb-5">
                <div class="col">
                    <h1 class="text-center sectionTitle textShadow" data-aos="fade-up">Asmaul Husna</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                <button class="btn btn-success" onclick="pageScroll1()">play</button>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Arab</th>
                                    <th scope="col">Latin</th>
                                    <th scope="col">Arti</th>
                                </tr>
                            </thead>
                            <tbody id="dataAsmaulHusna">
                            </tbody>
                        </table>
                        <div style="height:60vh;" id="loadingAsmaulHusna"><div class="d-flex justify-content-center mt-5"><div class="spinner-border" style="width: 4rem; height: 4rem;" role="status"><span class="visually-hidden">Loading...</span></div></div></div>
                    </div>
                <button class="btn btn-success" onclick="stopScroll()">play</button>
                </div>
            </div>
        </div>
    </div>

</div>