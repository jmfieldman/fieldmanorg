# Cryptograms (2008)

I started developing iPhone apps during the summer of 2008, pretty soon after the SDK was released to the public. 
I got my hands on a Macbook Pro and spent every evening pouring over sample code and documentation. After a month
 or so I was capable enough to brute force functioning apps and wanted to get something in the store.

I thought a word game would be a good start, and stumbled upon this online cryptogram site that looked like 
it could make a good transition to the iPhone. I contacted the [Puzzle Baron](http://www.puzzlebaron.com/), agreed to royalties for using 
his brand and puzzles, and set about creating the app.

I don’t think I even knew that buttons could be anything other than rounded rectangles, so I went with the 
whole rounded rectangle design aesthetic. The result was… a bit spartan. As this was really a learning app, 
I made a lot of silly design mistakes. For example, the entire main game engine is rendered with CoreGraphics 
rather than just drawing a bunch of images. Who knows why I thought that was a good idea.

![Cryptograms](/img/pg/cryptograms/cryptograms1.jpg)
![Cryptograms](/img/pg/cryptograms/cryptograms3.jpg)

This was also before the days of Game Center, and we wanted to have a centralized player statistics and 
achievement system. I ended up coding an entire Game Center-ish system in PHP/MySQL to keep track of everyone’s
 game stats and medals.

![Cryptograms](/img/pg/cryptograms/cryptograms2.jpg)
![Cryptograms](/img/pg/cryptograms/cryptograms4.jpg)

Cryptograms isn’t on the app store anymore. It’s antiquated, and the Puzzle Baron decided to release a 
new suite of games (thus replacing my old version of cryptograms). I don’t blame him.