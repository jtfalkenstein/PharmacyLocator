SELECT 
    id, 
    name, 
    address, 
    city, 
    state, 
    zip, 
    distance(latitude, longitude, :lat, :lon) AS distance
FROM pharmacies
ORDER BY distance;
LIMIT 1;