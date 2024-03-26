DELETE FROM contacts;
ALTER TABLE contacts AUTO_INCREMENT = 1;

INSERT INTO contacts (name, data)
VALUES 
    ('phone', '+7 (978) 123-45-67'),
    ('vk', 'https://vk.com/название_группы'),
    ('whatApp', 'https://wa.me/номер_телефона'),
    ('telegram', 'https://telegram.me/имя_пользователя');

DELETE FROM additional_services;
ALTER TABLE additional_services AUTO_INCREMENT = 1;
INSERT INTO additional_services VALUES (1,'Штроба по бетону','500 руб./м',0),(2,'Штроба в ракушке, газобетон','350 руб./м',0),(3,'Пробивка дополнительного отверстия в стене (2-го и более)','500 руб.',0),(4,'Демонтаж/монтаж стеклопакета','500 руб.',0),(5,'Демонтаж внутреннего/наружного блока','1500 руб./шт',0),(6,'Монтаж внутреннего/наружного блока','2000 руб.',0),(7,'Демонтаж кондиционера (07, 09, 12)','3000 руб.',0),(8,'Демонтаж кондиционера (18, 24)','от 3500 руб.',0),(9,'Дополнительный метр трассы (1/4, 3/8)','1500 руб.',0),(10,'Заправка (дозаправка) фрионом (R22, R410, R32) за 100 грамм','650 руб.',0),(11,'Монтаж декоративного короба','450 руб./п.м',0),(12,'Чистка кондиционера','3500',1);

DELETE FROM services;
ALTER TABLE services AUTO_INCREMENT = 1;
INSERT INTO services VALUES (1,'Кондиционер, сплит-система (7, 9) до 3 кВт','4 000 руб.'),(2,'Кондиционер, сплит-система (12) до 4 кВт','4 500 руб.'),(3,'Кондиционер, сплит-система (18) до 6 кВт','4 500 руб.'),(4,'Кондиционер, сплит-система (24 и выше) от 6 кВт','от 5 500 руб.');


DELETE FROM conditioners;
ALTER TABLE conditioners AUTO_INCREMENT = 1;
DELETE FROM conditioner_models;
ALTER TABLE conditioner_models AUTO_INCREMENT = 1;

/* 
Бирюса 
*/

