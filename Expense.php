

<?php
$uzdb = mysqli_connect("localhost","root","","Kyewellimidde");
$fetch = "select * from expense";
$data = mysqli_query($uzdb,$fetch);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Kyewelimidde| Expense</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="d3.min.js"></script>
<script type="text/javascript" src="js/jquery-1.6.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/tms-0.3.js"></script>
<script type="text/javascript" src="js/tms_presets.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<style type="text/css">
  
  #customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    padding-top: 25px;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 15px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
<body id="page5">
<div class="body1">
  <div class="main">
    <!--header -->
    <header>
      <div class="wrapper">
        <h1><a href="index.html" id="logo">Kyewllimidde Farm Management</a></h1>
        <nav>
          <ul id="menu">
            <li ><a href="index.html">Home</a></li>
            <li ><a href="feeds.php">Feeding</a></li>
                      <li class="active"><a href="Expense.php">Expense</a></li>
            <li><a href="Register Expense.html">Add Expenditure</a></li>
            <li><a href="login.html">Logout</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- / header -->
    <!-- content -->
  </div>
</div>
<div class="body2">
  <div class="main">
    <article id="content2">
      <div class="wrapper">
        <div class="col1">
          <h2>Expence Details Of Batch</h2>
                <table id="customers" >
  <tr>
    <th>Category</th>
    <th>Item</th>
    <th>count</th>
    <th>unitcost</th>
    <th>Amount</th>
    <th>Method</th>
    <th>Status</th>
    <th>Description</th>
    <th>Date</th>
    <th>time</th>
  </tr>
  <?php 
  while($row = mysqli_fetch_array($data)){

echo "<tr>";
 echo "<td>".$row['category']."</td>";
  echo "<td>".$row['item']."</td>";
   echo "<td>".$row['count']."</td>";
      echo "<td>".$row['unitcost']."</td>";
    echo "<td>".$row['amount']."</td>";
    echo "<td>".$row['method']."</td>";
    echo "<td>".$row['status']."</td>";
   echo "<td>".$row['desc']."</td>";
   echo "<td>".$row['date']."</td>";
   echo "<td>".$row['id']."</td>";
echo "</tr>";

}
  ?>
  
</table>
        </div>
        

         
      
      </div>
    </article>
    <!-- / content -->
  </div>
</div>
<div class="main">
  <!-- footer -->
  <footer>
    <div class="wrapper">
      <section class="col2">
        <div class="wrapper">
          <section class="col4">
            <h3>Follow Us </h3>
            <ul id="icons">
              <li><a href="#"><img src="images/icon1.jpg" alt=""><span>Facebook</span></a></li>
              <li><a href="#"><img src="images/icon2.jpg" alt=""><span>Twitter</span></a></li>
              <li><a href="#"><img src="images/icon3.jpg" alt=""><span>Linked In</span></a></li>
            </ul>
          </section>
          <section class="col4 pad_left1">
            <h3>Navigation</h3>
            <ul id="why_us">
              <li><a href="Register Expense.html">New Expense </a></li>
              <li><a href="#">Expenditure report</a></li>
               <li ><a href="feeds.php">Feeding</a></li>
                <li ><a href="eggs.php">Eggs</a></li>
                 <li ><a href="sales.php">Sales</a></li>
              <li><a href="login.html">Logout </a></li>
            </ul>
          </section>
        </div>
        <div id="footer_link">Copyright &copy; <a href="#">Domain Name</a> All Rights Reserved<br>
          Design by <a target="_blank" href="#">Software Class</a></div>
      </section>
      <section class="col3 pad_left2">
        <h3>Email Us</h3>
        <form id="ContactForm" action="#">
          <div>
            <div class="wrapper"> <span>Your Name:</span>
              <div class="bg">
                <input type="text" class="input">
              </div>
            </div>
            <div class="wrapper"> <span>Your E-mail:</span>
              <div class="bg">
                <input type="text" class="input">
              </div>
            </div>
            <div class="textarea_box"> <span>Your Message:</span>
              <div class="bg2">
                <textarea name="textarea" cols="1" rows="1"></textarea>
              </div>
            </div>
            <a href="#">Submit</a> </div>
        </form>
      </section>
    </div>
    <!-- {%FOOTER_LINK} -->
  </footer>
  <!-- / footer -->
