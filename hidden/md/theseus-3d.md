<a style="float: right" href="https://itunes.apple.com/us/app/id931212487"><img class="appstrbut" src="/img/misc/apple.png"></a>

# Theseus 3D (2014)

<img style="float: right; margin-left: 16px; margin-bottom: 4px" src="/img/pg/thes3d/theseus3dscrnB.png">

In my attempt to keep up-to-date with iOS, I try to create side projects that utilize new frameworks. This time, I wanted to learn Scene Kit. So I needed to find a project that was suitable for 3D, but could rely on pure geometry and math for design (no fancy 3D character models). My 2D version of Theseus seemed like a great candidate for porting over!

In the end I think I was successful. The graphics turned out well, and I’m proud of some of the cool effects I made (like level transition). The menu UI was also fun to make, and I learned some more animation tricks to make it pop. Overall it was a worthwhile project, and I hope someone out there finds it fun to actually play!

## Coding Analysis

git_time_extractor says that there is approximately 120 hours of development time on my repo, from September 19 through October 22. Pretty much all grouped on weekends (and our school’s extended 5-day break). The tool overestimates a bit because it does not compensate for meals or mid-session breaks, but it’s relatively close. So let’s say it’s closer to 90-100 hours – not bad to complete the game, including research and dealing with SceneKit foibles along the way.

## General SceneKit Thoughts

As a disclaimer, I am not a professional 3D game engine designer and don’t have much in the way of an apples-to-apples comparison with SceneKit. But as a general iOS/Cocoa developer, SceneKit continues Apple’s general pattern of releasing powerful, easy to use frameworks. It was fairly easy to organize nodes (much like SpriteKit), and I loved the out-of-the-box advanced features like automatic shadow casting.

One issue with SceneKit is that there was not much to Google. Most of the problems I encountered had to be solved through experimentation, rather than heading to Stack Overflow. A bit annoying, but I guess it builds character. I’ll discuss some of those issues here in case others find them useful.

## Problem with the Core Mechanic

So Theseus 3D seemed like a great way to get familiar with Scene Kit. It’s a theme I like, and it lends itself well to geometric shapes and easier modeling. The problem is that moving to 3D is not a very natural transition for the core 2D rules.

<img style="float: left; margin-bottom: 4px" src="/img/pg/thes3d/theseus3dscrnA.png">

First off, the game is really about understanding the state of the board, and being able to visualize how your movements will affect the Minotaur. With a cube, you can really only see 50% of the board at once. I did some experimentation on this using angles and reflective surfaces so you could see the back of the cube as well, but it was incredibly disorienting and I decided to can it.

The other problem is that there is no natural idea of vertical vs. horizontal on a rotating cube. I toyed with making vertical/horizontal fixed per face, and using some kind of color-coding scheme to tell the players which was which, but I just couldn’t get that design to work. I ended up with the current dynamic “up” system, in which vertical is constantly being redefined by the instant state of the two characters.

In theory I think this system works really well. At any given moment you know what vertical is (and I made the camera automatically adjust to help indicate “up” after you move), it just requires more brain processing. In practice I find that users have trouble grasping the concept, but it was so core to the engine I couldn’t adjust it.

## Modeling the Cube

The first challenge I had to consider was how to model the game state.

I decided I could not model the entire cube as a single entity. I broke it up into 6 component faces, and dealt with those as independent spaces. For each face, I knew where it was in absolute world space, so I had to create a structure to map the local coordinate space of a face into world space.

<img style="float: right; margin-left: 16px; margin-bottom: 4px" class="noshadow" src="/img/pg/thes3d/cube.png">

I drew this diagram on a piece of paper when I thinking about this model.  Each face gets a local origin and coordinate space. You can see the side facing you has it’s (u,v) coordinate space with an origin at the lower-left of that face. I know the world-space coordinate of that origin, and I know the world vectors that define positive-u and positive-v. I also track the world vector of positive-w (the normal of the face).

I also need to track some meta-data for the faces. For example, I need the neighboring faces in pos/neg u and v directions, and I need to know if bonding coordinate spaces have the same direction. For example, the face on top and the face on the left. The top face is bonded by its v axis, and the left face is bonded by its u axis, but they have opposite direction. I need to know this for movement calculations.

So each tile in the game can now be represented by the coordinate (face, u, v). Each edge can be defined as (tile, direction). Each absolute edge can be represented by two different coordinate values (since it joins two tiles), and a critical helper function took any edge coordinate and returned the alternate representation, even if the edge was across two separate faces. This allowed me to determine where a character would end up by traveling in a specific direction.

## Character Movement

To move characters around the cube, first we need to know how to position character nodes absolutely in world coordinates. Because characters can jump from face to face, they cannot be considered child nodes of a singular face, but rather child nodes of the cube as a whole.

Because we know the (face, u, v) coordinate of a character, we can start from the face’s world-space origin and use vector addition to find the center of the characters (u, v) tile. Then we move half the character size along positive-w and we’ve found the exact center for our character in world space.

