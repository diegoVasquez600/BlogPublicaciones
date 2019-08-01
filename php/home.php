<?php

        <head>
            <meta http-equiv="Content-Type" content="text/html; Charset=gb2312">
            <meta http-equiv="Content-Language" content="zh-CN">
            <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
            <title>KNX Blog</title>
            <link rel="shortcut icon" href="../images/Logo_40.png" type="image/x-icon">
            <!--Layui-->
            <link href="../plug/layui/css/layui.css" rel="stylesheet">
            <!--font-awesome-->
            <link href="../plug/font-awesome/css/font-awesome.min.css" rel="stylesheet">

            <link href="../css/global.css" rel="stylesheet">

            <link href="../css/home.css" rel="stylesheet">
            <script src="http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=434563"></script>
            <link id="layuicss-skinlayercss" rel="stylesheet" href="file:///C:/xampp/htdocs/BlogPublicaciones/BlogTemplate/plug/layui/css/modules/layer/default/layer.css?v=3.0.2302" media="all">
            <link rel="stylesheet" href="http://bdimg.share.baidu.com/static/api/css/share_style0_32.css?v=5090ac8b.css">
        </head>

        <body>

            <nav class="blog-nav layui-header">
                <div class="blog-container">

                    <a href="javascript:;" class="blog-user">
                        <i class="fa fa-qq"></i>
                    </a>
                    <a href="javascript:;" class="blog-user layui-hide">
                        <img src="../images/Absolutely.jpg" alt="Absolutely" title="Absolutely">
                    </a>

                    <a class="blog-logo" href="home.html">KNX Blog</a>

                    <ul class="layui-nav" lay-filter="nav">
                        <li class="layui-nav-item layui-this">
                            <a href="home.html"><i class="fa fa-home fa-fw"></i>&nbsp;Inicio</a>
                        </li>
                        <li class="layui-nav-item">
                            <a href="article.html"><i class="fa fa-file-text fa-fw"></i>&nbsp;Articulos</a>
                        </li>
                        <li class="layui-nav-item">
                            <a href="resource.html"><i class="fa fa-tags fa-fw"></i>&nbsp;Intercambio de recursos</a>
                        </li>
                        <li class="layui-nav-item">
                            <a href="timeline.html"><i class="fa fa-hourglass-half fa-fw"></i>&nbsp;Timeline</a>
                        </li>
                        <li class="layui-nav-item">
                            <a href="about.html"><i class="fa fa-info fa-fw"></i>&nbsp;Sobre Nosotros</a>
                        </li>
                        <span class="layui-nav-bar"></span>
                    </ul>

                    <a class="blog-navicon" href="javascript:;">
                        <i class="fa fa-navicon"></i>
                    </a>
                </div>
            </nav>

            <div class="blog-body">
                <!-- canvas -->
                <canvas id="canvas-banner" style="background: #393D49;" width="1602" height="310"></canvas>

                <script type="text/javascript">
                    var canvas = document.getElementById('canvas-banner');
                    canvas.width = window.document.body.clientWidth - 10;
                    if (screen.width >= 992) {
                        canvas.height = window.innerHeight * 1 / 3;
                    } else {
                        canvas.height = window.innerHeight * 2 / 7;
                    }
                </script>

                <div class="blog-container">
                    <div class="blog-main">


                        
                        <div class="blog-main-left">
                            <div class="article shadow">
                                <div class="article-left">
                                    <img src="../images/cover/201703181909057125.jpg" alt="">
                                </div>
                                <div class="article-right">
                                    <div class="article-title">
                                        <a href="detail.html">¡Módulo de extensión Layui basado en laypage (pagesize.js)!</a>
                                    </div>
                                    <div class="article-abstract">
                                        Este módulo está hecho principalmente para la versión actual de laypage sin la función de control de capacidad de la página. ¡Después de usar este módulo, puede realizar el control de cuántos datos se muestran por página! Soy original, ¡pero puede ser útil solo para mi paginación!
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="article-footer">
                                    <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;2017-03-18</span>
                                    <span class="article-author"><i class="fa fa-user"></i>&nbsp;&nbsp;Absolutely</span>
                                    <span><i class="fa fa-tag"></i>&nbsp;&nbsp;<a href="#">Interfaz web</a></span>
                                    <span class="article-viewinfo"><i class="fa fa-eye"></i>&nbsp;0</span>
                                    <span class="article-viewinfo"><i class="fa fa-commenting"></i>&nbsp;4</span>
                                </div>
                            </div>
                            <div class="article shadow">
                                <div class="article-left">
                                    <img src="../images/cover/201703181909057125.jpg" alt="基于laypage的layui扩展模块（pagesize.js）！">
                                </div>
                                <div class="article-right">
                                    <div class="article-title">
                                        <a href="detail.html">¡Módulo de extensión Layui basado en laypage (pagesize.js)!</a>
                                    </div>
                                    <div class="article-abstract">
                                        Este módulo está hecho principalmente para la versión actual de laypage sin la función de control de capacidad de la página. ¡Después de usar este módulo, puede realizar el control de cuántos datos se muestran por página! Soy original, ¡pero puede ser útil solo para mi paginación!
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="article-footer">
                                    <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;2017-03-18</span>
                                    <span class="article-author"><i class="fa fa-user"></i>&nbsp;&nbsp;Absolutely</span>
                                    <span><i class="fa fa-tag"></i>&nbsp;&nbsp;<a href="#">Interfaz web</a></span>
                                    <span class="article-viewinfo"><i class="fa fa-eye"></i>&nbsp;0</span>
                                    <span class="article-viewinfo"><i class="fa fa-commenting"></i>&nbsp;4</span>
                                </div>
                            </div>
                            <div class="article shadow">
                                <div class="article-left">
                                    <img src="../images/cover/201703181909057125.jpg" alt="基于laypage的layui扩展模块（pagesize.js）！">
                                </div>
                                <div class="article-right">
                                    <div class="article-title">
                                        <a href="detail.html">¡Módulo de extensión Layui basado en laypage (pagesize.js)!</a>
                                    </div>
                                    <div class="article-abstract">
                                        Este módulo está hecho principalmente para la versión actual de laypage sin la función de control de capacidad de la página. ¡Después de usar este módulo, puede realizar el control de cuántos datos se muestran por página! Soy original, ¡pero puede ser útil solo para mi paginación!
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="article-footer">
                                    <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;2017-03-18</span>
                                    <span class="article-author"><i class="fa fa-user"></i>&nbsp;&nbsp;Absolutely</span>
                                    <span><i class="fa fa-tag"></i>&nbsp;&nbsp;<a href="#">Interfaz web</a></span>
                                    <span class="article-viewinfo"><i class="fa fa-eye"></i>&nbsp;0</span>
                                    <span class="article-viewinfo"><i class="fa fa-commenting"></i>&nbsp;4</span>
                                </div>
                            </div>
                            <div class="article shadow">
                                <div class="article-left">
                                    <img src="../images/cover/201703181909057125.jpg" alt="基于laypage的layui扩展模块（pagesize.js）！">
                                </div>
                                <div class="article-right">
                                    <div class="article-title">
                                        <a href="detail.html">¡Módulo de extensión Layui basado en laypage (pagesize.js)!</a>
                                    </div>
                                    <div class="article-abstract">
                                    Este módulo está hecho principalmente para la versión actual de laypage sin la función de control de capacidad de la página. ¡Después de usar este módulo, puede realizar el control de cuántos datos se muestran por página! Soy original, ¡pero puede ser útil solo para mi paginación!
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="article-footer">
                                    <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;2017-03-18</span>
                                    <span class="article-author"><i class="fa fa-user"></i>&nbsp;&nbsp;Absolutely</span>
                                    <span><i class="fa fa-tag"></i>&nbsp;&nbsp;<a href="#">Interfaz web</a></span>
                                    <span class="article-viewinfo"><i class="fa fa-eye"></i>&nbsp;0</span>
                                    <span class="article-viewinfo"><i class="fa fa-commenting"></i>&nbsp;4</span>
                                </div>
                            </div>
                            <div class="article shadow">
                                <div class="article-left">
                                    <img src="../images/cover/201703181909057125.jpg" alt="基于laypage的layui扩展模块（pagesize.js）！">
                                </div>
                                <div class="article-right">
                                    <div class="article-title">
                                        <a href="detail.html">¡Módulo de extensión Layui basado en laypage (pagesize.js)!</a>
                                    </div>
                                    <div class="article-abstract">
                                    Este módulo está hecho principalmente para la versión actual de laypage sin la función de control de capacidad de la página. ¡Después de usar este módulo, puede realizar el control de cuántos datos se muestran por página! Soy original, ¡pero puede ser útil solo para mi paginación!
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="article-footer">
                                    <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;2017-03-18</span>
                                    <span class="article-author"><i class="fa fa-user"></i>&nbsp;&nbsp;Absolutely</span>
                                    <span><i class="fa fa-tag"></i>&nbsp;&nbsp;<a href="#">Interfaz web</a></span>
                                    <span class="article-viewinfo"><i class="fa fa-eye"></i>&nbsp;0</span>
                                    <span class="article-viewinfo"><i class="fa fa-commenting"></i>&nbsp;4</span>
                                </div>
                            </div>
                            <div class="article shadow">
                                <div class="article-left">
                                    <img src="../images/cover/201703181909057125.jpg" alt="基于laypage的layui扩展模块（pagesize.js）！">
                                </div>
                                <div class="article-right">
                                    <div class="article-title">
                                        <a href="detail.html">
                                        Jīyú laypage de layui kuòzhǎn mókuài (pagesize.Js)!
                                        34/5000
                                        ¡Módulo de extensión Layui basado en laypage (pagesize.js)! </a>
                                    </div>
                                    <div class="article-abstract">
                                        Este módulo está hecho principalmente para la versión actual de laypage sin la función de control de capacidad de la página. ¡Después de usar este módulo, puede realizar el control de cuántos datos se muestran por página! Soy original, ¡pero puede ser útil solo para mi paginación!
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="article-footer">
                                    <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;2017-03-18</span>
                                    <span class="article-author"><i class="fa fa-user"></i>&nbsp;&nbsp;Absolutely</span>
                                    <span><i class="fa fa-tag"></i>&nbsp;&nbsp;<a href="#">Interfaz web</a></span>
                                    <span class="article-viewinfo"><i class="fa fa-eye"></i>&nbsp;0</span>
                                    <span class="article-viewinfo"><i class="fa fa-commenting"></i>&nbsp;4</span>
                                </div>
                            </div>
                            <div class="article shadow">
                                <div class="article-left">
                                    <img src="../images/cover/201703181909057125.jpg" alt="基于laypage的layui扩展模块（pagesize.js）！">
                                </div>
                                <div class="article-right">
                                    <div class="article-title">
                                        <a href="detail.html">¡Módulo de extensión Layui basado en laypage (pagesize.js)!</a>
                                    </div>
                                    <div class="article-abstract">
                                        Este módulo está hecho principalmente para la versión actual de laypage sin la función de control de capacidad de la página. ¡Después de usar este módulo, puede realizar el control de cuántos datos se muestran por página! Soy original, ¡pero puede ser útil solo para mi paginación!
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="article-footer">
                                    <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;2017-03-18</span>
                                    <span class="article-author"><i class="fa fa-user"></i>&nbsp;&nbsp;Absolutely</span>
                                    <span><i class="fa fa-tag"></i>&nbsp;&nbsp;<a href="#">Interfaz web</a></span>
                                    <span class="article-viewinfo"><i class="fa fa-eye"></i>&nbsp;0</span>
                                    <span class="article-viewinfo"><i class="fa fa-commenting"></i>&nbsp;4</span>
                                </div>
                            </div>
                            <div class="article shadow">
                                <div class="article-left">
                                    <img src="../images/cover/201703181909057125.jpg" alt="基于laypage的layui扩展模块（pagesize.js）！">
                                </div>
                                <div class="article-right">
                                    <div class="article-title">
                                        <a href="detail.html">¡Módulo de extensión Layui basado en laypage (pagesize.js)!</a>
                                    </div>
                                    <div class="article-abstract">
                                        Este módulo está hecho principalmente para la versión actual de laypage sin la función de control de capacidad de la página. ¡Después de usar este módulo, puede realizar el control de cuántos datos se muestran por página! Soy original, ¡pero puede ser útil solo para mi paginación!
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="article-footer">
                                    <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;2017-03-18</span>
                                    <span class="article-author"><i class="fa fa-user"></i>&nbsp;&nbsp;Absolutely</span>
                                    <span><i class="fa fa-tag"></i>&nbsp;&nbsp;<a href="#">Interfaz web</a></span>
                                    <span class="article-viewinfo"><i class="fa fa-eye"></i>&nbsp;0</span>
                                    <span class="article-viewinfo"><i class="fa fa-commenting"></i>&nbsp;4</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="blog-main-right">
                            <div class="blogerinfo shadow">
                                <div class="blogerinfo-figure">
                                    <img src="../images/Absolutely.jpg" alt="Absolutely">
                                </div>
                                <p class="blogerinfo-nickname">Absolutely</p>
                                <p class="blogerinfo-introduce">Un programador post-90, ingeniero de desarrollo .NET</p>
                                <p class="blogerinfo-location"><i class="fa fa-location-arrow"></i>&nbsp;Sichuan - Chengdu</p>
                                <hr>
                                <div class="blogerinfo-contact">
                                    <a target="_blank" title="QQ交流" href="javascript:layer.msg('启动QQ会话窗口')"><i class="fa fa-qq fa-2x"></i></a>
                                    <a target="_blank" title="给我写信" href="javascript:layer.msg('启动邮我窗口')"><i class="fa fa-envelope fa-2x"></i></a>
                                    <a target="_blank" title="新浪微博" href="javascript:layer.msg('转到你的微博主页')"><i class="fa fa-weibo fa-2x"></i></a>
                                    <a target="_blank" title="码云" href="javascript:layer.msg('转到你的github主页')"><i class="fa fa-git fa-2x"></i></a>
                                </div>
                            </div>
                            <div></div>
                            
                            <div class="blog-module shadow">
                                <div class="blog-module-title">Clasificación de texto caliente</div>
                                <ul class="fa-ul blog-module-ul">
                                    <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">Falsificación de solicitudes de seguridad en sitios web CSRF</a>
                                    </li>
                                    <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">ASP.NET MVC contra la falsificación de solicitudes entre sitios (CSRF)</a>
                                    </li>
                                    <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">Expresión regular común</a>
                                    </li>
                                    <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">Instrucciones comunes de la migración de datos de EF CodeFirst</a>
                                    </li>
                                    <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">Hablando sobre el tipo primitivo de .NET Framework</a>
                                    </li>
                                    <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">Revisión de conocimientos básicos de C #: método de extensión</a>
                                    </li>
                                    <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">Eje de tiempo de producción paso a paso (1) (artículos HTML)</a>
                                    </li>
                                    <li><i class="fa-li fa fa-hand-o-right"></i><a href="detail.html">Eje de tiempo de producción paso a paso (2) (artículos CSS)</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="blog-module shadow">
                                <div class="blog-module-title">Compartido recientemente</div>
                                <ul class="fa-ul blog-module-ul">
                                    <li><i class="fa-li fa fa-hand-o-right"></i><a href="http://pan.baidu.com/s/1c1BJ6Qc" target="_blank">Canvas</a>
                                    </li>
                                    <li><i class="fa-li fa fa-hand-o-right"></i><a href="http://pan.baidu.com/s/1kVK8UhT" target="_blank">pagesize.js</a>
                                    </li>
                                    <li><i class="fa-li fa fa-hand-o-right"></i><a href="https://pan.baidu.com/s/1mit2aiW" target="_blank">Eje de tiempo</a>
                                    </li>
                                    <li><i class="fa-li fa fa-hand-o-right"></i><a href="https://pan.baidu.com/s/1nuAKF81" target="_blank">Rueda de imagen</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="blog-module shadow">
                                <div class="blog-module-title">一El camino se acerca</div>
                                <dl class="footprint">
                                    <dt>2017-03-12</dt>
                                    <dd>¡Se agregó la función de respuesta de mensaje! ¡Todos pueden participar en la respuesta!</dd>
                                    <dt>2017-03-10 </dt>
                                    <dd>¡La función básica del gabinete 2.0 que no cae se completa y se lanza oficialmente!</dd>
                                    <dt>2017-03-09</dt>
                                    <dd>¡Se agregó la función de búsqueda de artículos!</dd>
                                    <dt>2017-02-25</dt>
                                    <dd>¡Sitio web de acceso a Internet QQ, inicio de sesión QQ para dejar comentarios y comentarios!</dd>
                                </dl>
                            </div>
                            <div class="blog-module shadow">
                                <div class="blog-module-title">Registro de antecedentes</div>
                                <dl class="footprint">
                                    <dt>2017-03-16</dt>
                                    <dd>Paginación nueva página de control de capacidad</dd>
                                    <dt>2017-03-12</dt>
                                    <dd>Agregar recordatorio de ama de llaves</dd>
                                    <dt>2017-03-10</dt>
                                    <dd>Se agregó el menú contextual de Win10</dd>
                                </dl>
                            </div>
                            <div class="blog-module shadow">
                                <div class="blog-module-title">Enlace amistoso</div>
                                <ul class="blogroll">
                                    <li><a target="_blank" href="http://www.layui.com/" title="Layui">Lay UI</a>
                                    </li>
                                    <li><a target="_blank" href="http://www.pagemark.cn/" title="页签">Pestaña</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        
            <footer class="blog-footer">
                <p><span>Copyright</span><span>©</span><span>2019</span><a href="www.knoxcorporation.com">Knox Corporation</a><span>Design By Diego Vasquez</span>
                </p>
                <p><a href="http://www.miibeian.gov.cn/" target="_blank">   ICP 16029915 -1</a>
                </p>
            </footer>
            
            <ul class="layui-nav layui-nav-tree layui-nav-side blog-nav-left layui-hide" lay-filter="nav">
                <li class="layui-nav-item layui-this">
                    <a href="home.html"><i class="fa fa-home fa-fw"></i>&nbsp;Inicio</a>
                </li>
                <li class="layui-nav-item">
                    <a href="article.html"><i class="fa fa-file-text fa-fw"></i>&nbsp;Columna del artículo</a>
                </li>
                <li class="layui-nav-item">
                    <a href="resource.html"><i class="fa fa-tags fa-fw"></i>&nbsp;Intercambio de recursos</a>
                </li>
                <li class="layui-nav-item">
                    <a href="timeline.html"><i class="fa fa-road fa-fw"></i>&nbsp;Timelines</a>
                </li>
                <li class="layui-nav-item">
                    <a href="about.html"><i class="fa fa-info fa-fw"></i>&nbsp;Sobre este sitio</a>
                </li>
                <span class="layui-nav-bar"></span>
            </ul>
            
            <div class="blog-share layui-hide">
                <div class="blog-share-body">
                    <div style="width: 200px;height:100%;">
                        <div class="bdsharebuttonbox bdshare-button-style0-32" data-bd-bind="1564433946773">
                            <a class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                            <a class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                            <a class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                            <a class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="blog-mask animated layui-hide"></div>
            <!-- layui.js -->
            <script src="../plug/layui/layui.js"></script>
            
            <script src="../js/global.js"></script>
            
            <script src="../js/home.js"></script>

            <ul class="layui-fixbar">
                <li class="layui-icon" lay-type="bar1" style=""></li>
                <li class="layui-icon layui-fixbar-top" lay-type="top" style="display: none;"></li>
            </ul>
        </body>

<?php