</div>
<script>
  
       var bardata = [];

       for (var i=0; i<50; i++){
            bardata.push(Math.round(Math.random()*30))
       }
       bardata.sort(function compareNumbers(a,b){
            return a-b;
       })
             
var margin = { top: 30, right: 30, bottom: 40, left: 50}

             var height = 400 - margin.top - margin.bottom,
                 width = 600 - margin.right - margin.left,
                 barWidth = 50,
                 barOffset = 5;

             var tempColor;

             var tooltip = d3.select('body').append('div')
                          .style('position', 'absolute')
                          .style('padding', '0 10px')
                          .style('background', 'white')
                          .style('opacity', 0)

             var yScale = d3.scale.linear()
                         .domain([0, d3.max(bardata)])
                         .range([0, height])

             var xScale = d3.scale.ordinal()
                         .domain(d3.range(0,bardata.length))
                         .rangeBands([0,width], .3)

             var color = d3.scale.linear()
                         .domain([0, bardata.length*.63, bardata.length])
                         .range(['#ffb832','#c61c6f','#d33682'])


             var myChart = d3.select('#chart').append('svg')
                         .style('background', '#e7e0cb')
                         .attr('width', width + margin.left + margin.right)
                         .attr('height', height + margin.top + margin.bottom)
                         .append('g')
                         .attr('transform','translate(' + margin.left+','+ margin.top + ')')
                         .selectAll('rect')
                         .data(bardata)
                         .enter()
                         .append('rect')

                          .style('fill', function(d,i){
                                 return color(i);
                             })
                         .attr('width', xScale.rangeBand())
                         .attr('x', function(d,i){
                                return xScale(i);
                             })
                         .attr('height', 0)
                         .attr('y', height)

                         .on('mouseover', function(d){

                             tooltip.transition()
                               .style('opacity', 0.9)
                             tooltip.html(d)
                                     .style('left', (d3.event.pageX - 35)+'px')
                                     .style('top', (d3.event.pageY - 40)+'px')


                         tempColor = this.style.fill;
                         d3.select(this)
                           .style('opacity', .5)
                           .style('fill', 'yellow')
                         })
                        .on('mouseout', function(d){
                          d3.select(this)
                               .style('opacity', 1)
                               .style('fill', tempColor)
                         })

                         myChart.transition()
                                .attr('height', function(d){
                                       return yScale(d);
                         })
                                .attr('y', function(d){
                                       return height - yScale(d);
                         })
                        .delay(function(d,i){
                                return i*20;
                         })
                        .duration(5000)
                        .ease('elastic')

            var vGuideScale = d3.scale.linear()
                              .domain([0, d3.max(bardata)])
                              .range([height, 0])

            var vAxis = d3.svg.axis()
                        .scale(vGuideScale)
                        .orient('left')
                        .ticks(10)

            var vGuide = d3.select('svg').append('g')
                vAxis(vGuide)

                vGuide.attr('transform','translate('+margin.left+',' + margin.top + ')')
                vGuide.selectAll('path')
                      .style({fill: 'none', stroke: '#000'})
                vGuide.selectAll('line')
                      .style({stroke: '#000'})

            var hAxis = d3.svg.axis()
                      .scale(xScale)
                      .orient('bottom')
                      .tickValues(xScale.domain().filter(function(d,i){
                           return !(i % (bardata.length/5));
                       }))

            var hGuide = d3.select('svg').append('g')
                        hAxis(hGuide)
                hGuide.attr('transform', 'translate('+margin.left+',' + (height + margin.top)                            + ')')
                hGuide.selectAll('path')
                      .style({fill: 'none', stroke: '#000'})
                hGuide.selectAll('line')
                      .style({stroke: '#000'})
 
</script>

</body>

</html>