var li_elements = document.querySelectorAll(".wrapper_left ul li");
// console.log(li_elements);
var item_elements = document.querySelectorAll(".item");
// console.log(item_elements);
for (var i = 0; i < li_elements.length; i++) {
  li_elements[i].addEventListener("click", function() {


    //xóa tích button cũ
    li_elements.forEach(function(li) {
      li.classList.remove("active");
    });
    //

    // thêm hiệu ứng 
    this.classList.add("active");
    var li_value = this.getAttribute("data-li");

    //xóa item cũ
    item_elements.forEach(function(item) {
        console.log(item);
      item.style.display = "none";
    });


    //thêm mới
    if (li_value == "dasboard") {
        document.querySelector("." + li_value).style.display = "block";
      } else if (li_value == "order") {
        document.querySelector("." + li_value).style.display = "block";
      } else if (li_value == "dowload") {
        document.querySelector("." + li_value).style.display = "block";
      } else if (li_value == "payment") {
        document.querySelector("." + li_value).style.display = "block";
      } 
      else if (li_value == "account") {
        document.querySelector("." + li_value).style.display = "block";
      } else {
        // console.log("");
      }


  });
}