document.addEventListener("scroll", function() {
    if (window.scrollY > 50) {
      document.querySelector("#header").classList.add("scrolled");
    } else {
      document.querySelector("#header").classList.remove("scrolled");
    }
  });


  //////////////////module add annonce
  let dark = document.querySelector(".dark")
  let addModule = document.querySelector("#add-model")
  let btnAdd = document.querySelector("#add")
  let btnCloseModal = document.querySelectorAll(".close")
  let closeAddModal = document.querySelector(".close-addModal")
  let scrollStop = document.querySelector("body")
  let moreBtn = document.querySelectorAll(".more")
  let moreModal = document.querySelector("#more-model")
  let deleteModal = document.querySelector(".deleteModal")
  let dltIcon = document.querySelectorAll("#dlt")
  let dltclose = document.querySelectorAll(".no")
  let editBtn = document.querySelectorAll(".editBtn")
  let updateForm = document.querySelector("#editInfo")


  btnAdd.onclick = function() {
    addModule.style.display="block"
    dark.style.display="block"
    scrollStop.style.overflow="hidden"
  }
  
  // editBtn.forEach(function(e){
  //   e.addEventListener("click", function(){
  //     updateForm.style.display="block"
  //   dark.style.display="block"
  //   scrollStop.style.overflow="hidden" 
  //   })
  // })









  
  
//   moreBtn.forEach(function(e){
//     e.addEventListener("click", function(){
//       e.parentNode.parentNode.parentElement.childNodes[13].style.display="block"
//     dark.style.display="block"
//     scrollStop.style.overflow="hidden" 
//     console.log(e.parentNode.parentNode.parentElement.childNodes[15].childNodes[5].childNodes[1])
//     })
//         e.parentNode.parentNode.parentElement.childNodes[13].childNodes[5].addEventListener("click", function(){
//           e.parentNode.parentNode.parentElement.childNodes[13].style.display="none"
//     dark.style.display="none"
//     scrollStop.style.overflow=""
//     })
//     e.parentNode.parentNode.parentElement.childNodes[7].childNodes[1].addEventListener("click", function(){
//       e.parentNode.parentNode.parentElement.childNodes[15].style.display="block"
// dark.style.display="block"
// scrollStop.style.overflow=""
// })
// e.parentNode.parentNode.parentElement.childNodes[15].childNodes[5].childNodes[1].addEventListener("click", function(){
//   e.parentNode.parentNode.parentElement.childNodes[15].style.display="none"
// dark.style.display="none"
// scrollStop.style.overflow=""
// })
//   })







  









  ////////////////delete modal
  dltIcon.forEach(function(e){
    e.addEventListener("click", function(){
      e.parentElement.parentElement.childNodes[9].style.display="block";
      dark.style.display="block";
      scrollStop.style.overflow="hidden";
    });
    e.parentElement.parentElement.childNodes[9].childNodes[5].childNodes[1].childNodes[1].addEventListener("click", function(){
      e.parentElement.parentElement.childNodes[9].style.display="none"
      dark.style.display="none"
     scrollStop.style.overflow=""
    })
});

