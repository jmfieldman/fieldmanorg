# Snap Roulette (2015)

<img style="float: right; margin-left: 16px; margin-bottom: 4px" src="/img/pg/snap/screen322x572.jpeg">

During the second semester of my D&D class I decided to poll my students for app ideas. I got some really good suggestions, but the one I liked the most from a possible:cool ratio was Snap Roulette. The basic premise is that you take a picture and it gets sent immediately to five random friends – no take-backs!

I used Parse for the backend, including image hosting. I took the Instagram approach and limited my images to low-res, low-quality jpegs. I was able to average about 25-50kb for each photo. This was also a good opportunity for me to spend time learning the Parse permission and cloud code system well. It wouldn’t matter if anyone has access to the Parse client keys: they could only access the functions as they were meant to be used (not interact with the database directly).

I got to put some fun animations in, and experiment with the page view controller.

This was also my first real foray into Android development. My coworker Kevin tried to make the Android version of Snap Roulette, and I ended up helping. It turns out Android development is still a huge pain in the ass and hasn’t improved much since I tried it back in 2008. We got somewhat far, but never to the point that it was publishable.

Snap Roulette is open source. [Github here](https://github.com/jmfieldman/Snap-Roulette).
