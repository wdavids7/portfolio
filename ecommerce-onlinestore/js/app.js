const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    console.log(entry);
    if (entry.isIntersecting) {
      entry.target.classList.add("show");
    } else {
      entry.target.classList.remove("show");
    }
  });
});

const hiddenElements = document.querySelectorAll(".hidden");
hiddenElements.forEach((el) => observer.observe(el));

//Function to increase and decrease quantity input values
function increaseValue() {
  var value = parseInt(document.getElementById("number").value, 10);
  value = isNaN(value) ? 0 : value;
  value++;
  document.getElementById("number").value = value;
}

function decreaseValue() {
  var value = parseInt(document.getElementById("number").value, 10);
  value = isNaN(value) ? 0 : value;
  value < 1 ? (value = 1) : "";
  value--;
  document.getElementById("number").value = value;
}
//Function to increase and decrease quantity input values

// Alert created when user clicks on Continue in checkout form
function continueFunction() {
  alert("Thank you! Your purchase has been made.");
}

// Alert created when user clicks on message sent in the contact us form
function message() {
  var fName = document.getElementById("fname");
  var lName = document.getElementById("lname");
  var subject = document.getElementById("subject");
  var msg = document.getElementById("msg");
  const success = document.getElementById("success");
  const danger = document.getElementById("danger");

  if (
    fName.value === "" ||
    lName.value === "" ||
    subject.value === "" ||
    msg.value === ""
  ) {
    danger.style.display = "block";
  } else {
    setTimeout(() => {
      fName.value = "";
      lName.value = "";
      subject.value = "";
      msg.value = "";
    }, 5000);

    success.style.display = "block";
  }

  setTimeout(() => {
    danger.style.display = "none";
    success.style.display = "none";
  }, 8000);
}
