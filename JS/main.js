"use strict"
// Preloader Effect  
let preLoader = document.getElementById("preLoader");
let header = document.getElementById("header").style.display ="none";
// let interface = document.getElementById("interface").style.display ="none";

// window.addEventListener("load", function(){
//     preLoader.style.display = "none";
// });

// custom preLoader 

setTimeout(() => {
   
   let header = document.getElementById("header").style.display ="block";
      // interface.style.display = "block";
      preLoader.style.display = "none";
 }, "3000")

 //----------------------------------------------------------------------------------------------------



//  Iq Calculation 
      

   function test(){
      let mentalAge =  document.getElementById("mentalAge").value;
      let actualAge = document.getElementById("actualAge").value;

      let testBtn = document.getElementById("testBtn");
      let iq;

     iq = parseInt((mentalAge/actualAge)*100);
     let msg =document.querySelector(".iq .text-danger");
         msg.style.display = "flex"; 
         msg.textContent = "Your IQ Level is: "+iq;
   }
   testBtn.addEventListener("click", ()=>{
      test();
      
      
   });