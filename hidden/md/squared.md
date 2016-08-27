# Squared (2001)

Back in early 2001 I fell pretty ill. The kind of sickness where you’re too nauseous to walk and you shove a kleenex up each nostril. Stuck in front of the computer, I decided to write a game.

I got the idea for Squared a long long time ago when I played a version of it on AOL. I decided it could use an OpenGL upgrade, and this is what i came up with.

It didn’t turn out quite as nice as i had hoped. This was my first experiment with winsock + opengl, so I was experimenting a lot. I wasn’t really paying attention to coding style; just trying to get it functional. When a given feature would work I was too impatient to go back and clean up what i had done.

So I got a pile of code that did approximately what I wanted it to, but was really a pain in the ass to sort through and modify. When I decided I didn’t like how the game looked it was too late to change it into something cooler, let alone try to add features. Also, I think I violated every rule of network programming.

Whatever. It was done, and it was playable.

![Screenshot](/img/pg/squared/squared1.jpg) {.full .noshadow}

To serve, enter your name and press the “begin server” button. The game will wait for someone to connect. To connect, enter your name and the IP of the server and press the connect button. You can talk by typing into the field on the bottom and pressing enter. You can rotate the board by dragging the right mouse button.

Players take turns putting down one peg at a time. When four of your pegs form the vertices of a square, you get (length of side+1)^2 points. For example, a square with vertices on the border of board is worth 64 points, while the smallest square you can make is worth 4 points. Squares can be tilted (see screenshots).

In my version, the first player to reach 150 points wins. To start a new game, press the connect button. The board will reset and the other player will start the next round.

![Screenshot](/img/pg/squared/squared2.jpg) {.full .noshadow}

Squared got a mention on the opengl.org blog. For some reason this was a big deal to me.

[Source and Executable on Github](https://github.com/jmfieldman/Old-Projects/tree/master/Squared)
