@extends('layouts.master')
@section('title')
Hello there
@endsection
@section('head')
<link rel="stylesheet" type="text/css" href="css/timeline.css">
@endsection
@section('content')
    <!-- Contact Section -->
    <section id="contact" class="content-section text-center">
<div class="container">
  <header class="page-header">
    <h3>Take a look at my posts</h3>
  </header>
  <div align="center">
    <button class="btn btn-default filter-button" data-filter="all">Featured</button>
    <button class="btn btn-default filter-button" data-filter="all">Developer</button>
    <button class="btn btn-default filter-button" data-filter="hdpe">Writter</button>
  </div>
  
  <ul class="timeline">
    <li><div class="tldate">Apr 2014</div></li>
    
    <li>
      <div class="tl-circ"></div>
      <div class="timeline-panel">
        <div class="tl-heading">
          <h4>Surprising Headline Right Here</h4>
          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 3 hours ago</small></p>
        </div>
        <div class="tl-body">
          <p>Lorem Ipsum and such.</p>
        </div>
      </div>
    </li>
    
    <li class="timeline-inverted">
      <div class="tl-circ"></div>
      <div class="timeline-panel">
        <div class="tl-heading">
          <h4>Breaking into Spring!</h4>
          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 4/07/2014</small></p>
        </div>
        <div class="tl-body">
          <p>Hope the weather gets a bit nicer...</p>
            
          <p>Y'know, with more sunlight.</p>
        </div>
      </div>
    </li>
    
    <li><div class="tldate">Mar 2014</div></li>
    
    <li>
      <div class="tl-circ"></div>
      <div class="timeline-panel">
        <div class="tl-heading">
          <h4>New Apple Device Release Date</h4>
          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 3/22/2014</small></p>
        </div>
        <div class="tl-body">
          <p>In memory of Steve Jobs.</p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-panel">
        <div class="tl-heading">
          <h4>No icon here</h4>
          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 3/16/2014</small></p>
        </div>
        <div class="tl-body">
          <p>Here you'll find some beautiful photography for your viewing pleasure, courtesy of <a href="http://lorempixel.com/">lorempixel</a>.</p>
          
          <p><img src="http://lorempixel.com/600/300/nightlife/" alt="lorem pixel"></p>
        </div>
      </div>
    </li>
    <li>
      <div class="tl-circ"></div>
      <div class="timeline-panel">
        <div class="tl-heading">
          <h4>Some Important Date!</h4>
          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 3/03/2014</small></p>
        </div>
        <div class="tl-body">
          <p>Write up a quick summary of the event.</p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-panel noarrow">
        <div class="tl-heading">
          <h4>Secondary Timeline Box</h4>
          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 3/01/2014</small></p>
        </div>
        <div class="tl-body">
          <p>This might be a follow-up post with related info. Maybe we include some extra links, tweets, user comments, photos, etc.</p>
        </div>
      </div>
    </li>
    
    <li><div class="tldate">Feb 2014</div></li>
    
    <li class="timeline-inverted">
      <div class="tl-circ"></div>
      <div class="timeline-panel">
        <div class="tl-heading">
          <h4>The Winter Months</h4>
          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 02/23/2014</small></p>
        </div>
        <div class="tl-body">
          <p>Gee time really flies when you're having fun.</p>
        </div>
      </div>
    </li>
    <li>
      <div class="tl-circ"></div>
      <div class="timeline-panel">
        <div class="tl-heading">
          <h4>Yeah we're pretty much done here</h4>
          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 02/11/2014</small></p>
        </div>
        <div class="tl-body">
          <p>Wasn't this fun though?</p>
        </div>
      </div>
    </li>
  </ul>
    </section>
@endsection