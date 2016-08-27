# ARCreader (2010)

The iPad release coincided with my brief interest in comic books, and I wasn’t
thrilled with the first comic readers that were released in the App Store. I
decided to write ARCreader: my first iPad app.

The core of ARCreader is the engine it used to load an image into a UIScrollView,
and the work I put into the custom gesture handler of that view (keep in mind that
this app came out for iOS 3.2). I wanted something intuitive and fast, and in
the end I was pretty pleased with what I came up with.

![ARCreader](/img/pg/arcreader/tut1.png)
![ARCreader](/img/pg/arcreader/tut2.png)
![ARCreader](/img/pg/arcreader/tut3.png)

I embedded the unrar/unzip libraries in the app, so it could read .cbr/cbz files
in addition to PDFs. Aside from that, I had a basic thumbnail page browser, and a library interface to select the comic book.

![ARCreader](/img/pg/arcreader/tut4.png)
![ARCreader](/img/pg/arcreader/tut5.png)
![ARCreader](/img/pg/arcreader/tut6.png)

One problem with the app is that it uses the original file-sharing method in iTunes,
where you have to drag files to the app through the weird document-sharing window
in the iTunes app tab. It's not a great user experience, and if I was ever going to update
the app I would start with new methods of document delivery.

I was pleased to see ARCreader used in the wild during a LAX->SFO flight in 2012.
