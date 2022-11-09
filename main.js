
// input all dot in variable

let dot1 = document.getElementById("dot1");
let dot2 = document.getElementById("dot2");
let dot3 = document.getElementById("dot3");

// input all slider in variable
let mainSlider =document.getElementById("slider");
let slider1 = document.getElementById("slider1");
let slider2 = document.getElementById("slider2");
let slider3 = document.getElementById("slider3");




// setInterval(() => {
//     count = 0;
//     count ++;
//     if(count < 5){
        
//         dot1.classList.add("active");
//         dot2.classList.remove("active");
//         dot3.classList.remove("active");

//         mainSlider.style.transform ="translateX(0px)";
//         slider1.style.opacity = "3";
//         slider2.style.opacity = "0";
//         slider3.style.opacity = "0";
//     }
//     else if (count < 10){
//         dot1.classList.remove("active");
//         dot2.classList.add("active");
//         dot3.classList.remove("active");
    
//         mainSlider.style.transform ="translateX(-800px)";
//         slider1.style.opacity = "0";
//         slider2.style.opacity = "3";
//         slider2.style.display= "block";
//         slider3.style.opacity = "0";
//     }
//     else if(count<15){
//         dot1.classList.remove("active");
//         dot2.classList.remove("active");
//         dot3.classList.add("active");
        
//         mainSlider.style.transform ="translateX(-1600px)";
//         slider1.style.opacity = "0";
//         slider2.style.opacity = "0";
//         slider3.style.opacity = "3";
//         slider3.style.display = "block";
//     }
//     else if (count>=15){
//         count= 0;
//     }
//     console.log(count);
    
// }, 1000);





dot1.addEventListener("click", myDot1);
function myDot1(){
    dot1.classList.add("active");
    dot2.classList.remove("active");
    dot3.classList.remove("active");

    mainSlider.style.transform ="translateX(0px)";
    slider1.style.opacity = "3";
    slider2.style.opacity = "0";
    slider3.style.opacity = "0";

}
dot2.addEventListener("click", myDot2);
function myDot2(){
    dot1.classList.remove("active");
    dot2.classList.add("active");
    dot3.classList.remove("active");

    mainSlider.style.transform ="translateX(-800px)";
    slider1.style.opacity = "0";
    slider2.style.opacity = "3";
    slider2.style.display= "block";
    slider3.style.opacity = "0";
}

dot3.addEventListener("click", myDot3);
function myDot3(){
    dot1.classList.remove("active");
    dot2.classList.remove("active");
    dot3.classList.add("active");
    
    mainSlider.style.transform ="translateX(-1600px)";
    slider1.style.opacity = "0";
    slider2.style.opacity = "0";
    slider3.style.opacity = "3";
    slider3.style.display = "block";
}





// $('.autoplay').slick({
//     slidesToShow: 3,
//     slidesToScroll: 1,
//     autoplay: true,
//     autoplaySpeed: 2000,
//   });
      
