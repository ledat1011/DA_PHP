<!DOCTYPE html>
<html>

<head lang="vi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('stylesheets/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('stylesheets/Style.css')}}">
    <link rel="stylesheet" href="./stylesheets/pagination.min.css">

    <!-- jquery -->
    <script src="./javascripts/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- AngulatJS -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script> -->
    <script src="./javascripts/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
    <script src="./javascripts/dirPagination.js"></script>
    <!-- search bar -->
    <script src="./javascripts/searchBar.js"></script>
    <!-- pagination -->

    <title>Trang chủ</title>
</head>

<body>
<!-- Thanh Nav -->
<div class="Navigator">
    <nav class="navbar navbar-expend-sm navbar-light bg-light">
        <div class="container">
            <!-- Logo -->
            <a href="/" class="nav-brand"><img height="120" src="/images/logo2.png" alt="logo"></a>
            <!-- Nav item signin/register -->
            <ul class="nav ml-auto">
                <!-- <% if (!data.sign ) { %> -->

                <li class="nav-item font-weight-bold"><a href="signin" class="nav-link ">Đăng nhập</a></li>
                <li class="nav-item font-weight-bold"><a href="signup" class="nav-link">Đăng kí</a></li>
                <!-- <% }else if(data.sign){%> -->
                <li class="nav-item nav-username">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle font-weight-bold mr-2"
                                data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"> Name</button>
                        <div class="dropdown-menu">
                            <a href="/users/" class="dropdown-item"><i class="fa fa-user-o" aria-hidden="true"> Thông tin tài khoản</i>  </a>
                            <div class="dropdown-divider"></div>
                            <a href="/posted/ " class="dropdown-item"> <i class="fa fa-file-text-o" aria-hidden="true"> Bài viết đã đăng</i></a>
                            <div class="dropdown-divider"></div>
                            <a href="/savePosts/ " class="dropdown-item"><i class="fa fa-bookmark-o" aria-hidden="true"> Bài viết đã lưu</i></a>
                            <div class="dropdown-divider"></div>
                            <button class="signout dropdown-item" id="signout"><i class="fa fa-sign-out" aria-hidden="true"> Đăng xuất</i> </button>
                        </div>
                    </div>
                </li>

                <li class="nav-item"><a href="DangTin"><button class="btn btn-primary font-weight-bold">Đăng
                            tin</button> </a></li>
                <!-- <li class="nav-item"><a href="#" class="nav-link"> Chào mừng <%=data.sign.ho  %>  <%=data.sign.ten  %>  </a></li>
                        <li class="nav-item"><a href="DangTin"><button class="btn btn-primary font-weight-bold">Đăng tin</button></a></li>-->


                <li class="nav-item font-weight-bold"><a href="/postW" class="nav-link">Bài viết đã xem</a></li>
            </ul>
    </nav>
</div>
<!-- Big Banner -->
<div ng-app="myApp" ng-controller="controller1">
    <div class="banner">
        <div class="container">
            <!-- Slogan -->
            <h1 class="display-5 text-center banner-title text-white font-weight-bold">ĐÚNG NHÀ, ĐÚNG GIÁ, ĐÚNG THỜI
                ĐIỂM</h1>
            <!-- Thanh tim kiem -->
            <div class="row searching-bar blur-bg">
                <div class="col-md-2 col-sm-2 col-lg-2 pt-3">
                    <div class="form-group">
                        <select id="ThongTinMoTa" class="form-control w-100">
                            <option selected value="">Loại tin</option>
                            <option value="Phòng trọ">Phòng trọ, nhà trọ</option>
                            <option value="Nhà nguyên căn">Nhà thuê nguyên căn</option>
                            <option value="Tìm người ở ghép">Tìm người ở ghép</option>
                            <option value="Cho thuê căn hộ">Cho thuê căn hộ</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-lg-2 pt-3">
                    <div class="form-group">
                        <select id="selectCity" class="form-control w-100">
                            <option value=" " selected>Tỉnh thành</option>

                        </select>
                    </div>
                </div>

                <div class="col-md-2 col-sm-2 col-lg-2 pt-3">
                    <div class="form-group">
                        <select id="selectDistric" class="form-control w-100">
                            <option value=""> Chọn Quận huyện</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-lg-2 pt-3">
                    <div class="form-group">
                        <select id="selectWard" class="form-control w-100">
                            <option value=""> Chọn Phường/Xã</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-lg-2 pt-3">
                    <div class="form-group">
                        <select id="inputState" class="form-control w-100">
                            <option selected>Khoảng giá</option>
                            <option>Dưới 1 triệu</option>
                            <option value=" 1000000">1 triệu - 2 triệu</option>
                            <option value=" 2000000"> 2 triệu - 3 triệu</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-2 col-sm-2 col-lg-2 pt-3 ">
                    <button type="button" id="search" class="btn btn-primary btn-block"
                            ng-click="myClick(loaiTin)">Lọc tin</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Thanh Nav -->
    <div class="Nav2">
        <nav class="navbar navbar-expend-sm nav-custom navbar-light bg-nav">
            <div class="container justify-content-center">
                <div class="row grid-divider">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <ul class="nav mr-auto">
                            <li class="nav-item"><a href="/" class="nav-link font-weight-bold text-white">Trang
                                    chủ</a></li>
                            <li class="nav-item"><a href="#" class="nav-link font-weight-bold text-white">Cho thuê
                                    phòng trọ</a></li>
                            <li class="nav-item"><a href="#" class="nav-link font-weight-bold text-white">Nhà cho
                                    thuê</a></li>
                            <li class="nav-item" ng-click="timClick()"><a href=""
                                                                          class="nav-link font-weight-bold text-white">Tìm người
                                    ở ghép</a></li>
                            <li class="nav-item"><a href="#" class="nav-link font-weight-bold text-white">Cho thuê
                                    căn hộ</a></li>
                            <li class="nav-item"><a href="#" class="nav-link font-weight-bold text-white">Hướng
                                    dẫn</a></li>
                            <li class="nav-item"><a href="#" class="nav-link font-weight-bold text-white">Nạp
                                    tiền</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Tin Noi Bat -->
    <div class="container">
        <h3 ng-show='hienthi'>Tin nổi bật</h3>
{{--        <h3 class="text-center" ng-show='showresult' ng-if="filtered.length !=0">Tìm thấy <strong--}}
{{--                style="color: red;"> </strong> kết quả</h3>--}}
        <div class="row justify-content-center mt-2"
             style="height: 150px; border:solid 1px gray ;">
            <h3 class="">No result</h3>
        </div>
        <div class="row ">
            <div class="col-sm-6" >
                <a href="/DangTin/post/ " style="text-decoration: none; color: #000;">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="/" height="200px" class="card-img" alt="">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"> </h5>
                                    <p class="card-text font-weight-bold">Giá: </p>
                                    <p class="card-text"></p>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <dir-pagination-controls [max-size="6" ] [direction-links="true" ] [boundary-links="true" ]>
            </dir-pagination-controls>
        </div>
    </div>

</div>


<!-- Lọc thông tin từ thanh search bar bằng AngulaJS -->

<!-- Xử lý socket.io -->
<!-- <script src="/javascripts/index.js" type="text/javascript" ></script> -->
<!-- angularJS -->

<!-- signout -->
<script src="/javascripts/sigout.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
    integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
    integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
    crossorigin="anonymous"></script> -->
<script src="./javascripts/popper.min.js"></script>
<script src="./javascripts/bootstrap.min.js"></script>
</body>

</html>
