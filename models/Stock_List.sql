DROP DATABASE Stock_List;

CREATE DATABASE IF NOT EXISTS Stock_List;

USE Stock_List;

CREATE TABLE IF NOT EXISTS Vehicle (
model_id INT(10) PRIMARY KEY UNIQUE NOT NULL AUTO_INCREMENT,
make_name VARCHAR(25) NOT NULL,
model_name VARCHAR(25) NOT NULL,
vehicle_price INT(8) NOT NULL,
vehicle_features VARCHAR(500) NOT NULL
);

CREATE TABLE IF NOT EXISTS Stock (
prod_id INT(10) PRIMARY KEY UNIQUE NOT NULL AUTO_INCREMENT,
model_id INT(10),
FOREIGN KEY (model_id) REFERENCES Vehicle(model_id)
);

INSERT INTO Vehicle VALUES 
(1,"Volkswagen","Polo Vivo Hatch", 218100 ,"Front Electric Windows; ISOFIX anchorage points; Immobilizer, with alarm system and interior monitoring; Radio R140G BT/USB/SD; 14 inch steel wheels"),
(2,"Volkswagen","GTI TCR",675700,"Radio Composition Media; 4 alloy wheels Reifnitz 8J x 19, matte black; Adaptive Chassis Control DCC incl.Driving Profile Selection; Tilting and sliding panoramic sunroof, electric; Park assist with park distance control"),
(3,"Volkswagen","Tiguan",503400,"Radio Composition Colour; 17 Montana alloy wheel; Black roof rails; Cruise control system with speed limiter; Multi-function display Plus; Climatic air conditioner"),
(4,"Volkswagen","T-Roc",489400,"Radio Composition Media; 4 alloy wheels Mayfield 7J x 17; Exterior mirrors, power-adjustable, folding and heated, with front passenger exterior mirror lowering function; Park Distance Control - warning signals for obstacles in the front and rear; App-Connect; Voice control"),
(5,"Volkswagen","Caravelle",1166600,"Trailer hitch, removable and lockable; Start-stop system with regenerative braking; Lane change assist; LED headlamps with lens; Cruise control system and speed limiter; Comfort telephony with LTE and wireless charging; 7-speed automatic transmission for four-wheel drive")
;
	
INSERT INTO Stock  VALUES 
(1, (SELECT (model_id) FROM Vehicle WHERE model_id = 1)),
(2, (SELECT (model_id) FROM Vehicle WHERE model_id = 1)),
(3, (SELECT (model_id) FROM Vehicle WHERE model_id = 1)),
(4, (SELECT (model_id) FROM Vehicle WHERE model_id = 2)),
(5, (SELECT (model_id) FROM Vehicle WHERE model_id = 2)),
(6, (SELECT (model_id) FROM Vehicle WHERE model_id = 3)),
(7, (SELECT (model_id) FROM Vehicle WHERE model_id = 3)),
(8, (SELECT (model_id) FROM Vehicle WHERE model_id = 3)),
(9, (SELECT (model_id) FROM Vehicle WHERE model_id = 4)),
(10, (SELECT (model_id) FROM Vehicle WHERE model_id = 5)),
(11, (SELECT (model_id) FROM Vehicle WHERE model_id = 5)),
(12, (SELECT (model_id) FROM Vehicle WHERE model_id = 5)),
(13, (SELECT (model_id) FROM Vehicle WHERE model_id = 5))
;
