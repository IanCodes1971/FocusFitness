<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Focus Fitness Home Page</title>
    <link rel="stylesheet" type="text/css" href="FitnessPrimeStyles.css">
    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
        }

        header {
            background-color: #007bff;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        #mainContent {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #indexTable {
            margin-top: 20px;
        }

        #indexTable table {
            width: 100%;
            border-collapse: collapse;
        }

        #indexTable th,
        #indexTable td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        #indexTable th {
            background-color: #f5f5f5; /* Background color on header row */
            color: #333;
            font-weight: bold; /* Making the header row text bold */
        }

        #indexTable td a {
            color: #007bff;
            text-decoration: none;
        }

        #indexTable td a:hover {
            text-decoration: underline;
        }

        footer {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        footer p {
            margin: 5px 0;
        }

        /* Style for Settings icon */
        #settingsIcon {
            position: absolute;
            top: 20px;
            right: 20px;
            cursor: pointer;
            color: #fff;
            font-size: 24px;
        }
    </style>
</head>
<body>
<header>
    <h1>Focus Fitness Home Page</h1>
</header>

<!-- Icon for Settings -->
<span id="settingsIcon"><i class="fas fa-cog"></i></span>

<div id="mainContent">
    <div id="indexTable">
        <table>
            <thead>
            <tr>
                <th colspan="2">Links to Other Pages</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <a href="display_exercises.php" style="background-color: #007bff; color: #fff; padding: 5px 10px; border-radius: 5px;">Workouts</a>
                </td>
                <td>Click here to view workouts</td>
            </tr>
            <tr>
                <td>
                    <a href="Progress.html" style="background-color: #007bff; color: #fff; padding: 5px 10px; border-radius: 5px;">Progress Chart</a>
                </td>
                <td>Click here to be taken to progress tracking</td>
            </tr>
            <!-- Settings row removed -->
            <tr>
                <td>
                    <a href="Nutrition.html" style="background-color: #007bff; color: #fff; padding: 5px 10px; border-radius: 5px;">Nutrition</a>
                </td>
                <td>Click here to view nutrition information</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<footer>
    <p>&copy; Rob Hartigan, Tyler Lambert, Ian Cassini</p>
    <p>For help call 585-385-8022 or email FocusFitness.help@gmail.com</p>
</footer>
</body>
</html>
