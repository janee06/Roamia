<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>USA Trips - Themed Travel</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
  <header style="display: flex; align-items: center; justify-content: space-between;">
    <div >
      <button onclick="window.history.back();" style="padding: 10px 20px; font-size: 1.2rem; border-radius: 5px; border: none; background-color: #ff749d; color: white; cursor: pointer;">
        Back
      </button>
    </div>
    <div style="text-align: center; flex: 2;">
      <h1>Explore the USA with Our Themed Vehicles</h1>
      <p>Select from a variety of unique themed vehicles for your USA adventure.</p>
    </div>
  </header>

  <section class="trips">
    <!-- Trip 1 -->
    <div class="trip">
      <img src="images/mustang_drive.jpg" alt="Classic Mustang">
      <h3>Classic Mustang Road Trip</h3>
      <p>Drive the iconic Route 66 in a classic Ford Mustang, exploring the heart of America’s highways.</p>
      <p><strong>Price:</strong> $500 USD</p>
      <a href="usa_trip/mustang_drive.html"><button>More Info & Book</button></a>
    </div>

    <!-- Trip 2 -->
    <div class="trip">
      <img src="images/cowboy_horse.jpg" alt="Cowboy Horseback">
      <h3>Cowboy Horseback Adventure</h3>
      <p>Ride horseback through the rugged landscapes of the American Southwest, just like a real cowboy.</p>
      <p><strong>Price:</strong> $300 USD</p>
      <a href="usa_trip/cowboy_horse.html"><button>More Info & Book</button></a>
    </div>

    <!-- Trip 3 -->
    <div class="trip">
      <img src="images/nyc_helicopter.jpg" alt="NYC Helicopter">
      <h3>New York City Helicopter Tour</h3>
      <p>Fly above the iconic skyline of New York City and see the Statue of Liberty, Empire State Building, and more.</p>
      <p><strong>Price:</strong> $800 USD</p>
      <a href="usa_trip/nyc_helicopter.html"><button>More Info & Book</button></a>
    </div>

    <!-- Trip 4 -->
    <div class="trip">
      <img src="images/rv_grand_canyon.jpg" alt="RV Tour">
      <h3>Grand Canyon RV Road Trip</h3>
      <p>Experience the beauty of the Grand Canyon and nearby national parks from the comfort of an RV.</p>
      <p><strong>Price:</strong> $1200 USD</p>
      <a href="usa_trip/rv_grand_canyon.html"><button>More Info & Book</button></a>
    </div>

    <!-- Trip 5 -->
    <div class="trip">
      <img src="images/segway_dc.jpg" alt="Segway DC">
      <h3>Washington DC Segway Tour</h3>
      <p>Explore the historical landmarks of the nation’s capital on a fun and informative Segway tour.</p>
      <p><strong>Price:</strong> $180 USD</p>
      <a href="usa_trip/segway_dc.html"><button>More Info & Book</button></a>
    </div>
  </section>

  <footer>
    <p>&copy; 2024 ROAMIA. All rights reserved.</p>
  </footer>
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