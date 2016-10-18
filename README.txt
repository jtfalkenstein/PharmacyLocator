********************************************************************************
Pharmacy Locator
********************************************************************************
-- What does it do? --

Pharmacy Locator is a http web service that will receive a set of latitude/longitude
coordinates and return the nearest pharmacy in the database.


-- How does it work? --
All requests should be directed at index.php. All requests must have two query string
parameters, "lat" and "lon". These are the latitude and longitude of the center
of the search area.

An example request could be http://your.domain.name?lat=39.006321&lon=-94.549463

-- How does it respond? --
Responses are in JSON format. Each response will always have at least one property, 
"status," which will have one of two possible values: "success" or "exception."

If the status is "success," there will be a "data" property which will have the 
following properties: name, address, city, state, and distance. Distance is the 
distance "as the crow flies" in miles from the base coordinates, rounded to the nearest
tenth of a mile.

-- Technologies used: --
*SqLite for database. I chose this as it's easily distributable and the size of the
dataset was very small. It is access

*PHP-DI for dependency injection. It is installed via Composer. I chose this because
I wanted to decouple the application in the areas where it counted, specifically
in the way configurations, database access, and output serialization is used.
Even though I chose SqLite for this particular application, it would be very possible
to swap out the single SqlitePharmacyRepo class with a different class that implements
IPharmacyRepo (say, one that uses MySql), and everything would still work. The only
change needed would be a change in mapping in the definition file.



--Necessary configuration: --
*There is a config file (config/config.php) that provides some basic configuration
for the repository I'm using.

*There is a dependency injection definitions configuration file that maps the 
specific interfaces with implementations.

*While the sqlite database has been included (pharmacies.db), it could be started
from scratch using the included sql script (sql/install-pharmacies.sql).

-- System Requirements --
* PHP 7.0 with the sqlite module enabled.

While this project uses Composer to manage the dependency on PHP-DI, all necessary
files have been included in this package.