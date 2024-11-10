<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        

        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <nav>
    <div class="logo"><img src="images/ROAMIA.png"></div>
    <ul>
      <li><a href="#search">Discover</a></li>
      <li><a href="#about">About Us</a></li>
      <li><a href="#" id="registerButton">Register</a></li>
      <li><a href="#" id="signInButton">Sign In</a></li>
      <li id="profileMenu" style="display: none;">
        <img src="profile-icon.png" alt="Profile" id="profileIcon" class="profile-icon">
        <ul id="profileDropdown" class="dropdown-content">
          <li><a href="#" id="profileLink">Profile</a></li>
          <li><a href="#" id="profileLogoutButton">Logout</a></li>
        </ul>
      </li>
    </ul>
  </nav>
    
    <div id="userProfile" style="display: none;">
      <h2>User Profile</h2>
      <img src="profile-picture.png" alt="User Picture" id="profilePicture" class="profile-picture">
      <p id="profileUsername"></p>
      <p id="profileEmail"></p>
    </div>
    
    
    <div id="registerModal" class="modal">
      <div class="modal-content">
        <span class="close" id="closeRegisterModal">&times;</span>
        <h2>Register</h2>
        <form id="registerForm">
          <input type="text" id="regUsername" placeholder="Username" required>
          <input type="email" id="regEmail" placeholder="Email" required>
          <input type="password" id="regPassword" placeholder="Password" required>
          <button type="submit">Register</button>
        </form>
        <p id="registerMessage"></p>
      </div>
    </div>
    
    
    <div id="signInModal" class="modal">
      <div class="modal-content">
        <span class="close" id="closeModal">&times;</span>
        <h2>Sign In</h2>
        <form id="signInForm">
          <input type="text" id="username" placeholder="Username or Email" required>
          <input type="password" id="password" placeholder="Password" required>
          <button type="submit">Sign In</button>
        </form>
        <p id="signInMessage"></p>
      </div>
    </div>
    
   
    <div id="userProfile" style="display: none;">
      <h2>User Profile</h2>
      <p id="profileUsername"></p>
      <p id="profileEmail"></p>
      <button id="profileLogoutButton">Logout</button>
    </div>
  
  
<section class="search-section" id="search">
  <h1>Your Adventure Starts Here</h1>
  <p>Discover unforgettable journeys with our unique themed vehicles</p>

  
  <div class="search-form">
    <input type="text" placeholder="Enter destination">
    <input type="date">
    <input type="number" min="1" max="10" placeholder="People">
    <button onclick="searchDestinations()">Search</button>
  </div>
</section>

  
  <section class="description" id="about">
    <h2>About Us</h2>
    <p>We offer unique experiences with themed vehicles to make your trips memorable. Explore historic cities or modern wonders with style!</p>
  </section>

  
  <section class="vehicles">
    <h2>Our Best Themed Vehicles</h2>
    <div class="vehicle-grid">
      <div class="vehicle">
        <img src="{{ asset('images/london_vintagebus.jpeg') }}" alt="Vintage Bus">
        <p>Vintage Bus</p>
      </div>
      <div class="vehicle">
        <img src="images/rickshaw.jpg" alt="Futuristic Car">
        <p>Rickshaw</p>
      </div>
      <div class="vehicle">
        <img src="images/london_futuristiccar.jpg" alt="Safari Truck">
        <p>Futuristic Car</p>
      </div>
    </div>
  </section>

  
  <footer>
    <p>&copy; 2024 ROAMIA. All rights reserved.</p>
  </footer>

  <script >
   function searchDestinations() { 
  const destination = document.querySelector('.search-form input[type="text"]').value.trim().toLowerCase();
  const date = document.querySelector('.search-form input[type="date"]').value;
  const people = document.querySelector('.search-form input[type="number"]').value;

  const destinations = {
    london: 'london',
    france: 'france',
    japan: 'japan',
    australia: 'australia',
    usa: 'usa',
    italy: 'italy'
  };

  if (destinations[destination]) {
    // Redirect to the corresponding destination route
    window.location.href = `/destination/${destinations[destination]}?date=${date}&people=${people}`;
  } else {
    // Handle unknown destinations
    generateDestinationPage(destination, date, people);
  }
}

function generateDestinationPage(destination, date, people) {
  // Log values for now
  console.log(`Generated page for: ${destination}, Date: ${date}, People: ${people}`);

  // You can add logic here to generate a new destination page dynamically
  alert(`Sorry, no predefined page for ${destination}. \nDate: ${date} \nPeople: ${people}`);
}

