<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript" language="javascript"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js" type="text/javascript" language="javascript"></script>
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />

    <script type="text/javascript" src="../js/jq.schedule.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css" />

<style>
        body {
          padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
        }
      </style>
      <script type="text/javascript">



      jQuery(document).ready(function(){
          var $sc = jQuery("#schedule").timeSchedule({
              startTime: "00:00", // schedule start time(HH:ii)
              endTime: "24:00",   // schedule end time(HH:ii)
              widthTime:60*10,  // cell timestamp example 10 minutes
              timeLineY:60,       // height(px)
              verticalScrollbar:20,   // scrollbar (px)
              timeLineBorder:2,   // border(top and bottom)
              bundleMoveWidth:6,  // width to move all schedules to the right of the clicked time line cell
              debug:"#debug",     // debug string output elements
              rows : {
                  '0' : {
                      title : 'Title Area',
                      schedule:[
                          {
                              start:'09:00',
                              end:'12:05',
                              text:'Text Area',
                              data:{
                              }
                          },
                          {
                              start:'11:00',
                              end:'14:00',
                              text:'Text Area',
                              data:{
                              }
                          }
                      ]
                  },
              
                  '1' : {
                      title : 'Title Area',
                      schedule:[
                          {
                              start:'09:00',
                              end:'12:05',
                              text:'Text Area',
                              data:{
                              }
                          },
                      ]
                  },  
                },

             


              change: function(node,data){
                  alert("change event");
              },
              init_data: function(node,data){
              },
              click: function(node,data){
                  alert("click event");
              },
              append: function(node,data){
              },
              time_click: function(time,data){
                  alert("time click event");
              },
          });
      });
      </script>
      


</head>
<body>

        <div style="padding: 0 0 40px;">
                <div id="schedule"></div>

        <div id="draggable">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/xbhCPt6PZIU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>        

    
</body>
</html>