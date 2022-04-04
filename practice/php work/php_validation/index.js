
let submit = document.getElementById("submit");
let Pincode = document.getElementById("pincode");
let City = document.getElementById("city");
let State = document.getElementById("state");

// submit.addEventListener('click',(event)=>{
//   event.preventDefault();
// })


let api = "https://raw.githubusercontent.com/mithunsasidharan/India-Pincode-Lookup/master/pincodes.json";
fetch(api)
 .then(response => response.json())
 .then(data => {

  console.log(data);


   state_district = () => {

   var vl = Pincode.value;
   var i = data.findIndex((element) => element.pincode == vl);       // find index of element in jsondata/api from value
   City.value = data[i].districtName;                                  // set city value    
   State.value = data[i].stateName;                                    // set state value  


  }



 });

