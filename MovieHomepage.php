<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Bruce Metoyer, Udoka Ndolo, Gregory Walters, Kevin Eliasmejia">
    <meta name="description" content="This page contains multiple 
    websites along with information from tables such as
    actors, diretors, genre, and movie.">
    <title>BUGK Films</title>
    <link rel="icon" href="images/movie-logo-vector-19783450.jpg" type="image/x-icon">
    <link rel=" stylesheet" href="main.css" type="text/css">
</head>


<style>
    .poster {
        box-shadow: 0 0 15px blueviolet !important;

    }

    .buddy {
        cursor: pointer;
    }

    #scrollToTopButton {
        position: fixed;
        bottom: 40px;
        right: 25px;
        font-size: 25px;
        z-index: 99;
        width: 50px;
        height: 50px;
        background-color: blueviolet;
        color: black;
        border: none;
        cursor: pointer;
        outline: none;
        padding: 6px;
        border-radius: 50%;
    }

    #scrollToTopButton:hover,
    i:hover {
        background-color: white;
        color: blueviolet;
    }

    .navbar-nav {
        display: flex;
        align-items: center;
        padding: 0px 7.5px;
    }




    .maincontainer h3 {
        color: black;
        text-align: center;
    }

    .container {
        text-align: center;
    }

    #navbarNav.nav-item.nav-link a:hover {
        color: blueviolet;
    }

    .nav-link:hover {
        color: blueviolet;
    }

    .nav-item :hover {
        margin-bottom: 10px;


    }

    #header-nav .navbar-nav .nav-item .nav-link:hover {
        color: blueviolet;
        text-decoration: none;
        /* Remove underline */
        transition: color 0.3s ease, text-shadow 0.3s ease;
        /* Add transition effect */
        text-shadow: 0 0 10px blueviolet;
        /* Add glowing effect */
    }

    genres-list #Action {
        font-family: Arial, sans-serif;
        color: black;
        font-size: 30px;
    }
</style>

