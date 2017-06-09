document.querySelector('#src').onchange = function() {
  var preview = document.querySelector('#preview');

  [].forEach.call(this.files, function(file) {
    if (/image\/.*/.test(file.type)) {   // use any image format the browser can read
      var img = new Image;
      img.onload = remURL;               // to remove Object-URL after use
      img.style.height = "209px"; 
       img.style.width = "369px";       // use style, "width" defaults to "auto"
      img.src = (URL || webkitURL).createObjectURL(file);
      preview.appendChild(img);          // add image to preview container
    }
  });
  
  function remURL() {(URL || webkitURL).revokeObjectURL(this.src)}
};