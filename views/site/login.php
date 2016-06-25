<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = Yii::t('app', 'SeeMePly | Home');
?>

<?php 
//   echo Menu::widget([
//     'menu' => [
//         // Important: you need to specify url as 'controller/action',
//         // not just as 'controller' even if default action is used.
//         ['label' => 'Home', 'url' => ['site/index']],
//         // 'Products' menu item will be selected as long as the route is 'product/index'
//         ['label' => 'School Signup', 'url' => ['organization/create'], 'items' => [
//             ['label' => 'Search Schools', 'url' => ['organization/view', 'tag' => 'new']],
//             ['label' => 'register', 'url' => ['user/create', 'tag' => 'popular']],
//         ]],
//         ['label' => 'Login', 'url' => ['site/login'], 'visible' => \Yii::$app->user->isGuest],
//     ],
// ]);

?>
<nav class="navbar navbar-dark bg-inverse bg-inverse-custom navbar-fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <!-- <span class="icon-logo"></span>
          <span class="sr-only">Land.io</span> -->
        </a>
        <a class="navbar-toggler hidden-md-up pull-xs-right" data-toggle="collapse" href="#collapsingNavbar" aria-expanded="false" aria-controls="collapsingNavbar">
        &#9776;
      </a>
        <a class="navbar-toggler navbar-toggler-custom hidden-md-up pull-xs-right" data-toggle="collapse" href="#collapsingMobileUser" aria-expanded="false" aria-controls="collapsingMobileUser">
          <span class="icon-user"></span>
        </a>
        <div id="collapsingNavbar" class="collapse navbar-toggleable-custom" role="tabpanel" aria-labelledby="collapsingNavbar">
          <ul class="nav navbar-nav pull-xs-right">
            <li class="nav-item nav-item-toggable">
<!--               <a class="nav-link" href="./index-carousel.html"><small></small> Slides<span class="sr-only">(current)</span></a> -->


