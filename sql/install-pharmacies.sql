BEGIN TRANSACTION;
CREATE TABLE pharmacies(
    id          INTEGER PRIMARY KEY AUTOINCREMENT,
    name        TEXT    NOT NULL,
    address     TEXT    NOT NULL,
    city        TEXT    NOT NULL,
    state       TEXT    NOT NULL,
    zip         INTEGER NOT NULL,
    latitude    REAL    NOT NULL,
    longitude   REAL    NOT NULL
);
INSERT INTO `pharmacies` (id,name,address,city,state,zip,latitude,longitude) VALUES (1,'WALGREENS','3696 SW TOPEKA BLVD','TOPEKA','KS',66611,39.001423,-95.68695);
INSERT INTO `pharmacies` (id,name,address,city,state,zip,latitude,longitude) VALUES (2,'KMART PHARMACY','1740 SW WANAMAKER ROAD','TOPEKA','KS',66604,39.03504,-95.7587);
INSERT INTO `pharmacies` (id,name,address,city,state,zip,latitude,longitude) VALUES (3,'CONTINENTAL PHARMACY LLC','821 SW 6TH AVE','TOPEKA','KS',66603,39.05433,-95.68453);
INSERT INTO `pharmacies` (id,name,address,city,state,zip,latitude,longitude) VALUES (4,'STORMONT-VAIL RETAIL PHARMACY','2252 SW 10TH AVE.','TOPEKA','KS',66604,39.05167,-95.70534);
INSERT INTO `pharmacies` (id,name,address,city,state,zip,latitude,longitude) VALUES (5,'DILLON PHARMACY','2010 SE 29TH ST','TOPEKA','KS',66605,39.016384,-95.65065);
INSERT INTO `pharmacies` (id,name,address,city,state,zip,latitude,longitude) VALUES (6,'WAL-MART PHARMACY','1501 S.W. WANAMAKER ROAD','TOPEKA','KS',66604,39.03955,-95.76459);
INSERT INTO `pharmacies` (id,name,address,city,state,zip,latitude,longitude) VALUES (7,'KING PHARMACY','4033 SW 10TH AVE','TOPEKA','KS',66604,39.05121,-95.727);
INSERT INTO `pharmacies` (id,name,address,city,state,zip,latitude,longitude) VALUES (8,'HY-VEE PHARMACY','12122 STATE LINE RD','LEAWOOD','KS',66209,38.907753,-94.60801);
INSERT INTO `pharmacies` (id,name,address,city,state,zip,latitude,longitude) VALUES (9,'JAYHAWK PHARMACY AND PATIENT SUPPLY','2860 SW MISSION WOODS DR','TOPEKA','KS',66614,39.015053,-95.77866);
INSERT INTO `pharmacies` (id,name,address,city,state,zip,latitude,longitude) VALUES (10,'PRICE CHOPPER PHARMACY','3700 W 95TH ST','LEAWOOD','KS',66206,38.95792,-94.628815);
INSERT INTO `pharmacies` (id,name,address,city,state,zip,latitude,longitude) VALUES (11,'AUBURN PHARMACY','13351 MISSION RD','LEAWOOD','KS',66209,38.885345,-94.628);
INSERT INTO `pharmacies` (id,name,address,city,state,zip,latitude,longitude) VALUES (12,'CVS PHARMACY','5001 WEST 135 ST','LEAWOOD','KS',66224,38.88323,-94.64518);
INSERT INTO `pharmacies` (id,name,address,city,state,zip,latitude,longitude) VALUES (13,'SAMS PHARMACY','1401 SW WANAMAKER ROAD','TOPEKA','KS',66604,39.041603,-95.764626);
INSERT INTO `pharmacies` (id,name,address,city,state,zip,latitude,longitude) VALUES (14,'CVS PHARMACY','2835 SW WANAMAKER RD','TOPEKA','KS',66614,39.015503,-95.76434);
INSERT INTO `pharmacies` (id,name,address,city,state,zip,latitude,longitude) VALUES (15,'HY-VEE PHARMACY','2951 SW WANAMAKER RD','TOPEKA','KS',66614,39.012157,-95.76394);
INSERT INTO `pharmacies` (id,name,address,city,state,zip,latitude,longitude) VALUES (16,'TALLGRASS PHARMACY','601 SW CORPORATE VIEW','TOPEKA','KS',66615,39.05716,-95.76692);
INSERT INTO `pharmacies` (id,name,address,city,state,zip,latitude,longitude) VALUES (17,'HUNTERS RIDGE PHARMACY','3405 NW HUNTERS RIDGE TER STE 200','TOPEKA','KS',66618,39.129845,-95.712654);
INSERT INTO `pharmacies` (id,name,address,city,state,zip,latitude,longitude) VALUES (18,'ASSURED PHARMACY','11100 ASH ST STE 200','LEAWOOD','KS',66211,38.926632,-94.64744);
INSERT INTO `pharmacies` (id,name,address,city,state,zip,latitude,longitude) VALUES (19,'WALGREENS','4701 TOWN CENTER DR','LEAWOOD','KS',66211,38.91619,-94.640366);
INSERT INTO `pharmacies` (id,name,address,city,state,zip,latitude,longitude) VALUES (20,'PRICE CHOPPER PHARMACY','1100 SOUTH 7 HWY','BLUE SPRINGS','MO',64015,39.02931,-94.27175);
INSERT INTO `pharmacies` (id,name,address,city,state,zip,latitude,longitude) VALUES (21,'CVS PHARMACY','1901 WEST KANSAS STREET','LIBERTY','MO',64068,39.24385,-94.44961);
INSERT INTO `pharmacies` (id,name,address,city,state,zip,latitude,longitude) VALUES (22,'MARRS PHARMACY','205 RD MIZE ROAD','BLUE SPRINGS','MO',64014,39.02353,-94.260605);
INSERT INTO `pharmacies` (id,name,address,city,state,zip,latitude,longitude) VALUES (23,'WAL-MART PHARMACY','600 NE CORONADO DRIVE','BLUE SPRINGS','MO',64014,39.024193,-94.25503);
INSERT INTO `pharmacies` (id,name,address,city,state,zip,latitude,longitude) VALUES (24,'WAL-MART PHARMACY','10300 E HWY 350','RAYTOWN','MO',64133,38.983765,-94.459305);
INSERT INTO `pharmacies` (id,name,address,city,state,zip,latitude,longitude) VALUES (25,'HY-VEE PHARMACY','9400 E. 350 HIGHWAY','RAYTOWN','MO',64133,38.993,-94.47083);
INSERT INTO `pharmacies` (id,name,address,city,state,zip,latitude,longitude) VALUES (26,'HY-VEE PHARMACY','625 W 40 HWY','BLUE SPRINGS','MO',64014,39.010704,-94.27108);
INSERT INTO `pharmacies` (id,name,address,city,state,zip,latitude,longitude) VALUES (27,'HY-VEE PHARMACY','109 NORTH BLUE JAY DRIVE','LIBERTY','MO',64068,39.245758,-94.44702);
INSERT INTO `pharmacies` (id,name,address,city,state,zip,latitude,longitude) VALUES (28,'WALGREENS','1701 NW HIGHWAY 7','BLUE SPRINGS','MO',64015,39.037548,-94.27153);
INSERT INTO `pharmacies` (id,name,address,city,state,zip,latitude,longitude) VALUES (29,'WALGREENS','9300 E GREGORY BLVD','RAYTOWN','MO',64133,38.995342,-94.4734);
INSERT INTO `pharmacies` (id,name,address,city,state,zip,latitude,longitude) VALUES (30,'WALGREENS','1191 W KANSAS AVE','LIBERTY','MO',64068,39.24387,-94.441864);
COMMIT;