INSERT INTO conditioners (name, images, brand, country, description, type, inverter) 
VALUES
/* 1 */
    ('Сплит-системы Бирюса серия Fortuna on/off', '["/biryusa/biryusa-fortuna-0.png", "/biryusa/biryusa-fortuna-1.jpg", "/biryusa/biryusa-fortuna-2.jpg", "/biryusa/biryusa-fortuna-3.jpg"]', 'Бирюса', 'Россия', 'Кондиционер Бирюса FORTUNA - это высокоэффективное решение, которое позволяет справляться с охлаждением, обогревом, осушением и вентиляцией. Этот кондиционер оснащен высокоэффективным компрессором GMCC-Toshiba, который обеспечивает стабильную работу при минимальном энергопотреблении. Стандартный режим автоматического переключения настройки и автоматическое регулирование положения жалюзи обеспечивают максимальный комфорт для пользователя.
Кондиционер Бирюса FORTUNA также имеет функцию iFeel, которая обеспечивает управление температурой и направлением потока воздуха в зависимости от расположения пользователя. Функция глубокого сна, турборежим, режим iFeel и другие настройки позволяют максимально настроить кондиционер на свои потребности.', 'Настенный', 0),
/* 2 */
    ('Сплит-системы Бирюса серия ENERGY INVERTER', '["/biryusa/biryusa-energy-0.jpg", "/biryusa/biryusa-energy-1.jpg", "/biryusa/biryusa-energy-2.jpg", "/biryusa/biryusa-energy-3.jpg", "/biryusa/biryusa-energy-4.jpg"]', 'Бирюса', 'Россия', 'Функция "Таймер":
Это функция, которая позволяет настроить прибор под свой распорядок дня. Опция дает возможность активировать режим включения и деактивации устройства без непосредственного участия пользователя. Другими словами — после настройки таймера, кондиционер будет выключаться, когда вас не будет дома, и начинать работу незадолго до вашего возвращения по тому времени, которое вы установите. Это позволит экономить электроэнергию и охлаждать или нагревать помещение в нужное время.
Автоматический выбор режима:
Автоматический режим сплит-систем предполагает автоматическую регулировку температуры воздуха в помещении в пределах установленного диапазона. В процессе работы прибор будет самостоятельно включать режим охлаждения/обогрева, вентилирования и осушения воздуха для обеспечения комфортного микроклимата в комнате.', 'Настенный', 1),
/* 3 */  
    ('Сплит-системы Бирюса серия ENERGY on/off', '["/biryusa/biryusa-energy-0.jpg", "/biryusa/biryusa-energy-1.jpg", "/biryusa/biryusa-energy-2.jpg", "/biryusa/biryusa-energy-3.jpg", "/biryusa/biryusa-energy-4.jpg"]', 'Бирюса', 'Россия', 'Функция "Таймер":
Это функция, которая позволяет настроить прибор под свой распорядок дня. Опция дает возможность активировать режим включения и деактивации устройства без непосредственного участия пользователя. Другими словами — после настройки таймера, кондиционер будет выключаться, когда вас не будет дома, и начинать работу незадолго до вашего возвращения по тому времени, которое вы установите. Это позволит экономить электроэнергию и охлаждать или нагревать помещение в нужное время.
Функция рестарта позволяет автоматически возобновить работу с прежними настройками. Перед повторным запуском, вызванным остановкой из-за перепадов питания, электронная система управления кондиционером восстанавливает заданные параметры, извлекая данные, хранящиеся во флеш-памяти устройства.', 'Настенный', 0),
/* 4 */
    ('Сплит-системы Бирюса серия Dream on/off', '["/biryusa/biryusa-energy-0.jpg", "/biryusa/biryusa-energy-1.jpg", "/biryusa/biryusa-energy-2.jpg", "/biryusa/biryusa-energy-3.jpg", "/biryusa/biryusa-energy-4.jpg"]', 'Бирюса', 'Россия', 'Кондиционер Бирюса Dream - это превосходный выбор для тех, кто ищет комфортный и эффективный способ охлаждения или обогрева воздуха в своем доме или офисе. Он оснащен высокоэффективным компрессором GMCC-Toshiba и может работать в режимах охлаждения, обогрева, осушения, вентиляции и автоматического режима.
Управлять кондиционером очень просто с помощью русифицированного пульта, который имеет функцию запоминания параметров. Скрытый дисплей «Мираж» и выключение дисплея с пульта ДУ гарантируют, что кондиционер не будет мешать вашему отдыху. Антикоррозийное покрытие Blue Fin защищает кондиционер от внешних воздействий и продлевает срок его эксплуатации.
Кондиционер Бирюса Dream также имеет функцию самоочистки и автоматическое оттаивание, что облегчает уход за ним. Функция обнаружения утечки хладагента и авторестарт при сбоях электроэнергии обеспечивают безопасность и надежность работы устройства.', 'Настенный', 0),
/* 5 */
    ('Сплит-системы Бирюса серия Safari on/off', '["/biryusa/biryusa-energy-0.jpg", "/biryusa/biryusa-energy-1.jpg", "/biryusa/biryusa-energy-2.jpg", "/biryusa/biryusa-energy-3.jpg", "/biryusa/biryusa-energy-4.jpg"]', 'Бирюса', 'Россия', 'Кондиционер Бирюса SAFARI - это высококачественное устройство с использованием передовых технологий для обеспечения комфортной атмосферы в помещении. Он оснащен мощным и эффективным компрессором GMCC-Toshiba, который обеспечивает быстрое охлаждение и обогрев воздуха. Кондиционер имеет 5 режимов работы, включая охлаждение, обогрев, осушение, вентиляцию и авто, что делает его идеальным для использования в любых условиях.
Удобный русифицированный пульт дистанционного управления обеспечивает легкое управление всеми функциями кондиционера, а функция 4D-Air flow автоматически качает жалюзи вверх-вниз и вправо-влево, обеспечивая равномерное распределение воздуха в помещении. Скрытый дисплей делает устройство более эстетичным, а золотистое антикоррозионное покрытие Golden Fin предотвращает коррозию и продлевает срок службы кондиционера.', 'Настенный', 0),
/* 6 */
    ('Сплит-системы Бирюса серия Classic on/off', '["/biryusa/biryusa-classic-0.png", "/biryusa/biryusa-classic-1.png", "/biryusa/biryusa-classic-2.png"]', 'Бирюса', 'Россия', 'Сплит-система настенного типа Бирюса серии Classic получил стильный дизайн, высокую функциональность и производительность.
Внутренний блок выполнен в классическом белом цвете. Блок гармонично вписывается в дизайн любого помещения. На передней панели блока расположен скрытый LED-дисплей, отображающий всю информацию о работе сплит системы (заданную температуру, режимы работы и т.д.).', 'Настенный', 0),
/* 7 */
    ('Сплит-системы Бирюса серия Fortuna INVERTER ', '["/biryusa/biryusa-fortuna-0.png", "/biryusa/biryusa-fortuna-1.jpg", "/biryusa/biryusa-fortuna-2.jpg", "/biryusa/biryusa-fortuna-3.jpg"]', 'Бирюса', 'Россия', 'Кондиционер Бирюса FORTUNA - это высокоэффективное решение, которое позволяет справляться с охлаждением, обогревом, осушением и вентиляцией. Этот кондиционер оснащен высокоэффективным компрессором GMCC-Toshiba, который обеспечивает стабильную работу при минимальном энергопотреблении. Стандартный режим автоматического переключения настройки и автоматическое регулирование положения жалюзи обеспечивают максимальный комфорт для пользователя.
Кондиционер Бирюса FORTUNA также имеет функцию iFeel, которая обеспечивает управление температурой и направлением потока воздуха в зависимости от расположения пользователя. Функция глубокого сна, турборежим, режим iFeel и другие настройки позволяют максимально настроить кондиционер на свои потребности.', 'Настенный', 1),
/* 8 */
    ('Сплит-системы Бирюса серия Dream INVERTER', '["/biryusa/biryusa-energy-0.jpg", "/biryusa/biryusa-energy-1.jpg", "/biryusa/biryusa-energy-2.jpg", "/biryusa/biryusa-energy-3.jpg", "/biryusa/biryusa-energy-4.jpg"]', 'Бирюса', 'Россия', 'Кондиционер Бирюса Dream - это превосходный выбор для тех, кто ищет комфортный и эффективный способ охлаждения или обогрева воздуха в своем доме или офисе. Он оснащен высокоэффективным компрессором GMCC-Toshiba и может работать в режимах охлаждения, обогрева, осушения, вентиляции и автоматического режима.
Управлять кондиционером очень просто с помощью русифицированного пульта, который имеет функцию запоминания параметров. Скрытый дисплей «Мираж» и выключение дисплея с пульта ДУ гарантируют, что кондиционер не будет мешать вашему отдыху. Антикоррозийное покрытие Blue Fin защищает кондиционер от внешних воздействий и продлевает срок его эксплуатации.
Кондиционер Бирюса Dream также имеет функцию самоочистки и автоматическое оттаивание, что облегчает уход за ним. Функция обнаружения утечки хладагента и авторестарт при сбоях электроэнергии обеспечивают безопасность и надежность работы устройства.', 'Настенный', 1),
/* 9 */
    ('Сплит-системы Бирюса серия ULTRA INVERTER', '["/biryusa/biryusa-energy-0.jpg", "/biryusa/biryusa-energy-1.jpg", "/biryusa/biryusa-energy-2.jpg", "/biryusa/biryusa-energy-3.jpg", "/biryusa/biryusa-energy-4.jpg"]', 'Бирюса', 'Россия', 'Настенные сплит-системы Бирюса серии U-Ultra Inverter отличаются низким уровнем шума и удобством управления. Имеется возможность настроить поток воздуха для наибольшего комфорта. Особенности и преимущества Бирюса B-24UIR/B-24UIQ U-Ultra Invertert: Компрессор GMCC-Toshiba. Качество и японские технологии современного высокопроизводительного компрессора гарантируют безотказную работу кондиционера. Антикоррозийное покрытие ламелей Blue Fin предохраняет их от воздействия окружающей среды. Инновационное антикоррозийное покрытие деталей внутреннего и внешнего блока кондиционера позволяет в несколько раз увеличить ресурс его работы. ', 'Настенный', 1),
/* 10 */ 
    ('Сплит-системы Бирюса серия Safiri INVERTER', '["/biryusa/biryusa-energy-0.jpg", "/biryusa/biryusa-energy-1.jpg", "/biryusa/biryusa-energy-2.jpg", "/biryusa/biryusa-energy-3.jpg", "/biryusa/biryusa-energy-4.jpg"]', 'Бирюса', 'Россия', 'Кондиционер Бирюса SAFARI - это высококачественное устройство с использованием передовых технологий для обеспечения комфортной атмосферы в помещении. Он оснащен мощным и эффективным компрессором GMCC-Toshiba, который обеспечивает быстрое охлаждение и обогрев воздуха. Кондиционер имеет 5 режимов работы, включая охлаждение, обогрев, осушение, вентиляцию и авто, что делает его идеальным для использования в любых условиях. Удобный русифицированный пульт дистанционного управления обеспечивает легкое управление всеми функциями кондиционера, а функция 4D-Air flow автоматически качает жалюзи вверх-вниз и вправо-влево, обеспечивая равномерное распределение воздуха в помещении.', 'Настенный', 1);

INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_warm, performance_cold, power_input_cold, power_input_warm, indoor_sizes) 
VALUES
    (1, 'B-07FPR/B-07FPQ', '20', 29990, 14760, 2.2, 2.1, 0.65, 0.61, '690x199x283'),
    (1, 'B-09FPR/B-09FPQ', '21 - 25',  31990, 16440, 2.7, 2.65, 0.825, 0.748, '690x199x283'),
    (1, 'B-12FPR/B-12FPQ', '26 - 35',  41990, 22320, 3.65, 3.55, 1.106, 1.011, '750x200x285'),
    (1, 'B-18FPR/B-18FPQ', '36 - 50',  67990, 35280, 5.45, 5.3, 1.656, 1.509, '900х225х310'),
    (1, 'B-24FPR/B-24FPQ', '51 - 70',  82990, 45840, 7.1, 7, 2.325, 2.211, '900x225x310'),
    (1, 'B-30FPR/B-30FPQ', '71 - 100', 99990, 53640, NULL, NULL, NULL, NULL, '1082x233x330'),
    (1, 'B-36FPR/B-36FPQ', '101 - 120', 109990, 64200, NULL, NULL, NULL, NULL, '1082x233x330');
     
INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_warm, performance_cold, power_input_cold, power_input_warm, indoor_sizes)
VALUES
    (2, 'B-07EIR/B-07EIQ', '20', 29990, 23520, 2.43, 2.46, 0.758, 0.678, '715x285x194'),
    (2, 'B-09EIR/B-09EIQ', '21 - 25', 32990, 24660, 2.84, 2.96, 0.886, 0.82, '715x285x194'),
    (2, 'B-12EIR/B-12EIQ', '26 - 35', 36990, 27000, 3.43, 3.75, 1.068, 1.039, '715x285x194'),
    (2, 'B-18EIR/B-18EIQ', '36 - 50', 59990, 45840, 5.27, 5.45, 1.643, 1.51, '957x302x213');

INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_warm, performance_cold, power_input_cold, power_input_warm, indoor_sizes)
VALUES
    (3, 'B-07EPR/B-07EPQ', '20', 26990, 22990, 2.34, 2.2, 0.685, 0.649, '715x285x194'),
    (3, 'B-09EPR/B-09EPQ', '21 - 25', 28990, 24990, 2.78, 2.78, 0.867, 0.771, '715x285x194'),
    (3, 'B-12EPR/B-12EPQ', '26 - 35', 32990, 24660, 3.52, 3.52, 1.096, 0.974, '805x285x194'),
    (3, 'B-18EPR/B-18EPQ', '36 - 50', 56990, 50990, 5.27, 5.42, 1.643, 1.506, '957x302x213');

INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_warm, performance_cold, power_input_cold, power_input_warm, indoor_sizes)
VALUES
    (4, 'B-07DPR/B-07DPQ', '20', 31990, 19990, 2.1, 2.2, 0.65, 0.61, '690x199x283'),
    (4, 'B-09DPR/B-09DPQ', '21 - 25', 33990, 21990, 2.65, 2.7, 0.825, 0.748, '690x199x283'),
    (4, 'B-12DPR/B-12DPQ', '26 - 35', 43990, 28990, 3.55, 3.65, 1.106, 1.011, '750x200x285'),
    (4, 'B-18DPR/B-18DPQ', '36 - 50', 69990, 43490, 5.3, 5.45, 1.656, 1.509, '900x225x310'),
    (4, 'B-24DPR/B-24DPQ', '51 - 70', 84990, 53490, 7, 7.1, 2.325, 2.211, '900x225x310');
    
INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_warm, performance_cold, power_input_cold, power_input_warm, indoor_sizes)
VALUES
    (5, 'B-07SPR/B-07SPQ', '20', 31990, 17640, 2.25, 2.25, 0.693, 0.617, '722x187x290'),
    (5, 'B-09SPR/B-09SPQ', '21 - 25', 33990, 19440, 2.65, 2.65, 0.82, 0.73, '722x187x290'),
    (5, 'B-12SPR/B-12SPQ', '26 - 35', 43990, 25860, 3.55, 3.85, 1.096, 1.055, '802x189x297'),
    (5, 'B-18SPR/B-18SPQ', '36 - 50', 67990, 41160, 5.3, 5.45, 1.644, 1.502, '965x215x319'),
    (5, 'B-24SPR/B-24SPQ', '51 - 70', 81990, 51720, 7.05, 7.65, 2.503, 2.374, '1080x226x335'),
    (5, 'B-30APR/B-30APQ', '71 - 100', 109990, 65100, 8.25, 8.5, 2.556, 2.354, '1259x362x282'),
    (5, 'B-36APR/B-36APQ', '71 - 100', 119990, 76750, 10, 10.85, 3.104, 3.08, '1260x362x283');

INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_warm, performance_cold, power_input_cold, power_input_warm, indoor_sizes)
VALUES
    (6, 'B-07CPR/B-07CPQ', '20', 38900, 30990, 3.37, 3.66, 1.199, 1.141, '805x285x194'),
    (6, 'B-09CPR/B-09CPQ', '26 - 35', 42900, 34990, 3.68, 4.01, 1.399, 1.241, '805x285x194'),
    (6, 'B-12CPR/B-12CPQ', '36 - 50', 46900, 38990, 4.05, 4.42, 1.599, 1.341, '805x285x194');

INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_warm, performance_cold, power_input_cold, power_input_warm, indoor_sizes)
VALUES
    (7, 'B-07FIR/B-07FIQ', '20', 45990, 27490, 2.3, 2.2, 0.637, 0.685, '690x199x283'),
    (7, 'B-09FIR/B-09FIQ', '21 - 25', 45990, 30490, 2.7, 2.65, 0.747, 0.825, '690x199x283'),
    (7, 'B-12FIR/B-12FIQ', '26 - 35', 52990, 34490, 3.5, 3.2, 0.970, 0.997, '750x200x285');

INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_warm, performance_cold, power_input_cold, power_input_warm, indoor_sizes)
VALUES
    (8, 'B-09DIR/B-09DIQ', '21 - 25', 45990, 22920, 2.65, 2.7, 0.825, 0.747, '690x199x283'),
    (8, 'B-12DIR/B-12DIQ', '26 - 35', 52990, 25860, 3.2, 3.5, 0.997, 0.970, '750x200x285'),
    (8, 'B-18DIR/B-18DIQ', '36 - 50', 79990, 42240, 5, 5.1, 1.548, 1.410, '837x205x296'),
    (8, 'B-24DIR/B-24DIQ', '51 - 70', 97990, 56480, 6.7, 6.8, 2.07, 1.88, '900×310×225');

INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_warm, performance_cold, power_input_cold, power_input_warm, indoor_sizes)
VALUES
    (9, 'B-18UIR/B-18UIQ', '36 - 50', 99990, 70990, 5.1, 5.3, 1.548, 1.410, '837x296x205'),
    (9, 'B-24UIR/B-24UIQ', '51 - 70', 99990, 71490, 6.8, 7.1, 2.07, 1.88, '900x310x225');

INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_warm, performance_cold, power_input_cold, power_input_warm, indoor_sizes)
VALUES
    (10, 'B-09SIR/B-09SIQ', '21 - 25', 52990, 33990, 2.8, 3.1, 0.795, 0.843, '722x187x290'),
    (10, 'B-12SIR/B-12SIQ', '26 - 35', 59990, 38990, 3.52, 3.81, 1.088, 1.025, '802x189x297'),
    (10, 'B-18SIR/B-18SIQ', '36 - 50', 87990, 61990, 5.3, 5.6, 1.643, 1.542, '965x215x319'),
    (10, 'B-24SIR/B-24SIQ', '51 - 70', 95990, 80990, 7.03, 7.32, 2.51, 2.31, '1080x335x226');

/*
Roland 
*/

INSERT INTO conditioners (name, images, brand, country, description, type, inverter) 
VALUES
/* 11 */
  ('Сплит-системы Roland FAVORITE II on/off', '["/roland/roland-favorite-0.webp", "/roland/roland-favorite-1.webp", "/roland/roland-favorite-2.webp"]', 'Roland', 'Япония', 'Системы кондиционирования ROLAND серии FAVORITE II представлены пятью моделями классических сплит-систем мощностью от 7 до 24 kBTU.
Сплит-системы соответствуют классу А энергоэффективности. Компрессоры производятся по японским технологиям, что обеспечивает их высокую надежность.
Кондиционеры ROLAND работают в режимах охлаждения, обогрева, вентиляции и осушения воздуха. Для удобства пользователя кондиционеры оснащены информативным скрытым дисплеем, который по желанию может быть отключен, и функциональным пультом дистанционного управления.
Высокое качество продукции ROLAND гарантируется многоуровневым контролем качества.', 'Настенный', 0),
/* 12 */
  ('Сплит-системы Roland WIZARD on/off', '["/roland/roland-wizard-0.webp", "/roland/roland-wizard-1.webp", "/roland/roland-wizard-2.webp"]', 'Roland', 'Япония', 'Кондиционеры ROLAND серии WIZARD сделаны с использованием передовых японских технологий, собственно что дает возможность обеспечивать их высочайшую продуктивность а также долговечность.
Сплит системы отвечают классу А энергоэффективности.
Кондиционеры ROLAND функционируют в режимах охлаждения, подогрева, проветривания а также осушения.', 'Настенный', 0),
/* 13 */
  ('Сплит-системы Roland FAVORITE II INVERTERf', '["/roland/roland-favorite-0.webp", "/roland/roland-favorite-1.webp", "/roland/roland-favorite-2.webp"]', 'Roland', 'Япония', 'Высокое качество традиционных климатический систем Roland серия Favorite II обеспеченно благодаря многоуровневому контролю качества на производстве. Roland Favorite II — это обновленая линейка, в которой устранены все недостатки и внедрены современные инновации. Обновленный дизайн более современный и эргономичный. Как всегда энергоэффективность на высоком уровне А. В наличии все основные функции.', 'Настенный', 1),
/* 14 */
  ('Сплит-системы Roland WIZARD INVERTER', '["/roland/roland-wizard-0.webp", "/roland/roland-wizard-1.webp", "/roland/roland-wizard-2.webp"]', 'Roland', 'Япония', 'Кондиционеры ROLAND серии WIZARD сделаны с использованием передовых японских технологий, собственно что дает возможность обеспечивать их высочайшую продуктивность а также долговечность.
Сплит системы отвечают классу А энергоэффективности.
Кондиционеры ROLAND функционируют в режимах охлаждения, подогрева, проветривания а также осушения.', 'Настенный', 1);

INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_cold, performance_warm, power_input_cold, power_input_warm, indoor_sizes, `wi-fi`)
VALUES 
    (11, 'FU–07HSS010/N4', '20', 21190, 15900, '2,2', '2,36', '0,692', '0,647', '715×285×194', 0),
    (11, 'FU–09HSS010/N4', '21 - 25', 22890, 17300, '2,64', '2,79', '0,822', '0,771', '715×285×194', 0),
    (11, 'FU–12HSS010/N6', '26 - 35', 29990, 22800, '3,52', '3,81', '1,097', '1,055', '805×285×194', 0),
    (11, 'FU–18HSS010/N6', '36 - 50', 50790, 39000, '5,28', '5,57', '1,645', '1,543', '957×302×213', 0),
    (11, 'FU–24HSS010/N6', '51 - 70', 62090, 47500, '7,25', '8,11', '2,385', '2,466', '1040×327×220', 0);

INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_cold, performance_warm, power_input_cold, power_input_warm, indoor_sizes, `wi-fi`)
VALUES 
    (12, 'RD-WZ07HSS/N1', '20', 21690, 16500, '2,22', '2,38', '0,692', '0,647', '790×275×192', 0),
    (12, 'RD-WZ09HSS/N1', '21 - 25', 23390, 17900, '2,7', '2,9', '0,822', '0,771', '790×275×192', 0),
    (12, 'RD-WZ12HSS/N1', '26 - 35', 30890, 23800, '3,63', '3,81', '1,097', '1,055', '790×275×192', 0),
    (12, 'RD-WZ18HSS/N1', '36 - 50', 52190, 40500, '5,35', '5,57', '1,645', '1,543', '920×306×195', 0),
    (12, 'RD-WZ24HSS/N1', '51 - 70', 63390, 48900, '7,3', '7,5', '2,385', '2,466', '1100×333×222', 0);

INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_cold, performance_warm, power_input_cold, power_input_warm, indoor_sizes, `wi-fi`)
VALUES 
    (13, 'FIU–07HSS010/N5', '21 - 25', 31990, 23100, '2,35 (1,25-2,9)', '2,50 (0,9-3,35)', '0,732', '0,693', '715×285×194', 0),
    (13, 'FIU–09HSS010/N5', '26 - 35', 34290, 24600, '2,65 (1,3-3,2)', '2,93 (1,17-3,52)', '0,826', '0,809', '715×285×194', 0),
    (13, 'FIU–12HSS010/N5', '36 - 50', 39590, 28650, '3,4 (1,25-3,95)', '3,71 (1,05-4,15)', '1,059', '1,022', '715×285×194', 0);

INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_cold, performance_warm, power_input_cold, power_input_warm, indoor_sizes, `wi-fi`)
VALUES 
    (14, 'RDI-WZ09HSS/N2', '21 - 25', 36590, 26400, '2,70 (0,94-3,30)', '2,80 (0,94-3,36)', '0,822', '0,771', '790×275×192', 0),
    (14, 'RDI-WZ12HSS/N2', '26 - 35', 41540, 30250, '3,50 (1,00-3,77)', '3,60 (1,00-3,81)', '1,097', '1,055', '790×275×192', 0),
    (14, 'RDI-WZ18HSS/N2', '36 - 50', 69990, 51500, '5,30 (1,25-5,90)', '5,45 (1,25-6,08)', '1,645', '1,543', '920×306×195', 0),
    (14, 'RDI-WZ24HSS/N1', '51 - 70', 85890, 64000, '7,00 (1,83-7,82)', '7,17 (1,85-7,96)', '2,385', '2,466', '1100×333×222', 0);

/* 
Midea
*/

INSERT INTO conditioners (name, images, brand, country, description, type, inverter) 
VALUES
/* 15 */
('Сплит-системы Midea серии PARAMOUNT On/off', '["/midea/midea-paramount-0.webp", "/midea/midea-paramount-1.webp", "/midea/midea-paramount-2.webp"]', 'Midea', 'Китай', 'ОПИСАНИЕ', 'Настенный', 0),
/* 16 */
('Сплит-системы Midea серии PARAMOUNT Inverter', '["/midea/midea-paramount-0.webp", "/midea/midea-paramount-1.webp", "/midea/midea-paramount-2.webp"]', 'Midea', 'Китай', 'ОПИСАНИЕ', 'Настенный', 0),
/* 17 */
('Сплит-системы Midea PRIMARY On/off', '["/midea/midea-primary-0.webp", "/midea/midea-primary-1.webp", "/midea/midea-primary-2.webp", "/midea/midea-primary-3.webp"]', 'Midea', 'Китай', 'ОПИСАНИЕ', 'Настенный', 0),
/* 18 */
('Сплит-системы Midea PRIMARY Inverter', '["/midea/midea-primary-0.webp", "/midea/midea-primary-1.webp", "/midea/midea-primary-2.webp", "/midea/midea-primary-3.webp"]', 'Midea', 'Китай', 'ОПИСАНИЕ', 'Настенный', 0),
/* 19 */
('Midea GAIA (MSCA) Inverter С ПРИТОКОМ СВЕЖЕГО ВОЗДУХА', '["/midea/midea-breezeless-0.webp", "/midea/midea-breezeless-1.webp", "/midea/midea-breezeless-2.webp", "/midea/midea-breezeless-3.webp"]', 'Midea', 'Китай', 'Описание...', 'Настенный', 1),
/* 20 */
('Сплит-системы Midea BREEZELESS (MSFA)  Inverter ', '["/midea/midea-breezeless-0.webp", "/midea/midea-breezeless-1.webp", "/midea/midea-breezeless-2.webp", "/midea/midea-breezeless-3.webp"]', 'Midea', 'Китай', 'ОПИСАНИЕ', 'Настенный', 0),
/* 21 */
('Сплит-системы Midea PERSONA (MSAG4) On/off', '["/midea/midea-persona-0.jpg", "/midea/midea-persona-1.jpg", "/midea/midea-persona-2.jpg", "/midea/midea-persona-3.jpg"]', 'Midea', 'Китай', 'ОПИСАНИЕ', 'Настенный', 0),
/* 22 */
('Сплит-системы Midea PERSONA (MSAG4) Inverter', '["/midea/midea-persona-0.jpg", "/midea/midea-persona-1.jpg", "/midea/midea-persona-2.jpg", "/midea/midea-persona-3.jpg"]', 'Midea', 'Китай', 'ОПИСАНИЕ', 'Настенный', 0),
/* 23 */
('МОБИЛЬНЫЕ КОНДИЦИОНЕРЫ (MPPDB) Midea On/off', '["/midea/midea-mobile-0.jpg", "/midea/midea-mobile-1.jpg", "/midea/midea-mobile-2.jpg", "/midea/midea-mobile-3.jpg"]', 'Midea', 'Китай', 'ОПИСАНИЕ', 'Мобильный', 0);

INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_cold, performance_warm, power_input_cold, power_input_warm, indoor_sizes, `wi-fi`)
VALUES 
    (15, 'MSAG1-07HRN1-I', '20', 25990, 19131, '2,34', '2,34', '0,71', '0,63', 'Не указано', 1),
    (15, 'MSAG1-09HRN1-I', '21 - 25', 28490, 20871, '2,64', '2,78', '0,82', '0,77', '729x292x200', 1),
    (15, 'MSAG1-12HRN1-I', '26 - 35', 36490, 26526, '3,52', '3,66', '1,1', '0,99', '802x295x200', 1),
    (15, 'MSAG1-18HRN1-I', '36 - 50', 60490, 44361, '5,28', '5,28', '1,64', '1,46', '971x321x228', 1),
    (15, 'MSAG1-24HRN1-I', '51 - 70', 78490, 57411, '7,03', '7,33', '2,19', '2,03', '1082x337x234', 1);

INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_cold, performance_warm, power_input_cold, power_input_warm, indoor_sizes, `wi-fi`)
VALUES 
    (16, 'MSAG1-07N8C2-I', '20', 39490, 27831, '2,20 (0,91~2,51)', '2,34 (0,70~2,93)', '0,69 (0,8-1,0)', '0,87 (0,10-1,25)', '729x292x200', 0),
    (16, 'MSAG1-09N8C2-I', '21 - 25', 41990, 29571, '2,64 (1,03~3,22)', '2,93 (0,82~3,37)', '0,82 (0,10-1,25)', '0,73 (0,14-1,34)', '729x292x200', 0),
    (16, 'MSAG1-12N8C2-I', '26 - 35', 47490, 33486, '3,52 (1,38~4,31)', '3,81 (1,07~4,38)', '1,00 (0,13-1,28)', '0,97 (0,18-1,22)', '729x292x200', 0),
    (16, 'MSAG1-18N8D0-I', '36 - 50', 78990, 55671, '5,28 (3,39~5,90)', '5,57 (3,10~5,85)', '1,64 (0,14-2,36)', '1,54 (0,20-2,41)', '969x320x241', 0),
    (16, 'MSAG1-24N8D0-I', '51 - 70', 100990, 71331, '7,03 (2,11~8,21)', '7,33 (1,55~8,21)', '2,34 (0,24-3,03)', '2,28 (0,26-3,14)', '1083x336x244', 0);
    
INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_cold, performance_warm, power_input_cold, power_input_warm, indoor_sizes, `wi-fi`)
VALUES 
    (17, 'MSAG3-07HRN1-I', '20', 25990, 19131, '2,34', '2,34', '0,71', '0,63', '729x200x292', 0),
    (17, 'MSAG3-09HRN1-I', '21 - 25', 28490, 20871, '2,64', '2,78', '0,82', '0,77', '729x200x292', 0),
    (17, 'MSAG3-12HRN1-I', '26 - 35', 36490, 26526, '3,52', '3,66', '1,1', '0,99', '802x200x295', 0),
    (17, 'MSAG3-18HRN1-I', '36 - 50', 60490, 44361, '5,28', '5,28', '1,64', '1,46', '971x228x321', 0),
    (17, 'MSAG3-24HRN1-I', '51 - 70', 78490, 57411, '7,03', '7,33', '2,19', '2,03', '1082x234x337', 0);
    
INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_cold, performance_warm, power_input_cold, power_input_warm, indoor_sizes, `wi-fi`)
VALUES 
    (18, 'MSAG3-07N8C2-I', '20', 39490, 27831, '2,20 (0,91~2,51)', '2,34 (0,70~2,93)', '0,69 (0,8-1,0)', '0,65 (0,11-1,24)', '729x200x292', 0),
    (18, 'MSAG3-09N8C2-I', '21 - 25', 41990, 29571, '2,78 (1,17~3,22)', '3,22 (0,91~3,75)', '0,87 (0,10-1,25)', '0,89 (0,14-1,34)', '729x200x292', 0),
    (18, 'MSAG3-12N8C2-I', '26 - 35', 47490, 33486, '3,37 (1,29~3,84)', '3,52 (1,06~4,04)', '1,05 (0,28-1,39)', '0,97 (0,30-1,44)', '729x200x292', 0),
    (18, 'MSAG3-18N8D0-I', '36 - 50', 78990, 55671, '5,28 (3,39~5,90)', '5,57 (3,10~5,85)', '1,55 (0,56-2,05)', '1,75 (0,78-2,00)', '969x241x320', 0),
    (18, 'MSAG3-24N8D0-I', '51 - 70', 100990, 71331, '7,03 (2,11~8,21)', '7,33 (1,55~8,21)', '2,40 (0,42-3,20)', '2,13 (0,30-3,10)', '1083x244x336', 0);
    
INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_cold, performance_warm, power_input_cold, power_input_warm, indoor_sizes, `wi-fi`)
VALUES 
    (19, 'MSCA1BU-09HRFN8 / MOX230-09HFN8-Q', '21 - 25', 81390, 57237, '2,64 (1,32~3,76)', '3,22 (0,88~3,95)', '0.63(1,46~0,63~0,13)', '0.72 (1,35~0,72~0,12)', '1000x212x335', 0),
    (19, 'MSCA1BU-12HRFN8 / MOX230-12HFN8-Q', '26 - 35', 86890, 61152, '3,52 (1,46~4,37)', '3,81 (1,17~4,54)', '0.99(1,7~0,99~0,14)', '0.98(1,55~0,98~0,16)', '1000x212x335', 0);
       
INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_cold, performance_warm, power_input_cold, power_input_warm, indoor_sizes, `wi-fi`)
VALUES 
    (20, 'MSFA2-09N8D6-I / MSFA1-09N8D6-O', '26 - 35', 74490, 52626, '2,64 (1,23~3,28)', '2,93 (0,85~3,72)', '0.65', '0.62', '940x193x325', 1),
    (20, 'MSFA2-12N8D6-I / MSFA1-12N8D6-O', '36 - 50', 77490, 54801, '3,52 (1,32~4,37)', '3,81 (0,88~4,54)', '0.93', '0.95', '940x193x325', 1);
       
INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_cold, performance_warm, power_input_cold, power_input_warm, indoor_sizes, `wi-fi`)
VALUES 
    (21, 'MSAG4-07HRN1-I / MSAG4-07HRN1-O', '20', 35490, 25221, '2,34', '2,34', '0,71', '0,63', '726x210x291', 1),
    (21, 'MSAG4-09HRN1-I / MSAG4-09HRN1-O', '21 - 25', 37990, 26961, '2,64', '2,78', '0,82', '0,77', '726x210x291', 1),
    (21, 'MSAG4-12HRN1-I / MSAG4-12HRN1-O', '26 - 35', 46990, 33051, '3,52', '3,66', '1,1', '0,99', '835x210x295', 1),
    (21, 'MSAG4-18HRN1-I / MSAG4-18HRN1-O', '36 - 50', 70990, 50016, '5,28', '5,28', '1,64', '1,46', '969x241x320', 1),
    (21, 'MSAG4-24HRN1-I / MSAG4-24HRN1-O', '51 - 70', 88490, 62631, '7,03', '7,33', '2,19', '2.03', '1082x244x336', 1);
        
INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_cold, performance_warm, power_input_cold, power_input_warm, indoor_sizes, `wi-fi`)
VALUES 
    (22, 'MSAG4-07N8C2-I / MSAG4-07N8C2-O', '20', 47490, 33486, '2,05 (1,17~3,22)', '2,34 (0,91~3,75)', '0.64', '0.65', '729x200x292', 1),
    (22, 'MSAG4-09N8C2-I / MSAG4-09N8C2-O', '21 - 25', 50990, 36096, '2,78 (1,17~3,22)', '2,93 (0,91~3,75)', '0.86', '0.93', '729x200x292', 1),
    (22, 'MSAG4-12N8C2-I / MSAG4-12N8C2-O', '26 - 35', 55490, 39141, '3,52 (1,29~3,78)', '3,81 (1,05~4,05)', '1.09', '1.02', '729x200x292', 1),
    (22, 'MSAG4-18N8D0-I / MSAG4-18N8D0-O', '36 - 50', 92490, 65241, '5,28 (3,39~5,90)', '5,57 (3,10~5,85)', '1.55', '1.75', '969x241x320', 1),
    (22, 'MSAG4-24N8D0-I / MSAG4-24N8D0-O', '51 - 70', 115990, 81771, '7,03 (2,11~8,21)', '7,33 (1,55~8,21)', '2.4', '2.13', '1083x244x336', 1);
    
INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_cold, performance_warm, power_input_cold, power_input_warm, indoor_sizes, `wi-fi`)
VALUES 
    (23, 'MPPDA-09CRN7-Q', '21 - 25', 35999, 30441, '2,64', '2,64', '0,98', NULL, '454x700x365', 0),
    (23, 'MPPDB-12HRN1-Q', '26 - 35', 39999, 33486, '3,52', '2,93', '1,35', '1,13', '467x765x397', 0);

/* 
Kentatsu
*/

INSERT INTO conditioners (name, images, brand, country, description, type, inverter) 
VALUES
/* 24 */
('Сплит-системы KENTATSU серия KANAMI (KSGA/KSRA) on/off', '["/kentatsu/kentatsu-kanami-0.jpg", "/kentatsu/kentatsu-kanami-1.jpg", "/kentatsu/kentatsu-kanami-2.jpg", "/kentatsu/kentatsu-kanami-3.jpg"]', 'Kentatsu', 'Япония', 'ОПИСАНИЕ', 'Настенный', 0),
/* 25 */
('Сплит-системы KENTATSU серия KANAMI (KSGA/KSRA) inverter', '["/kentatsu/kentatsu-kanami-0.jpg", "/kentatsu/kentatsu-kanami-1.jpg", "/kentatsu/kentatsu-kanami-2.jpg", "/kentatsu/kentatsu-kanami-3.jpg"]', 'Kentatsu', 'Япония', 'ОПИСАНИЕ', 'Настенный', 1),
/* 26 */
('Сплит-системы KENTATSU серия TIBA (KSGTI/KSRTI) on/off', '["/kentatsu/kentatsu-tiba-0.jpg", "/kentatsu/kentatsu-tiba-1.jpg", "/kentatsu/kentatsu-tiba-2.jpg", "/kentatsu/kentatsu-tiba-3.jpg"]', 'Kentatsu', 'Япония', 'ОПИСАНИЕ', 'Настенный', 0),
/* 27 */
('Сплит-системы KENTATSU серия TIBA INVERTER (KSGTI/KSRTI)', '["/kentatsu/kentatsu-tiba-0.jpg", "/kentatsu/kentatsu-tiba-1.jpg", "/kentatsu/kentatsu-tiba-2.jpg", "/kentatsu/kentatsu-tiba-3.jpg"]', 'Kentatsu', 'Япония', 'ОПИСАНИЕ', 'Настенный', 1),
/* 28 */
('Сплит-системы KENTATSU серия ICHI (KSGI/KSRI) on/off', '["/kentatsu/kentatsu-kanami-0.jpg", "/kentatsu/kentatsu-kanami-1.jpg", "/kentatsu/kentatsu-kanami-2.jpg", "/kentatsu/kentatsu-kanami-3.jpg"]', 'Kentatsu', 'Япония', 'ОПИСАНИЕ', 'Настенный', 0),
/* 29 */
('Сплит-системы KENTATSU серия Naomi (KSRN/KSGN) on/off', '["/kentatsu/kentatsu-naomi-0.jpg", "/kentatsu/kentatsu-naomi-1.jpg", "/kentatsu/kentatsu-naomi-2.jpg", "/kentatsu/kentatsu-naomi-3.jpg"]', 'Kentatsu', 'Япония', 'ОПИСАНИЕ', 'Настенный', 0),
/* 30 */
('Сплит-системы KENTATSU серия SEMPAI (KSGP/KSRP) inverter', '["/kentatsu/kentatsu-sempai-0.jpg", "/kentatsu/kentatsu-sempai-1.jpg", "/kentatsu/kentatsu-sempai-2.jpg", "/kentatsu/kentatsu-sempai-3.jpg"]', 'Kentatsu', 'Япония', 'ОПИСАНИЕ', 'Настенный', 1),
/* 31 */
('Сплит-системы KENTATSU серия OTARI (KSGY/KSRY) inverter', '["/kentatsu/kentatsu-sempai-0.jpg", "/kentatsu/kentatsu-otari-1.jpg", "/kentatsu/kentatsu-sempai-2.jpg", "/kentatsu/kentatsu-sempai-3.jpg"]', 'Kentatsu', 'Япония', 'ОПИСАНИЕ', 'Настенный', 1),
/* 32 */
('Сплит-системы KENTATSU серия OMORI (KSGOM/KSROM) inverter', '["/kentatsu/kentatsu-omori-0.jpg", "/kentatsu/kentatsu-omori-1.jpg", "/kentatsu/kentatsu-omori-2.jpg", "/kentatsu/kentatsu-kanami-3.jpg"]', 'Kentatsu', 'Япония', 'ОПИСАНИЕ', 'Настенный', 1);

INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_cold, performance_warm, power_input_cold, power_input_warm, indoor_sizes, `wi-fi`)
VALUES
(24, 'KSGA21HFAN1', '20', 25990, 19131, '2,34', '2,34', '0,71', '0,63', '729х292х200', 1),
(24, 'KSGA26HFAN1', '21 - 25', 28490, 20871, '2,64', '2,78', '0,82', '0,77', '729х292х200', 1),
(24, 'KSGA35HFAN1', '26 - 35', 36490, 26526, '3,52', '3,66', '1,1', '0,99', '802х295х200', 1),
(24, 'KSGA53HFAN1', '36 - 50', 59490, 43491, '5,28', '5,28', '1,64', '1,46', '971х321х228', 1),
(24, 'KSGA70HFAN1', '51 - 70', 75990, 55671, '7,03', '7,33', '2,19', '2,03', '1082х337х234', 1);

INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_cold, performance_warm, power_input_cold, power_input_warm, indoor_sizes, `wi-fi`)
VALUES
(25, 'KSGA21HZRN1', '21 - 25', 36990, 26091, '2,20 (0,91~2,51)', '2,34 (0,70~2,93)', '0,69 (0,8-1,0)', '0,87 (0,10-1,25)', '729х292х200', 1),
(25, 'KSGA26HZRN1', '26 - 35', 39490, 27831, '2,78 (1,17~3,22)', '3,22 (0,91~3,75)', '0,82 (0,10-1,25)', '0,73 (0,14-1,34)', '729х292х200', 1),
(25, 'KSGA35HZRN1', '36 - 50', 44490, 31311, '3,37 (1,29~3,84)', '3,52 (1,06~4,04)', '1,00 (0,13-1,28)', '0,97 (0,18-1,22)', '729х292х200', 1),
(25, 'KSGA53HZRN1', '51 - 70', 74490, 52626, '5,28 (3,39~5,90)', '5,57 (3,10~5,85)', '1,64 (0,14-2,36)', '1,54 (0,20-2,41)', '969х320х241', 1),
(25, 'KSGA70HZRN1', '71 - 100', 95490, 67416, '7,03 (2,11~8,21)', '7,33 (1,55~8,21)', '2,34 (0,24-3,03)', '2,28 (0,26-3,14)', '1083х336х244', 1);

INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_cold, performance_warm, power_input_cold, power_input_warm, indoor_sizes, `wi-fi`)
VALUES
(26, 'KSGTI21HFAN1 / KSRTI21HFAN1', '20', 28990, 21306, '2,25', '2,35', '0.69', '0.65', '729x200x292', NULL),
(26, 'KSGTI26HFAN1 / KSRTI26HFAN1', '21 - 25', 30990, 22611, '2,5', '2,6', '0.87', '0.89', '729x200x292', NULL),
(26, 'KSGTI35HFAN1 / KSRTI35HFAN1', '26 - 35', 40490, 29571, '3,25', '3,4', '1.05', '0.97', '729x200x292', NULL),
(26, 'KSGTI50HFAN1 / KSRTI50HFAN1', '36 - 50', 68490, 50016, '5,1', '5,05', '1.55', '1.75', '969x241x320', NULL),
(26, 'KSGTI70HFAN1 / KSRTI70HFAN1', '51 - 70', 84990, 62196, '6,16', '6,7', '2.4', '2.13', '1083x244x336', NULL);

INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_cold, performance_warm, power_input_cold, power_input_warm, indoor_sizes, `wi-fi`)
VALUES
(27, 'KSGTI21HZRN1 / KSRTI21HZRN1', '20', 39990, 28266, '2,14 (0,93~2,95)', '2,2 (0,82~3,37)', '0.59', '0.59', '708x185x260', NULL),
(27, 'KSGTI26HZRN1 / KSRTI26HZRN1', '21 - 25', 43490, 30876, '2,64 (1,03~3,22)', '2,93 (0,82~3,37)', '0.68', '0.73', '708x185x260', NULL),
(27, 'KSGTI35HZRN1 / KSRTI35HZRN1', '26 - 35', 47990, 33921, '3,52 (1,38~4,31)', '3,81 (1,07~4,38)', '0.99', '0.92', '783x185x260', NULL),
(27, 'KSGTI50HZRN1 / KSRTI50HZRN1', '36 - 50', 81990, 57846, '5,28 (3,40~5,91)', '5,57 (3,11~5,87)', '1.35', '1.33', '943x246x333', NULL),
(27, 'KSGTI70HZRN1 / KSRTI70HZRN1', '51 - 70', 104990, 73941, '7,03 (2,11~8,21)', '7,33 (1,55~8,21)', '1.79', '1.65', '943x246x333', NULL),
(27, 'KSGTI100HZAN1 / KSRTI100HZAN1 R410', '51 - 70', 152990, 107871, '10,55 (2,65~11,60)', '10,55 (2,80~12,00)', '3', '2.78', '1078x246x333', NULL);


INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_cold, performance_warm, power_input_cold, power_input_warm, indoor_sizes, `wi-fi`)
VALUES
(28, 'KSGI21HFAN1/KSRI21HFAN1', '20', 24990, 18261, '2,34', '2,34', '0,71', '0,63', '729х292х200', NULL),
(28, 'KSGI26HFAN1/KSRI26HFAN1', '21 - 25', 27490, 20001, '2,64', '2,78', '0,82', '0,77', '729х292х200', NULL),
(28, 'KSGI35HFAN1/KSRI35HFAN1', '26 - 35', 34990, 25656, '3,52', '3,66', '1,1', '0,99', '802х295х200', NULL),
(28, 'KSGI53HFAN1/KSRI53HFAN1', '36 - 50', 59490, 43491, '5,28', '5,28', '1,64', '1,46', '971х321х228', NULL),
(28, 'KSGI70HFAN1/KSRI70HFAN1', '51 - 70', 75490, 55236, '7,03', '7,33', '2,19', '2,03', '1082х337х234', NULL);

INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_cold, performance_warm, power_input_cold, power_input_warm, indoor_sizes, `wi-fi`)
VALUES
(27, 'KSGN105HFAN1/KSGN105HFAN1', '71 - 100', 152990, 107871, '9,96', '10,84', '3,12', '3,08', '1260x362x283', NULL),

(29, 'KSGPA26HZRN1/KSRPA26HZRN1', '21 - 25', 52990, 37401, '2,73 (1,32~3,81)', '3,14 (0,88~4,40)', '0,69 (0,8-1,0)', '0,87 (0,10-1,25)', '729х292х200', NULL),
(29, 'KSGPA35HZRN1/KSRPA35HZRN1', '26 - 35', 57490, 40446, '3,52 (1,32~3,96)', '3,96 (0,88~4,54)', '0,82 (0,10-1,25)', '0,73 (0,14-1,34)', '729х292х200', NULL),
(29, 'KSGPA53HZRN1/KSRPA53HZRN1', '36 - 50', 77490, 54801, '5,28 (3,40~5,91)', '5,57 (3,11~5,87)', '1,00 (0,13-1,28)', '0,97 (0,18-1,22)', '729х292х200', NULL),
(29, 'KSGPA70HZRN1/KSRPA70HZRN1', '51 - 70', 98990, 70026, '7,03 (2,11~8,21)', '7,33 (1,55~8,21)', '1,64 (0,14-2,36)', '1,54 (0,20-2,41)', '969х320х241', NULL),