<!-- <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item nav-item-toggable">
               <?= Html::a(Yii::t('app', 'School Signup'), ['organization'], ['class' => 'nav-link']) ?>
              <!-- <a class="" href="#" target="_blank">School Signup</a> --
            </li>
            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="#register" target="_blank">Register</a>
            </li>
            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="#login" target="_blank">Login</a>
            </li>
            <li class="nav-item nav-item-toggable hidden-md-up">
              <form class="navbar-form">
                <input class="form-control navbar-search-input" type="text" placeholder="Type your search &amp; hit Enter&hellip;">
              </form>
            </li>
            <li class="navbar-divider hidden-sm-down"></li>
            <li class="nav-item dropdown nav-dropdown-search hidden-sm-down">
              <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="icon-search"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-search" aria-labelledby="dropdownMenu1">
                <form class="navbar-form">
                  <input class="form-control navbar-search-input" type="text" placeholder="Type your search &amp; hit Enter&hellip;">
                </form>
              </div>
            </li>
            <li class="nav-item dropdown hidden-sm-down textselect-off">
              <a class="nav-link dropdown-toggle nav-dropdown-user" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="images/face5.jpg" height="40" width="40" alt="Avatar" class="img-circle"> <span class="icon-caret-down"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-user dropdown-menu-animated" aria-labelledby="dropdownMenu2">
                <div class="media">
                  <div class="media-left">
                    <img src="images/face5.jpg" height="60" width="60" alt="Avatar" class="img-circle">
                  </div>
                  <div class="media-body media-middle">
                    <h5 class="media-heading">John Fisher</h5>
                    <h6>hey@johnfisher.com</h6>
                  </div>
                </div>
                <a href="#" class="dropdown-item text-uppercase">View Applications</a>
                <a href="#" class="dropdown-item text-uppercase">Manage groups</a>
                <a href="#" class="dropdown-item text-uppercase">Subscription &amp; billing</a>
                <a href="#" class="dropdown-item text-uppercase text-muted">Log out</a>
                <a href="#" class="btn-circle has-gradient pull-xs-right">
                  <span class="sr-only">Edit</span>
                  <span class="icon-edit"></span>
                </a>
              </div>
            </li>
          </ul>
        </div>
        <div id="collapsingMobileUser" class="collapse navbar-toggleable-custom dropdown-menu-custom p-x-1 hidden-md-up" role="tabpanel" aria-labelledby="collapsingMobileUser">
          <div class="media m-t-1">
            <div class="media-left">
              <img src="images/face5.jpg" height="60" width="60" alt="Avatar" class="img-circle">
            </div>
            <div class="media-body media-middle">
              <h5 class="media-heading">John Fisher</h5>
              <h6>hey@johnfisher.com</h6>
            </div>
          </div>
          <a href="#" class="dropdown-item text-uppercase">View Applications</a>
          <a href="#" class="dropdown-item text-uppercase">Manage groups</a>
          <a href="#" class="dropdown-item text-uppercase">Subscription &amp; billing</a>
          <a href="#" class="dropdown-item text-uppercase text-muted">Log out</a>
          <a href="#" class="btn-circle has-gradient pull-xs-right m-b-1">
            <span class="sr-only">Edit</span>
            <span class="icon-edit"></span>
          </a> -->
        </div>
      </div>
    </nav>

    <!-- Hero Section
    ================================================== -->

    <header class="jumbotron bg-inverse text-xs-center center-vertically" role="banner">
      <div class="container">
        <h1 class="display-3">Welcome To SeeMePly</h1>
        <h2 class="m-b-3"> <a href="#" class="jumbolink"></a></h2>

        <!-- <form>
          <div class="row">
            <div class="col-md-2 col-xl-2">
              <div class="form-group has-icon-left ">
                <label class="sr-only" for="inputName">Search School</label>
                <input type="text" class="form-control form-control-lg" id="inputName" placeholder="Search School">
              </div>
            </div>
            
          </div>
          
        </form> -->


        <a class="btn btn-secondary-outline m-b-1" href="#" role="button"><span class="icon-sketch"></span>Search Schools</a>
        <ul class="nav nav-inline social-share">
          <li class="nav-item"><a class="nav-link" href="#"><span class="icon-twitter"></span> </a></li>
          <li class="nav-item"><a class="nav-link" href="#"><span class="icon-facebook"></span></a></li>
          <li class="nav-item"><a class="nav-link" href="#"><span class="icon-linkedin"></span> </a></li>
        </ul>
      </div>
    </header>
    <section class="section-video bg-inverse text-xs-center wp wp-4">
      <h3 class="sr-only">Video</h3>
      <video id="demo_video" class="video-js vjs-default-skin vjs-big-play-centered" controls poster="images/video-poster.jpg" data-setup='{}'>
        <source src="http://vjs.zencdn.net/v/oceans.mp4" type='video/mp4'>
        <source src="http://vjs.zencdn.net/v/oceans.webm" type='video/webm'>
      </video>
    </section>


