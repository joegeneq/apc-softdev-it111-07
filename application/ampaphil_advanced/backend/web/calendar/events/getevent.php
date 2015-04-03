
<?php 

try {

    $url = 'mysql:dbname=ampaphil_bms;host=localhost';
    $username = 'root';
    $password = '';

    // Connect to database
    $connection = new PDO($url, $username, $password);

    // Prepare and execute query
    $query = "SELECT * FROM event_details";
    $sth = $connection->prepare($query);
    $sth->execute();

    // Returning array
    $events = array();

    // Fetch results
    while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {

        $e = array();
        $e['title'] = $row['event_name'];
        $e['start'] = $row['event_startdate'];

        // Merge the event array into the return array
        array_push($events, $e);

    }

    // Output json for our calendar
    echo json_encode($events);
    exit();

} catch (PDOException $e){
    echo $e->getMessage();
}

?>