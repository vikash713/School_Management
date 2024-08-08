<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Layout</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        
        body {
            background-color: #f0f2f5;
        }
        .card-img-top {
            height: 180px;
        }
        .card {
            background-color: #ffffff;
            border: 1px solid #ddd; 
        }
        .card-body {
            padding: 1.25rem;
        }
    </style>
</head>
<body>
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 100%;">
                    <svg class="bd-placeholder-img card-img-top" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
                        <title>Placeholder</title>
                        <!-- Background color for Students Detail card image -->
                        <rect width="100%" height="100%" fill="#17a2b8"></rect>
                        <text x="30%" y="50%" fill="#dee2e6" dy=".3em">Students Detail</text>
                    </svg>
                    <div class="card-body">
                        <h5 class="card-title">Students Detail</h5>
                        <p class="card-text">Click below to view the student details.</p>
                        <a href="./student_display.php" class="btn btn-primary">Click here</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 100%;">
                    <svg class="bd-placeholder-img card-img-top" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
                        <title>Placeholder</title>
                        <!-- Background color for Course Details card image -->
                        <rect width="100%" height="100%" fill="#fd7e14"></rect>
                        <text x="30%" y="50%" fill="#dee2e6" dy=".3em">Teachers Detail</text>
                    </svg>
                    <div class="card-body">
                        <h5 class="card-title">Teachers Details</h5>
                        <p class="card-text">Click below to view the Teachers details.</p>
                        <a href="./teacher_display.php" class="btn btn-primary">Click here</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 100%;">
                    <svg class="bd-placeholder-img card-img-top" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
                        <title>Placeholder</title>
                        <!-- Background color for Subscription Details card image -->
                        <rect width="100%" height="100%" fill="#20c997"></rect>
                        <text x="30%" y="50%" fill="#dee2e6" dy=".3em">Course Details</text>
                    </svg>
                    <div class="card-body">
                        <h5 class="card-title">Course Details</h5>
                        <p class="card-text">Click below to view the Course details.</p>
                        <a href="./course_detail.php" class="btn btn-primary">Click here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
