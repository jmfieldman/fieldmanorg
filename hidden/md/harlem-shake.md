# Harlem Shake (2013)

Harlem Shake mania hit the front page of Reddit in February 2013.  After seeing a few
videos and reading the comments, it was clear that demand for a Harlem Shake video-creating app
was *through the roof*, and someone was going to make a lot of money.
I got to work right away.

I was encouraged by the high barrier to entry for this app.  Mixing audio and video from disparate
A/V streams is a fairly complex process, and back in 2013 AVFoundation was *just* beginning
to support these operations at the level required for a good Harlem Shake creator.
I figured most of the rabble wouldn't be able to quickly put out an app and that I had a good change to be first-to-market.

This app was essentially a race against time to be the first in the store.  Because of the way
the App Store rankings work, the first app would get a huge surge in initial downloads (being the
only offering) and thus be the first result in any subsequent search once more apps hit the store.
This was a bit of a problem since I had never
done any A/V splicing in AVFoundation and scurried frantically around the internet looking for example
code.  

I figured out how to properly splice the streams, and made what would be a horrible 
mistake: getting caught up in features.  I had a good working core done in a day, but spent another
day or so getting all of these stupid settings working properly. I also made a better
video management screen and allowed the user to upload videos directly to Facebook and Youtube -- both
upload APIs I had never used before and blew hours coding and testing.

I spent so much time on functionality that I panicked and published with essentually zero UI polish.

![Harlem Shake](/img/pg/harlem/harlem2.png) {.half} 
![Harlem Shake](/img/pg/harlem/harlem3.png) {.half}

Back in 2013 the App Store submission process was much slower than today, and took up to 7-10 days
for complete review.  It was such a painful waiting game.  I finally got my app into review, but it took
another day for it to release to the app store.  In that day, another app came out and took 1st place.
Mine came out a day later and was relegated to the scrap bin.

![Harlem Shake](/img/pg/harlem/harlem4.png) {.half}
![Harlem Shake](/img/pg/harlem/harlem1.png) {.half}

A week or so after, I got a cease and desist for using the copyrighted song in the app.  I took the app
off the store and put the code up on Github.  [Source here](https://github.com/jmfieldman/Harlem-Shake)
