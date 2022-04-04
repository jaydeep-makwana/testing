const records = [
  {
    "city_name": "Bengaluru",
    "zone_name": "Yelahanka",
    "ward_name": "Kempegowda Ward",
    "ward_no_": 1,
    "no_of_unemployed_persons_seeking_or_available_for_work_": 19989,
    "no_of_employed_persons": 14794,
    "total_labour_force_in_the_city_age_15_59_employed_unemployed_persons_": 34783
  },
  {
    "city_name": "Bengaluru",
    "zone_name": "Yelahanka",
    "ward_name": "Chowdeswari Ward",
    "ward_no_": 2,
    "no_of_unemployed_persons_seeking_or_available_for_work_": 19737,
    "no_of_employed_persons": 16865,
    "total_labour_force_in_the_city_age_15_59_employed_unemployed_persons_": 36602
  },
  {
    "city_name": "Bengaluru",
    "zone_name": "Yelahanka",
    "ward_name": "Atturu",
    "ward_no_": 3,
    "no_of_unemployed_persons_seeking_or_available_for_work_": 34311,
    "no_of_employed_persons": 23818,
    "total_labour_force_in_the_city_age_15_59_employed_unemployed_persons_": 58129
  },
  {
    "city_name": "Bengaluru",
    "zone_name": "Yelahanka",
    "ward_name": "Yelahanka Satellite Town",
    "ward_no_": 4,
    "no_of_unemployed_persons_seeking_or_available_for_work_": 24264,
    "no_of_employed_persons": 17722,
    "total_labour_force_in_the_city_age_15_59_employed_unemployed_persons_": 41986
  },
  {
    "city_name": "Bengaluru",
    "zone_name": "Yelahanka",
    "ward_name": "Jakkuru",
    "ward_no_": 5,
    "no_of_unemployed_persons_seeking_or_available_for_work_": 31580,
    "no_of_employed_persons": 20445,
    "total_labour_force_in_the_city_age_15_59_employed_unemployed_persons_": 52025
  },
  {
    "city_name": "Bengaluru",
    "zone_name": "Yelahanka",
    "ward_name": "Thanisandra",
    "ward_no_": 6,
    "no_of_unemployed_persons_seeking_or_available_for_work_": 43413,
    "no_of_employed_persons": 28442,
    "total_labour_force_in_the_city_age_15_59_employed_unemployed_persons_": 71855
  },
  {
    "city_name": "Bengaluru",
    "zone_name": "Yelahanka",
    "ward_name": "Byatarayanapura",
    "ward_no_": 7,
    "no_of_unemployed_persons_seeking_or_available_for_work_": 39999,
    "no_of_employed_persons": 32155,
    "total_labour_force_in_the_city_age_15_59_employed_unemployed_persons_": 72154
  },
  {
    "city_name": "Bengaluru",
    "zone_name": "Yelahanka",
    "ward_name": "Kodigehalli",
    "ward_no_": 8,
    "no_of_unemployed_persons_seeking_or_available_for_work_": 26856,
    "no_of_employed_persons": 20690,
    "total_labour_force_in_the_city_age_15_59_employed_unemployed_persons_": 47546
  },
  {
    "city_name": "Bengaluru",
    "zone_name": "Yelahanka",
    "ward_name": "Vidyaranyapura",
    "ward_no_": 9,
    "no_of_unemployed_persons_seeking_or_available_for_work_": 33260,
    "no_of_employed_persons": 23935,
    "total_labour_force_in_the_city_age_15_59_employed_unemployed_persons_": 57195
  },
  {
    "city_name": "Bengaluru",
    "zone_name": "Yelahanka",
    "ward_name": "Dodda Bommasandra",
    "ward_no_": 10,
    "no_of_unemployed_persons_seeking_or_available_for_work_": 20118,
    "no_of_employed_persons": 16278,
    "total_labour_force_in_the_city_age_15_59_employed_unemployed_persons_": 36396
  }
];





const rootId = document.getElementById("root");




const table = document.createElement("table");
rootId.appendChild(table);
table.setAttribute("border", 1);
table.setAttribute("style", "text-align:center");




const tHead = document.createElement("thead");
table.appendChild(tHead);

const tr = document.createElement("tr");
tHead.appendChild(tr);

const th1 = document.createElement("th");
tr.appendChild(th1);
th1.innerHTML = "Ward_No";

const th2 = document.createElement("th");
tr.appendChild(th2);
th2.innerHTML = "Ward_Name";


const th4 = document.createElement("th");
tr.appendChild(th4);
th4.innerHTML = "Unemployed";

const th5 = document.createElement("th");
tr.appendChild(th5);
th5.innerHTML = "Employed";


const th3 = document.createElement("th");
tr.appendChild(th3);
th3.innerHTML = "Empoyed and Unemployed";


const tBody = document.createElement("tbody");
table.appendChild(tBody);



records.map((element, index, arry) => {

  const tr = document.createElement("tr");
  tBody.appendChild(tr);



  const td1 = document.createElement("td");
  tr.appendChild(td1).innerHTML = element.ward_no_;

  const td2 = document.createElement("td");
  tr.appendChild(td2).innerHTML = element.ward_name;


  const td4 = document.createElement("td");
  tr.appendChild(td4);
  const Unemployed = td4.innerHTML = element.no_of_unemployed_persons_seeking_or_available_for_work_;

  const td5 = document.createElement("td");
  tr.appendChild(td5);
  const Employed = td5.innerHTML = element.no_of_employed_persons;


  const td3 = document.createElement("td");
  tr.appendChild(td3).innerHTML = Unemployed + Employed;




});










console.log(rootId);






