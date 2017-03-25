Math.easeOutQuad = function (t, b, c, d) { t /= d; return -c * t*(t-2) + b; };

(function() { // do not mess global space
var
  interval, // scroll is being eased
  mult = 0, // how fast do we scroll
  dir = 0, // 1 = scroll down, -1 = scroll up
  steps = 50, // how many steps in animation
  length = 80; // how long to animate
function MouseWheelHandler(e) {
  e.preventDefault(); // prevent default browser scroll
  clearInterval(interval); // cancel previous animation
  ++mult; // we are going to scroll faster
  var delta = -Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail))); // cross-browser
  if(dir!=delta) { // scroll direction changed
    mult = 1; // start slowly
    dir = delta;
  }
  // in this cycle, we determine which element to scroll
  for(var tgt=e.target; tgt!=document.documentElement; tgt=tgt.parentNode) {
    var oldScroll = tgt.scrollTop;
    tgt.scrollTop+= delta;
    if(oldScroll!=tgt.scrollTop) break;
    // else the element can't be scrolled, try its parent in next iteration
  }
  var start = tgt.scrollTop;
  var end = start + length*mult*delta; // where to end the scroll
  var change = end - start; // base change in one step
  var step = 0; // current step
  interval = setInterval(function() {
    var pos = Math.easeOutQuad(step++,start,change,steps); // calculate next step
    tgt.scrollTop = pos; // scroll the target to next step
    if(step>=steps) { // scroll finished without speed up - stop animation
      mult = 0; // next scroll will start slowly
      clearInterval(interval);
    }
  },10);
}

// nonstandard: Chrome, IE, Opera, Safari
window.addEventListener("mousewheel", MouseWheelHandler, false); 
// nonstandard: Firefox
window.addEventListener("DOMMouseScroll", MouseWheelHandler, false);
})();