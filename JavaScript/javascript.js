
function prevImg(input){
  if(input.files && input.files[0]){
    var lector= new FileReader();
    lector.onload = function(e){
      $('#imgPreview')
      .attr('src',e.target.result)
      .width(200)
      height(200);
    };
    lector.readAsDataURL(input.files[0]);
  }
}
