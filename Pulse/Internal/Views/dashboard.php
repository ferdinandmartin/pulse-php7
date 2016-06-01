<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <?=$title?> <small><?=$description?></small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> <?=$title?>
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="fa fa-info-circle"></i>  <strong>Like PULSE Framework?</strong> Feedback us in <a href="https://github.com/ferdinandmartin/pulse-php7" class="alert-link">GitHub</a> and get it connected!
        </div>
    </div>
</div>
<!-- /.row -->

    <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Welcome to Pulse Dashboard!</h1>
        <p class="lead">The present and future of online APP developer tools, code and design 10 times faster.</p>
        <p><a class="btn btn-lg btn-success" href="<?=path('addTables')?>" role="button">Create a table</a></p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <div class="circle-icon"><i class="fa fa-flask"></i></div>
          <h2 class="featurette-heading">First. <span class="text-muted">Blow your mind.</span></h2>
          <p>Be creative, design your app, PULSE Framework is all you need to make it real, develope 10 times faster, but, may I say <strong>design</strong> 10 times faster.</p>
          <p><a class="btn btn-primary" href="<?=path('anav')?>" role="button">Explore a navigation menú &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <div class="circle-icon"><i class="fa fa-database"></i></div>
          <h2 class="featurette-heading">Database and views. <span class="text-muted">The pulse.</span></h2>
          <p>With <a href="<?=path('atables')?>">Tables</a> tools you have full control of your database, forms and actions in your APP, create relations and triggers.</p>
          <p><a class="btn btn-primary" href="<?=path('atables')?>" role="button">Explore database &raquo;</a></p>
       </div>
        <div class="col-lg-4">
          <div class="circle-icon"><i class="fa fa-heartbeat"></i></div>
          <h2 class="featurette-heading">Invoke it. <span class="text-muted">Generate your app.</span></h2>
          <p>In one click, all the neccesary files will be generated by PULSE Framework, then you can work on the generated files.</p>
          <p><a class="btn btn-primary" href="<?=path('invoke')?>" role="button">Invoke API &raquo;</a></p>
        </div>
      </div>
      <!-- START THE FEATURETTES -->

      <!--<hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First. <span class="text-muted">Blow your mind.</span></h2>
          <p class="lead">Be creative, design your app, PULSE Framework is all you need to make it real, develope 10 times faster, but, may I say <strong>design</strong> 10 times faster.</p>
        </div>
        <div class="col-md-5">
            <div class="circle-icon"><i class="fa fa-heartbeat"></i></div>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Database and views. <span class="text-muted">You've got the power.</span></h2>
          <p class="lead">With <a href="<?=path('atables')?>">Tables</a> tools you have full control of your database, forms and actions in your APP, create relations and triggers.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <div class="circle-icon"><i class="fa fa-database"></i></div>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <div class="circle-icon"><i class="fa fa-flask"></i></div>
        </div>
      </div>

      <hr class="featurette-divider">-->

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2015 PULSE Framework Version.<?=Pulse\Pulse::VERSION?> &middot;</p>
      </footer>