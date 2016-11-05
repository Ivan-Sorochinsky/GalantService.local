<div class="footer">
    <div class="container">
        <div class="footer-inner">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-content">
                        <div class="logo-footer"><img id="logo" src="../images/logo2Black.png" alt=""></div>
                        <p>Возникли вопросы? Хотите узнать больше? Свяжитесь со мной, и я помогу вам!</p>
                        <ul class="list-inline mb-20">
                            <li><i class="text-default fa fa-map-marker pr-5"></i> Sevastopol </li>
                            <li><i class="text-default fa fa-phone pl-10 pr-5"></i> +7 (978) 887 81 30</li>
                            <li><a href="mailto:Ivan.Sorochinsky@yandex.ru" class="link-dark"><i class="text-default fa fa-envelope-o pl-10 pr-5"></i> Ivan.Sorochinsky@yandex.ru</a></li>
                        </ul>
                        <div class="separator-2"></div>
                    </div>


                    <!-- VK Widget -->
                    <div id="vk_groups"></div>
                    <script type="text/javascript">
                        VK.Widgets.Group("vk_groups", {mode: 1, width: "500", color1: 'FAFAFA', color3: '000000'}, 127833690);
                    </script>

                </div>
                <div class="col-md-6">
                    <div class="footer-content">
                        <!-- Form Bottom -->
                        <h2 class="title">Свяжитесь с нами</h2>
                        <div class="alert alert-success hidden" id="MessageSent2">
                            Ваше сообщение получено! Мы свяжемся с вами в ближайшее время!										</div>
                        <div class="alert alert-danger hidden" id="MessageNotSent2">
                            Упс! Что-то пошло не так, пожалуйста, обновите страницу и повторите попытку!										</div>
                        <form role="form" id="footer-form" class="margin-clear" novalidate="novalidate">
                            <div class="form-group has-feedback mb-10">
                                <label class="sr-only" for="Name_bottom">Ваше имя</label>
                                <input type="text" class="form-control" id="Name_bottom" value="" placeholder="Ваше имя" name="Name_bottom">
                                <i class="fa fa-user form-control-feedback"></i>
                            </div>
                            <div class="form-group has-feedback mb-10">
                                <label class="sr-only" for="Email_bottom">Ваш e-mail</label>
                                <input type="email" class="form-control" id="Email_bottom" placeholder="Ваш e-mail" name="Email_bottom">
                                <i class="fa fa-envelope form-control-feedback"></i>
                            </div>
                            <div class="form-group has-feedback mb-10">
                                <label class="sr-only" for="About_bottom">Сообщение</label>
                                <textarea class="form-control" rows="4" id="About_bottom" placeholder="Сообщение" name="About_bottom"></textarea>
                                <i class="fa fa-pencil form-control-feedback"></i>
                            </div>
                            <input type="submit" value="Отправить" class="margin-clear submit-button btn btn-default" onclick="sendAjax('pages', 'bottom_form'); return false;">
                        </form>
                        <!-- Form Bottom End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="subfooter dark-bg">
    <div class="subfooter-inner">
        <div class="col-md-12">
            <p class="text-center">Copyright © 2016 The Project by <a class="_blank" href="http://galantservice.com">Galant Service</a>. All Rights Reserved</p>
        </div>
    </div>
</div>