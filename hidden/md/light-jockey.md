# Light Jockey (2009)

Have you ever played the flash game [Auditorium](http://en.wikipedia.org/wiki/Auditorium_(video_game))?  If not, you should; it’s awesome.
That’s why I decided to see if I could make a game like it for the iPhone. Keep in
 mind this is back in 2009 when the iPhone 3G was state of the art, and OpenGLES was still at 1.1.

I was actually pretty successful considering the hardware, and made something very fun and playable. Each
frame I cycled between two offscreen buffer, blurring one and drawing it into
the other, then drawing the sharp content over the blur. With the proper parameters
 it made the little light lines appear to glow and blur into each other dynamically.
  Implementing the physics and element interaction was pretty straightforward.

![lightjockey1](/img/pg/lightjockey/lightjockey1.jpg)
![lightjockey2](/img/pg/lightjockey/lightjockey2.jpg)
![lightjockey3](/img/pg/lightjockey/lightjockey3.jpg)

The official version of Auditorium was written for the iPhone many months later.
 The publisher, EA, sent me a cease and desist to remove Light Jockey from the
 app store. My version hadn’t really sold well, and I wasn’t in the mood for lawsuit,
 so I pulled the game.

![lightjockey4](/img/pg/lightjockey/lightjockey4.jpg)
![lightjockey5](/img/pg/lightjockey/lightjockey5.jpg)

Light Jockey is now open source; the code is laughably antiquated. [I’ve uploaded it to github](http://github.com/jmfieldman/Light-Jockey).
