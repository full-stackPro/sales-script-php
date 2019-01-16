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
        <title>Sign Up | Sale Script</title>
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
    </head>

    <body>
        <ul id="fixed-nav">
            <li class="active"><a href="index.php">Frontline</a></li>
            <li><a href="senior.php">Senior</a></li>
            <li class=""><a href="" id="savechanges" type="signup">Save</a></li>
            <li class=""><a href="" id="export" type="signup">Export</a></li>
        </ul>
        <div class="ajax-response" style="display: none;">Updating current content...</div>
        <div class="popup" data-popup="popup-1">
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
                    <input type="submit" name="submit" id="submitbtn" value="Add New Question" disabled="">
                </form>
                <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
            </div>
        </div>
        <div class="wrapper editor ">

            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Instarank Marketing</h3>
                </div>
                <ul class="question" id="sigupqlist1">
                    <li>
                        <h3>Not Interested / No Money / Etc.</h3>
                        <span class="bgcolorselector">&nbsp;</span> <span class="coloselector">&nbsp;</span>
                    </li>
                    <li class="inline-buttons ui-sortable">
                        <div class="ui-sortable-handle">
                            <button class="buttons" value="explanation1">Value 1<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" value="explanation2">2<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" value="explanation3">3<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <span class="fa fa-plus-circle ui-sortable-handle" data-popup-open="popup-1"></span>
                    </li>
                </ul>
                <ul class="question" id="sigupqlist2">
                    <li>
                        <h3>Call Back / Email / Research / Etc.</h3>
                        <span class="bgcolorselector">&nbsp;</span> <span class="coloselector">&nbsp;</span>
                    </li>
                    <li class="inline-buttons ui-sortable">
                        <div class="ui-sortable-handle">
                            <button class="buttons" value="callEmail1">Urgency 1<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" value="callEmail2">2<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" value="callEmail3">3<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <span class="fa fa-plus-circle ui-sortable-handle" data-popup-open="popup-1"></span>
                    </li>
                </ul>
                <ul class="question" id="sigupqlist3">
                    <li>
                        <h3>Won't Give Card / Scam / Etc.</h3>
                        <span class="bgcolorselector">&nbsp;</span> <span class="coloselector">&nbsp;</span>
                    </li>
                    <li class="inline-buttons ui-sortable">
                        <div class="ui-sortable-handle">
                            <button class="buttons" value="trust1">Trust 1<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" value="trust2">2<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" value="trust3">3<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <span class="fa fa-plus-circle ui-sortable-handle" data-popup-open="popup-1"></span>
                    </li>
                </ul>
                <ul id="value">
                    <li>
                        <h3>THEN HERE:</h3>
                        <span class="bgcolorselector">&nbsp;</span> <span class="coloselector">&nbsp;</span>
                    </li>
                    <li class="inline-buttons ui-sortable">
                        <div class="ui-sortable-handle">
                            <button class="buttons" value="winter1">Winter 1<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" value="winter2">2<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" value="how1">How Does FB Know?<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" value="noMoney">Budget<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" value="myself">Do It Myself<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" value="triedBefore">Already Doing This/Other<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" value="leadService">Leads / Clicks / Calls<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" value="newAgent1">New Agent<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" value="newAgent2">2<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" value="askPartner">Team / Partner / Broker<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" value="trulia">Trulia or Zillow<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" value="aboutAds">About the Ads<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" value="random1">Don't Know 1<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" value="random2">2<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <span class="fa fa-plus-circle ui-sortable-handle" data-popup-open="popup-1"></span>
                    </li>
                </ul>
                <ul id="laststep">
                    <li>
                        <h3>THEN HERE:</h3>
                        <span class="bgcolorselector">&nbsp;</span> <span class="coloselector">&nbsp;</span>
                    </li>
                    <li class="inline-buttons ui-sortable">
                        <div class="ui-sortable-handle">
                            <button class="buttons" value="10min">10 Min Warning<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <span class="fa fa-plus-circle ui-sortable-handle" data-popup-open="popup-1"></span>
                    </li>
                </ul>
            </nav>
            <!-- Page Content Holder -->
            <div id="content">
                <div id="topArea">
                    <h2 style="text-align: center;"><u>A</u>LWAYS!   <u>B</u>E!   <u>C</u>LOSING!</h2> --- WHAT IS THE <strong>BILLING ADDRESS</strong> FOR THE CARD YOU'D LIKE TO USE?
                    <br>--- WILL YOU BE USING A <strong>VISA, MASTERCARD, AMERICAN EXPRESS, OR DISCOVER ?</strong>
                    <br>--- I CAN TAKE THE NUMBERS ON THE FRONT OF YOUR CARD, WHENEVER YOU'RE READY.
                    <br>--- IS THE BEST <strong>PHONE NUMBER</strong> FOR YOUR AD THE ONE I CALLED YOU ON - (SAY CLIENT #)?
                    <br>--- AND WOULD YOU LIKE YOUR <strong>NAME</strong> TO APPEAR ON YOUR AD AS (CLIENT NAME)?
                    <br>--- IS YOUR (WEBSITE) PAGE A GOOD PLACE TO SEND NEW CLIENTS?
                    <br>--- WHAT'S THE BEST <strong>EMAIL ADDRESS</strong> FOR US TO SEND YOUR RECEIPT TO WHEN WE'RE DONE?
                    <br>
                    <p style="text-align: center;">    [[THE AVERAGE CUSTOMER TAKES TEN CLOSING QUESTIONS -- SO <u>GET 10 "NO"S</u>!!!]]</p>
                    <p><em>Okay - I am going to transfer you to our verification department who will quickly confirm the information you've given me. You may hear hold music while I transfer you, okay? Thank you again (NAME), and have a great day!</em><strong><br></strong></p>
                    <p align="center"><strong>[PUT CLIENT ON HOLD - COMPLETE AND SUBMIT SIGNUP FORM - THEN TRANSFER CUSTOMER]</strong></p>
                    <p style="text-align: center;"><a href="index.php">(RESET SCRIPT - I got a Hang-Up or a Credit Card!)</a></p>
                </div>
                <div id="answers-section">
                    <div id="rebuttalArea">
                        <div id="default">[click a rebuttal to load content here]</div>
                        <div class="rebuttal" id="explanation1">You’ve used Facebook before, right?
                            <br>
                            <br>Okay, so you’ve probably noticed that Facebook ACTUALLY places a TARGETED ad between every few posts on your page, and those ads are DESIGNED to show you a product you’re ALREADY interested in. Now, Facebook knows what you want because they can track your browsing history. So when one of your PROSPECTS goes online to Trulia or Zillow, or they use a mortgage calculator, Facebook knows about it! AND that's where WE come in! When someone's been searching for real estate in YOUR area… That's when we introduce you to them. So, right when they need you most, your prospect will see your full-sized, professionally-designed ad right in the main section of their page. Then they’ll keep seeing your ad from time to time until they’re ready to act. Does that make sense?
                            <br>
                            <br>Great! Now we guarantee that we’ll do that 2,000 times every single month! All I need to get you started is the email you’d like us to send your receipt to when we’re done...</div>
                        <div class="rebuttal" id="explanation2">Are you able to work with sellers?
                            <br>
                            <br>Perfect! So, next time you’re looking to pick up a listing, you can tell your clients that you’ll be showing their home to local buyers on their own Facebook News Feeds. We can even make you a custom listing ad that you can show them! When you need a listing, we can target sellers - and when you need to sell, we can target buyers. When you have an open house, you can call us up, and we’ll design you the PERFECT ad for that listing, then switch it back when it’s over. Or if you’re busy, you can let us handle your entire marketing campaign and we’ll show you what we can do. Either way, you'll get a full breakdown in your monthly performance report!
                            <br>
                            <br>Now I have to get this going, but I have most of the information that I need - looks like the next thing I need to get is the best email address for us to send your receipt to when we're done...</div>
                        <div class="rebuttal" id="explanation3">So I’m sure you’ve heard that your market lives on Facebook, right?
                            <br>
                            <br>Well, the average first-time home-buyer spends over an HOUR a DAY on Facebook - and it’s where they’re the most engaged online. Obviously, it’s where you want to be, but it’s not as easy as just “being there.” That’s why we have the best marketing and design team in the business. We do this for thousands of Realtors nationwide, and we’ve perfected all of the details. That’s how we have a 92% retention rate! We’ll be there to work with you, as much or as little as you want. And of course, we’ll show you our work with a full performance report that breaks down your account details every month, before we even bill you.
                            <br>
                            <br>And it’s month-to-month, with no contracts or commitments, so just give us one month to show you what kind of company we are, and I know you’ll want to stay with us as long as you’re in real estate. All I need to get you started is the billing address for the card you’d like to use…</div>
                        <div class="rebuttal" id="how1">Well, when you first sign up, Facebook downloads a file onto your computer called a “cookie,” and that cookie watches everything you do online, and it sends that information back to Facebook. And their computers are amazing at analyzing our behaviors to find out we want. That's because Facebook has spent billions of dollars on their programming so that companies like us can target ads to exactly the right people at exactly the right time. So if someone in your area is getting ready to buy or sell a home, we CAN make sure they see your ad - at EXACTLY the right time. But there are only so many interested buyers and sellers in (CITY), so we have to get you signed up today, before we run out of positions. All I need to get you started is the billing address for the card you’d like to use.</div>
                        <div class="rebuttal" id="how2">Well, we're not Facebook, so I only know so much. You sell homes and you don't really understand how to build a home, but you do understand how to sell it. Well, we understand marketing, but we don't understand every part about Facebook and how they do it. It's a 60 billion dollar a year industry for them, and we've got the real estate end of it. We're just offering you an opportunity to get in and make some money, get these people seeing you, and we're doing it without a contract, we're doing it with a money-back guarantee, and it's always month to month. We're just looking for 30 days to earn your business and show you what we can do for you. All I really need is a billing address on the card you want to use, and we can get you over to verification and get you in front of your market.</div>
                        <div class="rebuttal" id="callEmail1">(I totally understand... )
                            <br>
                            <br>The thing is - I wish I could hold this position for you. But I can't because there are only a few positions available for each city, and we're calling YOUR area right now. We have to limit space so that our clients don’t compete with each other. But that’s why we cut the price by more than half and made it month-to-month, just for buying right now. We have to keep our clients for the long term to stay in business, so by giving it to you with no contract, you know we have to keep you happy. And you get to keep that discount for as long as you stay with us. So what’s the best email address to send your receipt to when we’re done?</div>
                        <div class="rebuttal" id="callEmail2">(I understand…)
                            <br>
                            <br>But even if I could hold onto this for you, it’s not the kind of thing you’d WANT to wait for. We’re going to connect you with ACTUAL buyers and sellers in your community - several THOUSAND TIMES in the next few weeks alone! That’s HUNDREDS of connections in the next few DAYS! These are real prospects who are already active and looking for you online RIGHT NOW. And I HAVE to find a Realtor to put in front of those prospects TODAY, so I want that to be you! There’s no contracts and no commitments, and your two thousand views are guaranteed, so there’s nothing to lose! So I can take the numbers on the front of your card when you’re ready.</div>
                        <div class="rebuttal" id="callEmail3"><em>(So here's the deal...)</em>
                            <br>This just won’t be available later. That's how we keep costs down, with a simple system. I’m on a program that gives me leads, and I move down the list from agent to agent until I find someone to work with in (CITY). So the thing is, this position will obviously go to one of your competitors if I can’t get it to you. But these buyers and sellers aren’t being marketed to yet, so you won’t feel the difference until it’s too late. And I literally CAN’T call you back or email you, so I really HAVE to get you signed up today.
                            <br>
                            <br>So let’s get you going and the worst case is we get you seen by buyers and sellers over two thousand times in the next four weeks, AND we establish you in your community as the local real estate pro, AND we give you a solid month of building your brand throughout Facebook. So all I need to get you going is the billing address for the card you’d like to use.</div>
                        <div class="rebuttal" id="winter1">(Of course…)
                            <br>Money is tight in December for most people, but especially for Realtors. But while you’re spending on friends and family, you can’t forget about your OWN needs. At $140, this is a small present for yourself, and it’s one you get to write off on your taxes. And while you’re focused on your own life, let us handle your business. We’ll build your pipeline so that you can enjoy the holidays AND be ready for the new year when it comes. Then, when buyers and sellers in your area ARE ready to act, you’ll already be top-of-mind and established as their local real estate pro. All I need to get you started is the email address you’d like us to send your receipt to when we’re done...</div>
                        <div class="rebuttal" id="winter2">(I totally get that…)
                            <br>Here’s the thing: Facebook is about building your brand, and you want to already BE established in your community when January comes around. This is the season when buyers and sellers are thinking and looking, and they’re figuring out who they want to work with. This is actually the BEST time of year to plant your seeds! It’s also the best time to carve out your territory and block out your competitors, because our positions are very limited. So let’s get you locked down today, - all I need to get you started is the billing address for the card you’d like to use.</div>
                        <div class="rebuttal" id="trust1"><em>I understand, but we do this with thousands of agents…&nbsp;</em>
                            <br>So you know, we’re on a secure line and this is all done on a system that handles hundreds of transactions a day. We handle your information just like your bank does. And as soon as I submit your information, I’ll transfer you to a verification officer who will go over every detail with you and answer any questions, on a recorded phone call. So, I don’t process any payment, and verification won’t charge your card unless you verbally agree to everything on recording. So the next thing I need is just the number on the front of your card, whenever you’re ready...</div>
                        <div class="rebuttal" id="trust2"><em>That's understandable...</em>
                            <br>Let me give you all of our contact information before we move forward.
                            <br>
                            <br>My name is (YOUR NAME) and our company is Resultli. That's "RESULT" "L" "I" as in Igloo, and you can find us at resultli DOT COM. You can reach us toll free at 1.800.364.3480, Monday through Friday from 9:00am to 5:00pm Pacific Time, but that's for CUSTOMER service, of course - you can't call in to purchase. So like it says on our site, I'm right here in our call center location, in Beaverton, Oregon, just southwest of Portland.
                            <br>
                            <br>Now, we'll be your personal marketing team throughout the life of the account. So, please feel free to contact us with any questions. You'll be receiving an email receipt once we're through, so what would be the best email address for us to send it to?</div>
                        <div class="rebuttal" id="push1"><em>Okay, no problem...</em>
                            <br>Well you know our service is month to month. There are no contracts. We don't have any cancellation fees.  I would really suggest just giving us 30 days to show you what we can do for you and then, if you don't want to continue the service after that month, you don't have to.  We only want you to stay if you love it, and I know you will.  So let’s do this - just give us a month - all I need is your billing address, whenever you’re ready.</div>
                        <div class="rebuttal" id="trust3"><em>Of course...</em>
                            <br>Are you near a computer?
                            <br>
                            <br>[YES] Let me show you our company website. Go ahead and open up a new web browser and let me know when you're ready. In the ""address bar"" type in www dot "RESULT" "L" "I" dot com and let me know when you see the main page... [Demo site, talk through it] ...Now I have most of the information I need to get you started. All I need now is the billing address for the card you'd like to use, whenever you're ready.
                            <br>
                            <br>[NO] Okay, then I can't show you our website. But I can tell you a couple of things. First, we're obviously a legitimate company - I'm sure you can hear the call center in the background. And I can also tell you that we're on a secure line and this is actually much more secure than using your card on the internet or swiping it in person. You can also trust the product and our service because the views are guaranteed and you can cancel anytime. Since we want to keep you for the long term, we'll be here for you every step of the way. So let's get this going - you won't regret it - I can take the numbers on the front of your card, whenever you're ready.</div>
                        <div class="rebuttal" id="noMoney">Perfect!
                            <br>
                            <br>Most of my clients have spent their budget for the year too...And that's the exact reason why we have our service on promotion right now!
                            <br>
                            <br>We not only want to save you money when you’re getting started with us but we want to help you replenish your budget! Think about it this way, just one house sold will not only pay for this 10 times over, but it'll help you put a few thousand in your OWN pocket as well!
                            <br>
                            <br>We have a 92% retention rate with our clients and ALL of them are on a month-to-month with us--I guess what I'm trying to say is, they stay with us because we get them results and I know we can get you results too--THAT MAKE SENSE?
                            <br>
                            <br>Great! So what's the best email address to get you set up with so we can start showing you some results?</div>
                        <div class="rebuttal" id="triedBefore">Perfect!
                            <br>
                            <br>That makes this an even better option for you...we're not asking you to stop doing what you're doing--Actually this would be a great time to test us against anything you have going on right now. We love it when people do a side-by-side comparison between our service and something else because most of the time we get you way better results. Regardless, we're month-to-month so you have nothing to lose...you can literally test drive us for 30 days and if we get you better results then keep us--if not, you can cancel with no notice or cancellation fees...MAKE SENSE?
                            <br>
                            <br>Great! So what's the best email address to get you set up with so we can start showing you some results?</div>
                        <div class="rebuttal" id="myself">Of course, you can do this yourself. But unless it’s a hobby you’re really into, it’s a lot to juggle, and it can be expensive and time-consuming. We do EXACTLY THIS for thousands of Realtors nationwide, and that’s experience you literally can’t get anywhere else. We’ve tested hundreds of ad designs and copy. In fact, the professional graphic design of your ad is worth more than $140! Plus, you’ll have a whole marketing team at your disposal, so that’s worth the cost again! We’ll even give you a full performance report every month, that will break down all the details of your campaign. So try us out side-by-side for a month and see how we compare - the worst case is we’ll get you an extra 2,000 views! All I need to get you going is the billing address for the card you’d like to use.</div>
                        <div class="rebuttal" id="competitor">That's no problem at all, what we do is a perfect way to supplement what you're already doing. I can quickly tell you how the service works so at least you know your options...
                            <br>
                            <br>(it's real simple how this works...)</div>
                        <div class="rebuttal" id="leadService">So we’re not a leads service at all. There’s no way to know how many clicks or calls you’ll get, either - it varies from area to area and a lot of other factors. But the real value, here, is in the social nature of Facebook, and the way that we repeat your ads over time. We’re ESTABLISHING you in your community as the local pro. That MIGHT lead to someone calling you from your ad, OR clicking through to your website to fill out a lead capture. But it also might lead to someone recognizing you at the grocery store or a PTO meeting and starting a conversation that leads to a listing. That’s what’s great about Facebook - it’s social! But that’s also why we need to get you signed up right away, because that’s something you should always be building! All I need to get you signed up is the billing address for the card you’d like to use.</div>
                        <div class="rebuttal" id="newAgent1">That’s great to hear, congratulations. That’s probably why you’re on my calling list, most of my customers are new agents. That’s the biggest reason that we knocked the price down so far: we want to make it affordable for you to get your foot in the door AND level the playing field. When these new clients see your sleek, custom ad on their own Facebook News Feeds, they’ll see you as the local pro. You can even get ahead of the established Realtors in your area, and for a lot less than any other options. So this should be your first step into the marketing world, and I can get you up on Facebook in less than 48 hours - is this the phone number you’d like on your ad?</div>
                        <div class="rebuttal" id="newAgent2">Of course, there’s so much to think about as a New Agent. Luckily, your company has already made you a webpage with all of your information - that’s how we found you! And we do this for New Realtors every day, so we’ve got all the details covered on our end, too. Of course, you’ve got your license, so you can put this on your personal card for now and hold onto your receipt for tax write-off purposes. What’s important is that you take advantage of the ONE opportunity you’ll get to set up your pipeline when you really need to, because it takes time to build your brand and develop your client base. And we’re here to grow with you in the long term, so you’ll have your own marketing team at your fingertips, here to answer any questions you might have and dedicated to your success every single month. All I need to get you started is the billing address for the card you’d like to use...</div>
                        <div class="rebuttal" id="askPartner">Perfect!
                            <br>
                            <br>And I understand why you would say that but keep in mind that's exactly why our service MONTH-TO-MONTH!
                            <br>
                            <br>We're not asking you guys to make a long term decision... we're just asking for 30 days so we can have an opportunity to show you some results. Since we're month-to-month you're not locked into a contract so that means you get to try us out for a month with no strings attached--We already know our service works--In fact, we're pretty proud of the fact that we have a 92% retention rate with our clients and ALL OF THEM are on a month-to-month with us--They could literally leave us at any time but they stay with us because we get them results and I know we can get you results too--THAT MAKE SENSE?
                            <br>
                            <br>Great! So what's the best email address to get you set up with so we can start showing you some results?
                            <br>
                            <br>
                        </div>
                        <div class="rebuttal" id="trulia"><em>That's actually great to hear...</em>
                            <br>Those are great companies, but they are completely different than what we do. They advertise on Facebook to get buyers and sellers to <strong>THEIR</strong> website. Then they place you in a directory along with hundreds of other agents or they sell you leads. But we work with you as an individual agent and your ad in front of real buyers and sellers on their own News Feeds, where we can link to a (Trulia/Zillow) profile if you'd like. So you can really stretch the money you're already spending by adding this direct route to your profile, and we won’t charge you any commission or extra fees. <strong>All I need to get you started is the billing address for the card you'd like to use. </strong></div>
                        <div class="rebuttal" id="aboutAds">We have a design department that makes custom ads for thousands of Realtors, for this exact service. We test those ads through millions of views to determine which ads work the best, so they’re always evolving to best serve you and your market. We only place them on active news feeds of active buyers and sellers in your area. They look great, work great, and give your prospects all the information they need. But if you do have special needs, you can contact your marketing team at any time to customize your ad as you need it.
                            <br>
                            <br>But we only work with real estate agents, so we know what works. That’s why we do this month to month, with no contract or cancellation fees, so that the burden’s on us to prove ourselves to you every single month. So let us bring you some business - All I need to get you started is the billing address for the card you’d like to use.</div>
                        <div class="rebuttal" id="random1">You know, I'm not really sure. I'm just in the sales department. When I transfer you to our verification department, they will gladly answer any questions about our service and confirm everything with you BEFORE we process any payment. What I can tell you is that our service IS working for thousands of realtors nationwide, and that's risk free with no contracts, so we have to work hard to earn your business every month. What's important right now is that we secure this position so that I can transfer the call, all I need to lock this down is (the email address you'd like us to send your receipt to when we're done). </div>
                        <div class="rebuttal" id="random2">I couldn’t answer that but I know that we have a great customer service department who is here to help you with any questions you may have in the future. From analyzing your ads to helping you with your website, they’re available to help 5 days a week. (Move to Next VALUE - or CLOSE)</div>
                        <div class="rebuttal" id="10min">So, (NAME), I understand that you have to be careful where you spend your marketing dollars. But at the end of the day, this is $140 for a fully managed Facebook marketing campaign with professional design and a targeted market. That’s less than a night out, and it’s normally $300 a month. Now, it’s my job to find motivated agents for this promotion, so I’m calling your area to find a Realtor and then we’re moving on. That’s why we have a verification department to go over the details with you before we bill you. But I’ve GOT to get back to signing people up, so if you’re not ready to go, I have to get to the next agent on my list. But I know this is going to work great for you, so I can take down that billing address, whenever you’re ready.
                            <br>
                            <br>[IF NO BILLING ADDRESS…] Okay, thank you so much for your time, (NAME) - good luck in all your business endeavors and I hope you have a great day!</div>
                    </div>
                    <div id="introPrompt"><a href="index.php">(Hang Up / Transfer - RESET)</a></div>
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