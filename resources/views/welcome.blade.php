<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DeHaat | Insurance crop</title>
    <link rel="icon" href="https://www.agrevolution.in/assets/frontend/images/favicon.png" type="image" sizes="16x16">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <!-- custom css -->
    <style>
        body, html{
            font-family: 'Montserrat', sans-serif;
        }
        .content{
            font-size: 14px;
        }
        .type-ul li{
            margin-top: 1rem;
        }
        .font-weight-800{
            font-weight: 800 !important;
        }
    </style>
</head>

<body>
    <section class="d-block mx-auto" style="max-width: 450px;">
        <!-- <nav class="navbar bg-white py-2">
            <img src="https://www.agrevolution.in/assets/frontend/images/logo-inner.svg" alt="Dehaat Logo"
                class="d-block mx-auto" width="35%">
        </nav> -->
        <div>
            <img src="{{asset('images/banner.jpeg')}}" width="100%">
        </div>
        <div class="px-3 pb-4 mb-5">
            <h4 class="heading text-black pt-4 lh-1 font-weight-bold" align="center">
                <span style="color: #128141;">??????????????? ???????????? ?????? ??????????????? ???????????????????????? ?????????????????? ??????????????? ????????? ????????????</span>
            </h4>
            <div class="content text-dark pt-2" align="left" style="line-height: 1.5;text-align: justify;">
                ??????????????? ?????????????????? ???????????????????????? ?????????????????? ??????????????? ????????? ???????????? ??????????????? ????????????????????? ?????? ?????????????????? ?????? ??????????????? ?????? ????????? ???????????? ?????? ????????? ???????????? ????????? ??????????????? ??????????????? ?????? ???????????? ???????????? ???????????? ?????? ????????? ?????? ?????????????????? ?????? ????????? ?????? ????????? ???????????? ????????? ?????? ???????????????????????? ???????????? ???????????? ?????? ???????????? ????????? ??? <br/><br/>
                ?????? ??????????????? ????????? ????????????????????? ????????? ????????????????????? ?????? ?????????????????? ????????? ?????? ????????? ??????, ?????????????????? ???????????? ????????? ??????????????? ????????? ??????????????? ???????????? ?????? ???<br/>
            </div>
            <div class="content text-dark pt-2">
                <h5 class="font-weight-bold pt-3" align="center" style="color: #128141;">
                    ??????????????? ????????? ???????????? 2 ?????????????????? ????????? ?????????????????? ?????? :
                </h5>
                <div class="mt-4">
                    <h5 class="font-weight-800 text-dark" align="center" style="color: #000;">
                        Type 1 : <span style="color: #128141;">???????????????????????? ????????????</span>
                    </h5>
                    <div class="row font-weight-bold" align="center">
                        <div class="col-6 mt-3">
                            <img src="{{asset('images/new/discount.png')}}" class="mb-2" width="30%"><br>
                            ???????????? ??????????????? ????????? ????????? ??????????????? ????????? ?????????????????????
                        </div>
                        <div class="col-6 mt-3">
                            <img src="{{asset('images/new/peace-day.png')}}" class="mb-2" width="30%"><br>
                            21 ??????????????? ?????? ???????????? ?????????
                        </div>
                        <div class="col-6 mt-3">
                            <img src="{{asset('images/new/wheat.png')}}" class="mb-2" width="30%"><br>
                            ??????????????? ?????? GAPL ??????????????? ????????? ?????? ????????? ????????????????????? ?????? ????????????
                        </div>
                        <div class="col-6 mt-3">
                            <img src="{{asset('images/new/money-bag.png')}}" class="mb-2" width="30%"><br>
                            ???????????????????????? ?????? ????????? ?????? ??????????????? ???????????? ??????????????? ?????? ???????????? ???????????? ????????? ??????????????????
                        </div>
                    </div>

                    <!-- <ul class="pl-3 type-ul d-none" style="list-style: none;">
                        <li>
                            <span>
                                <img src="{{asset('images/discount.png')}}">
                            </span>
                            ???????????? ??????????????? ????????? ????????? ??????????????? ????????? ????????????????????? 
                        </li>
                        <li>
                            <span>
                                <img src="{{asset('images/peace-day.png')}}">
                            </span>
                            21 ??????????????? ?????? ???????????? ?????????
                        </li>
                        <li>
                            <span>
                                <img src="{{asset('images/wheat.png')}}">
                            </span>
                            ??????????????? ?????? GAPL ??????????????? ????????? ?????? ????????? ????????????????????? ?????? ????????????
                        </li>
                        <li>
                            <span>
                                <img src="{{asset('images/money-bag.png')}}">
                            </span>
                            ???????????????????????? ?????? ????????? ?????? ??????????????? ???????????? ??????????????? ?????? ???????????? ???????????? ????????? ??????????????????
                        </li>
                    </ul> -->
                </div>
                <div class="mt-5">
                    <h5 class="font-weight-800 text-dark" align="center" style="color: #000;">
                        Type 2 : <span style="color: #128141;">????????? ????????????</span>
                    </h5>
                    <div class="row font-weight-bold" align="center">
                        <div class="col-6 mt-3">
                            <img src="{{asset('images/new/time-management.png')}}" class="mb-2" width="30%"><br>
                            ?????????????????? ????????? ????????? ?????????????????? ?????? ???????????? ??????????????? ????????? ?????????
                        </div>
                        <div class="col-6 mt-3">
                            <img src="{{asset('images/new/percent.png')}}" class="mb-2" width="30%"><br>
                            15 ?????????????????? ?????? 30 ?????????????????? ?????? ??????????????? ????????????
                        </div>
                        <div class="col-6 mt-3">
                            <img src="{{asset('images/new/wheat.png')}}" class="mb-2" width="30%"><br>
                            ??????????????? ?????? GAPL ??????????????? ????????? ?????? ????????? ????????????????????? ?????? ????????????
                        </div>
                        <div class="col-6 mt-3">
                            <img src="{{asset('images/new/money-bag.png')}}" class="mb-2" width="30%"><br>
                            ???????????????????????? ?????? ????????? ?????? ??????????????? ???????????? ??????????????? ?????? ???????????? ???????????? ????????? ??????????????????
                        </div>
                    </div>

                    <!-- <ul class="pl-3 type-ul d-none" style="list-style: none;">
                        <li>
                            <span>
                                <img src="{{asset('images/time-management.png')}}">
                            </span>
                            ?????????????????? ????????? ????????? ?????????????????? ?????? ???????????? ??????????????? ????????? ?????????
                        </li>
                        <li>
                            <span>
                                <img src="{{asset('images/percent.png')}}">
                            </span>
                            15 ?????????????????? ?????? 30 ?????????????????? ?????? ??????????????? ????????????
                        </li>
                        <li>
                            <span>
                                <img src="{{asset('images/wheat.png')}}">
                            </span>
                            ??????????????? ?????? GAPL ??????????????? ????????? ?????? ????????? ????????????????????? ?????? ????????????
                        </li>
                        <li>
                            <span>
                                <img src="{{asset('images/money-bag.png')}}">
                            </span>
                            ???????????????????????? ?????? ????????? ?????? ??????????????? ???????????? ??????????????? ?????? ???????????? ???????????? ????????? ??????????????????
                        </li>
                    </ul> -->
                </div>
                
            </div>
        </div>
        <footer class="px-3 pb-2 w-100 bg-white" style="max-width: 450px;position: fixed; bottom: 0%;"  >
            <a class="btn w-100  text-white py-2" href="{{route('insurance-detail')}}" style="background-color: #128141;">
                ????????? ??????????????? ?????????????????? ????????? ???????????? ???????????? ??????????????? ?????????
            </a>
        </footer>
    </section>

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        // Hide Card onLoad
        $('#float-card').hide();
        // Load after delay
        setTimeout(function () {
            $('#float-card').show(800);
        }, 5000);
        $('.close-float-card').click(function () {
            $('#float-card').hide(500);
            $('#float-button').show(500);
        });
    </script>
</body>

</html>