<?php
// Simulate a database of members (In a real scenario, you'd query your database)
$members = [
    "141499" => ["name" => "I KADEK DWI ATMAJAYA", "license_number" => "A180168", "status" => "Active"],
 //   "M789101" => ["name" => "Jane Smith", "status" => "Inactive", "membership_type" => "Silver"],
];

// Get the member ID from the URL
$memberID = $_GET['id'] ?? '';

// Look up the member in the database
$member = $members[$memberID] ?? null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Verification</title>
</head>
<body>
    <h1>Member Verification</h1>

    <?php if ($member): ?>
        <p><strong>ID:</strong> <?php echo $memberID; ?></p>
        <p><strong>Name:</strong> <?php echo $member['name']; ?></p>
        <p><strong>License Number:</strong> <?php echo $member['license_number']; ?></p>
        <p><strong>Status:</strong> <?php echo $member['status']; ?></p>
    <?php else: ?>
        <p>Sorry, no member found for this ID.</p>
    <?php endif; ?>

</body>
</html>
