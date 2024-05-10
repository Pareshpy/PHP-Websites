<?php
// Include the database connection script
include 'connection.php';

// Retrieve form data from the POST request
$enrollment_reference = $_POST['enrollment_reference'] ?? null;
$registration_sought_for = $_POST['registration_sought_for'] ?? null;
$applied_as = $_POST['applied_as'] ?? null;
$exam_cycle = $_POST['exam_cycle'] ?? null;
$fee_paid_by = $_POST['fee_paid_by'] ?? null;
$full_name = $_POST['full_name'] ?? null;
$care_of = $_POST['care_of'] ?? null;
$father_name = $_POST['father_name'] ?? null;
$mother_name = $_POST['mother_name'] ?? null;
$gender = $_POST['gender'] ?? null;
$dob = $_POST['dob'] ?? null;
$marital_status = $_POST['marital_status'] ?? null;
$category = $_POST['category'] ?? null;
$handicapped = $_POST['handicapped'] ?? null;
$ex_serviceman = $_POST['ex_serviceman'] ?? null;
$ews = $_POST['ews'] ?? null;
$religion = $_POST['religion'] ?? null;
$mobile_no = $_POST['mobile_no'] ?? null;
$email = $_POST['email'] ?? null;
$address_line1 = $_POST['address_line1'] ?? null;
$address_line2 = $_POST['address_line2'] ?? null;
$city = $_POST['city'] ?? null;
$state_name = $_POST['state_name'] ?? null;
$pin_code = $_POST['pin_code'] ?? null;
$qualification = $_POST['qualification'] ?? null;
$year_of_passing = $_POST['year_of_passing'] ?? null;
$aadhar_card_no = $_POST['aadhar_card_no'] ?? null;

// Prepare the INSERT query using prepared statements
$query = "INSERT INTO registrations (
    enrollment_reference, registration_sought_for, applied_as, exam_cycle, fee_paid_by, full_name, care_of, father_name, mother_name, gender, dob, marital_status, category, handicapped, ex_serviceman, ews, religion, mobile_no, email, address_line1, address_line2, city, state_name, pin_code, qualification, year_of_passing, aadhar_card_no
) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Prepare the statement
$stmt = $conn->prepare($query);

// Check if the prepared statement was successful
if (!$stmt) {
    die("Preparation failed: " . $conn->error);
}

// Bind the form data to the prepared statement
$stmt->bind_param(
    "sssssssssssssssssssssssssss",
    $enrollment_reference, $registration_sought_for, $applied_as, $exam_cycle, $fee_paid_by, $full_name, $care_of, $father_name, $mother_name, $gender, $dob, $marital_status, $category, $handicapped, $ex_serviceman, $ews, $religion, $mobile_no, $email, $address_line1, $address_line2, city, state_name, pin_code, qualification, year_of_passing, aadhar_card_no
);

// Execute the query and check for success
if ($stmt->execute()) {
    echo "Registration successful!";
} else {
    echo "SQL Error: " . $stmt->error;
}

// Close the prepared statement
$stmt->close();

// Close the database connection
$conn->close();
?>
