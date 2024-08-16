<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../css/style.default.premium.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../css/custom.css">
    <!-- font-awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>


    <header class="py-4">
        <?php include("../../nav1.php") ?>

        <main class="main-content">
            <div class="d-flex justify-content-between align-items-start">
                <p class="m-0 d-inline text-lg text-secondary">活動列表 /<span class="text-sm">活動瀏覽</span></p>
            </div>
            <hr>
            <!-- table-->
            <div class="py-2 d-flex justify-content-between gap-2">
                <a href="active.php" class="btn btn-outline-secondary btn-lg">
                    <i class="fa-solid fa-arrow-left"></i>
                </a>
                <a href="doDeleteActive.php" class="btn btn-outline-secondary btn-lg">
                    <i class="fa-regular fa-trash-can"></i>
                </a>
            </div>
            <div>
            </div>
            <div class="row">
                <div class="col-lg">
                    <form action="doUpdateActive.php" method="post">
                        <table class="table table-bordered">
                            <tr>
                                <th>id</th>
                                <td>12</td>
                            </tr>
                            <tr>
                                <th>圖片</th>
                                <td>
                                    <div class="mb-2 ratio ratio-4x3 activePic">
                                    <img class="object-fit-cover " src="images/NARS2.webp" alt="">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>活動名稱</th>
                                <td>
                                    text
                                </td>
                            </tr>
                            <tr>
                                <th>活動日期</th>
                                <td>
                                    2024/08/10
                                </td>
                            </tr>
                            <tr>
                                <th>地點</th>
                                <td>
                                    台北101購物中心
                                </td>
                            </tr>
                            <tr>
                                <th>活動說明</th>
                                <td>
                                NARS秋冬彩妝體驗活動將展示多款秋冬新品，包括新色號的腮紅和口紅。現場將有一對一的彩妝咨詢服務，讓參加者能找到最適合自己的妝容風格。活動期間購物可享受獨家折扣。
                                </td>
                            </tr>
                        </table>
                        
                    </form>
                </div>
            </div>
        </main>
        </div>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../js/front.js"></script>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</body>

</html>