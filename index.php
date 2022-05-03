<?php
$presentTime = new DateTime('now');
$destinationTime = new DateTime('March 12 2042 9:15 PM');
$diff = $presentTime->diff($destinationTime);
$diff = (array) $diff;
$diffInMinutes = ($diff['y'] * 525600) + ($diff['m'] * 43800) + ($diff['d'] * 1440) + ($diff['h'] * 60) + $diff['m'];
$fuel = $diffInMinutes / 10000;
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Back to the Future</title>
    <meta name="description" content="description"/>
    <meta name="author" content="author" />
    <meta name="keywords" content="keywords" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./stylesheet.css" type="text/css" />

  </head>

  <body class="bg-grey">
    <div class="b-example-divider"></div>

  <div class="container px-4 py-5 text-light" id="icon-grid">
    <h2 class="pb-3 border-bottom text-center digital-7 fs-1">Back to the future</h2>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-6 g-4 py-5">
      <div class="col d-flex align-items-start justify-content-center">
        <div>
          <div class="py-2 px-3 bg-danger text-center">
            <h4 class="fw-bold mb-0">Month</h4>
          </div>
          <p class="text-center my-1 digital-7-italic text-danger fs-1 border-time px-2 pb-1 bg-black"><?= $destinationTime->format('M');?></p>
        </div>
      </div>
      <div class="col d-flex align-items-start justify-content-center">
        <div>
          <div class="py-2 px-3 bg-danger text-center">
          <h4 class="fw-bold mb-0">Day</h4>
          </div>
          <p class="text-center my-1 digital-7-italic text-danger fs-1 border-time px-2 pb-1 bg-black"><?= $destinationTime->format('d');?></p>
        </div>
      </div>
      <div class="col d-flex align-items-start justify-content-center">
        <div>
          <div class="py-2 px-3 bg-danger text-center">
          <h4 class="fw-bold mb-0">Year</h4>
          </div>
          <p class="text-center my-1 digital-7-italic text-danger fs-1 border-time px-2 pb-1 bg-black"><?= $destinationTime->format('Y');?></p>
        </div>
      </div>
      <div class="col d-flex align-items-start justify-content-center">
        <div>
          <div class="py-2 px-3 bg-danger text-center">
          <h4 class="fw-bold mb-0">AM/PM</h4>
          </div>
          <p class="text-center my-1 digital-7-italic text-danger fs-1 border-time px-2 pb-1 bg-black"><?= $destinationTime->format('A');?></p>
        </div>
      </div>
      <div class="col d-flex align-items-start justify-content-center">
        <div>
          <div class="py-2 px-3 bg-danger text-center">
          <h4 class="fw-bold mb-0">Hour</h4>
          </div>
          <p class="text-center my-1 digital-7-italic text-danger fs-1 border-time px-2 pb-1 bg-black"><?= $destinationTime->format('h');?></p>
        </div>
      </div>
      <div class="col d-flex align-items-start justify-content-center">
        <div>
          <div class="py-2 px-3 bg-danger text-center">
          <h4 class="fw-bold mb-0">Min</h4>
          </div>
          <p class="text-center my-1 digital-7-italic text-danger fs-1 border-time px-2 pb-1 bg-black"><?= $destinationTime->format('i');?></p>
        </div>
      </div>
    </div>
      <div class="row">
        <div class="col-12 d-flex align-items-center justify-content-center border-bottom">
          <h5 class="digital-7 fs-2">Destination Time</h5>
        </div>
      </div>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-6 g-4 py-5 text-light">
        <div class="col d-flex align-items-start justify-content-center">
          <div>
            <div class="py-2 px-3 bg-danger text-center">
              <h4 class="fw-bold mb-0">Month</h4>
            </div>
            <p class="text-center my-1 digital-7-italic text-success fs-1 border-time px-2 pb-1 bg-black"><?= $presentTime->format('M');?></p>
          </div>
        </div>
        <div class="col d-flex align-items-start justify-content-center">
          <div>
            <div class="py-2 px-3 bg-danger text-center">
            <h4 class="fw-bold mb-0">Day</h4>
            </div>
            <p class="text-center my-1 digital-7-italic text-success fs-1 border-time px-2 pb-1 bg-black"><?= $presentTime->format('d');?></p>
          </div>
        </div>
        <div class="col d-flex align-items-start justify-content-center">
          <div>
            <div class="py-2 px-3 bg-danger text-center">
            <h4 class="fw-bold mb-0">Year</h4>
            </div>
            <p class="text-center my-1 digital-7-italic text-success fs-1 border-time px-2 pb-1 bg-black"><?= $presentTime->format('Y');?></p>
          </div>
        </div>
        <div class="col d-flex align-items-start justify-content-center">
          <div>
            <div class="py-2 px-3 bg-danger text-center">
            <h4 class="fw-bold mb-0">AM/PM</h4>
            </div>
            <p class="text-center my-1 digital-7-italic text-success fs-1 border-time px-2 pb-1 bg-black"><?= $destinationTime->format('A');?></p>
          </div>
        </div>
      <div class="col d-flex align-items-start justify-content-center">
        <div>
          <div class="py-2 px-3 bg-danger text-center">
          <h4 class="fw-bold mb-0">Hour</h4>
          </div>
          <p class="text-center my-1 digital-7-italic text-success fs-1 border-time px-2 pb-1 bg-black"><?= $presentTime->format('h');?></p>
        </div>
      </div>
      <div class="col d-flex align-items-start justify-content-center">
        <div>
          <div class="py-2 px-3 bg-danger text-center">
          <h4 class="fw-bold mb-0">Min</h4>
          </div>
          <p class="text-center my-1 digital-7-italic text-success fs-1 border-time px-2 pb-1 bg-black"><?= $presentTime->format('i');?></p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 d-flex align-items-center justify-content-center border-bottom">
        <h5 class="digital-7 fs-2">Present Time</h5>
      </div>
    </div>

  </div>
  <p class="text-center mt-1 mb-4 digital-7-italic text-light fs-1 border-time px-2 pb-1 bg-black"><?= $diff['y'] . ' years,' . $diff['m'] . ' months, ' . $diff['d'] . ' days, '?></br><?= $diff['h'] . ' hours ' . $diff['i'] . ' minutes ' . $diff['s'] . ' seconds and ' . $diff['f'] . ' milliseconds'; ?></br><?= $fuel . ' liters of fuel needed' ?></p>
</div>
<div class="row">
  <div class="col-12 d-flex align-items-center justify-content-center border-bottom">
    <h5 class="digital-7 fs-2 text-light mb-4">Diffrence between the two above and fuel needed for the time travel</h5>
  </div>
</div>

  </div>
  </div>

  </body>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>
