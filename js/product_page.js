let sliding_images = [
  "https://www.reliancedigital.in/medias/One-Plus-Nord2T-Mobile-Phone-492850714-i-1-1200Wx1200H?context=bWFzdGVyfGltYWdlc3w1MzQ5M3xpbWFnZS9qcGVnfGltYWdlcy9oMTUvaDQ2Lzk4NTMzNTkyMjY5MTAuanBnfGI0OTExMTY3OGQ1MjA5ZjFiOWZhYWNjNTcwY2M0ZDRjYjI0NDhkNWZkZjE3ZDE3NGNlZGFhOTIwYmNjNjY0MmQ",
  "https://www.reliancedigital.in/medias/One-Plus-Nord2T-Mobile-Phone-492850714-i-2-1200Wx1200H?context=bWFzdGVyfGltYWdlc3w1NTIxNHxpbWFnZS9qcGVnfGltYWdlcy9oMmQvaDFiLzk4NTMzNTE1MjY0MzAuanBnfDBlZmE4YTZlN2NlMWM3Mjg0NjQ4YzM0ZmMyZDdkMmVkM2M3NWIyZjM5YzhhZGFlNDU2NmFlYjg0NmUxNTAyMzE",
  "https://www.reliancedigital.in/medias/One-Plus-Nord2T-Mobile-Phone-492850714-i-3-1200Wx1200H?context=bWFzdGVyfGltYWdlc3w0NDIxNHxpbWFnZS9qcGVnfGltYWdlcy9oOTcvaGU2Lzk4NTMzNTY0NDE2MzAuanBnfGNlMWI3Njg1ZTUxODkzOThhMzk4ZWRmYjE3YjU4OTc5NWExNTA5ZDA4NjQyODk5ODkzZjJlZDgyMDUzYjI5YTQ",
  "https://www.reliancedigital.in/medias/One-Plus-Nord2T-Mobile-Phone-492850714-i-4-1200Wx1200H?context=bWFzdGVyfGltYWdlc3wzNTU4MnxpbWFnZS9qcGVnfGltYWdlcy9oOTgvaDBiLzk4NTMzNTc1ODg1MTAuanBnfGVmZDdkYTA3ZGQyYmQ0M2UxNDI4NjdhOGY1OThkMmY1ZTg0YmZhZjQwYTZiOTdmNGFhNTQ0YmJhZTk0MTBmZjI",
  "https://www.reliancedigital.in/medias/One-Plus-Nord2T-Mobile-Phone-492850714-i-5-1200Wx1200H?context=bWFzdGVyfGltYWdlc3w3ODU3NnxpbWFnZS9qcGVnfGltYWdlcy9oOTkvaDFjLzk4NTMzNTgyNDM4NzAuanBnfDlhNTY2ZWYyZTZhNjc5YzBhZmIyN2JjYWQxYjRlZGQ1NmVkNTk0YWJkYjM0YjY0Y2Y0NjMzYmJjYTRlYjBlZDE",
  "https://www.reliancedigital.in/medias/One-Plus-Nord2T-Mobile-Phone-492850714-i-6-1200Wx1200H?context=bWFzdGVyfGltYWdlc3w0Nzg0NnxpbWFnZS9qcGVnfGltYWdlcy9oMmYvaDZjLzk4NTMzNTg1NzE1NTAuanBnfDNjNTZkYzk5NDIyZmE4MjBkYTJkN2I3NjRlZTA3YzdiYzhhMzIxNmYxZGQ4YzUxYzNhOWZiZjAzNTgwMmIxYmY",
];
let slider1 = 0;
var image = document.querySelectorAll(".slide-img img");


image.forEach(el => el.addEventListener("click", () => {
  replaceImage(el.src);
}))
//Image slider arrow button function;
let slidingBTN = document.querySelectorAll(".arrowbtn")[0].children;
//Left arrow
slidingBTN[0].addEventListener("click", function () {
  slider1--;
  if (slider1 === -1) {
    slider1 = image.length - 3;
  }
  let pos = slider1 * -100 + "px";
  let slideImage = document.querySelector(".slide-img");
  slideImage.style.transform = "translateX(" + pos + ")";
});
//Right arrow
slidingBTN[1].addEventListener("click", function () {
  rightArrowAutoSlide();
});
function rightArrowAutoSlide() {
  slider1++;
  if (slider1 === image.length + 1 - 3) {
    slider1 = 0;
  }
  let pos = slider1 * -100 + "px";
  let slideImage = document.querySelector(".slide-img");
  slideImage.style.transform = "translateX(" + pos + ")";
  console.log(slider1);
}
//On click image changing function
function replaceImage(el) {
  document.getElementById("main_img").innerHTML = "";
  let image = document.createElement("img");
  image.src = el;
  document.getElementById("main_img").append(image);
}
