<?php
session_start();

if(!isset($_SESSION['resulti_user'])){
	header("location:login.php");
}

?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Explanation | Sale Script</title>
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
    </head>

    <body>
        <ul id="fixed-nav">
            <li class="active"><a href="index.php">Frontline</a></li>
            <li class=""><a href="senior.php">Senior</a></li>
            <li class=""><a href="" id="savechanges" type="explaination">Save</a></li>
            <li class=""><a href="" id="export" type="explaination">Export</a></li>
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
                    <h3>Instarank Marketing</h3>
                </div>
                <ul class="swapable list_sortable ui-sortable" id="excitement">
                    <li class="ui-sortable-handle">
                        <h3 class="ui-sortable-handle">"Not Interested" / "No Money":</h3>
                        <span class="bgcolorselector ui-sortable-handle">&nbsp;</span> <span class="coloselector ui-sortable-handle">&nbsp;</span>
                    </li>
                    <li class="inline-buttons ui-sortable ui-sortable-handle">
                        <div class="ui-sortable-handle">
                            <button class="buttons" id="ex1" style="opacity: 1;" value="explanation1">Value 1<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" id="ex2" style="opacity: 1;" value="explanation2">2<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" id="ex3" style="opacity: 1;" value="explanation3">3<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" id="ex4" style="opacity: 1;" value="explanation4">4<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" id="ex5" style="opacity: 1;" value="explanation5">5<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <span class="fa fa-plus-circle ui-sortable-handle" data-popup-open="popup-1"></span>
                    </li>
                </ul>
                <ul class="list_sortable ui-sortable" id="urgency">
                    <li class="ui-sortable-handle">
                        <h3 class="ui-sortable-handle">"Call Back" or "Email Me":</h3>
                        <span class="bgcolorselector ui-sortable-handle">&nbsp;</span> <span class="coloselector ui-sortable-handle">&nbsp;</span>
                    </li>
                    <li class="inline-buttons ui-sortable ui-sortable-handle">
                        <div class="ui-sortable-handle">
                            <button class="buttons" id="j1" style="opacity: 1;" value="callEmail1">Urgency 1<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" id="j2" style="opacity: 1;" value="callEmail2">2<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" id="j3" style="opacity: 1;" value="callEmail3">3<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <span class="fa fa-plus-circle ui-sortable-handle" data-popup-open="popup-1"></span>
                    </li>
                </ul>
                <ul class="list_sortable ui-sortable" id="trust">
                    <li class="ui-sortable-handle">
                        <h3 class="ui-sortable-handle">Won't give CC#:</h3>
                        <span class="bgcolorselector ui-sortable-handle">&nbsp;</span> <span class="coloselector ui-sortable-handle">&nbsp;</span>
                    </li>
                    <li class="inline-buttons ui-sortable ui-sortable-handle">
                        <div class="ui-sortable-handle">
                            <button class="buttons" id="t1" style="opacity: 1;" value="trust1">Trust #1<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" id="t2" style="opacity: 1;" value="trust2">2<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" id="t3" style="opacity: 1;" value="trust3">3<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <span class="fa fa-plus-circle ui-sortable-handle" data-popup-open="popup-1"></span>
                    </li>
                </ul>
                <ul class="list_sortable ui-sortable" id="random">
                    <li class="ui-sortable-handle">
                        <h3 class="ui-sortable-handle">(Answers)</h3>
                        <span class="bgcolorselector ui-sortable-handle">&nbsp;</span> <span class="coloselector ui-sortable-handle">&nbsp;</span>
                    </li>
                    <li class="inline-buttons ui-sortable ui-sortable-handle">
                        <div class="ui-sortable-handle">
                            <button class="buttons" id="ran1" style="opacity: 1;" value="random1">Random Question 1<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" id="ran2" style="opacity: 1;" value="random2">2<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <span class="fa fa-plus-circle ui-sortable-handle" data-popup-open="popup-1"></span>
                    </li>
                    <li class="inline-buttons ui-sortable ui-sortable-handle">
                        <div class="ui-sortable-handle">
                            <button class="buttons" id="st1" style="opacity: 1;" value="statistics1">Statistics / Details 1<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" id="st2" style="opacity: 1;" value="statistics2">2<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <span class="fa fa-plus-circle ui-sortable-handle" data-popup-open="popup-1"></span>
                    </li>
                </ul>
                <ul class="list_sortable ui-sortable" id="value">
                    <li class="ui-sortable-handle">
                        <h3 class="ui-sortable-handle">(General Links)</h3>
                        <span class="bgcolorselector ui-sortable-handle">&nbsp;</span> <span class="coloselector ui-sortable-handle">&nbsp;</span>
                    </li>
                    <li class="inline-buttons ui-sortable ui-sortable-handle">
                        <div class="ui-sortable-handle">
                            <button class="buttons" id="hwit" style="opacity: 1;" value="how1">How it Works<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" id="abtads" style="opacity: 1;" value="aboutAds">About the Ads<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" id="sris" style="opacity: 1;" value="qualified">Serious / Qualified?<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" id="web" style="opacity: 1;" value="noWebsite">No Website<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" id="mark" style="opacity: 1;" value="otherMktg">Other Marketing<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" id="tried" style="opacity: 1;" value="triedBefore">Already Doing / Tried<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" id="zillo" style="opacity: 1;" value="trulia">Trulia or Zillow<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" id="busi" style="opacity: 1;" value="tooBusy">Too Much Business<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" id="agnt1" style="opacity: 1;" value="newAgent1">New Agent 1<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" id="agnt2" style="opacity: 1;" value="newAgent1">2<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" id="slots" style="opacity: 1;" value="slots">Slots?<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" id="bdgt" style="opacity: 1;" value="noMoney">Budget<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" id="credt" style="opacity: 1;" value="noCard">No Credit Card on Me<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" id="car" style="opacity: 1;" value="inCar">In My Car<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" id="ndask" style="opacity: 1;" value="askPartner">Need to Ask<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <span class="fa fa-plus-circle ui-sortable-handle" data-popup-open="popup-1"></span>
                    </li>
                </ul>
                <ul class="list_sortable ui-sortable" id="push">
                    <li class="ui-sortable-handle">
                        <h3 class="ui-sortable-handle">LAST step:</h3>
                        <span class="bgcolorselector ui-sortable-handle">&nbsp;</span> <span class="coloselector ui-sortable-handle">&nbsp;</span>
                    </li>
                    <li class="inline-buttons ui-sortable ui-sortable-handle">
                        <div class="ui-sortable-handle">
                            <button class="buttons" id="waring" style="opacity: 1;" value="10min">10 Minute Warning<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" id="psh" style="opacity: 1;" value="push1">Push<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" id="ditch" style="opacity: 1;" value="push3">Last Ditch<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <span class="fa fa-plus-circle ui-sortable-handle" data-popup-open="popup-1"></span>
                    </li>
                </ul>
            </nav>
            <!-- Page Content Holder -->
            <div id="content">
                <div id="topArea">
                    <span class="section-bg-colors">&nbsp;</span> <span class="section-colors">&nbsp;</span>
                    <p id="introscript">What we do is very simple…&nbsp;</p>
                    <p>Facebook uses their data to figure out when someone’s ready to buy or sell a home, so we create a beautiful ad for you and we place it in the News Feeds of ACTUAL buyers and sellers in YOUR area, right between posts from their friends and family. Your image is CUSTOM designed with your phone number and information, and your prospects can click STRAIGHT through from their OWN Facebook to your EXISTING website, or just CALL you right from the ad, itself. And we’ll show your ad to those buyers and sellers over two THOUSAND times every month, guaranteed! Does that make sense?</p>
                    <a href="#" id="closethis">(MOVE TO CLOSE)</a>
                </div>
                <div id="answers-section">
                    <span class="section-bg-colors">&nbsp;</span> <span class="section-colors">&nbsp;</span>
                    <div id="rebuttalArea">
                        <div class="rebuttal" id="Default" style="display: none;">[click a rebuttal to load content here]</div>
                        <div class="rebuttal" id="explanation1" style="display: none;">I’m sure you’ve used Facebook before, right?
                            <br>
                            <br>Great, so here’s how this works: Say that I’m looking to list my home soon in (CITY). Facebook will figure this out and mark me as ready to sell a house. So then when I’m scrolling through the main section of my Facebook, clicking through news articles and pictures of friends, I’ll see a full-size advertisement for YOU, front and center, with some catchy text and a big phone number. Now, since I’m on my Facebook looking for things to do, and I’m already planning on listing my home soon, I’ll probably click through to your website - or just call you from the number on your ad! See how that works? We’ve put the whole campaign together for your area and it's ready to go right now - so how would you like your name to appear on your ad?</div>
                        <div class="rebuttal" id="explanation4" style="display: none;">I'm sure you have your own website or profile page, right? Well, the whole purpose of that page is to help home buyers and sellers contact you. But they have to get to your page first, and our service guarantees that your prospects will find you over TWO THOUSAND times every month.
                            <br>
                            <br>That’s why we put your ads in the middle of Facebook News Feeds. That’s where your customers LIVE, and it’s the one place that gets everything you want out of marketing. People who are on their Facebook profiles are curious, a little bit bored, and looking for something social to do - like calling a Realtor. The average first time home buyer spends over an HOUR a *DAY* on Facebook, so it's definitely not a place you can afford to ignore.
                            <br>
                            <br>But to keep this exclusive, of course we have to lock it down right NOW. All I need to get you going is the billing address for the card you'd like to use...</div>
                        <div class="rebuttal" id="explanation3" style="display: none;">(Okay, well let me ask...) Are you able to work with sellers?
                            <br>
                            <br>Perfect! So, next time you’re looking to pick up a listing you can tell your clients that you’ll be showing their home to hundreds of local home-buyers on their Facebook News Feeds, with a professionally-designed ad. You can customize your ad whenever you want. So when you need a listing, we can target sellers, and when you need to sell, we can target buyers. When you have an open house, you can call us up, and we’ll design you the PERFECT ad for that listing. Or, of course, if you’re busy, you can let us handle your entire marketing campaign and we’ll show you what a dedicated company can do. We’re here to MAKE this WORK, either way!
                            <br>
                            <br>Now I have to get this going, but I have most of the information that I need - looks like the next thing I need to get is the (best email address for us to send your receipt to when we're done)...</div>
                        <div class="rebuttal" id="explanation2" style="display: none;">If someone called you looking to list a home in (CITY) today, would you be able to work with them?
                            <br>
                            <br>Great, that’s all we’re talking about! We only put you in front of REAL, INTERESTED buyers and sellers on their OWN Facebook accounts, where they’re active and engaged. The more we show them your ad, the more likely they are to contact you, so we stay with them and don't let go. All you have to do is answer the phone! You don't even need to have a Facebook account. We'll design your ad, and we’ll send you a FULL report every month with your analytics. And you can cancel any time, so we're here to EARN your business every month.
                            <br>
                            <br>(We’ll have your phone number right there on the ad so that your customers can call you directly, so is this the phone number you want us to use?)</div>
                        <div class="rebuttal" id="explanation4" style="display: none;">I’m sure you get a lot of these kinds of calls, right?
                            <br>
                            <br>Well this is for Facebook, and we’re the only company that's putting you directly on News Feeds of real buyers and sellers with guaranteed exposure. You can't compare that with anything else. But what's more important, we’re actually here to work WITH you. Say you have an open house this weekend and you want to broadcast it to (CITY). Just call up your marketing team and we’ll design you the perfect ad for that listing, link it to an event page, and get it out to all of (CITY) right away, on their News Feeds, then we’ll change everything back when the open house is done. You get a whole team of experts at your fingertips Monday through Friday. Or you can let us handle everything and you’ll get a full report every month to show you a breakdown of real buyers and sellers who found you on their own News Feeds over TWO THOUSAND times a month!
                            <br>
                            <br>Now I have to get this going, but I have most of the information that I need - so all I need is that billing address for the card you’d like to use, whenever you’re ready...
                            <br>
                            <br>
                        </div>
                        <div class="rebuttal" id="explanation5" style="display: none;">Okay well, just as a ballpark figure... What does the average home sell for in (CITY)?
                            <br>
                            <br>(300k house = ~$5k commission || 500k = ~$8k || 1M = $20k)
                            <br>
                            <br>Okay, well, at worst, a single, first-time home buyer should net you three to six THOUSAND dollars in commissions! So with your ad being seen more than TWO THOUSAND times every month by ACTIVE buyers and sellers in (CITY), it would be impossible to find a better Return on your Investment. And that “R.O.I.” is all that really matters. Honestly, even the professional graphic design, the market targeting research, the custom branding, the marketing team, that’s all WORTH more than $139, but at the end of the day, you only want to spend money to MAKE money, and I get that. That’s exactly what we’re here to do. Your R.O.I. is our R.O.I., because we can’t grow at ALL if we can’t grow WITH you. So all we need to get this going is some payment information. Will you be using a Visa, Mastercard, American Express, or Discover?</div>
                        <div class="rebuttal" id="how1" style="display: none;">Well, Facebook has figured out how to use social networking to perfectly target the RIGHT ads to the RIGHT people at the RIGHT time. They track what their users like, what other sites they go to, and even what they talk about. We use that information to target ads for Realtors across the country, exactly when a user is ready to buy or sell a home. Does that make sense?
                            <br>
                            <br>Great. Now we’re going to guarantee you that we’ll do that - show your custom ads to your best prospects - over 2,000 times per month. Now, we’re selling to your area right now, so let’s lock this down before someone else gets it. All I need to get you started is the billing address for the card you’d like to use.</div>
                        <div class="rebuttal" id="how2" style="display: none;">Well, we're not Facebook, so I only know so much. You sell homes and you don't really understand how to build a home, but you do understand how to sell it. Well, we understand marketing, but we don't understand every part about Facebook and how they do it. It's a 60 billion dollar a year industry for them, and we've got the real estate end of it. We're just offering you an opportunity to get in and make some money, get these people seeing you, and we're doing it without a contract, we're doing it with a money-back guarantee, and it's always month to month. We're just looking for 30 days to earn your business and show you what we can do for you. All I really need is a billing address on the card you want to use, and we can get you over to verification and get you in front of your market.</div>
                        <div class="rebuttal" id="statistics1" style="display: none;">I can totally understand why you would ask, but we're a nationwide marketing company, so any statistics I COULD give you would be totally misleading. We work with Realtors from Louisiana to Manhattan, and that includes everything form trailer parks to luxury condos. Every Realtor is different. So what’s IMPORTANT is that we align OUR expectations with YOURS. That’s why we START from what we CAN guarantee: that we’ll place your ad in front of REAL buyers and sellers in your area over two thousand times EVERY month, on their own Facebook News Feeds. From there, if you are ever NOT getting the results you expect, just call our Customer Service team so that we can understand YOU better as a unique client. So try it out for a month and let us SHOW you how effective it is - all I need to get you started is the email address you’d like us to send the receipt to when we’re done.</div>
                        <div class="rebuttal" id="statistics2" style="display: none;">Of course, I get what you're saying, but I don’t have access to our customer database. Besides, there's so much that we couldn't possibly track. You might meet a parent at a PTO meeting who recognizes you from their Facebook page, and that recongition could lead to a listing. Or someone else might see you over and over on her Facebook page until she recognizes your name as the local pro in the area, and that could also lead to a listing. We can't track those kinds of things and that's the whole magic of Facebook - it's SOCIAL networking! So let's do this: for the next month, just ask any new clients where they found you, and we’ll give you a full report with the analytics we DO have. And of course, you can always cancel any time, free of charge. All I need to get you going is the billing address for the card you'd like to use.</div>
                        <div class="rebuttal" id="freeTrial" style="display: none;">Of course, a free trial sounds like a good idea, but that money would have to come from somewhere. It's very expensive for us to market you on Facebook, and we have to pay our graphic designers and ad strategists, too. Other companies just increase their prices or cut corners, so that they can use the money their clients are giving them to bring in NEW clients. But we spend your hard-earned marketing dollars on your OWN marketing - and that's a good thing for you, of course. So, by sticking to a simple sales process and charging a flat monthly fee, we keep this service affordable and focus our efforts on bringing you the results you want. There's just no way to do that with a free trial! So I can take the number on the front of your card, whenever you're ready...</div>
                        <div class="rebuttal" id="noWebsite" style="display: none;">No worries. We found you online, so there’s a website out there with your name, area, and phone number, and we can use that. I’m also going to transfer you to a senior verification officer, who will confirm all your information, set up your account, and process your payment. So you can ask them about our own custom websites with lead capture forms and everything. All I need to transfer you over is the billing address for the card you’d like to use.</div>
                        <div class="rebuttal" id="aboutAds" style="display: none;">We have a design department that makes custom ads for thousands of Realtors, for this exact service. We test those ads through millions of views to determine which ads work the best, so they’re always evolving to best serve you and your market. We only place them on active news feeds of active buyers and sellers in your area. They look great, work great, and give your prospects all the information they need. But if you do have special needs, you can contact your marketing team at any time to customize your ad as you need it.
                            <br>
                            <br>But we only work with real estate agents, so we know what works. That’s why we do this month to month, with no contract or cancellation fees, so that the burden’s on us to prove ourselves to you every single month. So let us bring you some business - All I need to get you started is the billing address for the card you’d like to use.</div>
                        <div class="rebuttal" id="guarantee" style="display: none;">Our money-back guarantee is that your ad will be seen over 2,000 times by people who are identified by Facebook as “in the market” for real estate, in your chosen city, every single month, for as long as you keep the service. But the trick is, in order to guarantee all those unique, targeted views, we can only sell to a few Realtors in each area, and we’re calling your area right now. That means that this opportunity is only available on this call. But there’s nothing to lose - it’s month-to-month with no contracts and it’s backed by a money-back guarantee. So let’s lock this down right now - all I need to get you started is the billing address for the card you’d like to use.</div>
                        <div class="rebuttal" id="qualified" style="display: none;">Obviously, we can’t look into the minds of internet users, but Facebook can come pretty close. It’s definitely not enough that someone just searches for houses on Facebook or goes to Trulia every once in awhile - that won’t quite put them on our radar. Facebook watches people with very complex programming that has been perfected over years, with billions of dollars and billions of users. They are very careful not to add people to our lists unless they appear to be active, interested, and READY, to buy or sell a home in your area. If you think about it, that’s pretty crazy, and no other form of advertising can come close to that.
                            <br>
                            <br>But we are sweeping through the real estate market to connect the besst realtors with the best prospects, and that means that this can only be available to you on this call. So to meet you half-way, there are no contracts and no cancellation fees, and we will guarantee you that we’ll do our job, 2,000 times per month to the right people at the right times. All I need to get you started is the billing address for the card you’d like to use.</div>
                        <div class="rebuttal" id="otherMktg" style="display: none;"><em>That’s always great to hear and I don’t want to take away from anything that’s working for you.</em>
                            <br>I just want to put you in front of buyers and sellers who are NOT finding you now, over TWO THOUSAND times per month. Your ad will only be seen by people who are in the market for real estate in your area. So they know what they want to buy and now they need a local agent to contact. We can link this to whatever page you want, so it can really supplement anything else you're doing.  Now we only have a few positions available for each area, and they won't last long. <strong>So is this phone number the best number for new clients to reach you?</strong></div>
                        <div class="rebuttal" id="competitor" style="display: none;">I can probably save you money on what you’re paying and get you better results. So let me ask, what are you paying right now?
                            <br>
                            <br>Ok because right now through my first-time client promotion I can put you on that same first page discounted for life. The price is normally $139 dollars a month with a one-time six month commitment,but today you only pay $139.95, month-to-month with no long-term contracnt. This price is risk free and good for the entire life of your account. So we keep working hard to earn your business every month!
                            <br>
                            <br>From here you can be on the 1st page of (BING/Facebook) within 48 hours so you can start tracking your phone calls right away and (ALL I NEED TO GET YOU STARTED IS THE/I HAVE YOUR) billing address (FOR THE CREDIT CARD YOU'D LIKE TO USE /AS [SAY BILLING ADDRESS], IS THAT CORRECT)?</div>
                        <div class="rebuttal" id="triedBefore" style="display: none;">I don’t know exactly what you’re already doing, OR what you've tried in the past, but I CAN tell you that NO other company is offering a service like this. We put you directly into News Feeds, not in the advertisement section to the right. This is totally different than promoting your page or boosting your updates - this goes to your own website, where we already found you! And we broadcast your personal brand to pre-targeted home-buyers and home-sellers in your ENTIRE CITY. We do this month-to-month for the price of a cup of coffee a day. (Back to VALUE, or CLOSE)</div>
                        <div class="rebuttal" id="trulia" style="display: none;"><em>That's actually great to hear...</em>
                            <br>Those are great companies, but they are completely different than what we do. They advertise on Facebook to get buyers and sellers to <strong>THEIR</strong> website. Then they place you in a directory along with hundreds of other agents or they sell you leads. But we work with you as an individual agent and your ad in front of real buyers and sellers on their own News Feeds, where we can link to a (Trulia/Zillow) profile if you'd like. So you can really stretch the money you're already spending by adding this direct route to your profile, and we won’t charge you any commission or extra fees. <strong>All I need to get you started is the billing address for the card you'd like to use. </strong></div>
                        <div class="rebuttal" id="slots" style="display: none;">I'm just in the outbound sales department, so I can't actually see how many slots we have available in each city. I get leads when we have an opportunity that's available, so that means we must have a few slots left in (CITY). But I do know that we call areas and move on, and that they fill up pretty quick. There are only so many active buyers and sellers in any city, and each slot's worth over 2,000 of them - so you'll be locking out your competition, too. Our verification department has more access to our systems and they may be able to see what else is available - I can get you transferred over once I get your information, so what's a good email address for us to send a receipt to when we're done?</div>
                        <div class="rebuttal" id="leadService" style="display: none;">This isn't about leads.  What we do is totally different. So we're just directing active buyers and sellers to your website where they have free access to call you directly. That means you don't have to cold call people or pay us part of your commission. So with our service, the clients call you, and they get to find you their way, when they're actually active, and wanting to buy or sell a home. We'll help you promote your personal brand to active and interested buyers and sellers over TWO THOUSAND times every month, so is the best phone number for your new customers to call the number I called you on?</div>
                        <div class="rebuttal" id="tooBusy" style="display: none;"><em>That's great to hear!</em>
                            <br>The biggest benefit to our service is that we only send interested people to your website. So you just have to answer the phone and work with customers or pass them to another realtor and collect a referral fee. Either way, it’s better business for you. (MOVE TO NEXT "VALUE" or CLOSE...) So is this the best number for those new clients to call?</div>
                        <div class="rebuttal" id="sellers" style="display: none;"><em>That's perfect for our service...</em>
                            <br>You can let clients know that when they list with you, your website is featured throughout the Facebook Network. Tell them you will feature their home for sale on your website and that this will help them sell their home a lot faster. It's a great tool when picking up a new client!  Don't forget to tell your verifier, too, so that we can customize your ad campaign to show specifically to sellers and avoid buyers. All I need to get you transferred to them is the billing address for the card you'd like to use...</div>
                        <div class="rebuttal" id="newAgent1" style="display: none;">That’s great to hear, congratulations. That’s probably why you’re on my calling list, most of my customers are new agents. That’s the biggest reason that we knocked the price down so far: we want to make it affordable for you to get your foot in the door AND level the playing field. When these new clients see your sleek, custom ad on their own Facebook News Feeds, they’ll see you as the local pro. You can even get ahead of the established Realtors in your area, and for a lot less than any other options. So this should be your first step into the marketing world, and I can get you up on Facebook in less than 48 hours - is this the phone number you’d like on your ad?</div>
                        <div class="rebuttal" id="newAgent2" style="display: none;">Of course, there’s so much to think about as a New Agent. Luckily, your company has already made you a webpage with all of your information - that’s how we found you! And we do this for New Realtors every day, so we’ve got all the details covered on our end, too. Of course, you’ve got your license, so you can put this on your personal card for now and hold onto your receipt for tax write-off purposes. What’s important is that you take advantage of the ONE opportunity you’ll get to set up your pipeline when you really need to, because it takes time to build your brand and develop your client base. And we’re here to grow with you in the long term, so you’ll have your own marketing team at your fingertips, here to answer any questions you might have and dedicated to your success every single month. All I need to get you started is the billing address for the card you’d like to use...</div>
                        <div class="rebuttal" id="noMoney" style="display: none;"><em>I completely understand and that’s no problem...</em>
                            <br> Obviously, one home sold through our service will pay for your subscription for years. This is the most affordable and most effective form of marketing, and as you know, you have to invest in yourself. If you really need more money, you just can’t afford not to take this opportunity, and it won't be available after today. This could be the fork in the road for your business. Now, we can hold this position using your personal card for now, and then you can change over to a different card anytime just by calling our customer service department. But we have to get some form of payment today, so all I need to start setting up your account is the number for the card you’d like to use, whenever you’re ready.</div>
                        <div class="rebuttal" id="reviews" style="display: none;"><em>I totally understand how that might worry you...</em>
                            <br> But we are a nationwide marketing company, so as you can imagine, we’ve had a few misunderstandings along the way. There are only a few reviews from thousands of customers, and if you read them, you'll see that we've resolved them completely. Now, our whole business relies on keeping you happy.  So, what I can tell you is that thousands of Realtors choose to stay with us every single month without any contracts.  Just give me one month, let me prove to you that we can bring you production, and <strong>all I need is the best email address to send a receipt to when we’re done.</strong></div>
                        <div class="rebuttal" id="callEmail1" style="display: none;">[EMAIL] I really wish that I could send you an email, but I can’t. I’m in a call center and I handle personal information, so I don’t have access to any email - and that's for your security, of course.
                            <br>Now, the thing is, we can only work with a few agents in each area and we’re calling right now, so this won’t be available for very long. But let me ask you...
                            <br>(MOVE TO NEXT VALUE 1/2/3 OR CLOSE)
                            <br>
                            <br>[CALLBACK] <em>&nbsp;I hear what you’re saying...&nbsp;</em>
                            <br>The thing is - I wish I could hold this position for you. But I can't because there are only few positions available per city, and we're calling your area right now. To get you those 2,000 views exclusively, we have to limit the number of agents we work with, and the positions for your area will be filled today. But let me ask you...
                            <br>(MOVE TO NEXT VALUE 1/2/3 OR CLOSE)...</div>
                        <div class="rebuttal" id="callEmail2" style="display: none;"><em>Okay, well hear me out...</em>
                            <br>The way this works is that we’re given a territory as a team, and right now we’re calling your area. Now, to keep your marketing exclusive, we can only sell to a few agents in each area - usually only two or three agents, total. At this price, those positions go pretty quick, and then we move on. So by the time we would talk again, your area would already be taken by a competitor. That's why we're calling with a huge discount and a month-to-month setup. So let’s get this going - all I need to get you started is the billing address for the card you’d like to use…</div>
                        <div class="rebuttal" id="callEmail3" style="display: none;"><em>So here's the deal...</em>
                            <br>This calling campaign is like a fire sale: it's a one-time promotion we're doing, to find a few agents in each area to grow with. As you can imagine, marketing on Facebook is very expensive for us, so we keep down costs by sticking to a simple sales system. That way, we spend your marketing dollars on your OWN marketing, not on bringing in new customers. So, we'll do our best to meet you half-way by giving you a month-to-month subscription that you can cancel any time, so you know we have to prove ourselves. But this is everything you could possibly want in marketing - so there's really nothing left to think about and no reason to wait.
                            <br>
                            <br>So let’s get you online and the worst case scenario is you'll be in front of buyers and sellers two thousand times in the next 4 weeks. So I can take the number on the front of your card, whenever you’re ready…</div>
                        <div class="rebuttal" id="inCar" style="display: none;">I understand most of our clients are always on the go and most importantly I want you to be safe. Now I can only work with one agent for this position so I would like to help you take this off the market. So let me ask you... (MOVE TO VALUE 1/2/3...)</div>
                        <div class="rebuttal" id="askPartner" style="display: none;">Of course and we work with a lot of teams. We can put this on a personal card for now and move to a business card anytime in the future, but there are only a few positions available and I'm sure your (PARTNER/WIFE/BROKER) wouldn't want you to miss a serious business opportunity. So let me ask you (MOVE TO VALUE 1/2/3)</div>
                        <div class="rebuttal" id="10min" style="display: none;">So, (NAME), I understand that you have to be careful where you spend your marketing dollars. But at the end of the day, this is $140 for a fully managed Facebook marketing campaign with professional design and a targeted market. That’s less than a night out, and it’s normally $300 a month. Now, it’s my job to find motivated agents for this promotion, so I’m calling your area to find a Realtor and then we’re moving on. That’s why we have a verification department to go over the details with you before we bill you. But I’ve GOT to get back to signing people up, so if you’re not ready to go, I have to get to the next agent on my list. But I know this is going to work great for you, so I can take down that billing address, whenever you’re ready.
                            <br>
                            <br>[IF NO BILLING ADDRESS…] Okay, thank you so much for your time, (NAME) - good luck in all your business endeavors and I hope you have a great day!</div>
                        <div class="rebuttal" id="noCard" style="display: none;">Not a problem, the most important thing is securing the position since it will be sold soon. Now, I can wait on hold while you grab your card or we can put the 1st month on a different card for now and then anytime you want to change the payment information you can give us a call. Whatever works best for you... (MOVE TO VALUE OR CLOSE)</div>
                        <div class="rebuttal" id="trust1" style="display: none;"><em>I understand, but we do this with thousands of agents…&nbsp;</em>
                            <br>So you know, we’re on a secure line and this is all done on a system that handles hundreds of transactions a day. We handle your information just like your bank does. And as soon as I submit your information, I’ll transfer you to a verification officer who will go over every detail with you and answer any questions, on a recorded phone call. So, I don’t process any payment, and verification won’t charge your card unless you verbally agree to everything on recording. So the next thing I need is just the number on the front of your card, whenever you’re ready...</div>
                        <div class="rebuttal" id="trust2" style="display: none;"><em>That's understandable...</em>
                            <br>Let me give you all of our contact information before we move forward.
                            <br>
                            <br>My name is (YOUR NAME) and our company is Resultli. That's "RESULT" "L" "I" as in Igloo, and you can find us at resultli DOT COM. You can reach us toll free at 1.800.364.3480, Monday through Friday from 9:00am to 5:00pm Pacific Time, but that's for CUSTOMER service, of course - you can't call in to purchase. So like it says on our site, I'm right here in our call center location, in Beaverton, Oregon, just southwest of Portland.
                            <br>
                            <br>Now, we'll be your personal marketing team throughout the life of the account. So, please feel free to contact us with any questions. You'll be receiving an email receipt once we're through, so what would be the best email address for us to send it to?</div>
                        <div class="rebuttal" id="push1" style="display: none;"><em>Okay, no problem...</em>
                            <br>Well you know our service is month to month. There are no contracts. We don't have any cancellation fees.  I would really suggest just giving us 30 days to show you what we can do for you and then, if you don't want to continue the service after that month, you don't have to.  We only want you to stay if you love it, and I know you will.  So let’s do this - just give us a month - all I need is your billing address, whenever you’re ready.</div>
                        <div class="rebuttal" id="trust3" style="display: none;"><em>Of course...</em>
                            <br>Are you near a computer?
                            <br>
                            <br>[YES] Let me show you our company website. Go ahead and open up a new web browser and let me know when you're ready. In the ""address bar"" type in www dot "RESULT" "L" "I" dot com and let me know when you see the main page... [Demo site, talk through it] ...Now I have most of the information I need to get you started. All I need now is the billing address for the card you'd like to use, whenever you're ready.
                            <br>
                            <br>[NO] Okay, then I can't show you our website. But I can tell you a couple of things. First, we're obviously a legitimate company - I'm sure you can hear the call center in the background. And I can also tell you that we're on a secure line and this is actually much more secure than using your card on the internet or swiping it in person. You can also trust the product and our service because the views are guaranteed and you can cancel anytime. Since we want to keep you for the long term, we'll be here for you every step of the way. So let's get this going - you won't regret it - I can take the numbers on the front of your card, whenever you're ready.</div>
                        <div class="rebuttal" id="cancel" style="display: none;">Absolutely, you can cancel at any time with no hassle or cancelation fees. (MOVE TO VALUE OR CLOSE)</div>
                        <div class="rebuttal" id="random1" style="display: none;">You know, I'm not really sure. I'm just in the sales department. When I transfer you to our verification department, they will gladly answer any questions about our service and confirm everything with you BEFORE we process any payment. What I can tell you is that our service IS working for thousands of realtors nationwide, and that's risk free with no contracts, so we have to work hard to earn your business every month. What's important right now is that we secure this position so that I can transfer the call, all I need to lock this down is (the email address you'd like us to send your receipt to when we're done). </div>
                        <div class="rebuttal" id="random2" style="display: none;">I couldn’t answer that but I know that we have a great customer service department who is here to help you with any questions you may have in the future. From analyzing your ads to helping you with your website, they’re available to help 5 days a week. (Move to Next VALUE - or CLOSE)</div>
                        <div class="rebuttal" id="1" style="display: none;"><em>Okay, no problem...</em>
                            <br>Well you know our service is month to month. There are no contracts. We don't have any cancellation fees.  I would really suggest just giving us 30 days to show you what we can do for you and then, if you don't want to continue the service after that month, you don't have to.  We only want you to stay if you love it, and I know you will.  So let’s do this - just give us a month - all I need is your billing address, whenever you’re ready.</div>
                        <div class="rebuttal" id="push3" style="display: none;"><em>Okay,...</em>
                            <br>I just really want you to have the best marketing you can get, and that really is this service. We've done the research, we know the market, and we only target people who are looking to actually buy or sell a home. They know what they want, and they want to talk to someone who can help. Most people hire the first Realtor they talk to, so let's make sure you're where you need to be, TWO THOUSAND times a month! And seriously: we've got a money back guarantee with numbers from Facebook to back it up!  But you can only get this RIGHT now.  So let's get this going - I'll take the numbers on the front of your card, whenever you’re ready…</div>
                        <div class="rebuttal" id="thatPhrase" style="display: none;">It doesn't have to be that phrase but my job is to put you in the best possible position to get results so we track what the market is searching for before calling you. Now over the last 12 months (SEARCH PHRASE) has been searched an average of (# OF SEARCHES) times per month by your target market so that is exactly where you want to be. Does that make sense? Now you will be on the first page of (BING/Facebook) within 48 hours so you can start tracking your phone calls. And (WHAT IS/I HAVE) the best phone number for your new customers to call (AS [SAY PHONE NUMBER] IS THAT CORRECT)?</div>
                    </div>
                    <div id="introPrompt"><a href="index.php">(MOVE TO INTRO)</a></div>
                </div>
            </div>
        </div>
     
        <!-- jQuery CDN - jquery -->
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