<!-- Features
    ================================================== -->

    <section class="section-features text-xs-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <div class="card-block">
                <span class="icon-pen display-1"></span>
                <h4 class="card-title"> 250 </h4>
                <h6 class="card-subtitle text-muted">Educational Institutions</h6>
                <p class="card-text">Sed risus feugiat fusce eu sit conubia venenatis aliquet nisl cras eu adipiscing ac cras at sem cras per senectus eu parturient quam.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-block">
                <span class="icon-thunderbolt display-1"></span>
                <h4 class="card-title">Fast</h4>
                <h6 class="card-subtitle text-muted">Apply with a click</h6>
                <p class="card-text">Sed risus feugiat fusce eu sit conubia venenatis aliquet nisl cras eu adipiscing ac cras at sem cras per senectus eu parturient quam.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card m-b-0">
              <div class="card-block">
                <span class="icon-heart display-1"></span>
                <h4 class="card-title">Intuitive</h4>
                <h6 class="card-subtitle text-muted">Search Schools Smartly</h6>
                <p class="card-text">Sed risus feugiat fusce eu sit conubia venenatis aliquet nisl cras eu adipiscing ac cras at sem cras per senectus eu parturient quam.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<section class="section-testimonials text-xs-center bg-inverse">
      <div class="container">
        <h3 class="sr-only">Testimonials</h3>
        <div id="carousel-testimonials" class="carousel slide" data-ride="carousel" data-interval="0">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <blockquote class="blockquote">
                <img src="images/face1.jpg" height="80" width="80" alt="Avatar" class="img-circle">
                <p class="h3">Good design at the front-end suggests that everything is in order at the back-end, whether or not that is the case.</p>
                <footer>Dmitry Fadeyev</footer>
              </blockquote>
            </div>
            <div class="carousel-item">
              <blockquote class="blockquote">
                <img src="images/face2.jpg" height="80" width="80" alt="Avatar" class="img-circle">
                <p class="h3">It’s not about knowing all the gimmicks and photo tricks. If you haven’t got the eye, no program will give it to you.</p>
                <footer>David Carson</footer>
              </blockquote>
            </div>
            <div class="carousel-item">
              <blockquote class="blockquote">
                <img src="images/face3.jpg" height="80" width="80" alt="Avatar" class="img-circle">
                <p class="h3">There’s a point when you’re done simplifying. Otherwise, things get really complicated.</p>
                <footer>Frank Chimero</footer>
              </blockquote>
            </div>
            <div class="carousel-item">
              <blockquote class="blockquote">
                <img src="images/face4.jpg" height="80" width="80" alt="Avatar" class="img-circle">
                <p class="h3">Designing for clients that don’t appreciate the value of design is like buying new tires for a rental car.</p>
                <footer>Joel Fisher</footer>
              </blockquote>
            </div>
            <div class="carousel-item">
              <blockquote class="blockquote">
                <img src="images/face5.jpg" height="80" width="80" alt="Avatar" class="img-circle">
                <p class="h3">Every picture owes more to other pictures painted before than it owes to nature.</p>
                <footer>E.H. Gombrich</footer>
              </blockquote>
            </div>
          </div>
          <ol class="carousel-indicators">
            <li class="active"><img src="images/face1.jpg" alt="Navigation avatar" data-target="#carousel-testimonials" data-slide-to="0" class="img-fluid img-circle"></li>
            <li><img src="images/face2.jpg" alt="Navigation avatar" data-target="#carousel-testimonials" data-slide-to="1" class="img-fluid img-circle"></li>
            <li><img src="images/face3.jpg" alt="Navigation avatar" data-target="#carousel-testimonials" data-slide-to="2" class="img-fluid img-circle"></li>
            <li><img src="images/face4.jpg" alt="Navigation avatar" data-target="#carousel-testimonials" data-slide-to="3" class="img-fluid img-circle"></li>
            <li><img src="images/face5.jpg" alt="Navigation avatar" data-target="#carousel-testimonials" data-slide-to="4" class="img-fluid img-circle"></li>
          </ol>
        </div>
      </div>
    </section>

    <!-- <!-- Text Content
    ================================================== -

    <section class="section-text">
      <div class="container">
        <h3 class="text-xs-center">Make your mark on the product industry</h3>
        <div class="row p-y-3">
          <div class="col-md-5">
            <p class="wp wp-7">A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>
          </div>
          <div class="col-md-5 col-md-offset-2 separator-x">
            <p class="wp wp-8">A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>
          </div>
        </div>
      </div>
    </section> -->

    <!-- News
    ================================================== -->

    <section class="section-news">
      <div class="container">
        <h3 class="sr-only">News</h3>
        <div class="bg-inverse">
          <div class="row">
            <div class="col-md-6 p-r-0">
              <figure class="has-light-mask m-b-0 image-effect">
                <img src="https://images.unsplash.com/photo-1442328166075-47fe7153c128?q=80&fm=jpg&w=1080&fit=max" alt="Article thumbnail" class="img-fluid">
              </figure>
            </div>
            <div class="col-md-6 p-l-0">
              <article class="center-block">
                <span class="label label-info">Featured article</span>
                <br>
                <h5><a href="#">Design studio with product designer Peter Finlan <span class="icon-arrow-right"></span></a></h5>
                <p class="m-b-0">
                  <a href="#"><span class="label label-default text-uppercase"><span class="icon-tag"></span> Design Studio</span></a>
                  <a href="#"><span class="label label-default text-uppercase"><span class="icon-time"></span> 1 Hour Ago</span></a>
                </p>
              </article>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-md-push-6 p-l-0">
              <figure class="has-light-mask m-b-0 image-effect">
                <img src="https://images.unsplash.com/photo-1434394673726-e8232a5903b4?q=80&fm=jpg&w=1080&fit=max" alt="Article thumbnail" class="img-fluid">
              </figure>
            </div>
            <div class="col-md-6 col-md-pull-6 p-r-0">
              <article class="center-block">
                <span class="label label-info">Featured article</span>
                <br>
                <h5><a href="#">How bold, emotive imagery can connect with your audience <span class="icon-arrow-right"></span></a></h5>
                <p class="m-b-0">
                  <a href="#"><span class="label label-default text-uppercase"><span class="icon-tag"></span> Design Studio</span></a>
                  <a href="#"><span class="label label-default text-uppercase"><span class="icon-time"></span> 1 Hour Ago</span></a>
                </p>
              </article>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <!-- <!-- Sign Up
    ================================================== 

    <section class="section-signup bg-faded">
      <div class="container">
        <h3 class="text-xs-center m-b-3">Sign up to receive free updates as soon as they hit!</h3>
        <form>
          <div class="row">
            <div class="col-md-6 col-xl-3">
              <div class="form-group has-icon-left form-control-name">
                <label class="sr-only" for="inputName">Your name</label>
                <input type="text" class="form-control form-control-lg" id="inputName" placeholder="Your name">
              </div>
            </div>
            <div class="col-md-6 col-xl-3">
              <div class="form-group has-icon-left form-control-email">
                <label class="sr-only" for="inputEmail">Email address</label>
                <input type="email" class="form-control form-control-lg" id="inputEmail" placeholder="Email address" autocomplete="off">
              </div>
            </div>
            <div class="col-md-6 col-xl-3">
              <div class="form-group has-icon-left form-control-password">
                <label class="sr-only" for="inputPassword">Enter a password</label>
                <input type="password" class="form-control form-control-lg" id="inputPassword" placeholder="Enter a password" autocomplete="off">
              </div>
            </div>
            <div class="col-md-6 col-xl-3">
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Sign up for free!</button>
              </div>
            </div>
          </div>
           <label class="c-input c-checkbox">
            <input type="checkbox" checked>
            <span class="c-indicator"></span> I agree to Land.io’s <a href="#">terms of service</a>
          </label> 
        </form>
      </div>
    </section> 
 -->
    <!-- Footer
    ================================================== -->

    <footer class="section-footer bg-inverse" role="contentinfo">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-5">
            <div class="media">
              <div class="media-left">
                <!-- <span class="media-object icon-logo display-1"></span> -->
              </div>
              <small class="media-body media-bottom">
                &copy; See Me Ply 2016. <br>
                Designed and Developed by David
              </small>
            </div>
          </div>
          <div class="col-md-6 col-lg-7">
            <ul class="nav nav-inline">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item"><a class="nav-link" href="#">About</a></li>
              <li class="nav-item"><?= Html::a(Yii::t('app', 'ADD'), ['create'], ['class' => 'btn btn-block btn-success nav-link']) ?></li>
              <li class="nav-item"><a class="nav-link scroll-top" href="#totop">Back to top <span class="icon-caret-up"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
