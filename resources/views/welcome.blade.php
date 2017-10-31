@extends('layouts.master')
@section('title')
Hello there
@endsection
@section('content')
    <!-- Intro Header -->
    <header class="masthead">
      <div class="intro-body">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h1 class="brand-heading">Syamlal CM</h1>
              <h5>Developer | Writter</h5>
              <p class="intro-text">Discover who I am as a person aside of the above mentioned</p>
              <a href="#about" class="btn btn-circle js-scroll-trigger">
                <i class="fa fa-angle-double-down animated"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- About Section -->
    <section id="about" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>About me</h2>
            <p>I am a person who born in a small beautifull village Parambath in God's own country.
            </p>
          </div>
        </div>
      </div>
    <a href="#skills" class="btn btn-circle js-scroll-trigger">
      <i class="fa fa-angle-double-down animated"></i>
    </a>
    </section>
 <!-- Skills Section -->
    <section id="skills" class="download-section content-section text-center">
        <!-- Page Content -->
     <div class="container">

        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="gallery-title">Skills</h1>
        </div>

        <div align="center">
            <button class="btn btn-default filter-button" data-filter="all">Developer</button>
            <button class="btn btn-default filter-button" data-filter="hdpe">Writter</button>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="card bg-light mb-3" style="max-width: 20rem;">
                  <div class="card-header bg-secondary"><i class="fa fa-code fa-fw"></i> PHP</div>
                  <div class="card-footer font-black">
<i class="fa fa-star"></i>&nbsp&nbsp&nbsp<i class="fa fa-star"></i>&nbsp&nbsp&nbsp<i class="fa fa-star"></i>&nbsp&nbsp&nbsp<i class="fa fa-star"></i>&nbsp&nbsp&nbsp
<i class="fa fa-star-o"></i>
                  </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card bg-light mb-3" style="max-width: 20rem;">
                  <div class="card-header bg-secondary"><i class="fa fa-code fa-fw"></i> PHP</div>
                  <div class="card-footer font-black">star</div>
            </div>
          </div>
        </div>
    </div>
    <a href="#projects" class="btn btn-circle js-scroll-trigger">
      <i class="fa fa-angle-double-down animated"></i>
    </a>

    </section>
   


    <!-- Projects Section -->
    <section id="projects" class="download-section content-section text-center">
        <!-- Page Content -->
     <div class="container">

        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="gallery-title">floYET</h1>
            <p>floYET is my company I have been developing for mutiple solutions.It is sub branched into categories where specific branches control different types of solutions.</p>
        </div>


        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>ARIV</h2>
                <p>Learning solutions under floYET are managed by ARIV. 
              <a href="http://www.codeariv.com">CodeARIV</a> | <a href="http://www.devariv.com">DevARIV</a> | | <a href="http://www.tutariv.com">TutARIV</a> | <a href="http://www.kerariv.com">KerARIV</a></p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Vyapari</h2>
            <p>Ecommerce platform under floYET are managed by Vyapari section.
            <br>
            <a href="http://www.nexofarm.com">NexoFarm</a> | <a href="http://www.tinkleteddy.com">TinkleTeddy</a></p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Samooh</h2>
            <p>Social Networking platforms under floYET are managed here.<br>
            <a href="http://www.comontra.com">Comontra</a> | <a href="http://www.napsat.in">Napsat</a></p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


    </div>
    <a href="#contact" class="btn btn-circle js-scroll-trigger">
      <i class="fa fa-angle-double-down animated"></i>
    </a>
    </section>

    

    <!-- Contact Section -->
    <section id="contact" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Contact Me</h2>
            <p>It have been so much fun to share different thoughts together and also the cultures and languages.Also, if you've got some feedback or just want to say hi, feel free to say g'day.</p>


            <div class="row">
              <div class="col-md-4">
                <div class="card bg-light mb-3 ">
                  <div class="card-header bg-secondary"><i class="fa fa-envelope fa-fw"></i> Email</div>
                  <div class="card-footer font-black">syamjayaraj@gmail.com</div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card bg-light mb-3">
                  <div class="card-header bg-secondary"><i class="fa fa-skype fa-fw"></i> Skype</div>
                  <div class="card-footer font-black">syamjayaraj</div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card bg-light mb-3">
                  <div class="card-header bg-secondary"><i class="fa fa-phone fa-fw"></i> Phone</div>
                  <div class="card-footer font-black">+91-9496342650</div>
                </div>
              </div>
            </div>
            <br><br>
{{--             <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                  <input type="email" class="form-control" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control" placeholder="Message" rows="4"></textarea>
              </div>
              <button type="submit" class="btn btn-default">Send</button>
            </form>
            <br> --}}
            You can also connect me through any of the following social networking service.
            <br><br>
            <ul class="list-inline banner-social-buttons">
              <li class="list-inline-item">
                <a href="https://facebook.com/syamjayaraj" class="btn-sm btn-default btn-lg">
                  <i class="fa fa-facebook fa-fw"></i>
                  <span class="network-name">Facebook</span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://twitter.com/syamjayaraj" class="btn-sm btn-default btn-lg">
                  <i class="fa fa-twitter fa-fw"></i>
                  <span class="network-name">Twitter</span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.linkedin.com/in/syamjayaraj" class="btn-sm btn-default btn-lg">
                  <i class="fa fa-linkedin fa-fw"></i>
                  <span class="network-name">LinkedIn</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
@endsection