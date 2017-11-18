# Blood Donation Webapp
A basic web application made using PHP and MySQL for establishing a link between donors and hospitals.

Life is the most valuable thing to all of mankind, be it our own or our loved ones'. A very prevalent but preventable reason for deaths today is the lack of availability of blood at the necessary moment. Our project looks towards providing a helping hand to this problem by providing the following features:
<ol>
  <li>	For a donor, we provide an online registration form so that they would spend the least amount of time on technical procedures during donation, a list of hospitals so that they can navigate to the one closest to them. Our contact details allow them to make an appointment before arriving as well. </li>
  <li>	Allow hospitals to register with us and have an account. This provides them with easy access, especially in times of emergency, to a common database of all the donors that we receive. </li>
  <li>	In addition to the donation process itself our website also provide donors with all the information they will need about blood donation from how they know if they can donate, along with a simple eligibility quiz, to a walkthrough of the entire process itself. </li>
  <li>	Our site also displays stories of people whose lives were saved from blood donation. </li>
</ol>

We used the Apache server, and MySQL database to host our web app. </br>
Note: We did not use any plugins for Javascript and CSS.

# How to use
<ol>
  <li>  Clone the repository </li>
  <li>  Place the folder in your server's root directory </li>
  <li>  Create an SQL database with the following tables
    <ul>
      <li> donors
        <ul>
          <li> name </li>
          <li> blood </li>
          <li> phone </li>
          <li> email </li>
          <li> age </li>
          <li> address </li>
        </ul>
      </li>
      <li> hospitals
        <ul>
          <li> username </li>
          <li> password </li>
          <li> name </li>
          <li> email </li>
          <li> address </li>
        </ul>
      </li>
    </ul>
  </li>
</ol>

# Version
1.0.1