<div id ="#login">
<div class="login-box">
      <div class="login-logo">
		&nbsp;
      </div><!-- /.login-logo -->
      <div class="login-box-body login-header">
		<h1><?= Html::img(Yii::$app->request->baseUrl.'/images/product.png', ['width'=>'150px;']) ?></h1>
      </div>
      <div class="login-box-body">
  	
        <p class="login-box-msg"><?php echo Yii::t('app', 'Please fill out the following fields to login') ?></p>
	<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
          <div class="form-group has-feedback">
	     <?= $form->field($model, 'username')->textInput(['placeholder'=>Yii::t('app', 'Username'), 'class'=>'form-control'])->label(false) ?>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
	    <?= $form->field($model, 'password')->passwordInput(['class'=>'form-control', 'placeholder'=>Yii::t('app', 'Password')])->label(false) ?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-7">    
              <div class="checkbox icheck">
		<?= $form->field($model, 'rememberMe')->checkbox() ?>
              </div>                        
            </div><!-- /.col -->
            <div class="col-xs-5">
	      <?= Html::submitButton(Yii::t('app', 'Login'), ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
            </div><!-- /.col -->
          </div>
       <?php ActiveForm::end(); ?>

        <!--a href="#">I forgot my password</a--><br>
      </div><!-- /.login-box-body -->
      <?php if(\Yii::$app->session->hasFlash('loginError')) : ?>
	    <div class="alert alert-danger alert-dismissible" style="margin-top: 5%;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span></button>
		<?php echo \Yii::$app->session->getFlash('loginError'); ?>
	    </div>
       <?php endif; ?>
    </div><!-- /.login-box -->
  </div>


 















