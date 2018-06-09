To change the images for the homepage slider follow these instructions:

Find "supersized.setup.js" which can be found in "scripts/supersized"

Open the file in your editor of choice.

Change:

slides: [ // Slideshow Images
{image: 'images/slider/1.gif'}, 
{image: 'images/slider/2.gif'}, 
{image: 'images/slider/3.gif'}
]

to your image names.

please note that the images must be referenced relative to the website root, not relative to the "supersized.setup.js"

we suggest simply adding your images to the "images/slider" folder and then change the file for your image names e.g

slides: [ // Slideshow Images
{image: 'images/slider/tom.jpg'}, 
{image: 'images/slider/john.jpg'}, 
{image: 'images/slider/sally.jpg'}
]

note: images are set-up with a default size of 1950px * 500px, this size must be kept to, unless you change the CSS files.

why this size: 1950px - currently the most common largest widescreen used has a width of 1920px, its that simple :)