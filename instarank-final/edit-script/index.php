<?php
  session_start();

  if(!isset($_SESSION["insta_user"])){
  	header("location:login.php"); 
  }

  ?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Instarank Marketing</title>
        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Jquery Notebook CSS -->
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.notebook.css">

        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="assets/css/jquery-ui.min.css" type="text/css">
        <link rel="stylesheet" href="assets/css/richtext.min.css" type="text/css">
        <link rel="stylesheet" href="assets/css/style.css" type="text/css">
        <link rel="stylesheet" href="assets/css/colorpicker.css" type="text/css">

        <link rel="icon" href="http://instascript.xyz/wp-content/uploads/2018/05/cropped-InstaHousLogoOnly-1-32x32.png" sizes="32x32">
        <link rel="icon" href="http://instascript.xyz/wp-content/uploads/2018/05/cropped-InstaHousLogoOnly-1-192x192.png" sizes="192x192">
        <link rel="apple-touch-icon-precomposed" href="http://instascript.xyz/wp-content/uploads/2018/05/cropped-InstaHousLogoOnly-1-180x180.png">
        <meta name="msapplication-TileImage" content="http://instascript.xyz/wp-content/uploads/2018/05/cropped-InstaHousLogoOnly-1-270x270.png">
        <!-- Font Awesome JS -->
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
        <div class="wrapper editor ">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <span class="section-bg-colors">&nbsp;</span> <span class="section-colors">&nbsp;</span>
                <div class="sidebar-header">
                    <h3>Trainee Script</h3>
                </div>
                <ul class="questions list_sortable ui-sortable" id="qlist1">
                    <li class="static">
                        <h3 class="ui-sortable-handle">DURING THE INTRO</h3>
                        <span class="bgcolorselector ui-sortable-handle">&nbsp;</span> <span class="coloselector ui-sortable-handle">&nbsp;</span>
                    </li>
                    <li class="inline-buttons ui-sortable ui-sortable-handle">
                        <div class="ui-sortable-handle">
                            <button class="buttons" data-title="BRUSH-OFF" style="opacity: 1;" value="brushoff">BRUSH-OFF<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" data-title="BUSY-DRIVING (before close)" style="opacity: 1;" value="busydriving">BUSY / DRIVING<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" data-title="" style="opacity: 1;" value="questions">?? (QUESTIONS) ??<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" data-title="TRIED THIS / OTHER MARKETING" style="opacity: 1;" value="othermrkg">TRIED THIS / OTHER MKTG<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" data-title="NO $$$ / BUDGET FOR THIS (before the price)" style="opacity: 1;" value="nobudget">NO $$$ / BUDGET FOR THIS<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" data-title="RETIRED / NOT A REALTOR" style="opacity: 1;" value="retired">RETIRED / NOT A REALTOR<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" data-title="ADD ME TO YOUR “DO NOT CALL LIST”" style="opacity: 1;" value="addmelist">ADD ME TO YOUR DNC LIST<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <span class="fa fa-plus-circle ui-sortable-handle" data-popup-open="popup-1"></span>
                    </li>
                </ul>
                <ul class="questions list_sortable ui-sortable" id="qlist2">
                    <li class="static">
                        <h3 class="ui-sortable-handle">AFTER YOU GIVE THE PRICE</h3>
                        <span class="bgcolorselector ui-sortable-handle">&nbsp;</span> <span class="coloselector ui-sortable-handle">&nbsp;</span>
                    </li>
                    <li class="inline-buttons ui-sortable ui-sortable-handle">
                        <div class="ui-sortable-handle">
                            <button class="buttons" data-title="I SPENT MY BUDGET" style="opacity: 1;" value="spentbudget">Spent BUDGET<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" data-title="NEED TO TALK WITH WIFE/PARTNER etc." style="opacity: 1;" value="teampartnepouse">Team / Partner / Spouse<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" data-title="RESEARCH" style="opacity: 1;" value="needtoresearch">Need to RESEARCH<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" data-title="MY OFFICE DOES MY ADVERTISING" style="opacity: 1;" value="advertising">ADVERTISING already<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" data-title="I ONLY WORK WITH REFERRALS" style="opacity: 1;" value="referrals">REFERRALS only<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" data-title="I TRIED SOMETHING LIKE THIS BEFORE" style="opacity: 1;" value="triedbefore">TRIED BEFORE<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" data-title="I DON’T HAVE A WEBSITE" style="opacity: 1;" value="nowebsite">NO WEBSITE<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" data-title="I CAN DO THIS MYSELF" style="opacity: 1;" value="doitmyselef">DO IT MYSELF<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" data-title="I HAVE TOO MUCH BUSINESS" style="opacity: 1;" value="toomuchbusinessy">Too much businessy<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" data-title="I DON’T HAVE A FB/INSTAGRAM ACCOUNT" style="opacity: 1;" value="nofbinstaacct">No FB/INSTA acct<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" data-title="MY AREA IS TOO SMALL" style="opacity: 1;" value="areatoosmallrural">AREA too small/rural<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" data-title="VIEWS DON’T MATTER TO ME" style="opacity: 1;" value="viewsdontmatter">VIEWS don’t matter<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" data-title="I’M RETIRING" style="opacity: 1;" value="retiring">RETIRING<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" data-title="I’M ON VACATION" style="opacity: 1;" value="onvacation">On VACATION<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" data-title="GIVE IT TO ME FREE" style="opacity: 1;" value="illtryitforfree">I’ll try it for FREE<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" data-title="MY CLIENTS ARE NOT ON INSTA/FACEBOOK" style="opacity: 1;" value="myclientsarenot">My CLIENTS are NOT ON: Instagram / Facebook&nbsp;<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <span class="fa fa-plus-circle ui-sortable-handle" data-popup-open="popup-1"></span>
                    </li>
                </ul>
                <ul class="questions list_sortable ui-sortable" id="qlist3">
                    <li class="static">
                        <h3 class="ui-sortable-handle">AFTER YOU GIVE THE PRICE</h3>
                        <span class="bgcolorselector ui-sortable-handle">&nbsp;</span> <span class="coloselector ui-sortable-handle">&nbsp;</span>
                    </li>
                    <li class="inline-buttons ui-sortable ui-sortable-handle">
                        <div class="ui-sortable-handle">
                            <button class="buttons" data-title="VALUE 1 (Not Interested / I’ll Pass / I’m Good…)" style="opacity: 1;" value="value1">VALUE-1<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" data-title="VALUE 2 (“Not Interested” / “I’ll Pass”)" style="opacity: 1;" value="value2">2<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" data-title="VALUE 3 (“Not Interested” / “I’ll Pass”)" style="opacity: 1;" value="value3">3<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" data-title="VALUE 4 (“Not Interested” / “I’ll Pass”)" style="opacity: 1;" value="value4">4<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" data-title="VALUE 5 (“Not Interested” / “I’ll Pass”)" style="opacity: 1;" value="value5">5<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <span class="fa fa-plus-circle ui-sortable-handle" data-popup-open="popup-1"></span>
                    </li>
                    <li class="inline-buttons ui-sortable ui-sortable-handle">
                        <div class="ui-sortable-handle">
                            <button class="buttons" data-title="How do you know/How does it work" style="opacity: 1;" value="howitworks">HOW IT WORKS!<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <span class="fa fa-plus-circle ui-sortable-handle" data-popup-open="popup-1"></span>
                    </li>
                </ul>
                <ul class="questions list_sortable ui-sortable" id="qlist4">
                    <li class="static">
                        <h3 class="ui-sortable-handle">URGENCY-(after the price)</h3>
                        <span class="bgcolorselector ui-sortable-handle">&nbsp;</span> <span class="coloselector ui-sortable-handle">&nbsp;</span>
                    </li>
                    <li class="inline-buttons ui-sortable ui-sortable-handle">
                        <div class="ui-sortable-handle">
                            <button class="buttons" data-title="CALL BACK" style="opacity: 1;" value="callback">CALL BACK<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" data-title="EMAIL ME" style="opacity: 1;" value="emailme">EMAIL ME<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" data-title="I’M BUSY" style="opacity: 1;" value="imbusy">I’M BUSY<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" data-title="I’M DRIVING" style="opacity: 1;" value="driving">DRIVING<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <span class="fa fa-plus-circle ui-sortable-handle" data-popup-open="popup-1"></span>
                    </li>
                </ul>
            </nav>
            <!-- Page Content Holder -->
            <div id="content">
                <div id="topArea">
                    <p>HI (NAME)? HI THIS IS_______ WITH INSTARANK, HOW ARE YOU TODAY?<strong></strong></p>
                    <p>GREAT, I WANTED TO GIVE YOU A QUICK CALL BECAUSE WE’RE WORKING WITH REAL ESTATE AGENTS IN THE AREA ON A BRAND NEW SERVICE THROUGH INSTAGRAM AND FACEBOOK! SO, YOU WORK WITH RESIDENTIAL, RIGHT?</p>
                    <p>PERFECT, SO YOU MIGHT NOT KNOW THIS BUT RIGHT NOW INSTAGRAM AND FACEBOOK MARKETING IS ACTUALLY BEATING OTHER MARKETING PROGRAMS 3-TO-1! SO, WE SPECIALIZE IN PLACING ADS FOR YOU IN BETWEEN THE POSTS AND PICTURES THAT PEOPLE LOOK AT EVERY DAY!</p>
                    <p>WE GET YOUR AD IN FRONT OF PEOPLE IN YOUR TARGET MARKET OVER A 2000 TIMES PER MONTH! BUT WE ONLY SHOW THE AD TO PEOPLE WHO ARE ALREADY LOOKING TO BUY OR SELL A HOME IN YOUR AREA – AND THE COOL PART IS WE GUARANTEE YOU’LL BE SEEN OVER 2000 TIMES PER MONTH, OR YOUR NEXT MONTH IS FREE! SEE HOW THAT WORKS?</p>
                    <p style="text-align: center;"><a href="signup.php"><strong>MOVE TO CLOSE</strong></a></p>
                </div>
                <div id="answers-section">
                    <span class="section-bg-colors">&nbsp;</span> <span class="section-colors">&nbsp;</span>
                    <div id="rebuttalArea">
                        <div class="rebuttal" id="brushoff">No problem, i can really quickly tell you how this works, so at least you know your options…
                            <br>
                            <br>(don’t pause! Go back to the pitch where you left off)</div>
                        <div class="rebuttal" id="busydriving">I understand, I know you’re always on the go but I can only work with one Realtor – So I can really quickly tell you how this works, it’s really simple…
                            <br>
                            <br>(DON’T PAUSE!--GO BACK TO PITCH WHERE YOU LEFT OFF)</div>
                        <div class="rebuttal" id="othermrkg">I’m not sure what you’ve tried in the past but this service is brand new, it’s target marketing and the way we do this is really simple…
                            <br>
                            <br>(DON’T PAUSE!–GO BACK TO THE PITCH WHERE YOU LEFT OFF)</div>
                        <div class="rebuttal" id="nobudget">Absolutely and I understand you have to be careful where you spend your marketing dollars, but this is the most effective way to get your name in front of thousands of clients in your market. It’s really simple how this works…
                            <br>
                            <br>(DON’T PAUSE!–GO BACK TO THE PITCH WHERE YOU LEFT OFF)</div>
                        <div class="rebuttal" id="retired">No problem, well if someone called you on this phone to buy or sell a home, could you still work with them?
                            <br>
                            <br>[YES]-Great, that’s exactly what I’m calling about. It’s really simple how this works…
                            <br>
                            <br>(DON’T PAUSE!–GO BACK TO THE PITCH WHERE YOU LEFT OFF)</div>
                        <div class="rebuttal" id="addmelist">No problem, I will go ahead and put you on our internal do not call list.  Have a nice day.
                            <br>
                            <br>(GREAT CALL! NEXT CALL!)</div>
                        <div class="rebuttal" id="spentbudget">STEP 1 – RESPOND I hear ya and I know you have to be careful of how much you spend on marketing every year. But if I sent you just one buyer or seller you would help them, right? Perfect, so look at this as a way to replenish your budget because we use target marketing to identify prospects literally looking to buy or sell a home in your local area right now. I mean if we brought you a new buyer or seller you could take it from there, RIGHT?
                            <br>
                            <br>STEP 2 – REASSURE Perfect and while we get started finding those buyers and sellers you get to take advantage of our promotion not to mention we’re month-to-month right now! It’s pretty amazing how well this works. You’re going to love it!
                            <br>
                            <br>STEP 3 – RE-CLOSE So all I need to get you going is a good billing address. What’s a good billing address for you?
                            <br>
                            <br>[CLOSE! CLOSE! CLOSE! CLOSE!]
                            <br>
                            <br>Just to confirm, is (city) the city where you focus most of your business or is there another (city/zip) you’d like me to look up for you?
                            <br>
                            <br>Perfect and is the best phone number for these new clients to call you on, the (READ THEIR NUMBER)? Ok, great, that’s the number we’ll put on your new Instagram ad, OK?
                            <br>
                            <br>Now do you want your name to appear on your new ad as (say their FIRST &amp; LAST name) or do you have a TAG LINE you like to use for your MARKETING?
                            <br>
                            <br>Great and which card do you want to use for this?
                            <br>
                            <br>Ok and go ahead with the numbers on the front of the card whenever you are ready.
                            <br>
                            <br>
                        </div>
                        <div class="rebuttal" id="teampartnepouse">STEP 1 – RESPOND Absolutely, and I get that but that’s the exact reason why we’re MONTH-TO-MONTH! During the first month or so with us you’re really just testing us out to see what kind of results you get. And since we’re month-to-month we KNOW we need to show you some results or you’re going to cancel with us. Believe me it’s in our best interest to get you some results right away!
                            <br>
                            <br>STEP 2 – REASSURE And actually, there’s never been a better time to get started with us because we’ve discounted our services to almost 50% off! I really believe you’re gonna love the results we get you.
                            <br>
                            <br>STEP 3 – RE-CLOSE The next step is just getting a billing address for you. What’s your billing address? .
                            <br>
                            <br>[ CLOSE! CLOSE! CLOSE! CLOSE!]
                            <br>
                            <br>————————————————– Just to confirm, is (city) the city where you focus most of your business or is there another (city/zip) you’d like me to look up for you?]
                            <br>Perfect and is the best phone number for these new clients to call you on, the (READ THEIR NUMBER)? Ok, great, that’s the number we’ll put on your new Instagram ad, OK?
                            <br>Now do you want your name to appear on your new ad as (say their FIRST &amp; LAST name) or do you have a TAG LINE you like to use for your MARKETING?
                            <br>Great and which card do you want to use for this?
                            <br>Ok and go ahead with the numbers on the front of the card whenever you are ready.</div>
                        <div class="rebuttal" id="needtoresearch">STEP 1 - RESPOND Actually, that's the whole reason why we're month-to-month. Your research is your first month with us! Look, we already know our service works or we wouldn't have set this up as a month-to-month. Really all we're looking for is the opportunity to prove it to you. Afterall, I mean just ONE buyer or seller means a new commission check for you, RIGHT?
                            <br>
                            <br>STEP 2 - REASSURE And don't forget we're waiving our set up fees and we're on sale while we have a chance to show you some results. It's pretty amazing how well this works!
                            <br>
                            <br>STEP 3 - RE-CLOSE So all I need to finish up is a good card number. Did you want to use a Visa or Mastercard?
                            <br>
                            <br>[ CLOSE! CLOSE! CLOSE! CLOSE!]
                            <br>
                            <br>------------------------------------------------------------------- Just to confirm, is (city) the city where you focus most of your business or is there another (city/zip) you'd like me to look up for you?
                            <br>Perfect and is the best phone number for these new clients to call you on, the (READ THEIR NUMBER)? Ok, great, that's the number we'll put on your new Instagram ad, OK?
                            <br>Now do you want your name to appear on your new ad as (say their FIRST &amp; LAST name) or do you have a TAG LINE you like to use for your MARKETING?
                            <br>Great and which card do you want to use for this?
                            <br>Ok and go ahead with the numbers on the front of the card whenever you are ready.</div>
                        <div class="rebuttal" id="advertising">STEP 1 - RESPOND Perfect! Most people think we're like all the other marketing services out there until they see it work. Let's do this, let's test us against anything you have working for you right now and if we bring you the same or better results at a lower cost... that would work for you, RIGHT?
                            <br>
                            <br>STEP 2 - REASSURE Great and while you're putting us to the test remember we're month-to-month so you're not locked into anything. You’re going to love seeing how well this works!
                            <br>
                            <br>STEP 3 - RE-CLOSE The last step is just taking care of the billing. Which card did you want to use for this?
                            <br>
                            <br>[ CLOSE! CLOSE! CLOSE! CLOSE!]
                            <br>
                            <br>------------------------------------------------------------------- Just to confirm, is (city) the city where you focus most of your business or is there another (city/zip) you'd like me to look up for you?
                            <br>
                            <br>Perfect and is the best phone number for these new clients to call you on, the (READ THEIR NUMBER)? Ok, great, that's the number we'll put on your new Instagram ad, OK?
                            <br>Now do you want your name to appear on your new ad as (say their FIRST &amp; LAST name) or do you have a TAG LINE you like to use for your MARKETING?
                            <br>Great and which card do you want to use for this?
                            <br>Ok and go ahead with the numbers on the front of the card whenever you are ready.</div>
                        <div class="rebuttal" id="referrals">STEP 1 – RESPOND A lot of my clients felt the same way when they started working with us because what they really didn’t want is a bunch of prospects wasting their time. We’re a little different because we only advertise to people who are literally looking to buy or sell property in your local area right now. So that way we’re not bringing you prospects that are wasting your time. Make sense?
                            <br>
                            <br>STEP 2 – REASSURE And one of the best things is right now month-to-month while you try us out not to mention we’re on sale right now. I know you’re going to love this just like my other clients do!
                            <br>
                            <br>STEP 3 – RE-CLOSE The next step is just getting a billing address for you. What’s your billing address?
                            <br>
                            <br>[CLOSE! CLOSE! CLOSE! CLOSE!]
                            <br>
                            <br>Just to confirm, is (city) the city where you focus most of your business or is there another (city/zip) you’d like me to look up for you?
                            <br>
                            <br>Perfect and is the best phone number for these new clients to call you on, the (READ THEIR NUMBER)? Ok, great, that’s the number we’ll put on your new Instagram ad, OK?
                            <br>
                            <br>Now do you want your name to appear on your new ad as (say their FIRST &amp; LAST name) or do you have a TAG LINE you like to use for your MARKETING?
                            <br>
                            <br>Great and which card do you want to use for this?
                            <br>Ok and go ahead with the numbers on the front of the card whenever you are ready.</div>
                        <div class="rebuttal" id="triedbefore">
                            <strong>STEP 1 – RESPOND</strong>
                            <br>Most people think we’re like all the other marketing services out there until they see it work. Let’s do this, let’s test us against anything you have working for you right now and if we bring you the same or better results at a lower cost… that would work for you, RIGHT?
                            <br>
                            <br><strong>STEP 2 – REASSURE</strong>
                            <br>Perfect and there’s actually never been a better time to try us out…we’re on sale and even better this is all month-to-month. Honestly you’re going to love working with my maketing team.
                            <br>
                            <br><strong>STEP 3 – RE-CLOSE</strong>
                            <br>So all I need to get you going is a good billing address. What’s a good billing address for you?
                            <br>
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[CLOSE! CLOSE! CLOSE! CLOSE!]
                            <br>
                            <br>
                            <ul>
                                <li>Just to confirm, is (city) the city where you focus most of your business or is there another (city/zip) you’d like me to look up for you?</li>
                                <li>Perfect and is the best phone number for these new clients to call you on, the (READ THEIR NUMBER)? Ok, great, that’s the number we’ll put on your new Instagram ad, OK?</li>
                                <li>Now do you want your name to appear on your new ad as (say their FIRST &amp; LAST name) or do you have a TAG LINE you like to use for your MARKETING?</li>
                                <li>Great and which card do you want to use for this?</li>
                                <li>Ok and go ahead with the numbers on the front of the card whenever you are ready.</li>
                            </ul>
                        </div>
                        <div class="rebuttal" id="nowebsite">
                            STEP 1 - RESPOND
                            <br>That's not a problem, what I'll do is, have my marketing team create a website for you until you get another one up and running. Right now our main goal is to secure your territory and start sending you some new business.
                            <br>
                            <br>STEP 2 - REASSURE
                            <br>And remember you're getting an exclusive territory at the promotional pricing. I can’t wait to start showing you some results!
                            <br>
                            <br>STEP 3 - RE-CLOSE
                            <br>The next step is just getting a billing address for you. What's your billing address??
                            <br>
                            <br>[ CLOSE! CLOSE! CLOSE! CLOSE!]
                            <br>
                            <br>-------------------------------------------------------------------
                            <ul>
                                <li>Just to confirm, is (city) the city where you focus most of your business or is there another (city/zip) you'd like me to look up for you?</li>
                                <li>Perfect and is the best phone number for these new clients to call you on, the (READ THEIR NUMBER)? Ok, great, that's the number we'll put on your new Instagram ad, OK?</li>
                                <li>Now do you want your name to appear on your new ad as (say their FIRST &amp; LAST name) or do you have a TAG LINE you like to use for your MARKETING?</li>
                                <li>Great and which card do you want to use for this?</li>
                                <li>Ok and go ahead with the numbers on the front of the card whenever you are ready.</li>
                            </ul>
                        </div>
                        <div class="rebuttal" id="doitmyselef">
                            STEP 1 - RESPOND
                            <br>Absolutely but most of my clients realize that their time is really valuable. If you add up all the time needed to keep up to date with advertising practices, monitoring your ads and then changing them... we can literally do the same job for you at a lower cost. The bottom line is your time is better spent working with your clients not creating a new listing ad. Let my team do that tedious stuff.
                            <br>
                            <br>STEP 2 - REASSURE
                            <br>And even better, since we're on sale, there isn't a better time to give us a test run. I can’t wait to celebrate your first client with us.
                            <br>
                            <br>
                            <h5 style="font-family: &quot;Trebuchet MS&quot;, sans-serif; color: rgb(0, 0, 0); white-space: normal;">
                                        STEP 3 - RE-CLOSE<br>So from here will you be using a Visa or Mastercard?<br><br>[ CLOSE! CLOSE! CLOSE! CLOSE!]<br><br>-------------------------------------------------------------------
                                        <ul>
                                          <li>Just to confirm, is (city) the city where you focus most of your business or is there another (city/zip) you'd like me to look up for you?</li>
                                          <li>Perfect and is the best phone number for these new clients to call you on, the (READ THEIR NUMBER)? Ok, great, that's the number we'll put on your new Instagram ad, OK?</li>
                                          <li>Now do you want your name to appear on your new ad as (say their FIRST &amp; LAST name) or do you have a TAG LINE you like to use for your MARKETING?</li>
                                          <li>Great and which card do you want to use for this?</li>
                                          <li>Ok and go ahead with the numbers on the front of the card whenever you are ready.</li>
                                        </ul>
                                      </h5>
                        </div>
                        <div class="rebuttal" id="toomuchbusinessy">
                            STEP 1 – RESPOND
                            <br>That’s a great problem to have. Let’s do this then, let us take a few of your listings and advertise them. That will do two things, it will show you how our service works and in the meantime if we help you get a few properties sold, this will pay for itself. Make sense?
                            <br>
                            <br>STEP 2 – REASSURE
                            <br>It’s pretty amazing how well this works. And besides, our promotional pricing is a tiny cost compared to any commission you might make on just one new client. You’re going to love it!
                            <br>
                            <br>STEP 3 – RE-CLOSE
                            <br>So from here will you be using a Visa or Mastercard?
                            <br>
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [CLOSE! CLOSE! CLOSE! CLOSE!]
                            <br>
                            <br>
                            <ul>
                                <li>Just to confirm, is (city) the city where you focus most of your business or is there another (city/zip) you’d like me to look up for you?</li>
                                <li>Perfect and is the best phone number for these new clients to call you on, the (READ THEIR NUMBER)? Ok, great, that’s the number we’ll put on your new Instagram ad, OK?</li>
                                <li>Now do you want your name to appear on your new ad as (say their FIRST &amp; LAST name) or do you have a TAG LINE you like to use for your MARKETING?</li>
                                <li>Great and which card do you want to use for this?</li>
                                <li>Ok and go ahead with the numbers on the front of the card whenever you are ready.</li>
                            </ul>
                        </div>
                        <div class="rebuttal" id="nofbinstaacct">
                            STEP 1 – RESPOND
                            <br>I can see why you would be worried about that but here’s the good news. With us, you literally don’t have to have an Instagram or Facebook account. We use target marketing to locate buyers and sellers in your local area. Once we locate them we put YOUR ad on THEIR Instagram/FB account. So you don’t have to have an account. Make sense?
                            <br>
                            <br>STEP 2 – REASSURE
                            <br>And one of the best things about giving us a chance to find some of those buyers and sellers is, right now is we’re on sale and we’re month-to-month. I can’t wait to see how well this works for you!
                            <br>
                            <br>STEP 3 – RE-CLOSE
                            <br>The next step is just getting a billing address for you. What’s your billing address?
                            <br>
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[CLOSE! CLOSE! CLOSE!]
                            <br>
                            <br>
                            <ul>
                                <li>Just to confirm, is (city) the city where you focus most of your business or is there another (city/zip) you’d like me to look up for you?</li>
                                <li>Perfect and is the best phone number for these new clients to call you on, the (READ THEIR NUMBER)? Ok, great, that’s the number we’ll put on your new Instagram ad, OK?</li>
                                <li>Now do you want your name to appear on your new ad as (say their FIRST &amp; LAST name) or do you have a TAG LINE you like to use for your MARKETING?</li>
                                <li>Great and which card do you want to use for this?</li>
                                <li>Ok and go ahead with the numbers on the front of the card whenever you are ready.</li>
                            </ul>
                        </div>
                        <div class="rebuttal" id="areatoosmallrural">
                            STEP 1 – RESPOND
                            <br>I can see why that would be a concern for you but that’s really not a problem. We run into that all the time. Typically we just advertise you to a larger demographic. You work with buyers and sellers in the general county area right?
                            <br>
                            <br>STEP 2 – REASSURE
                            <br>Perfect and most companies are charging thousands to cover a larger area like this but with us you get to save money with our new client promotion. You’re going to love seeing how well this works!
                            <br>
                            <br>STEP 3 – RE-CLOSE So all I need to finish up is a good card number. Did you want to use a Visa or Mastercard?
                            <br>
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[CLOSE! CLOSE! CLOSE! CLOSE!]
                            <br>
                            <br>
                            <ul>
                                <li>Just to confirm, is (city) the city where you focus most of your business or is there another (city/zip) you’d like me to look up for you?</li>
                                <li>Perfect and is the best phone number for these new clients to call you on, the (READ THEIR NUMBER)? Ok, great, that’s the number we’ll put on your new Instagram ad, OK?</li>
                                <li>Now do you want your name to appear on your new ad as (say their FIRST &amp; LAST name) or do you have a TAG LINE you like to use for your MARKETING?</li>
                                <li>Great and which card do you want to use for this?</li>
                                <li>Ok and go ahead with the numbers on the front of the card whenever you are ready.</li>
                            </ul>
                        </div>
                        <div class="rebuttal" id="viewsdontmatter">
                            STEP 1 – RESPOND
                            <br>I get why you would say that but I want you to focus on target marketing not just the number of views. You’re right, we could give you a million views but that doesn’t mean anything if we don’t put your ad in front of the RIGHT prospects. We use target marketing to identify prospects looking to buy or sell property in your local area. And since we narrow your audience to only interested prospects that means we can give you a smaller number of views and feel confident in bringing you new business. Make sense?
                            <br>
                            <br>STEP 2 – REASSURE
                            <br>And the best part about getting started with us right now is, we’re on sale and we’re month-to-month so there’s no strings attached while try us out. I can’t wait to celebrate your first client with us.
                            <br>
                            <br>STEP 3 – RE-CLOSE
                            <br>The last step is just taking care of the billing. Which card did you want to use for this?
                            <br>
                            <br>[CLOSE! CLOSE! CLOSE! CLOSE!]
                            <br>
                            <br>
                            <ul>
                                <li>Just to confirm, is (city) the city where you focus most of your business or is there another (city/zip) you’d like me to look up for you?</li>
                                <li>Perfect and is the best phone number for these new clients to call you on, the (READ THEIR NUMBER)? Ok, great, that’s the number we’ll put on your new Instagram ad, OK?</li>
                                <li>Now do you want your name to appear on your new ad as (say their FIRST &amp; LAST name) or do you have a TAG LINE you like to use for your MARKETING?</li>
                                <li>Great and which card do you want to use for this?</li>
                                <li>Ok and go ahead with the numbers on the front of the card whenever you are ready.</li>
                            </ul>
                        </div>
                        <div class="rebuttal" id="retiring">
                            STEP 1 – RESPOND
                            <br>Congratulations! Well let’s do this, until you quit the business for good. Let’s find you few new commission checks. You work with buyers and sellers, RIGHT? Perfect!
                            <br>
                            <br>STEP 2 – REASSURE
                            <br>And one of the best parts about this is, we’re month-to-month. So when you do finally retire all the way, you can just turn our service off. Until then I know you’re going to love seeing how well this works!
                            <br>
                            <br>STEP 3 – RE-CLOSE
                            <br>So all I need to finish up is a good card number. Did you want to use a Visa or Mastercard?
                            <br>
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[CLOSE! CLOSE! CLOSE! CLOSE!]
                            <br>
                            <br>
                            <ul>
                                <li>Just to confirm, is (city) the city where you focus most of your business or is there another (city/zip) you’d like me to look up for you?</li>
                                <li>Perfect and is the best phone number for these new clients to call you on, the (READ THEIR NUMBER)? Ok, great, that’s the number we’ll put on your new Instagram ad, OK?</li>
                                <li>Now do you want your name to appear on your new ad as (say their FIRST &amp; LAST name) or do you have a TAG LINE you like to use for your MARKETING?</li>
                                <li>Great and which card do you want to use for this?</li>
                                <li>Ok and go ahead with the numbers on the front of the card whenever you are ready.</li>
                            </ul>
                        </div>
                        <div class="rebuttal" id="onvacation">
                            STEP 1 – RESPOND
                            <br>Perfect, so we’re not making any marketing decisions today. All we’re doing is securing your territory. After this my marketing team will take over and when you get back from vacation hopefully we’ll have a new pipeline of business for you to work with.
                            <br>
                            <br>STEP 2 – REASSURE
                            <br>In the meantime, keep in mind we are month-to-month so you’re never locked into anything and we’re on sale. I can’t wait to celebrate your first client with us.
                            <br>
                            <br>STEP 3 – RE-CLOSE
                            <br>The last step is just taking care of the billing. Which card did you want to use for this?
                            <br>
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[CLOSE! CLOSE! CLOSE! CLOSE!]
                            <br>
                            <br>
                            <ul>
                                <li>Just to confirm, is (city) the city where you focus most of your business or is there another (city/zip) you’d like me to look up for you?</li>
                                <li>Perfect and is the best phone number for these new clients to call you on, the (READ THEIR NUMBER)? Ok, great, that’s the number we’ll put on your new Instagram ad, OK?</li>
                                <li>Now do you want your name to appear on your new ad as (say their FIRST &amp; LAST name) or do you have a TAG LINE you like to use for your MARKETING?</li>
                                <li>Great and which card do you want to use for this?</li>
                                <li>Ok and go ahead with the numbers on the front of the card whenever you are ready.</li>
                            </ul>
                        </div>
                        <div class="rebuttal" id="illtryitforfree">
                            STEP 1 - RESPOND
                            <br>It's funny that you say that. Actually our service is a paid service and is well worth the 159 that we charge. Think about it...just one customer means thousands in commissions for you. What we're asking for is at least a month or two at our promotional rate to show you this can really work for you. Let's test this is (city).
                            <br>
                            <br>STEP 2 - REASSURE
                            <br>And while we do this, we're month-to-month so you're not locked into anything while we get an opportunity to show you some results. It’s pretty amazing how well this works. You’re going to love it!
                            <br>
                            <br>STEP 3 - RE-CLOSE
                            <br>So all I need to get you going is a good billing address. What's a good billing address for you?
                            <br>
                            <br>[ CLOSE! CLOSE! CLOSE! CLOSE!]
                            <br>
                            <br>-------------------------------------------------------------------
                            <ul>
                                <li>Just to confirm, is (city) the city where you focus most of your business or is there another (city/zip) you'd like me to look up for you?</li>
                                <li>Perfect and is the best phone number for these new clients to call you on, the (READ THEIR NUMBER)? Ok, great, that's the number we'll put on your new Instagram ad, OK?</li>
                                <li>Now do you want your name to appear on your new ad as (say their FIRST &amp; LAST name) or do you have a TAG LINE you like to use for your MARKETING?</li>
                                <li>Great and which card do you want to use for this?</li>
                                <li>Ok and go ahead with the numbers on the front of the card whenever you are ready.</li>
                            </ul>
                        </div>
                        <div class="rebuttal" id="myclientsarenot">
                            STEP 1 - RESPOND
                            <br>So that's what a lot people think but actually 43% of home buyers are on Instagram and that's not including Facebook. We've proven that using target marketing we can find new buyers and sellers in your area that need a Realtor right now and I believe we can do the same for you.
                            <br>
                            <br>STEP 2 - REASSURE
                            <br>The main reason you want to take advantage of this right now is, we're month-to-month and we're on sale. So your not locked into anything and you get to save money while you test us out. I can’t wait to see how well this works for you!
                            <br>
                            <br>STEP 3 - RE-CLOSE
                            <br>So all I need to finish up is a good card number. Did you want to use a Visa or Mastercard?
                            <br>
                            <br>[ CLOSE! CLOSE! CLOSE! CLOSE!]
                            <br>
                            <br>-------------------------------------------------------------------
                            <ul>
                                <li>Just to confirm, is (city) the city where you focus most of your business or is there another (city/zip) you'd like me to look up for you?</li>
                                <li>Perfect and is the best phone number for these new clients to call you on, the (READ THEIR NUMBER)? Ok, great, that's the number we'll put on your new Instagram ad, OK?</li>
                                <li>Now do you want your name to appear on your new ad as (say their FIRST &amp; LAST name) or do you have a TAG LINE you like to use for your MARKETING?</li>
                                <li>Great and which card do you want to use for this?</li>
                                <li>Ok and go ahead with the numbers on the front of the card whenever you are ready.</li>
                            </ul>
                        </div>
                        <div class="rebuttal" id="value1">Keep in mind we are month-to-month for a reason. Really what we want to do is show you some results without you having to make a long term commitment. Everyone knows that 99 percent of people looking to buy or sell a home start their search online. What makes us so effective is we take advantage of that and make sure your prospects see you at the same time! It’s pretty amazing how well our service works.
                            <br>I know you’re going to love this just like my other clients do!
                            <br>I’m excited to get you started…
                            <br>
                            <br>—-&gt; (EMAIL)
                            <br>Now, just to let you know we always send out an emailed receipt, what’s a good email address for ya.
                            <br>—-&gt; (CITY)
                            <br>Just to confirm, is (city) the city where you focus most of your business or is there another (city/zip) you’d like me to look up for you?
                            <br>—-&gt; (BILLING ADDRESS)
                            <br>So all I need to get you going is a good billing address, what’s a good billing address for you?
                            <br>—-&gt; (CREDIT CARD)
                            <br>Great and go ahead with the card whenever you’re ready.</div>
                        <div class="rebuttal" id="value2">You’re not making any long term decisions today. All we’re doing is securing your territory. My marketing team will call you tomorrow to go over your ad details. Right now all I’m trying to do is help you save money with our new client promotion. Normally we’re 350 dollars, but right now we’re waiving our set up fees and discounting it down to 159 with no contracts. Look, I know you’re going to love the results because we only show your ads to buyers and sellers in your local area, looking to take action right away!
                            <br>I can’t wait to see how well this works for you!
                            <br>I’m excited to get you started…
                            <br>
                            <br>—-&gt; (EMAIL)
                            <br>Now, just to let you know we always send out an emailed receipt, what’s a good email address for ya.
                            <br>—-&gt; (CITY)
                            <br>Just to confirm, is (city) the city where you focus most of your business or is there another (city/zip) you’d like me to look up for you?
                            <br>—-&gt; (BILLING ADDRESS)
                            <br>So all I need to get you going is a good billing address, what’s a good billing address for you?
                            <br>—-&gt; (CREDIT CARD)
                            <br>Great and go ahead with the card whenever you’re ready.</div>
                        <div class="rebuttal" id="value3">Most Realtors just want a marketing service that actually works and that’s the whole reason why we’re month-to-month. We’re just looking for the opportunity to show you that our service really does work without having to sign a contract. What we do is real target marketing. We GUARANTEE over 2000 views in front of buyers and sellers who are in the market for real estate, RIGHT NOW! It’s the fastest way to connect you with your best prospects without having to make a long term commitment with us! We’re pretty good at getting you the results you’re looking for!
                            <br>Honestly I think you’re going to love seeing how well this works!&nbsp;
                            <br>I’m excited to get you started…
                            <br>
                            <br>—-&gt; (EMAIL)
                            <br>Now, just to let you know we always send out an emailed receipt, what’s a good email address for ya.
                            <br>—-&gt; (CITY)
                            <br>Just to confirm, is (city) the city where you focus most of your business or is there another (city/zip) you’d like me to look up for you?
                            <br>—-&gt; (BILLING ADDRESS)
                            <br>So all I need to get you going is a good billing address, what’s a good billing address for you?
                            <br>—-&gt; (CREDIT CARD)
                            <br>Great and go ahead with the card whenever you’re ready.</div>
                        <div class="rebuttal" id="value4">Today is all about getting you our promotion pricing. Right now your territory is available at about half what we normally charge. So you get to save money while you give us a chance to bring you some new business. Picture using our service as the ultimate listing presentation tool. The next time you walk into a listing presentation, you can tell your potential client that when they list their home with you, it will be seen on Instagram and the Facebook Network over 2000 times per month by potential buyers who are specifically looking for a home in the area. You can say “I will sell your home quicker, get you more offers, and possibly even create a bidding war”. Homeowners love to hear that!
                            <br>I can’t wait to celebrate your first client with us.
                            <br>I’m excited to get you started…
                            <br>—-&gt; (EMAIL)
                            <br>Now, just to let you know we always send out an emailed receipt, what’s a good email address for ya.
                            <br>—-&gt; (CITY)
                            <br>Just to confirm, is (city) the city where you focus most of your business or is there another (city/zip) you’d like me to look up for you?
                            <br>—-&gt; (BILLING ADDRESS)
                            <br>So all I need to get you going is a good billing address, what’s a good billing address for you?
                            <br>—-&gt; (CREDIT CARD)
                            <br>Great and go ahead with the card whenever you’re ready.</div>
                        <div class="rebuttal" id="value5">We always build a relationship with our Realtors on a month-to-month basis because in the beginning we know you’re going to have some questions on how well our service works and truthfully we ONLY want you to stay with us month-to-month if you’re seeing results. The bottom line is we’re effective because Instagram and Facebook track what their users look for online and we use THAT information to put you at the RIGHT PLACE at the RIGHT TIME.
                            <br>
                            <br>My marketing team is pretty amazing at making sure we show your ads to your best prospects.
                            <br>It really is amazing how well this works. You’re going to love it!
                            <br>I’m excited to get you started…
                            <br>—-&gt; (EMAIL)
                            <br>Now, just to let you know we always send out an emailed receipt, what’s a good email address for ya.
                            <br>—-&gt; (CITY)
                            <br>Just to confirm, is (city) the city where you focus most of your business or is there another (city/zip) you’d like me to look up for you?
                            <br>—-&gt; (BILLING ADDRESS)
                            <br>So all I need to get you going is a good billing address, what’s a good billing address for you?
                            <br>—-&gt; (CREDIT CARD)
                            <br>Great and go ahead with the card whenever you’re ready.</div>
                        <div class="rebuttal" id="howitworks">That’s actually a great question! Most people don’t realize that when you sign up for an app like Instagram that you agree to let that app track your browser history.
                            <br>
                            <br>What we do is use that information to place your ad in front of real prospects who are actively looking to BUY or SELL in your local area. Really it’s the “magic” behind why target marketing is so effective. I'm sure you've seen the ads that follow you around online right?
                            <br>That's exactly what I'm talking about.
                            <br>
                            <br>It's pretty great how well it works!
                            <br>
                            <br>I'm excited to get you started...
                            <br>----&gt; (EMAIL)
                            <br>Now, just to let you know we always send out an emailed receipt, what's a good email address for ya.
                            <br>----&gt; (CITY)
                            <br>Just to confirm, is (city) the city where you focus most of your business or is there another (city/zip) you'd like me to look up for you?
                            <br>----&gt; (BILLING ADDRESS)
                            <br>So all I need to get you going is a good billing address, what's a good billing address for you?
                            <br>----&gt; (CREDIT CARD)
                            <br>Great and go ahead with the card whenever you're ready.</div>
                        <div class="rebuttal" id="callback"><strong>That’s a great question, I'm glad you brought that up! <img draggable="false" class="emoji" style="    width: 20px;" alt="🙂" src="https://s.w.org/images/core/emoji/11/svg/1f642.svg"> The reason our service works so well is exclusivity. We are not like Zillow or Realtor.com who can call you back at anytime and sell you the same zip code they just sold to 500 other realtors. (Chuckle) So, once we have you on board, your 2000 views are exclusive to you. Meaning we don’t sell your views to any of your competitors. Does that make sense? Perfect! So all we are doing right now is taking the discounted promotion off the market so that no other realtor can take it. This way you can put us to the test and make an educated decision on our service. You’re going to love it and I’m really excited for you. Let’s get you set up!<br><br>&nbsp;So when clients call you for the first time is this the best phone number for them to use? Great!&nbsp;</strong>
                            <br>----&gt; (EMAIL)
                            <br>Now, just to let you know we always send out an emailed receipt, what's a good email address for ya.
                            <br>----&gt; (CITY)
                            <br>Just to confirm, is (city) the city where you focus most of your business or is there another (city/zip) you'd like me to look up for you?
                            <br>----&gt; (BILLING ADDRESS)
                            <br>So all I need to get you going is a good billing address, what's a good billing address for you?
                            <br>----&gt; (CREDIT CARD)
                            <br>Great and go ahead with the card whenever you're ready.</div>
                        <div class="rebuttal" id="emailme">I would love to do that but I don’t have email. I take credit card numbers over the phone so my company doesn’t allow me to email ANYTHING out. Besides, that’s actually the reason why we’re month-to-month. We realize a lot of people need to see proof that this will work for them AND during your first month with us we know it just takes ONE new client to impress you. So you work with buyers and sellers, RIGHT? Perfect! I can’t wait to celebrate your first client with us.It’s pretty great how well it works! I’m excited to get you started…
                            <br>—-&gt; (EMAIL)
                            <br>Now, just to let you know we always send out an emailed receipt, what’s a good email address for ya.
                            <br>—-&gt; (CITY)
                            <br>Just to confirm, is (city) the city where you focus most of your business or is there another (city/zip) you’d like me to look up for you?
                            <br>—-&gt; (BILLING ADDRESS)
                            <br>So all I need to get you going is a good billing address, what’s a good billing address for you?
                            <br>—-&gt; (CREDIT CARD)
                            <br>Great and go ahead with the card whenever you’re ready.</div>
                        <div class="rebuttal" id="imbusy">I hear ya, all we’re doing right now is just securing your territory so another realtor doesn’t take it. It’s super quick. Is (city) the best area to find you new clients?
                            <br>Perfect, you’re going to love working with my marketing team.
                            <br>
                            <br>I’m excited to get you started…
                            <br>—-&gt; (EMAIL)
                            <br>Now, just to let you know we always send out an emailed receipt, what’s a good email address for ya.
                            <br>—-&gt; (CITY)
                            <br>Just to confirm, is (city) the city where you focus most of your business or is there another (city/zip) you’d like me to look up for you?
                            <br>—-&gt; (BILLING ADDRESS)
                            <br>So all I need to get you going is a good billing address, what’s a good billing address for you?
                            <br>—-&gt; (CREDIT CARD)
                            <br>Great and go ahead with the card whenever you’re ready.</div>
                        <div class="rebuttal" id="driving">That’s not a problem, I’ll do all the heavy lifting and then when you get to a safe place we can wrap up the billing info. Now is this the best phone number for these new client to reach on?
                            <br>Perfect, I know you’re going to love this just like my other clients do!
                            <br>
                            <br>I’m excited to get you started…
                            <br>—-&gt; (EMAIL)
                            <br>Now, just to let you know we always send out an emailed receipt, what’s a good email address for ya.
                            <br>—-&gt; (CITY)
                            <br>Just to confirm, is (city) the city where you focus most of your business or is there another (city/zip) you’d like me to look up for you?
                            <br>—-&gt; (BILLING ADDRESS)
                            <br>So all I need to get you going is a good billing address, what’s a good billing address for you?
                            <br>—-&gt; (CREDIT CARD)
                            <br>Great and go ahead with the card whenever you’re ready.</div>
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
        <script type="text/javascript" src="assets/js/script.js"></script>

    </body>

    </html>