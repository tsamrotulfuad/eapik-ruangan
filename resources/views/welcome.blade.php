<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header class="p-3 text-bg-dark">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <img src="{{ asset('img/Lambang-Kota-Pasuruan-Asli.png') }}" height="65px" alt="logo-kotapasuruan">
                <div class="fw-bold mx-2 text-uppercase">
                    Pemerintah <br>
                    Kota Pasuruan
                </div>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 text-white mx-3 fw-bold fs-4">BADAN PERENCANAAN PEMBANGUNAN, PENELITIAN DAN PENGEMBANGAN DAERAH</a></li>
            </ul>

            <div class="text-end">
                <div id="tanggal"></div>
                <div class="fs-4 fw-bold" id="waktu"></div>
            </div>
        </div>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <div class="container my-5">
                        <div class="p-5 bg-body-tertiary rounded-3">
                            <h3 class="text-body-emphasis mb-3">Basic jumbotron</h3>
                            <div class="row g-2">
                                <div class="col-6">
                                    <div class="p-2 d-flex"><i class="bi bi-building-check" style="font-size: 1.5rem;"></i>
                                        <div class="align-self-center mx-2">Ruang Rapat Mini</div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="p-2"><i class="bi bi-person-check-fill" style="font-size: 1.5rem;"></i>

                                    </div>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-6">
                                    <div class="p-2"><i class="bi bi-clock-fill" style="font-size: 1.5rem;"></i></div>
                                </div>
                                <div class="col-6">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container my-5">
                        <div class="p-5 bg-body-tertiary rounded-3">
                            <h3 class="text-body-emphasis mb-3">Basic jumbotron</h3>
                            <div class="row g-2">
                                <div class="col-6">
                                    <div class="p-2 d-flex"><i class="bi bi-building-check" style="font-size: 1.5rem;"></i>
                                        <div class="align-self-center mx-2">Ruang Rapat Mini</div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="p-2"><i class="bi bi-person-check-fill" style="font-size: 1.5rem;"></i>

                                    </div>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-6">
                                    <div class="p-2"><i class="bi bi-clock-fill" style="font-size: 1.5rem;"></i></div>
                                </div>
                                <div class="col-6">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="p-5 rounded-3">
                            <div class="row g-2">
                                <div class="col-6 align-items-center">
                                    <div class="mx-1">Ikuti Kami</div>
                                    <div class="p-1 d-flex"><i class="bi bi-globe2" style="font-size: 1.5rem;"></i>
                                        <div class="align-self-center mx-1">bappelitbangda.pasuruankota.go.id</div>
                                    </div>
                                    <div class="p-1 d-flex"><i class="bi bi-instagram" style="font-size: 1.5rem;"></i>
                                        <div class="align-self-center mx-1">bappelitbangdakotapasuruan</div>
                                    </div>
                                    <div class="p-1 d-flex"><i class="bi bi-youtube" style="font-size: 1.5rem;"></i>
                                        <div class="align-self-center mx-1">Bappelitbangda.Pasuruankota</div>
                                    </div>
                                </div>
                                <div class="col-6">
                                <h5 class="text-body-emphasis mb-3">SKM - BAPPELITBANGDA</h5>
                                    <img src="{{ asset('img/skm-bappelitbangda.png')}}" alt="skm" width="145px" >
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-6">
                                   
                                </div>
                                <div class="col-6">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="container my-4">
                        <div class="rounded-0">
                            <!-- <iframe width="100%" height="460" src="https://www.youtube.com/embed/TYfcImTBfyk?si=QoWqJNYnBMAnnc0n" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
                        </div>
                    </div>
                    <div class="container my-5">
                        <div class="p-4 bg-body-tertiary rounded-3">
                            <h4 class="text-body-emphasis mb-3">Survei Kepuasan Masyarakat</h4>
                            <div class="row g-2">
                                <div class="col-6">
                                    <div class="p-2"><i class="bi bi-building-check" style="font-size: 1.5rem;"></i></div>
                                </div>
                                <div class="col-6">
                                    <div class="p-2"><i class="bi bi-person-check-fill" style="font-size: 1.5rem;"></i>

                                    </div>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-6">
                                    <div class="p-2"><i class="bi bi-clock-fill" style="font-size: 1.5rem;"></i></div>
                                </div>
                                <div class="col-6">
                                    <div class="p-2">Custom column padding</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function showTime() {
            var today = new Date();
            var curr_hour = today.getHours();
            var curr_minute = today.getMinutes();
            var curr_second = today.getSeconds();

            curr_hour = checkTime(curr_hour);
            curr_minute = checkTime(curr_minute);
            curr_second = checkTime(curr_second);

            var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
            var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
            var date = new Date();
            var day = date.getDate();
            var month = date.getMonth();
            var thisDay = date.getDay(),
                thisDay = myDays[thisDay];
            var yy = date.getYear();
            var year = (yy < 1000) ? yy + 1900 : yy;

            document.getElementById('tanggal').innerHTML = thisDay + ", " + day + " " + months[month] + " " + year;
            document.getElementById('waktu').innerHTML = curr_hour + ":" + curr_minute + ":" + curr_second;
        }

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }
        setInterval(showTime, 500);
    </script>
</body>

</html>