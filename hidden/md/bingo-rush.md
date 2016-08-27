# Bingo Rush (2012)

Over the summer of 2012 I did a contracting stint with Buffalo Studios.
They were porting their Facebook application Bingo Blitz to the iPhone.
I was responsible for the modules that involved server communication:
analytics, social media and asset offloading.

Analytics and social media connectivity was pretty straight forward. Asset
offloading was new territory and pretty interesting to work on. I teamed
up with a backend contractor to create a protocol for cataloging
all of the assets that existed on the server. The final library that I put
together made asset offloading as transparent to the client as possible.

Most of the assets existed as low-resolution in the bundle, and the library
would replace them with retina versions as they were downloaded by the client
in the background. This let us release a functioning application with an
initial download size under 50MB, even though the additional retina assets
were twice that.

Bingo Rush shined some light on how effective the freemium app model is,
and what it takes to get people to churn out in-app purchases.

[Try it out](https://itunes.apple.com/us/app/bingo-rush-by-buffalo-studios/id504720040?mt=8), it’s pretty fun.

![Bingo Rush](/img/pg/bingorush/bingo-rush1.jpg)
![Bingo Rush](/img/pg/bingorush/bingo-rush2.jpg)
![Bingo Rush](/img/pg/bingorush/bingo-rush4.jpg)