(30, 'KSGY26HZRN1/KSRY26HZRN1', '21 - 25', 42200, 35000, '2,64 (1,03~3,22)', '2,93 (0,82~3,37)', '0,69 (0,8-1,0)', '0,87 (0,10-1,25)', '729х292х200', 1),
(30, 'KSGY35HZRN1/KSRY35HZRN1', '26 - 35', 45900, 38000, '3,52 (1,38~4,31)', '3,81 (1,07~4,38)', '0,82 (0,10-1,25)', '0,73 (0,14-1,34)', '729х292х200', 1),
(30, 'KSGY53HZRN1/KSRY53HZRN1', '36 - 50', 73300, 60000, '5,28 (3,40~5,91)', '5,57 (3,11~5,87)', '1,00 (0,13-1,28)', '0,97 (0,18-1,22)', '729х292х200', 1),
(30, 'KSGY70HZRN1/KSRY70HZRN1', '51 - 70', 94700, 78500, '7,03 (2,11~8,21)', '7,33 (1,55~8,21)', '1,64 (0,14-2,36)', '1,54 (0,20-2,41)', '969х320х241', 1),

(31, 'KSGOT26HZRN1/KSROT26HZRN1', '21 - 25', 58990, 41751, '2,70 (0,80~3,80)', '3,00 (0,90~4,25)', '0,69 (0,8-1,0)', '0,87 (0,10-1,25)', '744х256х185', 1),
(31, 'KSGOT35HZRN1/KSROT35HZRN1', '26 - 35', 65490, 46101, '3,51 (0,90~4,40)', '3,81 (0,90~4,70)', '0,82 (0,10-1,25)', '0,73 (0,14-1,34)', '819х256х185', 1),
(31, 'KSGOT50HZRN1/KSROT50HZRN1', '36 - 50', 95490, 67416, '5,2 (1,00~6,10)', '5,60 (1,10~6,60)', '1,00 (0,13-1,28)', '0,97 (0,18-1,22)', '849х289х210', 1),
(31, 'KSGOT70HZRN1/KSROT70HZRN1', '51 - 70', 125490, 88731, '7,10 (2,00~8,85)', '7,80 (1,80~9,45)', '1,64 (0,14-2,36)', '1,54 (0,20-2,41)', '1012х307х220', 1);

INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_cold, performance_warm, power_input_cold, power_input_warm, indoor_sizes, `wi-fi`)
VALUES
(32, 'KSGOM26HZRN1/KSROM26HZRN1', '20', 66490, 46971, '2,64 (1,23~3,29)', '2,93 (0,85~3,72)', '0,69 (0,8-1,0)', '0,87 (0,10-1,25)', '744х256х185', 1),
(32, 'KSGOM35HZRN1/KSROM35HZRN1', '21 - 25', 69990, 49581, '3,52 (1,32~4,30)', '3,81 (0,88~4,40)', '0,82 (0,10-1,25)', '0,73 (0,14-1,34)', '819х256х185', 1);

/* 
Dichi
*/

INSERT INTO conditioners (name, images, brand, country, description, type, inverter) 
VALUES
/* 33 */
('Сплит-системы DAICHI серия EVEREST On/Off', '["/daichi/daichi-everest-0.jpg", "/daichi/daichi-everest-1.jpg", "/daichi/daichi-everest-2.jpg", "/daichi/daichi-everest-3.jpg"]', 'Daichi', 'Япония', 'ОПИСАНИЕ', 'Настенный', 0),
/* 34 */
('Сплит-системы DAICHI серия ICE On/Off', '["/daichi/daichi-everest-0.jpg", "/daichi/daichi-everest-1.jpg", "/daichi/daichi-everest-2.jpg", "/daichi/daichi-everest-3.jpg"]', 'Daichi', 'Япония', 'ОПИСАНИЕ', 'Настенный', 0),
/* 35 */
('Сплит-системы DAICHI серия O2 inverter R-32', '["/daichi/daichi-o2-0.jpg", "/daichi/daichi-o2-1.jpg", "/daichi/daichi-o2-2.jpg"]', 'Daichi', 'Япония', 'ОПИСАНИЕ', 'Настенный', 1),
/* 36 */
('Сплит-системы DAICHI серия ICE inverter', '["/daichi/daichi-everest-0.jpg", "/daichi/daichi-everest-1.jpg", "/daichi/daichi-everest-2.jpg", "/daichi/daichi-everest-3.jpg"]', 'Daichi', 'Япония', 'ОПИСАНИЕ', 'Настенный', 1),
/* 37 */
('Сплит-системы DAICHI серия дизайнерская CARBON On/Off', '["/daichi/daichi-carbon-0.jpg", "/daichi/daichi-carbon-1.jpg", "/daichi/daichi-carbon-2.jpg"]', 'Daichi', 'Япония', 'ОПИСАНИЕ', 'Настенный', 0),
/* 38 */
('Сплит-системы DAICHI серия AIR On/Off', '["/daichi/daichi-everest-0.jpg", "/daichi/daichi-everest-1.jpg", "/daichi/daichi-everest-2.jpg", "/daichi/daichi-everest-3.jpg"]', 'Daichi', 'Япония', 'ОПИСАНИЕ', 'Настенный', 0),
/* 39 */
('Сплит-системы DAICHI серия AIR inverter', '["/daichi/daichi-everest-0.jpg", "/daichi/daichi-everest-1.jpg", "/daichi/daichi-everest-2.jpg", "/daichi/daichi-everest-3.jpg"]', 'Daichi', 'Япония', 'ОПИСАНИЕ', 'Настенный', 1),
/* 40 */
('Сплит-системы DAICHI серия CARBON inverter', '["/daichi/daichi-carbon-0.jpg", "/daichi/daichi-carbon-1.jpg", "/daichi/daichi-carbon-2.jpg"]', 'Daichi', 'Япония', 'ОПИСАНИЕ', 'Настенный', 1),
/* 41 */
('Сплит-системы DAICHI серия EVOLUTION (обогрев до -30°C) inverter', '["/daichi/daichi-evolution-0.jpg", "/daichi/daichi-evolution-1.jpg", "/daichi/daichi-evolution-2.jpg"]', 'Daichi', 'Япония', 'ОПИСАНИЕ', 'Настенный', 1),
/* 42 */
('Сплит-системы DAICHI Тепловой насос серии SIBERIA (обогрев до -25°C) inverter ', '["/daichi/daichi-siberia-0.jpg", "/daichi/daichi-siberia-1.jpg", "/daichi/daichi-siberia-2.jpg"]', 'Daichi', 'Япония', 'ОПИСАНИЕ', 'Настенный', 1);

 -- DAICHI серия EVEREST On\Off
INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_cold, performance_warm, power_input_cold, power_input_warm, indoor_sizes, `wi-fi`)
VALUES
  (33, 'DA20EVQ1-1-DF20EV1-1', '20', 23490, 18990, 2.05, 2.26, NULL, NULL, '798x25x185', 1),
  (33, 'DA25EVQ1-1 -DF25EV1-1', '21 - 25', 25990, 20990, 2.64, 2.86, NULL, NULL, '798x25x185', 1),
  (33, 'DA35EVQ1-1-DF35EV1-1', '26 - 35', 34990, 28490, 3.52, 3.77, NULL, NULL, '773x250x185', 1),
  (33, 'DA50EVQ1-1-DF50EV1-1', '36 - 50', 59990, 48490, 5.28, 5.42, NULL, NULL, '849x289x215', 1),
  (33, 'DA70EVQ1-1-DF70EV1-1', '51 - 70', 73990, 59990, 7.03, 7.29, NULL, NULL, '970x300x225', 1);
  
