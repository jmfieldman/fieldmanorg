# Destiny (1996)

Destiny was my leap from ASCII art to “real” graphics. I wrote this bad boy for a tenth-grade class assignment. Our task was to use a queue data structure any way we wanted. I wrote a bitmap library that used a queue to store picture data – probably the least appropriate way to use a queue or write a bitmap library.

At the time I had a very immature idea of how the VGA card worked and ended up brute-forcing most of the code. Also, it appears that whatever frame timing i used was optimized for the 486 computers we had in our lab; it’s too fast on new machines.

![Screenshot](/img/pg/destiny/d1-1.jpg) {.half}
![Screenshot](/img/pg/destiny/d1-2.jpg) {.half}

Despite my (relatively) impressive graphics, the gameplay was lacking. It was painfully obvious that Destiny would never be the crowd-pleaser that Albert Kuo’s circle-and-square Bomberman clone was.

I attempted to expand the Destiny franchise with Destiny 2. I wrote smoother graphics code and the keyboard was more responsive. It never really got off the ground, and i was left with a fly-your-plane-through-empty-space game.

![Screenshot](/img/pg/destiny/d2-1.jpg) {.half}
![Screenshot](/img/pg/destiny/d2-2.jpg) {.half}

[Source and Executable on Github](https://github.com/jmfieldman/Old-Projects/tree/master/Destiny) *(Note: When you run the program you will see a screen with white squares. Press ‘1’ to play and ‘5’ to quit.)*

## Java Version

Wow. While digging through my old backups I found this gem, the Java version of Destiny that I wrote during a summer internship at Digital Evolution (now defunct).

Back in 1996 Java was the Next Big Thing, and Digital Evolution wanted to incorporate it into their website packages. I was tasked with evaluating Java as a viable platform and to see what I could create with it. I decided to port Destiny to an applet.

Unfortunately the original source code seems to be lost to the ages, but I do remember being unfamiliar with applet graphics technologies. All graphics were written directly to the screen without buffering. This whole applet was essentially brute force and experimentation.

Similar to the original PC version, use the arrow keys to move your ship. Press the space bar to shoot, and the N key to switch your power up mode. It’s kind of worth enabling Java to see this **(there may not be anything below if your browser doesn't render old applets.)**

<p><applet code="Destiny.class" codebase="/files/" height="450" width="600"></applet></p>
