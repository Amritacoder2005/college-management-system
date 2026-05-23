<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color:rgb(169, 211, 239);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .input-box {
            width: 100%;
            margin-bottom: 15px;
        }
        .input-box label {
            display: block;
            font-size: 1rem;
            margin-bottom: 5px;
        }
        .input-box input {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            border-radius: 6px;
            border: 1px solid #ddd;
        }
        #addCourseBtn {
            padding: 10px 20px;
            font-size: 1rem;
            background-color:hsl(253, 93.50%, 48.20%);
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        .course-list {
            margin-top: 20px;
        }
        .course-list ul {
            list-style-type: none;
            padding: 0;
        }
        .course-list li {
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
        }
        .course-list button {
            background-color: red;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
        }
        .back-btn {
            display: block;
            margin: 30px auto;
            width: 200px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            border-radius: 30px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

    </style>
</head>
<body>
    <div class="container">
        <h2 style="color:Blue; text-align:center;text-decoration-line:underline;">Add or Remove Courses</h2>
        <div class="input-box">
            <label for="newCourse" style="font-weight:bold;">Course Name</label>
            <input type="text" id="newCourse" placeholder="Enter the course name">
        </div>
        <button id="addCourseBtn">Add Course</button>
        
        <!-- Course List -->
        <div class="course-list">
            <h3>Existing Courses</h3>
            <ul id="courseList">
                <!-- Dynamic course list will be displayed here -->
            </ul>
        </div>
        <!-- Attractive Back Button -->
        <a href="facultydashboard.php" class="back-btn">Back to Dashboard</a>
        
        <p id="statusMessage" style="color: green; margin-top: 10px;"></p>
    </div>

    <script>
        // Function to update the course list displayed
        function updateCourseList() {
            let courses = JSON.parse(localStorage.getItem('courses')) || [];
            const courseListElement = document.getElementById("courseList");

            // Clear the existing list
            courseListElement.innerHTML = "";

            // Display the courses
            courses.forEach((course, index) => {
                const li = document.createElement("li");
                li.textContent = course;

                // Create delete button for each course
                const deleteButton = document.createElement("button");
                deleteButton.textContent = "Delete";
                deleteButton.onclick = function() {
                    deleteCourse(index);
                };

                // Append delete button to the li
                li.appendChild(deleteButton);
                courseListElement.appendChild(li);
            });
        }

        // Function to delete a course from localStorage
        function deleteCourse(index) {
            let courses = JSON.parse(localStorage.getItem('courses')) || [];
            
            // Remove the course from the list
            courses.splice(index, 1);
            
            // Update localStorage
            localStorage.setItem('courses', JSON.stringify(courses));

            // Update the course list display
            updateCourseList();
        }

        // Handle adding the new course to localStorage
        document.getElementById("addCourseBtn").addEventListener("click", function() {
            var courseName = document.getElementById("newCourse").value.trim();

            if (courseName === "") {
                alert("Please enter a valid course name.");
                return;
            }

            // Retrieve the current courses from localStorage (if any)
            let courses = JSON.parse(localStorage.getItem('courses')) || [];

            // Add the new course
            courses.push(courseName);

            // Save the updated list back to localStorage
            localStorage.setItem('courses', JSON.stringify(courses));

            // Show success message
            document.getElementById("statusMessage").innerText = "Course '" + courseName + "' added successfully!";
            document.getElementById("newCourse").value = "";  // Clear input

            // Update the course list display
            updateCourseList();
        });

        // Initial call to update the course list when the page loads
        window.onload = function() {
            updateCourseList();
        };
    </script>
</body>
</html>
