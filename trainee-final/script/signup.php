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
    <title>Sign Up Trainee | Sale Script</title>
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
  </head>
  <body>
    <ul id="fixed-nav">
      <li class=""><a href="" id="savechanges" type="signup">Save</a></li>
      <li class=""><a href="" id="export" type="signup">Export</a></li>
    </ul>
    <div class="ajax-response" style="display: block;">Exporting Agent Version...</div>
    <div class="wrapper editor jquery-notebook" data-jquery-notebook-id="1" editor-mode="multiline" editor-placeholder="Your text here..."  style="position: relative;">
      <!-- Sidebar Holder -->
      <nav id="sidebar">
        <div class="sidebar-header">
          <h3>Trainee Script</h3>
        </div>
        <ul class="question list_sortable ui-sortable" id="sigupqlist1">
          <li class="static">
            <h3 class="ui-sortable-handle">These FIRST:</h3>
          </li>
          <li class="inline-buttons ui-sortable ui-sortable-handle">
            <div class="ui-sortable-handle">
              <button class="buttons" value="notInterested1">Value 1<span class="fa fa-minus-circle del"></span></button>
            </div>
            <div class="ui-sortable-handle">
              <button class="buttons" value="notInterested2">2<span class="fa fa-minus-circle del"></span></button>
            </div>
            <div class="ui-sortable-handle">
              <button class="buttons" value="notInterested3">3<span class="fa fa-minus-circle del"></span></button>
            </div>
            <div class="ui-sortable-handle">
              <button class="buttons" value="notInterested4">4<span class="fa fa-minus-circle del"></span></button>
            </div>
          </li>
          <li class="inline-buttons ui-sortable ui-sortable-handle">
            <div class="ui-sortable-handle">
              <button class="buttons" value="callEmail1">URGENCY 1<span class="fa fa-minus-circle del"></span></button>
            </div>
            <div class="ui-sortable-handle">
              <button class="buttons" value="callEmail2">2<span class="fa fa-minus-circle del"></span></button>
            </div>
            <div class="ui-sortable-handle">
              <button class="buttons" value="callEmail3">3<span class="fa fa-minus-circle del"></span></button>
            </div>
          </li>
          <li class="inline-buttons ui-sortable ui-sortable-handle">
            <div class="ui-sortable-handle">
              <button class="buttons" value="howItWorks1">How It Works<span class="fa fa-minus-circle del"></span></button>
            </div>
          </li>
        </ul>
        <ul class="question list_sortable ui-sortable" id="sigupqlist2">
          <li class="static">
            <h3 class="ui-sortable-handle">THEN These:</h3>
          </li>
          <li class="inline-buttons ui-sortable ui-sortable-handle">
            <div class="ui-sortable-handle">
              <button class="buttons" value="howManySlots">How Many Slots?<span class="fa fa-minus-circle del"></span></button>
            </div>
            <div class="ui-sortable-handle">
              <button class="buttons" value="customizeAd">Customize Ad<span class="fa fa-minus-circle del"></span></button>
            </div>
            <div class="ui-sortable-handle">
              <button class="buttons" value="thatCity">Have to be that City<span class="fa fa-minus-circle del"></span></button>
            </div>
          </li>
          <li class="inline-buttons ui-sortable ui-sortable-handle">
            <div class="ui-sortable-handle">
              <button class="buttons" value="leadsCalls1">Leads/Calls 1<span class="fa fa-minus-circle del"></span></button>
            </div>
            <div class="ui-sortable-handle">
              <button class="buttons" value="leadsCalls2">2<span class="fa fa-minus-circle del"></span></button>
            </div>
          </li>
          <li class="inline-buttons ui-sortable ui-sortable-handle">
            <div class="ui-sortable-handle">
              <button class="buttons" value="noSite1">No/Don't Like Website 1<span class="fa fa-minus-circle del"></span></button>
            </div>
            <div class="ui-sortable-handle">
              <button class="buttons" value="noSite2">2<span class="fa fa-minus-circle del"></span></button>
            </div>
            <div class="ui-sortable-handle">
              <button class="buttons" value="noSite3">3<span class="fa fa-minus-circle del"></span></button>
            </div>
          </li>
          <li class="inline-buttons ui-sortable ui-sortable-handle">
            <div class="ui-sortable-handle">
              <button class="buttons" value="random">Random Question<span class="fa fa-minus-circle del"></span></button>
            </div>
          </li>
        </ul>
        <ul class="question list_sortable ui-sortable" id="sigupqlist3">
          <li class="static">
            <h3 class="ui-sortable-handle">&nbsp;</h3>
          </li>
          <li class="inline-buttons ui-sortable ui-sortable-handle">
            <div class="ui-sortable-handle">
              <button class="buttons" value="noMoney1">No Money 1<span class="fa fa-minus-circle del"></span></button>
            </div>
            <div class="ui-sortable-handle">
              <button class="buttons" value="noMoney2">2<span class="fa fa-minus-circle del"></span></button>
            </div>
          </li>
          <li class="inline-buttons ui-sortable ui-sortable-handle">
            <div class="ui-sortable-handle">
              <button class="buttons" value="noCard">No Credit Card<span class="fa fa-minus-circle del"></span></button>
            </div>
            <div class="ui-sortable-handle">
              <button class="buttons" value="inCar">In My Car<span class="fa fa-minus-circle del"></span></button>
            </div>
          </li>
          <li class="inline-buttons ui-sortable ui-sortable-handle">
            <div class="ui-sortable-handle">
              <button class="buttons" value="newAgent1">New Agent1<span class="fa fa-minus-circle del"></span></button>
            </div>
            <div class="ui-sortable-handle">
              <button class="buttons" value="newAgent2">2<span class="fa fa-minus-circle del"></span></button>
            </div>
          </li>
          <li class="inline-buttons ui-sortable ui-sortable-handle">
            <div class="ui-sortable-handle">
              <button class="buttons" value="askPartner">Ask Partner<span class="fa fa-minus-circle del"></span></button>
            </div>
          </li>
        </ul>
        <ul class="question list_sortable ui-sortable" id="sigupqlist4">
          <li class="static">
            <h3 class="ui-sortable-handle">&nbsp;</h3>
          </li>
          <li class="inline-buttons ui-sortable ui-sortable-handle">
            <div class="ui-sortable-handle">
              <button class="buttons" value="trust1">Trust/Who Are You 1<span class="fa fa-minus-circle del"></span></button>
            </div>
            <div class="ui-sortable-handle">
              <button class="buttons" value="trust2">2<span class="fa fa-minus-circle del"></span></button>
            </div>
            <div class="ui-sortable-handle">
              <button class="buttons" value="trust3">3<span class="fa fa-minus-circle del"></span></button>
            </div>
            <div class="ui-sortable-handle">
              <button class="buttons" value="trust4">4<span class="fa fa-minus-circle del"></span></button>
            </div>
          </li>
          <li class="inline-buttons ui-sortable ui-sortable-handle">
            <div class="ui-sortable-handle">
              <button class="buttons" value="liveClient1">Talk To/See/Live Client 1<span class="fa fa-minus-circle del"></span></button>
            </div>
            <div class="ui-sortable-handle">
              <button class="buttons" value="liveClient2">2<span class="fa fa-minus-circle del"></span></button>
            </div>
          </li>
          <li class="inline-buttons ui-sortable ui-sortable-handle">
            <div class="ui-sortable-handle">
              <button class="buttons" value="guarantee1">Guarantee 1<span class="fa fa-minus-circle del"></span></button>
            </div>
            <div class="ui-sortable-handle">
              <button class="buttons" value="guarantee2">2<span class="fa fa-minus-circle del"></span></button>
            </div>
            <div class="ui-sortable-handle">
              <button class="buttons" value="guarantee3">3<span class="fa fa-minus-circle del"></span></button>
            </div>
          </li>
          <li class="inline-buttons ui-sortable ui-sortable-handle">
            <div class="ui-sortable-handle">
              <button class="buttons" value="seeSite1">See Website 1<span class="fa fa-minus-circle del"></span></button>
            </div>
          </li>
          <li class="inline-buttons ui-sortable ui-sortable-handle">
            <div class="ui-sortable-handle">
              <button class="buttons" value="reviews1">Online Reviews 1<span class="fa fa-minus-circle del"></span></button>
            </div>
            <div class="ui-sortable-handle">
              <button class="buttons" value="reviews2">(2-YELP)<span class="fa fa-minus-circle del"></span></button>
            </div>
          </li>
          <li class="inline-buttons ui-sortable ui-sortable-handle">
            <div class="ui-sortable-handle">
              <button class="buttons" value="threeYears">"Three Years in Business"<span class="fa fa-minus-circle del"></span></button>
            </div>
          </li>
        </ul>
        <ul class="question list_sortable ui-sortable" id="sigupqlist5">
          <li class="static">
            <h3 class="ui-sortable-handle">&nbsp;</h3>
          </li>
          <li class="inline-buttons ui-sortable ui-sortable-handle">
            <div class="ui-sortable-handle">
              <button class="buttons" value="tooMuchBiz">Too Much Business<span class="fa fa-minus-circle del"></span></button>
            </div>
            <div class="ui-sortable-handle">
              <button class="buttons" value="triedBefore">Tried This Before<span class="fa fa-minus-circle del"></span></button>
            </div>
            <div class="ui-sortable-handle">
              <button class="buttons" value="truliaZillow">Trulia/Zillow<span class="fa fa-minus-circle del"></span></button>
            </div>
            <div class="ui-sortable-handle">
              <button class="buttons" value="adwerx">Adwerx<span class="fa fa-minus-circle del"></span></button>
            </div>
            <div class="ui-sortable-handle">
              <button class="buttons" value="keyword">Keyword Optimization<span class="fa fa-minus-circle del"></span></button>
            </div>
          </li>
          <li class="inline-buttons ui-sortable ui-sortable-handle">
            <div class="ui-sortable-handle">
              <button class="buttons" value="otherMktg1">Other Marketing 1<span class="fa fa-minus-circle del"></span></button>
            </div>
            <div class="ui-sortable-handle">
              <button class="buttons" value="otherMktg2">2<span class="fa fa-minus-circle del"></span></button>
            </div>
          </li>
        </ul>
      </nav>
      <!-- Page Content Holder -->
      <div id="content">
        <div id="topArea">
          <p id="explanationScript"><em><strong>Now</strong></em>, this service is normally $299 per month - but today, with our new client promotion, we’re offering this at only $139.95 plus a $19.95 setup fee.  It’s completely month to month, with no contracts or commitments.  And that price is good for the life of your account.  Now, like I said, we’re calling your area right now, so we can only do this for you today - but I can take this position off the market for you and actually have your ad done and online within 48 hours - so is this the best phone number for these new clients to call you?
            <br>
            <br>*IS THE BEST PHONE NUMBER FOR THESE NEW CLIENTS TO CALL YOU ON THE <span class="highlight">(CLIENT PHONE NUMBER)?</span>
            <br>*AND FOR MARKETING PURPOSES WOULD YOU LIKE YOUR NAME TO APPEAR ON YOUR AD AS <span class="highlight">(CLIENT NAME)?</span>
            <br>*WHAT IS THE <span class="highlight">BILLING ADDRESS</span> FOR THE CARD YOU WOULD LIKE TO USE?
            <br>*AND WILL YOU BE USING A <span class="highlight">VISA, MC, AMERICAN EXPRESS, OR DISCOVER?</span>
            <br>*AND PLEASE READ THE #'S ON THE FRONT OF THE CARD STARTING WITH THE <span class="highlight">(4V, 5M, 3A, 6D)</span>
            <br>*WHAT’S THE BEST <span class="highlight">EMAIL ADDRESS</span> FOR US TO SEND YOUR RECEIPT TO WHEN WE'RE DONE?
            <br>
            <br>
          </p>
          <p>Okay - I'm going to transfer you to our verification department who will quickly confirm the information you've given me.  You may hear hold music while I transfer you, okay? Thank you again (NAME), and have a great day! [TRANSFER CUSTOMER]  <a href="index.php">(SCRIPT HOME)</a></p>
        </div>
        <div id="answers-section">
          <div id="rebuttalArea">
            <div id="default">[click a rebuttal to load content here]</div>
            <div class="rebuttal" id="notInterested2"><em>(I completely understand, but...)</em>
              <br>If someone called you looking to list their home in (CITY) today, would you be able to work with them?
              <br>
              <br>Great, that’s all we’re talking about!  We put you in front of REAL, INTERESTED buyers and sellers, and we stay with them and don’t let go.  All you have to do is aswer the phone.  We’ll provide you with an entire marketing team who would love to work with you as much as you’d like.
              <br>
              <br>Our amazing design team will create a beautiful, market-tested ad for you, and you can even customize your ad if you want.  Say you have an open house coming up - we can make a targeted ad that shows off that home and links to an event page.  Then switch it back whenever you want.  So the next time you’re looking to pick up a listing, you can tell your clients that you’ll be advertising their home on thousands of websites across the country.  That alone is worth $139 a month!
              <br>
              <br>I know you’re going to love it - all I need to get you started is the billing address for the card you’d like to use.
            </div>
            <div class="rebuttal" id="notInterested3"><em>(Okay, well...)</em>
              <br>I’m sure you have a website or profile page, right?
              <br>
              <br>Great, well the whole purpose of that page is to help home buyers and sellers contact you.  Of course, they have to find that page first, and our service gets you in front of real buyers and sellers in (CITY) over 2,000 times every month.  We build you a custom image ad that will say:
              <br>
              <br>“(CLIENT), Your local real estate expert for (CITY)” - It will have your picture and phone number, and link directly to your web-page.  We’ll even work with you to make sure it’s perfect.  Then we’ll place that ad on thousands of websites that your best prospects visit every day.
              <br>
              <br>And with a month-to-month contract, focused targeting, branded repetition, and a guarantee that you’ll be seen by YOUR market over 2,000 times every month, there’s nothing to lose.  There’s literally no better form of advertising available to you at any price, so let’s get you over to a verifier and they’ll gladly answer any more questions you have before they bill you - I just need your billing address to get you over there.
            </div>
            <div class="rebuttal" id="notInterested4">So, (NAME), I understand that you have to be careful where you spend your marketing dollars. But at the end of the day, this is $140 for a fully managed online marketing campaign with professional design and a targeted market. That’s less than a night out, and it’s normally $300 a month.  I just don’t see how you won’t get a serious return on your investment over months of thousands of targeted views and with a marketing team dedicated to your success.  And isn’t that “R.O.I.” the only thing that really matters?
              <br>
              <br>Now, it’s my job to find the best agent for this promotion, so I’m calling your area to find a Realtor and then I’m moving on. That’s why we have a verification department to go over the details with you before we bill you. But I’ve GOT to get back to signing people up, no offense - so if you’re not ready to go, I have to go to the next agent on my list. But I know this is going to work great for you - it really is the best marketing you can buy - so I can take down that billing address, whenever you’re ready.
              <br>
              <br>[IF NO BILLING ADDRESS…] Okay, thank you so much for your time, (NAME) - good luck in all your business endeavors and I hope you have a great day!
            </div>
            <div class="rebuttal" id="howItWorks1">Well, your computer keeps track of things you do online. And website advertisers use that informaiton to show you ads for things you already want.  That means that if you're a golfer, you're more likely to see ads for golf clubs.  The best part of this is that the math and programming has gotten so good that advertising companies know when you're most likely to buy something - like a home.  It's insanely accurate!  So we use this same technology to target people in (CITY) who are interested in buying or selling a home, and very likely to move on it soon.  They're at their peak point of interest.  That's why we only have a few slots to sell in each area!  We'll show your ads to those top prospects on almost any website they go to, over 2,000 times per month!  So how do you want your name to appear on your ad?</div>
            <div class="rebuttal" id="howItWorks2"><em>I UNDERSTAND,</em>
              <br>SO SAY THAT SOMEONE IN (CITY) GETS ON ONLINE TO LOOK AT HOUSES FOR SALE ON THE MLS… THEN LATER, THAT PERSON GOES ONLINE TO A MORTGAGE CALCULATOR OR LOOKS UP THE VALUE OF THEIR HOME. EVENTUALLY, THAT PERSON’S COMPUTER IS GOING TO KNOW THAT THEY WANT TO BUY OR SELL A HOME, AND WHEN THAT HAPPENS, WE’LL START TO SHOW THE ADS WE MADE FOR YOU ACROSS THE TOP OR DOWN THE SIDES OF WEBSITES THOSE BUYERS AND SELLERS VISIT. DOES THAT MAKE SENSE?
              <br>
              <br>GREAT, AND I HAVE MOST OF THE INFORMATION I NEED TO GET YOU GOING. SO FROM HERE, *IS THE BEST PHONE NUMBER FOR THESE NEW CLIENTS TO CALL YOU ON THE (CLIENT PHONE NUMBER)?
            </div>
            <div class="rebuttal" id="howManySlots"><em>I'm just in the outbound sales department, so</em>
              <br>I CAN'T ACTUALLY SEE HOW MANY SLOTS WE HAVE AVAILABLE IN EACH CITY. I GET LEADS WHEN WE HAVE AN OPPORTUNITY THAT'S AVAILABLE, SO THAT MEANS WE MUST HAVE A FEW SLOTS LEFT IN (CITY).
              <br>
              <br>BUT I DO KNOW THAT WE CALL AREAS AND MOVE ON, AND THAT THEY FILL UP PRETTY QUICK. THERE ARE ONLY SO MANY ACTIVE BUYERS AND SELLERS IN ANY CITY, AND EACH SLOT'S WORTH OVER 2,000 OF THEM - SO YOU'LL BE LOCKING OUT YOUR COMPETITION, TOO.
              <br>
              <br>WHAT I SUGGEST TO ALL MY CLIENTS IS THAT YOU TAKE THIS POSITION OFF THE MARKET FOR JUST THE $139.95 AND THEN KEEP THE SERVICE AS LONG AS IT BRINGS YOU BUSINESS.
              <br>
              <br>I CAN TAKE THIS EXCLUSIVE POSITION OFF THE MARKET FOR YOU AND ACTUALLY HAVE YOUR AD ONLINE WITHIN 48 HOURS. SO, *TO TAKE THIS POSITION OFF THE MARKET - WILL YOU BE USING A VISA, MC, AMERICAN EXPRESS, OR DISCOVER?
            </div>
            <div class="rebuttal" id="customizeAd"><em>SOMETHING THAT REALLY SETS US APART IS THAT</em>
              <br>WE HAVE A DESIGN DEPARTMENT THAT MAKES CUSTOM ADS FOR THOUSANDS OF REALTORS, SPECIFICALLY FOR THIS SERVICE. WE TEST THOSE ADS THROUGH MILLIONS OF VIEWS TO DETERMINE WHICH ADS WORK THE BEST, SO THEY’RE ALWAYS EVOLVING TO BEST SERVE YOU AND YOUR MARKET.
              <br>
              <br>THE BEST PART IS YOU CAN ALWAYS CONTACT CUSTOMER SERVICE TO CUSTOMIZE YOUR ADS WHENEVER YOU’D LIKE, AT NO EXTRA COST. SO FOR EXAMPLE IF YOU HAVE AN OPEN HOUSE AND WOULD LIKE YOUR AD TO SHOW AN IMAGE OF THE HOME AND LINK TO AN EVENT PAGE YOU CAN CALL AND HAVE THAT CUSTOMIZED FOR FREE. THEN SWITCH IT BACK ONCE YOU’VE SOLD THE HOME.
              <br>
              <br>WE KEEP EVERYTHING MONTH TO MONTH SO YOU KEEP OUR SERVICE AS LONG AS IT BRINGS YOU BUSINESS, NOW * FOR MARKETING PURPOSES WOULD YOU LIKE YOUR NAME TO APPEAR ON YOUR AD AS (CLIENT NAME)?
            </div>
            <div class="rebuttal" id="thatCity"><em>WELL ACTUALLY,</em>
              <br>IT CAN BE TARGETED TO A ZIP CODE, CITY, OR COUNTY OF YOUR CHOOSING, DEPENDING ON AVAILABILITY. NOW WE DO ONLY WORK WITH A FEW AGENTS IN ANY MARKET. AND THEN WE REPRESENT YOU AS OUR CLIENT TO MAKE SURE YOU SEE GREAT RESULTS! SO, WOULD YOU LIKE ME TO CHECK ANY PARTICULAR LOCATION?
            </div>
            <div class="rebuttal" id="leadsCalls1"><em>WELL, IT’S IMPORTANT TO UNDERSTAND I COULDN’T ANSWER THAT BECAUSE</em>
              <br>WE ARE NOT SELLING LEADS. WE ARE AN ADVERTISING COMPANY GUARANTEEING TO RUN A REAL ESTATE AD FOR YOU ONLINE. SO WHAT WE GUARANTEE IS THE NUMBER OF PEOPLE WHO WILL SEE YOUR ADVERTISEMENT. WHAT I CAN TELL YOU IS THAT, UNLIKE A LOT OF OTHER ADVERTISEMENTS LIKE MAILERS, OR NEWSPAPERS, WITH IN-MARKET TARGETING YOU ARE ONLY SEEN BUY PEOPLE WHO HAVE ALREADY BEEN IDENTIFIED AS IS IN THE MARKET TO BUY OR SELL REAL ESTATE. THAT IS WHY OUR SERVICE IS SO COST EFFECT.
              <br>
              <br>NOW YOU DON’T HAVE TO TAKE MY WORD FOR IT, TRY THE SERVICE WITH NO CONTRACT AND LET US EARN YOUR BUSINESS. ALL I WOULD NEED TO GET YOU STARTED IS *THE BILLING ADDRESS FOR THE CARD YOU'D LIKE TO USE.
            </div>
            <div class="rebuttal" id="leadsCalls2"><em>WELL, (SIR/MA’AM) I UNDERSTAND BUT,</em>
              <br>WE HAVE NO CONTROL OVER CALLS, LEADS OR CLOSINGS BECAUSE WE ARE STRICTLY AN ADVERTISING COMPANY AND DO NOT SELL LEADS. WHAT WE DO IS RUN ADS FOR YOU ALL ACROSS THE INTERNET IN FRONT OF PEOPLE WHO, BASED ON THEIR INTERNET ACTIVITY, QUALIFY AS BEING INTERESTED IN REAL ESTATE IN (CITY).
              <br>
              <br>{{{{{{{{{FINISH}}}}}}}}}}}}
            </div>
            <div class="rebuttal" id="noSite1"><em>WELL, AS I’M SURE YOU KNOW, YOUR MARKET LIVES ONLINE SO IT’S VERY IMPORTANT THAT YOU HAVE A GREAT WEBSITE!</em>
              <br>NOW WE DO OFFER FULLY CUSTOMIZABLE REAL ESTATE WEBSITES FOR ONLY $49.95 ACTIVATION AND $24.95 PER MONTH TO MAINTAIN. BUT AS PART OF OUR NEW CLIENT ACTIVATION PROMOTION YOU CAN GET A WEBSITE FOR ONLY $19 DOLLARS AND 95 CENTS ACTIVATION AND ONLY $19.95 PER MONTH – ALL WITH NO CONTRACTS! WE ALSO HAVE A WEB SUPPORT TEAM WHICH IS AVAILABLE BY PHONE OR EMAIL TO HELP YOU 5 DAYS A WEEK WITH ANY CUSTOM REQUESTS YOU MAY HAVE.
              <br>
              <br>NOW, LET'S START BY TAKING THIS POSITION OFF THE MARKET. I HAVE MOST OF THE INFORMATION I NEED SO * TO TAKE THIS POSITION OFF THE MARKET - WILL YOU BE USING A VISA, MC, AMERICAN EXPRESS, OR DISCOVER?
            </div>
            <div class="rebuttal" id="noSite2"><em>WITH THE CUSTOM SITE WE CAN BUILD FOR YOU</em>
              <br>THERE ARE TONS OF DIFFERENT TEMPLATES YOU CAN CHOOSE FROM WITH ALL THE TOOLS A REALTOR NEEDS TO BE SUCCESSFUL. THEY ARE MARKET TESTED TO GIVE THE BEST PERFORMANCE, BASED ON OUR EXPERIENCE IN THE INDUSTRY AND YOU GET TO PICK YOUR OWN "DOT-COM" WEB ADDRESS THAT YOU CAN USE ON YOUR BUSINESS CARDS AND OTHER MARKETING MATERIAL.
              <br>
              <br>MOST IMPORTANTLY, WE WILL BE PLACING YOUR NAME, NUMBER AND NEW WEBSITE DIRECTLY IN FRONT OF BUYERS AND SELLERS THOUSANDS OF TIMES EVERY MONTH. DOES THAT MAKE SENSE?
            </div>
            <div class="rebuttal" id="noSite3"><em>OK SO,</em>
              <br>THE WEBSITE WILL HAVE EVERYTHING NEW CLIENTS NEED TO START WORKING WITH YOU INCLUDING YOUR PICTURE, NAME AND BIO. YOU CAN ALSO CUSTOMIZE COLORS, AND IMAGES. MOST IMPORTANTLY CLIENTS WILL HAVE ALL OF YOUR CONTACT INFORMATION TO CONTACT YOU DIRECTLY.
              <br>
              <br>NOW, WE CAN TAKE THIS EXCLUSIVE POSITION OFF THE MARKET AND ACTUALLY HAVE YOUR AD ONLINE WITHIN 48 HOURS. SO, * FOR MARKETING PURPOSES WOULD YOU LIKE YOUR NAME TO APPEAR ON YOUR AD AS (CLIENT NAME)?
            </div>
            <div class="rebuttal" id="random"><em>YOU KNOW, I'M NOT REALLY SURE,</em>
              <br>I'M JUST IN THE SALES DEPARTMENT. WHEN I TRANSFER YOU TO OUR VERIFICATION DEPARTMENT, THEY WILL GLADLY ANSWER ANY QUESTIONS ABOUT OUR SERVICE AND CONFIRM EVERYTHING WITH YOU BEFORE WE PROCESS ANY PAYMENT. WHAT I CAN TELL YOU IS THAT OUR SERVICE IS WORKING FOR THOUSANDS OF REALTORS NATIONWIDE, AND THAT'S RISK FREE WITH NO CONTRACTS, SO WE WORK HARD TO EARN YOUR BUSINESS EVERY MONTH.
              <br>
              <br>THE BEST PART IS, I CAN HAVE YOUR AD ONLINE WITHIN 48 HOURS. *AND FOR MARKETING PURPOSES WOULD YOU LIKE YOUR NAME TO APPEAR ON YOUR AD AS (CLIENT NAME)?
            </div>
            <!-- ************************
              END OF BUILD VALUE REBUTTALS
              ************************ -->
            <!-- ************************
              START OF CREATE URGENCY REBUTTALS
              ************************ -->
            <div class="rebuttal" id="callEmail1">I would love to work with you later but I can’t because I can only work with one agent.
              <br>
              <br>So, the way this works is that we’re given a territory as a team, and right now we’re calling your area. Obviously, there are only so many buyers and sellers in (CITY). So we’ve split up your territory into a few unique “slots,” which is what I’m calling you to offer right now - a “slot” that guarantees you’ll be seen over 2,000 times every month by active buyers and sellers in (CITY). And we don’t resell those slots, because unlike other marketing companies, we don’t want our customers to compete with each other. So we can’t wait, because your territory will be filled today.
              <br>
              <br>So let’s get you ahead of your competition and take your position off the market now. I can actually have your ad online within 48 hours. So, would you like your name to appear on your ad as (CLIENT NAME)?
            </div>
            <div class="rebuttal" id="callEmail2">I'm sorry, but I really can ONLY sell this position on this very call, but hear me out: This service will get you seen thousands of times in the next four weeks alone, so I don’t want you to miss out on the prospects that are already active and looking for you online right now. I want to get you in front of them today because every home sold nets you - what - three thousand dollars? At least?
              <br>
              <br>Awesome - So let’s do this - let’s get you in front of those buyers and sellers right away, because if it’s not you, it’s a competitor, and we’re booking up (CITY) today. The best part is you’re guaranteed to get at least 2,000 views per month, with no cap, and you’ll follow those prospects all over the internet, wherever they go.
              <br>
              <br>And with no contracts or commitments, there’s no risk! So let's take the position off the market for you today, get it away from your competitors, and you can keep the service as long as we are bringing you business. *So to take this position off the market - will you be using a visa, mc, american express, or discover?
            </div>
            <div class="rebuttal" id="callEmail3"><em>So here's the deal...</em>
              <br>This calling campaign we’re doing is like a fire sale: it's a one-time promotion to find a few agents in each area to grow with. As you can imagine, online marketing is very expensive, and so is selling it -- so we keep down costs by sticking to a simple system. That way, we spend your marketing dollars on your OWN marketing, not on bringing in new customers. That’s HOW we’re doing this for so cheap - by signing you up on a single call, and getting you going right away.
              <br>
              <br>So, we'll do our best to meet you half-way by giving you a month-to-month subscription that you can cancel any time, so you know we have to prove ourselves. But this is everything you could possibly want in marketing - so there's really nothing left to think about and no reason to wait.
              <br>
              <br>Besides, I literally can’t hold this position beyond this phone call, so let’s get you online and the worst case scenario is you'll be in front of buyers and sellers two thousand times in the next 4 weeks. So what I suggest to all my clients is that you give us a shot with no commitment and let us earn your business okay? Now I can take the last four digits on the front of your card, whenever you’re ready…
            </div>
            <div class="rebuttal" id="noMoney1"><em>I UNDERSTAND (CLIENT NAME). I KNOW YOU NEED TO SPEND YOUR MARKETING DOLLARS WISELY. AND</em>
              <br>I CAN TELL YOU IN-MARKET TARGETING IS THE MOST COST EFFECTIVE WAY TO GET FOUND BY YOUR TARGET MARKET BECAUSE YOUR AD IS ONLY SHOWN TO PROSPECTS WHO ARE ALREADY INTERESTED IN BUYING AND SELLING IN (CITY).
              <br>
              <br>AND SINCE WE DO ALL THE WORK OF DESIGNING AND MAINTAINING YOUR AD YOU ONLY HAVE TO WORK WITH CLIENTS WHO CONTACT YOU DIRECTLY. AND YOU WILL BE SEEN AS A REAL ESTATE PRO IN FRONT OF YOUR TARGET MARKET AT LEAST 2,000 TIMES IN THE NEXT FOUR WEEKS ALONE!
              <br>
              <br><em>NOW I CAN TAKE THIS EXCLUSIVE POSITION OFF THE MARKET AND ACTUALLY HAVE YOUR AD ONLINE WITHIN 48 HOURS. SO,&nbsp;</em>* FOR MARKETING PURPOSES WOULD YOU LIKE YOUR NAME TO APPEAR ON YOUR AD AS (CLIENT NAME)?
            </div>
            <div class="rebuttal" id="noMoney2"><em>AND THAT’S NO PROBLEM AT ALL, BUT YOU AND I CAN AGREE THAT IT’S IMPORTANT TO ADVERTISE IN YOUR INDUSTRY, RIGHT? AND</em>
              <br>WHAT I LOVE ABOUT IN-MARKET TARGETING IS THAT THE AD CAN BE TAILORED TO YOUR TARGET AUDIENCE. SO WHETHER YOU ARE NEW AND LOOKING TO PICK UP FIRST TIME HOME BUYERS OR MORE ESTABLISHED AND LOOKING FOR AN EDGE TO GIVE YOUR LISTING CLIENTS – RUNNING A CUSTOM AD IN FRONT OF LOCAL INTERESTED PROSPECTS OVER 2,000 JUST MAKES SENSE. AND YOU CAN’T BE THAT EXPOSURE FOR THE PRICE.
              <br>
              <br><em>NOW I DO ALSO SEND YOU AN EMAILED RECEIPT SO YOU CAN WRITE THIS OFF ON YOUR TAXES,&nbsp;</em>*WHAT’S THE BEST EMAIL ADDRESS FOR US TO SEND YOUR RECEIPT?
            </div>
            <div class="rebuttal" id="noCard"><em>NOT A PROBLEM.</em>
              <br>
              <br>THE MOST IMPORTANT THING IS SECURING THE POSITION SINCE IT CAN ONLY BE SOLD TO ONE AGENT. SO I’M HAPPY TO WAIT ON HOLD WHILE YOU GRAB YOUR CARD OR WE CAN PUT THIS ON A DIFFERENT CARD FOR NOW AND THEN JUST GIVE US A CALL TO SWITCH PAYMENT LATER.
              <br>
              <br><em>WHATEVER WORKS BEST FOR YOU…</em>
            </div>
            <div class="rebuttal" id="inCar"><em>I UNDERSTAND, MOST OF MY CLIENTS ARE ALWAYS ON THE GO. AND</em>
              <br>
              <br>MOST IMPORTANTLY, I WANT YOU TO BE SAFE. NOW I CAN ONLY WORK WITH ONE AGENT FOR THIS POSITION SO I WOULD LIKE TO HELP YOU TAKE THIS OFF THE MARKET.
              <br>
              <br><em>I HAVE MOST OF THE INFORMATION I NEED TO GET YOU STARTED, FROM HERE I JUST NEED THE...</em>
            </div>
            <div class="rebuttal" id="newAgent1"><em>THAT’S GREAT TO HEAR, CONGRATULATIONS!</em>
              <br>THAT’S PROBABLY WHY YOU’RE ON MY CALLING LIST, MOST OF MY CUSTOMERS ARE NEW AGENTS. THAT’S THE BIGGEST REASON THAT WE KNOCKED THE PRICE DOWN SO FAR: WE WANT TO MAKE IT AFFORDABLE FOR YOU TO GET YOUR FOOT IN THE DOOR AND LEVEL THE PLAYING FIELD. WHEN THESE NEW CLIENTS SEE YOUR CUSTOM AD ON WEBSITES THEY VISIT ALL OVER THE INTERNET, THEY’LL SEE YOU AS THE LOCAL PRO. YOU CAN EVEN GET AHEAD OF THE ESTABLISHED REALTORS IN YOUR AREA, AND FOR A LOT LESS THAN ANY OTHER OPTIONS. SO THIS SHOULD BE YOUR FIRST STEP INTO THE MARKETING WORLD!
              <br>
              <br><em>NOW I DO ALSO SEND YOU AN EMAILED RECEIPT SO YOU CAN WRITE THIS OFF ON YOUR TAXES,</em> *WHAT’S THE BEST EMAIL ADDRESS FOR US TO SEND YOUR RECEIPT?
            </div>
            <div class="rebuttal" id="newAgent2"><em>OF COURSE, THERE’S SO MUCH TO THINK ABOUT AS A NEW AGENT.</em>
              <br>LUCKILY, YOUR COMPANY HAS ALREADY MADE YOU A WEBPAGE WITH ALL OF YOUR INFORMATION - THAT’S HOW WE FOUND YOU! AND WE DO THIS FOR NEW REALTORS EVERY DAY, SO WE’VE GOT ALL THE DETAILS COVERED ON OUR END, TOO. WHAT’S IMPORTANT IS THAT YOU TAKE ADVANTAGE OF THE ONE OPPORTUNITY YOU’LL GET TO SET UP YOUR PIPELINE WHEN YOU REALLY NEED TO, BECAUSE IT TAKES TIME TO BUILD YOUR BRAND AND DEVELOP YOUR CLIENT BASE. AND YOU’LL HAVE US AS YOUR MARKETING TEAM TO ANSWER ANY QUESTIONS YOU MIGHT HAVE.
              <br>
              <br><em>NOW WHAT I SUGGEST TO ALL MY NEW AGENTS IS THAT YOU JUST TRY THE SERVICE WITH NO CONTRACT AND LET US EARN YOUR BUSINESS. ALL I WOULD NEED TO GET YOU STARTED IS</em> *THE BILLING ADDRESS FOR THE CARD YOU'D LIKE TO USE
            </div>
            <div class="rebuttal" id="askPartner"><em>OF COURSE THAT MAKES SENSE. ACTUALLY...</em>
              <br>WE WORK WITH A LOT OF TEAMS. BUT IT IS VERY IMPORTANT TO UNDERSTAND THAT WE ONLY SELECT A FEW REALTORS FROM ANY MARKET AND THEN WE MOVE ON. AND THAT’S WHY OUR SERVICE IS SO EFFECTIVE, BECAUSE THEN OUR FOCUS IS HELPING OUR CUSTOMERS FIND SUCCESS. SO BY THE TIME YOU WOULD FOLLOW UP WITH ME THE POSITION IN (CITY) WOULD BE SOLD.
              <br>
              <br>WHAT I’M HAPPY TO DO IS TAKE THIS OFF THE MARKET FOR YOU NOW AND GET EVERYTHING SETUP WITH THE INFORMATION I HAVE HERE. THEN, LATER ON THIS EVENING YOU CAN REALLY SIT DOWN WITH YOUR PARTNER(S) AND DECIDE HOW LONG TO KEEP THE SERVICE. AND SINCE YOU’RE NOT LOCKED INTO ANYTHING YOU CAN CALL TO CHANGE THE AD, THE WEBSITE IT LINKS TO OR THE TYPE OF PAYMENT WITH NO HASSLE. OK?
              <br>
              <br><em>NOW I DO ALSO SEND YOU AN EMAILED RECEIPT SO YOU CAN WRITE THIS OFF ON YOUR TAXES,</em> *WHAT’S THE BEST EMAIL ADDRESS FOR US TO SEND YOUR RECEIPT?
            </div>
            <!-- ************************
              END OF CREATE URGENCY REBUTTALS
              ************************ -->
            <!-- ************************
              START OF BUILD TRUST REBUTTALS
              ************************ -->
            <div class="rebuttal" id="trust1"><em>I SEE HOW THAT CAN BE A CONCERN, HOWEVER,</em>
              <br>IN ACCORDANCE WITH FEDERAL BANKING AND CREDIT CARD LAWS I WILL BE TRANSFERRING YOU TO THE VERIFICATION DEPARTMENT AT THE END OF THIS CALL WHO RECORDS THE REST OF THE CONVERSATION FOR YOUR PROTECTION AS WELL AS OURS. NOW, DURING THE RECORDING THEY'LL BE GOING OVER THE PRICING, THE MONTH TO MONTH TERM, AND THE 2,000 VIEW GUARANTEE. OKAY?
              <br>
              <br><em>OKAY, NOW I HAVE MOST OF THE INFORMATION I NEED. SO FROM HERE,</em> *TO TAKE THIS POSITION OFF THE MARKET - WILL YOU BE USING A VISA, MC, AMERICAN EXPRESS, OR DISCOVER?
            </div>
            <div class="rebuttal" id="trust2"><em>I COMPLETELY UNDERSTAND HOWEVER,</em>
              <br>WE HAVE BEEN IN BUSINESS FOR OVER THREE YEARS. WE WORK WITH THOUSANDS OF REALTORS ACROSS THE COUNTRY, ALL OVER THE PHONE. THIS IS ALL BEING DONE ON A SECURE SYSTEM THAT HANDLES HUNDREDS OF CREDIT CARD PURCHASES A DAY. NOW, I DON’T PROCESS ANY PAYMENT MYSELF, I SIMPLY FILL OUT MY ORDER FORM AND THEN I AM GOING TO TRANSFER YOU TO MY VERIFICATION DEPARTMENT WHO WILL GO OVER EVERY DETAIL AND ANSWER ANY QUESTIONS YOU HAVE BEFORE READING YOU A FULL BILLING DISCLAIMER AND GETTING YOUR VERBAL AGREEMENT BEFORE ANY PAYMENTS ARE PROCESSED. OKAY?
              <br>
              <br><em>OKAY, NOW I HAVE MOST OF THE INFORMATION I NEED. SO FROM HERE</em> *TO TAKE THIS POSITION OFF THE MARKET - WILL YOU BE USING A VISA, MC, AMERICAN EXPRESS, OR DISCOVER?
            </div>
            <div class="rebuttal" id="trust3"><em>THAT'S UNDERSTANDABLE,</em>
              <br>LET ME GIVE YOU ALL OF OUR CONTACT INFORMATION BEFORE WE MOVE FORWARD. GO AHEAD AND GRAB A PEN AND PAPER AND LET ME KNOW WHEN YOU ARE READY. MY NAME IS (FULL NAME) AND OUR COMPANY IS BGIN ONLINE.
              <br>
              <br>YOU CAN REACH US TOLL FREE AT 1.800.469.8013. MONDAY THROUGH FRIDAY FROM 9:00AM TO 5:00PM PACIFIC TIME. NOW, WE'LL BE YOUR PERSONAL MARKETING TEAM THROUGHOUT THE LIFE OF THE ACCOUNT. SO, PLEASE FEEL FREE TO CONTACT US WITH ANY QUESTIONS.
              <br>
              <br><em>NOW, YOU'LL BE RECEIVING AN EMAIL RECEIPT ONCE WE'RE THROUGH. SO</em> *WHAT’S THE BEST EMAIL ADDRESS FOR US TO SEND YOUR RECEIPT?
            </div>
            <div class="rebuttal" id="trust4"><em>OK WELL,</em>
              <br>AT THIS POINT (CLIENT NAME) I WOULD LOVE TO SET YOU UP BUT I WOULD NEED TO COLLECT A FORM OF PAYMENT TO SECURE THE POSITION. I’VE DONE AS MUCH AS I CAN TO PROVE THAT WE ARE LEGITIMATE AND AS I’VE SAID, THIS SERVICE IS EXCLUSIVE, ONCE IT’S SOLD TO AN AGENT, IT CAN NEVER BE RESOLD TO ANOTHER.
              <br>
              <br><em>NOW WE’RE CALLING EVERY REALTOR IN (CITY). THIS POSITION IS GOING TO GET SOLD TODAY…</em>
            </div>
            <div class="rebuttal" id="liveClient1"><em>YOU KNOW I WISH I COULD GIVE OUT CUSTOMER INFORMATION BUT</em>
              <br>I’M NOT GIVEN ACCESS TO THAT DUE TO CLIENT CONFIDENTIALITY. BUT WHAT’S GREAT IS THAT IF YOU’VE EVER BEEN ONLINE YOU ALREADY KNOW EXACTLY HOW IT WORKS BECAUSE IT IS SO SIMPLE; WE’RE SHOWING PICTURES ADS OF YOU AS A LOCAL REALTOR ON WEBSITES ALL OVER THE INTERNET – ONLY TO ACTIVE BUYERS AND SELLERS IN (CITY). YOU GET A MONTHLY ACTIVITY REPORT SHOWING YOU HOW MANY PEOPLE SAW YOUR ADS AND YOU KEEP ADVERTISING TO LOCAL BUYERS AND SELLERS AS LONG AS YOU LOVE YOUR RESULTS.
              <br>
              <br><em>I ALREADY HAVE MOST OF THE INFORMATION I NEED, SO FROM HERE</em> *WHAT’S THE BEST EMAIL ADDRESS FOR US TO SEND YOUR RECEIPT?
            </div>
            <div class="rebuttal" id="liveClient2"><em>HONESTLY,</em>
              <br>WE’RE A NATIONWIDE COMPANY WITH THOUSANDS OF CUSTOMERS SO I DON’T HAVE DETAILS FOR EVERY MARKET IN THE COUNTRY. IN FACT, IN THE SALES DEPARTMENT I WON’T EVEN HAVE ACCESS TO YOUR INFORMATION AS SOON AS I SUBMIT THAT SALE.
              <br>FROM THERE EVERYTHING IS HANDLED BY OUR CUSTOMER SERVICE TEAM. BUT LET ME ASK, CAN YOU ACTUALLY THINK OF A TIME YOURSELF WHEN YOU SAW AN AD ON A WEBSITE AND RECOGNIZED IT AS SOMETHING YOU HAD JUST SHOPPED FOR?
              <br>[NO] OK, [CLICK]
              <button class="buttons" value="howItWorks1">How It Works1</button>
              <br>
              <br>[YES] THEN YOU ALREADY KNOW THIS WORKS! BECAUSE YOU SAW IT, AND YOU REMEMBER IT, AND THAT IS WHAT YOU ARE GOING TO GET WITH US, BUYERS AND SELLERS IN (CITY) SEEING ADS WITH YOUR NAME AND PHOTO AND REMEMBERING YOU AS A LOCAL REALTOR TO WORK WITH. THE AD LINKS TO YOUR WEBSITE AND WE WORK WITH YOU MONTH-TO -MONTH TO HELP YOU BE SUCCESSFUL.
              <br>
              <br><em>SO YOUR SUCCESS IS OUR SUCCESS! FROM HERE WE CAN TAKE THIS EXCLUSIVE POSITION OFF THE MARKET AND ACTUALLY HAVE YOUR AD ONLINE WITHIN 48 HOURS. SO,&nbsp;</em>*WHAT IS THE BILLING ADDRESS FOR THE CARD YOU'D LIKE TO USE?
            </div>
            <div class="rebuttal" id="guarantee1"><em>ABSOLUTELY,</em>
              <br>OUR GUARANTEE IS VERY SIMPLE. WE GUARANTEE THAT YOUR AD WILL BE DISPLAYED OVER 2,000 TIMES PER MONTH SO LONG AS YOU CHOOSE TO KEEP YOUR SERVICE.
              <br>
              <br><em>YOU’RE GOING TO LOVE IT. SO, LET’S START WITH YOUR</em> *BILLING ADDRESS FOR THE CARD YOU'D LIKE TO USE.
            </div>
            <div class="rebuttal" id="guarantee2"><em>I’M GLAD YOU ASKED,</em>
              <br>THE GUARANTEE REALLY IS THAT SIMPLE. JUST LIKE ANY AD YOU’VE SEEN ONLINE FOR SOMETHING YOU’D PREVIOUSLY SHOPPED FOR, YOU ARE BUYING AN AD. IT WILL SAY:
              <br>
              <br>“(CLIENT NAME), YOUR LOCAL REAL ESTATE EXPERT FOR (CITY)”
              <br>IT WILL HAVE YOUR PICTURE AND PHONE NUMBER, AND LINK DIRECTLY TO YOUR WEBPAGE. AND IT WILL THEN BE SEEN OVER 2,000 TIMES PER MONTH.
              <br>
              <br><em>I’M EXCITED TO GET YOU STARTED! NOW, WE WILL SEND YOU AN EMAIL RECIPT WITH ALL OF THIS WHEN WE'RE DONE, SO</em> *WHAT’S THE BEST EMAIL ADDRESS FOR US TO SEND YOUR RECEIPT?
            </div>
            <div class="rebuttal" id="guarantee3"><em>SO THE EXACT WORDING OF OUR GUARANTEE IS AS FOLLOWS:</em>
              <br>YOUR AD WILL BE SEEN OVER 2,000 TIMES PER MONTH BY PEOPLE WHO ARE IDENTIFIED AS “IN THE MARKET FOR REAL ESTATE” WITHIN YOUR CHOSEN LOCATION*, AS INDICATED BY THE AD DISPLAY NETWORK.
              <br>YOU WILL RECEIVE AN ACTIVITY REPORT WITHIN A FEW DAYS FOLLOWING YOUR SUBSCRIPTION RENEWAL DATE WHICH WILL INCLUDE A BREAKDOWN AND SUMMARY OF THE VIEWS YOUR AD(S) RECEIVED.
              <br>SHOULD THE NUMBER OF TOTAL VIEWS BE LESS THAN THE NUMBER GUARANTEED YOU WILL BE ENTITLED TO AN ACCOUNT CREDIT EQUAL TO THE VALUE OF ONE MONTH OF SERVICE.**
              <br><em>*A “LOCATION” FOR THE PURPOSE OF THIS GUARANTEE REFERS TO A SPECIFIC ZIP CODE, CITY, OR COUNTY AGREED UPON AT POINT OF ACTIVATION.<br> **IN THE EVENT THAT YOU ARE RUNNING MORE THAN ONE AD, EACH AD WILL BE EVALUATED INDEPENDENTLY AND CREDITS WILL BE GIVEN ONLY FOR ADS WHICH DID NOT MEET THEIR GUARANTEE.<br></em> <em>NOW THERE IS NO CONTRACT, EVERYTHING IS MONTH-TO-MONTH, AND THIS IS ALL GOING TO BE IN YOUR EMAIL RECEIPT SO LET’S START WITH</em> *THE BEST EMAIL ADDRESS FOR US TO SEND YOUR RECEIPT?
              <br>
            </div>
            <div class="rebuttal" id="seeSite1"><em>OK, LET'S DO THIS,</em>
              <br>LET ME SHOW YOU OUR COMPANY WEBSITE SO YOU KNOW EXACTLY WHAT WE DO. GO AHEAD AND OPEN UP A NEW WEB BROWSER AND LET ME KNOW WHEN YOU'RE READY. IN THE "ADDRESS BAR" TYPE IN “WWW.BGINONLINE.COM” AND LET ME KNOW WHEN YOU SEE “BGIN PREMIER” ON THE PAGE...
              <br>
              <br>OK NOW FIRST, I’D LIKE YOU TO SCROLL DOWN SO YOU CAN SEE AN EXAMPLE OF WHAT YOUR AD WILL LOOK LIKE. YOU SHOULD SEE AN AD FOR “DEBBIE SMITH”…
              <br>
              <br>OK, SO YOU’RE AD IS GOING TO HAVE YOUR PICTURE AND PHONE NUMBER, AND LINK DIRECTLY TO YOUR WEBPAGE AND IT WILL SAY: “(CLIENT NAME), YOUR LOCAL REAL ESTATE EXPERT FOR (CITY)”. WE’LL THEN PLACE THAT AD ON THOUSANDS OF WEBSITES THAT YOUR CUSTOMERS VISIT EVERY DAY WHERE YOU WILL BE SEEN MORE THAN 2,000 TIMES PER MONTH BY YOUR TARGET MARKET.
              <br>
              <br><em>NOW WE’RE ONLY LOOKING FOR ONE REALTOR TO FILL THIS POSITION SO LET’S TAKE IT OFF THE MARKET AND SECURE IT FOR YOU. THE FIRST THING I NEED TO GET YOUR STARTED IS JUST</em> *YOUR NAME AS YOU WOULD LIKE IT TO APPEAR ON YOUR AD.
            </div>
            <div class="rebuttal" id="reviews1"><em>OK PERFECT, I’M GLAD TO KNOW YOU ARE DOING YOUR RESEARCH!</em>
              <br>WHAT I ALWAYS LIKE TO POINT OUT IS THAT WE ARE A NATIONWIDE MARKETING COMPANY AND WE’VE MANAGED OVER 50,000 ADS IN THE LAST THREE YEARS, SO AS YOU CAN IMAGINE, WE’VE HAD A FEW MISUNDERSTANDINGS ALONG THE WAY BUT IF YOU READ ANY OF THEM, YOU'LL SEE THAT WE'VE RESOLVED EVERY ONE OF THEM COMPLETELY BECAUSE CUSTOMER SERVICE IS OUR NUMBER ONE AIM.
              <br>
              <br>OUR BUSINESS IS BASED ON OUR ABILITY TO CONTINUE WORKING WITH CLIENTS FOR A LONG PERIOD OF TIME AND WE ARE ALWAYS MONTH TO MONTH. SO OUR ENTIRE BUSINESS RELIES ON KEEPING YOU HAPPY EVERY MONTH. SO, I CAN TELL YOU PERSONALLY THAT WE A REALLY GOOD COMPANY MANAGING A FANTASTIC SERVICE THAT GETS YOU IN FRONT OF THOUSANDS OF PROSPECTS EVERY MONTH. I REALLY THINK YOU ARE GOING TO LOVE THE SERVICE.
              <br>
              <br><em>SO LET’S SET YOU UP WITH OUR MONTH-TO-MONTH AD CAMPAIGN AND YOU ONLY KEEP WORKING WITH US AS LONG AS WE CONTINUE TO EARN YOUR BUSINESS. SOUNDS GOOD?&nbsp;</em>
            </div>
            <div class="rebuttal" id="reviews2"><em>OK PERFECT, I’M GLAD BROUGHT THAT UP BECAUSE WE ACTUALLY HAVE SEVERAL GREAT REVIEWS ON YELP!</em>
              <br>NOW IT IS VERY IMPORTANT FOR YOU TO UNDERSTAND THAT YELP SORTS COMPANY REVIEWS FROM WORST TO BEST. IN FACT, THERE ARE 25 REVIEWS THEY DON’T EVEN SHOW! I HAVE NO IDEA WHY THEY DO THAT AND I CAN’T TELL YOU HOW MANY CUSTOMERS HAVE BEEN UPSET WHEN THEY FIVE-STAR REVIEW US ONLY TO SEE THEIR REVIEW GET BURIED. ARE YOU ON OUR YELP PAGE NOW, I COULD SHOW YOU HOW TO SEE OUR GREAT REVIEWS TOO SO YOU CAN MAKE AN INFORMED DECISION.
              <br>
              <br>GO AHEAD AND TYPE IN THE WEB ADDRESS <a href="http://yelp.bginonline.com/" target="_blank">yelp.bginonline.com.</a> THIS WILL FORWARD YOU DIRECTLY TO THE SECTION ON YELP.COM WITH OUR POSITIVE REVIEWS. <a href="http://yelp.bginonline.com/" target="_blank">[CLICK]</a>
            </div>
            <div class="rebuttal" id="threeYears"><em>ONE THING I'M PROUD TO SAY IS THAT</em>
              <br>WE HAVE BEEN IN BUSINESS FOR OVER THREE YEARS, REPRESENT THOUSANDS OF REALTORS ACROSS THE COUNTRY WITH A 93% RETENTION RATE, AND THAT IS ON A MONTH TO MONTH BASIS ALL WITH NO CONTRACTS SO I KNOW THIS WORKS.
              <br>
              <br><em>NOW YOU DON’T HAVE TO TAKE MY WORD FOR IT, TRY THE SERVICE WITH NO CONTRACT AND LET US EARN YOUR BUSINESS. ALL I WOULD NEED TO GET YOU STARTED IS</em> *THE BILLING ADDRESS FOR THE CARD YOU'D LIKE TO USE.
            </div>
            <!-- ************************
              END OF BUILD TRUST REBUTTALS
              ************************ -->
            <!-- ************************
              START OF COMPARE OTHER SERVICES REBUTTALS
              ************************ -->
            <div class="rebuttal" id="tooMuchBiz"><em>THAT’S ACTUALLY GREAT TO HEAR! BECAUSE,</em>
              <br>THE BIGGEST BENEFIT TO OUR SERVICE IS THAT WE ONLY SEND INTERESTED PEOPLE TO YOUR WEBSITE, AND YOU ONLY WORK WITH THE ONES WHO CONTACT YOU, WHICH MEANS YOU AREN’T WASTING TIME CHASING LEADS.
              <br>
              <br>NOW, EVEN ONE LISTING COULD NET $3,000 OR MORE. SO, WHETHER YOU ARE TRYING TO PICK UP A NEW LISTING, OR JUST WANT TO ADVERTISE A HOME YOU ALREADY HAVE FOR SALE – GETTING YOURSELF IN FRONT OF 2,000 ACTIVE CLIENTS IN (CITY) CAN ONLY HELP YOU OUT!
              <br>
              <br><em>DOES THAT MAKE SENSE?</em>
            </div>
            <div class="rebuttal" id="triedBefore"><em>I’M NOT SURE WHAT OTHER MARKETING YOU’VE DONE, BUT</em>
              <br>THIS IS A BRAND NEW TECHNOLOGY THAT’S BEING OFFERED TO INDIVIDUAL REALTORS FOR THE FIRST TIME. WE’RE SHOWING PICTURES ADS OF YOU AS A LOCAL REALTOR ON WEBSITES ALL OVER THE INTERNET – ONLY TO ACTIVE BUYERS AND SELLERS IN (CITY).
              <br>
              <br><em>SO, [CLICK] <button class="buttons" value="howItWorks1">How It Works1</button></em>
            </div>
            <div class="rebuttal" id="truliaZillow"><em>THAT'S ACTUALLY GREAT TO HEAR, AND</em>
              <br>THAT'S OBVIOUSLY A GREAT COMPANY, BUT THEY ARE COMPLETELY DIFFERENT THAN WHAT WE DO. THEY ADVERTISE THEMSELVES TO GET BUYERS AND SELLERS TO THEIR WEBSITE. THEN THEY PLACE YOU IN A DIRECTORY ALONG WITH HUNDREDS OF OTHER AGENTS OR THEY SELL YOU LEADS.
              <br>
              <br>BUT WE WORK WITH YOU AS AN INDIVIDUAL AGENT BY SHOWING PICTURES ADS OF YOU AS A LOCAL REALTOR ON THOUSANDS OF WEBSITES YOUR CUSTOMERS VISIT EVERY DAY. SO, WHETHER A CUSTOMER IS SHOPPING ON AMAZON.COM, CHECKING THEIR EMAIL, OR EVEN WATCHING VIDEOS ON YOUTUBE THEY CAN SEE YOUR AD. AND THE MORE WE SHOW THEM YOUR AD THE MORE LIKELY THEY ARE TO CONTACT YOU.
              <br>
              <br><em>WE CAN TAKE THIS EXCLUSIVE POSITION OFF THE MARKET AND ACTUALLY HAVE YOUR AD ONLINE WITHIN 48 HOURS. SO,</em> *IS THE BEST PHONE NUMBER FOR THESE NEW CLIENTS TO CALL YOU ON THE (CLIENT PHONE NUMBER)OK?
            </div>
            <div class="rebuttal" id="adwerx"><em>YEAH, I’VE HEARD OF THEM AND</em>
              <br>I CAN TELL YOU THE GREATEST DIFFERENCE IS THAT THEY REQUIRE A THREE-MONTH PRE-PAY, CHARGE PER ZIP CODE, AND THEY SPECIFICALLY DO NOT GUARANTEE VIEWS.
              <button class="buttons" value="adwerxTerms">(Adwerx Terms)</button> BUT WITH OUR SERVICE YOU ARE ALWAYS MONTH TO MONTH, CAN TARGET AN AREA AS SMALL AS A ZIP CODE OR AS LARGE AS A COUNTY FOR THE SAME PRICE, AND WE GUARANTEE THAT YOU WILL BE SEEN OVER 2,000 TIMES EVERY MONTH.
              <br>
              <br><em>I REALLY BELIEVE IN THIS SERVICE AND THINK YOU WILL BE REALLY HAPPY WITH US. SO LET’S DO THIS, GIVE US CHANCE TO EARN YOUR BUSINESS WITH NO CONTRACT. I JUST NEED</em> *THE BEST PHONE NUMBER FOR THESE NEW CLIENTS TO CALL YOU ON?
            </div>
            <div class="rebuttal" id="adwerxTerms">"…The sale of advertising views is an approximation and we do not represent, warrant, or guarantee that an exact number of advertising views will be provided..."
              <br><a href="https://www.adwerx.com/terms" target="_blank">(Section 8, Sub-section a., Paragraph iii)"</a>
            </div>
            <div class="rebuttal" id="keyword"><em>NO THIS IS ACTUALLY COMPLETELY DIFFERENT AND MUCH MORE EFFECTIVE</em>
              <br>UNLIKE KEYWORD OPTIMIZATION, WHERE A CUSTOMER HAS TO TYPE IN A SPECIFIC KEY TERM IN ORDER TO FIND YOUR AD, WITH IN-MARKET TARGETING YOUR AD CAN BE SEEN ON NEARLY EVERY WEBSITE A CUSTOMER VISITS. SO, WHETHER A CUSTOMER IS READING THE NEWS, ON AMAZON.COM, CHECKING THEIR EMAIL, OR EVEN WATCHING VIDEOS ON YOUTUBE THEY CAN SEE YOUR AD. AND THE MORE WE SHOW THEM YOUR AD THE MORE LIKELY THEY ARE TO CONTACT YOU.
              <br>
              <br>
              <button class="buttons" value="howItWorks2">How it Works 2</button>
            </div>
            <div class="rebuttal" id="otherMktg1"><em>THAT’S ALWAYS GREAT TO HEAR AND</em>
              <br>I DON’T WANT TO TAKE AWAY FROM ANYTHING THAT’S WORKING FOR YOU. THIS IS JUST ANOTHER WAY TO GET IN FRONT OF TWO THOUSAND BUYERS AND SELLERS WHO ARE NOT CURRENTLY FINDING YOU. THIS IS ALSO A GREAT WAY TO DRIVE MORE CUSTOMERS TO WHATEVER ADVERTISING IS THE MOST EFFECTIVE FOR YOU.
              <br>
              <br><em>SO LET ME ASK, WHAT ARE YOU DOING CURRENTLY?</em>
              <br>
              <br>
              <button class="buttons" value="notInterested4">[CLICK] "LISTINGS/SELLERS"</button>
              <button class="buttons" value="otherMktg2">[CLICK] ALL OTHER</button>
            </div>
            <div class="rebuttal" id="otherMktg2"><em>OK PERFECT SO,</em>
              <br>WHAT WE CAN DO IS TAKE THIS AD AND LINK IT TO WHATEVER ONLINE MARKETING IS WORKING THE BEST FOR YOU ALREADY. THIS WAY YOU ARE GETTING MORE TRAFFIC DIRECTED TO THE MARKETING THAT ALREADY CONVERTS THE BEST FOR YOU.
              <br>
              <br><em>DOES THAT MAKE SENSE?</em>
            </div>
            <!-- ************************
              END OF COMPARE OTHER SERVICES REBUTTALS
              ************************ -->
            <!-- ************************************************************************************************
              BELOW I HAVE LEFT SOME REBUTTALS IN THAT ARE 'INACTIVE'. IF YOU ADD A NEW BUTTON TO THE SIDEBAR
              WITH THE CORESPONDING VALUE TO MATCH THE REBUTTAL'S ID, IT WILL WORK! USE THIS TO LEARN AND PLAY AROUND WITH IT.
              IF YOU EVER NEED TO SIMPLY HIDE A BUTTON JUST PUT "<!-- AT THE BEGINNING OF THE CODE AND A DASH DASH AND THE GREATER
              THAN  SIGN AT THE END. THIS IS ALSO HOW YOU CAN LEAVE YOURSELF NOTES! THE *S ARE JUST TO HELP FIND THE COMMENTS.
              ************************************************************************************************ -->
            <div class="rebuttal" id="practice1"><em>That's perfect for our service...</em>
              <br>You can let clients know that when they list with you, your website is featured throughout the Google Network. Tell them you will feature their home for sale on your website and that this will help them sell their home a lot faster. It's a great tool when picking up a new client!  Don't forget to tell your verifier, too, so that we can customize your ad campaign to show specifically to sellers and avoid buyers. All I need to get you transferred to them is the billing address for the card you'd like to use...
            </div>
            <div class="rebuttal" id="practice2"><em>I completely understand and that’s no problem...</em>
              <br>That’s why we’re offering a money-back guarantee no risk and no contracts. Obviously, one home sold through our service will pay for your subscription for years. This is the most affordable and most effective form of marketing, period. It targets only interested clients who are already looking for you, and it complements anything else you’re doing. If you need more money, you really can’t afford not to take this opportunity, and it won’t be available again. Now, we can hold this position using your personal card for now, and then you can change over to a different card anytime just by calling our customer service department.  But we have to get some form of payment today, so all I need to start setting up your account is the number for the card you’d like to use, whenever you’re ready.
            </div>
            <div class="rebuttal" id="practice3">No I don't, I work for “B.G.I.N.” online and we specialize in advertising for realtors on the Google Network. (MOVE TO VALUE OR CLOSE</div>
            <div class="rebuttal" id="practice4">Absolutely, you can cancel at any time with no hassle or cancelation fees. (MOVE TO VALUE OR CLOSE)</div>
          </div>
          <div id="introPrompt"><a href="index.php">SCRIPT HOME</a></div>
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
