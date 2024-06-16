<footer class="site-footer">
    <div class="container p-0">
        <div class="row-footer">
            <div class="col-sm-12 col-md-6">
                <h6>About Ikuzo</h6>
                <p class="text-justify">Ikuzo yang dalam bahasa jepang berarti ‘mengajak’ adalah platform berbasis
                    website yang dibuat untuk mengajak masyarakat memilah dan mengolah sampah dengan lebih bijak serta
                    merubah pandangan yang tadinya sampah itu tak berharga menjadi sesuatu yang berharga dan memiliki
                    nilai yaitu dengan pemberian insentif. Dengan platform ini diharapkan dapat melahirkan budaya baru
                    yaitu budaya hijau yang berkelanjutan.
                </p>
            </div>
            <div class="footer-detail">
                <div class="col-xs-6 col-md-3" style="width: 50%;">
                    <h6 class="h6-link"><a style="text-decoration: none;" data-bs-toggle="modal"
                            data-bs-target="#modalOurTeam">Our Team</a></h6>
                    <ul class="footer-links">
                        <li><a class="profile-team" data="1" data-bs-toggle="modal" data-bs-target="#modalOurTeam">Arrini
                                Khirofati</a></li>
                        <li><a class="profile-team" data="2" data-bs-toggle="modal" data-bs-target="#modalOurTeam">Maulana
                                Malik</a></li>
                        <li><a class="profile-team" data="3" data-bs-toggle="modal" data-bs-target="#modalOurTeam">M. Septian
                                Adi</a></li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3" style="width: 50%;">
                    <h6>Quick Links</h6>
                    <ul class="footer-links">
                        <li><a
                                href="{{ $page == '' || $page == 'Login' || $page == 'Register' ? '/login' : '/pending' }}">Home</a>
                        </li>
                        <li><a
                                href="{{ $page == '' || $page == 'Login' || $page == 'Register' ? '/login' : '/pending' }}">Pengajuan</a>
                        </li>
                        <li><a
                                href="{{ $page == '' || $page == 'Login' || $page == 'Register' ? '/login' : '/pending' }}">Tiket
                                Menunggu</a></li>
                        <li><a
                                href="{{ $page == '' || $page == 'Login' || $page == 'Register' ? '/login' : '/accept' }}">Tiket
                                Diterima</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
    </div>
    <div class="container ps-0 pe-0">
        <div class="row w-100">
            <div class="col-md-8 col-sm-6 col-xs-12">
                <p class="copyright-text text-start">&copy; 2024 - Ikuzo Team
                </p>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 pe-0">
                <ul class="social-icons">
                    <li><a class="github" href="https://github.com/IkuzoTemera03"><i class="fa fa-github"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<script>
    var profileLinks = document.querySelectorAll('.profile-team');
    profileLinks.forEach(function(link) {
        link.addEventListener('click', function(event) {
            var dataId = this.getAttribute('data');
            const elActive = document.querySelector('.profile-list.active');
            elActive.classList.remove('active');
            let el = `.profile-list:nth-child(${dataId})`;
            document.querySelector(el).classList.add('active');
        });
    });
</script>