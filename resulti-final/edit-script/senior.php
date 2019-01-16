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
        <title>Senior | Sale Script</title>
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
            <li class=""><a href="index.php">Frontline</a></li>
            <li class="active"><a href="senior.php">Senior</a></li>
            <li class=""><a href="" id="savechanges" type="senior">Save</a></li>
            <li class=""><a href="" id="export" type="senior">Export</a></li>
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
                <span class="section-bg-colors">&nbsp;</span> <span class="section-colors">&nbsp;</span>
                <div class="sidebar-header">
                    <h3>Instarank Marketing</h3>
                </div>
                <ul class="swapable list_sortable ui-sortable" id="excitement">
                    <li class="static">
                        <h3 class="ui-sortable-handle">MAIN</h3>
                        <span class="bgcolorselector ui-sortable-handle">&nbsp;</span> <span class="coloselector ui-sortable-handle">&nbsp;</span>
                    </li>
                    <li class="inline-buttons ui-sortable-handle ui-sortable">
                        <div class="ui-sortable-handle">
                            <button class="buttons" value="verificationScript">VERIFICATION<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <span class="fa fa-plus-circle ui-sortable-handle" data-popup-open="popup-1"></span>
                    </li>
                    <li class="inline-buttons ui-sortable-handle ui-sortable">
                        <div class="ui-sortable-handle">
                            <button class="buttons" value="premium1">PITCH<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <span class="fa fa-plus-circle ui-sortable-handle" data-popup-open="popup-1"></span>
                    </li>
                    <li class="inline-buttons ui-sortable-handle ui-sortable">
                        <div class="ui-sortable-handle">
                            <button class="buttons" value="disclaimer">DISCLAIMER<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <span class="fa fa-plus-circle ui-sortable-handle" data-popup-open="popup-1"></span>
                    </li>
                    <li class="inline-buttons ui-sortable-handle ui-sortable">
                        <div class="ui-sortable-handle">
                            <button class="buttons" value="outro">OUTRO<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <span class="fa fa-plus-circle ui-sortable-handle" data-popup-open="popup-1"></span>
                    </li>
                </ul>
                <ul class="list_sortable ui-sortable" id="urgency">
                    <li class="static">
                        <h3 class="ui-sortable-handle">UPSELL</h3>
                        <span class="bgcolorselector ui-sortable-handle">&nbsp;</span> <span class="coloselector ui-sortable-handle">&nbsp;</span>
                    </li>
                    <li class="inline-buttons ui-sortable-handle ui-sortable">
                        <div class="ui-sortable-handle">
                            <button class="buttons" value="plus1">"RE PITCH" (1)<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <div class="ui-sortable-handle">
                            <button class="buttons" value="plus2">(2)<span class="fa fa-minus-circle del"></span></button>
                        </div>
                        <span class="fa fa-plus-circle ui-sortable-handle" data-popup-open="popup-1"></span>
                    </li>
                </ul>
            </nav>
            <!-- Page Content Holder -->
            <div id="content">
                <div id="topArea">
                    <span class="section-bg-colors">&nbsp;</span> <span class="section-colors">&nbsp;</span>
                    <div class="mainContent" id="verificationScript">Hi, my name is <strong>[FULL NAME]</strong> -- I’m a senior verification officer here at Bgin <strong><u>Online</u></strong>. Can I get your first and last name so I can verify the transfer? Ok Great, Hi, <strong>[NAME]</strong>, I do want to let you know, this call is being recorded for verification purposes. Okay? <strong>[HIT “RECORD” AFTER CUSTOMER AGREES]</strong>
                        <br>Ok (CLIENT NAME), again my name is (NAME) and we are recording for verification, now, I’m just going to quickly confirm the information I’ve received from <strong>[SALES AGENT]</strong> and set up your account, okay?
                        <br>Okay, I have your <u>name</u> as it will appear on your ad as <strong>[NAME]</strong>.   —  Is that the same way it appears on your Card?
                        <br>I have the best <u>phone number</u> for clients to reach you as <strong>[NUMBER]</strong>.
                        <br>And I have your <u>preferred location</u> as <strong>[ZIP/CITY/COUNTY]</strong> in <strong>[STATE]</strong>
                        <br>And we’ll be linking your ad to your <u>personal website</u> at <strong>[READ WEB ADDRESS]</strong>, is that correct? (Go to the website and make sure it works!)
                        <br>Most importantly for us, I need the best <u>email address</u> for your receipt - is that <strong>[SPELL OUT EMAIL ADDRESS]</strong>?
                        <br>Now, I will also need the <u>3 digit code</u> on the back of your card (4 digits on front if card is AmEx)</div>
                    <div class="mainContent" id="premium1">Great! Now, one thing I want to do real quick is go over the other packages we provide, because they’re not available to add after the first month, and you get a really great discount on them right now. You just let me know what you think afterward. Okay?
                        <br>Perfect. Now, on that note, do you work strictly in <strong>(CITY)</strong> or do you target other areas as well?
                        <br>[TALK to the client about multiple cities or areas, use this to tailor your pitch - get them thinking BIG! Remember that you can pitch multiple cities instead of "COUNTY Slots"]
                        <br>Okay, great! Now, I don't know if <strong>(SALES REP NAME)</strong> explained how our company works, what we do is split each area into slots based on the number of buyers and sellers we’ve found there, so they don’t overlap. That way, our clients don’t compete with each other.
                        <br>So that’s what <strong>(SALES REP NAME)</strong> sold you - a slot, with a guarantee of 2,000 views per month on websites all over the internet, by your market. But, I take it when <strong>(SALES REP NAME)</strong> called you, it was just for <strong>(CITY)</strong>, right?
                        <br>Yeah, I figured, since they haven’t started calling on our COUNTY SLOTS yet. So, here’s what I’d suggest doing this first month, if you can pull it off: <strong>&nbsp;Start with our premium package.&nbsp;</strong>
                        <br>Here’s why I want you to do that: The COUNTY slots actually get EIGHT of those regular slots, for 16,000 total views, which means you’d completely DOMINATE <strong>(COUNTY)</strong> -- and you’d also block out your competitors, since this is “first come first served”! Plus, with this package, I’d also be able to add mobile for free, which means you’d show up on smart phones, tablets, I-pads --- all that stuff.
                        <br>Also, with the premium, you’ll get your own dedicated marketing team. They're going to coordinate the details of your marketing efforts, make sure everything works great, and gladly answer any questions you might have. So, at the end of the month, what I’d have you do is call your team and go over each area. They’ll be able to rank your success by area, slot by slot, from 1st to 8th. That way you can make an educated decision every month about your best budget. You keep your best slots so you KNOW you'll get the best Return on your Investment!
                        <br>And if you start as a premium, you stay a premium customer, so you can scale back up and down whenever you want. You can move down to the 139 next month and work your best area. Or even better, you decide you love the extra business, then you can keep this package and keep paying only $499/month, while anyone else would pay at least $1,500 for the same package!
                        <br>But again, this package is only available to you your first month. After that, our slots will be gone, which means you won’t be able to dominate your area later.   So, I would highly recommend starting with the premium. $499.95 for EIGHT times the exposure, 16,000 views covering all of <strong>(COUNTY)</strong>. What do you think - can you pull this off for this first month?</div>
                    <div class="mainContent" id="disclaimer" style="display: none;">Okay, just to let you know: I must read this disclaimer verbatim and if I get interrupted, I'll have to start over, okay? <strong>&nbsp;OK [CLIENT NAME], AGAIN A REMINDER THIS CALL IS BEING RECORDED FOR VERIFICATION PURPOSES. THE FOLLOWING DISCLAIMER CONSTITUTES YOUR AGREEMENT TO PURCHASE AND A CONFIRMATION THAT NO AGREEMENTS OR PROMISES HAVE BEEN MADE OUTSIDE OF THE FOLLOWING:<br><br> YOUR ADS WILL BE LINKED TO [WEB ADDRESS] AND ARE GUARANTEED TO DISPLAY ON WEBSITES AT LEAST [2/4/8/16,000] TIMES PER MONTHLY BILL CYCLE, TO PEOPLE WHO ARE IDENTIFIED AS “IN THE MARKET FOR REAL ESTATE” WITHIN YOUR CHOSEN LOCATION(S) [SAY ALL LOCATIONS]. <br><br> YOU WILL RECEIVE A PERFORMANCE REPORT WITHIN A FEW DAYS PRIOR TO YOUR SUBSCRIPTION RENEWAL DATE WHICH WILL INCLUDE A BREAKDOWN AND SUMMARY OF THE VIEWS YOUR AD(S) RECEIVED. SHOULD THE NUMBER OF TOTAL VIEWS BE LESS THAN THE NUMBER GUARANTEED YOU WILL BE ENTITLED TO AN ACCOUNT CREDIT EQUAL TO THE VALUE OF ONE MONTH OF SERVICE. <br><br> WHILE THERE IS NO CONTRACT WITH THIS SERVICE IT WILL RENEW AUTOMATICALLY EACH MONTH UNTIL SUCH TIME THAT YOU CALL US TO CANCEL. YOUR RECEIPT AND PERFORMANCE REPORTS WILL BE EMAILED TO [EMAIL ADDRESS].<br><br> NOW, DO YOU AUTHORIZE ME TO ACTIVATE YOUR MONTHLY SUBSCRIPTION BY BILLING YOUR CARD ENDING IN (LAST 4 NUMBERS) FOR TODAY'S TOTAL AMOUNT OF ($159.90 / $259.90 / $359.90 / $499.95) FOR THE ACTIVATION AND FIRST MONTH OF SERVICE? <br> <br>[run payment]<br></strong></div>
                    <div class="mainContent" id="outro" style="display: none;">
                        Ok, congratulations! Your card has been approved. From here your card will be automatically charged ($139.95 / $239.95 / $339.95 / $499.95) On the <strong>[bill date]</strong> of every month and you will see the charge on your statement as 'Bgin Online'. For any account changes, please be sure to call us no later than three days before your monthly bill date, just because it takes the banks that long to process the change on their side - ok?
                        <br>Now, before you go, let me give you a quick preview of what to expect in the next few days: First, you’ll get your receipt in your email by the end of the day. That will include our contact information also have your account information and our written guarantee.
                        <br>In the next couple of business days, you will get a follow-up email with your ad, itself. We handle the first round of ad design and get it up on websites right away, so you don’t need to contact us to approve it. You are more than welcome to call us with any customization you might want or anything you’d like to change. If you want to change your area, your package level, or your billing date - anything - just call your Personal Marketing Team at the 800 number provided in your email and on our website, okay?
                        <br>Ok, I want to thank you for your business and have a nice day!
                        <p>
                            <br>
                        </p>
                    </div>
                </div>
                <div id="answers-section">
                    <span class="section-bg-colors">&nbsp;</span> <span class="section-colors">&nbsp;</span>
                    <div id="rebuttalArea">
                        <p class="rebuttal" id="Default"><strong>[click a rebuttal to load content here]</strong></p>
                        <p class="rebuttal" id="plus1">
                            <!-- NOTE TO SELF: *WAY* less salesy! -->Obviously, you want to be careful about where you spend your marketing dollars, but since marketing is about getting the best return on your investment, I just wanted to share something I’ve noticed from looking over monthly performance sheets.
                            <br>
                            <br>First of all, you remember I mentioned that our premium package includes free mobile advertising as well. Well, I’ve found that about 75-80% of click-throughs actually come through mobile advertising with this package. Think about that for a second. How significant would your click-through boost be, if you were able to use mobile ads in the entire area of (COUNTIES)? You’d be able to connect with your potential clients on basically every device they own. Which means you'll stay "top of mind" WHEREVER they go!
                            <br>
                            <br>[IF THEY REALLY CAN’T AFFORD 499, this is where you can pitch 239/339: “I do have a middle option, too. So I can STILL get you that mobile and a great discount - 8,000 views, that's FOUR slots, and we can still do your whole COUNTY, for $339...”]
                            <br>
                            <br>And of course, you’ll get grandfathered in on that mobile hyper-targeting, plus you keep your own dedicated marketing team, no matter what you do after that first month. You stay a premium-level customer no matter what. So you can drop down to your best one or two or three slots, whatever’s working for you, and keep all the extras, too.
                            <br>
                            <br>So this is the only time we can do that for you, and this is your chance to really push into your whole area, do your marketing right, and DOMINATE <strong>(COUNTY).</strong> So let's do this -- all I need is to read you a quick disclaimer and I can get you on your way…?
                        </p>
                        <p class="rebuttal" id="plus2">Of course, and I'm not trying to pressure you into anything. It's just my job to make sure this works for you, and obviously, the more views we can get you upfront, the better it's going to work, and the sooner you can get that closing and your Return on Investment. That's really all that matters.
                            <br>
                            <br>Plus, the more views we can get you in the first month, the more data we'll have on how to market you as well as possible, in all of your future months. So it really works out way better for you in every way if you can "front-load" everything into your first month. Whatever you can afford, this is the right way to do it. [FIND THEIR PRICE POINT, remember it's all about their R.O.I. and getting there as soon as possible!]
                            <br>
                            <br>(Ex: "Even if we step down to the $259 package, that's twice as many views, which means you get your money back twice as fast. We don't want you waiting on results, and money in your pocket means you stay with us. So let's get you there right away, and then you can scale up or down with your budget from there...")</p>
                        <p class="rebuttal" id="plus3">I totally get it. I’m not trying to push you into anything, at all. Like I said, most customers DO choose to expand later. So, I get that you want to try it out and see, but if it does work at ALL, then it’s a positive return on your investment. That’s something you Always want to maximize. But this is a big sale right now and it will be over soon.
                            <br>
                            <br>So that’s why I try to let my customers know that they can maximize our system, test multiple markets and most secure mobile devices for life for an extra hundred now and THEN you can do the basic at 139 for as long as you need to after the first month. You'll keep the mobile and you can move back up or expand to another city when you have more of a cash flow. But your market lives on their phones.
                            <br>
                            <br>So let’s get you a second area now, and we can help you figure out which city is really the better bet at the end of the month - did you want (CITY 2)?</p>
                    </div>
                    <div id="introPrompt">
                        <ul id="verification_btn">
                            <li class="inline-buttons ui-sortable">
                                <button class="buttons ui-sortable-handle" value="verificationScript">VERIFICATION<span class="fa fa-minus-circle del"></span></button>
                            </li>
                        </ul>
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
        <script type="text/javascript" src="assets/js/senior-script.js"></script>
    </body>

    </html>