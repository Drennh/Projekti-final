const showhide = document.querySelectorAll(".showhide");
const userbox = document.querySelector(".userbox");
const reservationsbox = document.querySelector(".reservationsbox");
const messagebox = document.querySelector(".messagebox");

const section = document.querySelectorAll(".section");
const addsmth = document.querySelector("#showtextadder");
const usersection = document.querySelector("#usersection");



addsmth.addEventListener("click", showtextadder);

usersection.addEventListener("click", showusersection);

function showusersection() {
  section[0].classList.add("active");
  section[0].classList.remove("non-active");

  section[1].classList.remove("active");
  section[1].classList.add("non-active");
}

function showtextadder() {
  section[1].classList.add("active");
  section[1].classList.remove("non-active");

  section[0].classList.add("non-active");
  section[0].classList.remove("active");
}

userbox.addEventListener("click", showUserBox);
reservationsbox.addEventListener("click", showreservationsbox);
messagebox.addEventListener("click", showmessagebox);

function showUserBox() {
  showhide[0].classList.add("active");
  showhide[0].classList.remove("non-active");

  showhide[1].classList.add("non-active");
  showhide[1].classList.remove("active");

  showhide[2].classList.add("non-active");
  showhide[2].classList.remove("active");
}
function showreservationsbox() {
  showhide[0].classList.add("non-active");
  showhide[0].classList.remove("active");

  showhide[1].classList.add("active");
  showhide[1].classList.remove("non-active");

  showhide[2].classList.add("non-active");
  showhide[2].classList.remove("active");
}

function showmessagebox() {
  showhide[0].classList.add("non-active");
  showhide[0].classList.remove("active");

  showhide[2].classList.add("active");
  showhide[2].classList.remove("non-active");

  showhide[1].classList.add("non-active");
  showhide[1].classList.remove("active");
}


const radioBtns = document.querySelectorAll('input[name="add"]');

for(let radio of radioBtns) {
    radio.addEventListener('change', () => {
        if(radio.value === "Inspirational") {
            document.querySelector('#myfile').style.display = 'none';
        } else {
            document.querySelector('#myfile').style.display = 'block';
        }
    });
}

const editBtns = document.querySelectorAll('.edit-row');
let editId = document.querySelector('.event-id');
let headerTxt = document.querySelector('input[name="headertxt"]');
let details = document.querySelector('#details');
let submitBtn = document.querySelector('#addSumbit');

for(let edit of editBtns) {
  let nr = 0;
edit.addEventListener('click', () => {
  let rows = document.querySelectorAll(`tr[title="${edit.title}"] td`);
  for(let row of rows) {
    switch(row.title) {
      case "name":
        headerTxt.value = row.innerText;
      break;
      case "description":
        details.value = row.innerText;
      break;
    }
  }
  editId.value = edit.title;
  submitBtn.name = submitBtn.name.replace('-add', '-edit');
});
}

const cancelEdit = document.querySelector('.cancel-edit');

cancelEdit.addEventListener('click', () =>{
  headerTxt.value = '';
  details.value = '';
  submitBtn.name = submitBtn.name.replace('-edit', '-add');
});