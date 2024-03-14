USE climat;

DELETE FROM conditioners;
ALTER TABLE conditioners AUTO_INCREMENT = 1;
DELETE FROM conditioner_models;
ALTER TABLE conditioner_models AUTO_INCREMENT = 1;

INSERT INTO conditioners (name, images, brand, country, description, type, inverter) 
VALUES
     ('Сплит-системы Бирюса серия Fortuna', '["biryusa-fortuna.png"]', 'Бирюса', 'Россия', 'ОПИСАНИЕ', 'Настенный', 0),
     ('Сплит-системы Бирюса серия ENERGY', '["biryusa-fortuna.png"]', 'Бирюса', 'Россия', 'ОПИСАНИЕ', 'Настенный', 1),
     ('Сплит-системы Бирюса серия ENERGY', '["biryusa-fortuna.png"]', 'Бирюса', 'Россия', 'ОПИСАНИЕ', 'Настенный', 0),
     ('Сплит-системы Бирюса серия Dream', '["biryusa-fortuna.png"]', 'Бирюса', 'Россия', 'ОПИСАНИЕ', 'Настенный', 0),
     ('Сплит-системы Бирюса серия Safari', '["biryusa-fortuna.png"]', 'Бирюса', 'Россия', 'ОПИСАНИЕ', 'Настенный', 0),
     ('Сплит-системы Бирюса серия Clasic', '["biryusa-fortuna.png"]', 'Бирюса', 'Россия', 'ОПИСАНИЕ', 'Настенный', 0),
     ('Сплит-системы Бирюса серия Fortuna', '["biryusa-fortuna.png"]', 'Бирюса', 'Россия', 'ОПИСАНИЕ', 'Настенный', 1),
     ('Сплит-системы Бирюса серия Dream', '["biryusa-fortuna.png"]', 'Бирюса', 'Россия', 'ОПИСАНИЕ', 'Настенный', 1),
     ('Сплит-системы Бирюса серия ULTRA', '["biryusa-fortuna.png"]', 'Бирюса', 'Россия', 'ОПИСАНИЕ', 'Настенный', 1),
     ('Сплит-системы Бирюса серия Safiri', '["biryusa-fortuna.png"]', 'Бирюса', 'Россия', 'ОПИСАНИЕ', 'Настенный', 1);

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
    (2, 'B-07EIR/B-07EIQ', '21 - 25', 29990, 23520, 2.43, 2.46, 0.758, 0.678, '715x285x194'),
    (2, 'B-09EIR/B-09EIQ', '26 - 35', 32990, 24660, 2.84, 2.96, 0.886, 0.82, '715x285x194'),
    (2, 'B-12EIR/B-12EIQ', '36 - 50', 36990, 27000, 3.43, 3.75, 1.068, 1.039, '715x285x194'),
    (2, 'B-18EIR/B-18EIQ', '71 - 100', 59990, 45840, 5.27, 5.45, 1.643, 1.51, '957x302x213');

INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_warm, performance_cold, power_input_cold, power_input_warm, indoor_sizes)
VALUES
    (3, 'B-07EPR/B-07EPQ', '26 - 35', 26990, 22990, 2.34, 2.2, 0.685, 0.649, '715x285x194'),
    (3, 'B-09EPR/B-09EPQ', '26 - 35', 28990, 24990, 2.78, 2.78, 0.867, 0.771, '715x285x194'),
    (3, 'B-12EPR/B-12EPQ', '36 - 50', 32990, 24660, 3.52, 3.52, 1.096, 0.974, '805x285x194'),
    (3, 'B-18EPR/B-18EPQ', '51 - 70', 56990, 50990, 5.27, 5.42, 1.643, 1.506, '957x302x213');

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
    (5, 'B-36APR/B-36APQ', '101 - 120', 119990, 76750, 10, 10.85, 3.104, 3.08, '1260x362x283');

INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_warm, performance_cold, power_input_cold, power_input_warm, indoor_sizes)
VALUES
    (6, 'B-07CPR/B-07CPQ', '26 - 35', 38900, 30990, 3.37, 3.66, 1.199, 1.141, '805x285x194'),
    (6, 'B-09CPR/B-09CPQ', '36 - 50', 42900, 34990, 3.68, 4.01, 1.399, 1.241, '805x285x194'),
    (6, 'B-12CPR/B-12CPQ', '51 - 70', 46900, 38990, 4.05, 4.42, 1.599, 1.341, '805x285x194');

INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_warm, performance_cold, power_input_cold, power_input_warm, indoor_sizes)
VALUES
    (7, 'B-07FIR/B-07FIQ', '21 - 25', 45990, 27490, 2.3, 2.2, 0.637, 0.685, '690x199x283'),
    (7, 'B-09FIR/B-09FIQ', '26 - 35', 45990, 30490, 2.7, 2.65, 0.747, 0.825, '690x199x283'),
    (7, 'B-12FIR/B-12FIQ', '36 - 50', 52990, 34490, 3.5, 3.2, 0.970, 0.997, '750x200x285');

INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_warm, performance_cold, power_input_cold, power_input_warm, indoor_sizes)
VALUES
    (8, 'B-09DIR/B-09DIQ', '26 - 35', 45990, 22920, 2.65, 2.7, 0.825, 0.747, '690x199x283'),
    (8, 'B-12DIR/B-12DIQ', '36 - 50', 52990, 25860, 3.2, 3.5, 0.997, 0.970, '750x200x285'),
    (8, 'B-18DIR/B-18DIQ', '51 - 70', 79990, 42240, 5, 5.1, 1.548, 1.410, '837x205x296'),
    (8, 'B-24DIR/B-24DIQ', '71 - 100', 97990, 56480, 6.7, 6.8, 2.07, 1.88, '900×310×225');

INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_warm, performance_cold, power_input_cold, power_input_warm, indoor_sizes)
VALUES
    (9, 'B-18UIR/B-18UIQ', '51 - 70', 99990, 70990, 5.1, 5.3, 1.548, 1.410, '837x296x205'),
    (9, 'B-24UIR/B-24UIQ', '71 - 100', 99990, 71490, 6.8, 7.1, 2.07, 1.88, '900x310x225');

INSERT INTO conditioner_models (conditioner_id, name, area, price, promo_price, performance_warm, performance_cold, power_input_cold, power_input_warm, indoor_sizes)
VALUES
    (10, 'B-09SIR/B-09SIQ', '20', 52990, 33990, 2.8, 3.1, 0.795, 0.843, '722x187x290'),
    (10, 'B-12SIR/B-12SIQ', '26 - 35', 59990, 38990, 3.52, 3.81, 1.088, 1.025, '802x189x297'),
    (10, 'B-18SIR/B-18SIQ', '51 - 70', 87990, 61990, 5.3, 5.6, 1.643, 1.542, '965x215x319'),
    (10, 'B-24SIR/B-24SIQ', '71 - 100', 95990, 80990, 7.03, 7.32, 2.51, 2.31, '1080x335x226');
