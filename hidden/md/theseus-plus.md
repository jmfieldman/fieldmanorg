<a style="float: right" href="https://itunes.apple.com/us/app/theseus-plus/id1047862647?mt=8"><img class="appstrbut" src="/img/misc/apple.png"></a>

# Theseus Plus (2015)

As a consumer, I’ve been waiting for the Apple TV to have an app store for some time. I think we’re going to see a ton of great new gaming concepts come out of a native platform to link the big screen in the living room with everyone’s phones as mini controllers.

I was fortunate enough to get an Apple TV during the first round of developer testing, and I decided to port Theseus to the TV. Theseus 3D had gameplay that was too confusing, so I decided to bring the 3D graphics engine to the 2D rules and release it as Theseus Plus.

## Converting the Engine to 2D Rules

![Theseus Plus](/img/pg/theplus/screen1.png) {.full}

One of the main time sinks of developing Theseus Plus was porting my Objective-C 3D engine to Swift. I’ve become a big fan of Swift, and the ported code looks so much more beautiful and well-organized than before.

There weren’t any major hiccups, and most of the complex movement algorithms had already been made. The conversion process was more of an intelligent stripping of features (since we’re walking on a single plane instead of a cube). I also took some time to improve little details, like the tiles falling in from the sky, and the Minotaur causing the board to shake when he stomps around.

Probably the most annoying aspect of the entire affair was that for whatever reason the build for tvOS would give me shader errors when I tried to enable shadows on the default settings for the SCNView. After beating my head against the keyboard with random tweaking of code, I finally tried setting the backing engine of the SCNView from Metal to OpenGL 2.0 and it magically worked again. No idea if anyone else out there also had this problem, but switching from away from Metal solved this problem.

## Using the Remote

The tvOS APIs have special modes for using game controllers, but these don’t work on the simulator. So I decided to make my entire engine use the standard UIKit-driven interactions with the remote.

I created a “FakeDpad” class, that was essentially just an invisible UIButton that kept focus. I attached all sorts of gesture recognizers to it, and was able to get all of the swipe and tap/hold events that I needed. When I finally got my third-party gamepad, I was lucky to discover that all of the directional arrows get cleanly mapped to the UIKit gesture handlers, so there was no additional work necessary – the game plays the same with the Apple TV remote or a gamepad using the same code.

![Theseus Plus](/img/pg/theplus/screen2.png) {.full}

## Adaptations for the TV

Theseus is a fairly simple game, so it plays well on the TV with little difference from the phone. One of the main annoyances I faced was that Apple requires the game to return to the main home screen if you press the Menu button at the main menu of your game. Problem: Theseus doesn’t have a main menu. It’s always “in-game”, so the menu button simply toggles the in-game menu on and off.

Apple rejected my first binary for this. So I had to make an interstitial main menu that buffers the in-game activity and the Apple TV home screen – for the sole purpose of having a place that the user can menu-back from. Kind of lame, but not the end of the world.

![Theseus Plus](/img/pg/theplus/scrn4.png) {.full}

## Bundling With the Phone

The Apple TV platform requires that games save data to iCloud. I’ve never used this API before, but was pleasantly surprised at how similar the key/value store was to NSUserDefaults.

After finishing the tvOS version, I ported my work further to an iOS version. The tvOS and iOS versions are bundled together, so one purchase buys both. They share the iCloud key/value store, so any progress you make on each platform carries over to the other automatically – kind of a neat transparency there.

![Theseus Plus](/img/pg/theplus/scrn5.png) {.full}
