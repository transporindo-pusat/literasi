<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Card Grid</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            filter: drop-shadow(0 2px 16px rgba(32, 52, 89, .2));
            overflow: hidden;
            border: 1px solid #d8d8db;
            border-radius: 6px;
        }

        .card-title {
            /* position: absolute;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(0, 0, 0, 0.6); */
            background-color: #f7f7f7;
            padding: 5px 5px 5px 15px;
            /* border-radius: 5px; */
            text-align: left;
            margin: 0;
        }

        .media-download {
            position: relative;
            width: 100%;
            padding-top: 100%;
            border: 1px solid #d8d8db;
        }

        .card-img-header {
            position: absolute;
            max-width: 100%;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            object-fit: cover;
        }

        .card-img-top {
            position: absolute;
            max-width: 100%;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            object-fit: contain;
        }
    </style>
</head>

<body>
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col mb-4">
                <div class="card">
                    <!-- Card 1 -->
                    <div class="col-md-3 mb-4">
                        <div class="media-download">
                            <img src="assets/1/Semoga jika disampaikan secara visual seperti ini akan dapat mempermudah kita untuk memahami laporan keuangan.Akuntansi adalah bahasa bisnis. Akan sulit untuk mengetahui bagus tidaknya kinerja suatu bisnis tanpa memahami laporan keuan.jpg" class="card-img-header" alt="Image">
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-md-3 mb-4">

                    </div>

                    <!-- Card 3 -->
                    <div class="col-md-3 mb-4">
                        <div class="media-download">
                            <img src="assets/1/Semoga jika disampaikan secara visual seperti ini akan dapat mempermudah kita untuk memahami laporan keuangan.Akuntansi adalah bahasa bisnis. Akan sulit untuk mengetahui bagus tidaknya kinerja suatu bisnis tanpa memahami laporan keuan-2.jpg" class="card-img-top" alt="Image">
                        </div>
                    </div>

                    <div class="col-md-3 mb-4">
                        <div class="media-download">
                            <img src="assets/1/Semoga jika disampaikan secara visual seperti ini akan dapat mempermudah kita untuk memahami laporan keuangan.Akuntansi adalah bahasa bisnis. Akan sulit untuk mengetahui bagus tidaknya kinerja suatu bisnis tanpa memahami laporan keuan-3.jpg" class="card-img-top" alt="Image">
                        </div>
                    </div>

                    <div class="col-md-3 mb-4">
                        <div class="media-download">
                            <img src="assets/1/Semoga jika disampaikan secara visual seperti ini akan dapat mempermudah kita untuk memahami laporan keuangan.Akuntansi adalah bahasa bisnis. Akan sulit untuk mengetahui bagus tidaknya kinerja suatu bisnis tanpa memahami laporan keuan-4.jpg" class="card-img-top" alt="Image">
                        </div>
                    </div>

                    <div class="col-md-3 mb-4">
                        <div class="media-download">
                            <img src="assets/1/Semoga jika disampaikan secara visual seperti ini akan dapat mempermudah kita untuk memahami laporan keuangan.Akuntansi adalah bahasa bisnis. Akan sulit untuk mengetahui bagus tidaknya kinerja suatu bisnis tanpa memahami laporan keuan-5.jpg" class="card-img-top" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>