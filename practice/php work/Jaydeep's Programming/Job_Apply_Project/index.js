


//USER LOCATION

// const success = (position) => {
//     console.log(position);
//     const latitude = position.coords.latitude;
//     const longitude = position.coords.longitude;


//     const api = "https://api.bigdatacloud.net/data/reverse-geocode-client?latitude=" + latitude + "&longitude=" + longitude + "&localityLanguage=en";

//     fetch(api)
//         .then(response => response.json())
//         .then(data => {
//             alert(data.countryName + "    " + data.principalSubdivision + "    " + data.locality);

//             console.log(data);


//         })
// }

// const error = () => {
//     alert("can't find ");

// }

// navigator.geolocation.getCurrentPosition(success, error);







// CITY LIST 


const select = document.getElementById('city');

const j = "https://countriesnow.space/api/v0.1/countries/population/cities";


fetch(j).then(res => res.json()).then(data => {


    console.log(data)

    c = 1681
    d = 2160



    for (let i = c; i < d; i++) {

        const cities = data.data[i].city;

        const op = document.createElement('option');
        op.innerHTML = cities;
        select.appendChild(op);

    }

});









// CHANGE COLOR FUNCTION 

document.getElementById('nav').style.backgroundColor = "black";
document.getElementById('form').style.color = "white";


function changeColor() {
    var c = document.getElementById('color').value;
    document.getElementById('nav').style.backgroundColor = c;
    document.getElementById('form').style.color = c;


}





// FORM VALIDATION


// let radio = document.getElementById('radio-one');
// let radio1 = document.getElementById('radio-two');




document.getElementById('btn-btn').addEventListener('click', () => {

 

    
    let fname = document.getElementById('firstname').value;
    let lname = document.getElementById('lastname').value;
    let email = document.getElementById('email').value;
    let code = document.getElementById('code').value;
    let number = document.getElementById('number').value;
    let city = document.getElementById('city').value;
    
      if (fname == "") {
          alert('first name required');
        }
        else if( lname == "" ){
          alert('last name required');
          
        }
        else if( email == "" ){
          alert('email required');
          
        }
        else if(  code == ""){
            alert('code required');
            
        }
        else if( number == "" ){
            
            alert('number required');
        }
        else if(city == ""  ){
            
            alert('city required');
        }
        else {
            
            alert('success!');
      }
    
 


    })
    













// const k = "https://countriesnow.space/api/v0.1/countries";


// const select = document.getElementById('city');


// fetch(k).then(res => res.json()).then(city => {
//     console.log(city);


//     cd = city.data[97].cities;
//     for (const i in cd) {
//         const cities = cd[i]
//         const op = document.createElement('option');
//         op.innerHTML = cities;
//         select.appendChild(op);


//     }
// });