-- DAICHI серия ICE On\Off
INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_cold, performance_warm, power_input_cold, power_input_warm, indoor_sizes, `wi-fi`)
VALUES
(34, 'ICE20AVQ1-1 / ICE20FV1-1', '20', 29990, 21306, 2.25, 2.35,NULL, NULL, '698x25x185', 1),
(34, 'ICE25AVQ1-1 / ICE25FV1-1', '21 - 25', 31990, 22611, 2.55, 2.65, NULL, NULL, '698x25x185', 1),
(34, 'ICE35AVQ1-1 / ICE35FV1-1', '26 - 35', 41990, 29571, 3.25, 3.47, NULL, NULL, '773x250x185', 1),
(34, 'ICE50AVQ1-1 / ICE50FV1-1', '36 - 50', 70016, 50016, 4.85, 5.38, NULL, NULL, '849x289x215', 1),
(34, 'ICE60AVQ1-1 / ICE60FV1-1', '51 - 70', 87196, 62196, 6.15, 6.79, NULL, NULL, '970x300x225', 1),
(34, 'ICE80AVQ1-1 / ICE80FV1-1', '51 - 70', 122490, 86556, 8.59, 9.21, NULL, NULL, '80x325x254', 1),
(34, 'ICE95AVQ1 / ICE95FV1-1', '71 - 100', 150490, 106131, 9.59, 9.81, NULL, NULL, '80x325x245', 1);

-- DAICHI серия O2 inverter R-32
INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_cold, performance_warm, power_input_cold, power_input_warm, indoor_sizes, `wi-fi`)
VALUES
(35, 'O220AVQS1R-1-O220FVS1R-1', '20', 37490, 27396, 2.35, 2.50, NULL, NULL, '790×275×200', 1),
(35, 'O225AVQS1R-1-O225FVS1R-1', '21 - 25', 40490, 29571, 2.65, 2.85, NULL, NULL, '790×275×200', 1),
(35, 'O235AVQS1R-1-O235FVS1R-1', '26 - 35', 44990, 33051, 3.50, 3.50, NULL, NULL, '790×275×200', 1),
(35, 'O250AVQS1R-1-O250FVS1R-1', '36 - 50', 57411, 42411, 4.60, 5.20, NULL, NULL, '970×300×224', 1),
(35, 'O260AVQS1R-1-O260FVS1R-1', '51 - 70', 72636, 57636, 6.16, 6.20, NULL, NULL, '970×300×224', 1);

-- DAICHI серия ICE inverter
INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_cold, performance_warm, power_input_cold, power_input_warm, indoor_sizes, `wi-fi`)
VALUES
(36, 'ICE20AVQS1R - ICE20FVS1R', '20', 37490, 27396, 2.35, 2.50, NULL, NULL, '698x25x185', 1),
(36, 'ICE25AVQS1R - ICE25FVS1R', '21 - 25', 40490, 29571, 2.65, 2.85, NULL, NULL, '698x25x185', 1),
(36, 'ICE35AVQS1R - ICE35FVS1R', '26 - 35', 44990, 33051, 3.50, 3.50, NULL, NULL, '773x250x185', 1),
(36, 'ICE50AVQS1R -ICE50FVS1R', '36 - 50', 57411, 42411, 4.60, 5.20, NULL, NULL, '849x289x215', 1),
(36, 'ICE70AVQS1R -ICE70FVS1R', '51 - 70', 72636, 57636, 6.16, 6.20, NULL, NULL, '970x300x225', 1);

-- DAICHI серия дизайнерская CARBON On\Off
INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_cold, performance_warm, power_input_cold, power_input_warm, indoor_sizes, `wi-fi`)
VALUES
(37, 'DA20DVQ1-B1 /DF20DV1-1', '20', 22611, NULL, 2.05, 2.26, NULL, NULL, '798x25x185', 1),
(37, 'DA25DVQ1-B1 /DF25DV1-1', '21 - 25', 23916, NULL, 2.64, 2.86, NULL, NULL, '798x25x185', 1),
(37, 'DA35DVQ1-B1 /DF35DV1-1', '26 - 35', 30441, NULL, 3.52, 3.77, NULL, NULL, '773x250x185', 1),
(37, 'DA50DVQ1-B1 /DF50DV1-1', '36 - 50', 48711, NULL, 5.28, 5.42, NULL, NULL, '849x289x215', 1),
(37, 'DA70DVQ1-B1 /DF70DV1-1', '51 - 70', 60891, NULL, 7.03, 7.29, NULL, NULL, '970x300x225', 1);


-- Сплит-системы DAICHI серия AIR On\Off завода TCL
INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_cold, performance_warm, power_input_cold, power_input_warm, indoor_sizes, `wi-fi`)
VALUES
(38, 'AIR20AVQ1-AIR20FV1', '20', 22490, 16521, 2.22, 2.69, NULL, NULL, '713x250x185', 1),
(38, 'AIR25AVQ1-AIR25FV1', '21 - 25', 24990, 18261, 2.64, 2.78, NULL, NULL, '713x250x185', 1),
(38, 'AIR35AVQ1-AIR35FV1', '26 - 35', 33890, 24786, 3.52, 3.66, NULL, NULL, '773x250x185', 1),
(38, 'AIR50AVQ1 AIR50FV1', '36 - 50', 57490, 42186, 5.28, 5.42, NULL, NULL, '849x289x215', 1),
(38, 'AIR70AVQ1 -AIR70FV1', '51 - 70', 71490, 52191, 7.03, 7.18, NULL, NULL, '970x300x225', 1);

-- Сплит-системы DAICHI серия AIR inverter завода TCL
INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_cold, performance_warm, power_input_cold, power_input_warm, indoor_sizes, `wi-fi`)
VALUES
(39, 'AIR25AVQS1R /AIR25FVS1R', '20', 39490, 28701, 2.60, 2.63, NULL, NULL, '713x270x195', 1),
(39, 'AIR35AVQS1R /AIR35FVS1R', '21 - 25', 43990, 32181, 3.40, 3.43, NULL, NULL, '790x275x200', 1),
(39, 'AIR50AVQS1R /AIR50FVS1R', '26 - 35', 74990, 54801, 5.10, 5.13, NULL, NULL, '790x275x200', 1),
(39, 'AIR60AVQS1R /AIR60FVS1R', '36 - 50', 99990, 73071, 6.80, 7.05, NULL, NULL, '970x300x224', 1);

-- Сплит-системы DAICHI серия CARBON inverter завода TCL
INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_cold, performance_warm, power_input_cold, power_input_warm, indoor_sizes, `wi-fi`)
VALUES
(40, 'DA25DVQS1R-B / DF25DVS1R', '20', 49490, 34791, 2.60, 2.61, NULL, NULL, '713x270x195', 1),
(40, 'DA35DVQS1R-B / DF35DVS1R', '21 - 25', 53490, 37836, 3.40, 3.42, NULL, NULL, '790x275x200', 1),
(40, 'DA50DVQS1R-B / DF50DVS1R', '26 - 35', 87990, 62196, 5.10, 5.10, NULL, NULL, '790x275x200', 1),
(40, 'DA70DVQS1R-B / DF70DVS1R', '36 - 50', 115990, 81771, 6.81, 6.87, NULL, NULL, '970x300x224', 1);

-- Сплит-системы DAICHI серия EVOLUTION (обогрев до -30°C) inverter завода GREE
INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_cold, performance_warm, power_input_cold, power_input_warm, indoor_sizes, `wi-fi`)
VALUES
(41, 'EVO25AVQS1R -EVO25FVS1R', '20', 108490, 76551, 2.70, 3.50, NULL, NULL, '790x275x200', 1),
(41, 'EVO35AVQS1R - EVO35FVS1R', '21 - 25', 114490, 80901, 3.53, 4.20, NULL, NULL, '790x275x200', 1),
(41, 'EVO50AVQS1R - EVO50FVS1R', '26 - 35', 145490, 102651, 5.30, 6.20, NULL, NULL, '970x300x224', 1),
(41, 'EVO70AVQS1R - EVO70FVS1R', '36 - 50', 161990, 114396, 7.03, 7.03, NULL, NULL, '970x300x224', 1);

-- Сплит-системы DAICHI Тепловой насос серии SIBERIA (обогрев до -25°C) inverter завода GREE
INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_cold, performance_warm, power_input_cold, power_input_warm, indoor_sizes, `wi-fi`)
VALUES
(42, 'SIB25AVQS1R - SIB25FVS1R', '20', 55990, 39576, 2.70, 3.00, NULL, NULL, '790x275x200', 1),
(42, 'SIB35AVQS1R - SIB35FVS1R', '21 - 25', 61990, 43926, 3.51, 3.81, NULL, NULL, '790x275x200', 1),
(42, 'SIB50AVQS1R - SIB50FVS1R', '26 - 35', 93490, 66111, 5.20, 5.60, NULL, NULL, '970x300x224', 1),
(42, 'SIB70AVQS1R - SIB70FVS1R', '36 - 50', 123990, 87426, 7.10, 7.80, NULL, NULL, '970x300x224', 1);
