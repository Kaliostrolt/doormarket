<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<!--==============================footer=================================-->
<!-- ---------------------------------------------------------------------- FOOTER ------------------------------------------------------------------------------------------------------------>
<div class="footer">
    <div class="footer-information">
        <div class="container">
            <div class="row">
                <div class="f-col f-col1 col-sm-55 col-sm-6 col-sms-6 col-smb-12">
                    <div class="footer-static-title">
                        <h3>Информация</h3>
                    </div>
                    <div class="footer-static-content">
                        <ul>
                            <li><a href="#">Доставка</a></li>
                            <li><a href="#">Оплата</a></li>
                            <li><a href="#">Система скидок</a></li>
                            <li><a href="#">Карта сайта</a></li>
                        </ul>
                    </div>
                </div>
                <div class="f-col f-col2 col-sm-55 col-sms-6 col-sm-6 col-smb-12">
                    <div class="footer-static-title">
                        <h3>Предложения</h3>
                    </div>
                    <div class="footer-static-content">
                        <ul>
                            <li class="first"><a href="#">Бесплатный замер</a></li>
                            <li><a href="#">Порекомендуй и получи скидку</a></li>
                        </ul>
                    </div>
                </div>
                <div class="f-col f-col3 col-sm-55 col-sms-6 col-sm-6 col-smb-12">
                    <div class="footer-static-title">
                        <h3>Услуги</h3>
                    </div>
                    <div class="footer-static-content">
                        <ul>
                            <li class="first"><a href="#">Замер</a></li>
                            <li><a href="#">Установка</a></li>
                            <li><a href="#">Доставка</a></li>
                        </ul>
                    </div>
                </div>
                <div class="f-col f-col4 col-sm-55 col-sms-6 col-sm-6  col-smb-12">
                    <div class="footer-static-title">
                        <h3>О нас</h3>
                    </div>
                    <div class="footer-static-content">
                        <ul>
                            <li class="first"><a href="#">О магазине</a></li>
                            <li><a href="#">Сертификаты</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                    </div>
                </div>
                <div class="f-col f-col5 col-sm-55 col-sms-12 col-sm-12 col-smb-12">
                    <div class="block block-subscribe">
                        <div class="footer-static-title">
                            <h3>Подписка</h3>
                        </div>
                        <p>Подпишись на нашу рассылку</p>
                        <form action="#" method="post" id="newsletter-validate-detail">
                            <div class="subscribe-content">
                                <div class="input-box">
                                    <input type="text" name="email" id="newsletter" title="Sign up for our newsletter" class="input-text required-entry validate-email" placeholder="Ваш eMail..." />
                                    <div class="actions">
                                        <button type="submit" title="Subscribe" class="button">Подписаться</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <script type="text/javascript">
                            //<![CDATA[
                            var newsletterSubscriberFormDetail = new VarienForm('newsletter-validate-detail');
                            //]]>
                        </script>
                        <div class="footer-static-title">
                            <h3>Мы в социальных сетях</h3>
                        </div>
                        <div class="connect">
                            <a class="social1" title="twitter" href="#">
                                            <span>
                                                <em class="fa fa-twitter">&nbsp;</em>
                                            </span>
                            </a>
                            <a class="social2" title="skype" href="#">
                                            <span>
                                                <em class="fa fa-skype">&nbsp;</em>
                                            </span>
                            </a>
                            <a class="social3" title="facebook" href="#">
                                            <span>
                                                <em class="fa fa-facebook">&nbsp;</em>
                                            </span>
                            </a>
                            <a class="social4" title="google" href="#">
                                            <span>
                                                <em class="fa fa-google-plus">&nbsp;</em>
                                            </span>
                            </a>
                            <a class="social5" title="vine" href="#">
                                            <span>
                                                <em class="fa fa-vine">&nbsp;</em>
                                            </span>
                            </a>
                        </div> <!-- connect -->
                    </div> <!-- subscribe -->
                </div> <!-- last col -->
            </div> <!-- footer information / container / row -->
        </div> <!-- footer information / container -->
    </div> <!-- footer information -->
    <div class="footer-container">
        <div class="container">
            <div class="footer1">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="links-bottom">
                            <a href="#"><em class="fa fa-cc-mastercard"></em></a>
                            <a href="#"><em class="fa fa-cc-visa"></em></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <address class="copyright">Copyright &copy; 2015 <a href="#">Devex.by</a>. Все права защищены.</address>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- footer-container -->
</div><!-- footer -->
<div class="block-social-right">
    <ul>
        <li><a id="facebook-btn" class="socialitems" href="#" target="_blank"> <span class="social-icon" style="overflow: hidden; width: 43px;"> <span class="social-text">Follow via Facebook</span> </span> </a></li>
        <li><a id="twitter-btn" class="socialitems" href="#" target="_blank"> <span class="social-icon" style="overflow: hidden; width: 43px;"> <span class="social-text">Follow via Twitter</span> </span> </a></li>
        <li><a id="googleplus-btn" class="socialitems" href="#" target="_blank"> <span class="social-icon" style="overflow: hidden; width: 43px;"> <span class="social-text">Follow via Google +</span> </span> </a></li>
        <li><a id="youtube-btn" class="socialitems" href="#" target="_blank"> <span class="social-icon" style="overflow: hidden; width: 43px;"> <span class="social-text">Follow via Youtube</span> </span> </a></li>
        <li><a id="pinterest-btn" class="socialitems" href="#" target="_blank"> <span class="social-icon"> <span class="social-text">Follow via Pinterest</span> </span> </a></li>
        <li><a id="mail-btn" class="socialitems" href="#" target="_blank"> <span class="social-icon"> <span class="social-text">Mail To</span> </span> </a></li>
    </ul>
</div> <!-- block-social-right -->
<div id="back-top" class="hidden-xs"><i class="fa fa-angle-up"></i></div>
</div> <!-- page -->
</div> <!-- wrapper -->
</body>
</html>
<?php wp_footer(); ?>