<?php /* Template_ 2.2.7 2022/11/03 18:45:57 /www/system/error/http.html 000004045 */ ?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>서비스 오류 안내</title>
    <style type="text/css">
        .blackout {
            width: 578px;
            margin: 12% auto 0;
            padding: 210px 0 90px;
            background: url('/admin/gd_share/img/icon_error.png') no-repeat center 69px;
            text-align: center;
        }

        .blackout > strong {
            color: #222222;
            font-size: 28px;
        }

        .blackout > strong > em {
            font-style: normal;
            color: #EC1C23;
        }

        * {
            font-family: Malgun Gothic, "맑은 고딕", AppleGothic, Dotum, "돋움", sans-serif;
        }

        .blackout p {
            padding: 20px 0 0;
            color: #222222;
            font-size: 13px;
            line-height: 1.5;
            color: #666666;
        }

        /*20160510 윤태건 404error*/
        * {
            margin: 0;
            padding: 0;
        }

        body {
            -webkit-text-size-adjust: none;
        }

        .c-point {
            color: #EC1C23;
        }

        .submitbtn .skinbtn {
            width: 130px;
        }

        .skinbtn {
            display: inline-block;
            *display: inline;
            *zoom: 1;
            height: 40px;
            padding: 0 5px;
            text-align: center;
            vertical-align: top;
            box-sizing: border-box;
            cursor: pointer;
            font-size: 14px;

            border: 1px solid #B1B1B1;
            background: #FFFFFF;
            color: #777777;
        }

        .btn-m2 {
            height: 44px;
        }

        .submitbtn {
            margin: 30px 0 0;
        }

        @media (max-width: 768px) {
            .blackout {
                width: auto;
                padding: 190px 0 90px;
                /*background-size: 97px 84px;*/
            }

            .blackout > strong {
                font-size: 20px;
            }

            .blackout p {
                padding: 10px 0 0;
                font-size: 14px;
                line-height: 18px;
                letter-spacing: -0.05em;
            }

            .submitbtn {
                margin: 20px 0 0;
            }
        }
        /*20160510 윤태건 404error // */
    </style>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script src="/admin/gd_share/script/jquery/jquery.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $('#btnGoBack').click(function(e){
                window.history.back();
            });
            $('#btnGoHome').click(function(e){
                location.replace('<?php echo $TPL_VAR["homeUri"]?>');
            });
        });
    </script>
    <?php echo $TPL_VAR["customHeader"]?>

</head>
<body>
    <div class="blackout">
        <strong><?php echo $TPL_VAR["status"]?></strong>
        <p>
            오류 관련 문의는 <strong><?php echo $TPL_VAR["centerPhone"]?></strong>로 연락하시기 바랍니다.<br>
            서비스 이용에 불편을 드려서 죄송합니다.
        </p>
        <div class="submitbtn">
            <button type="button" class="skinbtn default btn-m2" id="btnGoBack"><b>뒤로가기</b></button>
            <button type="button" class="skinbtn default btn-m2" id="btnGoHome"><b>홈 바로가기</b></button>
        </div>
    </div>
</body>
</html>