<body>
    <div class="container-fluid">
        <a class="navbar-brand" href="MovieHomepage.php"><img class="logo" src="images/movie-logo-vector-19783450.jpg" alt="" width="80" height="64"></a>
        <header>
            <h1>Welcome to BUGK Films!</h1>
            <marquee>Welcome To <i>BUGK Films</i>.com<sup>&reg;</sup></marquee>
            <label class="online">Stream Some of your favorite Movies Today!</label>
            <hr>

            <p>BUGK Films contains a large selection of some of your favorite movies! This selection of
                popular films provide movie titles and ratings along with crucial information from a database such as
                the actors in the movies, diretor of each movie and the genre of each movie.</p>
            <hr>
            <h1>Primary Navigation</h1>
            <h2>Genres</h2>
            <nav aria-label="primary navigation">
                <ul>
                    <li>
                        <a href="#Action" style="font-family: Arial, sans-serif; color: orange; font-size: 30px;">Action Films</a>
                    </li>
                    <li>
                        <a href="#Comedy" style="font-family: Arial, sans-serif; color: red; font-size: 30px;">Comedy Films</a>
                    </li>
                    <li>
                        <a href="#Science_Fiction" style="font-family: Arial, sans-serif; color: blue; font-size: 30px;">Science Fiction Films</a>
                    </li>
                    <li>
                        <a href="#Romance" style="font-family: Arial, sans-serif; color: pink; font-size: 30px;">Romance Films</a>
                    </li>
                    <li>
                        <a href="#Horror" style="font-family: Arial, sans-serif; color: red; font-size: 30px;">Horror Films</a>
                    </li>
                    <li>
                        <a href="#Thriller" style="font-family: Arial, sans-serif; color: red; font-size: 30px;">Thriller Films</a>
                    </li>
                    <li>
                        <a href="#Drama" style="font-family: Arial, sans-serif; color: red; font-size: 30px;">Drama Films</a>
                    </li>
                    <li>
                        <a href="#Adventure" style="font-family: Arial, sans-serif; color: purple; font-size: 30px;">Adventure Films</a>
                    </li>
                    <li>
                        <a href="#Mystery" style="font-family: Arial, sans-serif; color: magenta; font-size: 30px;">Mystery Films</a>
                    </li>
                    <li>
                        <a href="#Sports" style="font-family: Arial, sans-serif; color: cyan; font-size: 30px;">Sports Films</a>
                    </li>
                    <br>
                </ul>

                <h2>Additional Information</h2>
                <ul>
                    <li>
                        <a href="#Movie" style="font-family: Arial, sans-serif; color: black; font-size: 30px;">Movies</a>
                    </li>
                    <li>
                        <a href="#Poll" style="font-family: Arial, sans-serif; color: cyan; font-size: 30px;">Review Poll</a>
                    </li>
                    <li>
                        <a href="#Info" style="font-family: Arial, sans-serif; color: cyan; font-size: 30px;">SQL Information</a>
                    </li>
                </ul>
                <hr>

                <div class="buddy">

                    <div class="slider">
                        <div class="slide_track">

                            <div class="slide">
                                <img src="images/Dune2.jpg" alt="" />
                            </div>

                            <div class="slide">
                                <img src="images/kung_fu_panda_4.jpg" alt="" />
                            </div>
                            <div class="slide">
                                <img src="images/kong_godzilla.jpg" alt="" />
                            </div>
                            <div class="slide">
                                <img src="images/interstellar.jpg" alt="" />
                            </div>
                            <div class="slide">
                                <img src="images/civil_war.jpg" alt="" />
                            </div>
                            <div class="slide">
                                <img src="images/monkey_man.jpg" alt="" />
                            </div>
                            <div class="slide">
                                <img src="images/friday.jpg" alt="" />
                            </div>
                            <div class="slide">
                                <img src="images/the_notebook.jpg" alt="" />
                            </div>
                            <div class="slide">
                                <img src="images/the_conjuring.jpg" alt="" />
                            </div>
                            <div class="slide">
                                <img src="images/a_walk_to_remember.jpg" alt="" />
                            </div>
                            <div class="slide">
                                <img src="images/split.jpg" alt="" />
                            </div>
                            <div class="slide">
                                <img src="images/the_godfather.jpg" alt="" />
                            </div>
                            <div class="slide">
                                <img src="images/the_mummy.jpg" alt="" />
                            </div>
                            <div class="slide">
                                <img src="images/morder_on_the_orient_express.jpg" alt="" />
                            </div>
                            <div class="slide">
                                <img src="images/remember_the_titans.jpg" alt="" />
                            </div>
                            <div class="slide">
                                <img src="images/catwoman.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="maincontainer">

                    <article id="Movie">
                        <h2>Movies</h2>
                        <hr>
                        <div class="container">
                            <div id="movies" class="row"></div>
                        </div>
                        <div class="container" id="Movies">
                            <article id="Action">
                                <h3>Action</h3>
                                <hr>
                                <div class="poster">
                                    <div class="flip-card_i">
                                        <div class="flip-card-inner_i">
                                            <div class="flip-card-front_i">
                                                <img src="images/Dune2.jpg" alt="Avatar" style="width:250px;height:360px;">
                                            </div>
                                            <div class="flip-card-back_i">
                                                <h1>Dune: Part Two</h1>
                                                <button class="btn_i b3_i" title="Year" style="color:white">2010</button>
                                                <button class="btn_i b2_i" title="Minutes" style="color:white">2h42m<button>
                                                        <button class="btn_i b1_i" title="IMDb" style="color:white">8.8</button>
                                                        </span>
                                                        <br />
                                                        <br />
                                                        </p>

                                                        <p class="para_i">Paul Atreides unites with Chani and the Fremen while seeking revenge against the conspirators who destroyed his family.
                                                            Facing a choice between the love of his life and the fate of the universe, he must prevent a terrible future only he can foresee.</p>

                                                        <button class="trailer_i" type="submit" value="" onclick="openWin()">▶Trailer</button>
                                                        <script type="text/javascript">
                                                            function openWin() {
                                                                window.open("https://youtu.be/Way9Dexny3w?si=aKknZr31cL0Kh5CX", "_blank", "top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                                                            }
                                                        </script>
                                            </div>
                                        </div>
                                        <div class="flim">
                                            <b>Dune:Par Two</b><br>IMDb - 8.8
                                        </div>
                                    </div>
                                </div>
                            </article>
                    </article>

                    <h2>Movie Database Information</h2>
                    <article id="Info">
                        <?php include 'movieconnection.php'; ?>
                    </article>

                    <article id="Poll">
                        <h2>Review Poll</h2>
                        <p>Thank you for checking out our website! <br>
                            I hope you found out about a new movie today. <br>
                            Please tell me about your taste in films.
                        </p>
                        <form action="https://httpbin.org/get" method="get">
                            <fieldset>
                                <legend><strong>Personal Information</strong></legend>
                                <p>
                                    <label for="firstName">First Name:</label>
                                    <input type="text" name="firstName" id="firstName" placeholder="Bart" autocomplete="on" required>

                                </p>
                                <p>
                                    <label for="lastName">Last Name:</label>
                                    <input type="text" name="lastName" id="lastName" placeholder="Minty" autocomplete="on" required>

                                <p>
                                    <label for="favMovie">Favorite Movie:</label>
                                    <input type="text" name="favMovie" id="favMovie" list="favMovie-list" autocomplete="on" required>
                                    <datalist id="favMovie-list">
                                        <option value="Dune:Part Two">
                                        <option value="Kung Fu Panda 4">
                                        <option value="Godzilla x Kong: The New Empire">
                                        <option value="Interstellar">
                                        <option value="Civil War">
                                        <option value="Monkey Man">
                                        <option value="Friday">
                                        <option value="The Notebook">
                                        <option value="The Conjuring">
                                        <option value="A Walk to Rememeber">
                                        <option value="Split">
                                        <option value="The Godfather">
                                        <option value="The Mummy">
                                        <option value="Murder on the Orient Express">
                                        <option value="Remember the Titans">
                                        <option value="Catwoman">
                                        <option value="Other">
                                    </datalist>
                                </p>

                                <p>
                                    <label for="genre">Favorite Genre:</label>
                                    <input type="text" name="genre" id="genre" list="genre-list" autocomplete="on" required>
                                    <datalist id="genre-list">
                                        <option value="Action">
                                        <option value="Comedy">
                                        <option value="Science Fiction">
                                        <option value="Romance">
                                        <option value="Horror">
                                        <option value="Thriller">
                                        <option value="Drama">
                                        <option value="Adventure">
                                        <option value="Mystery">
                                        <option value="Sports">
                                        <option value="Other">
                                    </datalist>
                                </p>

                                <p>
                                    <label for="favdirector">Favorite Director:</label>
                                    <input type="text" name="favdirector" id="favdirector" list="favdirector-list" autocomplete="on" required>
                                    <datalist id="favdirector-list">
                                        <option value="Denis Villeneuve">
                                        <option value="Mike Mitchell">
                                        <option value="Adam Wingard">
                                        <option value="Christopher Nolan">
                                        <option value="Alex Garland">
                                        <option value="Dev Patel">
                                        <option value="Felix Gary Gary">
                                        <option value="Nick Cassavetes">
                                        <option value="James Wan">
                                        <option value="Adam Shankman">
                                        <option value="M.Night Shyamalan">
                                        <option value="Francis Ford Coppola">
                                        <option value="Stephen Sommers">
                                        <option value="Kenneth Branagh">
                                        <option value="Boaz Yakin">
                                        <option value="Pitof Comar">
                                        <option value="Other">
                                    </datalist>
                                </p>
                                <br>
                            </fieldset>

                            <fieldset>
                                <legend><strong>If Other</strong></legend>
                                <p>
                                    <label for="message">Favorite Movie:</label>
                                    <input type="text" name="favoriteMovie" id="favoriteSong" placeholder="Movie Name:">
                                </p>

                                <p>
                                    <label for="message">Favorite Genre:</label>
                                    <input type="text" name="favoriteGenre" id="favoriteGenre" placeholder="Genre Name:">
                                </p>

                                <p>
                                    <label for="message">Favorite Director:</label>
                                    <input type="text" name="favoritedirector" id="favoritedirector" placeholder="Director Name:">
                                </p>

                                <p>
                                    <label for="message">Favorite Actor:</label>
                                    <input type="text" name="favoriteActor" id="favoriteActor" placeholder="Actor Name:">
                                </p>
                                <br>

                            </fieldset>
                            <br>

                            <fieldset>
                                <legend><strong>How Would you Describe Your Taste in films?</strong></legend>
                                <label for="message">Your Response:</label>
                                <br>
                                <textarea name="message" id="message" cols="30" rows="10" placeholder="I would describe my taste in films as..."></textarea>
                            </fieldset>
                            <br>
                            <button type="submit">Submit</button>
                            <button type="reset">Reset</button>
                        </form>
                    </article>

                    </main>
                    <footer>
                        <p>
                            &copy;Bruce Metoyer, Udoka Ndolo, Gregory Walters, Kevin Eliasmejia
                        </p>
                        <p>
                            <a href="#">Back to Top</a>
                        </p>
                    </footer>
</body>

</html>
