<!-- Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row justify-content-end">
                    <div class="col-2 justify-content-end">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><img
                                    src="<?=get_theme_file_uri()?>/assets/img/close.png" alt=""></button>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-10"><h3 class="modal-title" id="exampleModalLabel">Укажите, пожалуйста, Ваши
                            контактные данные, и мы предоставим Вам бесплатную консультацию</h3></div>
                </div>
                <div id="hidden-row" class="row">
                    <div class="modal-body">
                        <div class="container1">
                            <div class="card">
                                <form id="callback-form">
                                    <div class="input-container"><input type="text" id="Username" name="Username"
                                                                        required><label for="Username">Имя</label>
                                        <div class="bar"></div>
                                    </div>
                                    <div class="input-container number"><input class="form-control bfh-phone"
                                                                               type="text" id="phone" value=""
                                                                               name="phone"
                                                                               data-format="+380 (dd) ddd-dd-dd"
                                                                               required><label
                                                for="phone">Телефон</label>
                                        <div class="bar"></div>
                                    </div>
                                    <div class="errorMessage" style="display:none">Укажите Ваш телефон. (см.
                                        подсказку)
                                    </div>
                                    <div class="input-container"><select class="form-control" id="select" name="select"
                                                                         required>
                                            <option value="" disabled="disabled" selected="selected">Вам требуется</option>
                                            <option value="Разработка интернет-магазина">Разработка интернет-магазина
                                            </option>
                                            <option value="Интеграция с учётными системами">Интеграция с учётными
                                                системами
                                            </option>
                                            <option value="Продвижение интернет-магазина">Продвижение интернет-магазина
                                            </option>
                                        </select>
                                        <div class="bar"></div>
                                    </div>
                                    <div class="button-container">
                                        <div class="wrap-btn">
                                            <div class="button">
                                                <button type="submit" class="btn" data-wipe="Отправить заявку">Отправить
                                                    заявку
                                                </button>
                                                <!--<a href="" id="submit-btn" class="btn-pink" data-wipe="Отправить заявку">Отправить заявку</a>-->
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-thank" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body"><p>Спасибо!!! Наш специалист свяжется с вами в ближайшее время.</p></div>
            <div class="modal-footer">
                <div class="wrap-btn">
                    <div class="button"><a href="#" data-dismiss="modal" class="btn-pink" data-wipe="ОК">ОК</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row items justify-content-center align-items-center no-gutters">
            <div class="col-12 col-md-4 col-xl-3 item">
                <div class="phone-footer hidden-sm-down"><p>096-845-81-83</p>
                    <p>050-070-82-57</p>
                    <p>061-221-02-88</p>
                    <p>г.Запорожье</p></div>
            </div>
            <div class="col-12 col-md-4 col-xl-6 item">
                <div class="logo-footer"><a href=""><img src="<?=get_theme_file_uri()?>/assets/img/logoWedo.png" alt="WeDo"></a>
                    <p>© Copyright 2018, Все права защищены</p></div>
            </div>
            <div class="col-12 col-md-4 col-xl-3 item">
                <div class="menu-footer">
                    <ul>
                        <li><a href="#development">Разработка интернет-магазинов</a></li>
                        <li><a href="#integration">Интеграция с учётными системами</a></li>
                        <li><a href="#advancement">Продвижение интернет-магазинов</a></li>
                        <li><a href="">Вакансии</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>function changePath(o) {
        ~["en"].indexOf(path[1]) ? window.location.href = "/en" == o ? oldUrl : "/" : window.location.href = "/" == o ? oldUrl : o + oldUrl
    }

    var oldUrl = window.location.pathname, path = oldUrl.split("/")</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<script src="<?=get_theme_file_uri()?>/assets/js/owl.carousel.min.js"></script>
<script src="<?=get_theme_file_uri()?>/assets/js/main.js"></script><!--<script src="js/bootstrap-formhelpers.min.js"></script>--></body>
</html>