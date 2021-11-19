DROP TABLE If EXISTS images;
CREATE TABLE images(
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    img VARCHAR(255),
    price DECIMAL(10, 2)
);

INSERT INTO images VALUES
    (DEFAULT, 'Title 1', 'Description 1', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 2', 'Description 2', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 3', 'Description 3', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 4', 'Description 4', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 5', 'Description 5', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 6', 'Description 6', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 7', 'Description 7', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 8', 'Description 8', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 9', 'Description 9', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 10', 'Description 10', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 11', 'Description 11', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 12', 'Description 12', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 13', 'Description 13', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 14', 'Description 14', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 15', 'Description 15', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 16', 'Description 16', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 17', 'Description 17', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 18', 'Description 18', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 19', 'Description 19', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 20', 'Description 20', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 21', 'Description 21', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 22', 'Description 22', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 23', 'Description 23', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 24', 'Description 24', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 25', 'Description 25', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 26', 'Description 26', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 27', 'Description 27', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 28', 'Description 28', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 29', 'Description 29', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 30', 'Description 30', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 31', 'Description 31', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 32', 'Description 32', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 33', 'Description 33', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 34', 'Description 34', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 35', 'Description 35', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 36', 'Description 36', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 37', 'Description 37', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 38', 'Description 38', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 39', 'Description 39', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 40', 'Description 40', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 41', 'Description 41', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 42', 'Description 42', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 43', 'Description 43', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 44', 'Description 44', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 45', 'Description 45', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 46', 'Description 46', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 47', 'Description 47', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 48', 'Description 48', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 49', 'Description 49', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 50', 'Description 50', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 51', 'Description 51', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 52', 'Description 52', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 53', 'Description 53', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 54', 'Description 54', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 55', 'Description 55', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 56', 'Description 56', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 57', 'Description 57', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 58', 'Description 58', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 59', 'Description 59', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 60', 'Description 60', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 61', 'Description 61', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 62', 'Description 62', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 63', 'Description 63', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 64', 'Description 64', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 65', 'Description 65', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 66', 'Description 66', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 67', 'Description 67', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 68', 'Description 68', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 69', 'Description 69', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 70', 'Description 70', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 71', 'Description 71', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 72', 'Description 72', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 73', 'Description 73', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 74', 'Description 74', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 75', 'Description 75', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 76', 'Description 76', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 77', 'Description 77', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 78', 'Description 78', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 79', 'Description 79', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 80', 'Description 80', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 81', 'Description 81', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 82', 'Description 82', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 83', 'Description 83', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 84', 'Description 84', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 85', 'Description 85', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 86', 'Description 86', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 87', 'Description 87', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 88', 'Description 88', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 89', 'Description 89', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 90', 'Description 90', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 91', 'Description 91', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 92', 'Description 92', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 93', 'Description 93', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 94', 'Description 94', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 95', 'Description 95', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 96', 'Description 96', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 97', 'Description 97', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 98', 'Description 98', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 99', 'Description 99', 'https://via.placeholder.com/150', 52.52),
    (DEFAULT, 'Title 100', 'Description 100', 'https://via.placeholder.com/150', 52.52);
