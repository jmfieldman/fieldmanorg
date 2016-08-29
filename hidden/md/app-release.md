# Analysis of an App Release: Tring

<img style="float: right; margin-left: 16px; margin-bottom: 4px" src="/img/pg/apprelease/tring3-200x300.png">

Today is December 3, 2012.

[Tring](/tring) was approved for [App Store](https://itunes.apple.com/us/app/tring/id573598489?mt=8) on Wednesday, November 21 – right before the long Thanksgiving weekend. It’s been approximately two weeks, and I thought some people might find it interesting to look at an in-depth review of its release analytics.

## The First One’s Free

I’ll start off by briefly explaining the pay structure of the game. For a static puzzle game of Tring’s nature, I decided to use the “First One’s Free” approach. The first 40 levels of the game are part of the free download and introduce the user to the concept of the game. If the user likes it, they can pay $0.99 for each pack of 100 additional levels.

The first free level pack needs to be balanced between:

* Appropriately paced learning curve
* Enough levels to engage the player with the game and leave them wanting more
* Not too many levels that the player loses interest before completing them
* Hard enough so the user doesn’t lose interest
* Easy enough so that users beat all of the levels (if they don’t beat all of the levels, they won’t want more!)

You can’t please everyone all the time, but I think I balanced it pretty well.

## Overall Performance

Let’s break out the graph that matters. This is the new user acquisition chart from release through today. I use Flurry for my analytics, and it’s a pretty great service.

![Screenshot](/img/pg/apprelease/tring_new_users1.png) {.full .noshadow}

Flurry doesn’t update their data often, so the big fat zero on today’s point isn’t up-to-date. However, that big fat drop to 500 yesterday is accurate. I’ll explain what happened in a bit.

## Marketing Strategy

First off, it should be known that I have zero marketing know-how, or budget. I kind of just hope that my apps are inherently viral and will market themselves through word of mouth. It hasn’t worked for me yet.

One thing that I seem to be good at is getting my apps placed in various iTunes featured sections. I was on the front page of iTunes for [Theseus](/theseus), and was featured in the puzzle section for Theseus HD. I got lucky again with Tring, and was given the first slot in the “New” puzzle games section. I sat there from November 26 to December 1.

![Screenshot](/img/pg/apprelease/tring_itunes_new.png) {.full .noshadow}

Man, check out that terrible icon. Yes, I did all the graphic design myself.

While my app had that precious placement, I was getting approximately 1500 downloads a day. When it was removed, downloads dropped to the 500 range. So that spot is worth roughly 1000 downloads a day. More importantly, those are 1000 users that are genuinely interested in puzzles.

## Paying for Users

I started using Flurry way back when it was first released, and have used it for all of my apps. I was asked to join the beta group for Flurry’s AppCircle advertising network. It didn’t really grant me any income since I don’t have high-volume apps, but I was given some promotional funds to run campaigns on their network.

I had approximately $100 left in the account that had sat there for two years, and decided to just blow it all on Tring. I was shocked to learn that the average cost-per-install in today’s market is around $1.00, even for free apps. There’s no way I could ever justify spending real money on that, since I probably get back 1 or 2 cents per user. So I figured hey, let’s just get an extra 100 users and be done with it.

I guess AppCircles network has latency issues, because after just a few hours it had already garnered approximately 2500 installs, which immediately dried up all of my promotional funds. There’s no way I would ever pay $2500 for that, so I just let sleeping dogs lie and decided to leave paying for app promotion to the big publishers.

So that’s the huge spike in the new user graph on November 26. I consider it “fake”, since I didn’t really earn those installs.

Here’s another thing about paying for installs. You get the drivel of the general user population. People that wouldn’t normally like Tring, but install it just because it’s been shoved down their throat by an advertisement.

Check out this graph, which shows median session length:

![Screenshot](/img/pg/apprelease/tring_med_session_length.png) {.full .noshadow}

The blue line is the median session length across all games tracked by Flurry. The green line is the median session length of people playing Tring. What happened on November 26?  An influx of users who got the app through Flurry’s ads, not through word of mouth or other organic means. The $1 per install would be getting users that most likely don’t care about the game, and probably won’t pay for in-app purchases.

My take-away from this is that paying for installs in a game like this just isn’t worth it. The only thing you’re buying is Top-100 list placement, which does have value, but costs way too much to be a viable strategy for me. The 2500 extra installs I got from Flurry only boosted me to the #61 **puzzle** game. I didn’t even break into the top-200 of overall games. Worth $2500?  I don’t think so.

On a positive note, I’m glad that Tring seems to engage people more than the average game!

## Getting Paid

So I’ve got about 15000 users in two weeks. But those are all free downloads; how is my in-app purchase strategy working?

I have two general markets in my app. The first is for packs – people can buy 100 levels for $0.99. I have nine packs split into easy, intermediate and hard (three packs each). Here is the purchase graph:

![Screenshot](/img/pg/apprelease/tring_pack_purchases.png) {.full .noshadow}

(Again, today’s numbers aren’t posted, so they read as 0.)

The green line is total purchases, and the blue line is number of unique users. So most users buy one pack, but a small percentage buy multiple. Flurry reports a total of 352 packs purchased, which is approximately a 2% conversion rate against the total user base.

The above graph shows successful pack purchases, but I also track the number of times a user initiates a pack purchase. That number has totalled 809, so there is an approximate 50% drop-off rate between people initiating an in-app purchase and then actually saying “Yes” to the purchase. People do know the price before they initiate the transaction, though some of those could be accidental clicks on the purchase button in the UI.

Of the packs that are purchased, people overwhelmingly choose the easy packs. Intermediate accounts for about 20% of the purchases, and expert is about 10% of purchases.

The second market is for hints. I allow users pay to for keys that unlock hints on any given level. It costs $0.99 for 3 keys, $1.99 for 8 and $2.99 for 15. That graph looks like this:

![Screenshot](/img/pg/apprelease/tring_hint_purchase.png) {.full .noshadow}

So yes, people are spending money on keys, but not at the rate that they’re buying packs. Interestingly, the key purchase drop-off rate is at 75%. Must be the guilt of cheating. Of the people that buy hints, 50% buy the 3-for-$1 pack, and the other two packs are both around 25% of the purchases.

With a total of 72 transactions, it accounts for roughly 0.5% of users, but it does give a tiny little boost to overall sales.

## iOS and Device Distribution

Some people may be interested in which iOS version and device version people are using. Here are the graphs:

![Screenshot](/img/pg/apprelease/tring_ios_version.png) {.full .noshadow}

So only about 10% of users have stuck with iOS 5.x. It looks like about 25% of users play from their iPads, so I’m glad I decided to support that natively.

![Screenshot](/img/pg/apprelease/tring_dev_version.png) {.full .noshadow}

Other Random Trivia

* A total of 400,000 levels have been solved.
* in-game session time since release has amounted to approximately 5 man-months across all users.
* The top player has earned 744 stars (out of 1880). I wish I knew who it was.
* My user retention is outpacing the average game by approximately 5-10%.

Was it Worth it?

Tring took me about a month to make. At its current in-app purchase sales pace, it would take more than a year to match what a full-time position would grant in that same time period. However, I get:

* Freedom, peace of mind, zen, etc from working as an indie developer
* A portfolio piece for whenever I decide to work for The Man again
* Pride in making something pretty cool that people seem to like

It’s hard to put a value on those, but I think it was worth it.
