var dpt = window.devicePixelRatio;
var widthM = window.screen.width;
var widthH = window.screen.height;
if (widthM*dpt < 976) {
   document.write('<meta name="viewport" content="width=600, user-scalable=yes">');
}