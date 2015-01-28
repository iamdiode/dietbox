<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dietbox</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-fixed-top navbar-custom">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Dietbox</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="#intro" class="menulink"><i class="fa fa-home"></i>&nbsp;Home</a></li>
            <li><a href="#howitworks" class="menulink">How it works?</a></li>
            <li><a href="#menu" class="menulink">Menu</a></li>
            <li><a href="#contact" class="menulink">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="contact-no">+91-9840768888</li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <section id="intro">
      <div class="container">
        <div class="row">
          <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item-active">
                  <img src="<?php echo base_url(); ?>images/slides/slide1.jpg" class="img-responsive">
                </div>
                <div class="item">
                  <img src="<?php echo base_url(); ?>images/slides/slide2.jpg" class="img-responsive">
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="howitworks">
      <div class="container">
        <div class="row">
          <img src="<?php echo base_url(); ?>images/diet.jpg" class="img-responsive">
          <img src="<?php echo base_url(); ?>images/howitworks.jpg" class="img-responsive">
        </div>
      </div>
    </section>

    <section id="menu">
      <div class="container">
        <div class="row">
          <img src="<?php echo base_url(); ?>images/menu.jpg" class="img-responsive">
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="col-lg-4">
              <h2>Feedback</h2>		
              <form name="feedback-form" class="form" method="post" action="feedback">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    <input type="text" name="fullname" id="fullname" placeholder="Full Name" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon">@</div>
                    <input type="email" name="email" id="email" placeholder="Email address" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-comments"></i></div>
                    <input type="text" name="subject" id="subject" placeholder="Subject" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                    <textarea name="message" id="message" placeholder="Message" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary btn-block" type="submit">Submit</button>
                </div>
              </form>
            </div>
            <div class="col-lg-6">
            	<span class="pull-right">
            	<h2>Get your free diet analysis</h2>
            	  <form name="enquiry-form" class="form" method="post" action="feedback">
            	    <div class="form-group">
            	      <div class="input-group">
            	        <div class="input-group-addon"><i class="fa fa-user"></i></div>
            	        <input type="text" name="name" id="name" placeholder="Full Name" class="form-control">
            	      </div>
            	    </div>
            	    <div class="form-group">
            	      <div class="input-group">
            	        <div class="input-group-addon">@</div>
            	        <input type="email" name="eqemail" id="eqemail" placeholder="Email address" class="form-control">
            	      </div>
            	    </div>
            	    <div class="form-group">
            	      <div class="input-group">            	        
            	      	<div class="row">
            	      		<div class="col-lg-6">
            	        		<input type="text" name="weight" id="weight" placeholder="Weight" class="form-control">
            	        	</div>
            	        	<div class="col-lg-6">
            	        				<select name="webform_height" class="form-control">
            	                          <option selected="" disabled="" value="">Height</option>
            	                          <option value="55">4' 7"</option>
            	                          <option value="56">4' 8"</option>
            	                          <option value="57">4' 9"</option>
            	                          <option value="58">4' 10"</option>
            	                          <option value="59">4' 11"</option>
            	                          <option value="60">5' 0"</option>
            	                          <option value="61">5' 1"</option>
            	                          <option value="62">5' 2"</option>
            	                          <option value="63">5' 3"</option>
            	                          <option value="64">5' 4"</option>
            	                          <option value="65">5' 5"</option>
            	                          <option value="66">5' 6"</option>
            	                          <option value="67">5' 7"</option>
            	                          <option value="68">5' 8"</option>
            	                          <option value="69">5' 9"</option>
            	                          <option value="70">5' 10"</option>
            	                          <option value="71">5' 11"</option>
            	                          <option value="72">6' 0"</option>
            	                          <option value="73">6' 1"</option>
            	                          <option value="74">6' 2"</option>
            	                          <option value="75">6' 3"</option>
            	                          <option value="76">6' 4"</option>
            	                          <option value="77">6' 5"</option>
            	                          <option value="78">6' 6"</option>
            	                          <option value="79">6' 7"</option>
            	                          <option value="80">6' 8"</option>
            	                          <option value="81">6' 9"</option>
            	                          <option value="82">6' 10"</option>
            	                          <option value="83">6' 11"</option>
            	                          <option value="84">7' 0"</option>
            	                        </select>
            	            </div>
            	        </div>
            	      </div>
            	    </div>
            	    <div class="form-group">
            	      <div class="input-group">            	        
            	      	<div class="row">
            	      		<div class="col-lg-6">
            	        		<input type="text" name="age" id="age" placeholder="Age" class="form-control">
            	        	</div>
            	        	<div class="col-lg-6">
        		                <select name="webform_gender" class="form-control">
				                  <option selected="" disabled="" value="">Gender</option>
				                  <option value="M">Male</option>
				                  <option value="F">Female</option>
				                </select>
            	        	</div>
            	        </div>
            	      </div>
            	    </div>
            	    <div class="form-group">
            	      <button class="btn btn-primary btn-block" type="submit">Get Results</button>
            	    </div>
            	  </form>
            	</span>
            </div>	
           </div>
          </div>          
        </div>
    </section>
    <section>
    	<div class="container">
    		<div class="row">
    			<img src="<?php echo base_url(); ?>images/final.jpg" class="img-responsive">
    		</div>
    	</div>
    </section>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url(); ?>js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(); ?>js/custom.js"></script>
  </body>
</html>