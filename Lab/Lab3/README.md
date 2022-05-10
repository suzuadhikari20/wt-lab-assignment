Lab3:
Color Palette


Color
Colors are specified using predefined color names, or RGB, HEX, HSL, RGBA, HSLA values.

HSL colors
HSL stands for hue, saturation, and lightness.

->Hue is a degree on the color wheel from 0 to 360. 0 is red, 120 is green, and 240 is blue.

->Saturation is a percentage value, 0% means a shade of gray, and 100% is the full color.

->Lightness is also a percentage value, 0% is black, and 100% is white.

syntax:
hsl(hue, saturation, lightness) hsl(100, 100%, 50%)

hsla()
The hsla() functional notation expresses a given color according to its hue, saturation, and lightness components. An optional alpha component represents the color's transparency.

syntax:
hsla(hue, saturation, lightness, alpha) hsla(100, 100%, 50%, 1)


THE USE OF HSL COLOR SELECTING METHOD IN CSS


Designers and artists often prefer to work using the HSL (Hue/Saturation/Luminosity) color method. On the web, HSL colors are represented using HSL functional notation. The hsl() CSS function is very similar to the rgb() function in usage otherwise.

Hue defines the actual color based on the position along a circular color wheel representing the colors of the visible spectrum. Saturation is a percentage of how much of the way between being a shade of gray and having the maximum possible amount of the given hue. As the value of luminance (or lightness) increases, the color transitions from the darkest possible to the brightest possible (from black to white). Image courtesy of user SharkD on Wikipedia, distributed under the CC BY-SA 3.0 license.

The value of the hue (H) component of an HSL color is an angle from red around through yellow, green, cyan, blue, and magenta (ending up back at red again at 360°) that identifies what the base color is. The value can be specified in any <angle> unit supported by CSS, including degrees (deg), radians (rad), gradians (grad), or turns (turn). But this doesn't control how vivid or dull, or how bright or dark the color is.

The saturation (S) component of the color specifies what percentage of the final color is comprised of the specified hue. The rest is defined by the grey level provided by the luminance (L) component.

Think of it like creating the perfect paint color:

You start with base paint that's the maximum intensity possible for a given color, such as the most intense blue that can be represented by the user's screen. This is the hue (H) component: a value representing the angle around the color wheel for the vivid hue we want to use as our base.
Then select a greyscale paint that corresponds how bright you want the color to be; this is the luminance. Do you want it to be very bright and nearly white, or very dark and closer to black, or somewhere in between? This is specified using a percentage, where 0% is perfectly black and 100% is perfectly white. (regardless of the saturation or hue). In between values are a literal grey area.
Now that you have a grey paint and a perfectly vivid color, you need to mix them together. The saturation (S) component of the color indicates what percentage of the final color should be comprised of that perfectly vivid color. The rest of the final color is made up of the grey paint that represents the saturation.
You can also optionally include an alpha channel, to make the color less than 100% opaque.