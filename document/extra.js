

let toggle_icon = document.querySelector(".toggle-icon");
let from = document.querySelector(".from");
let to = document.querySelector(".to");
let onoff = document.getElementById("onoff");


function toggleChange(){


        toggle_icon.classList.toggle("feather-toggle-left");
        toggle_icon.classList.toggle("feather-toggle-right");
        from.classList.toggle("show_date");
        to.classList.toggle("show_date");
        let onoff_value = onoff.value;
          onoff.value = null;
         onoff.value = onoff_value == 0 ? 1 : 0;


    // else{
    //     from.classList.remove("show_date")
    //     to.classList.remove("show_date")
    //     toggle_icon.classList.remove("feather-toggle-right");
    //     toggle_icon.classList.add("feather-toggle-left");
    // }
}







let upload_image = document.querySelector(".upload-image");
let banner_img_upload = document.querySelector(".banner-image-upload");
function upload_banner_image(){
  banner_img_upload.click();
  banner_img_upload.addEventListener("change",function(){
      let files = banner_img_upload.files[0];
     const reader = new FileReader();
     reader.addEventListener("load",function (){
         let value = reader.result;
         upload_image.src = value;
     });
     reader.readAsDataURL(files);

  });
}
