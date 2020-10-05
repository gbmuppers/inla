
var el = function(element) {
    if (element.charAt(0) === "#") { // If passed an ID...
      return document.querySelector(element); // ... returns single element
    }

    return document.querySelectorAll(element); // Otherwise, returns a nodelist
  };

  // Variables
  var viewer = el("#viewer"), // Calculator screen where result is displayed
    equals = el("#equals"), // Equal button
    nums = el(".num"), // List of numbers
    clear =el("#clear"),
    theNum = "", // Current number
    resultNum; // Result
  

    var setNum = function() {
        if(viewer.innerHTML!="0"){
            theNum = viewer.innerHTML; // Display current number
        }
        if (resultNum) { // If a result was displayed, reset number
          theNum = this.getAttribute("data-num");
          resultNum = "";
        } else { // Otherwise, add digit to previous number (this is a string!)
          theNum += this.getAttribute("data-num");
        }
        viewer.innerHTML = theNum; // Display current number
      };


      for (var i = 0, l = nums.length; i < l; i++) {
        nums[i].onclick = setNum;
      }
      var clearAll = function() {
        theNum = "0";
        viewer.innerHTML = "0";
        equals.setAttribute("data-result", resultNum);
        resultNum="0";
      };
    
      clear.onclick = clearAll;
