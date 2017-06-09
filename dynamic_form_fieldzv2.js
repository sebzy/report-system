// start of code for loading the image in the browser



// end of the code for loading the image in the browser




var room = 1;

// function for the where the for the dynamic form field

function education_fields() {

 // once the button the button is pressed room increments
    room++;

// variable objto identifies where to appned by use o f the id
    var objTo = document.getElementById('education_fields')
    
// the variable divtest creates a div where the new form field  is put
    var divtest = document.createElement("div");

    // setAttribute method gives the above the its attributes

    divtest.setAttribute("class", "form-group removeclass"+room);

    var rdiv = 'removeclass'+room;
    divtest.innerHTML = '</br></br><div class="form-group "><div  style="float:center;margin: left;margin-left: 194px;"><table ><tr><td><div style=" height: 300px;width: 375px;  padding-top: 10px;  padding-bottom: 10px;  float:center; margin: auto; border: 3px solid #008CBA; margin-left: 16px;" ><label for="file"></label><b> <H5 style="text-align: center;">UPLOAD SCREENSHOT</H5><div id="preview"><img id="target" src="/upload/img.jpg" alt="your image" height="209px" width="369px"/><input id="src" type="file" name="files[]"   multiple="multiple" /></div></div></td><td><label for="ccomment" class="control-label col-lg-2">Notes</label><div class="col-lg-10"><textarea class="form-control " id="notes" name="notes[]" multiple ="multiple" style="width: 325px; height: 67px;" required></textarea></div></td></tr></table></div></div>&nbsp&nbsp&nbsp&nbsp </div><button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></button><div class="clear"></div></br></br>';
    
    // method appendChild is the one that creates the child from field  from the var divtest
    
    objTo.appendChild(divtest)

}
   // function for removing the form field created
   function remove_education_fields(rid) {
       $('.removeclass'+rid).remove();
   }