<?php 
  // section variable lets us find which page is selected to show that it's selected on nav
  $section = "codepen";

  include("lib/inc/header.php");
?>

<main class="alltab">
  <div class="tab-container">
    <!--  use type radio so you can choose from one tab to another -->
    <input id="tab1" type="radio" name="tabs" checked>
    <label for="tab1">HTML Challenges</label>

    <input id="tab2" type="radio" name="tabs">
    <label for="tab2">Javascript Challenges </label>

    <input id="tab3" type="radio" name="tabs">
    <label for="tab3">CSS Challenges</label>

    <input id="tab4" type="radio" name="tabs">
    <label for="tab4">React Challenges</label>

    <input id="tab5" type="radio" name="tabs">
    <label for="tab5">PHP Challenges</label>

    <input id="tab6" type="radio" name="tabs">
    <label for="tab6">C# Challenges</label>

    <section id="content1">
      <ul>
        
        <li>
          <h2><a href="https://codepen.io/lesly2411/pen/dzyBKE?editors=1100" target="blank">HTML Form</a></h2>
          <p>Create an HTML form with a GET method that will collect the following: First Name, Last Name, Gender (have them pick), Favorite sport (from a dropdown list of at least 5), Checkboxes for what you like on your pizza (from a list of at least 5) and the submit button should read, "Save".</p>
        </li>

        <li>
          <h2><a href="https://codepen.io/lesly2411/pen/XamNrO?editors=1100" target="blank">Navigation Bar</a></h2>
          <p>Create a horizontal navigation of 5 items, one of the items should have a dropdown menu when you hover over it.</p>
        </li>
     
        <li>
          <h2><a href="https://codepen.io/lesly2411/pen/brdrxo?editors=1111" target="blank">Name List</a></h2>
          <p>Given a comma separated string of full names, use JavaScript to create an alphabetical-by-Last-Name, ordered list and have it display in HTML. Make the last names bold and red using CSS (NOT inline styles).</p>
        </li>
      </ul>
    </section>

    <section id="content2">
      <ul>

        <li>
          <h2><a href="https://codepen.io/lesly2411/pen/MoMgPX" target="blank">Sentence Counter</a></h2>
          <p>In this challenge, you will use the same functionality from the medium challenge. You will need a total of 6 animals and 6 colors. Instead of having the animals and colors matching by first letter, they will need to be completely random. Create a string, similar to the medium challenge, and measure its length. Compare the length of all the strings to find out which has the most number of characters. Console log this sentence out with the number of characters it contains.</p>
        </li>

        <li>
          <h2><a href="https://codepen.io/lesly2411/pen/dzVzGm?editors=1111" target="blank">Create a Visitor Tag</a></h2>
          <p>Create an application that creates customized visitor tags. When the app loads, show a form that asks for first name, last name and company. First name and Last name are required. Have a fourth question that asks what color visitor tag the user would like: red, blue, or green. Default to blue.</p>
        </li>

        <li>
          <h2><a href="https://codepen.io/lesly2411/pen/dRBJqK" target="blank">Movie Object Constructor</a></h2>
          <p>Create an object constructor for movies that includes properties for title, director, writer, release date, and rating. Include a trailer() method that prints “[movie name], written by [writer] and directed by [director], will be released on [release date].” Include an audience() method that prints “For audiences above the age of 16.” if the rating is R, “For audiences above the age of 12.” if the rating is PG-13, “Parental guidance suggested” if the rating is PG, and “For general audiences.” if the rating is G.</p>
        </li>
      </ul>
    </section>
    <section id="content3">
      <ul>
        <li>
          <h2><a href="https://codepen.io/lesly2411/pen/LjyXGO?editors=1100" target="blank">Mock Website Layout</a></h2>
          <p>Using what you know about the box model and positioning, build out what you see in the image provided. The background color is #777. Add whatever text you want instead of the placeholders. Add an image for the "large box". Make sure the masthead sticks to the top of the page when you scroll down.</p>
        </li>
        <li>
          <h2><a href="https://codepen.io/lesly2411/pen/LjyXGO?editors=1100" target="blank">Color Wheel</a></h2>
          <p>Recreate the pie chart in the picture provided.</p>
        </li>
        <li>
          <h2><a href="https://codepen.io/lesly2411/pen/wqJGPN" target="blank">Layout Challenge</a></h2>
          <p>Using the HTML in the codepen link below, fork, recreate and save the following patterns. You may not alter the HTML in any way and you may not pull in outside images or resources. These should be solved entirely in CSS.</p>
        </li>
      </ul>
    </section>

    <section id="content4">
      <ul>
        <li>
          <h2><a href="http://lperez.road2hire.ninja/commentApp/" target="blank">Comment App</a></h2>
          <p>Build an application that allows you to comment and reply. Also be able to like and dislike the comments and replies.</p>
        </li>
        <li>
          <h2><a href="http://lperez.road2hire.ninja/guessinggame/" target="blank">Guessing Game</a></h2>
          <p>Build an application that allows the user to choose a game type and guess a random number. The game should keep track of the number of guesses it takes the user to guess the right number and their highscore. Alert the user when they win and when they beat their highscore.</p>
        </li>
        <li>
          <h2><a href="http://lperez.road2hire.ninja/teamsapp/" target="blank">Switch Teams App</a></h2>
          <p>Create an app that allows you to dynamically add new players and place them on different teams. Also allow them to put the players back on an unassigned list.</p>
        </li>
      </ul>
    </section>

    <section id="content5">
      <ul>
        <li>
          <h2><a href="http://lperez.road2hire.ninja/phpFinal/phpFinal" target="blank">Ecommerce Website</a></h2>
          <p>Create an ecommerce website by using PHP and a Mysql database. The products should be mainstream and professional. There should be a Home, Products, Products Details, Search, And Contact page. </p>
        </li>
        <li>
          <h2><a href="http://lperez.road2hire.ninja/mysqlChallengesRepo/mysqlChallenges/challenge2.php" target="blank">Create Products Table</a></h2>
          <p>Create a MySQL table that holds a list of products (name, description, price, color). Create a form that allows users to select a color. When they submit the color choice, display all products that are that color. Bonus if you can dynamically generate the color choices in the form from all of the unique color options in the database.</p>
        </li>

      </ul>
    </section>

    <section id="content6">
      <ul>
        <li>
          <h2>Coming Soon</h2>
        </li>
      </ul>
    </section>

  </div> <!-- end tab container -->
</main> <!-- end alltab  -->

 <?php include("./lib/inc/footer.php"); ?>