Traveling from tile to tile is now an exercise in determining: a) the “horizontal” vector that points from starting center to ending center, b) the “vertical” vector that points perpendicular to the horizontal away from the cube, and c) the axis of rotation to make the characters appear to rotate while jumping. The movement vectors are mixed into some basic physics, and the character rotates from 0 to pi/2. We can now model keyframe position/rotation values for each frame in the jump animation. Jumping across faces is simply a matter of making the character jump “higher” to clear the edge, and expanding the timing of the animation to it appears to jump at the same speed over a longer distance.

## Drawing Walls

I cheated a bit with wall drawing. Rather than create a single solid mesh for connected walls, I render each wall segment as a separate chamfered prism. Because the walls are all consistently colored and shaded, there is no distinguishable crease between them when they overlap.

The downside to this was that I could not perform simple shader-based cel-shading of the walls. I’ll talk about this more in-depth further down.

One benefit to making them independent segments was that it became very simple to break the walls apart during the cube-explosion animation that occurs when you escape from a level.

## Cel-Shading

I wanted the game to have a cartoony, cel-shaded look. To do this, I had to apply some simple custom shaders to the SceneKit materials used in the game. Rather than having to write all of the shading code for the scene, I plugged into the shaderModifiers property of the SCNMaterial object.

<img style="float: left; margin-bottom: 4px" src="/img/pg/thes3d/t3dscreen.png">

For the terraced shading (that causes highlights to be blocking instead of gradient), I used a simple step-wise function with the SCNShaderModifierEntryPointLightingModel key. For the black outline, I made a second node with the same geometry as the first, and injected code into the  SCNShaderModifierEntryPointGeometry key (to expand the vertex by 0.03 * normal), and injected code into SCNShaderModifierEntryPointFragment that forced all fragments to be RGB(0,0,0).

This cel-shading effect worked incredibly well for smooth convex shapes (like the chamfered cube I used for tiles and characters). However, it breaks down on harsh edges. That’s why the minotaurs horns have some outline artifacts and certain angles. It also breaks down when singular objects are made of multiple sub-shapes, which is why I could not apply the outline effect to the walls.

## Scene Kit, Euler angles and Rotation Issues

Scene Kit has pretty thorough animation and node physics modeling support. All of the movement in the game was generally covered by the runAction command on the various nodes.

There is one thing that bothers me: runAction does not support rotating by the shortest arc using quaternions. You can either specify Euler angles, or use axis/angle values. Now, you can convert quaternions to axis/angle, but there’s still a problem. When you rotate by axis/angle you cannot guarantee rotation by shortest arc. It’s infuriating.

In order to do smooth rotation to a new orientation, you have to specify the new orientation by Euler angles. The problem with Euler angles is gimbal lock, and the Apple docs are really bad at explaining the method used to calculate the resulting rotation when one or more of the angles is pi/2.

So rotating the cube after a move worked out ok, since I had the camera flexibility to ensure that the Euler angles would never be perfectly 90′. But character orientation on the cube must be at right angles. I wasted about a day or so trying to figure out why my characters would sometimes face random directions. I eventually gave up, decided to perform an instant rotation (without animation) and just set their orientation using quaternions.

## Level Solver and Multithreading

The level solver acts almost identically to the one in Theseus 2D. For any cube size, calculate the number of tile segments. A 2x2x2 cube will have 24 tile segments. That means there are only 24^2 possible states for Theseus and the Minotaur to be in. 24 of those are deaths (when T+M occupy the same space). Any state with Theseus on the exit and *not* eaten is a victory (with distance 0).

Each state gets a node in a directed graph. Each state points to five other states (based on moving in any direction, or waiting. Since this graph is static for any cube configuration, it’s just a matter of looping through each state once and figuring out the five other states each points to.

Once the directed graph is complete, it becomes a simple matter of walking backwards from each victory node to determine the distance-to-victory (and direction) for every other node. Any node that doesn’t have a path to victory is considered a dead end.

It turns out that the most computationally intense part of this was creating the directed graph (because the Minotaur’s movement decisions are a magnitude more complex than on a simple 2D plane). I used grand central dispatch to split the nodes into buckets that could be calculated on all available cores, which worked amazing well after I realized I had to give each thread its own local copy of the cube model (when they were sharing one model instance it was remarkably slower).

## Level Generator

The level generator was also very much like the genetic algorithm used to make levels in Theseus 2D. I start with a bare cube, and add some random walls. Each generation, I start with the parent and create N mutations. The mutations add a few random walls and remove a few random walls. I perform the solver on each child and determine the state with the highest victory distance. This is the score of the child. I take the highest-scoring child (or the parent, if no children are harder), and use that as the parent in the next generation. I also set up parameters to control the amount of walls that can be generated (to get the appropriate wall density).

After 10-20 generations it would create really hard puzzles (with good wall layouts). I could then tune the difficulty by choosing states with a smaller victory distance than the hardest.

## Final Thoughts

I’m glad I made Theseus 3D. The best projects are those that introduce new technology, and solving new problems is always more interesting than churning out the same type of app over and over. Hopefully some people out there will find it entertaining.
