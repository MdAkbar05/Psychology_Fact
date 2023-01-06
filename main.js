

// let readMore = document.getElementById("readBtn");

// let blog  = document.getElementById("firstBlog");
// let textContents = document.getElementById('more');
// let highlight = document.getElementById('highlight');

// readMore.onclick = ()=>{
//    highlight+=textContents;

// 


function sendEmail(){
   Email.send({
      Host : "smtp.gmail.com",
      Username : "mdakbarhossanam05@gmail.com",
      Password : "I love my kolija",
      To : 'samratakbar@gmail.com',
      From : document.getElementById("email").value,
      Subject : "This New Contact from user",
      Body : document.getElementById("message").value
   }).then(
    message => alert(message)
   );
}
