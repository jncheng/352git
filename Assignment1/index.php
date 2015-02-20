
<!DOCTYPE html PUBLIC>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Vancouver Canucks Fantasy League</title>
    <!-- Variables for website management and display -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/grid.css">

  </head>
  
  <body>

    <header id="top">
    <!-- navigation bar -->

      <nav class="grid">
        <div class="col-3">     
            <a href="#members" class="josh">Members</a>
        </div>    
        <div class="col-3">
            <a href="#players" class="josh">Players</a>
        </div>
        <div class="col-3">
            <a href="#stats" class="josh">Stats</a>
        </div>
      <!-- redirect to register page -->

        <div class="col-3">
            <a href="register.php" class="josh">Register</a>
        </div> 
 
      </nav>

    </header>


        <!-- beginning of data blocks -->

    <div class="grid">

       <div class="col-2">

                <!-- member details -->

            <article id="members">
                <?
                          /* load member details */

                $array=array();
                $lines=file("members.txt");
                $i=0;

                ?>

                    <!-- sort data -->

                <table>
                    <tr>
                        <th><a href="index.php"> Member</a> | </th>
                        <th><a href="sortPlayer.php">Favorite Player</a> | </th>
                        <th><a href="sortTeam.php">Favorite Team</a>  </th>
                    </tr>

                </table>     
                <?
                    /* organize and sort Array */
                    foreach ($lines as $line)
                    {
                        list($user, $email, $player, $team)=explode("|",$line);
                        $cl= "$user $email $player $team";
                        $array[$i]=$cl;
                        $i++;
                     }
                    asort($array);

                    foreach ($array as $line)
                    {
                    //match to $cl
                    list($user, $email, $player, $team) = explode(" ", $line);


                    //display order
                    echo "


                    <table border ='1'  cellspacing='5' cellpadding='5'>

                    <tr><td width='20%'><a href='userdetails.php?field1=$user'>$user</a></td>  <td width='200px'>$player</td> <td width='200px'>$team</td></tr>\n <br>

                    </table>
                    ";
                    }

                ?>

             
            </article>

        </div>  
    
        <div class="col-2">

              <!-- filler data -->

            <article id="players">

              <h2>Players</h2>
              <div class="roster">
                <img src="images/canuckroster.png" alt="The official HTML5 Icon">

              </div>
            </article>

        </div>  

        <div class="col-2">
                <!-- filler data -->

            <article id="stats">

              <h2>Stats</h2>

              <figure>
               
                <figcaption>Lorem ipsum dolor sit</figcaption>
              </figure>

              <ul>
                <li><em>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></li>
                <li>Aliquam tincidunt mauris eu risus.</li>
              </ul>

              <p>Cras in mi at felis aliquet congue.</a> Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien.</p>

            </article>

        </div>

     

            
    </div>
    
    
  </body>
  
</html>

