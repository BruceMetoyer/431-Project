<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Bruce Metoyer, Udoka Ndolo, Gregory Walters, Kevin Elias-Mejia">
    <meta name="description" content="This page contains multiple 
    websites along with information from tables such as
    actors, diretors, genre, and movie.">
    <title>BUGK Films</title>
    <link rel="icon" href="images/movie-logo-vector-19783450.jpg" type="image/x-icon">
    <link rel=" stylesheet" href="main.css" type="text/css">
</head>

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
        </header>
        <h1>Primary Navigation</h1>
        <h2>Genres</h2>
        <nav aria-label="primary navigation">
            <ul>
                <li>
                    <a href="#Action">Action Films</a>
                </li>
                <li>
                    <a href=" #Comedy">Comedy Films</a>
                </li>
                <li>
                    <a href="#Science_Fiction">Science Fiction Films</a>
                </li>
                <li>
                    <a href="#Romance">Romance Films</a>
                </li>
                <li>
                    <a href="#Horror">Horror Films</a>
                </li>
                <li>
                    <a href="#Thriller">Thriller Films</a>
                </li>
                <li>
                    <a href="#Drama">Drama Films</a>
                </li>
                <li>
                    <a href="#Adventure">Adventure Films</a>
                </li>
                <li>
                    <a href="#Mystery">Mystery Films</a>
                </li>
                <li>
                    <a href="#Sports">Sports Films</a>
                </li>
                <br>
            </ul>

            <h2>Additional Information</h2>
            <ul>
                <li>
                    <a href="#Movie">Movies</a>
                </li>
                <li>
                    <a href="#Poll">Review Poll</a>
                </li>
                <h2>Movie Database Information</h2>
                <li>
                    <a href="movieconnection.php" target="_blank">Open SQL Movie Database Information</a>
                </li>
                </article>
            </ul>
            <hr>

            <article id="Movie">
                <h2>Movies</h2>
                <hr>
                <div class="container" id="Movies">
                    <article id="Action">
                        <center>
                            <h3>Action</h3>
                        </center>
                        <hr>
                        <h1>Kung Fu Panda 4</h1>
                        <center>
                            <img src="images/kung_fu_panda_4.jpg" alt="Avatar" style="width:550px;height:760px;">
                        </center>
                </div>
                <center>
                    <button class="btn_i b3_i" title="Year" style="color:black">2024</button>
                    <button class="btn_i b2_i" title="Minutes" style="color:black">2h46m<button>
                            <button class="btn_i b1_i" title="IMDb" style="color:black">4.6</button>
                            </span>
                </center>
                </p>
                <p class="para_i">Po must train a new warrior when he's chosen to become the spiritual
                    leader of the Valley of Peace. However, when a powerful
                    shape-shifting sorceress sets her eyes on his Staff of Wisdom,
                    he suddenly realizes he's going to need some help. Teaming up with a
                    quick-witted corsac fox, Po soon discovers that heroes can be found in the most
                    unexpected places.</p>
                <button class="trailer_i" type="submit" value="" onclick="openWin()">▶Trailer</button>
                <script type="text/javascript">
                    function openWin() {
                        window.open("https://youtu.be/_inKs4eeHiI?si=Snenp2id29OUwaA-", "_blank", "top=100,left=250,height=400,width=600,channelmode=yes,fullscreen=yes,menubar=no,toolbar=no,location=no,status=no,scrollbars=no,noopener=no");
                    }
                </script>
                <hr>

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
                        &copy;Bruce Metoyer, Udoka Ndolo, Gregory Walters, Kevin Elias-Mejia
                    </p>
                    <p>
                        <a href="#">Back to Top</a>
                    </p>
                </footer>
</body>

</html>
