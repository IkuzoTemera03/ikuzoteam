<style>
    #staticBackdrop .nav-link {
        color: black !important;
    }

    .vision__heading {
        font-weight: 500;
        text-align: center;
        text-decoration: underline;
        text-decoration-color: #CAF0F8;
    }

    .vision__list {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        padding: 40px;
    }

    .vision__item {
        width: 100%;
    }

    .vision__item h4 {
        margin-top: 10px;
    }

    .vision__item p {
        text-align: justify;
        margin-top: 10px;
    }

    @media screen and (min-width:320px) {
        .vision p {
            font-size: 20px;
        }

        .vision__heading {
            font-size: 25px;
        }

        .vision h4 {
            font-weight: bold;
            font-size: 20px;
        }
    }

    @media screen and (min-width:768px) {
        .vision__heading {
            font-size: 30px;
        }

        .vision h4 {
            font-weight: bold;
            font-size: 20px;
        }

        .vision p {
            font-size: 20px;
        }
    }

    @media screen and (min-width:1024px) {
        .vision__heading {
            font-size: 36px;
        }

        .vision h4 {
            font-weight: bold;
            font-size: 24px;
        }

        .vision p {
            font-size: 24px;
        }
    }

    #staticBackdrop .vision__heading {
        color: #48CAE4 !important;
    }
</style>
<script src="https://kit.fontawesome.com/5a44ae7f42.js" crossorigin="anonymous"></script>
<link rel="apple-touch-icon" sizes="180x180" href="/images/icons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/images/icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/images/icons/favicon-16x16.png">
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 600px;">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Visi Kami</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="vision" id="vision">
                    <h3 class="vision__heading">Visi Kami</h3>
                    <div class="vision__list pb-2 d-flex gap-4">
                        <div class="vision__item">
                            <div class="w-100 d-flex justify-content-center">
                                <i class="fa-regular fa-lightbulb fa-bounce fs-4 mb-2" style="color: #FFD43B;"></i>
                            </div>

                            <h4 class="text-center">Perubahan Pola Pikir</h4>
                            <p>Kami berharap adanya perubahan pola pikir masyarakat dalam melihat sampah yang
                                tadinya "jijik" menjadi "berharga".</p>
                        </div>
                        <div class="vision__item">
                            <div class="w-100 d-flex justify-content-center">
                                <i class="fa-solid fa-recycle fa-spin fs-4 mb-2"></i>
                            </div>

                            <h4 class="text-center">Keberlanjutan Ekonomi & Lingkungan </h4>
                            <p>Fakta bahwa ada 3.000.000+ pengepul dan pemulung lokal yang tersebar di seluruh
                                indonesia, yang memiliki infrastruktur, berjejaring, dan terus berkembang secara
                                tradisional sehingga kami melihat ada potensi keberlanjutan disana </p>
                        </div>
                        <div class="vision__item">
                            <div class="w-100 d-flex justify-content-center">
                                <i class="fa-solid fa-earth-asia fa-spin fs-4 mb-2" style="color: #004880;"></i>
                            </div>

                            <h4 class="text-center">Cinta Bumi</h4>
                            <p>Kami berharap saat masyarakat merasa dimudahkan ketika memilah sampah sehingga
                                memilah sampah ini adalah hal kecil dan hal yang mudah dilakukan untuk mencintai
                                bumi</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
