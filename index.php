<!-- Created by: Aden Rao -->
<!-- Created on: Tuesday, July 30, 2019 -->
<!-- This file is all the html for this page and it calls the other php files for things like the navbar, head, footer and scripts -->

<!DOCTYPE html>
<html lang="en">

<head>

<?php include 'includes/head.php' ;?>

</head>

<body>

<!-- Navbar file -->
<?php include 'includes/navbar.php' ;?>

  <header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-0">The Largest Public Companies</h1>
        <h2 class="masthead-subheading mb-0">Sorted By Market Cap</h2>
        <a href="#down" class="btn btn-primary btn-xl rounded-pill mt-5">Show List</a>
      </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
  </header>


<div id="down" class="row mt-2">
  <div class="col-12 text-center mt-2">
    <h3 style="font-size:70px;">List of the Companies:</h3>
    <p style="font-size:30px;">*All prices are USD and in billions*</p>
  </div>
</div>
<div class="row mt-3">
  <div class="col-12 text-center mt-3">
    <h3 style="font-size:60px;">1.</h3>
    <p style="font-size:30px;">Microsoft (MSFT): 1,044.2</p>
  </div>
</div>
<div class="row mt-0">
  <div class="col-12 text-center mt-0">
    <h3 style="font-size:60px;">2.</h3>
    <p style="font-size:30px;">Apple (AAPL): 980.2</p>
  </div>
</div>
<div class="row mt-0">
  <div class="col-12 text-center mt-0">
    <h3 style="font-size:60px;">3.</h3>
    <p style="font-size:30px;">Amazon.com (AMZN): 923.4</p>
  </div>
</div>
<div class="row mt-0">
  <div class="col-12 text-center mt-0">
    <h3 style="font-size:60px;">4.</h3>
    <p style="font-size:30px;">Alphabet (GOOGL): 844.2</p>
  </div>
</div>
<div class="row mt-0">
  <div class="col-12 text-center mt-0">
    <h3 style="font-size:60px;">5.</h3>
    <p style="font-size:30px;">Facebook (FB): 554.1</p>
  </div>
</div>
<div class="row mt-0">
  <div class="col-12 text-center mt-0">
    <h3 style="font-size:60px;">6.</h3>
    <p style="font-size:30px;">Berkshire Hathaway (BRK.A): 504.3</p>
  </div>
</div>
<div class="row mt-0">
  <div class="col-12 text-center mt-0">
    <h3 style="font-size:60px;">7.</h3>
    <p style="font-size:30px;">Alibaba (BABA): 450.7</p>
  </div>
</div>
<div class="row mt-0">
  <div class="col-12 text-center mt-0">
    <h3 style="font-size:60px;">8.</h3>
    <p style="font-size:30px;">Visa (V): 386.8</p>
  </div>
</div><div class="row mt-0">
  <div class="col-12 text-center mt-0">
    <h3 style="font-size:60px;">9.</h3>
    <p style="font-size:30px;">JPMorgan Chase (JPM): 386.8</p>
  </div>
</div><div class="row mt-0">
  <div class="col-12 text-center mt-0">
    <h3 style="font-size:60px;">10.</h3>
    <p style="font-size:30px;">Johnson & Johnson (JNJ): 343.7</p>
  </div>
</div>

<!-- Footer -->
<?php include 'includes/footer.php' ;?> 

<!-- Bootstrap core JavaScript -->
<?php include 'includes/scripts.php' ;?>
</body>

</html>