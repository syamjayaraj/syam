@extends('layouts.master')
@section('title')
Hello there
@endsection
@section('head')
<link rel="stylesheet" type="text/css" href="css/timeline.css">
@endsection
@section('content')
    <!-- Contact Section -->
<section id="blog" class="content-section text-center">
<div class="container">
  <header class="page-header">
    <h4>Take a look at my posts as a writter</h4>
  </header>
  
  <ul class="timeline">
    <li><div class="tldate">Sep 2017</div></li>
    
    <li>
      <div class="tl-circ"></div>
      <div class="timeline-panel">
        <div class="tl-heading">
          <h4>വീണ്ടും മുളച്ചിടും</h4>
          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 12/9/2017</small></p>
        </div>
          <div class="tl-body">
          <p class="font-black">വെട്ടി മുറിച്ചൊരാ വേരിൻ തരിമ്പിൽ<br> 
          നിന്നുറ്റി വീണാ വൊരിറ്റു നീരിൻ<br><br>

          തണുപ്പു പറ്റിയൊരു പുതു  പൊൻ<br>
          വിത്തു മുളച്ചു മൊട്ടിട്ടു പൂവായ് തൻ<br><br>

          കായിട്ടു കുറ്റിയുറപ്പുള്ള മട്ടു മരമായ്<br>
          ആ കാകന്റെ കൈകൾ തൻ  ശാപമായ്<br><br>

          മാറിയ വിഷത്തിൻ മറു പടിയായ്<br>
          കൊടും പ്രതിഷേധം അല കടലാടിടും<br><br>

          #RIP_Gouri_Lankesh</p>
        </div>
      </div>
    </li>
    
    <li class="timeline-inverted">
      <div class="tl-circ"></div>
      <div class="timeline-panel">
        <div class="tl-heading">
          <h4>ഒരു ഇന്ത്യൻ പൗരൻ</h4>
          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 10/9/2017</small></p>
        </div>
        <div class="tl-body">
          <p class="font-black">ഇന്ത്യൻ നീതി ന്യായ വ്യവസ്ഥക്ക്  ചെറിയൊരു മാറ്റം അനിവാര്യമാണെന്നാണ് എന്റെ അഭിപ്രായം

          "ആയിരം കുറ്റവാളികൾ രക്ഷപ്പെട്ടാലും ഒരു നിരപരാധി പോലും ശിക്ഷിക്കപ്പെടരുത്"
          എന്നത് മാറ്റി,

          "ആയിരവും, ലക്ഷവും, കോടിയും വരുന്ന ഇന്ത്യയിലെ ഓരോ ജീവന്റെയും, ജീവിതങ്ങളുടെയും നന്മക്കായി
          ഒരു കുറ്റവാളി പോലും രക്ഷപ്പെടരുത്"
          എന്നാക്കേണ്ടിയിരിക്കുന്നു.

          ഓരോ തിരഞ്ഞെടുപ്പിനും ഒരുപാട് പ്രതീക്ഷകളുമായി മുടങ്ങാതെ  വോട്ട് രേഖപ്പെടുത്തുന്ന ഒരു ഇന്ത്യൻ പൗരൻ.</p>
        </div>
      </div>
    </li>
    

    
    <li>
      <div class="tl-circ"></div>
      <div class="timeline-panel">
        <div class="tl-heading">
          <h4>മടിയൻ</h4>
          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 10/9/2017</small></p>
        </div>
        <div class="tl-body">
          <p class="font-black">ആകാശക്കോട്ടയിലെ മണി മെത്തയിൽ കിടന്നു മുകളിലേക്ക് നോക്കിയപ്പോൾ ഞാൻ ഭൂമിയെക്കാളും, ഭൂമിയിലെ മറ്റുള്ളവരെക്കാളും  ഉയരത്തിലാണെന്നു തോന്നി.

          എന്നാൽ ഒരു കാറ്റിൽ തുറന്ന ജനലിലൂടെ താഴെ ഭൂമിയിലേക്ക് നോക്കിയപ്പോൾ അവിടെ വെറും ഒരു പുഴു ആണ് ഞാൻ എന്ന് ബോധ്യമായി.

          കറുത്തിരുണ്ട മേഘങ്ങൾ എന്റെ കാഴ്ച വീണ്ടും ഇല്ലാതാക്കി.

          മേഘങ്ങൾക്ക് മുകളിൽ സ്വപ്നം കൊണ്ട് കൊട്ടാരം തീർത്തു ഞാൻ വീണ്ടും കാത്തിരുന്നു.</p>
        </div>
      </div>
    </li>
    <li><div class="tldate">July 2017</div></li>

    <li class="timeline-inverted">
      <div class="tl-circ"></div>
      <div class="timeline-panel">
        <div class="tl-heading">
          <h4>മംഗല്യം</h4>
          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 9/7/2017</small></p>
        </div>
        <div class="tl-body">
          <p class="font-black">മനുഷ്യനായ് ജനിച്ചു പോയ്<br> 
              മതങ്ങളും കുടിച്ചു പോയ്<br> <br> 

              മറച്ചു വെച്ചു മോഹവും<br> 
              മുഖത്തു തേച്ചു ചായവും<br> <br> 

              അടക്കി ഉള്ള് കല്ലിനാൽ<br> 
              ഇളക്കി കൈകൾ പാവപോൽ<br> <br> 

              നിലച്ചു പോയ്‌ ഒഴുക്കുകൾ<br> 
              അകന്നു  മാറി ജീവനും<br> <br> 

              പറിച്ചു നട്ട തൈകളിൽ<br> 
              മുളച്ചു പൊങ്ങി വിത്തുകൾ<br> <br> 

              ഒടിഞ്ഞു പോയ ചില്ലയിൽ<br> 
              തളിർത്തു പൊങ്ങി പച്ചയും<br> <br> 

              എടുത്തു മാറ്റി വേരുകൾ<br>  
              നശിച്ച പാഴ് വേരുകൾ<br> <br> 

              </p>
        </div>
      </div>
    </li>
    <li><div class="tldate">June 2017</div></li>
    <li>
      <div class="tl-circ"></div>
      <div class="timeline-panel">
        <div class="tl-heading">
          <h4>ഉദ്ധരണി (1)</h4>
          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 12/6/2017</small></p>
        </div>
        <div class="tl-body">
          <p class="font-black">കരഞ്ഞു തീർത്ത വേദനകൾക്കും, കടിച്ചു പിടിച്ച സങ്കടങ്ങൾക്കും ഇടയിലാണ്‌ കെട്ടിപ്പടുക്കുന്ന ജീവിതങ്ങൾ</p>
        </div>
      </div>
    </li>
  
    <li class="timeline-inverted">
      <div class="tl-circ"></div>
      <div class="timeline-panel">
        <div class="tl-heading">
          <h4>പുതു വിത്ത്</h4>
          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11/06/2017</small></p>
        </div>
        <div class="tl-body">
          <p class="font-black">പ്രേമമുള്ളിടത്തെല്ലാമെത്തിനോക്കിടുമാ-<br>
              ക്കുശുമ്പും കുന്നായ്മയും...<br><br>

              ആർക്കുമതു കൊടുക്കാനാനുവതിക്കാ-<br>
              തെയവർ തനിച്ചാലോകം മെനഞ്ഞിടും...<br><br>

              അസ്ഥിയിൽപ്പിടിക്കുമാനേരത്തുമറ്റൊ-<br>
              രുവനായ് വരുന്നൊരാ കാമവും...<br><br>

              ഉള്ളിലുടലെടുത്തിടുമാവികാരങ്ങ-<br>
              ളൊട്ടാകെ പടർന്നു കേറിടും ഉടലിലൊട്ടാകെ...<br><br>

              ഒടുവിലെല്ലാം കഴിഞ്ഞിരിക്കുമാനേരമ-<br>
              വരിലെത്തുമാ മടുപ്പെന്നമാരുതൻ...<br><br>

              മെനഞെടുത്തൊരാക്കുറ്റങ്ങളുംക്കുറ-<br>
              വുകളുംകൊണ്ടവർത്താണ്ഡവമാടിടും...<br><br>

              വിട്ടുവീഴ്ചയോടെല്ലാം തിരിച്ചുപിടിച്ചിടാൻ-<br> തോന്നുമാനേരമുദ്ധരിക്കുമാഭിമാനബോധം...<br><br>

              തോൽവിയേറ്റുവാങ്ങാൻ മനസ്സില്ലാ-<br>
              മനങ്ങൾ പ്രേമമില്ലാക്കോപകുണ്ഡമായിടും...<br><br>

              ഒരുനാളിലേല്ലാമടങ്ങുമാനേരത്തു  മധു-<br>
              രമാം പ്രായമതവസാനിച്ചിടും...<br><br>

              മിച്ചമായ് നിൽക്കുമാമടിവേരിൻ മോളിലായ്-<br>
              പ്പുതിയൊരു പച്ചപ്പിൻ വിത്തുമുളച്ചിടും...<br><br>

              ഇടക്കു തളിർക്കുമാപ്പഴതായവേരുകൾക്കാണി-<br>
              ല്ലൊരിക്കലും പുറത്തെ പ്രകാശം...</p>
        </div>
      </div>
    </li>
    <li>
      <div class="tl-circ"></div>
      <div class="timeline-panel">
        <div class="tl-heading">
          <h4>നട്ടാൽ മാത്രം മതിയോ ???</h4>
          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 5/6/2017</small></p>
        </div>
        <div class="tl-body">
          <p class="font-black">കൂട്ടുകാരെ, ഇന്നു ജൂൺ 5. ലോക പരിസ്ഥിതി ദിനം. എല്ലാ കൊല്ലവും നടക്കാറുള്ള പോലെ, ഈ പരിസ്ഥിതി ദിനത്തിൽ ഒരു കോടി വൃക്ഷത്തൈകൾ നട്ട കേരള സർക്കാരിന്റെ പ്രവൃത്തി പ്രശംസനീയമായ കാര്യം തന്നെ...

          ഈ നട്ട  തൈകൾ സംരക്ഷിക്കാനുള്ള പദ്ധതിയെ പറ്റി  ആരും ഒന്നും പറയുന്നത് കെട്ടില്ല...

          വെള്ളവും സംരക്ഷണവുമില്ലാതെ അടുത്ത പരിസ്ഥിതി ദിനം വരെ അല്ലെങ്കിൽ അടുത്ത  തിരഞ്ഞെടുപ്പ് കാലം വരെ ഈ തൈകൾ ഉണ്ടാവുമെന്ന് ഒരുറപ്പും ഇല്ല...

          തെരുവ് നായ്ക്കളെ ഓമനിക്കുന്ന പോലെ, പശുവിനെ സംരക്ഷിക്കാൻ നിയമം ഉണ്ടാക്കിയ പോലെ, മരങ്ങൾ, തൈകൾ അല്ലെങ്കിൽ ഈ നട്ട ഒരു കോടി തൈകൾ എങ്കിലും സംരക്ഷിക്കാൻ അടിയന്തരമായി എന്തെങ്കിലും ചെയ്യാൻ അപേക്ഷിക്കുന്നു...

          സർക്കാർ ഒപ്പമുണ്ടെന്നു വിശ്വസിക്കുന്ന ഒരു പൗരൻ...

          </p>
        </div>
      </div>
    </li>
  </ul>
  <h6>For more <a href="https://heartofsyam.blogspot.in">HEARTofSYAM</a></h6>
</div>
{{-- <h1><i class="fa fa-wrench"></i></h1>
<h2>Page under construction</h2> --}}
    </section>
@endsection