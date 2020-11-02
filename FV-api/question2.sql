SELECT bookings.driver_id,
(SELECT COUNT(bookings.state) FROM bookings WHERE bookings.state = 'COMPLETED' AND bookings.driver_id = drivers.driver_id) AS number_of_completed_rides,
(SELECT COUNT(bookings.state) FROM bookings WHERE bookings.state LIKE '%CANCELLED%' AND bookings.driver_id = drivers.driver_id) AS number_of_cancelled_rides,
(SELECT COUNT(DISTINCT bookings.passenger_id) FROM bookings WHERE bookings.state = 'COMPLETED' AND bookings.driver_id = drivers.driver_id) AS number_of_unique_passenger,
(SELECT SUM(bookings.fare) FROM bookings WHERE bookings.driver_id = drivers.driver_id) AS total_fare,
(SELECT (total_fare*0.2 )) AS total_commision
FROM bookings
LEFT JOIN drivers
ON bookings.driver_id = drivers.driver_id
WHERE drivers.email LIKE '%fvtaxi%' OR drivers.email LIKE '%fvdrive%'
GROUP BY drivers.driver_id
HAVING number_of_completed_rides > 0 AND number_of_unique_passenger < 5
ORDER BY number_of_completed_rides DESC
