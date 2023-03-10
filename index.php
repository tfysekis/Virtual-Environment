<?php
    session_start();
    if(!$_SESSION["Loginname"]){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="el">
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Αρχική Σελίδα</title>
        <style>
            .login-but:hover {
                box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
            }

            .login-but {
                background-color: #4CAF50; /* Green */
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                -webkit-transition-duration: 0.4s; /* Safari */
                transition-duration: 0.4s;
            }

        </style>
    </head>
    <body>

        <header>
            <h1>Αρχική Σελίδα</h1>
        </header>

        <div class="container">
            <div class="sidebar">
                <a href="index.php" class="button">Αρχική Σελίδα</a>
                <a href="announcements.php" class="button">Ανακοινώσεις</a>
                <a href="communication.php" class="button">Επικοινωνία</a>
                <a href="documents.php" class="button">Έγραφα μαθήματος</a>
                <a href="homework.php" class="button">Εργασίες</a>     
            </div>
            <div class="main-border">
                <H2>Καλωσορίσατε στην ηλεκτρονική εκμάθηση βασικών εννοιών της τεχνητής νοημοσύνης!</H2>
               <div class="inner-text">
                    <H3>Κάποιες απο αυτές είναι:</H3>
                </div>
                <ul class="text-list">
                    <li><H4>Ορισμοί κατανόησης</H4></li>
                    <li><H4>Αλγόρυθμοι τυφλής αναζήτησης</H4></li>
                    <li><H4>Αλγόρυθμοι ευρετικής αναζήτησης</H4></li>
                    <li><H4>Λογική</H4></li>
                    <li><H4>Αναπαράσταση γνώσης</H4></li>
                </ul>
                <div class="inner-text">
                    <H3>Υπάρχουν διάφορες ενότητες στην ιστοσελίδα που θα σας βοηθήσουν να παρακολουθήσετε το μάθημα: </H3>
                 </div>
                <ul class="text-list">
                    <li><mark>Ανακοινώσεις</mark></li>
                    <br>
                    <li><mark>Επικοινωνία </mark>για οτιδήποτε θέλετε να ρωτήσετε</li>
                    <br>
                    <li><mark>Έγραφα μαθήματος</mark> που θα βρείτε διαφάνειες για το μάθημα</li>
                    <br>
                    <li><mark>Εργασίες</mark> που μπορείτε να εξασκηθείτε πάνω στις γνώσεις που λάβατε απο το μάθημα</li>
                    <br>
                </ul>
                <br>
                <img class="img-ai" src="images/ai-image.png">
                <form action="logout.php" method="post">
                    <button type="submit" class="login-but" name="log-out">Log out</button>
                </form>
                <?php
                    //visible edit users only for tutor and not students
                    if($_SESSION["Role"] === 'Tutor'){
                ?>
                <form action="editUser.php" method="post">
                    <button type="submit" class="login-but" name="edit-users">Edit Users</button>
                </form>
                <?php
                    }
                ?>
            </div>
        </div>
        
    </body>
</html>