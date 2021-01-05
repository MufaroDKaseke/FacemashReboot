<?php 

function insertNewVote() {
    if (isset($_GET["process"]) and isset($_GET["currentVotes"]) and isset($_GET["profileVoted"])) {
        if ($_GET["process"] == "vote") {
            $currentVotes = $_GET["currentVotes"];
            $profileVoted = $_GET["profileVoted"];
            $newVotes = $currentVotes + 1;


            $sql = "UPDATE profiles SET currentVotes='" . $newVotes . "' WHERE id='" . $profileVoted . "';";
                                
            global $conn;

            if (mysqli_query($conn, $sql)) {
            } else { 
                echo "Invalid Profile : Might have been deleted or changed";
            }
        }
    }
}

function selectRandomProfiles() {

    global $conn;

    // Get Last Id
    $sql = "SELECT id FROM profiles ORDER BY id ASC";
    $result = mysqli_query($conn, $sql);
    $lastProfile = mysqli_num_rows($result);
    $lastProfile;

    // Get new profiles

    if (isset($_GET["firstProfile"]) and isset($_GET["secondProfile"])) {
        $firstProfile = $_GET["firstProfile"];
        $secondProfile = $_GET["secondProfile"];

        do {
            $newFirstProfile = random_int(1, $lastProfile);
            $newSecondProfile = random_int(1, $lastProfile);
        } while ($newFirstProfile == $newSecondProfile or ($newFirstProfile == $firstProfile or $newFirstProfile == $secondProfile) or ($newSecondProfile == $firstProfile or $newSecondProfile == $secondProfile));
    } else {
         do {
            $newFirstProfile = random_int(1, $lastProfile);
            $newSecondProfile = random_int(1, $lastProfile);
        } while ($newFirstProfile == $newSecondProfile);    
    }

    return array('newFirstProfile' => $newFirstProfile , 'newSecondProfile' => $newSecondProfile);
}


function getNewProfiles($firstProfile ,$secondProfile) {

    global $conn;

    $sql = "SELECT * FROM profiles WHERE ID='" . $firstProfile . "'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
        echo    '
                <div class="col-lg-4">
                    <div class="img-container d-flex justify-content-center align-items-center">
                        <img src="uploads/' . $row['picture'] . '" class="frst-img">
                            <div class="text-center d-flex justify-content-center align-items-center">
                                <div>
                                    <h2>' . $row['name'] . '</h2>
                                    <form method="get">
                                        <input type="hidden" name="process" value="vote">
                                        <input type="hidden" name="firstProfile" value="' . $firstProfile .'">
                                        <input type="hidden" name="secondProfile" value="' . $secondProfile .'">
                                        <input type="hidden" name="currentVotes" value="' . $row['currentVotes'] . '">
                                        <button type="submit" name="profileVoted" value="' . $firstProfile . '" class="btn vote-btn fa fa-heart-o"></button>
                                     </form>
                                </div>  
                            </div>
                    </div>
                </div>';
        }
    } else {
        echo "0 results";
    }

    echo    '<div class="col-1 text-center">
                <h1>OR</h1>
            </div>';
    
    $sql = "SELECT * FROM profiles WHERE ID='" . $secondProfile . "'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo '
                <div class="col-lg-4">
                    <div class="img-container d-flex justify-content-center align-items-center">
                        <img src="uploads/' . $row['picture'] . '" class="frst-img">
                            <div class="text-center d-flex justify-content-center align-items-center">
                                <div>
                                    <h2>' . $row['name'] . '</h2>
                                    <form method="get">
                                        <input type="hidden" name="process" value="vote">
                                        <input type="hidden" name="firstProfile" value="' . $firstProfile .'">
                                        <input type="hidden" name="secondProfile" value="' . $secondProfile .'">
                                        <input type="hidden" name="currentVotes" value="' . $row['currentVotes'] . '">
                                        <button type="submit" name="profileVoted" value="' . $secondProfile . '" class="btn vote-btn fa fa-heart-o"></button>
                                    </form>
                                </div>  
                            </div>
                    </div>
                </div>';
        }
    } else {
        echo "0 results";
    }
}

function checkConnection() {
    global $conn;
    // Check connection
    if (!$conn) {
        die("Error: " . mysqli_connect_error());
    }
}

    
    
 ?>