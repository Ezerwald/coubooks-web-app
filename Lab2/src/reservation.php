<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>CouBooks reservation page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class = "main-wrapper">
    <div class = "round-container blue-container">
        <header>
            <div class = "logo">
                <h1>COUBOOKS</h1>
                <h2>A WEBTECH DEMO SITE</h2>
            </div>

            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="courses.php">Courses</a></li>
                    <li><a href="reservation.html"><em>Reservation</em></a></li>
                    <li><a href="about.php">About</a></li>
                </ul>
            </nav>
        </header>
    </div>

    <div class = "main-section round-container white-container">
        <div class="reservation-wizard">
            <section class = "wizard-step">
                <div class="step-header">
                    <h1>STEP 1: Who are you?</h1>
                    <h2>Please provide some info about you, so we can reach for the books you need...</h2>
                </div>
                <form>
                    <div class="form-group">
                        <label for="phase"> Phase: </label>
                        <select name="phase" id="phase">
                            <option value="bachelor"> Bachelor </option>
                            <option value="master"> Master </option>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email">
                    </div>
                    <br>
                    <button> Next </button>
                </form>
            </section>

            <section class = "wizard-step">
                <div class="step-header">
                    <h1>STEP 2: What books do you need?</h1>
                    <h2>Select the books you whish to order...</h2>
                </div>
                <form>
                    <div class="form-group">
                        <ul>
                            <li>
                                <input type="checkbox" id="computer-networking-checkbox">
                                <label for="computer-networking-checkbox">Computer networking: a top-down approach</label>
                            </li>
                            <li>
                                <input type="checkbox" id="operating-systems-checkbox">
                                <label for="operating-systems-checkbox">Operating systems</label>
                            </li>
                        </ul>
                    </div>
                    <br>
                    <button> Next </button>
                </form>
            </section>

            <section class = "wizard-step confirm-reservation">
                <div class="step-header">
                    <h1>You have ordered</h1>
                    <h2>Below you can find the list of books you have reserved.
                        Once you confirm your reservation you can pick them up at our KD and pay at the desk</h2>
                </div>
                <form>
                    <ul>
                        <li>Computer networking: a top-down approach</li>
                    </ul>
                    <br>
                    <button> Confirm Reservation </button>
                </form>
            </section>
        </div>
    </div>

    <footer class = "round-container blue-container">
        <p>Copyright @ 2022 WebTech. KUL All Rights Reserved.</p>
        <a>Privacy Policy</a> <p>|</p> <a>Terms of Use</a>
    </footer>
</div>
</body>
</html>