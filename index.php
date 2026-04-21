<?php $pageTitle = 'Главная'; ?>
<?php include 'header.php'; ?>

    <!-- Hero секция -->
    <section class="page-hero hero-home">
        <h1>Добро пожаловать в мир красоты</h1>
        <p>Профессиональный уход за волосами, лицом и телом в уютной атмосфере</p>
        <a href="contacts.php" class="btn">Записаться онлайн</a>
        <a href="masters.php" class="btn btn-outline">Наши мастера</a>
    </section>

    <!-- Услуги (краткий обзор) -->
    <section class="services">
        <div class="section-title">
            <h2>Наши услуги</h2>
            <p>Мы предлагаем полный спектр услуг для вашей красоты и здоровья</p>
        </div>
        
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">💇‍♀️</div>
                <h3>Стрижка</h3>
                <p>Женские, мужские и детские стрижки любой сложности</p>
                <div class="price">от 1500 ₽</div>
                <a href="services.php" class="card-btn">Подробнее</a>
            </div>
            
            <div class="service-card">
                <div class="service-icon">🎨</div>
                <h3>Окрашивание</h3>
                <p>Классическое, сложное окрашивание, мелирование</p>
                <div class="price">от 3000 ₽</div>
                <a href="services.php" class="card-btn">Подробнее</a>
            </div>
            
            <div class="service-card">
                <div class="service-icon">💅</div>
                <h3>Маникюр</h3>
                <p>Покрытие гель-лаком, дизайн, укрепление ногтей</p>
                <div class="price">от 2000 ₽</div>
                <a href="services.php" class="card-btn">Подробнее</a>
            </div>
            
            <div class="service-card">
                <div class="service-icon">💄</div>
                <h3>Макияж</h3>
                <p>Дневной, вечерний, свадебный макияж</p>
                <div class="price">от 2500 ₽</div>
                <a href="services.php" class="card-btn">Подробнее</a>
            </div>
            
            <div class="service-card">
                <div class="service-icon">👁️</div>
                <h3>Брови</h3>
                <p>Коррекция, окрашивание, ламинирование бровей</p>
                <div class="price">от 1200 ₽</div>
                <a href="services.php" class="card-btn">Подробнее</a>
            </div>
            
            <div class="service-card">
                <div class="service-icon">✨</div>
                <h3>Уход за лицом</h3>
                <p>Чистка, пилинги, массаж лица</p>
                <div class="price">от 2000 ₽</div>
                <a href="services.php" class="card-btn">Подробнее</a>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <a href="services.php" class="btn">Все услуги и цены</a>
        </div>
    </section>

    <!-- О нас (кратко) -->
    <section class="features">
        <div class="section-title">
            <h2>Почему выбирают нас</h2>
            <p>4 причины доверить свою красоту нашим мастерам</p>
        </div>
        
        <div class="features-grid">
            <div class="feature">
                <div class="feature-number">1</div>
                <h4>Профессионализм</h4>
                <p>Мастера с опытом работы от 5 лет и регулярным повышением квалификации</p>
            </div>
            
            <div class="feature">
                <div class="feature-number">2</div>
                <h4>Качественные материалы</h4>
                <p>Используем только профессиональную косметику премиум-брендов</p>
            </div>
            
            <div class="feature">
                <div class="feature-number">3</div>
                <h4>Уютная атмосфера</h4>
                <p>Вкусный чай, приятная музыка и забота о каждом клиенте</p>
            </div>
            
            <div class="feature">
                <div class="feature-number">4</div>
                <h4>Доступные цены</h4>
                <p>Гибкая система скидок и специальные предложения для постоянных клиентов</p>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <a href="about.php" class="btn btn-outline">Подробнее о нас</a>
        </div>
    </section>

    <!-- Форма записи -->
    <section class="appointment">
        <div class="appointment-container">
            <div class="appointment-info">
                <h3>Запишитесь онлайн</h3>
                <p>Оставьте заявку и наш администратор свяжется с вами в ближайшее время для подтверждения записи</p>
                
                <div class="info-item">
                    <div class="info-icon">📞</div>
                    <div>+7 (999) 123-45-67</div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">📍</div>
                    <div>ул. Пушкина, д. 10</div>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">⏰</div>
                    <div>Ежедневно с 10:00 до 21:00</div>
                </div>
                
                <a href="contacts.php" class="btn" style="margin-top: 20px;">Контакты и схема проезда</a>
            </div>
            
            <div class="appointment-form" id = "appointment">
                <form action="send_request.php" method="POST">
                    <div class="form-group">
                        <label for="name">Ваше имя *</label>
                        <input type="text" id="name" name="name" placeholder="Введите имя" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Телефон *</label>
                        <input type="tel" id="phone" name="phone" placeholder="+7 (___) ___-__-__" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="service">Услуга</label>
                        <select id="service" name="service">
                            <option value="">Выберите услугу</option>
                            <option value="Стрижка">Стрижка</option>
                            <option value="Окрашивание">Окрашивание</option>
                            <option value="Маникюр">Маникюр</option>
                            <option value="Педикюр">Педикюр</option>
                            <option value="Макияж">Макияж</option>
                            <option value="Брови">Брови</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="date">Желаемая дата</label>
                        <input type="date" id="date" name="date">
                    </div>
                    
                    <div class="form-group">
                        <label for="comment">Комментарий</label>
                        <textarea id="comment" name="comment" rows="3" placeholder="Ваши пожелания..."></textarea>
                    </div>
                    
                    <button type="submit" class="submit-btn">Записаться</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Наши мастера (кратко) -->
    <section class="services" style="margin-top: 0;">
        <div class="section-title">
            <h2>Наши мастера</h2>
            <p>Профессионалы с опытом работы от 5 лет</p>
        </div>
        
        <div class="services-grid" style="grid-template-columns: repeat(3, 1fr);">
            <div class="service-card">
                <div class="service-icon">👩‍🦰</div>
                <h3>Анна Соколова</h3>
                <p>Топ-стилист, колорист</p>
                <p style="font-size: 14px;">Опыт: 12 лет</p>
                <a href="masters.php" class="card-btn">Подробнее</a>
            </div>
            
            <div class="service-card">
                <div class="service-icon">👩‍🎨</div>
                <h3>Екатерина Морозова</h3>
                <p>Мастер ногтевого сервиса</p>
                <p style="font-size: 14px;">Опыт: 8 лет</p>
                <a href="masters.php" class="card-btn">Подробнее</a>
            </div>
            
            <div class="service-card">
                <div class="service-icon">💆‍♀️</div>
                <h3>Дарья Волкова</h3>
                <p>Косметолог-эстетист</p>
                <p style="font-size: 14px;">Опыт: 10 лет</p>
                <a href="masters.php" class="card-btn">Подробнее</a>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <a href="masters.php" class="btn">Все мастера</a>
        </div>
    </section>

<?php include 'footer.php'; ?>