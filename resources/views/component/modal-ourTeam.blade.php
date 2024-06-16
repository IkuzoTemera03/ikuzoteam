<style>
    .profile-teams{
        width: 80%!important;
    }
    #modalOurTeam th[scope="row"]{
        width: 110px;
    }
</style>
<div class="modal fade" id="modalOurTeam" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="
        width: 100%;
        height: 100%;
        margin: 0 auto;
        display: flex;
        align-items: center;"
        >
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Ikuzo Tim</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="carouselExampleDark2" class="carousel carousel-dark slide">
                    <div class="carousel-inner">
                        <div class="carousel-item profile-list active">
                            <div class="profile-teams">
                                <h2 style="text-align: center; color: #48CAE4;">Project Lead</h2>
                                <img src="{{ asset('images/tim/Arrini.jpg') }}" alt="Foto Arrini Khirofati Jannah" class="rounded-circle" style="margin: 0 auto; padding: 5px; width: 150px; height: 150px; border-style: solid; border-width: 5px; border-color: #48CAE4;">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Nama</th>
                                            <td>Arrini Khirofati Jannah</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">ID Peserta</th>
                                            <td>F7046XB316</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Kampus</th>
                                            <td>Universitas Siber Asia</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Peran</th>
                                            <td>Front End Developer & Project Manager</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="carousel-item profile-list">
                            <div class="profile-teams">
                                <h2 style="text-align: center; color: #48CAE4;">Developer</h2>
                                <img src="{{ asset('images/tim/maulana.png') }}" alt="Foto Maulana Malik Ibrahim Lubis" class="rounded-circle" style="margin: 0 auto; padding: 5px; width: 150px; height: 150px; border-style: solid; border-width: 5px; border-color: #48CAE4;">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Nama</th>
                                            <td>Maulana Malik Ibrahim Lubis</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">ID Peserta</th>
                                            <td>F0126YB021</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Kampus</th>
                                            <td>Telkom University</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Peran</th>
                                            <td>Front End & Back End Developer</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="carousel-item profile-list">
                            <div class="profile-teams">
                                <h2 style="text-align: center; color: #48CAE4;">Developer</h2>
                                <img src="{{ asset('images/tim/Adi.png') }}" alt="Foto M. Septian Adi Cahya" class="rounded-circle" style="margin: 0 auto; padding: 5px; width: 150px; height: 150px; border-style: solid; border-width: 5px; border-color: #48CAE4;">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Nama</th>
                                            <td>M. Septian Adi Cahya</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">ID Peserta</th>
                                            <td>F2886YB218</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Kampus</th>
                                            <td>Universitas Pamulang</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Peran</th>
                                            <td>Front End Developer & UI/UX Designer</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev button-prev-profil" type="button" data-bs-target="#carouselExampleDark2" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next button-next-profil" type="button" data-bs-target="#carouselExampleDark2" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>