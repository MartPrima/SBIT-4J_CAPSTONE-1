<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Profile</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container-fluid mt-3">
    <div class="card position-relative">
        <div class="card-body">
            <!-- Edit button in upper right corner -->
            <button type="button" class="btn btn-primary position-absolute top-0 end-0 m-3" data-toggle="modal" data-target="#editModal">
                Edit
            </button>

            <h5 class="card-title fw-semibold mb-4">Patient Information</h5>

            <!-- Box for each patient information -->
            <div class="card mb-3">
                <div class="card-body">
                    <strong>ID:</strong> 123
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <strong>Name:</strong> John Doe
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <strong>Age:</strong> 30
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <strong>Gender:</strong> Male
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <strong>Date of Birth:</strong> 1993-01-01
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <strong>Email:</strong> john.doe@example.com
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <strong>Contact Number:</strong> +1234567890
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <strong>Emergency Contact Name:</strong> Jane Doe
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <strong>Emergency Contact Number:</strong> +9876543210
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <strong>Blood Type:</strong> O+
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <strong>Allergies:</strong> Penicillin
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <strong>Medical Conditions:</strong> Asthma
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <strong>Insurance Provider:</strong> XYZ Insurance
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <strong>Insurance Policy Number:</strong> ABC123
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <strong>Primary Care Physician:</strong> Dr. Smith
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <strong>Last Checkup Date:</strong> 2022-01-15
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <strong>Address:</strong> 123 Main St, Cityville
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Patient Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              
