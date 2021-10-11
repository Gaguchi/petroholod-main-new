<?php include("head.php");?>

        <style>
        div>p:last-child {
            padding-left: 9%;
        }

        .icons{
            max-width: 6%;
        }

        h3 {
            margin-bottom: 0px;
        }

        .title.text-left.text-left-sm {
            margin-bottom: 25px;
        }
    </style>
        <div class="section-empty section-item">

            <div class="section-empty section-item">
                <div class="container content">

                    <div class="row">
                        <div class="title-base">
                            <h2 style="color: #173580;">Контакты</h2>
                        </div>
                    </div>

                    <div class="row" id="history-info">
                        <div class="col-md-6 text-left">
                            <div class="title text-left text-left-sm">
                                <h2 id="no-underline"><img src="./images/location.svg" class="icons"> Офис:</h2>
                                <p>195279, г. Санкт-Петербург, Индустриальный пр. 44 /2 БЦ «Охта Хаус»</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="title text-left text-left-sm">
                                <h2 id="no-underline"><img src="./images/location.svg" class="icons"> Склад:</h2>
                                <p>195027, г. Санкт-Петербург, ул Якорная д 17</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-map box-middle-container row-18">
                <iframe
                    src="https://yandex.ru/map-widget/v1/?um=constructor%3Abff1a7b8924c049d765b021696100975f15f1719d73c1e394e3239c2b0886ac8&amp;source=constructor"
                    width="100%" height="450" frameborder="0"></iframe>
            </div>
            <div class="section-empty section-item">
                <div class="container content" id="history-info">

                    <div class="row">
                        <div class="col-md-6" style="text-align: center;">
                            <div class="title" style="text-align: center;">
                                <h3><img src="./images/location-on-map.svg" class="icons" > ПРОЕЗД НА СКЛАД:</h3>
                                <p><img src="./images/warehouse.png" alt=""></p>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="title text-left text-left-sm">
                                <h3><img src="./images/call.svg" class="icons"> ОФИСНЫЙ ТЕЛЕФОН:</h3>
                                <p>+ 7 (812) 564-66-34</p>
                            </div>
                            <div class="title text-left text-left-sm">
                                <h3><img src="./images/email.svg" class="icons"> КОРПОРАТИВНЫЙ EMAIL:</h3>
                                <p><a href="mailto:comment@petroice.com">comment@petroice.com</a></p>
                            </div>
                            <h5 class="text-bold">время работы офиса</h5>
                                <ul class="list-texts list-texts-justified">
                                    <li><b>Понедельник - Пятница:</b> <span> 09.00 - 17.30</span></li>
                                    <li><b>Суббота:</b> <span>Выходной</span></li>
                                    <li><b>Воскресенье:</b> <span>Выходной</span></li>
                                </ul>
                        </div>
                    </div>
                </div>
                
            <div class="container content text-center" style="max-width: 800px;" id="history-info">
                <h5 class="text-bold" class="text-center">ОБРАТНАЯ СВЯЗЬ</h5>
                <hr class="space m" />
                <div class="row">
                    <div class="col-12">
                    <form action="/scripts/php/contact-form.php" class="form-box"
                            method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Имя</p>
                                    <input id="name" name="name" placeholder="Имя" type="text"
                                        class="form-control form-value" required>
                                </div>
                                <div class="col-md-6">
                                    <p>Email</p>
                                    <input id="email" name="email" placeholder="Email" type="email"
                                        class="form-control form-value" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <hr class="space xs" />
                                    <p>Телефон</p>
                                    <input id="phone" name="phone" placeholder="Телефон" type="text"
                                        class="form-control form-value" required>
                                    <hr class="space xs" />
                                    <p>Сообщение</p>
                                    <textarea id="messagge" name="messagge" class="form-control form-value"
                                        required></textarea>
                                    <hr class="space s" />
                                    <button class="btn-sm btn" type="submit">Отправить</button>
                                </div>
                            </div>
                        </form>
                        <script>
                            const constraints = {
                                name: {
                                    presence: {
                                        allowEmpty: false
                                    }
                                },
                                phone: {
                                    presence: {
                                        allowEmpty: false
                                    }
                                },
                                email: {
                                    presence: {
                                        allowEmpty: false
                                    },
                                    email: true
                                },
                                messagge: {
                                    presence: {
                                        allowEmpty: false
                                    }
                                }
                            };

                            const form = document.getElementById('contact-form');

                            form.addEventListener('submit', function (event) {
                                const formValues = {
                                    name: form.elements.name.value,
                                    email: form.elements.email.value,
                                    message: form.elements.message.value
                                };

                                const errors = validate(formValues, constraints);

                                if (errors) {
                                    event.preventDefault();
                                    const errorMessage = Object
                                        .values(errors)
                                        .map(function (fieldValues) {
                                            return fieldValues.join(', ')
                                        })
                                        .join("\n");

                                    alert(errorMessage);
                                }
                            }, false);
                        </script>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <?php include("footer.php");?>