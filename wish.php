<?php
include_once('conn.php');
$con = $GLOBALS['connection'];
if(isset($_GET['wishid'])){
    $wishid = $_GET['wishid'];
    $flagx = 0;
    $wish_array = array();
    $msg_array = array();
    $query = "SELECT * FROM wishes WHERE uid='$wishid'";
    $query_run = mysqli_query($con, $query);
    if($query_run){
        $flagx = 1;
    }
    $rowcount=mysqli_num_rows($query_run);
    if($rowcount==1){
        while($row = mysqli_fetch_assoc($query_run)){
            $wish_array = array(
                "default_msg" => $row['default_msg'],
                "custom_msg" => $row['custom_msg'],
                "wishname" => $row['wishname'],
                "name" => $row['name'],
                "template" => $row['template']
                );
        }
    }
        $msg_array["msg1"]= "Warm greetings to you and your loved ones on this auspicious occasion of Holi Festival!";
        $msg_array["msg2"]= "May your day be full of colours, happiness, laughter and smile. Wishing you a very Happy Holi!";
        $msg_array["msg3"]= "May God Spray Colors of Success, Prosperity and Health Over You and Your Family, and Fill Each Moment with Love and Happiness, Wish You All a Very Happy Holi";
        $msg_array["msg4"]= "Bright colors, water balloons, tasty gujiyas and melodious songs are the ingredients for a perfect Holi. Wish you and your family a very happy and colorful Holi ";
        $msg_array["msg5"]= "Let's celebrate life with colours and enthusiasm. May we be able to fill colours in the lives of others as well.";
        $msg_array["msg6"]= "This Holi, express your love with vibrant colors and make your day even more beautiful!!";
        $msg_array["msg9"]= "Auspicious red, sun-kissed gold, soothing silver, pretty purple, blissful blue, and forever green. I wish u and all family members the most colourful HOLI. Happy Holi!";
    if($wish_array['template']=='darkcolor'){
       
        $msg_array["msg7"]= "Neela, peela, hara, gulaabi yeh sab to ek bahaana hain \a
												hame to tumse milne aana hai \a
												Es Holi pe unhe rangne jaana hain.. \a
												Dil ne ek baar phir humara kahna mana hain \a";
        $msg_array["msg8"]= "Khaa key gujiya, \a

								pee key bhaang, \a

								laaga ke thoda thoda sa rang, \a

								baja ke dholak aur mridang, \a

								khele holi hum tere sang. \a

								HAPPY HOLI";
        
        $msg_array["msg10"]= "Sending you colourful blessings \a
							 on Holi. May you have \a
							a happy and contented life. \a
							🙏Happy holi 2022.🙏";
    }
    else{
        $msg_array["msg7"]= "Neela, peela, hara, gulaabi yeh sab to ek bahaana hain <br>
												hame to tumse milne aana hai <br>
												Es Holi pe unhe rangne jaana hain.. <br>
												Dil ne ek baar phir humara kahna mana hain <br>";
        $msg_array["msg8"]= "Khaa key gujiya, <br>

								pee key bhaang, <br>

								laaga ke thoda thoda sa rang, <br>

								baja ke dholak aur mridang, <br>

								khele holi hum tere sang. <br>

								HAPPY HOLI";
        
        $msg_array["msg10"]= "Sending you colourful blessings <br>
							 on Holi. May you have <br>
							a happy and contented life. <br>
							🙏Happy holi 2022.🙏";
    }
    if($flagx){
        include_once('content_func.php');
        if($wish_array['template']=='patterns'){
            displayPatterns($wish_array, $msg_array);
        }else if($wish_array['template']=='surprise'){
            displaySurprise($wish_array, $msg_array);
        }else if($wish_array['template']=='darkcolor'){
            displayDarkcolor($wish_array, $msg_array);
        }else if($wish_array['template']=='pixels'){
            displayPixels($wish_array, $msg_array);
        }else if($wish_array['template']=='snowfall'){
            displaySnowfall($wish_array, $msg_array);
        }else if($wish_array['template']=='tetris'){
            displayTetris($wish_array, $msg_array);
        }else if($wish_array['template']=='splash'){
            displaySplash($wish_array, $msg_array);
        }
    }else{
        echo "ERROR";
    }
    
}
?>