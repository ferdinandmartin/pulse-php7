<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <?=$title?> <small><?=$description?></small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-heartbeat"></i> <?=$title?>
            </li>
        </ol>
    </div>
</div>

<div class="jumbotron">
    <div class="container">
      <h1><?=$name?></h1>
      <p>Invocation result notes:</p>
      <div class="alert alert-success" role="alert"><?=$flash['message']?></div>
      <p>You can customize your own invocations in <code>/Pulse/Invocations</code> and load it in <code>/Pulse/Procedures/Default/Default.php</code>.</p>
      <p><a class="btn btn-lg btn-success" href="<?=basePath()?>" role="button">Visit Home</a></p>
    </div>
  </div>
<!-- /.row -->

<hr>

<footer>
  <p>&copy; 2015 PULSE Framework Version.<?=Pulse\Pulse::VERSION?></p>
</footer>