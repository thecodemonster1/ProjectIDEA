  // document.getElementById("object").write=(<img src="/Users/mohamedazwar/Downloads/crashed.png"/>);
function move() {
  let id = null;
  const car = document.getElementById("object");
  let pos = document.getElementById("object").offsetLeft;
  clearInterval(id);
  id = setInterval(frame2, 1);
  if (pos == 100){
    id = setInterval(frame2, 20);
  }
  // function frame() {
  //   if (pos == 780) {
  //     clearInterval(id);
  //   } else {
  //     pos+=1;
  //     car.style.left = pos + "px";
  //   }
  // }
  function frame2(){
    if (pos == 0) {
      // /Users/mohamedazwar/Downloads/car2.png
      // /Users/mohamedazwar/Downloads/crashed2.jpeg
//      document.write('<div id ="container" style="width: 100%;height: 160px;position: relative;background: #f20000;"><div id ="object" style="position: absolute;"> <img src="crashed2.jpeg" width="40%"></div></div>')
      clearInterval(id);

    } else {
      pos-=1;
      car.style.left = pos + "px";

    }

  }
}

  // document.getElementById("object").write=(<img src="/Users/mohamedazwar/Downloads/crashed.png"/>);
function move2() {
  let id = null;
  const car = document.getElementById("object");
  let pos = 0;
  clearInterval(id);
  id = setInterval(frame, 1);
  if (pos == 0){
    id = setInterval(frame, 20);
  }
   function frame() {
     if (pos == 800) {
       clearInterval(id);
     } else {
       pos+=1;
       car.style.left = pos + "px";
     }
   }
 }
//  function frame2(){
//    if (pos == 100) {
//      // /Users/mohamedazwar/Downloads/car2.png
//      // /Users/mohamedazwar/Downloads/crashed2.jpeg
////      document.write('<div id ="container" style="width: 100%;height: 160px;position: relative;background: #f20000;"><div id ="object" style="position: absolute;"> <img src="crashed2.jpeg" width="40%"></div></div>')
//      clearInterval(id);
//
//    } else {
//      pos+=5;
//      car.style.right = pos + "px";
//
//    }

//  }
//}