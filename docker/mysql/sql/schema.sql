USE db_music;

CREATE TABLE artists(
    id CHAR(32),
    name VARCHAR(75),
    active TINYINT(1) DEFAULT 1,
    PRIMARY KEY (id)
) ENGINE=INNODB;

INSERT INTO artists(id, name, active) VALUES('03d6591c-5602-465e-ab86-5f4af7f59b99', 'The Cure', 1)
    ('fd8afcab-0e39-4871-8767-3d7378e75b28', 'General Public', 1),
    ('3dba6537-257d-40b4-8b31-47f47fd698fa', 'Linkin Park', 1);