function generateDestinationPage(destination) {
  // Create new content for the destination page
  const destinationName = destination.charAt(0).toUpperCase() + destination.slice(1);
  const pageContent = `
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>${destinationName} Trips - Themed Travel</title>
      <link rel="stylesheet" href="dynamic-pages.css">
    </head>
    <body>
      <header>
        <h1>Explore ${destinationName} with Our Themed Vehicles</h1>
        <p>Select from a variety of unique themed vehicles for your ${destinationName} adventure.</p>
      </header>
      <section class="trips">
        <div class="trip">
          <img src="images/placeholder_vehicle.jpg" alt="Placeholder Vehicle">
          <h3>${destinationName} City Tour</h3>
          <p>Discover the wonders of ${destinationName} with our themed vehicles. More trips coming soon!</p>
          <p><strong>Price:</strong> $200</p>
        </div>
      </section>
      <footer>
        <p>&copy; 2024 Themed Travel. All rights reserved.</p>
      </footer>
    </body>
    </html>
  `;

  // Create a new Blob for the dynamically generated page
  const blob = new Blob([pageContent], { type: 'text/html' });
  const url = URL.createObjectURL(blob);

  // Open the dynamically generated page in a new tab
  window.open(url, '_blank');
}





// Variables for modals
const registerButton = document.getElementById('registerButton');
const registerModal = document.getElementById('registerModal');
const closeRegisterModal = document.getElementById('closeRegisterModal');
const signInButton = document.getElementById('signInButton');
const signInModal = document.getElementById('signInModal');
const closeModal = document.getElementById('closeModal');

// Variables for profile menu and dropdown
const profileMenu = document.getElementById('profileMenu');
const profileIcon = document.getElementById('profileIcon');
const profileDropdown = document.getElementById('profileDropdown');
const profileLink = document.getElementById('profileLink');
const profileLogoutButton = document.getElementById('profileLogoutButton');

// Variables for user profile
const userProfile = document.getElementById('userProfile');
const profileUsername = document.getElementById('profileUsername');
const profileEmail = document.getElementById('profileEmail');
const profilePicture = document.getElementById('profilePicture');

// Register/Sign In/Logout Buttons
const logoutButton = document.getElementById('logoutButton');

// Open/Close Register Modal
registerButton.addEventListener('click', () => {
  registerModal.style.display = 'block';
});
closeRegisterModal.addEventListener('click', () => {
  registerModal.style.display = 'none';
});

// Open/Close Sign In Modal
signInButton.addEventListener('click', () => {
  signInModal.style.display = 'block';
});
closeModal.addEventListener('click', () => {
  signInModal.style.display = 'none';
});

// Close modal when clicking outside of modal content
window.onclick = function(event) {
  if (event.target === registerModal) {
    registerModal.style.display = "none";
  } else if (event.target === signInModal) {
    signInModal.style.display = "none";
  }
};

// Profile Menu - Show Profile Dropdown on Click
profileIcon.addEventListener('click', () => {
  profileDropdown.classList.toggle('show');
});

// Show user profile after successful login
function showUserProfile(username, email, profilePic) {
  document.getElementById('registerButton').style.display = 'none';
  document.getElementById('signInButton').style.display = 'none';
  document.getElementById('profileMenu').style.display = 'inline-block';
  document.getElementById('logoutButton').style.display = 'inline';

  // Update profile with user details
  profileUsername.textContent = `Username: ${username}`;
  profileEmail.textContent = `Email: ${email}`;
  profilePicture.src = profilePic;  // Set profile picture

  // Show user profile and hide dropdown menu
  userProfile.style.display = 'block';
  profileDropdown.style.display = 'none'; 
}

// Handle Registration Form Submission
document.getElementById('registerForm').addEventListener('submit', function(event) {
  event.preventDefault();

  const username = document.getElementById('regUsername').value.trim();
  const email = document.getElementById('regEmail').value.trim();
  const password = document.getElementById('regPassword').value.trim();

  // Simulate saving user info to localStorage
  if (username && email && password) {
    const user = {
      username: username,
      email: email,
      password: password,
      profilePic: "profile-picture.png"  // Placeholder for profile picture
    };
    localStorage.setItem('user', JSON.stringify(user)); // Store user data

    showUserProfile(username, email, user.profilePic);
  } else {
    alert("Please fill in all fields.");
  }
});

