// ============================
// 1. VARIABLES
// ============================

// const variable
const userName = "Anil";

// let variable
let experience = 1;

// Display variables in DOM
document.getElementById("userRole").textContent =
"User Name: " + userName;

document.getElementById("experience").textContent =
"Experience: " + experience + " year";

// reassignment using let
experience = experience + 1;

// log values in console
console.log("User:", userName);
console.log("Experience:", experience);

// const reassignment test (do not run)
// userName = "New Name";



// ============================
// 2. FUNCTIONS
// ============================

// Function Declaration
function updateExperience() {
    experience++;
    showExperience();
}

// Function Expression
const showExperience = function() {
    document.getElementById("experience").textContent =
    "Experience: " + experience + " years";
};

// Arrow Function
const greeting = (name) => {
    return "Hello " + name;
};



// ============================
// 3. OBJECT
// ============================

const profile = {
    name: "Anil",
    role: "Web Developer",
    courses: 3,

    // ============================
    // 4. METHOD
    // ============================

    addCourse: function() {
        this.courses++;
        return this.courses;
    }
};

// Dot notation
console.log(profile.name);

// Bracket notation
console.log(profile["role"]);

// Display object data
document.getElementById("profileData").textContent =
"Name: " + profile.name +
", Role: " + profile.role +
", Courses: " + profile.courses;

// Log object
console.log(profile);



// ============================
// 5. POPUP BOXES
// ============================

function showPopup() {

    alert("Welcome to LMS Website");

    let userInput = prompt("Enter your name");

    let confirmAction = confirm("Do you want to continue?");

    if (confirmAction) {
        document.getElementById("liveGreeting").textContent =
        "Hello " + userInput;
    } else {
        document.getElementById("liveGreeting").textContent =
        "Action Cancelled";
    }

}



// ============================
// 6. EVENTS
// ============================

// Click Event
document.getElementById("updateExperienceBtn")
.addEventListener("click", function() {

    updateExperience();
    alert("Experience Updated!");

});

// Method Trigger Event
document.getElementById("showProfileBtn")
.addEventListener("click", function() {

    profile.addCourse();

    document.getElementById("profileData").textContent =
    "Name: " + profile.name +
    ", Role: " + profile.role +
    ", Courses: " + profile.courses;

});


// Input Event
document.getElementById("nameInput")
.addEventListener("input", function(e) {

    document.getElementById("liveGreeting").textContent =
    greeting(e.target.value);

});


// Mouseover Event
document.getElementById("showProfileBtn")
.addEventListener("mouseover", function() {

    this.style.backgroundColor = "orange";

});