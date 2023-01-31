async function newPlaceForm()
{
    const { value: formValues } = await Swal.fire({
        title: 'Add New Religious place',
        showCancelButton: false, 
        showConfirmButton: false ,
        html:  `
        <form enctype="multipart/form-data" method="POST" action="./backendfiles/addplace.php?pid=1" class="Add-form">
        <label style = "display:flex"> <p style="width:25%; margin-top: revert;">Name</p>
          <div style="width:100%">
        <input name="name" placeholder="Place Name" onkeyup="NameValidation(this)"  type="text" id="swal-input1" class="form-control  swal2-input " style="width:80%"/>
          <p id="NameError" style="color:red; font-size:11px; margin:0;     font-weight: 500;"></p>   
          </div> 
          </label>
            
          <label style = "display:flex"> <p style="width:25%; margin-top: revert;">Price</p>
          <div style="width:100%">     
          <input name="cost" placeholder="Place Price" onkeyup="CostValidation(this)" type="number" id="swal-input2" class="form-control swal2-input" style="width:80%"/>
          <p id="CostError" style="color:red; font-size:11px; margin:0;     font-weight: 500;"></p>   
          </div> 
          </label>
          <label style = "display:flex"> <p style="width:25%; margin-top: revert;">Location</p>
          <div style="width:100%">  
          <select name="city" id="swal-input6" class="form-control swal2-input" style="width:80%">
          <option selected value="Jerusalem">Jerusalem</option>
          <option value="Nablus">Nablus</option>
          <option value="Jenin">Jenin</option>
          <option value="Tulkarm">Tulkarm</option>
          <option value="Hebron">Hebron</option>
          <option value="Bethlehem">Bethlehem</option>
          <option value="Ramallah">Ramallah</option>
          <option value="Jericho">Jericho</option>
          <option value="Qalqilya">Qalqilya</option>
          <option value="Salfit">Salfit</option> 
          <option value="Tubas">Tubas</option>
          </select>
       </div> 
       </label>
                
                 <label style = "display:flex"> <p style="width:25%; margin-top: revert;">Description</p>
                 <div style="width:100%">    
                 <input name="desc" placeholder="Place Description" onkeyup="DescValidation(this)" type="text" id="swal-input3" class="form-control swal2-input" style="width:80%"/>
                 <p id="DescError" style="color:red; font-size:11px; margin:0;     font-weight: 500;"></p>   
                 </div>  
                 </label>
                  
                  <label style = "display:flex"> <p style="width:25%; margin-top: revert;">Image</p>
                 <input type="file" name="my_image" placeholder="Place Image"  id="swal-input4" class="form-control swal2-input" style="width:80%"  onchange="FileValidation(this)"/>
                 </label>
                 
                 <label style = "display:flex"> 
                    <p style="width:25%; margin-top: revert;">Start</p>
                    <input name="h1" placeholder="hours" onkeyup="hValidation(this,0)" type="number" id="swal-input5" class="form-control swal2-input" style="width:30%"/>
                    <p style="width:5%; margin-top: revert; margin-right: 10px; font-weight: bold;">:</p>
                    <input name="m1" placeholder="min" onkeyup="mValidation(this,0)"  type="number" id="swal-input7" class="form-control swal2-input" style="width:30%"/>
                </label>

                <label style = "display:flex"> 
                    <p style="width:25%; margin-top: revert;">Close</p>
                    <input name="h2" placeholder="hours" onkeyup="hValidation(this,1)" type="number" id="swal-input5" class="form-control swal2-input" style="width:30%"/>
                    <p style="width:5%; margin-top: revert; margin-right: 10px; font-weight: bold;">:</p>
                    <input name="m2" placeholder="min" onkeyup="mValidation(this,1)"  type="number" id="swal-input7" class="form-control swal2-input" style="width:30%"/>
                </label>

                <label style = "display:flex"> <p style="width:25%; margin-top: revert;">Explore</p>
                <input name="explore" type="checkbox" value="1" />
                </label>

                <input id="js-btn" type="submit" name="RelSub" value="Add Place" class="btn btn-primary disabled" style="width: 100px; margin-right: auto;  margin-left: auto; margin-top:40px;"/>
            </form>
                
                `,
       
        focusConfirm: true,
        
    })
}

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
    let condition = /^[A-Z][a-z ' ']{2,50}$/;
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
    else if( val.value.length >50)
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
    btnValid();
}
function CostValidation(val)
{
    let CostError = document.getElementById('CostError');
    let condition = /^[0-9][0-9]{0,4}$/;
    if(val.value == "")
    {
        CostError.innerHTML = "Place Cost is empty";
        val.classList.add("is-invalid");
        val.classList.remove("is-valid");
        Cost =0;
    }
    else if(!condition.test(val.value))
    {
        CostError.innerHTML = "Place Cost is invalid";
        val.classList.add("is-invalid");
        val.classList.remove("is-valid");
        Cost =0;
    }
    else{
        CostError.innerHTML = "";
        Cost =1;
        val.classList.add("is-valid");
        val.classList.remove("is-invalid");
    }
    btnValid()
}
function DescValidation(val)
{
    let DescError = document.getElementById('DescError');
    if(val.value == "")
    {
        DescError.innerHTML = "Place Description is empty";
        val.classList.add("is-invalid");
        val.classList.remove("is-valid");
        Description =0;
    }
    else if( val.value.length <10)
    {
        DescError.innerHTML = "Place description length must be greater than 10  char";
        val.classList.add("is-invalid");
        val.classList.remove("is-valid");
        Description =0;
    }
    else if( val.value.length >5000)
    {
        DescError.innerHTML = "Place description length must be less than 5000  char";
        val.classList.add("is-invalid");
        val.classList.remove("is-valid");
        Description =0;
    }
    else{
        DescError.innerHTML = "";
        Description =1;
        val.classList.add("is-valid");
        val.classList.remove("is-invalid");
    }
    btnValid();
}
function hValidation(val,flag)
{
    if(flag == 0) // Start time
    {
        if(val.value < 0 || val.value>24 || val.value == "")
        {
            val.classList.add("is-invalid");
            val.classList.remove("is-valid");
            h1 =0;
       }
       else
       {
        h1 =1;
        val.classList.add("is-valid");
        val.classList.remove("is-invalid");
       }
    }
    else // Close time
    {
        if(val.value < 0 || val.value>24 || val.value == "")
        {
            val.classList.add("is-invalid");
            val.classList.remove("is-valid");
            h2 =0;
       }
       else
       {
        h2 =1;
        val.classList.add("is-valid");
        val.classList.remove("is-invalid");
       }
    }
    btnValid()
}
function mValidation(val,flag)
{
    if(flag == 0) // Start time
    {
        if(val.value < 0 || val.value>=60  || val.value == "")
        {
            val.classList.add("is-invalid");
            val.classList.remove("is-valid");
            m1 =0;
       }
       else
       {
        m1 =1;
        val.classList.add("is-valid");
        val.classList.remove("is-invalid");
       }
    }
    else // Close time
    {
        if(val.value < 0 || val.value>=60 || val.value == "")
        {
            val.classList.add("is-invalid");
            val.classList.remove("is-valid");
            m2 =0;
       }
       else
       {
        m2 =1;
        val.classList.add("is-valid");
        val.classList.remove("is-invalid");
       }
    }
    btnValid()
}

