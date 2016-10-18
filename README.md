#Pharmacy Locator

##What is this?
This was a coding challenge presented to me as part of a job application I did. 
The challenge was to create a web api that, given a set of latitude/longitude 
coordinates, would search for the closest pharmacy in the database and provide
a response with information about the pharmacy, including its distance.


##What does it do?

Pharmacy Locator is a http web service that will receive a set of latitude/longitude
coordinates and return the nearest pharmacy in the database.


##How does it work?
All requests should be directed at index.php. All requests must have two query string
parameters, "lat" and "lon". These are the latitude and longitude of the center
of the search area.

An example request could be http://your.domain.name?lat=39.006321&lon=-94.549463

##How does it respond?
Responses are in JSON format. Each response will always have at least one property, 
"status," which will have one of two possible values: "success" or "exception."

If the status is "success," there will be a "data" property which will have the 
following properties: name, address, city, state, and distance. Distance is the 
distance "as the crow flies" in miles from the base coordinates, rounded to the nearest
tenth of a mile.

If the status is "exception," there will also be an "exceptionMessage" property 
that will provide some further indication of the problem. It will NOT, however,
leak any sensitive information. 

##Technologies used:
*   SqLite for database. I chose this as it's easily distributable and the size of the
dataset was very small. It is accessed using php's PDO library.
*   PHP-DI for dependency injection. It is installed via Composer. I chose this because
I wanted to decouple the application in the areas where it counted, specifically
in the way configurations, database access, and output serialization are used.
Even though I chose SqLite for this particular application, it would be very possible
to swap out the single SqlitePharmacyRepo class with a different class that implements
IPharmacyRepo (say, one that uses MySql), and everything would still work. The only
change needed would be a change in mapping in the definition file.

##How has it been secured?
*   There is a global exception handler in the application class that prevents unhandled
exceptions from bubbling up and being reported to the user. Of course, PHP usually 
suppresses exceptions being reported in production environments, but I took the extra
step of ensuring that only desired information is reported to the user.
*   Input parameters from the query string are sanitized and validated as floating 
point numbers. This is done using PHP's input filtering functions. If they are not
validated, an exception is thrown and reported in the response.
*   DB access is accomplished using PHP's PDO library in a way that prevents SQL 
injection of the query string parameters.

##Necessary configuration:
*   There is a config file (config/config.php) that provides some basic configuration
for the repository I'm using.
*   There is a dependency injection definitions configuration file that maps the 
specific interfaces with implementations.
*   While the sqlite database has been included (pharmacies.db), it could be started
from scratch using the included sql script (sql/install-pharmacies.sql).

##System Requirements
*   PHP 7.0^ with the sqlite module enabled.
