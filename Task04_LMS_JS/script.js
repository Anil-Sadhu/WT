const courseName = "Java Full Stack";
let coursePrice = 5000;

console.log(courseName);
console.log(coursePrice);

document.getElementById("courseInfo").innerText =
  "Course: " + courseName;

document.getElementById("priceInfo").innerText =
  "Price: ₹" + coursePrice;

// let reassignment
coursePrice = 4500;
console.log("Updated Price:", coursePrice);

// const reassignment (will give error if uncommented)
// courseName = "Python";

// Function declaration
function showMessage(msg) {
  alert(msg);
}

// Function expression
const applyDiscount = function(price) {
  return price - 500;
};

// Arrow function
const updatePriceUI = (newPrice) => {
  document.getElementById("priceInfo").innerText =
    "Price: ₹" + newPrice;
};

const course = {
  name: "JavaScript",
  duration: "3 Months",
  available: true
};

console.log(course);

// Access
console.log(course.name);        // dot
console.log(course["duration"]); // bracket

course.updateAvailability = function () {
  this.available = !this.available;
  return this.available;
};

document.getElementById("loginBtn").addEventListener("click", function () {

  const user = prompt("Enter your name:");

  if (user) {
    alert("Welcome " + user);

    const confirmLogin = confirm("Do you want to continue?");
    if (confirmLogin) {
      showMessage("Login successful!");
    }
  }

});

document.getElementById("updateBtn").addEventListener("click", function () {
  const discountedPrice = applyDiscount(coursePrice);
  updatePriceUI(discountedPrice);
});

// Input event
document.getElementById("nameInput").addEventListener("input", function (e) {
  document.getElementById("liveName").innerText =
    "Hello " + e.target.value;
});

// Mouseover event
document.getElementById("courseInfo").addEventListener("mouseover", function () {
  this.style.color = "red";
});