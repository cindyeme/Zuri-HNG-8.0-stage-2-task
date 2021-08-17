<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Name</title>
  <style>
    div{
      padding: 20px;
      text-align: center;
      border: 2px dotted #ff9933;
      border-radius: 5px;
    }
    #printFullname {
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      font-size: 60px;
    }
    .slackName {
      font-family: sans-serif;
      font-size: 20px;
    }
    a {
      font-size: 24px;
      font-family: serif;
    }
  </style>
</head>
<body>
  <!-- Displays name on the browser -->
  <div>
    <h1 id="printFullname"></h1>
    <p class="slackName"></p>
    <a href="resume.php">Resume</a>
  </div>

  <!-- Using JavaScript to display name -->
  <script>
    // gets the element's id and displays name as the content
    const fullName = document.getElementById("printFullname");
    fullName.innerHTML = "Emerenini Cynthia Ngozi";
    // gets element selector name
    const slackName = document.querySelector(".slackName");
    slackName.innerHTML = "@cindy_codes";

    // Display name on console
    const displayName = name => console.log(name);
    displayName("Emerenini Cynthia Ngozi");
  </script>
</body>
</html>