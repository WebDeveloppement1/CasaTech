const inputs = document.querySelectorAll(".input");

function focusFunc() {
  let parent = this.parentNode; //get the parent of the input ( div )
  parent.classList.add("focus"); //add the focus class for div parent
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    //if the input is empty
    parent.classList.remove("focus"); //remove the focus class for div parent
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});
