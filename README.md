
<div id="top"></div>

<div align="center">

<img src="https://svg-rewriter.sachinraja.workers.dev/?url=https%3A%2F%2Fcdn.jsdelivr.net%2Fnpm%2F%40mdi%2Fsvg%406.7.96%2Fsvg%2Faccount-cowboy-hat.svg&fill=%239A3412&width=200px&height=200px" style="width:200px;"/>

<h3 align="center">Page-Builder Random Hero</h3>

<p align="center">
    Generates a random hero image for the front page OF LondonParkour.com (now removed).
</p>    
</div>

##  1. <a name='TableofContents'></a>Table of Contents


* 1. [Table of Contents](#TableofContents)
* 2. [About The Project](#AboutTheProject)
	* 2.1. [Built With](#BuiltWith)
	* 2.2. [Installation](#Installation)
* 3. [Usage](#Usage)
	* 3.1. [Hero Instance](#HeroInstance)
	* 3.2. [Image Layers](#ImageLayers)
	* 3.3. [SVG Layers](#SVGLayers)
	* 3.4. [Text Layers](#TextLayers)
	* 3.5. [HTML Layers](#HTMLLayers)
	* 3.6. [Colour Layers](#ColourLayers)
	* 3.7. [Z-Height order](#Z-Heightorder)
* 4. [Customising](#Customising)
* 5. [Troubleshooting](#Troubleshooting)
* 6. [Contributing](#Contributing)
* 7. [License](#License)
* 8. [Contact](#Contact)
* 9. [Changelog](#Changelog)



##  2. <a name='AboutTheProject'></a>About The Project

![https://github.com/IORoot/wp-plugin__page-builder--hero/blob/master/files/docs/random-hero.png?raw=true](https://github.com/IORoot/wp-plugin__page-builder--hero/blob/master/files/docs/random-hero.png?raw=true)

ACF-Based panels for a custom Hero slider for LondonParkour.

This randomises the output from a selection of images, SVGs, Text and Colours.

<p align="right">(<a href="#top">back to top</a>)</p>


###  2.1. <a name='BuiltWith'></a>Built With

This project was built with the following frameworks, technologies and software.

* [https://github.com/IORoot/wp-plugin__page-builder](https://github.com/IORoot/wp-plugin__page-builder)
* [Tailwind](https://tailwindcss.com/)
* [ACF](https://advancedcustomfields.com/)
* [PHP](https://php.net/)
* [Wordpress](https://wordpress.org/)

<p align="right">(<a href="#top">back to top</a>)</p>


###  2.2. <a name='Installation'></a>Installation


These are the steps to get up and running with this plugin.

1. Clone the repo into your wordpress plugin folder
    ```bash
    git clone https://github.com/IORoot/wp-plugin__page-builder--hero ./wp-content/plugins/page-builder-random-hero
    ```
1. Activate the plugin.


> Note: This plugin requires the page-builder plugin to work [https://github.com/IORoot/wp-plugin__page-builder](https://github.com/IORoot/wp-plugin__page-builder)

<p align="right">(<a href="#top">back to top</a>)</p>

##  3. <a name='Usage'></a>Usage

The hero randomiser plugin has six tabs:

###  3.1. <a name='HeroInstance'></a>Hero Instance

1. Enabled. Switch off to not render to the page.
1. Instance Name. Differentiate between different instances and other blocks.
1. Wrapper Classes. Give the wrapper DIV these class names.

![https://github.com/IORoot/wp-plugin__page-builder--hero/blob/master/files/docs/hero-instance.png?raw=true](https://github.com/IORoot/wp-plugin__page-builder--hero/blob/master/files/docs/hero-instance.png?raw=true)


###  3.2. <a name='ImageLayers'></a>Image Layers

The first layer of the randomised hero. Add multiple image layers to randomly pick from them.

1. Global Image Classes. These are the classes to give the image, regardless of which random one gets used.
1. Images. (Row)
    1. Image Title. Title of the image.
    1. Image Classes. Specific class names to give to only this image.
    1. Image. Pick the image to use. (Preferably a .PNG with a transparent background)

![https://github.com/IORoot/wp-plugin__page-builder--hero/blob/master/files/docs/image-layers.png?raw=true](https://github.com/IORoot/wp-plugin__page-builder--hero/blob/master/files/docs/image-layers.png?raw=true)


###  3.3. <a name='SVGLayers'></a>SVG Layers

One instance of the SVG Layers is picker to be rendered at random. This is rendered UNDER the Image.

1. SVGs
    1. SVG Label. Identifing label to distinguish between others.
    1. SVG Light Colour. If the background is dark, then use this (lighter) colour to fill the SVG with.
    1. SVG Dark Colour. If the background is light, then use this (darker) colour to fill the SVG with.
    1. SVG. The SVG code to insert as a layer. Preferably use xlink:href symbols to make it more performant. Do not use fills - this will be dynamically done. e.g.
    ```html
    <svg role="img" aria-label="London Parkour glyph" class="block m-auto p-4 md:p-10 w-full z-0 svg-inherit lazyload" height="600px" viewBox="0 0 688 618" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <use class="fill-white" xlink:href="#glyph-logo"></use>
    </svg>
    ```
![https://github.com/IORoot/wp-plugin__page-builder--hero/blob/master/files/docs/svg-layers.png?raw=true](https://github.com/IORoot/wp-plugin__page-builder--hero/blob/master/files/docs/svg-layers.png?raw=true)


###  3.4. <a name='TextLayers'></a>Text Layers

Text layers are rendered above the image. Randomly pick from one of the rows added here.

1. Title. The top title to render as an `<h2>`.
1. Title Classes. Any class names to add the title tag.
1. Subtitle. Render an `<H3>` tag with this text.
1. Subtitle Classes. Any class names to add to the tag.
1. Text Light Colour. CSS Colour to use on a dark background for the text.
1. Text Light Class. Classes to add to the text if a dark background is used.
1. Text Dark Colour. CSS Colour to use on a light background.
1. Text Dark Class. Classes to add to the text if a light background is used.

![https://github.com/IORoot/wp-plugin__page-builder--hero/blob/master/files/docs/text-layers.png?raw=true](https://github.com/IORoot/wp-plugin__page-builder--hero/blob/master/files/docs/text-layers.png?raw=true)


###  3.5. <a name='HTMLLayers'></a>HTML Layers

HTML Layers can be any code you wish to add into the hero. These appear on ALL Layers and are not randomised. Rendered above everything else.

Used for the button links on LondonParkour.com

1. HTML & TEXT Open Wrapper. The HTML code to use to wrap any HTML layers. e.g.
```html
<div class="absolute bottom-0 left-0 block px-8 pb-4 w-full z-30">
```

1. HTML & TEXT Close Wrapper. e.g.
```html
</div>
```

1. HTML. (Row)
    1. HTML Layer. Code to add as a layer. Uses moustaches for substitution for colours to match rest of the current hero style. Available moustaches are:
        1. `{{text_luminance}}` will substitute for the text_luminance.
        1. `{{svg_luminance}}` will substitute for the svg_luminance.
        1. `{{background_colour}}` will substitute for the background colour.
        1. `{{text_luminance_class}}` for the colour class. 
        1. `{{text_luminance_class_inv}}` for the inverse colour class.

Example:
```html
<a class="py-4 px-10 mr-4 mb-4 inline-block z-10 w-full rounded-xl md:w-auto text-center 
    bg-{{text_luminance_class_inv}} 
    text-{{text_luminance_class}} 
    hover:bg-{{text_luminance_class}} 
    hover:text-{{text_luminance_class_inv}}" href="/classes">PARKOUR CLASSES
    <span class="absolute h-3 w-3">
        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-crayon opacity-75"></span>
        <span class="absolute inline-flex rounded-full h-3 w-3 bg-crayon"></span>
    </span>
</a>
```

![https://github.com/IORoot/wp-plugin__page-builder--hero/blob/master/files/docs/html-layers.png?raw=true](https://github.com/IORoot/wp-plugin__page-builder--hero/blob/master/files/docs/html-layers.png?raw=true)



###  3.6. <a name='ColourLayers'></a>Colour Layers

Used for colouring the background and selecting which (light or dark) version of the SVG and Text should go with it.

1. Class. Class name to add to the background.
1. CSS Colour Value. Hex value of the background.
1. SVG Luminance. Use the Light or Dark SVG Colour with this background. (Colour is picked in the SVG Tab)
1. Text Luminance. Use the Light or Dark Text Colour with this background. (Colour is picked in the Text-Layers tab)

![https://github.com/IORoot/wp-plugin__page-builder--hero/blob/master/files/docs/colour-layers.png?raw=true](https://github.com/IORoot/wp-plugin__page-builder--hero/blob/master/files/docs/colour-layers.png?raw=true)



###  3.7. <a name='Z-Heightorder'></a>Z-Height order

Lowest to Highest:

1. Background + Colour
1. SVG
1. Image
1. Text
1. HTML


##  4. <a name='Customising'></a>Customising

None.

##  5. <a name='Troubleshooting'></a>Troubleshooting

None.

<p align="right">(<a href="#top">back to top</a>)</p>


##  6. <a name='Contributing'></a>Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue.
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#top">back to top</a>)</p>



##  7. <a name='License'></a>License

Distributed under the MIT License.

MIT License

Copyright (c) 2022 Andy Pearson

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

<p align="right">(<a href="#top">back to top</a>)</p>



##  8. <a name='Contact'></a>Contact

Author Link: [https://github.com/IORoot](https://github.com/IORoot)

<p align="right">(<a href="#top">back to top</a>)</p>


##  9. <a name='Changelog'></a>Changelog

v1.0.0 - Initial Release
