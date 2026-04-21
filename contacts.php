<?php $pageTitle = 'Контакты'; ?>
<?php include 'header.php'; ?>

    <!-- Hero секция для страницы Контактов -->
    <section class="page-hero hero-contacts">
        <h1>Контакты</h1>
        <p>Всегда рады видеть вас в нашем салоне</p>
    </section>

    <div class="container">
        <div class="contact-grid">
            <div class="contact-info">
                <div class="contact-item">
                    <div class="contact-icon">📍</div>
                    <div class="contact-text">
                        <h3>Адрес</h3>
                        <p>г. Москва, ул. Пушкина, д. 10</p>
                        <p>м. Тверская, выход №3, 5 минут пешком</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">📞</div>
                    <div class="contact-text">
                        <h3>Телефон</h3>
                        <p><a href="tel:+79991234567">+7 (999) 123-45-67</a></p>
                        <p>Ежедневно с 10:00 до 21:00</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">✉️</div>
                    <div class="contact-text">
                        <h3>Email</h3>
                        <p><a href="mailto:info@beauty.ru">info@beauty.ru</a></p>
                        <p>Ответим в течение 2 часов</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">📱</div>
                    <div class="contact-text">
                        <h3>Социальные сети</h3>
                        <p>
                            <a href="#" style="display: inline; margin-right: 10px;">Instagram</a> | 
                            <a href="#" style="display: inline; margin: 0 10px;">VK</a> | 
                            <a href="#" style="display: inline; margin-left: 10px;">Telegram</a>
                        </p>
                    </div>
                </div>
                <!-- НОВАЯ СТРОЧКА -->
                <div class="contact-item">
                    <div class="contact-icon">📅</div>
                    <div class="contact-text">
                        <h3>Или запишитесь онлайн</h3>
                        <p><a href="index.php#appointment" style="color: #FFB6C1; font-weight: bold; text-decoration: underline;">Перейти к форме записи →</a></p>
                    </div>
                </div>
            </div>

            <div class="contact-map">
                <h3>Как нас найти</h3>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2245.0!2d37.609!3d55.757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTXCsDQ1JzI1LjAiTiAzN8KwMzYnMzIuNCJF!5e0!3m2!1sru!2sru!4v1234567890!5m2!1sru!2sru" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>

        <div class="working-hours">
            <h3>Режим работы</h3>
            <div class="hours-row">
                <span class="day">Понедельник - Пятница</span>
                <span class="time">10:00 - 21:00</span>
            </div>
            <div class="hours-row">
                <span class="day">Суббота</span>
                <span class="time">11:00 - 20:00</span>
            </div>
            <div class="hours-row">
                <span class="day">Воскресенье</span>
                <span class="time">11:00 - 20:00</span>
            </div>
            <p style="margin-top: 20px; color: #5d584a;">* Санитарный день: последний понедельник месяца</p>
        </div>
    </div>

<?php include 'footer.php'; ?>