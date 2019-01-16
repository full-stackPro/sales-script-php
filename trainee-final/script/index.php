<?php
  session_start();
  
  if(!isset($_SESSION["tainee_sale_user"])){
  	header("location:login.php");
  }
  
  ?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Intro | Sale Script</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Jquery Notebook CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.notebook.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/richtext.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="assets/css/colorpicker.css" type="text/css">
    <link rel="shortcut icon" href="http://www.bginonline.com/wp-content/uploads/2015/04/favicon2.png" type="image/x-icon">
    <!-- Font Awesome JS -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <style>
      [hidden] {
      display: none !important;
      }
    </style>
  </head>
  <body style="cursor: auto;">
    <ul id="fixed-nav">
      <li class=""><a href="" id="savechanges" type="intro">Save</a></li>
      <li class=""><a href="" id="export" type="intro">Export</a></li>
    </ul>
    <div class="ajax-response" style="display: block;">Exporting Agent Version...</div>
    <div class="wrapper editor jquery-notebook" data-jquery-notebook-id="1" editor-mode="multiline" editor-placeholder="Your text here..."  style="position: relative;">
      <!-- Sidebar Holder -->
      <nav id="sidebar">
        <span class="section-bg-colors">&nbsp;</span> <span class="section-colors">&nbsp;</span>
        <div class="sidebar-header">
          <h3>Trainee Script</h3>
        </div>
        <ul class="questions list_sortable ui-sortable" id="qlist1">
          <li class="static"> </li>
          <li class="inline-buttons ui-sortable ui-sortable-handle">
            <div class="ui-sortable-handle">
              <button class="buttons" style="opacity: 1; color: rgb(117, 111, 111);" value="Interrupted">Interrupted<span class="fa fa-minus-circle del"></span></button>
            </div>
            <div class="ui-sortable-handle">
              <button class="buttons" style="opacity: 1; color: rgb(117, 111, 111);" value="Interrupted2">2<span class="fa fa-minus-circle del"></span></button>
            </div>
            <div class="ui-sortable-handle">
              <button class="buttons" style="opacity: 1; color: rgb(117, 111, 111);" value="Interrupted3">3<span class="fa fa-minus-circle del"></span></button>
            </div>
            <div class="ui-sortable-handle">
              <button class="buttons" style="opacity: 1; color: rgb(117, 111, 111);" value="Interrupted4">4<span class="fa fa-minus-circle del"></span></button>
            </div>
            <div class="ui-sortable-handle">
              <button class="buttons" style="opacity: 1; color: rgb(117, 111, 111);" value="Interrupted5">5<span class="fa fa-minus-circle del"></span></button>
            </div>
          </li>
          <li class="inline-buttons ui-sortable ui-sortable-handle">
            <div class="ui-sortable-handle">
              <button class="buttons" style="opacity: 1; color: rgb(117, 111, 111);" value="notInterested">Not Interested<span class="fa fa-minus-circle del"></span></button>
            </div>
            <div class="ui-sortable-handle">
              <button class="buttons" style="opacity: 1; color: rgb(117, 111, 111);" value="noMoney">No Money<span class="fa fa-minus-circle del"></span></button>
            </div>
            <div class="ui-sortable-handle">
              <button class="buttons" style="opacity: 1; color: rgb(117, 111, 111);" value="driving">Driving/Busy<span class="fa fa-minus-circle del"></span></button>
            </div>
          </li>
        </ul>
        <ul class="questions list_sortable ui-sortable" id="qlist2">
          <li class="static"> </li>
          <li class="inline-buttons ui-sortable ui-sortable-handle">
            <div class="ui-sortable-handle">
              <button class="buttons" style="opacity: 1;" value="value1">What Is It?<span class="fa fa-minus-circle del"></span></button>
            </div>
            <div class="ui-sortable-handle">
              <button class="buttons" style="opacity: 1;" value="howMuch">whatIsIt<span class="fa fa-minus-circle del"></span></button>
            </div>
          </li>
        </ul>
        <ul class="questions list_sortable ui-sortable" id="qlist3">
          <li class="static"> </li>
          <li class="inline-buttons ui-sortable ui-sortable-handle">
            <div class="ui-sortable-handle">
              <button class="buttons" style="opacity: 1;" value="competitor">Already Tried/Other Mktg<span class="fa fa-minus-circle del"></span></button>
            </div>
            <div class="ui-sortable-handle">
              <button class="buttons" style="opacity: 1;" value="retired">Retired/Not a Realtor<span class="fa fa-minus-circle del"></span></button>
            </div>
          </li>
        </ul>
        <ul class="questions list_sortable ui-sortable" id="qlist4">
          <li class="static"> </li>
          <li class="inline-buttons ui-sortable ui-sortable-handle">
            <div class="ui-sortable-handle">
              <button class="buttons" style="opacity: 1;" value="doNotCallList">Add me to your Do Not Call List<span class="fa fa-minus-circle del"></span></button>
            </div>
          </li>
        </ul>
      </nav>
      <!-- Page Content Holder -->
      <div id="content">
        <div id="topArea">
          <p id="introscript">
            Hi (CLIENT NAME), my name is (<span style="font-size: 12px;">qweqweqwe</span>) and I found you online as a (CITY) Realtor - is that correct?
            <br>
            <br> Great, I represent Realtors online - do you work with new clients who call you directly?1
            <br>
            <br> Great. Well, what we're doing is really simple…
          </p>
          <p class="mainContent" id="explanationScript">
            So I’m sure you’ve seen ads online for something you were already wanting to buy - have you ever noticed those same ads showing up again and again on different websites all over the internet?
            <br>
            <br> Well that’s called “In Market Targeting” - it’s like the whole internet knows what you want to buy - and it’s exactly what we can do for you as a local real estate agent.  That way, people who are currently looking to buy or sell a home in (CITY) will see image ads for you on the websites THEY visit every day!  That ad is customized to include your picture, name, and phone number, and it links directly to your website.  From there, we continue to follow those buyers and sellers from site to site so that your ad will be seen OVER TWO THOUSAND TIMES per month!  We can do this for you because we only work with a few agents in each area, and we’re calling (CITY) today!
          </p>
          <p align="center">
            <a href="signup.php">(Click to - CLOSE)</a>
            <br>
          </p>
        </div>
        <div id="answers-section">
          <span class="section-bg-colors">&nbsp;</span> <span class="section-colors">&nbsp;</span>
          <div id="rebuttalArea">
            <div id="Interrupted"> No problem, I can really quickly tell you how this works, so you at least know your options (BACK TO SCRIPT)</div>
            <div id="Interrupted2"> Of course, I'll get right to that... (BACK TO SCRIPT)</div>
            <div id="Interrupted3"> Just give me quick second to explain, and I'd love to answer your questions as soon as I'm done... (BACK TO SCRIPT)</div>
            <div id="Interrupted4"> I'm just calling to help you get in front of 2,000 serious buyers and sellers every month, so.. (TO PRICE)</div>
            <div id="Interrupted5"> I totally understand - I'll get to that... (BACK TO SCRIPT/PRICE)</div>
            <div class="rebuttal" id="notInterested"> Ok, well if someone called you <u>On This Phone</u> to <em>buy or sell</em> a home in (CITY), could you still work with them?
              <br>
              <strong>[YES]</strong>Great, that's exactly what I'm calling about. It's really simple how this works...
            </div>
            <div class="rebuttal" id="noMoney"> Ok, I understand you have to be careful where you spend your marketing dollars, but this is the most effective way to get your name in front of thousands of clients in (CITY). It’s really simple how this works. </div>
            <div class="rebuttal" id="driving">I understand, I know you’re always on the go but I can only work with one Realtor – So I can Really Quickly tell you how this works, it’s really simple…</div>
            <div class="rebuttal" id="whatIsIt">It's called "In-Market Targeting", it's actually really simple how this works...</div>
            <div class="rebuttal" id="howMuch">That’s actually the best part! For this call I’m running a discount for life promotion. It’s really simple how this works… </div>
            <div class="rebuttal" id="competitor"> I’m not sure what you’ve tried in the past but this service is brand new, it’s called “In-Market Targeting” and it’s really simple how it works…</div>
            <div class="rebuttal" id="retired"> Ok, well if someone called you <u>On This Phone</u> to <em>buy or sell</em> a home in (CITY), could you still work with them?
              <br>
              <strong>[YES]</strong>Great, that's exactly what I'm calling about. It's really simple how this works...
            </div>
            <div class="rebuttal" id="doNotCallList"> Okay, I will go ahead and put you on our internal do not call list.  Have a nice day.</div>
          </div>
          <div id="introPrompt"><a href="signup.php">(MOVE TO CLOSE)</a></div>
        </div>
      </div>
    </div>
    <!-- jQuery CDN - jquery -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/jquery.richtext.min.js"></script>
    <script src="assets/js/colorpicker.js"></script>
    <!-- Bootstrap JS -->
    <!-- Include JS file. -->
    <script type="text/javascript" src="assets/js/jquery.notebook.js"></script>
    <script type="text/javascript" src="assets/js/agent-script.js"></script>
    <textarea id="jquery-notebook-content-1" style="position: absolute; left: -1000px;"></textarea>
  </body>
</html>
