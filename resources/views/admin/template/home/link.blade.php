
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
  
    <title>JRI Admin Panel</title>
  
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <!-- Google Font: Source Sans Pro -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <style>
     .icon{
      margin-left: -5px!important;
     } 
    .p-cont{
      margin-left: -2px!important;
     }
     .icon2{
      margin-left: 3px!important;
     } 
    .p-cont2{
      margin-left: 7px!important;
     }
     .btn-add{
        background-color: #419eaa!important;
        color: white;
        transition-duration: 0.6s!important;
        padding: 5px;
        padding-left: 5px;
        padding-right: 10px;
        border-radius: 5px;
        text-decoration: none!important;
     }
     .btn-add:hover{
        background-color: #fcc71f!important;
        transition-duration: 0.6s!important;
        color: #000!important;
     }
    /* .over{
      overflow: hidden;
    } */
    .btn-cyan{
       background-color: #419eaa!important;
       border-color: #419eaa!important;
       color:whitesmoke!important;
     }
     .color{
      color: #484242;
     }
     .searchbar-corner{
       margin-left: 75%;
     }
     .btn-delete{
      padding: 1px;
      padding-right: 5px;
      padding-left: 5px;
      border-radius: 5px;
      color: white!important;
      background-color: rgb(236, 16, 16)
     }
     .page-item.active .page-link {
    z-index: 3;
    color: #fcc71f;
    background-color: #419eaa;
    border-color: #419eaa;
     }

     .report-bt {
        
        font-size: 12px;
        cursor: pointer;
        -webkit-animation: report 1500ms infinite;
     }

     @-webkit-keyframes report {
  0% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; -webkit-box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
}

@-moz-keyframes report {
  0% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; -moz-box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
}

@-o-keyframes report {
  0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
}

@keyframes report {
  0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; box-shadow: 0 0 10px #FF0000; }
  100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
}
/* .bg{
  background-color: #0373f9;
  color: white;
  clip-path: polygon(0 0, 100% 0, 100% 100%, 29% 100%, 0 64%);


}
.profile{
  background-color: white;
  border-color: antiquewhite!important;
  box-shadow: 0vmin!important;
} */
.profile {
  border: 5px solid white!important;
  margin-top: -6rem;
  margin-bottom: 1rem;
  max-width: 9rem;
  margin-right: 20px;
}

.repeat-bt {
        
        font-size: 12px;
        cursor: pointer;
        -webkit-animation: glowing 1500ms infinite;
     }

     @-webkit-keyframes glowing {
  0% { background-color: #fff; -webkit-box-shadow: 0 0 3px #fff; }
  50% { border-color: #FF0000; color: #FF0000; -webkit-box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #fff; -webkit-box-shadow: 0 0 3px #fff; }
}

@-moz-keyframes glowing {
  0% { background-color: #fff; -moz-box-shadow: 0 0 3px #fff; }
  50% { border-color: #FF0000; color: #FF0000; -moz-box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #fff; -moz-box-shadow: 0 0 3px #fff; }
}

@-o-keyframes glowing {
  0% { background-color: #fff; box-shadow: 0 0 3px #fff; }
  50% { border-color: #FF0000; color: #FF0000; box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #fff; box-shadow: 0 0 3px #fff; }
}

@keyframes glowing {
  0% { background-color: #fff; box-shadow: 0 0 3px #fff; }
  50% { border-color: #FF0000; color: #FF0000; box-shadow: 0 0 10px #FF0000; }
  100% { background-color: #fff; box-shadow: 0 0 3px #fff; }
}
    </style>
  