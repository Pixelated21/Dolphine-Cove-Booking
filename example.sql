INSERT INTO programs
(programme_name, programme_cost,capacity, excursion_date)
VALUES ('Swimming',5000,50,now());

INSERT INTO guest_types
(guest_type)
VALUES ('Walk-In');

INSERT INTO guest_types
(guest_type)
VALUES ('Tour-Company');

INSERT INTO entity_types
(entity_type)
VALUES ('Guest');

INSERT INTO entity_types
(entity_type)
VALUES ('Tour Company');



INSERT INTO programs
(programme_name, programme_cost,capacity, excursion_date)
VALUES ('Dolphin Diving',10000,30,now());

INSERT INTO programs
(programme_name, programme_cost,capacity, excursion_date)
VALUES ('SkyDiving',8000,40,now());

INSERT INTO payment_types
(payment_type)
VALUES ('Credit');

INSERT INTO payment_types
(payment_type)
VALUES ('Cash');

INSERT INTO hotels
(hotel_name)
VALUES ('Grand_Palladium_Hotel');

INSERT INTO hotels
(hotel_name)
VALUES ('Sandals');

INSERT INTO tour_companies
(company_name, credit_amt, created_at, updated_at)
VALUES ('Tour Extreme',0,now(),now());

INSERT INTO tour_companies
(company_name, credit_amt, created_at, updated_at)
VALUES ('Tour Sane',0,now(),now());

INSERT INTO tour_companies
(company_name, credit_amt, created_at, updated_at)
VALUES ('Tour Low',0,now(),now());
