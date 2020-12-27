<div>
    <table class="table table-sm table-dark">
        <thead>

          <tr >
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Age</th>
            <th scope="col">Gender</th>
            <th scope="col">Country</th>
            <th scope="col" style="width: 150px;">Crypted Password</th>
          </tr>

        </thead>
        <tbody>
            @foreach($users as $user)
          <tr >
            <th scope="row">{{$user->_id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->age}}</td>
            <td>{{$user->sexe}}</td>
            <td>{{$user->country}}</td>
            <td style="max-width:500px;word-wrap: break-word;" >{{$user->pwd}}</td>
          </tr>
          @endforeach
       

        </tbody>
      </table>
     
      <div class="row align-items-center" style="margin-top: 40px;">
        <div class="col align-items-center">
          <canvas id="AgesDiagramme" width="300" height="300"></canvas>  
        </div>
        
        <div class="col">
        <canvas id="CountriesdoughnutChart" width="300" height="300"></canvas>  
        </div>
        
        <div class="col">
        <canvas id="GenderDiagram" width="300" height="300"></canvas>  
        </div>
      </div>
 <!--Charts script-->
<script>
    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Lato';
        Chart.defaults.global.defaultFontSize = 18;
        Chart.defaults.global.defaultFontColor = '#777';
    
    <!--Age Diagramme-->
        let ctx1 = document.getElementById('AgesDiagramme').getContext('2d');   
        
        let TravellersDiagrammeChart = new Chart(ctx1, {
          type:'pie', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
          data:{
            labels:['Adulte(24+)', 'Jeune(14-24)', 'Enfant (0-14)'],
            datasets:[{
              label:'Population',
              data:[
                {{$adultesCount}},
                {{$jeunesCount}},
                {{$enfantCount}},
                      
              ],
              //backgroundColor:'green',
              backgroundColor:[
                'rgba(255, 99, 132, 0.6)',
                'rgba(54, 162, 235, 0.6)',
                'rgba(255, 206, 86, 0.6)',
                'rgba(75, 192, 192, 0.6)',
              ]
            }]
          },
          options:{
            title:{
              display:true,
              text:'Users Age Range (Pie Diagram) ',
              fontSize:20,
              fontColor:'#000'
            },
            legend:{
              display:true,
              position:'bottom',
              labels:{
                fontColor:'#000'
              }
            },
            layout:{
              padding:{
                left:0,
                right:0,
                bottom:0,
                top:0
              }
            },
            tooltips:{
              enabled:true
            },
            responsive: true,
            maintainAspectRatio: false,
          }
        }) ;

        <!--Countries  Diagramme-->
    let ctx4 = document.getElementById('CountriesdoughnutChart').getContext('2d');   
   
   let CountriesdoughnutChart = new Chart(ctx4, {
     type:'doughnut', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
     data:{
       labels:
       [
        @foreach($countries as $key=>$country)
        '{{$country[0]}}',
        @endforeach
           ] ,

       datasets:[{
         label:'',
         data:
         [
          @foreach($countriesOccu as $key=>$Occu)
        {{$Occu}},
        @endforeach
        ]
         ,
         backgroundColor:[
         
            @foreach($randomColors as $key=>$Color)
            '{{$Color}}' ,
            @endforeach
         
         ]
         
      
       }]
     },
     options:{
       title:{
         display:true,
         text:' Countries (Doughnut Diagram)',
         fontSize:20,
         fontColor:'#000'
       },
       
       legend:{
         display:true,
         position:'bottom',
         labels:{
           fontColor:'#000'
         }
       },
       layout:{
         padding:{
           left:0,
           right:0,
           bottom:0,
           top:0
         }
       },
       responsive: true,
       maintainAspectRatio: false,
     }
   }) ;
     
   <!--Age Diagramme-->
        let ctx2 = document.getElementById('GenderDiagram').getContext('2d');   
        
        let GenderChart = new Chart(ctx2, {
          type:'pie', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
          data:{
            labels:['Male','Female'],
            datasets:[{
              label:'Population',
              data:[
                {{$maleCount}},
                {{$femaleCount}}
              
                      
              ],
              //backgroundColor:'green',
              backgroundColor:[
                'rgba(54, 162, 235, 0.6)',
                'rgba(255, 99, 132, 0.6)',

              ]
            }]
          },
          options:{
            title:{
              display:true,
              text:'Users Age Range (Pie Diagram) ',
              fontSize:20,
              fontColor:'#000'
            },
            legend:{
              display:true,
              position:'bottom',
              labels:{
                fontColor:'#000'
              }
            },
            layout:{
              padding:{
                left:0,
                right:0,
                bottom:0,
                top:0
              }
            },
            tooltips:{
              enabled:true
            },
            responsive: true,
            maintainAspectRatio: false,
          }
        }) ;
    
             

       </script>
</div>
