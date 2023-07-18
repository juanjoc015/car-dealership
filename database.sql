
CREATE DATABASE CONCESIONARIO;

USE concesionario;

CREATE TABLE voitures (
    id INT AUTO_INCREMENT,
    image_path VARCHAR(255),
    name VARCHAR(255),
    description TEXT,
    year YEAR,
    mileage INT,
    price DECIMAL(10, 2),
    PRIMARY KEY (id)
);

INSERT INTO voitures (image_path, name, description, year, mileage, price)
VALUES ('IMG/w-polo1.2.jpg', 'Volkswagen Polo 1.2 tsi 90 bmt', 'Ce Volkswagen Polo 2009 est un véhicule compact et économe, idéal pour la ville. Il est en bon état et n''a parcouru que 50500 km.', 2009, 50500, 9000);

INSERT INTO voitures (image_path, name, description, year, mileage, price)
VALUES ('IMG/audi-tt.jpg', 'Audi TT 1.8T', 'Voici une superbe Audi TT 2006 avec 120000 km. Une voiture de sport élégante et performante qui offre une expérience de conduite impressionnante.', 2006, 120000, 12000);

INSERT INTO voitures (image_path, name, description, year, mileage, price)
VALUES ('IMG/toyota.jpg', 'TOYOTA C-HR 1.8 HYBRIDE 122', 'Voici une Toyota C-HR 1.8 Hybride 122 de 2017 avec 120000 km. Un véhicule hybride performant offrant confort et économies.', 2017, 120000, 20000);

INSERT INTO voitures (image_path, name, description, year, mileage, price)
VALUES ('IMG/bmw-1.jpg', 'BMW X6 M50d 381 ch A', 'Voici une superbe BMW X6 M50d 381 ch A de 2015 avec 112000 km. Un SUV puissant qui offre confort et performance de haut niveau.', 2015, 112000, 42000);

INSERT INTO voitures (image_path, name, description, year, mileage, price)
VALUES ('IMG/audii-2.jpg', 'AUDI A3 IV SPORTBACK', 'Découvrez la splendide AUDI A3 IVSportback, un concentré de sophistication.cette berline compacte ne manquera pas de captiver tous les regards.', 2020, 44114, 34590);

INSERT INTO voitures (image_path, name, description, year, mileage, price)
VALUES ('IMG/golf.jpg', 'VOLKSWAGEN GOLF VIII', 'Découvrez la nouvelle VOLKSWAGEN GOLF VIII, une berline compacte qui allie style, confort et performances exceptionnelles.', 2022, 40114, 24590);

INSERT INTO voitures (image_path, name, description, year, mileage, price)
VALUES ('IMG/bmw2.jpg', 'BMW Z4 G29', 'Découvrez le BMW Z4 G29, un roadster sportif qui allie élégance et puissance. Avec son design raffiné, Cette voiture offre une expérience de conduite exceptionnelle.', 2015, 112000, 42000);

INSERT INTO voitures (image_path, name, description, year, mileage, price)
VALUES ('IMG/toyota3.jpg', 'TOYOTA YARIS III phase 3', 'La Yaris nouvelle génération, un mélange parfait de design, de fiabilité et de confort pour une expérience de conduite remarquable.', 2019, 25114, 12590);
