<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Perfect World X </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="http://www.l2-hunter.ru/images/favicon.png">
    <link href="css/style.css" rel="stylesheet" media="all">

    <script type="text/javascript" async="" src="js/watch.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/image.js"></script>
    <script type="text/javascript">
        //<![CDATA[
        $(window).load(function(){
            $('#wrapper a').click(function() {
                if ($(this).attr('class') != $('#wrapper').attr('class') ) {
                    $('#wrapper').attr('class',$(this).attr('class'));
                }
            });
        });//]]>
    </script>
    <script type="js/jquery-latest.min.js"></script>
    <script src="js/jquery.tinycarousel.js"></script>
    <script type="text/javascript">
        $(document).ready(function()
        {
            $('#slider1').tinycarousel();
        });
    </script>
    <script>
        $(document).ready(function(){
            $(window).scroll(function () {
                if ($(this).scrollTop() > 0) {
                    $('#top').fadeIn();
                } else {
                    $('#top').fadeOut();
                }
            });
            $('#top').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 400);
                return false;
            });
        });
    </script>
    <script src="js/countdown.js"></script>
</head>
<body>
<header class="header">
    <div id="general">
        <div class="wrapper">
            <div class="left locale"><a href=""></a></div>
            <menu>
                <li class=""><a href="index.html" class="home"><span></span></a></li>
                <li class="lvl_1"><a href="#" class="forum"><span></span></a>
                    <ol class="lvl_2">
                        <li><a href="{{route('user.create')}}">REGISTRO</a></li>
                        <li><a href="#">ALTERAR SENHA</a></li>
                        <li><a href="#">RECUPERAR CONTA</a></li>
                        <li><a href="donate.html">DONATE</a></li>

                    </ol>
                </li>
                <li class="lvl_1"><a href="infos.html" class="about"><span></span></a></li>
                <li class="lvl_1"><a href="download.html" class="files"><span></span></a>
                    <ol class="lvl_2">
                        <li><a href="download.html">Patcher PWX</a></li>
                        <li><a href="download.html">Client Completo</a></li>
                    </ol>
                </li>
                <li class=""><a href="staff.html" class="donate"><span></span></a></li>
                <li class=""><a href="/rank" class="vote"></a></li>
            </menu>
            <div class="lk right"><a href="{{route('login')}}">Painel do Jogador</a></div>
        </div>
    </div>
    <section class="head">
        <div class="wrapper">
            <div class="logo left">
                <a href=""><img src="_img/logo.png"></a>
            </div>
            <div class="right-box right">
                <!-- Таймер -->
                <div class="timer">
                    <div class="right">
                        <div></div>
                    </div>
                </div>
                <!-- Таймер -->
                <div class="bot right">
                    <a href="donate.html" class="bot1">Faça sua Doação</a>
                    <a href="download.html" class="bot1">Download</a>
                </div>
            </div>
        </div>
    </section>
