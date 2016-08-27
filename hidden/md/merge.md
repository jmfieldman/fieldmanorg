<a style="float: right" href="https://itunes.apple.com/us/app/merge-game-about-togetherness/id849818479"><img class="appstrbut" src="/img/misc/apple.png"></a>


# Merge (2014)

I stumbled across 2048 while browsing r/programming. It was a pretty simple game
that was getting traction, and I thought it would fun to make a similar game
on the iPhone.

I decided it would be a good time to experiment with the new iOS 7 sliding
animations and CAShapeLayer path animations. Instead of numbers, I was going
to make the squares be polygons that mutated into other polygons.

Halfway through development I got that sinking feeling that the game I was making sucked. I arcadified
it and gave it a real-time tetris-like goal in which you need to keep the board
from filling up. I got impatient and started throwing spaghetti code everywhere.

I felt that the game was too easy/boring with just polygons. I put in ice blocks
(that couldn’t merge) and bombs (to help you clear ice blocks). This also let me
experiment with CAEmitterLayer stuff for bomb smoke.

![Merge](/img/pg/merge/merge1.jpeg)
![Merge](/img/pg/merge/merge2.jpeg)
![Merge](/img/pg/merge/merge3.jpeg)

Merge is open source. [Github here](https://github.com/jmfieldman/Merge).
