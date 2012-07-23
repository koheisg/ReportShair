<?php
require '../include/facebook.php';

$facebook = new Facebook(array(
  'appId'  => '261278050649489',
  'secret' => 'e61b025986cb5dc50e9216d9c803d525',
));

$user = $facebook->getUser();

if ($user) {
  try {
    // Proceed knowing you have a logged in user who's authenticated.
    $user_profile = $facebook->api('/me');
  } catch (FacebookApiException $e) {
    error_log($e);
    $user = null;
  }
}

$logoutUrl = $loginUrl = NULL;

if ($user) {
  $logoutUrl = $facebook->getLogoutUrl();
} else {
  $loginUrl = $facebook->getLoginUrl();
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Report name &lsaquo; ReportShair</title>
<link rel="stylesheet" href="../css/screen.css" media="screen" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="../js/app.js"></script>
</head>

<body class="report">
<?php include('../partials/header.php'); ?>
<div class="container">
  <div class="wrap inner">
    <div class="content col grid-24">
      <div class="contentHead">
        <h1>Latest reports</h1>
        <span>1000 reports</span>
      </div>
      <div class="contentBody row">
        <article class="col grid-8">
          <div class="box">
            <div class="image">
              <a href="./reports/detail.php"><img src="../img/report-1.png" width="312px" height="207px" /></a>
            </div>
            <div class="meta">
              <a href="./reports/detail.php">RedTrash</a>
            </div>
          </div>
        </article>
        <article class="col grid-8">
          <div class="box">
            <div class="image">
              <a href="./reports/detail.php"><img src="../img/report-2.png" width="312px" height="207px" /></a>
            </div>
            <div class="meta">
              <a href="./reports/detail.php">Bigbeach fes 2012</a>
            </div>
          </div>
        </article>
        <article class="col grid-8">
          <div class="box">
            <div class="image">
              <a href="./reports/detail.php"><img src="../img/report-3.png" width="312px" height="207px" /></a>
            </div>
            <div class="meta">
              <a href="./reports/detail.php">Metamorphose2012</a>
            </div>
          </div>
        </article>
        <article class="col grid-8">
          <div class="box">
            <div class="image">
              <a href="./reports/detail.php"><img src="../img/report-1.png" width="312px" height="207px" /></a>
            </div>
            <div class="meta">
              <a href="./reports/detail.php">RedTrash</a>
            </div>
          </div>
        </article>
        <article class="col grid-8">
          <div class="box">
            <div class="image">
              <a href="./reports/detail.php"><img src="../img/report-2.png" width="312px" height="207px" /></a>
            </div>
            <div class="meta">
              <a href="./reports/detail.php">Bigbeach fes 2012</a>
            </div>
          </div>
        </article>
        <article class="col grid-8">
          <div class="box">
            <div class="image">
              <a href="./reports/detail.php"><img src="../img/report-3.png" width="312px" height="207px" /></a>
            </div>
            <div class="meta">
              <a href="./reports/detail.php">Metamorphose2012</a>
            </div>
          </div>
        </article>
        <article class="col grid-8">
          <div class="box">
            <div class="image">
              <a href="./reports/detail.php"><img src="../img/report-1.png" width="312px" height="207px" /></a>
            </div>
            <div class="meta">
              <a href="./reports/detail.php">RedTrash</a>
            </div>
          </div>
        </article>
        <article class="col grid-8">
          <div class="box">
            <div class="image">
              <a href="./reports/detail.php"><img src="../img/report-2.png" width="312px" height="207px" /></a>
            </div>
            <div class="meta">
              <a href="./reports/detail.php">Bigbeach fes 2012</a>
            </div>
          </div>
        </article>
        <article class="col grid-8">
          <div class="box">
            <div class="image">
              <a href="./reports/detail.php"><img src="../img/report-3.png" width="312px" height="207px" /></a>
            </div>
            <div class="meta">
              <a href="./reports/detail.php">Metamorphose2012</a>
            </div>
          </div>
        </article>
        <article class="col grid-8">
          <div class="box">
            <div class="image">
              <a href="./reports/detail.php"><img src="../img/report-1.png" width="312px" height="207px" /></a>
            </div>
            <div class="meta">
              <a href="./reports/detail.php">RedTrash</a>
            </div>
          </div>
        </article>
        <article class="col grid-8">
          <div class="box">
            <div class="image">
              <a href="./reports/detail.php"><img src="../img/report-2.png" width="312px" height="207px" /></a>
            </div>
            <div class="meta">
              <a href="./reports/detail.php">Bigbeach fes 2012</a>
            </div>
          </div>
        </article>
        <article class="col grid-8">
          <div class="box">
            <div class="image">
              <a href="./reports/detail.php"><img src="../img/report-3.png" width="312px" height="207px" /></a>
            </div>
            <div class="meta">
              <a href="./reports/detail.php">Metamorphose2012</a>
            </div>
          </div>
        </article>
        <article class="col grid-8">
          <div class="box">
            <div class="image">
              <a href="./reports/detail.php"><img src="../img/report-1.png" width="312px" height="207px" /></a>
            </div>
            <div class="meta">
              <a href="./reports/detail.php">RedTrash</a>
            </div>
          </div>
        </article>
        <article class="col grid-8">
          <div class="box">
            <div class="image">
              <a href="./reports/detail.php"><img src="../img/report-2.png" width="312px" height="207px" /></a>
            </div>
            <div class="meta">
              <a href="./reports/detail.php">Bigbeach fes 2012</a>
            </div>
          </div>
        </article>
        <article class="col grid-8">
          <div class="box">
            <div class="image">
              <a href="./reports/detail.php"><img src="../img/report-3.png" width="312px" height="207px" /></a>
            </div>
            <div class="meta">
              <a href="./reports/detail.php">Metamorphose2012</a>
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>
</div>
<?php include('../partials/footer.php'); ?>
</body>
</html>