-- television
CREATE TABLE cecs470g6.tv_roles (
    project VARCHAR(30) NOT NULL,
    roles VARCHAR(30) NOT NULL,
    prod_dir VARCHAR(30) NOT NULL,
    PRIMARY KEY (project, roles));
INSERT INTO cecs470g6.tv_roles (project, roles, prod_dir) VALUES
    ("Criminal Minds", "Co-Star", "CBS");

-- film
CREATE TABLE cecs470g6.film_roles (
    project VARCHAR(30) NOT NULL,
    roles VARCHAR(30) NOT NULL,
    prod_dir VARCHAR(30) NOT NULL,
    PRIMARY KEY (project, roles));
INSERT INTO cecs470g6.film_roles (project, roles, prod_dir) VALUES
    ("Love and Miss Lily", "Lead", "Baird Entertainment"),
    ("Kra Magaga", "Lead", "Brian Lang"),
    ("Being Doug", "Supporting", "Chapman Thesis Project"),
    ("The Best Bet", "Lead", "Parker/Larson Prod"),
    ("Unicorn City", "Supporting", "Deep Studios"),
    ("Schindler's List (Adapt.)", "Lead", "Jacob Schwarz");

-- theater
CREATE TABLE cecs470g6.theater_roles (
    project VARCHAR(30) NOT NULL,
    roles VARCHAR(30) NOT NULL,
    theater VARCHAR(30) NOT NULL,
    PRIMARY KEY (project, roles));
INSERT INTO cecs470g6.theater_roles (project, roles, theater) VALUES
    ("The Merchant of Venice", "Jessica", "Loose Leaf Theater Co."),
    ("Pygmalion", "Mrs. Pearce", "TE San Pedro Rep"),
    ("The Children's Hour", "Martha", "Newport Arts Center"),
    ("Eurydice", "Eurydice", "FEDATS Fringe Festival"),
    ("To Kill a Mockingbird", "Mayella", "Hale Center Theater"),
    ("The Turn of the Screw", "The Governess", "Covey Center for the Arts");

-- industrials
CREATE TABLE cecs470g6.industrial_roles (
    project VARCHAR(30) NOT NULL,
    roles VARCHAR(30) NOT NULL,
    prod_dir VARCHAR(30) NOT NULL,
    PRIMARY KEY (project, roles));
INSERT INTO cecs470g6.industrial_roles (project, roles, prod_dir) VALUES
    ("Cox Communications", "Cox Employee", "David Clair"),
    ("LinkedIn", "Office Worker", "Mike George");

-- training
CREATE TABLE cecs470g6.training (
    location VARCHAR(30) NOT NULL,
    type_of_training VARCHAR(30) NOT NULL,
    instructor VARCHAR(30) NOT NULL,
    PRIMARY KEY (location, type_of_training));
INSERT INTO cecs470g6.training (location, type_of_training, instructor) VALUES
    ("Upright Citizens Brigade", "Improv Program Graduate", "Lindsey Lefler"),
    ("BGB Studio", "Acting Core", "Steve Braun"),
    ("Perry/Reece Casting", "Scene Study", "Amy Reece"),
    ("Yale School of Drama", "Acting Intensive", "Blake Hackler"),
    ("BYU", "BFA", "Barta Heiner");

-- SKILLS, going to have multivalued attributes. I.E:
-- dialects: british, cockney, southern, irish, etc.
-- dance: jazz, ballet, modern
CREATE TABLE cecs470g6.skills (
    skill_type VARCHAR(20) NOT NULL,
    skill VARCHAR(20) NOT NULL,
    PRIMARY KEY(skill_type, skill));
INSERT INTO cecs470g6.skills (skill_type, skill) VALUES
    ("Dialects", "Standard British"), ("Dialects", "Cockney"), ("Dialects", "American Southern"), ("Dialects", "Irish"),
    ("Dialects", "French"), ("Dialects", "German"), ("Dialects", "Brooklyn"),
    ("Stage Combat", "Hand to Hand"), ("Stage Combat", "Broad Sword"),
    ("Dance", "Jazz"), ("Dance", "Ballet"), ("Dance", "Modern");

<<<<<<< HEAD
CREATE TABLE cecs470g6.dialects (
    dialect VARCHAR(20),
    PRIMARY KEY(dialect));
INSERT INTO cecs470g6.dialects (dialect) VALUES
    ("Standard British"), ("Cockney"), ("American Southern"),
    ("Irish"), ("French"), ("German"), ("Brooklyn");

CREATE TABLE cecs470g6.stage_combat (
    ctype VARCHAR(20),
    PRIMARY KEY(ctype));
INSERT INTO cecs470g6.stage_combat (ctype) VALUES
    ("Hand to Hand"), ("Broad Sword");

CREATE TABLE cecs470g6.dance (
    dtype VARCHAR(20),
    PRIMARY KEY(dtype));
INSERT INTO cecs470g6.dance (dtype) VALUES
    ("Jazz"), ("Ballet"), ("Modern");

CREATE TABLE cecs470g6.dialects (
    dialect VARCHAR(20),
    PRIMARY KEY(dialect));
INSERT INTO cecs470g6.dialects (dialect) VALUES
    ("Standard British"), ("Cockney"), ("American Southern"),
    ("Irish"), ("French"), ("German"), ("Brooklyn");

CREATE TABLE cecs470g6.stage_combat (
    ctype VARCHAR(20),
    PRIMARY KEY(ctype));
INSERT INTO cecs470g6.stage_combat (ctype) VALUES
    ("Hand to Hand"), ("Broad Sword");

CREATE TABLE cecs470g6.dance (
    dtype VARCHAR(20),
    PRIMARY KEY(dtype));
INSERT INTO cecs470g6.dance (dtype) VALUES
    ("Jazz"), ("Ballet"), ("Modern");


-- DROP TABLE cecs470g6.tv_roles;
-- DROP TABLE cecs470g6.film_roles;
-- DROP TABLE cecs470g6.theater_roles;
-- DROP TABLE cecs470g6.industrial_roles;
-- DROP TABLE cecs470g6.training;
-- DROP TABLE cecs470g6.skills;
-- DROP TABLE cecs470g6.dialects;
-- DROP TABLE cecs470g6.stage_combat;
-- DROP TABLE cecs470g6.dance;
--
SELECT * FROM cecs470g6.tv_roles;
SELECT * FROM cecs470g6.film_roles;
SELECT * FROM cecs470g6.theater_roles;
SELECT * FROM cecs470g6.industrial_roles;
SELECT * FROM cecs470g6.training;
SELECT * FROM cecs470g6.skills;
SELECT * FROM cecs470g6.dialects;
SELECT * FROM cecs470g6.stage_combat;
SELECT * FROM cecs470g6.dance;
