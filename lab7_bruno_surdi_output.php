<!-- 
    Name: Bruno Surdi Oliveira
    Date: July 2020
    Purpose: lab 7 - This lab will introduce you to string functions and array structure and functions, as well as reinforce HTML form submission and handling output. You will create a survey with 3 questions, collecting 3 responses as text. 
-->

<!-- the pre tag is used to preformat the text - it will display exactly as written in the HTML code -->
<pre>
  <!-- A quick way to view the content of POST is to use PHP function var_dumb() -->
<?php
    // var_dump($_POST); 

    // Loop over the post array
    foreach($_POST as $key => $val) {
      // Sanitize your incoming data with htmlentities()
      $cleaned[$key] = htmlentities($val);

      // assign the existing key and value to a new clean array
      $cleanedArray[$key] = $cleaned[$key];
    }
    echo '<hr>';
?>
</pre>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>FunnyGram</title>

    <!-- using google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

    <!-- Adding some styles -->
  <link rel="stylesheet" href="styleOutput.css">
  </head>

  <body>
    <h1 id="logo">Let's have some fun with <br> string and array function!! YAAAAY <svg id="heart" class="bi bi-heart-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" clip-rule="evenodd"/></svg></h1>
    <div class="container"> <!-- container div -->
      <div class="row"> <!-- row div -->

        <div class="col"> <!-- first column div -->
        <!-- Empty! just to allign the content to the center of the page (grid) -->
        </div> <!-- End first column -->

        <div class="col-6"> <!-- second column div -->
        <h2>String functions are soooo fun!!!</h2>

          <div class="container">
            <div class="row">
              <div class="col-6" id="special"> <br>
              <?php 
              // STRING FUNCTIONS
              // Before the functions, display the cleanedArray without changes - using foreach
                foreach($cleanedArray as $key => $val) {
                  echo "Before: $key : $val <br><br>"; 
                }
              ?>
              </div>
              <div class="col-6" id="special2"> <br>
                <?php 
                  // After changes: strrev() - Reverse a string - for example blue - it returns eulb
                  echo 'After with strrev(): ' . strrev($cleanedArray['music']) . '<br><br>';
                  // After changes: str_rot13() - Perform the rot13 transform on a string - The ROT13 encoding simply shifts every letter by 13 places in the alphabet while leaving non-alpha characters untouched.
                  echo 'After with str_rot13(): ' . str_rot13($cleanedArray['music']) . '<br><br>';
                  // After changes: metaphone() - Calculate the metaphone key of a string - metaphone creates the same key for similar sounding words. The metaphone generated keys are of variable length.
                  echo 'After with metaphone(): ' . metaphone($cleanedArray['tvshow']) . '<br>';
                ?>
                <br>  
              </div><br><br>  
            </div>
            <div class="row"><br>
            <!-- ARRAY FUNCTIONS -->
            <h2>Array functions are amazing too!! YAAAAY, that is so funny! :)</h2>
              <div class="col-6">BEFORE array: <br>
                <?php
                  // Array before any change
                  echo '<pre>';
                  print_r($cleanedArray);
                  echo '</pre><br><br>';
                  echo 'BEFORE array: <pre>';
                  print_r($cleanedArray);
                  echo '</pre><br><br>';
                  echo 'BEFORE array: <pre>';
                  print_r($cleanedArray);
                  echo '</pre>';
                ?>
              </div>
              <div class="col-6">AFTER array function rsort(): <br>
                <?php
                  // Array afet rsort() - Sort an array in reverse order
                  echo '<pre>';
                  // Create other arry with the cleanedArray to apply the reversed order
                  $toBeReversed = $cleanedArray;
                  rsort($toBeReversed);
                  print_r($toBeReversed);
                  echo '</pre><br>';

                  // array_slice() - Extract a slice of the array (show after index 1)
                  echo 'AFTER array function array_slice() - everything since index 1: <pre>';
                  $arraySlice = array_slice($cleanedArray,1);
                  print_r($arraySlice);
                  echo '</pre><br>';

                  // array_merge() - Merge one or more arrays ($toBeReversed and $cleanedArray)
                  echo 'AFTER array function array_merge() - merge the original array and the array with the reversed order results: <pre>';
                  $arrayMerge = array_merge($cleanedArray, $toBeReversed);
                  print_r($arrayMerge);
                  echo '</pre>';
                ?>
              </div>
            </div>
          </div>
        </div> <!-- End div second collumn -->

        <div class="col"> <!-- third column div -->
        <!-- Empty! just to allign the content to the center of the page (grid) -->
        </div> <!-- End third column div -->

      </div><br> <!-- End row div -->
    </div> <!-- End container div -->
    <br><br>

    <!-- Third div "Answers" -->
          <!-- We will return all the cleaned answers entered by the user (assigned with the method $_POST[''] (inside of [''] is the name given in the input on the HTML file)) -->
          <div id="answers" class="alert alert-warning" role="alert">
            Your favorite band/music is: <?php echo $cleanedArray['music']. '<br>' ?>
            Your favorite animal is: <?php echo $cleanedArray['animal']. '<br>' ?>
            Your favorite Tv Show: <?php echo $cleanedArray['tvshow']. '<br>' ?>
          </div> <!-- End third div -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>