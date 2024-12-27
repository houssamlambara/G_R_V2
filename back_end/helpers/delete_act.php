<?php
// delete_activity.php
require_once('../../db.php');
$database = new Database();
$conn = $database->getConnection();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the activity ID from the POST request
    $activity_id = $_POST['id'];

    // Prepare the delete query
    $query = "DELETE FROM ACTIVITES WHERE id_activite = ?";
    $stmt = $conn->prepare($query);

    // Bind the activity ID to the query
    $stmt->bindParam(1, $activity_id);

    // Execute the query and check if the deletion was successful
    if ($stmt->execute()) {
        // Redirect back to the list of activities or show a success message
        header("Location: ../../front_end/activite.php"); // Adjust the redirect page as needed
        exit();
    } else {
        // If the deletion failed
        echo "Failed to delete activity.";
    }
}
?>
