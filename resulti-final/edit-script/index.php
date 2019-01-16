<?php
  session_start();

  if(!isset($_SESSION["resulti_user"])){
  	header("location:login.php");
  }

  ?>
    <!DOCTYPE html>
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
        <link href="assets/css/font-awesome.css" rel="stylesheet">
        <style>
            [hidden] {
                display: none !important;
            }
        </style>
        <style>
            [hidden] {
                display: none !important;
            }
        </style>
        <style>
            [hidden] {
                display: none !important;
            }
        </style>
    </head>

    <body style="cursor: auto;">
        <ul id="fixed-nav">
            <li class="active"><a href="index.php">Frontline</a></li>
            <li><a href="senior.php">Senior</a></li>
            <li class=""><a href="" id="savechanges" type="intro">Save</a></li>
            <li class=""><a href="" id="export" type="intro">Export</a></li>
        </ul>
        <div class="ajax-response" style="display: none;">Updating current content...</div>
        <div class="popup" data-popup="popup-1" style="display: none;">
            <div class="popup-inner">
                <form action="" id="addsection">
                    <div class="form-element">
                        <label>Button Title</label>
                        <input type="text" placeholder="please enter button text" id="btn-title">
                    </div>
                    <div class="form-element">
                        <label>Button id <small>(No space and special characters)</small></label>
                        <input type="text" placeholder="please enter button id" id="btn-id">
                    </div>
                    <div class="form-element">
                        <label>Section Text
                        </label>
                        <textarea class="text-editor" rows="5" id="section-des"></textarea>
                    </div>
                    <input type="hidden" id="clickded" value="newelement">
                    <input type="submit" name="submit" id="submitbtn" value="Add New Question" disabled="">
                </form>
                <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
            </div>
        </div>
        <div class="wrapper editor">
            <div class="fr-wrapper" dir="auto">

                <!-- Sidebar Holder -->
                <nav id="sidebar">
                    <span class="section-bg-colors">&nbsp;</span> <span class="section-colors">&nbsp;</span>
                    <div class="sidebar-header">
                        <h3>Instarank Marketing</h3>
                    </div>
                    <ul class="questions list_sortable ui-sortable" id="qlist1">
                        <li class="static"><span class="bgcolorselector ui-sortable-handle">&nbsp;</span> <span class="coloselector ui-sortable-handle">&nbsp;</span></li>
                        <li class="inline-buttons ui-sortable ui-sortable-handle">
                            <div class="ui-sortable-handle">
                                <button class="buttons" style="opacity: 1;" value="notInterested">Interrupted 1<span class="fa fa-minus-circle del"></span></button>
                            </div>
                            <div class="ui-sortable-handle">
                                <button class="buttons" style="opacity: 1;" value="notInterested2">2<span class="fa fa-minus-circle del"></span></button>
                            </div>
                            <span class="fa fa-plus-circle ui-sortable-handle" data-popup-open="popup-1"></span>
                        </li>
                        <li class="inline-buttons ui-sortable ui-sortable-handle">
                            <div class="ui-sortable-handle">
                                <button class="buttons" style="opacity: 1;" value="notAble">Can't Use /Not a Realtor<span class="fa fa-minus-circle del"></span></button>
                            </div>
                            <span class="fa fa-plus-circle ui-sortable-handle" data-popup-open="popup-1"></span>
                        </li>
                        <li class="inline-buttons ui-sortable ui-sortable-handle">
                            <div class="ui-sortable-handle">
                                <button class="buttons" style="opacity: 1;" value="callLater">Call Back / Email 1<span class="fa fa-minus-circle del"></span></button>
                            </div>
                            <div class="ui-sortable-handle">
                                <button class="buttons" style="opacity: 1;" value="callLater2">2<span class="fa fa-minus-circle del"></span></button>
                            </div>
                            <span class="fa fa-plus-circle ui-sortable-handle" data-popup-open="popup-1"></span>
                        </li>
                    </ul>
                    <ul class="questions list_sortable ui-sortable" id="qlist2">
                        <li class="static"><span class="bgcolorselector ui-sortable-handle">&nbsp;</span> <span class="coloselector ui-sortable-handle">&nbsp;</span></li>
                        <li class="inline-buttons ui-sortable ui-sortable-handle">
                            <div class="ui-sortable-handle">
                                <button class="buttons" style="opacity: 1;" value="value1">Value / How it Works<span class="fa fa-minus-circle del"></span></button>
                            </div>
                            <span class="fa fa-plus-circle ui-sortable-handle" data-popup-open="popup-1"></span>
                        </li>
                    </ul>
                    <ul class="questions list_sortable ui-sortable" id="qlist3">
                        <li class="static"><span class="bgcolorselector ui-sortable-handle">&nbsp;</span> <span class="coloselector ui-sortable-handle">&nbsp;</span></li>
                        <li class="inline-buttons ui-sortable ui-sortable-handle">
                            <div class="ui-sortable-handle">
                                <button class="buttons" style="opacity: 1;" value="cellPhone">Can't Call Me<span class="fa fa-minus-circle del"></span></button>
                            </div>
                            <span class="fa fa-plus-circle ui-sortable-handle" data-popup-open="popup-1"></span>
                        </li>
                        <li class="inline-buttons ui-sortable ui-sortable-handle">
                            <div class="ui-sortable-handle">
                                <button class="buttons" style="opacity: 1;" value="doNotCallList">Do Not Call List<span class="fa fa-minus-circle del"></span></button>
                            </div>
                            <span class="fa fa-plus-circle ui-sortable-handle" data-popup-open="popup-1"></span>
                        </li>
                    </ul>
                </nav>
                <!-- Page Content Holder -->
                <div id="content">
                    <div id="topArea">
                        <span class="section-bg-colors">&nbsp;</span> <span class="section-colors">&nbsp;</span>
                        <p id="introscript">Hi <strong>(NAME)</strong> Hi, this is <strong>(NAME)</strong> calling with <strong>Resultli</strong> - How are you today?
                            <br>
                            <br>I'm calling because I wanted to introduce myself---I represent Realtors on Facebook and I see here you specialize in residential sales. Is that correct? Perfect, well what we do is very simple...
                            <br>
                            <br>We create a beautiful image ad for you and we place it in the Facebook News Feeds of ACTUAL buyers and sellers in YOUR area, right between posts from their friends and family. Then, for as long as they’re ready to buy or sell a home, your local prospects will CONTINUE to see your ad, over and over, keeping you top-of-mind in their process, and building your brand in your community. In fact, we’ll make sure you’re seen by real buyers and sellers on their OWN Facebook pages over 2,000 times every month - guaranteed. Does that make sense?
                            <br>
                            <br>Great! Well, this service is normally $299 per month with a one-time activation fee of $19.95, but for buying on this phone call, I can get it to you for only $139.95 plus activation - and it’s always month to month, with no contracts or commitments. We’ll call you in a few days to show you your own ad on Facebook, and we’ll send you a full performance report every month - so you only stay with us as long as you love what you see. But before we get to your payment information, let me just ask real quick: You've used Facebook before, right?</p>
                        <a href="signup.php">(MOVE TO CLOSE)</a>
                    </div>
                    <div id="answers-section">
                        <span class="section-bg-colors">&nbsp;</span> <span class="section-colors">&nbsp;</span>
                        <div id="rebuttalArea">
                            <div id="default">((If Interrupted))
                                <br>
                                <br><em>No problem</em> - I can just quickly let you know how this works so at least you know your options, okay? [BACK TO PITCH!]</div>
                            <div class="rebuttal" id="notInterested2" style="display: none;">That's a great question and I'll get to it in just a minute, okay? [BACK TO PITCH!]</div>
                            <div class="rebuttal" id="notAble" style="display: none;"><em>Okay, well...</em>
                                <br>If someone called you wanting to buy or sell a home, would you be able to help them?
                                <br>
                                <br>[YES] Perfect! That's all we're talking about... [BACK TO PITCH!]</div>
                            <div class="rebuttal" id="callLater" style="display: none;">I understand, I know you're always on the go, but I can only work with one realtor. So I can just quickly let you know how this works so at least you know your options, okay? [BACK TO PITCH!]</div>
                            <div class="rebuttal" id="callLater2" style="display: none;">I can't hold this position for you because we're calling your area, so by the time I got back to you, it would already be sold. I'll get right to the point, okay? [BACK TO PITCH!]</div>
                            <div class="rebuttal" id="howMuch" style="display: none;"><em>Of course, I'll get right to that...</em>
                                <br>Just let me really quickly tell you how this works - <em>It's real simple...</em></div>
                            <div class="rebuttal" id="value1" style="display: none;">You’ve used Facebook, right?
                                <br>
                                <br>Okay, so you’ve probably noticed that Facebook ACTUALLY places a TARGETED ad between every few posts on your page, and those ads are DESIGNED to show you a product you’re ALREADY interested in. Now, Facebook knows what you want because they can track your browsing history. So when one of your PROSPECTS goes online to Trulia or Zillow, or they use a mortgage calculator, Facebook knows about it! AND that's where WE come in! When someone's been searching for real estate in YOUR area… That's when we introduce you to them. So, right when they need you most, your prospect will see your full-sized, professionally-designed ad right in the main section of their page. Then they’ll keep seeing your ad from time to time until they’re ready to act. And we guarantee that we’ll do that 2,000 times every single month! Does that make sense?
                                <br>
                                <br>Great! Now this service...  [TO PRICE]</div>
                            <div class="rebuttal" id="competitor" style="display: none;">That's no problem at all, what we do is a perfect way to supplement what you're already doing. I can quickly tell you how the service works so at least you know your options...
                                <br>
                                <br>(it's real simple how this works...)</div>
                            <div class="rebuttal" id="leadService" style="display: none;">This is not a lead service. We're not giving you a list of names and numbers to cold call. We are placing you directly in front of hundreds of buyers and sellers a month who are already looking to contact an agent in (city). I can quickly tell you how it works, it's really simple...</div>
                            <div class="rebuttal" id="wherefound" style="display: none;">I found your name online as a realtor in <span class="variable">(city)</span>. Are you able to work with buyers or sellers who call you directly?</div>
                            <div class="rebuttal" id="diffcity" style="display: none;">Ok, well we represent realtors across the country on the 1st page of (bing/Facebook). What city do you work in?</div>
                            <div class="rebuttal" id="diffname" style="display: none;">Ok, well i was looking for a realtor in <span class="variable">(city)</span>. Do you work there?
                                <br>
                                <br>ok great!</div>
                            <div class="rebuttal" id="retired" style="display: none;">Ok, so if someone called you on this phone to buy or sell a home, could you still work with them?
                                <br>
                                <br><span class="response">[yes]</span> Well that’s exactly what i’m calling about! It’s really simple how this works…
                                <br>
                                <br><span class="response">[no]</span> Ok, what do you do now? Let me take a look and see what i have for (market) in (city). While i do that i can quickly tell you how the service works...
                                <br>
                                <br>
                            </div>
                            <div class="rebuttal" id="cellPhone" style="display: none;">I'm sorry for the inconvenience <span class="variable">(sir/ma'am).</span> I actually called you personally and you were not called through an automatic dialer so i am within compliance. However, i respect your wish to not be called and will gladly put you on my "do not call" list. We won't call you again. Okay?</div>
                            <div class="rebuttal" id="doNotCallList" style="display: none;">Okay, i will go ahead and put you on our internal do not call list. Have a nice day</div>
                        </div>
                        <div id="introPrompt"><a href="signup.php">(MOVE TO CLOSE)</a></div>
                    </div>
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
        <script type="text/javascript" src="assets/js/script.js"></script>
    </body>

    </html>