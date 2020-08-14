<!-- 
    Name: Bruno Surdi Oliveira
    Date: July 2020
    Purpose: lab 7 - This lab will introduce you to string functions and array structure and functions, as well as reinforce HTML form submission and handling output. You will create a survey with 3 questions, collecting 3 responses as text.  
-->

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- using google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Questrial&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

  <title>FunnyGram</title>

  <!-- Adding some style to the form -->
<link rel="stylesheet" href="style.css">
</head>

<body>
  <br>
  <!-- with the logo I added a smile face icon (svg tag) -->
  <h1 id="logo">Welcome to the FunnyGram <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-emoji-smile" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path fill-rule="evenodd" d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683z"/>
  <path d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
</svg></h1>
<h2>The funniest Place in the world. Answer the following questions, <br> We have a surprise for you!! :)</h2>
  <hr><br>

  <!-- Startig the div (container) where the form is inside -->
  <div class="container">
    <!-- Using grid of the bootstrap I will let the form centered -->
    <div class="row">
      <div class="col">
        <!--First column is empty -->
      </div>

      <div class="col-6"> <!--Second column will contain the form -->
        <!-- Form with the action to send the information to php file and method seted to "POST" -->
        <form action="lab7_bruno_surdi_output.php" method="post">
          <!-- Music section Section -->
          <h3 class="tips">What is your favorite music/band right now?</h3><br>
          <div class="input-group input-group-lg">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-lg">Music/Band:</span>
            </div>
            <input type="text" name="music" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
            <!-- name music -->
          </div>
          <br>

          <!-- Animal Section -->
          <h3 class="tips">What is your favorite kind of animal?</h3> <br>
          <div class="input-group input-group-lg">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-lg">Animal:</span>
            </div>
            <input type="text" name="animal" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
            <!-- name animal -->
          </div>
          <br>

          <!-- TV Show Section -->
          <h3 class="tips">What is your favorite TV Show right now?</h3><br>
          <div class="input-group input-group-lg">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-lg">TV Show:</span>
            </div>
            <input type="text" name="tvshow" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
            <!-- name tvshow -->
          </div>


          <br><br>
          <!-- Submit button -->
          <div class="col-auto my-1">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
          </div>
        </form>
      </div> 
      <div class="col"> 
      <!-- thrid column empty -->
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
</body>

</html>