function btnValid()
{
    let button = document.getElementById('js-btn');
    if(Name ==1 && Cost ==1 && Description ==1 && h1 ==1 && h2 ==1 && m1 ==1 && m2 ==1) //&&
    {
        button.classList.remove("btn-primary");
        button.classList.remove("btn-danger");
        button.classList.remove("disabled");
        button.classList.add("btn-success");

    }
    else if(Name ==0 || Cost ==0 || Description ==0 ||  h1 ==0 || h2 ==0 ||  m1 ==0 || m2 ==0) //||
    {
        button.classList.remove("btn-primary");
        button.classList.add("btn-danger");
        button.classList.add("disabled");
        button.classList.remove("btn-success");
    }
}

// Show image function
function ShowImage(ImageURL,PlaceName)
{
    Swal.fire({
        title: PlaceName,
        text: 'Place Image ...',
        imageUrl: ImageURL ,
        imageWidth: 400,
        imageHeight: 200,
        imageAlt: 'Place image',
      })
}
// Show description function
async function ShowDesc(Description,PlaceName)
{
    Swal.fire({
        title :'Description for '+ PlaceName,
        text: Description,
        showClass: {
          popup: 'animate__animated animate__fadeInDown'
        },
        hideClass: {
          popup: 'animate__animated animate__fadeOutUp'
        }
      })
} 

