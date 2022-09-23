async function newPlaceForm()
{
    const { value: formValues } = await Swal.fire({
        title: 'Add New Religious place',
        showCancelButton: false, 
        showConfirmButton: false ,
        html:  `
        <form method="POST" class="Add-form">
        
        <label style = "display:flex"> <p style="width:25%; margin-top: revert;">Name</p>
          <div style="width:100%">
        <input placeholder="Place Name" onkeyup="NameValidation(this)"  type="text" id="swal-input1" class="form-control  swal2-input " style="width:80%"/>
          <p id="NameError" style="color:red; font-size:11px; margin:0;     font-weight: 500;"></p>   
          </div> 
          </label>
            
          <label style = "display:flex"> <p style="width:25%; margin-top: revert;">Price</p>
                 <input placeholder="Course Price" onkeyup="validation(this,1)" type="number" id="swal-input2" class="form-control swal2-input" style="width:80%"/>
                 </label>
                
                 <label style = "display:flex"> <p style="width:25%; margin-top: revert;">Description</p>
                  <input placeholder="Course Description" onkeyup="validation(this,2)" type="text" id="swal-input3" class="form-control swal2-input" style="width:80%"/>
                  </label>
                  
                  <label style = "display:flex"> <p style="width:25%; margin-top: revert;">Image</p>
                 <input placeholder="Course Image" type="file" id="swal-input4" class="form-control swal2-input" style="width:80%"  onchange="FileValidation(this)"/>
                 </label>
                 
                 <label style = "display:flex"> 
                    <p style="width:25%; margin-top: revert;">Period</p>
                    <input placeholder="hours" onkeyup="validation(this,3)" type="text" id="swal-input5" class="form-control swal2-input" style="width:30%"/>
                    <p style="width:5%; margin-top: revert; margin-right: 10px; font-weight: bold;">:</p>
                    <input placeholder="min" onkeyup="validation(this,4)"  type="text" id="swal-input7" class="form-control swal2-input" style="width:30%"/>
                </label>

                <label style = "display:flex"> 
                    <p style="width:25%; margin-top: revert;">Period</p>
                    <input placeholder="hours" onkeyup="validation(this,3)" type="text" id="swal-input5" class="form-control swal2-input" style="width:30%"/>
                    <p style="width:5%; margin-top: revert; margin-right: 10px; font-weight: bold;">:</p>
                    <input placeholder="min" onkeyup="validation(this,4)"  type="text" id="swal-input7" class="form-control swal2-input" style="width:30%"/>
                </label>
                <input type="submit" name="RelSub" value="Add Place" class="btn btn-success disabled" style="width: 100px; margin-right: auto;  margin-left: auto; margin-top:40px;"/>
            </form>
                
                `,
       
        focusConfirm: true,
        
    })
}


/*function validation(V,flag)
{
    let condition;
   if(flag == 0)//---------- course name validation

   {
    condition = /^[A-Z][a-z]{2,10}$/;
    if(condition.test(V.value))
    {
        i1=true;
        V.classList.add("is-valid");
        V.classList.remove("is-invalid");
       
        
    }
    else
    {
        i1=false;
        V.classList.remove("is-valid");
        V.classList.add("is-invalid");
        NameError.innerHTML = "Invalid place name";
    }
   }
   else if(flag == 1)//----------course price validation

   {
    condition =  /^[0-9]{2,5}$/;
    if(condition.test(V.value))
    {
        i2=true;
        V.classList.add("is-valid");
        V.classList.remove("is-invalid");
    }
    else
    {
        i2=false
        V.classList.remove("is-valid");
        V.classList.add("is-invalid");
    }
   }
    else if(flag == 2)//----------course Desc validation
    {
        if(V.value.length >10 && V.value.length<5000)// any ASCII but ,must be length range 10 to 5000
        {
            i3=true;
            V.classList.add("is-valid");
            V.classList.remove("is-invalid");
       }
       else
       {
           i3=false;
           V.classList.remove("is-valid");
           V.classList.add("is-invalid");
       }
    }
    else if(flag == 3)//----------course hourse validation
    {
        condition =  /^[0-9]{1,5}$/;
        if(V.value >= 0 && V.value<24 &&condition.test(V.value))
        {
            i4=true;
            V.classList.add("is-valid");
            V.classList.remove("is-invalid");
       }
       else
       {
           i4=false;
           V.classList.remove("is-valid");
           V.classList.add("is-invalid");
       }
    }
    else if(flag == 4)//----------course min validation
    {
        condition =  /^[0-9]{1,5}$/;
        if(V.value >= 0 && V.value<60 && condition.test(V.value))
        {
            i6=true;
            V.classList.add("is-valid");
            V.classList.remove("is-invalid");
       }
       else
       {
           i6=false;
           V.classList.remove("is-valid");
           V.classList.add("is-invalid");
       }
    }
    

    if(i1 && i2 && i3 && i4  && i6)//-to enable and disable sweetalert buttons
    {
        test_var = true;
        Swal.enableButtons();
    }
    else
    {
        test_var =false;
        Swal.disableButtons();	
    }
}*/
let Name = 0;
let Cost =0;
let Description =0;
let h1 =0;
let m1 =0;
let h2 =0;
let m2 =0;


function NameValidation(val)
{
    let NameError = document.getElementById('NameError');
    let condition = /^[A-Z][a-z ' ']{2,16}$/;
    if(val.value == "")
    {
        NameError.innerHTML = "Place name is empty";
        val.classList.add("is-invalid");
        val.classList.remove("is-valid");
        Name =0;
    }
    else if( val.value.length <3)
    {
        NameError.innerHTML = "Place name length must be greater than 3  char";
        val.classList.add("is-invalid");
        val.classList.remove("is-valid");
        Name =0;
    }
    else if( val.value.length >15)
    {
        NameError.innerHTML = "Place name length must be less than 15  char";
        val.classList.add("is-invalid");
        val.classList.remove("is-valid");
        Name =0;
    }
    else if(!condition.test(val.value))
    {
        NameError.innerHTML = "Place name is invalid";
        val.classList.add("is-invalid");
        val.classList.remove("is-valid");
        Name =0;
    }
    else{
        NameError.innerHTML = "";
        Name =1;
        val.classList.add("is-valid");
        val.classList.remove("is-invalid");
    }
    //btnValid();
}

/*function btnValid()
{
    let button = document.getElementById('js-btn');
    if(emailDone ==1 && passDone ==1)
    {
        button.classList.remove("btn-primary");
        button.classList.remove("btn-danger");
        button.classList.remove("disabled");
        button.classList.add("btn-success");

    }
    else if(emailDone ==0 || passDone ==0)
    {
        button.classList.remove("btn-primary");
        button.classList.add("btn-danger");
        button.classList.add("disabled");
        button.classList.remove("btn-success");
    }
}*/