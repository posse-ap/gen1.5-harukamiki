let modal = document.getElementById("modalOutside");
let modalBefore = document.getElementById("modalInside");
let postComplete = document.getElementById("postComplete");
let inmodalButton = document.getElementById("modalbutton");
let modalCalendar = document.getElementById("modalCalendar");
let closeModalButton = document.getElementById("closeModal");
let calendarInputBox = document.getElementById("modal-calendar");
let loading = document.getElementById("loading");


function openModal(){
  modal.style.display = "flex";
  closeModalButton.style.display = "block";

  if(window.innerWidth<750){
    modalBefore.style.display = "block";
  }else{
    modalBefore.style.display = "flex";
  }
  inmodalButton.style.display = "block";
  postComplete.style.display ="none";
  modalCalendar.style.display="none";
}

var timerId;
function completeModal(){
  modalBefore.style.display ="none";
  inmodalButton.style.display ="none";
  loading.style.display = "block";
  timerId = setTimeout(closeloading,5000);
closeModalButton.style.display = "block";
}

function closeModal(){
  modal.style.display = "none";
  calendarInputBox.value = "";
  loading.style.display = "none";
  clearTimeout(timerId);

  let date = document.getElementById("calendarDate1");
  date.style.backgroundColor = "white";
    date.style.color = "#989898";
 
}

function closeloading(){
  loading.style.display ="none";
  postComplete.style.display ="inline-block";
}

function openCalendar(){
  modalBefore.style.display = "none";
  modalCalendar.style.display = "block";
  inmodalButton.style.display ="none";
  closeModalButton.style.display = "none";
}
// rgb(15,113,189)

function dateclicked(index){
  let clickedDate = index;

  let date = document.getElementById("calendarDate" + clickedDate);
  if(date.style.backgroundColor =="white"){
    date.style.backgroundColor = "#0F71BD";
    date.style.color = "#FFFFFF";
  }else{
    date.style.backgroundColor = "white";
    date.style.color = "#989898";
  }

  calendarInputBox.value = "2021年10月" + clickedDate + "日";
  // calendarInputBox.value= index;
  console.log(clickedDate);
}

function submitDate(){
  if(window.innerWidth<750){
    modalBefore.style.display = "block";
  }else{
    modalBefore.style.display = "flex";
  }
  modalCalendar.style.display = "none";
  inmodalButton.style.display ="block";
}


// twitter投稿
let twitterCheck = document.getElementsByName("twitterCheck");
document.getElementById("modalbutton").addEventListener('click', function(event) {
  event.preventDefault();
  var left = Math.round(window.screen.width / 2 - 275);
  var top = (window.screen.height > 420) ? Math.round(window.screen.height / 2 - 210) : 0;
  if(twitterCheck[0].checked){ 
  window.open(
      "https://twitter.com/intent/tweet?text=" + encodeURIComponent(document.getElementById("content").value),
      null,
      "scrollbars=yes,resizable=yes,toolbar=no,location=yes,width=550,height=420,left=" + left + ",top=" + top);
  }
});