// Edit function 
async function EditPlaceForm(placeName,PlaceCost,PlaceDesc,H1,M1,H2,M2,Explore,city,id)
{
    Name = 1;
    Cost =1;
    Description =1;
    h1 =1;
    m1 =1;
    h2 =1;
    m2 =1;
    let Arr = ["Jerusalem","Nablus","Jenin","Tulkarm","Hebron","Bethlehem","Ramallah","Jericho","Qalqilya","Salfit","Tubas"];
    let val = "";
    for(let i=0;i<Arr.length;i++)
    {
        if(Arr[i] == city)
        {
            val +=`<option selected value="${Arr[i]}">${Arr[i]}</option>`;
        }
        else
        {
            val += `<option  value="${Arr[i]}">${Arr[i]}</option>`;
        }
    }
    let checked ;
    if(Explore)
    {
        checked = '<input onclick="btnValid()" name="explore" valey="1" type="checkbox" checked />'; 
    }
    else
    {
        checked = '<input onclick="btnValid()" name="explore" value="1" type="checkbox" />';
    }
    const { value: formValues } = await Swal.fire({
        title: `Update ${placeName} place`,
        showCancelButton: false, 
        showConfirmButton: false ,
        html:  `
        <form enctype="multipart/form-data" method="POST" action="./backendfiles/updateplace.php?pid=1&id=${id}" class="Add-form"> 
        <label style = "display:flex"> <p style="width:25%; margin-top: revert;">Name</p>
          <div style="width:100%">
        <input name="name" value="${placeName}"  placeholder="Place Name" onkeyup="NameValidation(this)"  type="text" id="swal-input1" class="form-control  swal2-input " style="width:80%"/>
          <p id="NameError" style="color:red; font-size:11px; margin:0;     font-weight: 500;"></p>   
          </div> 
          </label>
            
          <label style = "display:flex"> <p style="width:25%; margin-top: revert;">Price</p>
          <div style="width:100%">     
          <input name="cost" value="${PlaceCost}"  placeholder="Place Price" onkeyup="CostValidation(this)" type="number" id="swal-input2" class="form-control swal2-input" style="width:80%"/>
          <p id="CostError" style="color:red; font-size:11px; margin:0;     font-weight: 500;"></p>   
          </div> 
          </label>
          <label style = "display:flex"> <p style="width:25%; margin-top: revert;">Location</p>
          <div style="width:100%">  
          <select onchange="btnValid()" name="city" id="swal-input6" class="form-control swal2-input" style="width:80%">
          `
          +
           val 
          +
          `
          </select>
       </div> 
       </label>
                
                
                 <label style = "display:flex"> <p style="width:25%; margin-top: revert;">Description</p>
                 <div style="width:100%">    
                 <input name="desc" value="${PlaceDesc}"  placeholder="Place Description" onkeyup="DescValidation(this)" type="text" id="swal-input3" class="form-control swal2-input" style="width:80%"/>
                 <p id="DescError" style="color:red; font-size:11px; margin:0;     font-weight: 500;"></p>   
                 </div>  
                 </label>
                  
                  <label style = "display:flex"> <p style="width:25%; margin-top: revert;">Image</p>
                 <input onclick="btnValid()" name="my_image" placeholder="Place Image" type="file" id="swal-input4" class="form-control swal2-input" style="width:80%"  onchange="FileValidation(this)"/>
                 </label>
                 
                 <label style = "display:flex"> 
                    <p style="width:25%; margin-top: revert;">Start</p>
                    <input value="${H1}" name="h1" placeholder="hours" onkeyup="hValidation(this,0)" type="number" id="swal-input5" class="form-control swal2-input" style="width:30%"/>
                    <p style="width:5%; margin-top: revert; margin-right: 10px; font-weight: bold;">:</p>
                    <input value="${M1}" name="m1" placeholder="min" onkeyup="mValidation(this,0)"  type="number" id="swal-input7" class="form-control swal2-input" style="width:30%"/>
                </label>

                <label style = "display:flex"> 
                    <p style="width:25%; margin-top: revert;">Close</p>
                    <input value="${H2}" name="h2" placeholder="hours" onkeyup="hValidation(this,1)" type="number" id="swal-input5" class="form-control swal2-input" style="width:30%"/>
                    <p style="width:5%; margin-top: revert; margin-right: 10px; font-weight: bold;">:</p>
                    <input value="${M2}" name="m2" placeholder="min" onkeyup="mValidation(this,1)"  type="number" id="swal-input7" class="form-control swal2-input" style="width:30%"/>
                </label>
                <label style = "display:flex"> <p style="width:25%; margin-top: revert;">Explore</p>
                `
                +
                checked
                +
                `                
                </label>
                <input id="js-btn" type="submit" name="RelSub" value="Update" class="btn btn-dander disabled " style="width: 100px; margin-right: auto;  margin-left: auto; margin-top:40px;"/>
            </form>
                
                `,
       
        focusConfirm: true, 
    });
}