let Start_time = document.getElementById('ST');
let End_time = document.getElementById('ED');
let T_Date = document.getElementById('DT');
let Num_of_Per =document.getElementById('PN');
let Total = document.getElementById('TL');
let DB_S = document.getElementById('DBS');
let DB_E = document.getElementById('DBE');
let btn_D = document.getElementById('btn-clr');
// DOM errors para
let SERROR = document.getElementById('Serror');
let EERROR = document.getElementById('Eerror');
let PNERROR = document.getElementById('PNerror');
let DTERROR = document.getElementById('DTerror');
// validation variables
let V_Start =false;
let V_End =false;
let V_NOP = false;
let V_Date =false;
let max =0;
let min =0;
//calculate total budget and validation
function FTotal(Input , price)
{
   
  Total.innerHTML =Input.value*price + " $";
  Input.value = parseInt(Input.value);
  if(Input.value > 20 || Input.value <=0)
  {
    Input.classList.remove('is-valid');
    Input.classList.add('is-invalid');
    V_NOP = false;
    PNERROR.innerHTML = "This number of members is not allowed";
  }
  else
  {
    Input.classList.add('is-valid');
    Input.classList.remove('is-invalid');
    V_NOP = true;
    PNERROR.innerHTML = "";
  }
  btnVLD();
}
// Event listener for Start time
Start_time.addEventListener('change' , function(){
   
    if(Start_time.value == "")
    {
        Start_time.classList.remove('is-valid');
        Start_time.classList.add('is-invalid');
        V_Start =false;
    }
    else
    {
        V_Start =true;
        Start_time.classList.remove('is-invalid');
        Start_time.classList.add('is-valid');
        var S1 = Start_time.value.split(":");
        S1[0] = parseInt(S1[0]) *100;
        S1[1] =  parseInt(S1[1])+ parseInt(S1[0]);

        var S2 = DB_S.innerHTML.split(":");
        S2[0] =  parseInt(S2[0])*100;
        S2[1] = parseInt(S2[1])+ parseInt(S2[0]);
        console.log(S1[1]);
        console.log(S2[1]);
        if(S1[1]< S2[1] || (S1[1] > min && min !=0))//Error
        {
            Start_time.classList.remove('is-valid');
            Start_time.classList.add('is-invalid');
            SERROR.innerHTML ="This place is closed at this time";
            V_Start =false;

        }
        else //clear error
        { 
            max = S1[1];
            Start_time.classList.remove('is-invalid');
            Start_time.classList.add('is-valid');
            SERROR.innerHTML ="";
            V_Start =true;
        }

    }
    btnVLD();
});
// Event listener for End time
End_time.addEventListener('change' , function(){
   
    if(End_time.value == "")
    {
        End_time.classList.remove('is-valid');
        End_time.classList.add('is-invalid');
        V_End =false;
    }
    else
    {
        V_End =true;
        End_time.classList.remove('is-invalid');
        End_time.classList.add('is-valid');
        var S1 = End_time.value.split(":");
        S1[0] = parseInt(S1[0]) *100;
        S1[1] =  parseInt(S1[1])+ parseInt(S1[0]);

        var S2 = DB_E.innerHTML.split(":");
        S2[0] =  parseInt(S2[0])*100;
        S2[1] = parseInt(S2[1])+ parseInt(S2[0]);
        console.log(S1[1]);
        console.log(S2[1]);
        if(S1[1]> S2[1] || (max > S1[1] && max !=0))//Error
        {
            End_time.classList.remove('is-valid');
            End_time.classList.add('is-invalid');
            EERROR.innerHTML ="This place is closed at this time";
            V_End =false;

        }
        else //clear error
        { 
            min = S1[1];
            End_time.classList.remove('is-invalid');
            End_time.classList.add('is-valid');
            EERROR.innerHTML ="";
            V_End =true;
        }

    }
    btnVLD();
});
// Event listener for Date
T_Date.addEventListener('change',function(){
   
    const date = new Date();
    let day = date.getDate();
    let month = date.getMonth() + 1;
    let year = date.getFullYear();

    var reg_date = T_Date.value.split("-");
    let Day_month1 = (parseInt(reg_date[1])*100) + parseInt(reg_date[2]);
    let Day_month2 = (parseInt(month)*100) + parseInt(day);
    if(parseInt(reg_date[0]) >= parseInt(year) && parseInt(Day_month1) > parseInt(Day_month2))
    {
        T_Date.classList.add('is-valid');
        T_Date.classList.remove('is-invalid');
        V_Date = true;
        DTERROR.innerHTML = "";
    }
    else
    {
        T_Date.classList.remove('is-valid');
        T_Date.classList.add('is-invalid');
        V_Date = false;
        DTERROR.innerHTML = "This date is not available";
    }
    btnVLD();
});
//btn validation and enable
function btnVLD()
{
    if(V_Start && V_NOP && V_End && V_Date )
    {
        btn_D.classList.remove('disabled');
    }
    else
    {
        btn_D.classList.add('disabled');
    }
}