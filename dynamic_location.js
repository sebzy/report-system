


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
    divtest.innerHTML = ' <label for="curl" class="control-label col-lg-2">Location</label><div class="col-lg-10"><input class="form-control " id="location" type="text" name="location[]" /></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></button></br></br>';
    
    // method appendChild is the one that creates the child from field  from the var divtest
    objTo.appendChild(divtest)

}
   // function for removing the form field created
   function remove_education_fields(rid) {
       $('.removeclass'+rid).remove();
   }