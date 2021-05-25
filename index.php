<?php

$num= rand(0,5);


switch ($num) {
    case 0:
        $teste =['video1.mp4',
        'video2.mp4',
        'video3.mp4'];
        break;
    case 1:
        $teste =['video1.mp4',
        'video3.mp4',
        'video2.mp4'];
        break;
    case 2:
        $teste =['video2.mp4',
        'video1.mp4',
        'video3.mp4'];
        break;
    case 3:
        $teste =['video2.mp4',
        'video3.mp4',
        'video1.mp4'];
        break;
    case 4:
        $teste =['video3.mp4',
        'video1.mp4',
        'video2.mp4'];
        break;
    case 5:
        $teste =['video3.mp4',
        'video2.mp4',
        'video1.mp4'];
        break;
     default:
       echo "Erro a sortear // error "; die();
}

?>


<html>
<head>
    <title>Visualização Random de vido</title>
</head>
<body onload="onload();">
	<h3>Visualização Random de video </h3>
	<h4>Random video view </h4>
	<p><b>Ordem do video / Video Order:</b><?php print_r($teste); ?> </p>
    <video id="idle_video" width="1280" height="720" type="video/mp4" onended="onVideoEnded();" controls preload="none"  ></video>

    <script>
        var video_list      = <?php echo json_encode($teste); ?> ;
        var video_index     = 0;
        var video_player    = null;

        function onload(){
            console.log("body loaded");
            video_player        = document.getElementById("idle_video");
            video_player.setAttribute("src", video_list[video_index]);
        }

        function onVideoEnded(){
            console.log("video ended");
            if(video_index <= video_list.length - 1){
                video_index++;
            }
            else{
                video_index = 0;
            }
            if(video_index == video_list.length){
                video_player.stop();
            }else{
            video_player.setAttribute("src", video_list[video_index]);
            video_player.play();
            }
        }
    </script>
</body>


