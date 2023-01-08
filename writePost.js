// get cuurrent date 
let currentDate = new Date();
const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
// get user data 
let userBlogTitle = document.getElementById("userBlogTitle"),
     blogDetails = document.getElementById("discription"),
     userBlogImgUrl = document.getElementById("choosenImgUrl");





const blogElement =document.querySelector(".mainBlog");
// console.log(blogElement);

const blogData = ()=>{
    const blogPost = document.createElement("div");
    blogPost.classList.add("blog");
    blogPost.classList.add("row");
    blogPost.innerHTML =`
    <div class="blog-img col-sm-4">
    // <img src="${userBlogImgUrl.value}" alt="Depression" />
    
  </div>
  <div class="blog-details col-sm-8">
    <h2 class="blogTitle">
      ${userBlogTitle.value}
    </h2>
    <div class="times">
      <span><i class="fa-regular fa-calendar"></i>${months[currentDate.getMonth()]} ${currentDate.getDate()},${+currentDate.getFullYear()} </span>
      <span><i class="fa-solid fa-tag"></i> Life Style </span>
      <span><i class="fa-regular fa-thumbs-up"></i> 6.3k Like</span>
      <span><i class="fa-regular fa-comment"></i>1.7k Comment</span>
    </div>
    <div class="details">
      <div class="short" id="highlight">
        ${blogDetails.value}
      </div>
      <div class="btn btn-outline-success">
        <i
          class="fa-regular fa-thumbs-up"
          style="font-size: 25px"
        ></i>
      </div>
      <div class="btn btn-outline-dark">
        <i class="fa-regular fa-comment" style="font-size: 25px"></i>
      </div>
      <button type="button"
        class="btn btn-outline-primary"
        id="readBtn">
        Read More
      </button>
    </div>
  </div>
    `;
    blogElement.appendChild(blogPost);
};

let postSubmitBtn =document.getElementById('submitBtn').addEventListener("click", ()=>{
    blogData();
})