// Handle Sign In Form Submission
document.getElementById('signInForm').addEventListener('submit', function(event) {
  event.preventDefault();

  const usernameOrEmail = document.getElementById('username').value.trim();
  const password = document.getElementById('password').value.trim();

  // Retrieve stored user data from localStorage
  const storedUser = JSON.parse(localStorage.getItem('user'));

  if (storedUser && (storedUser.username === usernameOrEmail || storedUser.email === usernameOrEmail) && storedUser.password === password) {
    showUserProfile(storedUser.username, storedUser.email, storedUser.profilePic);
  } else {
    alert("Invalid credentials. Please try again.");
  }
});

// Handle Logout
profileLogoutButton.addEventListener('click', () => {
  localStorage.removeItem('user');
  alert("You have logged out.");

  // Reset the interface to show registration and sign-in options
  document.getElementById('registerButton').style.display = 'inline';
  document.getElementById('signInButton').style.display = 'inline';
  document.getElementById('profileMenu').style.display = 'none';
  document.getElementById('logoutButton').style.display = 'none';
  userProfile.style.display = 'none';
});


  </script>
  
<style>
    
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family:Roboto;
  background-color: #e9e9e9;
  color: #333;
}

/* Main color palette */
:root {
  --main-white: #ececec;
  --light-pink: #ffc4d3;
  --pink: #ff6b6b;
}

header {
  background-color: #fff;
  color: #ff749d; 
  text-align: center;
  padding: 20px;
  border-bottom: 3px solid #ffc4d3; 
}

h1 {
  font-size: 2.5em;
  color: #ff749d; 
}

h2 {
  font-size: 2em;
  margin: 20px 0;
  color: #ff749d;
}

p {
  font-size: 1.1em;
  margin: 10px 0;
}

/* Navigation menu */
nav {
  display: flex;
  font-family: Roboto;
  justify-content: space-between;
  align-items: center;
  background-color: #ffc4d3;
  padding: 10px 20px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.logo img{
  height: 70%;
  width: 57px;
}
nav ul {
  display: flex;
  list-style: none;
}

nav ul li {
  margin: 0 15px;
}

nav ul li a {
  text-decoration: none;
  color: #ff749d;
  font-size: 1.5rem;
}

nav ul li a:hover {
  color: #ffffff;
}

nav .profile {
  display: flex;
  align-items: center;
  cursor: pointer;
}

nav .profile img {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  border: 2px solid var(--pink);
  margin-right: 10px;
}

nav .profile span {
  font-size: 1.1rem;
  color: #333;
}

nav .profile:hover span {
  color: var(--pink);
}
button {
  padding: 10px 20px;
  background-color: #ff749d;
  border: none;
  color: white;
  font-size: 1em;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button:hover {
  background-color: #ff749d;
}

#userProfile {
  display: none;
  text-align: center;
  padding: 20px;
  background-color: var(--main-white);
  margin: 20px auto;
  width: 80%;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

#userProfile h2 {
  color: var(--pink);
}

#userProfile p {
  margin: 10px 0;
  font-size: 1.1em;
}

#profileLogoutButton {
  padding: 10px 20px;
  background-color: var(--pink);
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

#profileLogoutButton:hover {
  background-color: #ff4a4a;
}


.search-section {
  background-image: url('images/sakura.jpeg'); 
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  height: 900px;
  padding: 100px 20px;
  position: relative;
  text-align: center;
  color: white;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.search-section::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5); 
  z-index: 0;
}

.search-section h1,
.search-section p,
.search-section .search-form {
  position: relative;
  z-index: 1; /* Ensure text is above the overlay */
}

.search-section h1 {
  font-size: 3rem;
  font-weight: bold;
  margin-bottom: 20px;
}

.search-section p {
  font-size: 1.5rem;
  margin-bottom: 40px;
}

.search-section .search-form {
  display: flex;
  justify-content: center;
  gap: 15px;
  flex-wrap: wrap;
}

.search-section input,
.search-section button {
  padding: 15px;
  font-size: 1.2rem;
  border-radius: 10px;
  border: none;
}

.search-section input {
  background-color: rgba(255, 255, 255, 0.8); /* Transparent background for inputs */
}

.search-section button {
  background-color: #ff749d;
  color: white;
  cursor: pointer;
}

.search-section button:hover {
  background-color: #fc5d8d;
}

/* About us section */
.description {
  text-align: center;
  padding: 50px 20px;
  background-color: var(--main-white);
}

.description h2 {
  font-size: 2rem;
  margin-bottom: 20px;
}