</header>
<div class="wrapper">
    <div class="middle">
        <div class="page_wrap">
            <div class="container">
                <div class="cont">
                    <div class="cont_cent">
                        <main class="content">

                            <img src="_img/news-title.jpg" class="wr_title">
                            <section class="news clear_fix">
                                <!-- тут новости (каждый новый article = новоя новость) -->
                                <article class="post clear_fix">
                                    <div class="post_image">
                                        <img alt="" src="_img/news9.png">
                                    </div>
                                    <div class="post_wrapp">
                                        <div class="post_wrapp_v2">
                                            <h3><a href="#"> Inauguração do Servidor </a></h3>
                                            <div class="post_text">
                                                #BREVE<br>

                                            </div>
                                        </div>
                                        <div class="post_info clear_fix">
                                            <div class="bot3 right">
                                                <a href="registro.html">Jogue Agora!</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- тут новости -->
                            </section>
                        </main><!-- .content -->
                    </div>
                </div>
            </div><!-- .container-->
            <aside class="right-sidebar">

                <div class="sta_box_top">
                    <div class="ss_title"><img src="_img/sta_title.png"></div>
                    <div class="sta_cont_top sta_cont_bf">
                        <div class="server-one clear_fix">
                            <div class="server_1 clear_fix">
                                <div class="server_1_icon left">
                                    <img src="_img/server11.png">
                                </div>

                                <div class="left">
                                    <div class="clear_fix">
                                        <div class="server_wrapp left">
                                            <h4><a href="#">[Rate Alta]SeuPW</a></h4>
                                        </div>
                                    </div>
                                    <div class="server_info">
                                        <br><b>Script</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sb_top">
                    <div class="sta_cont_top sta_padd">
                        <!-- табы -->
                        <div id="wrapper" class="tab2">
                            <ul class="tabs_title">
                                <li class="top_pk"><a href="#" class="tab1"></a></li>
                                <li class="top_pvp"><a href="#" class="tab2"></a></li>
                            </ul>
                            <div class="tab1">
                                <div class="top_pvp">
                                    <table>
                                        <tbody><tr>
                                            <td class="onetd">#</td>
                                            <td class="onetd">Jogador</td>
                                            <td class="onetd">Classe</td>
                                            <td class="onetd">Pontos</td>
                                        </tr>

                                        <tr>
                                            <td class="nomer"><div>#1</div></td>
                                            <td class="userp"><a href="">TESTE</a></td>
                                            <td><span>Arqueiro</span></td>
                                            <td class="kill">10</td>
                                        </tr>
                                        <tr>
                                            <td class="nomer"><div>#2</div></td>
                                            <td class="userp"><a href="">TESTE</a></td>
                                            <td><span>Barbaro</span></td>
                                            <td class="kill">9</td>
                                        </tr>
                                        <tr>
                                            <td class="nomer"><div>#3</div></td>
                                            <td class="userp"><a href="">TESTE</a></td>
                                            <td><span>Guerreiro</span></td>
                                            <td class="kill">5</td>
                                        </tr></tbody></table>
                                </div>
                            </div>
                            <div class="tab2">
                                <div class="top_pvp">
                                    <table>
                                        <tbody><tr>
                                            <td class="onetd">#</td>
                                            <td class="onetd">Jogador</td>
                                            <td class="onetd">Classe</td>
                                            <td class="onetd">Pontos</td>
                                        </tr>

                                        <tr>
                                            <td class="nomer"><div>#1</div></td>
                                            <td class="userp"><a href="">TESTE</a></td>
                                            <td><span>Arqueiro</span></td>
                                            <td class="kill">10</td>
                                        </tr></tbody></table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sta_foot mar0"></div>
                </div>
                <div class="sb_top">
                    <div class="ss_titlefor"><img src="_img/for_title.png"></div>
                    <div class="sta_cont_top">
                        <div class="forum_home">
                            <table>
                                <tbody>
                                <tr>
                                    <td class="fh_avatar"><img class="Ava-Circle" src="_img/2.jpg"></td>
                                    <td>
                                        <div class="f_title">
                                            <a href="#">GUILD1</a>
                                        </div>
                                        <div class="f_info">
                                            Clã <a href="#">Guild1 </a>Eventos Ganhos
                                        </div>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="sta_foot mar0"></div>
                    <div class="bot2">
                        <a href="#">Veja Mais!</a>
                    </div>
                </div>
            </aside><!-- .right-sidebar -->
        </div>
    </div><!-- .middle-->
</div><!-- .wrapper -->
<footer class="footer">
    <div class="page_footer">
        <div class="to_up">
            <a href="" id="top"></a>
        </div>
        <ul class="foot_nav">
            <li><a href="#">HOME</a></li>
            <li><a href="{{route('user.create')}}">REGISTRO</a></li>
            <li><a href="#">DONATE</a></li>
            <li><a href="#">DOWNLOAD</a></li>
            <li><a href="#">INFORMAÇÕES</a></li>
            <li><a href="{{route('login')}}">PAINEL DO JOGADOR</a></li>
        </ul>
        <div class="adban">

        </div>
        <div class="copy">
            Copyright © 2018 <a href="#">Perfect World X </a><br> Todos direitos reservados.<br>
        </div>
    </div>
</footer><!-- .footer -->

</body></html>