.description p {
  font-size: 1.1rem;
  max-width: 600px;
  margin: 0 auto;
  line-height: 1.6;
}

/* Vehicles section */
.vehicles {
  background-color: var(--light-pink);
  padding: 40px 20px;
  text-align: center;
}

.vehicle-grid {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  margin-top: 20px;
}

.vehicle {
  background-color: var(--main-white);
  padding: 20px;
  margin: 10px;
  border-radius: 10px;
  width: 300px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease;
}

.vehicle img {
  max-width: 100%;
  border-radius: 10px;
}

.vehicle p {
  font-size: 1.2em;
  color: #333;
  margin-top: 10px;
}

.vehicle:hover {
  transform: translateY(-10px);
}

/* Footer */
footer {
  background-color: #333;
  color: white;
  text-align: center;
  padding: 20px 0;
}

footer p {
  margin: 0;
}
/*London styles
*/

/* Trip Grid */
.trip-grid {
  display: flex;
  gap: 20px;
  flex-wrap: wrap;
  justify-content: center;
  margin: 20px 0;
}

.trip {
  border: 2px solid lightpink;
  border-radius: 10px;
  padding: 15px;
  width: 300px;
  text-align: center;
}

.trip img {
  width: 100%;
  height: 200px; 
  object-fit: cover; 
  border-radius: 5px;
}
.vehicle img{
  width: 100%;
  height: 200px; 
  object-fit: cover; 
  border-radius: 5px;
}
.trip h3 {
  color: lightpink;
  margin: 10px 0;
}

.trip p {
  margin: 10px 0;
}

button {
  padding: 10px 20px;
  background-color: pink;
  border: none;
  color: white;
  cursor: pointer;
  border-radius: 5px;
}

button:hover {
  background-color: #ff4d88;
}

/* Stacked Layout */
.trip {
  border: 2px solid lightpink;
  border-radius: 10px;
  padding: 15px;
  margin-bottom: 20px; 
  width: 100%; 
  text-align: center;
}

.trip img {
  width: 100%;
  max-width: 500px; 
  height: 200px; 
  object-fit: cover; 
  border-radius: 5px;
  margin-bottom: 10px;
}

.trip h3 {
  color: lightpink;
  margin: 10px 0;
}

.trip p {
  margin: 10px 0;
}

button {
  padding: 10px 20px;
  background-color: pink;
  border: none;
  color: white;
  cursor: pointer;
  border-radius: 5px;
}

button:hover {
  background-color: #ff4d88;
}

/* Trip Pages */
.trips {
  padding: 40px 20px;
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
  gap: 20px;
}

.trip {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  padding: 20px;
  text-align: center;
  transition: transform 0.3s ease;
}

.trip img {
  width: 100%;
  height: 200px; 
  object-fit: cover;
  border-radius: 10px;
}

.trip:hover {
  transform: translateY(-10px);
}

.trip h3 {
  font-size: 1.5em;
  margin: 10px 0;
  color: lightpink;
}

.trip p {
  font-size: 1.1em;
  color: #666;
  margin-bottom: 10px;
}

/* Footer */
footer {
  background-color: #ff749d;
  color: white;
  text-align: center;
  padding: 20px;
}

footer p {
  font-size: 1em;
}

/* Form Styles */
form {
  margin: 20px 0;
  padding: 20px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

form label {
  display: block;
  margin: 10px 0 5px;
  color: #333;
  font-size: 1.1em;
}

form input {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 2px solid #ff749d;
  border-radius: 5px;
}

form button {
  display: inline-block;
  width: 100%;
  padding: 10px;
  background-color: #ff749d;
  color: white;
  font-size: 1.1em;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

form button:hover {
  background-color: #e65384;
}

/* Modal Styling */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.5);
}

.modal-content {
  background-color: var(--main-white);
  margin: 10% auto;
  padding: 20px;
  border-radius: 10px;
  width: 300px;
  text-align: center;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.modal-content h2 {
  margin-bottom: 20px;
  color: var(--pink);
}

.modal-content input {
  width: 100%;
  padding: 10px;
  margin: 10px 0;
  border: 2px solid #ff749d;
  border-radius: 5px;
}

.modal-content button {
  background-color: var(--pink);
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.modal-content button:hover {
  background-color: #e65384;
}

.modal-close {
  cursor: pointer;
  color: #ff749d;
  font-size: 20px;
  position: absolute;
  top: 10px;
  right: 10px;
}
</style>
    </body>
</html>
